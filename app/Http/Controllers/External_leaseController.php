<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Validator;

class External_leaseController extends Controller
{
    public function create()
    {
        $terms_d = frappe_get_data('Terms%20and%20Conditions','?fields=["title","terms"]');
        
        foreach ($terms_d as $term) {
            $terms[$term->title] = $term->terms;
        }
        return view('ar.external_lease.create',compact('terms'));
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
        $result = frappe_insert('external_lease',$data);

        if($result != 'error'){
            return redirect('external_lease/index')->with('status','لقد تم حفظ العقد');  
        }else{
            return redirect('external_lease/index')->with('status','لم يتم حفظ العقد الرجاء المحاولة مرة اخرى');  
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
        $result = frappe_insert('external_lease',$data);
        
        return $result->name;
    }


    public function edit($name)
    {
        
        $external_lease = frappe_get_data('external_lease',$name);
        $data['user'] = frappe_get_data('User','Administrator');
        $data['company'] = frappe_get_company();
        return view('ar.external_lease.edit',compact('external_lease','data'));

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
        
        $result = frappe_update('external_lease',$name,$data);

        if($result != 'error'){
            return redirect()->back()->with('status','لقد تم تحديث العقد');  
        }else{
            return redirect()->back()->with('status','لم يتم تحديث العقد الرجاء المحاولة مرة اخرى');  
        }
        
    }

    public function index()
    {

       $result = frappe_get_data('external_lease','?fields=["name","buyer_name","seller_name","lease_start_day"]');
      
       // var_dump($result);

       return view('ar.external_lease.index',compact('result'));

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

        $resultObj = frappe_delete('external_lease',$name);
        return redirect('external_lease/index');
    }
}
