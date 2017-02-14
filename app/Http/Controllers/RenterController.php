<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Validator;

class RenterController extends Controller
{
    public function create()
    {
        return view('ar.renter.create');
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [

               'customer_name' => 'required|Min:3|Max:80|AlphaNum',
               'id_number' => 'numeric|Min:1|Max:20',
               'mobile_number'=> 'numeric|Min:1|Max:20',
               'email'=> 'email|Min:3|Max:80|AlphaNum',
               'bank' => 'Min:3|Max:80|AlphaNum',
               'bank_account_number' => 'Min:3|Max:80|AlphaNum',
               'telephone_number' => 'numeric|Min:1|Max:20',
               'territory' => 'Min:3|Max:80|AlphaNum',
               'customer_type' => 'in:Individual,Company',
               'address' => 'Min:3|Max:300|AlphaNum',
                
            ]);

            if ($validator->fails()) {
                return redirect()->back()
                        ->withErrors($validator)
                        ->withInput();
                
        }
        $data = $request->all();
        unset($data["_token"]);
        $data["customer_group"] = "Commercial";
        $result = frappe_insert('Customer',$data);
       return redirect('renter/index');
    }

    public function store_ajax(Request $request)
    {
        $validator = Validator::make($request->all(), [
                'customer_name' => 'required',
            ]);

            if ($validator->fails()) {
                return 'error';
                
        }
        $data = $request->all();
        unset($data["_token"]);
        $data["customer_group"] = "Commercial";
        $result = frappe_insert('Customer',$data);
        $result = json_decode($result)->data;
        return $result->name;
    }


    public function edit($name)
    {
       
        $resultObj = frappe_get_data('Customer',$name);
        $renter = json_decode($resultObj)->data;
        return view('ar.renter.edit',compact('renter'));

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
        
        $result = frappe_update('Customer',$name,$data);
        
        return redirect()->back();
    }

    public function index()
    {

       $resultObj = frappe_get_data('Customer','?fields=["name","customer_name","email"]');
       $result = json_decode($resultObj)->data;
       
       return view('ar.renter.index',compact('result'));

    }

    public function set_index(Request $request)
    { 

      $filters = array();


      if($request->has('name')){
        $filters['property_name'] = '["Customer","name","=","'.$request->get('name').'"]';
      }
      

      $f_ = refactor_filter($filters);

      $resultObj = frappe_get_data('Customer','?fields=["name","customer_name","email"]&filters=['.$f_.']');
      $result = json_decode($resultObj)->data;
      return view('ar.renter.index',compact('result'));

    }

    public function delete_array(Request $request)
    {
        $pids = json_decode($request->get('names'));
        foreach ($pids as $property_name) {
            $resultObj = frappe_delete('Customer',$property_name);
        }
        return redirect('renter/index');
    }

    public function delete($name)
    {

        $resultObj = frappe_delete('Customer',$name);
        return redirect('renter/index');
    }
}
