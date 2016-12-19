<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Validator;

class Lease_scriptController extends Controller
{
     public function create()
    {
        return view('ar.lease_script.create');
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
        $result = frappe_insert('lease%20pattern',$data);
        
        return redirect('lease_script/index');
    }


    public function edit($name)
    {
        
        $resultObj = frappe_get_data('lease%20pattern',$name);
        $lease_script = json_decode($resultObj)->data;
        return view('ar.lease_script.edit',compact('lease_script'));

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
        
        $result = frappe_update('lease%20pattern',$name,$data);
        
        return redirect()->back();
    }

    public function index()
    {

       $resultObj = frappe_get_data('lease%20pattern','?fields=["name","script_name"]');
       $result = json_decode($resultObj)->data;
       
       return view('ar.lease_script.index',compact('result'));

    }

    public function delete_array(Request $request)
    {
        $pids = json_decode($request->get('names'));
        foreach ($pids as $property_name) {
            $resultObj = frappe_delete('lease%20pattern',$property_name);
        }
        return redirect('lease_script/index');
    }

    public function delete($name)
    {

        $resultObj = frappe_delete('lease%20pattern',$name);
        return redirect('lease_script/index');
    }
}
