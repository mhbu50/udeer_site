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
               'employee_name' => 'required|Min:3|Max:80|AlphaNum',
               'company' => 'Min:3|Max:80|AlphaNum',
               'date_of_joining' => 'date|date_format:Y-m-d',
               'date_of_birth' => 'date|date_format:Y-m-d|before:today',
               'employee_number' => 'numeric|Min:1|Max:20',
                
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
        return redirect('receiver/index');
        
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
        
        return $result->name;
    }



    public function edit($name)
    {
        $name = str_replace('*', '%2F', $name);
        $reciever = frappe_get_data('Employee',$name);
       
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
        
        return redirect()->back();
    }

    public function index()
    {

       $result = frappe_get_data('Employee','?fields=["name","employee_name","company","date_of_joining","date_of_birth"]');
       
       
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
