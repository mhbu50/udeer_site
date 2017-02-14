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
        $leases = frappe_get_data('lease','?fields=["name"]');
        $leases = json_decode($leases)->data;
        $receivers = frappe_get_data('Employee','?fields=["name"]');
        $receivers = json_decode($receivers)->data;
        $renters = frappe_get_data('Customer','?fields=["name"]');
        $renters = json_decode($renters)->data;
        return view('ar.lease_rent_payment.create',compact('leases','receivers','renters'));
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
                'amount' => 'required',
                'lease' => 'required',
                'renter' => 'required',
                'date' => 'date|date_format:Y-m-d',
                'payment_method' => 'in:cash,bank20%,cheque',
                'due_date' => 'date|date_format:Y-m-d',
                'to_date' => 'date|date_format:Y-m-d',
                'renter' => 'Min:3|Max:80|AlphaNum',
                'lease' => 'Min:3|Max:80|AlphaNum',
                'employee' => 'Min:3|Max:80|AlphaNum',
                'amount' => 'numeric',
                 
                
            ]);

            if ($validator->fails()) {
                return redirect()->back()
                        ->withErrors($validator)
                        ->withInput();
                
        }
        $data = $request->all();
        unset($data["_token"]);
        $result = frappe_insert('Lease%20rent%20payment',$data);
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


    public function delete_array(Request $request)
    {
        $pids = json_decode($request->get('names'));
        foreach ($pids as $property_name) {
            $resultObj = frappe_delete('Lease%20rent%20payment',$property_name);
        }
        return redirect('rent_payment/index');
    }

    public function delete($name)
    {

        $resultObj = frappe_delete('Lease%20rent%20payment',$name);
        return redirect('rent_payment/index');
    }
}
