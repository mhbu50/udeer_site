<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Validator;

class Lease_expensesController extends Controller
{
    public function create()
    {
        return view('ar.lease_expenses.create');
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
                'lease' => 'required',
                'unit' => 'required',
                'amount' => 'required',
            ]);

            if ($validator->fails()) {
                return redirect()->back()
                        ->withErrors($validator)
                        ->withInput();
                
        }
        $data = $request->all();
        unset($data["_token"]);
        $result = frappe_insert('Lease%20expenses',$data);
       return redirect('Lease_expense/index');
    }


    public function edit($name)
    {
       
        $resultObj = frappe_get_data('Lease%20expenses',$name);
        $lease_expense = json_decode($resultObj)->data;
        return view('ar.lease_expenses.edit',compact('lease_expense'));

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
        
        $result = frappe_update('Lease%20expenses',$name,$data);
        return redirect()->back();
    }

    public function index()
    {

       $resultObj = frappe_get_data('Lease%20expenses','?fields=["name","lease","unit","amount","date"]');
       $result = json_decode($resultObj)->data;
       
       return view('ar.lease_expenses.index',compact('result'));

    }

    public function delete($name)
    {

        $resultObj = frappe_delete('Lease%20expenses',$name);
        return redirect('Lease_expense/index');
    }
}
