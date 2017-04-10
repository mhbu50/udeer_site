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
                // 'supplier_name' => 'required|Min:3|Max:80|AlphaNum',
                // 'national_id' => 'numeric|Min:1|Max:20',
                // 'mobile_number' => 'numeric|Min:1|Max:20',
                // 'email' => 'email|Min:3|Max:300|AlphaNum',
                // 'bank' => 'Min:3|Max:80|AlphaNum',
                // 'bank_account' => 'Min:3|Max:80|AlphaNum',
                // 'telephone_number' => 'numeric|Min:1|Max:20',
                // 'fax_number' => 'numeric|Min:1|Max:20',
                // 'address' => 'Min:3|Max:80|AlphaNum',
                // 'kafil' => 'Min:3|Max:80|AlphaNum',
                // 'supplier_type' => 'Min:3|Max:80|AlphaNum',
                
            ]);

            if ($validator->fails()) {
                return redirect()->back()
                        ->withErrors($validator)
                        ->withInput();
                
        }
        $data = $request->all();
        unset($data["_token"]);
        $result = frappe_insert('Supplier',$data);
        if($result->status != 'error'){
            return redirect('/supplier/index')->with('status','لقد تم حفظ مزود خدمة');  
        }else{
            return redirect('/supplier/index')->with('status','لم يتم حفظ مزود خدمة الرجاء المحاولة مرة اخرى');  
        }
    }

    public function store_ajax(Request $request)
    {
        $validator = Validator::make($request->all(), [
                
            ]);

            if ($validator->fails()) {
                return 'error';
                
        }
        $data = $request->all();
        unset($data["_token"]);
        $result = frappe_insert('Supplier',$data);

        if($result->status == 'error'){
            return 'error';  
        }else{
            return json_encode($result->data); 
        }
        
        
    }


    public function edit($name)
    {
       
        $supplier = frappe_get_data('Supplier',$name)->data;
        
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
        
        $result = frappe_update('Supplier',$name,$data);
        if($result->status != 'error'){
            return redirect()->back()->with('status','لقد تم تحديث مزود خدمة');  
        }else{
            return redirect()->back()->with('status','لم يتم تحديث مزود خدمة الرجاء المحاولة مرة اخرى');  
        }
    }

    public function index()
    {

       $result = frappe_get_data_index('Supplier','?fields=["name","supplier_name","supplier_type"]')->data;
       
       
       return view('ar.supplier.index',compact('result'));

    }

    public function set_index(Request $request)
    { 

      $filters = array();


      if($request->has('supplier_name')){
        $filters['supplier_name'] = '["Supplier","supplier_name","=","'.$request->get('supplier_name').'"]';
      }
      

      $f_ = refactor_filter($filters);

      $result = frappe_get_data('Supplier','?fields=["name","supplier_name","supplier_type"]&filters=['.$f_.']')->data;
     
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
