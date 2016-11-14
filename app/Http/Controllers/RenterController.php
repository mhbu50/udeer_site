<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Validator;

class RenterController extends Controller
{
    public function create()
    {
        return view('ar.renter.create');
    }

    public function store(Request $request)
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
        $data["customer_group"] = "Commercial";
        $result = frappe_insert('Customer',$data);
       return redirect('renter/index');
    }


    public function edit($name)
    {
       
        $resultObj = frappe_get_data('Customer',$name);
        $renter = json_decode($resultObj)->data;
        return view('ar.renter.edit',compact('renter'));

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
        
        $result = frappe_update('Customer',$name,$data);
        
        return redirect()->back();
    }

    public function index()
    {

       $resultObj = frappe_get_data('Customer','?fields=["name","customer_name","email"]');
       $result = json_decode($resultObj)->data;
       
       return view('ar.renter.index',compact('result'));

    }

    public function delete($name)
    {

        $resultObj = frappe_delete('Customer',$name);
        return redirect('renter/index');
    }
}
