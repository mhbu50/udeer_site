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
        
        if($result->status != 'error'){
            return redirect()->action('PropertyController@expense_index',$property_name)->with('status','لقد تم حفظ المصروف');  
        }else{
            return redirect()->action('PropertyController@expense_index',$property_name)->with('status','لم يتم حفظ المصروف الرجاء المحاولة مرة اخرى');  
        }
      
    }


    public function edit($name)
    {
       
        $property_expense = frappe_get_data('property_expense',$name)->data;
        
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
        if($result->status != 'error'){
            return redirect()->back()->with('status','لقد تم حفظ المصروف');  
        }else{
            return redirect()->back()->with('status','لم يتم حفظ المصروف الرجاء المحاولة مرة اخرى');  
        }
       
    }

    public function index()
    {
       $result = frappe_get_data('property_expense','?fields=["name","property","amount","date"]');  
       
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
