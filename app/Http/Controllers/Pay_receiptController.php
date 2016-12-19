<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Validator;

class Pay_receiptController extends Controller
{
   public function create()
    {
        $properties = frappe_get_data('property','?fields=["name"]');
        $properties = json_decode($properties)->data;
        return view('ar.pay_receipt.create',compact('properties'));
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
           'amount' =>  'required|numeric|Min:1|Max:20',
           'property' => 'required|Min:3|Max:80|AlphaNum',
           'date' => 'date|date_format:Y-m-d',
           'description' => 'Min:3|Max:300|AlphaNum',
                 
                
            ]);

            if ($validator->fails()) {
                return redirect()->back()
                        ->withErrors($validator)
                        ->withInput();
                
        }
        $data = $request->all();
        unset($data["_token"]);
        $result = frappe_insert('pay%20receipt',$data);
       return redirect('pay_receipt/index');
    }


    public function edit($name)
    {
       
        $resultObj = frappe_get_data('pay%20receipt',$name);
        $pay_receipt = json_decode($resultObj)->data;
        return view('ar.pay_receipt.edit',compact('pay_receipt'));

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
        
        $result = frappe_update('pay%20receipt',$name,$data);
        
        return redirect()->back();
    }

    public function index()
    {
       $resultObj = frappe_get_data('pay%20receipt','?fields=["name","amount","property","date"]');
       $result = json_decode($resultObj)->data;
       
       return view('ar.pay_receipt.index',compact('result'));

    }

    public function set_index(Request $request)
    { 

      $filters = array();


      if($request->has('name')){
        $filters['name'] = '["pay%20receipt","name","=","'.$request->get('name').'"]';
      }
      $f_ = refactor_filter($filters);

      $resultObj = frappe_get_data('pay%20receipt','?fields=["name","amount","property","date"]&filters=['.$f_.']');
      $result = json_decode($resultObj)->data;
      return view('ar.pay_receipt.index',compact('result'));
    }

    public function delete_array(Request $request)
    {
        $pids = json_decode($request->get('names'));
        foreach ($pids as $property_name) {
            $resultObj = frappe_delete('pay%20receipt',$property_name);
        }
        return redirect('pay_receipt/index');
    }


    public function delete($name)
    {

        $resultObj = frappe_delete('pay%20receipt',$name);
        return redirect('pay_receipt/index');
    }
}
