<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Validator;

class LeaseController extends Controller
{
    public function create()
    {
        return view('ar.lease.create');
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
                'property' => 'required',
                'property_unit' => 'required'
                 
                
            ]);

            if ($validator->fails()) {
                return redirect()->back()
                        ->withErrors($validator)
                        ->withInput();
                
        }
        $data = $request->all();
        unset($data["_token"]);
        $result = frappe_insert('lease',$data);
       return redirect('lease/index');
    }


    public function edit($name)
    {
       
        $resultObj = frappe_get_data('lease',$name);
        $lease = json_decode($resultObj)->data;
        return view('ar.lease.edit',compact('lease'));

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
        
        return redirect()->back();
    }

    public function index()
    {

       $resultObj = frappe_get_data('lease','?fields=["name","property","property_unit"]');
       $result = json_decode($resultObj)->data;
       
       return view('ar.lease.index',compact('result'));

    }

    public function delete($name)
    {

        $resultObj = frappe_delete('lease',$name);
        return redirect('lease/index');
    }
}
