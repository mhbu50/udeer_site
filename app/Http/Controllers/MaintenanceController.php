<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class MaintenanceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function open_issue_index()
    {
        $result = frappe_get_data_index('Issue','?fields=["*"]&filters=[["Issue","Status","=","open"]]')->data;
        return view('ar.maintenance.open_issue_index',compact('result'));
    }

    public function closed_issue_index()
    {
        $result = frappe_get_data_index('Issue','?fields=["*"]&filters=[["Issue","Status","=","closed"]]')->data;
        return view('ar.maintenance.closed_issue_index',compact('result'));
    }

    public function maintenance_team()
    {
        return view('ar.maintenance.closed_issue_index.');
    }

    public function edit()
    {
        // return view('ar.maintenance.mission_tickt');
        return 'ss';
    }
    
    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    

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
