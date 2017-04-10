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
        $properties = frappe_get_data('property','?fields=["name"]')->data;
        $properties = $properties;
        return view('ar.receipt.create',compact('properties'));
    }

    public function store(Request $request)
    {
      var_dump($request->get('test'));
        // $validator = Validator::make($request->all(), [
           
                 
                
        //     ]);

        //     if ($validator->fails()) {
        //         return redirect()->back()
        //                 ->withErrors($validator)
        //                 ->withInput();
                
        // }
        // $data = $request->all();
        // unset($data["_token"]);
        // $result = frappe_insert('receipt',$data);
        
        // $company_name = frappe_get_data('User','Administrator')->data->company;
        // $amount = 0;
        // if ($request->get('type') == 'catch'){
        //   $amount = (int)$request->get('amount');
        // }elseif($request->get('type') == 'pay'){
        //   $amount = -(int)$request->get('amount');
        // }
        
        // if($result->status != 'error'){
        //     return redirect('/receipt/index')->with('status','لقد تم حفظ السند');  
        // }else{
        //     return redirect('/receipt/index')->with('status','لم يتم حفظ السند الرجاء المحاولة مرة اخرى');  
        // }
        
        
    }


    public function edit($name)
    {
       
        $receipt = frappe_get_data('receipt',$name)->data;
        
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
        if($result->status != 'error'){
            return redirect()->back()->with('status','لقد تم تحديث السند');  
        }else{
            return redirect()->back()->with('status','لم يتم تحديث السند الرجاء المحاولة مرة اخرى');  
        }
        
    }

    public function index()
    {
       $result = frappe_get_data_index('receipt','?fields=["name","amount","type","property","date"]')->data;
       
       // var_dump($result);
       return view('ar.receipt.index',['result' => $result,'type' => 'all']);
    }

    public function catch_index()
    {
       $result = frappe_get_data_index('receipt','?fields=["name","amount","type","property","date"]&filters=[["receipt","type","=","catch"]]')->data;
       
       // var_dump($result);
       return view('ar.receipt.index',['result' => $result,'type' => 'catch']);
    }
    public function pay_index()
    {
       $result = frappe_get_data_index('receipt','?fields=["name","amount","type","property","date"]&filters=[["receipt","type","=","pay"]]')->data;
      
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

      $result = frappe_get_data('receipt','?fields=["name","amount","property","date"]&filters=['.$f_.']');
     
      return view('ar.receipt.index',compact('result'));
    }

    public function delete($name)
    {

        $resultObj = frappe_delete('receipt',$name);
        return redirect('receipt/index');
    }
}
