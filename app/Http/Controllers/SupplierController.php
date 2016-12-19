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
                'supplier_name' => 'required|Min:3|Max:80|AlphaNum',
                'national_id' => 'numeric|Min:1|Max:20',
                'mobile_number' => 'numeric|Min:1|Max:20',
                'email' => 'email|Min:3|Max:300|AlphaNum',
                'bank' => 'Min:3|Max:80|AlphaNum',
                'bank_account' => 'Min:3|Max:80|AlphaNum',
                'telephone_number' => 'numeric|Min:1|Max:20',
                'fax_number' => 'numeric|Min:1|Max:20',
                'address' => 'Min:3|Max:80|AlphaNum',
                'kafil' => 'Min:3|Max:80|AlphaNum',
                'supplier_type' => 'Min:3|Max:80|AlphaNum',
                
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

    public function set_index(Request $request)
    { 

      $filters = array();


      if($request->has('supplier_name')){
        $filters['supplier_name'] = '["Supplier","supplier_name","=","'.$request->get('supplier_name').'"]';
      }
      

      $f_ = refactor_filter($filters);

      $resultObj = frappe_get_data('Supplier','?fields=["name","supplier_name","supplier_type"]&filters=['.$f_.']');
      $result = json_decode($resultObj)->data;
      return view('ar.supplier.index',compact('result'));

    }

    public function delete_array(Request $request)
    {
        $pids = json_decode($request->get('names'));
        foreach ($pids as $property_name) {
            $resultObj = frappe_delete('Supplier',$property_name);
        }
        return redirect('supplier/index');
    }

    public function delete($name)
    {

        $resultObj = frappe_delete('Supplier',$name);
        return redirect('supplier/index');
    }
}
