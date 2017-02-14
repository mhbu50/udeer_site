<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Validator;

class Property_ownerController extends Controller
{
    public function create()
    {
        return view('ar.property_owner.create');
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
               'first_name' => 'required|AlphaNum',
               'second_name' => 'required|AlphaNum',
               'third_name' => 'required|AlphaNum',
               'last_name' => 'required|AlphaNum',
               'id_number' => 'numeric',
               'mobile_number' => 'numeric',
               'email' => 'email',
               'bank_acount' => 'AlphaNum',
               'telephone_number' => 'numeric',
               'fax' => 'AlphaNum',
                
            ]);

            if ($validator->fails()) {
                return redirect()->back()
                        ->withErrors($validator)
                        ->withInput();
                
        }
        $data = $request->all();
        unset($data["_token"]);
        $result = frappe_insert('property_owner',$data);
        return redirect('property_owner/index');
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
        $result = frappe_insert('property_owner',$data);
        $result = json_decode($result)->data;
        return $result->name;
    }


    public function edit($name)
    {
        
        $resultObj = frappe_get_data('property_owner',$name);
        $property_owner = json_decode($resultObj)->data;
        return view('ar.property_owner.edit',compact('property_owner'));

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
        
        $result = frappe_update('property_owner',$name,$data);
        
        return redirect()->back();
    }

    public function index()
    {

       $resultObj = frappe_get_data('property_owner','?fields=["name","full_name","email"]');
       $result = json_decode($resultObj)->data;
       
       return view('ar.property_owner.index',compact('result'));

    }

    public function set_index(Request $request)
    { 

      $filters = array();


      if($request->has('owner_name')){
        $filters['owner_name'] = '["property_owner","full_name","=","'.$request->get('owner_name').'"]';
      }

      $f_ = refactor_filter($filters);

      $resultObj = frappe_get_data('property_owner','?fields=["name","full_name","email"]&filters=['.$f_.']');
      $result = json_decode($resultObj)->data;
      return view('ar.property_owner.index',compact('result'));

    }

    
    public function delete_array(Request $request)
    {
        $pids = json_decode($request->get('names'));
        foreach ($pids as $property_name) {
            $resultObj = frappe_delete('property_owner',$property_name);
        }
        return redirect('property_owner/index');
    }

    public function delete($name)
    {

        $resultObj = frappe_delete('property_owner',$name);
        return redirect('property_owner/index');
    }
}
