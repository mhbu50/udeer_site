<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Validator;

// use app\Frappe;

class UdeerController extends Controller
{

   
    public function edit_account(){
        $data['user'] = frappe_get_user();
        $data['company'] = frappe_get_company();
        // var_dump($data['company']);
        return view('ar.setting.edit_account',compact('data'));
    }

    public function update_account(Request $request){
        
        $data['user'] = $request->only(['first_name','email','mobile_number']);
        $data['user'] = frappe_update_user($data['user']);
        $data['company'] = frappe_get_company();
        if($request->hasFile('image')){
            $data['doctype'] = 'Company';
            $data['docname'] = $data['company']->data->company_name;
            $data['filename'] = uniqid().'.'.$request->file('image')->getClientOriginalExtension();
            $file = file_get_contents($request->file('image'));
            $base64 = base64_encode($file);
            $urlencode = urlencode($base64);
            $data['filedata'] = $urlencode;
            $data['file_type'] = $request->get('file_type');
            $result = frappe_uploadimage($data);
            if($result->status == 'success'){
                // $s_data = [];
                $s_data['logo'] = $result->data->message->file_url;
                $data['company'] = frappe_custom_function(array('function'=> 'update_company','method' => 'post','data'=> $s_data ));
                // var_dump($data['company']);
            }
           
            
        }
        
        return view('ar.setting.edit_account',compact('data'));
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
       frappe_test();
        // return view('test');
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

    public function find($doctype,$key='all',$field_search='name')
    {
        if($key=='all'){
            $result = frappe_get_data($doctype,'?fields=["*"]')->data;
        }else{
            $result = frappe_get_data($doctype,'?fields=["*"]&filters=[["'.$doctype.'","'.$field_search.'","like","%'.$key.'%"]]')->data;
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
