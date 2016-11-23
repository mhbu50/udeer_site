<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Validator;
class SupplierController extends Controller
{
    public function create()
    {
        return view('ar.supplier.create');
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
        $result = frappe_insert('Supplier',$data);
       return redirect('supplier/index');
    }


    public function edit($name)
    {
       
        $resultObj = frappe_get_data('Supplier',$name);
        $supplier = json_decode($resultObj)->data;
        return view('ar.supplier.edit',compact('supplier'));

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
        
        $result = frappe_update('supplier',$name,$data);
        
        return redirect()->back();
    }

    public function index()
    {

       $resultObj = frappe_get_data('Supplier','?fields=["name","supplier_name","supplier_type"]');
       $result = json_decode($resultObj)->data;
       
       return view('ar.supplier.index',compact('result'));

    }

    public function delete($name)
    {

        $resultObj = frappe_delete('Supplier',$name);
        return redirect('supplier/index');
    }
}
