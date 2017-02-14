<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class DocsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($doctype,$docname)
    {
        return view('ar.doc.create',compact('doctype','docname'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store($doctype,$docname,Request $request)
    {
        $a_doctype = $doctype;
        if($doctype=="property_unit"){
            $a_doctype = str_replace('_', '%20', $doctype);
        }
        $data['doctype'] = $a_doctype;
        $data['docname'] = $docname;
        $data['filename'] = uniqid().'.'.$request->file('image')->getClientOriginalExtension();
        $file = file_get_contents($request->file('image'));
        $base64 = base64_encode($file);
        $urlencode = urlencode($base64);
        $data['filedata'] = $urlencode;
        $result = frappe_uploadimage($data);
        // var_dump($result);
        
        return redirect($doctype.'/'.$docname.'/docs');   

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($name)
    {
        $doc = frappe_get_data('File',$name);
        $doc = json_decode($doc)->data;
        // var_dump($doc);
        return view('ar.doc.show',compact('doc'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
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
