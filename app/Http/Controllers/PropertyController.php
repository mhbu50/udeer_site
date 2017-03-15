<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Validator;

class PropertyController extends Controller
{   

    public function test($property_name)
    {

        return frappe_late_payment_p($property_name);
    }
 
    public function create()
    {
  
        return view('ar.property.create');
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
                'property_name' => 'required',
                // 'property_type' => 'AlphaNum',
                'construction_date' => 'date|before:today',
                // 'evaluation' => 'AlphaNum',
                // 'city' => 'AlphaNum',
                // 'address' => 'AlphaNum',
                // 'property_advantage' => 'AlphaNum',
                // 'owner_name' => 'AlphaNum',
                'property_number' => 'numeric',
                'instrument_number' => 'numeric',
                'instrument_date' => 'date|before:today',
                
            ]);

            if ($validator->fails()) {
                return redirect()->back()
                        ->withErrors($validator)
                        ->withInput();
                
        }
        $data = $request->all();
        unset($data["_token"]);
        $result = frappe_insert('property',$data);
        
        if($result->status != 'error'){
            return redirect('property/index')->with('status','لقد تم حفظ العقار');  
        }else{
            return redirect('property/index')->with('status','لم يتم حفظ العقار الرجاء المحاولة مرة اخرى ');  
        }
        
    }

    public function store_ajax(Request $request)
    {
        $validator = Validator::make($request->all(), [
                'property_name' => 'required',
                
            ]);

            if ($validator->fails()) {
                return 'error';
                
        }
        $data = $request->all();
        unset($data["_token"]);
        $result = frappe_insert('property',$data)->data;
       
        
        return $result->name;
    }

    public function edit($property_name)
    {
       
        $property = frappe_get_data('property',$property_name)->data;
        

        
        return view('ar.property.edit',compact('property','property_name'));

    }

    public function update(Request $request,$property_name)
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
        
        $result = frappe_update('property',$property_name,$data);
        if($result->status != 'error'){
            return redirect()->back()->with('status','لقد تم تحديث العقار');  
        }else{
            return redirect()->back()->with('status','لم يتم تحديث العقار الرجاء المحاولة مرة اخرى');  
        }
        
    }

    public function show($property_name)
    {

       $property = frappe_get_data('property',$property_name);

        // $property_units = frappe_get_data('property',$name);
        // $leases = frappe_get_data('property',$name);

        
        return view('ar.property.show',compact('property','property_name'));

    }

    public function set_index(Request $request)
    { 

      $filters = array();


      if($request->has('name')){
        $filters['property_name'] = '["property","property_name","=","'.$request->get('name').'"]';
      }
      if($request->has('city')){
        $filters['city'] = '["property","city","=","'.$request->get('city').'"]';
      }

      $f_ = refactor_filter($filters);

      $result = frappe_get_data('property','?fields=["name","owner","property_name"]&filters=['.$f_.']');
      
      return view('ar.property.index',compact('result'));

    }

    public function index()
    {

       $result = frappe_get_data('property','?fields=["name","owner","property_name"]')->data;
       
       
       return view('ar.property.index',compact('result'));


    }


    public function lease_index($property_name)
    {

       $result = frappe_get_data('lease','?fields=["name","date","property_unit","lease_signature_date"]&filters=[["lease","property","=","'.$property_name.'"]]')->data;
      
       return view('ar.property.lease_index',compact('result','property_name'));
       

    }

    public function unit_index($property_name)
    {

       $result = frappe_get_data('property%20unit','?fields=["name","unit_number"]&filters=[["property%20unit","property","=","'.$property_name.'"]]')->data;
       
       
       return view('ar.property.unit_index',compact('result','property_name'));
       
    }

    public function expense_index($property_name)
    {
       $result = frappe_get_data('property_expense','?fields=["name","date","amount","property_unit","Supplier","invoice_number"]&filters=[["property_expense","property","=","'.$property_name.'"]]')->data;
       
       
       return view('ar.property.property_expense_index',compact('result','property_name'));
    }


    
    public function financial_movements($property_name)
    {
        $result = array();
        $leases = frappe_get_data('lease','?filters=[["lease","property","=","'.$property_name.'"]]')->data;
        
        foreach ($leases as $lease) {
           $lease_rent_payments = frappe_get_data('Lease%20rent%20payment','?fields=["name","amount","renter","lease"]&filters=[["Lease%20rent%20payment","lease","=","'.$lease->name.'"]]')->data;
           
           array_push($result,$lease_rent_payments);
          
        }
        return view('ar.property.financial_movements',compact('result','property_name'));
    }
       

    public function comments($property_name)
    { 
        $result = frappe_get_data('Communication','?fields=["name","creation","user","content"]&filters=[["Communication","reference_doctype","=","property"],["Communication","communication_type","=","Communication"],["Communication","reference_name","=","'.$property_name.'"]]')->data;
        
        // var_dump($result);
        return view('ar.property.comments',compact('result','property_name'));
    }


    public function docs_index($property_name)
    { 

        $result = frappe_get_data('File','?fields=["name","file_name","file_url","creation"]&filters=[["File","attached_to_name","=","'.$property_name.'"],["File","attached_to_doctype","=","property"]]')->data;
        
        return view('ar.property.docs',compact('result','property_name'));
        
        
    }   

    public function create_unit($property_name){
        $unit = frappe_get_data('property%20unit','?fields=["name","creation","unit_number"]&filters=[["property%20unit","property","=","'.$property_name.'"]]')->data;
        $last_unit_number = isset($unit[0]->unit_number) ? $unit[0]->unit_number : 0 ;
        // var_dump($last_unit_number);

        return view('ar.property.create_unit',compact('property_name','last_unit_number'));
    }


    public function store_unit(Request $request,$property_name){
      $validator = Validator::make($request->all(), [
                
                
            ]);

            if ($validator->fails()) {
                return redirect()->back()
                        ->withErrors($validator)
                        ->withInput();
                
        }
        $data = $request->all();
        unset($data["_token"]);
        $counter =  is_null($request->get('number_of_copies')) ? 0 : $request->get('number_of_copies');
        for( $i = 0; $i<$counter; $i++ ) {
            $result = frappe_insert('property%20unit',$data);
            $data["unit_number"]++;
            if($result->status == 'error'){
            return redirect('property/'.$request->get('property').'/units')->with('status','لم تتم العملية كاملا الرجاء المحاولة مرة اخرى');  
            }
                  
        }
        return redirect('property/'.$request->get('property').'/units')->with('status','لقد تم الاضافة بانجاح');  
    }


    public function create_lease($property_name)
    {
        $terms = [];
        $terms_d = frappe_get_data('Terms%20and%20Conditions','?fields=["title","terms"]')->data;
   
        foreach ($terms_d as $term) {
            $terms[$term->title] = $term->terms;
        }

       
        
        $renters = frappe_get_data('Customer','?fields=["name"]')->data;
        
        
        $property_units = frappe_get_data('property%20unit','?fields=["name","property"]&filters=[["property%20unit","property","=","'.$property_name.'"]]')->data;
       
        
        return view('ar.property.create_lease',compact('properties','property_units','property_name','renters','terms'));

    }


    public function store_lease(Request $request,$property_name)
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
        $result = frappe_insert('lease',$data);
        if($result->status != 'error'){
            return redirect('property/'.$property_name.'/leases')->with('status','لقد تم تحديث العقار');  
        }else{
            return redirect('property/'.$property_name.'/leases')->with('status','لم يتم تحديث العقار الرجاء المحاولة مرة اخرى');  
        }
        
    }





    public function delete($property_name)
    {
        $resultObj = frappe_delete('property',$property_name);
        return redirect('property/index');
    }

    public function delete_array(Request $request)
    {
        $pids = json_decode($request->get('names'));
        foreach ($pids as $property_name) {
            $resultObj = frappe_delete('property',$property_name);
        }
        return redirect('property/index');
    }


    public function search_link(Request $request)
    {
      $txt = $request->get('text');
      $doctype = $request->get('doctype');
      $result = frappe_search_link($doctype ,$txt);
       if($result->status != 'error'){
            return redirect('property/'.$property_name.'/leases')->with('status','لقد تم تحديث العقار');  
        }else{
            return redirect('property/'.$property_name.'/leases')->with('status','لم يتم تحديث العقار الرجاء المحاولة مرة اخرى');  
        }
      return $result; 
    }

    
}
