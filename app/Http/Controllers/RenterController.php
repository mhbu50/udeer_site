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
        // $validator = Validator::make($request->all(), [

               
                
        //     ]);

        //     if ($validator->fails()) {
        //         return redirect()->back()
        //                 ->withErrors($validator)
        //                 ->withInput();
                
        // }
        $data = $request->all();
        unset($data["_token"]);
        $data["customer_group"] = "Commercial";
        $data["customer_name"] = implode(' ',$request->only('first_name','second_name','third_name','last_name'));
        $result = frappe_insert('Customer',$data);
        if($result->status != 'error'){
            return redirect('/renter/index')->with('status','لقد تم حفظ المستاجر');  
        }else{
            return redirect('/renter/index')->with('status','لم يتم حفظ المستاجر الرجاء المحاولة مرة اخرى');  
        }
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

        if($result->status == 'error'){
            return 'error';  
        }else{
            return json_encode($result->data); 
        }
        
    }


    public function edit($name)
    {
       
        $renter = frappe_get_data('Customer',$name)->data;
        
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
         if($result->status != 'error'){
            return redirect()->back()->with('status','لقد تم تحديث المستاجر');  
        }else{
            return redirect()->back()->with('status','لم يتم تحديث المستاجر الرجاء المحاولة مرة اخرى');  
        }
        
    }

    public function index()
    {

       $result = frappe_get_data_index('Customer','?fields=["name","first_name","last_name","email"]')->data;
      
       
       return view('ar.renter.index',compact('result'));

    }

    public function set_index(Request $request)
    { 

      $filters = array();


      if($request->has('name')){
        $filters['property_name'] = '["Customer","name","=","'.$request->get('name').'"]';
      }
      

      $f_ = refactor_filter($filters);

      $result = frappe_get_data('Customer','?fields=["name","customer_name","email"]&filters=['.$f_.']');
      
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
