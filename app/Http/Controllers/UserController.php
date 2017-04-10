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
        // var_dump($roles);
        return view('ar.user.edit',compact('user','roles'));

    }

    public function update(Request $request,$name)
    {
    
        $data = $request->all();
        unset($data["_token"]);
        // $data["user_roles"]-> = { "modified_by":"Administrator","name":"c20d12ffa4","parent":"msabukhamseen@gmail.com","creation":"2017-04-09 12:19:50.891065","modified":"2017-04-09 14:20:04.626675","doctype":"UserRole","idx":1,"parenttype":"User","role":"udeer_user","owner":"Administrator","docstatus":0,"parentfield":"user_roles"};
     
        // for ($i=0; $i < count( $request->get('user_roles') ); $i++) { 
            $data["user_roles"][0]['role'] = 'udeer_user';
            // $data["user_roles"][0]['role'] = 'udeer_user';
            // $data["user_roles"][0]['role'] = 'udeer_user';
            // $data["user_roles"][0]['role'] = 'udeer_user';
            // $data["user_roles"][0]['role'] = 'udeer_user';
        // }
        $user = frappe_get_data('User',"msabukhamseen@gmail.com")->data;

        $result = frappe_update('User',$name,$data);
        var_dump($result);
        // if($result->status != 'error'){
        //     return redirect()->back()->with('status','لقد تم تحديث المستخدم');  
        // }else{
        //     return redirect()->back()->with('status','لم يتم تحديث المستخدم الرجاء المحاولة مرة اخرى');  
        // }
        
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
