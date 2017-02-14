<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Validator;

class UserController extends Controller
{
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
