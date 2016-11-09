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
        $result = frappe_register($data);
        var_dump($result);

    }


}
