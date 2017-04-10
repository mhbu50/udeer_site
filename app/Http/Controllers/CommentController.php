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
        
        if($result->status != 'error'){
            return redirect()->back()->with('status','لقد تم حفظ العقار');  
        }else{
            return redirect()->back()->with('status','لم يتم حفظ العقار الرجاء المحاولة مرة اخرى ');  
        }
        
    }


    public function edit($name)
    {
       
        $result = frappe_get_data('complain',$name);
        if($result->status != 'error'){
            return redirect('property/index')->with('status','لقد تم حفظ العقار');  
        }else{
            return redirect('property/index')->with('status','لم يتم حفظ العقار الرجاء المحاولة مرة اخرى ');  
        }
        return view('ar.complain.edit',['complain' => $result->data]);

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
        if($result->status != 'error'){
            return redirect()->back()->with('status','لقد تم حفظ العقار');  
        }else{
            return redirect()->back()->with('status','لم يتم حفظ العقار الرجاء المحاولة مرة اخرى ');  
        }
       
    }

    public function index()
    {

       $result = frappe_get_data_index('complain','?fields=["name","about","title","status"]');
       
       
       return view('ar.complain.index',compact('result'));

    }

    public function delete($name)
    {

        $result = frappe_delete('complain',$name);

        if($result->status != 'error'){
            return redirect('complain/index')->with('status','لقد تم اضافة الملاحظة');  
        }else{
            return redirect('complain/index')->with('status','لم يتم حفظ الملاحظة الرجاء المحاولة مرة اخرى ');  
        }

    }
}
