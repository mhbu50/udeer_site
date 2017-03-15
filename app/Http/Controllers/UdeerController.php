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

    public function test(Request $request)
    {
       
        return view('test');
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
        $e_docs = [];
        foreach ($doclist as $doc) {
            $result = frappe_delete($request->get('doctype'),$doc);
            if($result == "error"){
                array_push($e_docs,$doc);
            }
        }
        if(empty($e_docs)){
            $status = "لقد تمت عملية المسح بنجاح";
        }else{
            $status = "لم يتم مسح هذا البيانات: ";
            foreach ($e_docs as $docs) {
                $status = $status+$docs+"";
            }
            
        }
        return ;
    }

    public function find($doctype,$key='all')
    {
        if($key=='all'){
            $result = frappe_get_data($doctype,'?fields=["name"]')->data;
        }else{
            $result = frappe_get_data($doctype,'?fields=["name"]&filters=[["'.$doctype.'","name","like","%'.$key.'%"]]')->data;
        }
        
        
        return $result;
    }

    public function get_rent($name)
    {

        $result = frappe_get_data("property%20unit",$name);
        
        if($result->status != 'error'){
            return $result->data->annual_rent_amount;  
        }else{
            return 'error';  
        }
        
    }

    
}
