<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Validator;

class DebtController extends Controller
{
    public function create()
    {
        return view('ar.debt.create');
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
               'debtor_name' => 'required|Min:3|Max:80|AlphaNum',
               'amount' => 'required|numeric|Min:1|Max:20',
               'description' => 'Min:3|Max:300|AlphaNum'
                
            ]);

            if ($validator->fails()) {
                return redirect()->back()
                        ->withErrors($validator)
                        ->withInput();
                
        }
        $data = $request->all();
        unset($data["_token"]);
        $result = frappe_insert('debt',$data);
        return redirect('debt/index');
    }


    public function edit($name)
    {
        
        $resultObj = frappe_get_data('debt',$name);
        $debt = json_decode($resultObj)->data;
        return view('ar.debt.edit',compact('debt'));

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
        
        $result = frappe_update('debt',$name,$data);
        
        return redirect()->back();
    }

    public function index()
    {

       $resultObj = frappe_get_data('debt','?fields=["name","debtor_name","amount"]');
       $result = json_decode($resultObj)->data;
       
       return view('ar.debt.index',compact('result'));

    }

    public function set_index(Request $request)
    { 

      $filters = array();


      if($request->has('debtor_name')){
        $filters['debtor_name'] = '["debt","debtor_name","=","'.$request->get('debtor_name').'"]';
      }

      $f_ = refactor_filter($filters);

      $resultObj = frappe_get_data('debt','?fields=["name","debtor_name","amount"]&filters=['.$f_.']');
      $result = json_decode($resultObj)->data;
      return view('ar.debt.index',compact('result'));

    }

    
    public function delete_array(Request $request)
    {
        $pids = json_decode($request->get('names'));
        foreach ($pids as $property_name) {
            $resultObj = frappe_delete('debt',$property_name);
        }
        return redirect('debt/index');
    }

    public function delete($name)
    {

        $resultObj = frappe_delete('debt',$name);
        return redirect('debt/index');
    }
}
