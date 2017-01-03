<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Validator;

class PropertyController extends Controller
{   
 
    public function create()
    {
        $property_owners = frappe_get_data('property_owner','?fields=["name","full_name"]');
        $property_owners = json_decode($property_owners)->data;
       
        return view('ar.property.create',compact('property_owners'));
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
                'property_name' => 'required|Min:3|Max:80|AlphaNum',
                'property_type' => 'Min:3|Max:80|AlphaNum',
                'construction_date' => 'date|date_format:Y-m-d|before:today',
                'evaluation' => 'Min:3|Max:80|AlphaNum',
                'country' => 'Min:3|Max:80|AlphaNum',
                'city' => 'Min:3|Max:80|AlphaNum',
                'address' => 'Min:3|Max:300|AlphaNum',
                'property_advantage' => 'Min:3|Max:300|AlphaNum',
                'owner_name' => 'Min:3|Max:80|AlphaNum',
                'property_number' => 'numeric|Min:1|Max:20',
                'instrument_number' => 'numeric|Min:1|Max:20',
                'instrument_date' => 'date|date_format:Y-m-d|before:today',
                
            ]);

            if ($validator->fails()) {
                return redirect()->back()
                        ->withErrors($validator)
                        ->withInput();
                
        }
        $data = $request->all();
        unset($data["_token"]);
        $result = frappe_insert('property',$data);
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
        $result = json_decode($result)->data;
        return $result->name;
    }

    public function edit($property_name)
    {
       
        $resultObj = frappe_get_data('property',$property_name);

        $property_units = frappe_get_data('property',$property_name);
        $leases = frappe_get_data('property',$property_name);


        $property = json_decode($resultObj)->data;
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

      $resultObj = frappe_get_data('property','?fields=["name","owner","property_name"]&filters=['.$f_.']');
      $result = json_decode($resultObj)->data;
      return view('ar.property.index',compact('result'));

    }

    public function index()
    {

       $resultObj = frappe_get_data('property','?fields=["name","owner","property_name"]');
       $result = json_decode($resultObj)->data;
       
       return view('ar.property.index',compact('result'));


    }


    public function lease_index($property_name)
    {

       $result = frappe_get_data('lease','?fields=["name","date","property_unit"]&filters=[["lease","property","=","'.$property_name.'"]]');
       $result = json_decode($result)->data;
       return view('ar.property.lease_index',compact('result','property_name'));
       

    }

    public function unit_index($property_name)
    {

       $result = frappe_get_data('property%20unit','?fields=["name","unit_number"]&filters=[["property%20unit","property","=","'.$property_name.'"]]');
       $result = json_decode($result)->data;
       
       return view('ar.property.unit_index',compact('result','property_name'));
       
    }

    public function expense_index($property_name)
    {
       $result = frappe_get_data('property_expense','?fields=["name","date","amount","property_unit","Supplier","invoice_number"]&filters=[["property_expense","property","=","'.$property_name.'"]]');
       $result = json_decode($result)->data; 
      
       
       return view('ar.property.property_expense_index',compact('result','property_name'));
    }


    
    public function financial_movements($property_name)
    {
        $result = array();
        $leases = frappe_get_data('lease','?filters=[["lease","property","=","'.$property_name.'"]]');
        $leases = json_decode($leases)->data; 
        foreach ($leases as $lease) {
           $lease_rent_payments = frappe_get_data('Lease%20rent%20payment','?fields=["name","amount","renter","lease"]&filters=[["Lease%20rent%20payment","lease","=","'.$lease->name.'"]]');
           $lease_rent_payments = json_decode($lease_rent_payments)->data; 
           array_push($result,$lease_rent_payments);
          
        }
        return view('ar.property.financial_movements',compact('result','property_name'));
    }
       

    public function comments($property_name)
    { 

        $result = frappe_get_data('Communication','?fields=["name","creation","user","content"]&filters=[["Communication","reference_doctype","=","property"],["Communication","communication_type","=","Communication"],["Communication","reference_name","=","'.$property_name.'"]]');
        $result = json_decode($result)->data;
        return view('ar.property.comments',compact('result','property_name'));
        
    }


    public function docs_index($property_name)
    { 

        $result = frappe_get_data('File','?fields=["file_name","file_url"]&filters=[["File","attached_to_name","=","'.$property_name.'"],["File","attached_to_doctype","=","property"]]');
        $result = json_decode($result)->data;
        return view('ar.property.docs',compact('result','property_name'));
        
        
    }   

    public function create_unit($property_name){
        $properties = frappe_get_data('property','?fields=["name"]');
        $properties = json_decode($properties)->data;
        return view('ar.property.create_unit',compact('properties','property_name'));
    }


    public function store_unit(Request $request,$property_name){
      $validator = Validator::make($request->all(), [
                'property' => 'required|Min:3|Max:80|AlphaNum',
                'unit_number' => 'numeric|Min:1|Max:20',
                'unit_type' => 'in:apartment,room,villa,house',
                'annual_rent_amount' => 'numeric|Min:1|Max:20',
                'rent_currency' => 'Min:2|Max:80|AlphaNum',
                'insurance_amount' => 'numeric|Min:1|Max:20',
                'commission_type' => 'in:percentage,cash',
                'unit_space' => 'numeric|Min:1|Max:20',
                'finishing_status' => 'Min:3|Max:80|AlphaNum',
                'unit_description' => 'Min:3|Max:80|AlphaNum',
                'room_slot' => 'numeric|Min:1|Max:20',
                'number_of_bathrooms' => 'numeric|Min:1|Max:20',
                'unit_activity' => 'in:commercial,residential',
                'water_meter_number' => 'numeric|Min:1|Max:20',
                'electricity_meter_number' => 'numeric|Min:1|Max:20',
                'number_of_copies' => 'numeric|Min:1|Max:20',
                
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
         }
        return redirect('property/'.$request->get('property').'/units');
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
