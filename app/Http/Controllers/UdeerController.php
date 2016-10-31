<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Validator;

// use app\Frappe;

class UdeerController extends Controller
{
   
    public function create()
    {
        //
    }

   
    public function login(Request $request)
    {
        $usr=$request->get('email');
        $pwd=$request->get('password');
        $result = frappe_login($usr,$pwd);
        return $result;
    }   
    





        
       
     
    
}
