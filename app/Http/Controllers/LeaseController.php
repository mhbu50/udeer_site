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
        $properties = frappe_get_data('property','?fields=["name"]')->data;
     
        $property_units = frappe_get_data('property%20unit','?fields=["name"]')->data;
       
        $terms_d = frappe_get_data('Terms%20and%20Conditions','?fields=["title","terms"]')->data;
   
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
        

        $lease_data = $request->except(['_token','instalment_amount','due_date']);
        $instalments['amount'] = $request->get('instalment_amount');
        $instalments['due_date'] = $request->get('due_date');
        $anual_rent = frappe_get_data('property%20unit',$request->get('property_unit') )->data->annual_rent_amount;
        if(array_sum($instalments['amount']) == $anual_rent){
            $result_lease = frappe_insert('lease',$lease_data);
            if($result_lease->status != 'error'){
                // adding instalments

                for($counter = 0 ; $counter < count($instalments['amount']); $counter++) {
                    $instalment_data['number'] = $counter+1;
                    $instalment_data['lease'] = $result_lease->data->name;
                    $instalment_data['amount'] = $instalments["amount"][$counter];
                    $instalment_data['due_date'] = $instalments["due_date"][$counter];
                    $result_instalment = frappe_insert('lease_instalment',$instalment_data);
                }
                // 
                return redirect('lease/index')->with('status','لقد تم حفظ العقد');  
            }else{
                return redirect('lease/index')->with('status','لم يتم حفظ العقد الرجاء المحاولة مرة اخرى');  
            }
        }else{
            return redirect()->back()->with('status','مجموع الايجار غير صحيح');
        }    
      
    }


    


    public function store_ajax(Request $request)
    {
        
        $data = $request->all();
        unset($data["_token"]);
        $result = frappe_insert('lease',$data)->data;
        
        return $result->name;
    }


    public function edit($name,Request $request)
    {
       
        $lease = frappe_get_data('lease',$name)->data;
        // $data['user'] = frappe_get_data('User',$_COOKIE['user_id']);
        $data['user'] = frappe_get_data('User','Administrator')->data;
        $data['company'] = frappe_get_company();
        $data['renter'] = frappe_get_data('Customer',$lease->renter)->data;
        $data['property'] = frappe_get_data('property',$lease->property)->data;
        $data['property_unit'] = frappe_get_data('property%20unit',$lease->property_unit)->data;
        $data['owner'] = frappe_get_data('property_owner',$data['property']->owner_name)->data;
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
        if($result != 'error'){
            return redirect()->back()->with('status','لقد تم تحديث العقد');  
        }else{
            return redirect()->back()->with('status','لم يتم تحديث العقد الرجاء المحاولة مرة اخرى');  
        }
        
    }

    public function index()
    {

       $result = frappe_get_data('lease','?fields=["name","property","property_unit","expiry_date"]')->data;

       
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

    public function instalment_index($lease_name){
        $result = frappe_get_data('lease_instalment','?fields=["name","number","amount","status","due_date","payment_date","receiver","payment_method"]&filters=[["lease_instalment","lease","=","'.$lease_name.'"]]&order_by=number');
        if($result->status != 'error'){
            return view('ar.lease.instalment_index',['lease_name'=>$lease_name,'result' => $result->data]);  
        }else{
            return redirect()->back()->with('status','لقد حصل مشكلة الرجاء المحاولة مرة اخرى');  
        }
        
    }

    public function instalment_show($lease,$instalment){
        $result = frappe_get_data('lease_instalment',$instalment);
        if($result->status != 'error'){
            return view('ar.lease.instalment_show',['instalment' => $result->data,'lease_name' => $lease]);  
        }else{
            return redirect()->back()->with('status','لقد حصل مشكلة الرجاء المحاولة مرة اخرى');  
        }
        
    }

    public function instalment_update($lease,$instalment,Request $request){
        $data = $request->all();
        unset($data["_token"]);
        
        $result = frappe_update('lease_instalment',$instalment,$data);
        if($result != 'error'){
            return redirect()->action('LeaseController@instalment_index',$lease)->with('status','لقد تم تحديث العقد');  
        }else{
            return redirect()->back()->with('status','لم يتم تحديث العقد الرجاء المحاولة مرة اخرى');  
        }
        
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
