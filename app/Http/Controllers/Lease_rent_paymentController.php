<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Validator;

class Lease_rent_paymentController extends Controller
{
    public function create()
    {
        return view('ar.lease_rent_payment.create');
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
                'amount' => 'required',
                'lease' => 'required',
                'renter' => 'required'
                 
                
            ]);

            if ($validator->fails()) {
                return redirect()->back()
                        ->withErrors($validator)
                        ->withInput();
                
        }
        $data = $request->all();
        unset($data["_token"]);
        $result = frappe_insert('Lease%20rent%20payment',$data);
        var_dump($result);
       return redirect('lease_rent_payment/index');
    }


    public function edit($name)
    {
       
        $resultObj = frappe_get_data('Lease%20rent%20payment',$name);
        $lease_rent_payment = json_decode($resultObj)->data;
        return view('ar.lease_rent_payment.edit',compact('lease_rent_payment'));

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
        
        $result = frappe_update('Lease%20rent%20payment',$name,$data);
        
        return redirect()->back();
    }

    public function index()
    {

       $resultObj = frappe_get_data('Lease%20rent%20payment','?fields=["name","amount","lease","renter"]');
       $result = json_decode($resultObj)->data;
       
       return view('ar.lease_rent_payment.index',compact('result'));

    }

    public function delete($name)
    {

        $resultObj = frappe_delete('Lease%20rent%20payment',$name);
        return redirect('lease_rent_payment/index');
    }
}
