<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Validator;

class LeaseController extends Controller
{
    public function create()
    {
        $properties = frappe_get_data('property','?fields=["name"]');
        $properties = json_decode($properties)->data;
        $property_units = frappe_get_data('property%20unit','?fields=["name"]');
        $property_units = json_decode($property_units)->data;
        return view('ar.lease.create',compact('properties','property_units'));
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
                'property' => 'required|AlphaNum',
                'property_unit' => 'required|AlphaNum',
                'date' => 'date|date_format:Y-m-d',
                'renter' => 'required|AlphaNum',
                'lease_doc' => 'required|AlphaNum',
                'lease_writing_date' => 'date|date_format:Y-m-d',
                'expiry_date' => 'date|date_format:Y-m-d|after:today',
                'lease_duration' => 'numeric|Min:1|Max:20',
                'rent_starting_date' => 'date|date_format:Y-m-d|after:today',
                 
                
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
        $result = json_decode($result)->data;
        return $result->name;
    }


    public function edit($name)
    {
       
        $resultObj = frappe_get_data('lease',$name);
        $lease = json_decode($resultObj)->data;
        return view('ar.lease.edit',compact('lease'));

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

       $resultObj = frappe_get_data('lease','?fields=["name","property","property_unit","expiry_date"]');
       $result = json_decode($resultObj)->data;
       
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

      $resultObj = frappe_get_data('lease','?fields=["name","property","property_unit","expiry_date"]&filters=['.$f_.']');
      $result = json_decode($resultObj)->data;
      return view('ar.lease.index',compact('result'));

    }

    public function delete_array(Request $request)
    {
        $pids = json_decode($request->get('names'));
        foreach ($pids as $property_name) {
            $resultObj = frappe_delete('lease',$property_name);
        }
        return redirect('lease/index');
    }

    public function delete($name)
    {

        $resultObj = frappe_delete('lease',$name);
        return redirect('lease/index');
    }
}
