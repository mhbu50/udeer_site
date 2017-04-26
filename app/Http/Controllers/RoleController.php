<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class RoleController extends Controller
{
    public function create()
    {
        return view('ar.role.create');
    }

    public function store(Request $request)
    {
        $data = $request->all();
        unset($data["_token"]);
        $result = frappe_insert('Role',$data);

        if($result->status != 'error'){
            return redirect('role/index')->with('status','لقد تم حفظ ');  
        }else{
            return redirect('role/index')->with('status','لم يتم حفظ  الرجاء المحاولة مرة اخرى');  
        }
        
    }


    public function edit($name)
    {
        
        $role = frappe_get_data('Role',$name)->data;
        $perm = frappe_get_permissions($name);

        if($perm->status == 'error'){
            return redirect('role/index')->with('status','ارور');  
        }else{
            $perm = $perm->data->message;
            return view('ar.role.edit',compact('role','perm'));  
        }
        

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

       $result = frappe_get_data_index('Role','?fields=["*"]');

       return view('ar.role.index',['result' => $result->data]);

    }

    
}
