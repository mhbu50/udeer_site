@extends('template')
@section('lang','ar')
@section('head')
    <link href="/css/bootstrap-rtl.css" rel="stylesheet">
@endsection

@section('body')

<body  >

    <section id="temp1">
        
            <div id="c-nav">
                @include('ar.ar_nav')
            </div>

   <div class="container c-body-con">
        <div class="col-md-9">
            <div class="raw">
                <div class="col-md-12 col-md-offset-0" >
                    <div id="" class="page-content">
                         <div class="raw">
                                <div class='col-md-12'>
                                    <h2>عنوان<h2>
                                </div>
                                
                            </div>
                        <form method='post' action="{!!action('ComplainController@create')!!}" enctype="multipart/form-data">
                            <input type='hidden' name='_token' value="{!! csrf_token() !!}">   
                            <div class="form-column col-sm-6">

                                <p>details</p>
                                <div class="form-group">
                                    <label for="Company_name">Company</label>
                                    <input type="text" class="form-control" id="Company_name" placeholder="Company_name" name="Company_name" value='{{ isset($company->) ? $company->status : ""}}'>
                                </div>

                                <div class="form-group">
                                    <label for="abbr">Abbr</label>
                                    <input type="text" class="form-control" id="abbr" placeholder="" name="abbr" value='{{ isset($company->) ? $company->status : ""}}'>
                                </div>

                                <p>cb0</p>
                                 <div class="form-group">
                                  <label for="domain">domain</label>
                                  <select id="domain" class="form-control" name='domain' value='{{ isset($company->) ? $company->status : ""}}'>
                                    <option value="Distribution">Distribution</option>
                                    <option value="Manufacturing">Manufacturing</option>
                                    <option value="Retail">Retail</option>
                                    <option value="Services">Services</option>
                                    <option value="Education">Education</option>
                                    <option value="Other">Other</option>
                                  </select>
                                </div>

                                <div class="form-group">
                                    <label for="default_letter_head">default_letter_head</label>
                                    <input type="text" class="form-control" id="default_letter_head" placeholder="" name="default_letter_head" value='{{ isset($company->) ? $company->status : ""}}'>
                                </div>
                                <div class="form-group">
                                    <label for="default_holiday_list">default_holiday_list</label>
                                    <input type="text" class="form-control" id="default_holiday_list" placeholder="" name="default_holiday_list" value='{{ isset($company->) ? $company->status : ""}}'>
                                </div>
                                <div class="form-group">
                                    <label for="default_terms">default_terms</label>
                                    <input type="text" class="form-control" id="default_terms" placeholder="" name="default_terms" value='{{ isset($company->) ? $company->status : ""}}'>
                                </div>

                                

                                <div class="form-group">
                                    <label for="country">country</label>
                                    <input type="text" class="form-control" id="country" placeholder="" name="country" value='{{ isset($company->) ? $company->status : ""}}'>
                                </div>

                                <div class="form-group">
                                    <label for="default_currency">default_currency</label>
                                    <input type="text" class="form-control" id="default_currency" placeholder="" name="default_currency" value='{{ isset($company->) ? $company->status : ""}}'>
                                </div>

                                 <div class="form-group">
                                  <label for="chart_of_accounts">chart_of_accounts</label>
                                  <select id="chart_of_accounts" class="form-control" name='chart_of_accounts' value='{{ isset($company->) ? $company->status : ""}}'>
                                    <option value="Standard">Standard</option>
                                  </select>
                                </div>


                                <p>ACCOUNTS SETTINGS</p>

                                <div class="form-group">
                                    <label for="default_bank_account">default_bank_account</label>
                                    <input type="text" class="form-control" id="default_bank_account" placeholder="" name="default_bank_account" value='{{ isset($company->) ? $company->status : ""}}'>
                                </div>
                                <div class="form-group">
                                    <label for="default_cash_account">default_cash_account</label>
                                    <input type="text" class="form-control" id="default_cash_account" placeholder="" name="default_cash_account" value='{{ isset($company->) ? $company->status : ""}}'>
                                </div>
                                <div class="form-group">
                                    <label for="default_receivable_account">default_receivable_account</label>
                                    <input type="text" class="form-control" id="default_receivable_account" placeholder="" name="default_receivable_account" value='{{ isset($company->) ? $company->status : ""}}'>
                                </div>
                                <div class="form-group">
                                    <label for="round_off_account">round_off_account</label>
                                    <input type="text" class="form-control" id="round_off_account" placeholder="" name="round_off_account" value='{{ isset($company->) ? $company->status : ""}}'>
                                </div>
                                <div class="form-group">
                                    <label for="write_off_account">write_off_account</label>
                                    <input type="text" class="form-control" id="write_off_account" placeholder="" name="write_off_account" value='{{ isset($company->) ? $company->status : ""}}'>
                                </div>
                                <div class="form-group">
                                    <label for="exchange_gain_loss_account">exchange_gain_loss_account</label>
                                    <input type="text" class="form-control" id="exchange_gain_loss_account" placeholder="" name="exchange_gain_loss_account" value='{{ isset($company->) ? $company->status : ""}}'>
                                </div>

                                <div class="form-group">
                                    <label for="default_payable_account">default_payable_account</label>
                                    <input type="text" class="form-control" id="default_payable_account" placeholder="" name="default_payable_account" value='{{ isset($company->) ? $company->status : ""}}'>
                                </div>


                                <div class="form-group">
                                    <label for="default_expense_account">default_expense_account</label>
                                    <input type="text" class="form-control" id="default_expense_account" placeholder="" name="default_expense_account" value='{{ isset($company->) ? $company->status : ""}}'>
                                </div>

                                <div class="form-group">
                                    <label for="default_income_account">default_income_account</label>
                                    <input type="text" class="form-control" id="default_income_account" placeholder="" name="default_income_account" value='{{ isset($company->) ? $company->status : ""}}'>
                                </div>

                                <div class="form-group">
                                    <label for="round_off_cost_center">round_off_cost_center</label>
                                    <input type="text" class="form-control" id="round_off_cost_center" placeholder="" name="round_off_cost_center" value='{{ isset($company->) ? $company->status : ""}}'>
                                </div>

                                <p>sb</p>

                                <div class="form-group">
                                    <label for="cost_center">cost_center</label>
                                    <input type="text" class="form-control" id="cost_center" placeholder="" name="cost_center" value='{{ isset($company->) ? $company->status : ""}}'>
                                </div>

                                <div class="form-group">
                                    <label for="credit_limit">credit_limit</label>
                                    <input type="text" class="form-control" id="credit_limit" placeholder="" name="credit_limit" value='{{ isset($company->) ? $company->status : ""}}'>
                                </div>

                                

                                 <div class="form-group">
                                  <label for="credit_days_based_on">credit_days_based_on</label>
                                  <select id="credit_days_based_on" class="form-control" name='credit_days_based_on' value='{{ isset($company->) ? $company->status : ""}}'>
                                    <option value="Fixed Days">Fixed Days</option>
                                    <option value="Last Day of the Next Month">Last Day of the Next Month</option>
                                  </select>
                                </div>


                                <div class="form-group">
                                    <label for="credit_days">credit_days</label>
                                    <input type="text" class="form-control" id="credit_days" placeholder="" name="credit_days" value='{{ isset($company->) ? $company->status : ""}}'>
                                </div>


                                 <p>Stock Settings</p>

                                 

                                <div class="form-group">
                                    <label for="stock_received_but_not_billed">stock_received_but_not_billed</label>
                                    <input type="text" class="form-control" id="stock_received_but_not_billed" placeholder="" name="stock_received_but_not_billed" value='{{ isset($company->) ? $company->status : ""}}'>
                                </div>

                                <div class="form-group">
                                    <label for="stock_adjustment_account">stock_adjustment_account</label>
                                    <input type="text" class="form-control" id="stock_adjustment_account" placeholder="" name="stock_adjustment_account" value='{{ isset($company->) ? $company->status : ""}}'>
                                </div>

                                 <div class="form-group">
                                    <label for="expenses_included_in_valuation">expenses_included_in_valuation</label>
                                    <input type="text" class="form-control" id="expenses_included_in_valuation" placeholder="" name="expenses_included_in_valuation" value='{{ isset($company->) ? $company->status : ""}}'>
                                </div>

                                <p>fixed_asset_depreciation_settings</p>

                                <div class="form-group">
                                    <label for="accumulated_depreciation_account">accumulated_depreciation_account</label>
                                    <input type="text" class="form-control" id="accumulated_depreciation_account" placeholder="" name="accumulated_depreciation_account" value='{{ isset($company->) ? $company->status : ""}}'>
                                </div>
                                <div class="form-group">
                                    <label for="depreciation_expense_account">depreciation_expense_account</label>
                                    <input type="text" class="form-control" id="depreciation_expense_account" placeholder="" name="depreciation_expense_account" value='{{ isset($company->) ? $company->status : ""}}'>
                                </div>
                                <div class="form-group">
                                    <label for="disposal_account">disposal_account</label>
                                    <input type="text" class="form-control" id="disposal_account" placeholder="" name="disposal_account" value='{{ isset($company->) ? $company->status : ""}}'>
                                </div>
                                <div class="form-group">
                                    <label for="depreciation_cost_center">depreciation_cost_center</label>
                                    <input type="text" class="form-control" id="depreciation_cost_center" placeholder="" name="depreciation_cost_center" value='{{ isset($company->) ? $company->status : ""}}'>
                                </div>

                                <p>Company Info</p>

                                <div class="form-group">
                                  <label for="address">address</label>
                                  <textarea class="form-control" rows="5" id="address" name='address'>{{ isset($company->) ? $company->status : ""}}</textarea>
                                </div>
                                <div class="form-group">
                                    <label for="phone_no">phone_no</label>
                                    <input type="text" class="form-control" id="phone_no" placeholder="" name="phone_no" value='{{ isset($company->) ? $company->status : ""}}'>
                                </div>
                                <div class="form-group">
                                    <label for="fax">fax</label>
                                    <input type="text" class="form-control" id="fax" placeholder="" name="fax" value='{{ isset($company->) ? $company->status : ""}}'>
                                </div>
                                <div class="form-group">
                                    <label for="email">email</label>
                                    <input type="email" class="form-control" id="email" placeholder="" name="email" value='{{ isset($company->) ? $company->status : ""}}'>
                                </div>
                                <div class="form-group">
                                    <label for="website">website</label>
                                    <input type="text" class="form-control" id="website" placeholder="" name="website" value='{{ isset($company->) ? $company->status : ""}}'>
                                </div>

                                <p>sb</p>

                                <div class="form-group">
                                  <label for="registration_details">registration_details</label>
                                  <textarea class="form-control" rows="5" id="registration_details" name='registration_details'>{{ isset($company->) ? $company->status : ""}}</textarea>
                                </div>
                                <button>delete_company_transactions</button>
    
                            </div>
                            <div class='raw'>
                                <div class='col-md-12'><button class='btn btn-ud'>حفظ</button></div>
                            </div>
                       
                    </div>

                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div id="side_menu" >
                @include('ar.ar_side')
            </div>
        </div>
    </div>


 
    <footer id="footer">
       @include('ar.ar_footer')
    </footer>
</body>
@endsection