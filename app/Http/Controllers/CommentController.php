<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Validator;

class CommentController extends Controller
{
    public function create()
    {
        return view('ar.complain.create');
    }

    public function store(Request $request,$doctype,$name)
    {
        $validator = Validator::make($request->all(), [
                
            ]);

            if ($validator->fails()) {
                return redirect()->back()
                        ->withErrors($validator)
                        ->withInput();
                
        }

        $data["content"] = $request->get("content");
        $data["reference_doctype"] = $doctype;
        $data["reference_name"] = $name;
        
        // $data["user"] = "Administrator";
        // $data["sent_or_received"] = "sent";
        // $data["communication_type"] = "Comment";
        // $data["status"] = "open";
        // $data["status"] = ("open");
       
        $result = frappe_insert('Communication',$data);
        
        return redirect()->back();
    }


    public function edit($name)
    {
       
        $resultObj = frappe_get_data('complain',$name);
        $complain = json_decode($resultObj)->data;
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

       $resultObj = frappe_get_data('complain','?fields=["name","about","title","status"]');
       $result = json_decode($resultObj)->data;
       
       return view('ar.complain.index',compact('result'));

    }

    public function delete($name)
    {

        $resultObj = frappe_delete('complain',$name);
        return redirect('complain/index');
    }
}
