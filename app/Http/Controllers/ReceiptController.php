<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Validator;

class ReceiptController extends Controller
{
   public function create()
    {
        $properties = frappe_get_data('property','?fields=["name"]');
        $properties = json_decode($properties)->data;
        return view('ar.receipt.create',compact('properties'));
    }

    public function store(Request $request)
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
        $result = frappe_insert('receipt',$data);
        return redirect('/receipt/index'); 
        
    }


    public function edit($name)
    {
       
        $resultObj = frappe_get_data('receipt',$name);
        $receipt = json_decode($resultObj)->data;
        return view('ar.receipt.edit',compact('receipt'));

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
        
        $result = frappe_update('receipt',$name,$data);
        
        return redirect()->back();
    }

    public function index()
    {
       $resultObj = frappe_get_data('receipt','?fields=["name","amount","type","property","date"]');
       $result = json_decode($resultObj)->data;
       // var_dump($result);
       return view('ar.receipt.index',['result' => $result,'type' => 'all']);
    }

    public function catch_index()
    {
       $resultObj = frappe_get_data('receipt','?fields=["name","amount","type","property","date"]&filters=[["receipt","type","=","catch"]]');
       $result = json_decode($resultObj)->data;
       // var_dump($result);
       return view('ar.receipt.index',['result' => $result,'type' => 'catch']);
    }
    public function pay_index()
    {
       $resultObj = frappe_get_data('receipt','?fields=["name","amount","type","property","date"]&filters=[["receipt","type","=","pay"]]');
       $result = json_decode($resultObj)->data;
       return view('ar.receipt.index',['result' => $result,'type' => 'pay']);
    }

    public function set_index(Request $request)
    { 
      $filters = array();

      
      if($request->has('name')){
        $filters['name'] = '["receipt","name","=","'.$request->get('name').'"]';
      }
      if($request->has('type')){
        $filters['type'] = '["receipt","type","=","'.$request->get('type').'"]';
      }
      $f_ = refactor_filter($filters);

      $resultObj = frappe_get_data('receipt','?fields=["name","amount","property","date"]&filters=['.$f_.']');
      $result = json_decode($resultObj)->data;
      return view('ar.receipt.index',compact('result'));
    }

    public function delete($name)
    {

        $resultObj = frappe_delete('receipt',$name);
        return redirect('receipt/index');
    }
}
