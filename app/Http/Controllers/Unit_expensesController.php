<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Validator;

class Unit_expensesController extends Controller
{
    public function create()
    {
        return view('ar.unit_expenses.create');
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
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
        $result = frappe_insert('unit%20expenses',$data);
       return redirect('unit_expense/index');
    }


    public function edit($name)
    {
       
        $resultObj = frappe_get_data('unit%20expenses',$name);
        $unit_expense = json_decode($resultObj)->data;
        return view('ar.unit_expenses.edit',compact('unit_expense'));

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
        
        $result = frappe_update('unit%20expenses',$name,$data);
        return redirect()->back();
    }

    public function index()
    {

       $resultObj = frappe_get_data_index('unit%20expenses','?fields=["name","unit","lease","unit","amount","date"]');
       
       $result = json_decode($resultObj)->data;
       
       return view('ar.unit_expenses.index',compact('result'));

    }

    public function delete($name)
    {

        $resultObj = frappe_delete('unit%20expenses',$name);
        return redirect('unit_expense/index');
    }
}
