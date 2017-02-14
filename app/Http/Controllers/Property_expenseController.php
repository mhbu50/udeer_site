<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Validator;

class Property_expenseController extends Controller
{
    public function create($property_name)
    {
        $units = frappe_get_data('property%20unit','?fields=["name"]&filters=[["property%20unit","property","=","'.$property_name.'"]]');
        $units = json_decode($units)->data;

        return view('ar.property_expenses.create',compact('property_name','units'));
    }

    public function store(Request $request,$property_name)
    {
        $validator = Validator::make($request->all(), [
                'amount' => 'required',
            ]);

            if ($validator->fails()) {
                return redirect()->back()
                        ->withErrors($validator)
                        ->withInput();
                
        }
        $data = $request->all();
        $data['property'] = $property_name;
        unset($data["_token"]);
        $result = frappe_insert('property_expense',$data);
        
        return redirect()->action('PropertyController@unit_expense_index',$property_name);
    }


    public function edit($name)
    {
       
        $resultObj = frappe_get_data('property_expense',$name);
        $property_expense = json_decode($resultObj)->data;
        return view('ar.property_expenses.edit',compact('property_expense'));

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
        
        $result = frappe_update('property_expense',$name,$data);
        return redirect()->back();
    }

    public function index()
    {
       $resultObj = frappe_get_data('property_expense','?fields=["name","property","amount","date"]');  
       $result = json_decode($resultObj)->data;
       return view('ar.property_expenses.index',compact('result'));
    }

    public function delete_array(Request $request)
    {
        $pids = json_decode($request->get('names'));
        foreach ($pids as $property_ex) {
            $resultObj = frappe_delete('property_expense',$property_ex);
        }
        return redirect()->back();
    }

    public function delete($name)
    {

        $resultObj = frappe_delete('property_expense',$name);
        return redirect('property_expense/index');
    }
}
