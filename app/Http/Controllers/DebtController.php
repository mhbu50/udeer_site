<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Validator;

class DebtController extends Controller
{
    public function create()
    {
        return view('ar.debt.create');
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
               'debtor_name' => 'required|AlphaNum',
               'amount' => 'required|numeric',
                
            ]);

            if ($validator->fails()) {
                return redirect()->back()
                        ->withErrors($validator)
                        ->withInput();
                
        }
        $data = $request->all();
        unset($data["_token"]);
        $result = frappe_insert('debt',$data);

        if($result->status != 'error'){
            return redirect('debt/index')->with('status','لقد تم حفظ السجل');  
        }else{
            return redirect('debt/index')->with('status','لم يتم حفظ السجل الرجاء المحاولة مرة اخرى');  
        }
        
    }


    public function edit($name)
    {
        
        $debt = frappe_get_data('debt',$name)->data;
        
        return view('ar.debt.edit',compact('debt'));

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
        
        $result = frappe_update('debt',$name,$data);
        if($result->status != 'error'){
            return redirect()->back()->with('status','لقد تم تحديث السجل');  
        }else{
            return redirect()->back()->with('status','لم يتم تحديث السجل الرجاء المحاولة مرة اخرى');  
        }
        
    }

    public function index()
    {

       $result = frappe_get_data('debt','?fields=["name","debtor_name","amount"]');
       
       
       return view('ar.debt.index',['result' => $result->data]);

    }

    public function set_index(Request $request)
    { 

      $filters = array();


      if($request->has('debtor_name')){
        $filters['debtor_name'] = '["debt","debtor_name","=","'.$request->get('debtor_name').'"]';
      }

      $f_ = refactor_filter($filters);

      $result = frappe_get_data('debt','?fields=["name","debtor_name","amount"]&filters=['.$f_.']');
      
      return view('ar.debt.index',compact('result'));

    }

    
    public function delete_array(Request $request)
    {
        $pids = json_decode($request->get('names'));
        foreach ($pids as $property_name) {
            $resultObj = frappe_delete('debt',$property_name);
        }
        return redirect('debt/index');
    }

    public function delete($name)
    {

        $resultObj = frappe_delete('debt',$name);
        return redirect('debt/index');
    }
}
