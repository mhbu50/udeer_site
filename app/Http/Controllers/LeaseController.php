<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Validator;

use Cookie;

class LeaseController extends Controller
{
    public function create()
    {
        $properties = frappe_get_data('property','?fields=["name"]');
     
        $property_units = frappe_get_data('property%20unit','?fields=["name"]');
       
        $terms_d = frappe_get_data('Terms%20and%20Conditions','?fields=["title","terms"]');
   
        foreach ($terms_d as $term) {
            $terms[$term->title] = $term->terms;
        }
        return view('ar.lease.create',compact('properties','property_units','terms'));
    }

    public function test($name)
    {

        return frappe_late_payment($name);
    }


    

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
                'property' => 'required|AlphaNum',
                'property_unit' => 'required|AlphaNum',
                'date' => 'date|date_format:Y-m-d',
                'renter' => 'required|AlphaNum',
                'lease_doc' => 'AlphaNum',
                'lease_writing_date' => 'date|date_format:Y-m-d',
                'expiry_date' => 'date|date_format:Y-m-d|after:today',
                'lease_duration' => 'numeric|Min:1|Max:20',
                'rent_starting_date' => 'date|date_format:Y-m-d',
                 
                
            ]);

            if ($validator->fails()) {
                return redirect()->back()
                        ->withErrors($validator)
                        ->withInput();
                
        }
        $data = $request->all();
        unset($data["_token"]);
        $result = frappe_insert('lease',$data);
       return redirect('lease/index');
    }


    


    public function store_ajax(Request $request)
    {
        $validator = Validator::make($request->all(), [
                
            ]);

            if ($validator->fails()) {
                return 'error';
                
        }
        $data = $request->all();
        unset($data["_token"]);
        $result = frappe_insert('lease',$data);
        
        return $result->name;
    }


    public function edit($name,Request $request)
    {
       
        $lease = frappe_get_data('lease',$name);
        // $data['user'] = frappe_get_data('User',$_COOKIE['user_id']);
        $data['user'] = frappe_get_data('User','Administrator');
        $data['company'] = frappe_get_company();
        $data['renter'] = frappe_get_data('Customer',$lease->renter);
        $data['property'] = frappe_get_data('property',$lease->property);
        $data['property_unit'] = frappe_get_data('property%20unit',$lease->property_unit);
        $data['owner'] = frappe_get_data('property_owner',$data['property']->owner_name);
        return view('ar.lease.edit',compact('lease','data'));

    }

    public function update(Request $request,$name)
    {
        $validator = Validator::make($request->all(), [
            ]);

            if ($validator->fails()) {
                return redirect()->back()
                        ->withErrors($validator)
                        ->withInput();
                
        }
        $data = $request->all();
        unset($data["_token"]);
        
        $result = frappe_update('lease',$name,$data);
        
        return redirect()->back();
    }

    public function index()
    {

       $result = frappe_get_data('lease','?fields=["name","property","property_unit","expiry_date"]');

       
       return view('ar.lease.index',compact('result'));

    }

     public function set_index(Request $request)
    { 

      $filters = array();


      if($request->has('lease_number')){
        $filters['lease_number'] = '["lease","name","=","'.$request->get('lease_number').'"]';
      }
      if($request->has('validation')){
        switch ($request->get('validation')) {
            case 'valid':
                $filters['validation'] = '["lease","active","=","0"]';
                break;
            case 'expired':
                $filters['validation'] = '["lease","active","=","1"]';
                break;    
        }
      }
      if($request->has('ex_date')){
        $filters['ex_date'] = '["lease","expiry_date","<","'.$request->get('ex_date').'"]';
      }
      



      $f_ = refactor_filter($filters);

      $result = frappe_get_data('lease','?fields=["name","property","property_unit","expiry_date"]&filters=['.$f_.']');

      return view('ar.lease.index',compact('result'));

    }

    public function delete_array(Request $request)
    {
        
        foreach ($pids as $property_name) {
            $result = frappe_delete('lease',$property_name);
        }
        return redirect()->back();
    }

    public function delete($name)
    {

        $result = frappe_delete('lease',$name);
        return redirect('lease/index');
    }
}
