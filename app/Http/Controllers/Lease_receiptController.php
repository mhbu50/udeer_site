<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Validator;

class Lease_receiptController extends Controller
{
   public function create()
    {
        return view('ar.lease_receipt.create');
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
        $result = frappe_insert('lease_receipt',$data);
       return redirect('lease_receipt/index');
    }


    public function edit($name)
    {
       
        $resultObj = frappe_get_data('lease_receipt',$name);
        $lease_receipt = json_decode($resultObj)->data;
        return view('ar.lease_receipt.edit',compact('lease_receipt'));

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
        
        $result = frappe_update('lease_receipt',$name,$data);
        
        return redirect()->back();
    }

    public function index()
    {
       $resultObj = frappe_get_data('lease_receipt','?fields=["name","amount","type","lease"]');
       $result = json_decode($resultObj)->data;
       
       return view('ar.lease_receipt.index',compact('result'));

    }

    public function delete($name)
    {

        $resultObj = frappe_delete('lease_receipt',$name);
        return redirect('lease_receipt/index');
    }
}
