<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Validator;
class ComplainController extends Controller
{
    public function create()
    {
        return view('ar.complain.create');
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
                'about' => 'required',
                'description' => 'required'
                 
                
            ]);

            if ($validator->fails()) {
                return redirect()->back()
                        ->withErrors($validator)
                        ->withInput();
                
        }
        $data = $request->all();
        unset($data["_token"]);
        $result = frappe_insert('complain',$data);
       return redirect('complain/index');
    }


    public function edit($name)
    {
       
        $complain = frappe_get_data('complain',$name);
        
        return view('ar.complain.edit',compact('complain'));

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
        
        $result = frappe_update('complain',$name,$data);
        var_dump($result);
        return redirect()->back();
    }

    public function index()
    {

       $result = frappe_get_data('complain','?fields=["name","about","title","status"]');
       
       
       return view('ar.complain.index',compact('result'));

    }

    public function delete_array(Request $request)
    {
        $pids = json_decode($request->get('names'));
        foreach ($pids as $property_name) {
            $resultObj = frappe_delete('complain',$property_name);
        }
        return redirect('complain/index');
    }

    public function delete($name)
    {

        $resultObj = frappe_delete('complain',$name);
        return redirect('complain/index');
    }
}
