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
               'id_number' => 'AlphaNum',
               'mobile_number' => 'AlphaNum',
               'email' => 'email',
               'bank_acount' => 'AlphaNum',
               'telephone_number' => 'AlphaNum',
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
        if($result->status != 'error'){
            return redirect('property_owner/index')->with('status','لقد تم حفظ المالك');  
        }else{
            return redirect('property_owner/index')->with('status','لم يتم حفظ المالك الرجاء المحاولة مرة اخرى');  
        }
        
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
        $result = frappe_insert('property_owner',$data)->data;
        
        return $result->name;
    }


    public function edit($name)
    {
        
        $property_owner = frappe_get_data('property_owner',$name)->data;
        
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
        if($result != 'error'){
            return redirect()->back()->with('status','لقد تم تحديث المالك');  
        }else{
            return redirect()->back()->with('status','لم يتم تحديث المالك الرجاء المحاولة مرة اخرى');  
        }
        
    }

    public function index()
    {

       $result = frappe_get_data('property_owner','?fields=["name","first_name","last_name","email"]')->data;
       
       
       return view('ar.property_owner.index',compact('result'));

    }

    public function set_index(Request $request)
    { 

      $filters = array();


      if($request->has('owner_name')){
        $filters['owner_name'] = '["property_owner","full_name","=","'.$request->get('owner_name').'"]';
      }

      $f_ = refactor_filter($filters);

      $result = frappe_get_data('property_owner','?fields=["name","full_name","email"]&filters=['.$f_.']');
      
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
