<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Validator;

class Property_unit_activityController extends Controller
{
    public function create()
    {
        return view('ar.property_unit_activity.create');
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
                'property_unit' => 'required',
                
            ]);

            if ($validator->fails()) {
                return redirect()->back()
                        ->withErrors($validator)
                        ->withInput();
                
        }
        $data = $request->all();
        unset($data["_token"]);
        $result = frappe_insert('property%20unit%20activity',$data);
        return redirect('property_unit_activity/index');
    }


    public function edit($name)
    {
       
        $resultObj = frappe_get_data('property%20unit%20activity',$name);
        $property_unit_activity = json_decode($resultObj)->data;
        return view('ar.property_unit_activity.edit',compact('property_unit_activity'));

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
        
        $result = frappe_update('property%20unit%20activity',$name,$data);
        var_dump($result);
        return redirect()->back();
    }

    public function index()
    {

       $resultObj = frappe_get_data('property%20unit%20activity','?fields=["name","date_time","property_unit"]');
       
       $result = json_decode($resultObj)->data;
       
       return view('ar.property_unit_activity.index',compact('result'));
    }

    public function delete($name)
    {

        $resultObj = frappe_delete('property%20unit%20activity',$name);
        return redirect('property_unit_activity/index');
    }
}
