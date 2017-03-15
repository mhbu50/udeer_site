<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Validator;

class Property_management_contractController extends Controller
{
    public function create()
    {
        $terms_d = frappe_get_data('Terms%20and%20Conditions','?fields=["title","terms"]')->data;
        foreach ($terms_d as $term) {
            $terms[$term->title] = $term->terms;
        }
        
        return view('ar.property_management_contract.create',compact('terms'));
    }

    public function store(Request $request)
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
        $result = frappe_insert('property_management_contract',$data);
        if($result->status != 'error'){
            return redirect('property_management_contract/index')->with('status','لقد تم حفظ العقد');  
        }else{
            return redirect('property_management_contract/index')->with('status','لم يتم حفظ العقد الرجاء المحاولة مرة اخرى');  
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
        $result = frappe_insert('property_management_contract',$data);
        
        return $result->name;
    }


    public function edit($name)
    {
        
        $property_management_contract = frappe_get_data('property_management_contract',$name)->data;
        $data['user'] = frappe_get_data('User','Administrator')->data;
        $data['company'] = frappe_get_company();
        
        $data['property'] = frappe_get_data('property',$property_management_contract->property)->data;
        $data['owner'] = frappe_get_data('property_owner',$data['property']->owner_name)->data;
    
        return view('ar.property_management_contract.edit',compact('property_management_contract','data'));

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
        
        $result = frappe_update('property_management_contract',$name,$data);
        if($result->status != 'error'){
            return redirect()->back()->with('status','لقد تم تحديث العقد');  
        }else{
            return redirect()->back()->with('status','لم يتم تحديث العقد الرجاء المحاولة مرة اخرى');  
        }
       
    }

    public function index()
    {

       $result = frappe_get_data('property_management_contract','?fields=["name","property","signature_date"]')->data;
       
       // var_dump($result);

       return view('ar.property_management_contract.index',compact('result'));

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

    
    
    public function delete($name)
    {

        $resultObj = frappe_delete('property_management_contract',$name);
        return redirect('property_management_contract/index');
    }
}
