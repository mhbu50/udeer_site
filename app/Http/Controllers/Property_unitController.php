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
        return view('ar.property_unit.create');
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
        var_dump($result);
        return redirect('property/index');
    }


    public function edit($name)
    {
       
        $resultObj = frappe_get_data('property%20unit',$name);
        $property_unit = json_decode($resultObj)->data;
        return view('ar.property_unit.edit',compact('property_unit'));

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
        
        $result = frappe_update('property%20unit',$name,$data);
        var_dump($result);
        return redirect()->back();
    }

    public function index()
    {

       $resultObj = frappe_get_data('property%20unit','?fields=["name","property","unit_number"]');
       $result = json_decode($resultObj)->data;
       
       return view('ar.property_unit.index',compact('result'));

    }

    public function delete($name)
    {

        $resultObj = frappe_delete('property%20unit',$name);
        return redirect('property_unit/index');
    }
}
