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
        $property_owners = frappe_get_data('property_owner','?fields=["name","first_name","second_name","third_name","last_name"]');
  
        return view('ar.property.create',compact('property_owners'));
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
                'property_name' => 'required|AlphaNum',
                'property_type' => 'AlphaNum',
                'construction_date' => 'date|date_format:Y-m-d|before:today',
                'evaluation' => 'AlphaNum',
                'city' => 'AlphaNum',
                'address' => 'AlphaNum',
                'property_advantage' => 'AlphaNum',
                'owner_name' => 'AlphaNum',
                'property_number' => 'numeric',
                'instrument_number' => 'numeric',
                'instrument_date' => 'date|date_format:Y-m-d|before:today',
                
            ]);

            if ($validator->fails()) {
                return redirect()->back()
                        ->withErrors($validator)
                        ;
                
        }
        $data = $request->all();
        unset($data["_token"]);
        $result = frappe_insert('property',$data);
        // var_dump($result);
        return redirect('property/index');  
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
        $result = frappe_insert('property',$data);
       
        return $result->name;
    }

    public function edit($property_name)
    {
       
        $property = frappe_get_data('property',$property_name);
        

        $owners = frappe_get_data('property_owner','?fields=["name"]');
        
        return view('ar.property.edit',compact('property','property_name','owners'));

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
        
        return redirect()->back();
    }

    public function show($property_name)
    {

       $resultObj = frappe_get_data('property',$property_name);

        // $property_units = frappe_get_data('property',$name);
        // $leases = frappe_get_data('property',$name);

        $property = json_decode($resultObj)->data;
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

       $result = frappe_get_data('property','?fields=["name","owner","property_name"]');
       
       
       return view('ar.property.index',compact('result'));


    }


    public function lease_index($property_name)
    {

       $result = frappe_get_data('lease','?fields=["name","date","property_unit"]&filters=[["lease","property","=","'.$property_name.'"]]');
      
       return view('ar.property.lease_index',compact('result','property_name'));
       

    }

    public function unit_index($property_name)
    {

       $result = frappe_get_data('property%20unit','?fields=["name","unit_number"]&filters=[["property%20unit","property","=","'.$property_name.'"]]');
       
       
       return view('ar.property.unit_index',compact('result','property_name'));
       
    }

    public function expense_index($property_name)
    {
       $result = frappe_get_data('property_expense','?fields=["name","date","amount","property_unit","Supplier","invoice_number"]&filters=[["property_expense","property","=","'.$property_name.'"]]');
       
       
       return view('ar.property.property_expense_index',compact('result','property_name'));
    }


    
    public function financial_movements($property_name)
    {
        $result = array();
        $leases = frappe_get_data('lease','?filters=[["lease","property","=","'.$property_name.'"]]');
        
        foreach ($leases as $lease) {
           $lease_rent_payments = frappe_get_data('Lease%20rent%20payment','?fields=["name","amount","renter","lease"]&filters=[["Lease%20rent%20payment","lease","=","'.$lease->name.'"]]');
           
           array_push($result,$lease_rent_payments);
          
        }
        return view('ar.property.financial_movements',compact('result','property_name'));
    }
       

    public function comments($property_name)
    { 
        $result = frappe_get_data('Communication','?fields=["name","creation","user","content"]&filters=[["Communication","reference_doctype","=","property"],["Communication","communication_type","=","Communication"],["Communication","reference_name","=","'.$property_name.'"]]');
        
        // var_dump($result);
        return view('ar.property.comments',compact('result','property_name'));
    }


    public function docs_index($property_name)
    { 

        $result = frappe_get_data('File','?fields=["name","file_name","file_url","creation"]&filters=[["File","attached_to_name","=","'.$property_name.'"],["File","attached_to_doctype","=","property"]]');
        
        return view('ar.property.docs',compact('result','property_name'));
        
        
    }   

    public function create_unit($property_name){
        $unit = frappe_get_data('property%20unit','?fields=["name","creation","unit_number"]&filters=[["property%20unit","property","=","'.$property_name.'"]]');
        $last_unit_number = isset(json_decode($unit)->data[0]->unit_number) ? json_decode($unit)->data[0]->unit_number : 0 ;
        // var_dump($last_unit_number);
        return view('ar.property.create_unit',compact('property_name','last_unit_number'));
    }


    public function store_unit(Request $request,$property_name){
      $validator = Validator::make($request->all(), [
                'property' => 'required|AlphaNum',
                'unit_number' => 'numeric',
                'unit_type' => 'in:apartment,room,villa,house',
                'annual_rent_amount' => 'numeric',
                'rent_currency' => 'AlphaNum',
                'insurance_amount' => 'numeric',
                'commission_type' => 'in:percentage,cash',
                'unit_space' => 'numeric',
                'finishing_status' => 'AlphaNum',
                'room_slot' => 'numeric',
                'number_of_bathrooms' => 'numeric',
                'unit_activity' => 'in:commercial,residential',
                'water_meter_number' => 'numeric',
                'electricity_meter_number' => 'numeric',
                'number_of_copies' => 'numeric',
                
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
        return redirect('property/'.$request->get('property').'/units');
    }


    public function create_lease($property_name)
    {
        $renters = frappe_get_data('Customer','?fields=["name"]');
        
        
        $property_units = frappe_get_data('property%20unit','?fields=["name","property"]&filters=[["property%20unit","property","=","'.$property_name.'"]]');
       
        
        return view('ar.property.create_lease',compact('properties','property_units','property_name','renters'));

    }


    public function store_lease(Request $request,$property_name)
    {
        $validator = Validator::make($request->all(), [
                'property' => 'required|AlphaNum',
                'property_unit' => 'required|AlphaNum',
                'date' => 'date|date_format:Y-m-d',
                'renter' => 'required|AlphaNum',
                'lease_doc' => 'AlphaNum',
                'lease_writing_date' => 'date|date_format:Y-m-d',
                'expiry_date' => 'date|date_format:Y-m-d|after:today',
                'lease_duration' => 'numeric|Min:1|Max:20',
                'rent_starting_date' => 'date|date_format:Y-m-d',
                 
                
            ]);

            if ($validator->fails()) {
                return redirect()->back()
                        ->withErrors($validator)
                        ->withInput();
                
        }
        $data = $request->all();
        unset($data["_token"]);
        $result = frappe_insert('lease',$data);
       return redirect('property/'.$property_name.'/leases');
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
      return $result; 
    }

    
}
