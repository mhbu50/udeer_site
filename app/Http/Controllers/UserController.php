<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Validator;

class UserController extends Controller
{
    public function create()
    {
        $roles = frappe_get_data_index('Role','?fields=["*"]')->data;
        return view('ar.user.create',compact('roles'));
    }

    public function store(Request $request)
    {
        $data = $request->all();
        unset($data["_token"]);
        $result = frappe_insert('User',$data);

        if($result->status != 'error'){
            return redirect('user/index')->with('status','لقد تم حفظ السجل');  
        }else{
            return redirect('user/index')->with('status','لم يتم حفظ السجل الرجاء المحاولة مرة اخرى');  
        }
        
    }


    public function edit($name)
    {
        $user = frappe_get_data('User',$name)->data;
        $roles = frappe_get_data_index('Role','?fields=["*"]')->data;
        // var_dump($user);
        return view('ar.user.edit',compact('user','roles'));

    }

    public function update(Request $request,$name)
    {
    
        $data = $request->only(['first_name', 'mobile_number','email','new_password']);
        unset($data["_token"]);
        $roles = $request->get('role');
        $count = 0 ;
        foreach ($roles as $key => $value) {
            
            $data["roles"][$count]['role'] = urldecode($key) ;
            var_dump($count);
            $count++;
        }
    
        
        $result = frappe_update('User',$name,$data);
        if($result->status != 'error'){
            return redirect()->back()->with('status','لقد تم تحديث المستخدم');  
        }else{
            return redirect()->back()->with('status','لم يتم تحديث المستخدم الرجاء المحاولة مرة اخرى');  
        }
        
    }

    public function index()
    {

       $result = frappe_get_data_index('User','?fields=["name","first_name","email"]');
       
       
       return view('ar.user.index',['result' => $result->data]);

    }

    public function create_user()
    {
        return view('ar.user.register');
    }

    public function store_user(Request $request)
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
        frappe_login('administrator','123456');
        $result = frappe_register($data);
        frappe_logout();
        return redirect('/');

    }

    public function create_update_password($key){
        return view('ar.user.reset_password',compact('key'));
    }

    public function store_update_password(Request $request,$key){
        $password = $request->get('password');
        $result = frappe_update_password($key,$password);
        $result = json_decode($result);
        if($result->message =="/"){
            return redirect('/dashboard');
           
        }
        

    }


}
