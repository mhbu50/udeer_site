<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class ReportController extends Controller
{
    
    public function property()
    {
        return view('ar.reports.property');
    }

    public function customer()
    {
        return view('ar.reports.customer');
    }

    public function contract()
    {
        return view('ar.reports.contract');
    }

    public function instalment()
    {
        return view('ar.reports.instalment');
    }

    public function instalment_all()
    {
        return view('ar.reports.instalment_all');
    }

    public function owner_fin()
    {
        return view('ar.reports.owner_fin');
    }

    public function lease_report()
    {
        return view('ar.reports.lease_report');
    }

    public function client_report()
    {
        return view('ar.reports.client_report');
    }

    public function unpaid_instalment_report()
    {
        return view('ar.reports.unpaid_instalment_report');
    }

    public function pay_reciept_report()
    {
        return view('ar.reports.pay_reciept_report');
    }
    public function property_unit()
    {
        return view('ar.reports.property_unit');
    }

    public function fin_property_report()
    {
        return view('ar.reports.fin_property_report');
    }

    public function fin_owner_report()
    {
        return view('ar.reports.fin_owner_report');
    }

    public function fin_renter_acount_report()
    {
        return view('ar.reports.fin_renter_acount_report');
    }

    public function fin_renter_payment_report()
    {
        return view('ar.reports.fin_renter_payment_report');
    }

    public function fin_renter_report()
    {
        return view('ar.reports.fin_renter_report');
    }

    public function fine_unit_report()
    {
        return view('ar.reports.fine_unit_report');
    }

    public function fine_acount_report()
    {
        return view('ar.reports.fine_acount_report');
    }

    public function fine_management_report()
    {
        return view('ar.reports.fine_management_report');
    }
}
