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
        return view('ar.property.create');
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
                'property_name' => 'required',
                
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

    public function unit_expense_index($property_name)
    {
       $units = frappe_get_data('property%20unit','?filters=[["property%20unit","property","=","'.$property_name.'"]]');
       $units = json_decode($units)->data; 
       $result= array();
       foreach ($units as $unit) {
           $unit_expense = frappe_get_data('unit%20expenses','?fields=["name","date","amount","customer","unit"]&filters=[["unit%20expenses","unit","=","'.$unit->name.'"]]');
           $unit_expense = json_decode($unit_expense)->data; 
           array_push($result,$unit_expense);
       }
       
       return view('ar.property.unit_expense_index',compact('result','property_name'));
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
        $result = frappe_get_data('Communication','?fields=["name","creation","user","content"]&filters=[["Communication","reference_doctype","=","property"],["Communication","reference_name","=","'.$property_name.'"]]');
        $result = json_decode($result)->data;
        return view('ar.property.comments',compact('result','property_name'));
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
