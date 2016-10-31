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


    public function edit($name)
    {
       
        $resultObj = frappe_get_data('property',$name);
        $property = json_decode($resultObj)->data;
        return view('ar.property.edit',compact('property'));

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
        
        $result = frappe_update('property',$name,$data);
        
        return redirect()->back();
    }

    public function index()
    {

       $resultObj = frappe_get_data('property','?fields=["name","owner","property_name"]');
       $result = json_decode($resultObj)->data;
       
       return view('ar.property.index',compact('result'));

    }

    public function delete($name)
    {

        $resultObj = frappe_delete('property',$name);
        return redirect('property/index');
    }

}
