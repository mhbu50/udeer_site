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
        $properties = frappe_get_data('property','');
        $properties = json_decode($properties)->data;
        return view('ar.property_unit.create',compact('properties'));
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
                'property' => 'required',
                
            ]);

            if ($validator->fails()) {
                return redirect()->back()
                        ->withErrors($validator)
                        ->withInput();
                
        }
        $data = $request->all();
        unset($data["_token"]);
        $result = frappe_insert('property%20unit',$data);
        return redirect('property/index');
    }


    public function edit($unit_name)
    {
        $properties = frappe_get_data('property','');
        $properties = json_decode($properties)->data;

        $resultObj = frappe_get_data('property%20unit',$unit_name);
        $property_unit = json_decode($resultObj)->data;
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
        return redirect()->back();
    }

    public function index()
    {

       $resultObj = frappe_get_data('property%20unit','?fields=["name","property","unit_number"]');
       $result = json_decode($resultObj)->data;
       
       return view('ar.property_unit.index',compact('result'));

    }

     public function show($unit_name)
    {

       $resultObj = frappe_get_data('property%20unit',$unit_name);
       $property_unit = json_decode($resultObj)->data;
       
       return view('ar.property_unit.show',compact('property_unit'));

    }


 
    public function lease_index($unit_name)
    {

       $result = frappe_get_data('lease','?fields=["name","date","active"]&filters=[["lease","property_unit","=","'.$unit_name.'"]]');
       $result = json_decode($result)->data;
       return view('ar.property_unit.lease_index',compact('result','unit_name'));
       

    }
    public function rent_index($unit_name)
    {
       $lease = frappe_get_data('lease','?filters=[["lease","active","=",1],["lease","property_unit","=","'.$unit_name.'"]]');
       $lease = json_decode($lease)->data;
       $result= array();
       if($lease){
            $result = frappe_get_data('Lease%20rent%20payment','?fields=["name","amount","renter","lease"]&filters=[["Lease%20rent%20payment","lease","=","'.$lease[0]->name.'"]]');
            $result = json_decode($result)->data;
       }
       
    return view('ar.property_unit.rent_index',compact('result','unit_name'));
   
    }


    public function delete($unit_name)
    {

        $resultObj = frappe_delete('property%20unit',$unit_name);
        return redirect('property_unit/index');
    }
}
