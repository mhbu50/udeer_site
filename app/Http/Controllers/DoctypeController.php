<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class DoctypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($doctype,Request $request)
    {   
        $fields = $request->get('fields') ? $request->get('fields') : "" ;
        if($fields){
            $fields = ',"'.$fields.'"';
        }
        
        $result = frappe_get_data_index($doctype,'?fields=["name"'.$fields.']');
        if($result->status == 'success'){
            $result = $result->data;
            return view('ar.doctype.index',compact('result','doctype'));
            
        }else{
            return redirect()->back()->with('status','الرجاء المحاولة مرة اخرى');  
        }
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($doctype)
    {
        $result = frappe_get_data('DocField','?fields=["fieldname","fieldtype","options","label","idx"]&filters=[["DocField","parent","like","'.$doctype.'"],["DocField","fieldtype","not in",["Column Break","Attach","Attach Image","Button","Code","Column Break","Dynamic Link","Fold","Heading","HTML","Image","Section Break","Table"] ]]&order_by=idx');
        // var_dump($result);
        if($result->status == 'success'){
            $result = $result->data;
            return view('ar.doctype.create',compact('result','doctype'));
            
        }else{
            return redirect()->back()->with('status','الرجاء المحاولة مرة اخرى');  
        }

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store($doctype , Request $request)
    {
        $data = $request->all();
        unset($data["_token"]);
        $result = frappe_insert($doctype,$data);
        if($result->status == 'success'){
            return redirect('/doctype/'.$doctype.'/index')->with('status','لقد تم حفظ ');  
        }else{
            return redirect('/doctype/'.$doctype.'/index')->with('status','لم يتم حفظ الرجاء المحاولة مرة اخرى');  
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($doctype,$docname)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($doctype,$docname)
    {
        $doctype_fields = frappe_get_data('DocField','?fields=["fieldname","fieldtype","options","label"]&filters=[["DocField","parent","like","'.$doctype.'"],["DocField","fieldtype","!=","Data"]]');
        $doc_data = frappe_get_data($doctype,$docname);
        // var_dump($doc_data);
        if($doctype_fields->status == 'success' && $doc_data->status == 'success' ){
            $doctype_fields = $doctype_fields->data;
            $doc_data = $doc_data->data;
            return view('ar.doctype.edit',compact('docname','doctype','doctype_fields','doc_data'));
        }else{
            return redirect()->back()->with('status','الرجاء المحاولة مرة اخرى');  
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$doctype,$docname)
    {
        $data = $request->all();
        unset($data["_token"]);
        
        $result = frappe_update($doctype,$docname,$data);
        if($result->status != 'error'){
            return redirect()->back()->with('status','لقد تم التحديث ');  
        }else{
            return redirect()->back()->with('status','لم يتم تحديث الرجاء المحاولة مرة اخرى');  
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
