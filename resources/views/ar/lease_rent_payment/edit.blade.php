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
                    <div id="propriety_unit_form" class="page-content">
                         <div class="raw">
                                <div class='col-md-12'>
                                    <h2>عنوان<h2>
                                </div>
                                
                            </div>
                        <form method='post' action="{!!action('Lease_rent_paymentController@update',['name' => $lease_rent_payment->name])!!}" enctype="multipart/form-data">
                            <input type='hidden' name='_token' value="{!! csrf_token() !!}">   
                            <div class="form-column col-sm-6">
                               

                                <div class="form-group">
                                    <label for="amount">مقدار</label>
                                    <input type="text" class="form-control" id="amount" placeholder="" name="amount" value='{{ isset($lease_rent_payment->amount) ? $lease_rent_payment->amount : ""}}'>
                                </div>

                                <div class="form-group">
                                    <label for="duration">اسم العقد</label>
                                    <input type="text" class="form-control" id="lease" placeholder="" name="lease" value='{{ isset($lease_rent_payment->amount) ? $lease_rent_payment->lease : ""}}'>
                                </div>

                                <div class="form-group">
                                    <label for="duration">الموأجر</label>
                                    <input type="text" class="form-control" id="renter" placeholder="" name="renter" value='{{ isset($lease_rent_payment->renter) ? $lease_rent_payment->renter : ""}}'>
                                </div>

                                

                                <div class="form-group">
                                  <label for="payment_method">طريقة الدفع</label>
                                  <select id="payment_method" class="form-control" name='payment_method'  value='{{ isset($lease_rent_payment->payment_method) ? $lease_rent_payment->payment_method : ""}}'>
                                    <option value='cash'>كاش</option>
                                    <option vlaue='bank transfer'>تحويل بنكي</option>
                                  </select>
                                </div>



                                <div class="form-group">
                                  <label for="comment">شرح</label>
                                  <textarea class="form-control" rows="5" id="statement" name='statement'>{{ isset($lease_rent_payment->statement) ? $lease_rent_payment->statement : ""}}</textarea>
                                </div>
                             
                            </div>
                            <div class="form-column col-sm-6">

                                <div class="form-group">
                                    <label for="due_date">من تاريخ</label>
                                    <input type="date" class="form-control" id="due_date" placeholder="" name="due_date" value='{{ isset($lease_rent_payment->due_date) ? $lease_rent_payment->due_date : ""}}'>
                                </div>
                                <div class="form-group">
                                    <label for="to_date">لتاريخ</label>
                                    <input type="date" class="form-control" id="to_date" placeholder="" name="to_date" value='{{ isset($lease_rent_payment->to_date) ? $lease_rent_payment->to_date : ""}}'>
                                </div>
                                <div class="form-group">
                                    <label for="date">دفع في تارخ</label>
                                    <input type="date" class="form-control" id="date" placeholder="" name="date" value='{{ isset($lease_rent_payment->date) ? $lease_rent_payment->date : ""}}'>
                                </div>

                                

                            </div>
                            <div class='raw'>
                                <div class='col-md-12'><button class='btn btn-ud'>ارسال</button></div>
                            </div>
                       </form>
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