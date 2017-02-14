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

    public function logout()
    {
        $result = frappe_logout();
        var_dump($result);
        // return $result;
    }   

    public function test()
    {
       $result = test();
        var_dump($result);
        // return "ss";
    } 

     public function ptest(Request $request)
    {
        $im = $data["image"];
        $data["image"] = base64_encode($im); 
        
        // return "ss";
    } 

    public function admin()
    {
       
        return view('admin');
        
    }   


    public function delete_array(Request $request)
    {
        $doclist = json_decode($request->get('names'));
        foreach ($doclist as $doc) {
            $resultObj = frappe_delete($request->get('doctype'),$doc);
        }
        return ;
    }

    public function find($doctype,$key)
    {
        $result = frappe_get_data($doctype,'?fields=["name"]&filters=[["'.$doctype.'","name","like","%'.$key.'%"]]');
        $result = json_decode($result)->data;
        return $result;
    }

    



    





        
       
     
    
}
