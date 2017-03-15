<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Validator;

class ReceiverController extends Controller
{
    public function create()
    {
        return view('ar.receiver.create');
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
               'employee_name' => 'required|AlphaNum',
               'company' => 'AlphaNum',
               'date_of_joining' => 'date',
               'date_of_birth' => 'date|before:today',
                
            ]);

            if ($validator->fails()) {
                return redirect()->back()
                        ->withErrors($validator)
                        ->withInput();
                
        }
        $data = $request->all();
        $data["gender"] = "Male" ;
        unset($data["_token"]);
        $result = frappe_insert('Employee',$data);

        if($result->status != 'error'){
            return redirect('/receiver/index')->with('status','لقد تم حفظ المحصل');  
        }else{
            return redirect('/receiver/index')->with('status','لم يتم حفظ المحصل الرجاء المحاولة مرة اخرى');  
        }
        
        
    }

    public function store_ajax(Request $request)
    {
        $validator = Validator::make($request->all(), [
                
            ]);

            if ($validator->fails()) {
                return 'error';
                
        }
        $data = $request->all();
        unset($data["_token"]);
        $result = frappe_insert('Employee',$data);
        
        if($result->status != 'error'){
            return $result->data->name;
        }else{
            return ;
        }
        
    }



    public function edit($name)
    {
        $name = str_replace('*', '%2F', $name);
        $reciever = frappe_get_data('Employee',$name)->data;
       
        return view('ar.receiver.edit',compact('reciever'));

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
        $name = str_replace('*', '%2F', $name);
        $data = $request->all();
        unset($data["_token"]);
        
        $result = frappe_update('Employee',$name,$data);
        if($result->status != 'error'){
            return redirect()->back()->with('status','لقد تم تحديث المحصل');  
        }else{
            return redirect()->back()->with('status','لم يتم تحديث المحصل الرجاء المحاولة مرة اخرى');  
        }
        
    }

    public function index()
    {

       $result = frappe_get_data('Employee','?fields=["name","employee_name","company","date_of_joining","date_of_birth"]')->data;
       
       
       return view('ar.receiver.index',compact('result'));

    }

    public function delete_array(Request $request)
    {
        $pids = json_decode($request->get('names'));
        foreach ($pids as $property_name) {
            $resultObj = frappe_delete('Employee',$property_name);
        }
        return redirect('receiver/index');
    }

    public function delete($name)
    {

        $resultObj = frappe_delete('Employee',$name);
        return redirect('receiver/index');
    }
}
