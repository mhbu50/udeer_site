<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Validator;

class Property_unitController extends Controller
{
   public function create()
    {
        $properties = frappe_get_data('property','?fields=["name"]');
        
        // var_dump($properties);
        return view('ar.property_unit.create',compact('properties'));
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
                // 'property' => 'required|AlphaNum',
                // 'unit_number' => 'numeric',
                // 'unit_type' => 'in:apartment,room,villa,house',
                // 'annual_rent_amount' => 'numeric',
                // 'rent_currency' => 'AlphaNum',
                // 'insurance_amount' => 'numeric',
                // 'commission_type' => 'in:percentage,cash',
                // 'unit_space' => 'numeric',
                // 'finishing_status' => 'AlphaNum',
                // 'room_slot' => 'numeric',
                // 'number_of_bathrooms' => 'numeric',
                // 'unit_activity' => 'in:commercial,residential',
                // 'water_meter_number' => 'numeric',
                // 'electricity_meter_number' => 'numeric',
                // 'number_of_copies' => 'numeric',
                
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
         }
        
        
        if($result->status != 'error'){
            return redirect('property_unit/index')->with('status','لقد تم حفظ الوحدة');  
        }else{
            return redirect('property_unit/index')->with('status','لم يتم حفظ الوحدة الرجاء المحاولة مرة اخرى');  
        }
      
      //  
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
        $result = frappe_insert('property%20unit',$data);

        if($result->status == 'error'){
            return 'error';  
        }else{
            return json_encode($result->data); 
        }
       
    }


    public function edit($unit_name)
    {
        $properties = frappe_get_data('property','')->data;
        

        $property_unit = frappe_get_data('property%20unit',$unit_name)->data;
        
        return view('ar.property_unit.edit',compact('property_unit','properties','unit_name'));

    }

    public function update(Request $request,$unit_name)
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
        
        $result = frappe_update('property%20unit',$unit_name,$data);
        if($result->data != 'error'){
            return redirect()->back()->with('status','لقد تم تحديث الوحدة');  
        }else{
            return redirect()->back()->with('status','لم يتم تحديث الوحدة الرجاء المحاولة مرة اخرى');  
        }
        
    }

    public function index()
    {

       $result = frappe_get_data_index('property%20unit','?fields=["name","property","unit_number"]&order_by=unit_number')->data;
       
       return view('ar.property_unit.index',compact('result'));

    }



    public function set_index(Request $request)
    {
       $filters = array();


      if($request->has('name')){
        $filters['name'] = '["property%20unit","name","=","'.$request->get('name').'"]';
      }
      if($request->has('unit_number')){
        $filters['unit_number'] = '["property%20unit","unit_number","=","'.$request->get('unit_number').'"]';
      }
      if($request->has('property')){
        $filters['property'] = '["property%20unit","property","=","'.$request->get('property').'"]';
      }

      $f_ = refactor_filter($filters);

      $result = frappe_get_data('property%20unit','?fields=["name","property","unit_number"]&filters=['.$f_.']');
      
      return view('ar.property_unit.index',compact('result'));

    }
     public function show($unit_name)
    {

       $property_unit = frappe_get_data('property%20unit',$unit_name)->data;
      
       
       return view('ar.property_unit.show',compact('property_unit'));

    }


 
    public function lease_index($unit_name)
    {

       $result = frappe_get_data_index('lease','?fields=["name","property","property_unit","lease_signature_date"]&filters=[["lease","property_unit","=","'.$unit_name.'"]]')->data;
     
       // var_dump($result);
       return view('ar.property_unit.lease_index',compact('result','unit_name'));
       

    }
    public function rent_index($unit_name)
    {
       $lease = frappe_get_data_index('lease','?filters=[["lease","active","=",1],["lease","property_unit","=","'.$unit_name.'"]]')->data;
       
       $result= array();
       if($lease){
            $result = frappe_get_data_index('Lease%20rent%20payment','?fields=["name","amount","renter","lease"]&filters=[["Lease%20rent%20payment","lease","=","'.$lease[0]->name.'"]]')->data;
            
       }
       
    return view('ar.property_unit.rent_index',compact('result','unit_name'));
   
    }

     public function delete_array(Request $request)
    {
        $pids = json_decode($request->get('names'));
        foreach ($pids as $property_name) {
            $resultObj = frappe_delete('property%20unit',$property_name);
        }
        return redirect()->back();
    }


    public function delete($unit_name)
    {

        $resultObj = frappe_delete('property%20unit',$unit_name);
        return redirect('property_unit/index');
    }


    public function create_lease($unit_name)
    {
        $terms_d = frappe_get_data('Terms%20and%20Conditions','?fields=["title","terms"]')->data;
        $term = [];
        foreach ($terms_d as $term) {
            $terms[$term->title] = $term->terms;
        }

        $renters = frappe_get_data('Customer','?fields=["name"]')->data;
        
        $property_unit = frappe_get_data('property%20unit',$unit_name)->data;
        
        // var_dump($property_unit);
        return view('ar.property_unit.create_lease',compact('property_unit','renters','terms'));

    }


    public function store_lease(Request $request,$unit_name)
    {
        $data = $request->all();
        unset($data["_token"]);
        $result = frappe_insert('lease',$data);
        // var_dump($result);
        return redirect('property_unit/'.$unit_name.'/leases');
    }

    public function comments($unit_name)
    { 
        $result = frappe_get_data('Communication','?fields=["name","creation","user","content"]&filters=[["Communication","reference_doctype","=","property%20unit"],["Communication","communication_type","=","Communication"],["Communication","reference_name","=","'.$unit_name.'"]]')->data;
        
        return view('ar.property_unit.comments',compact('result','unit_name'));
    }

    public function docs_index($unit_name)
    { 
        $result = frappe_get_data_index('File','?fields=["name","file_name","file_url","creation","file_type"]&filters=[["File","attached_to_name","=","'.$unit_name.'"],["File","attached_to_doctype","=","property%20unit"]]')->data;
        
        return view('ar.property_unit.docs',compact('result','unit_name'));
        
        
    }   

}
