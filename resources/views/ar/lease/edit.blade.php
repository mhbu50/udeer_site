@extends('template')
@section('lang','ar')
@section('head')
    <link href="/css/bootstrap-rtl.css" rel="stylesheet">
@endsection

@section('body')

<body id="" class="lease_management l-show">

    <section id="temp1">
        
            <div id="c-nav">
                @include('ar.ar_nav')
            </div>

   <div class="container-fluid c-body-con">
        <div class="col-md-9">
            <div class="raw">
                <div class="" >
                    <div id="propriety_unit_form" class="page-content">
                         <div class="raw">
                                <div class='col-md-12'>
                                    <h2><h2>
                                </div>
                                
                            </div>
                         <form method='post' action="{!!action('LeaseController@update',['name' => $lease->name])!!}" enctype="multipart/form-data">
                            <input type='hidden' name='_token' value="{!! csrf_token() !!}">   
                            <div class="form-column col-sm-6">
                               

                                <div class="form-group">
                                    <label for="date">تاريخ</label>
                                    <input type="date" class="form-control" id="date" placeholder="" name="date" value='{{ isset($lease->date) ? $lease->date : ""}}'>
                                </div>
                                <div class="form-group">
                                    <label for="duration">دورة</label>
                                    <input type="text" class="form-control" id="duration" placeholder="" name="duration" value='{{ isset($lease->duration) ? $lease->duration : ""}}'>
                                </div>

                                <div class="form-group">
                                    <label for="lease_writing_date">تاربخ امضاء العقد</label>
                                    <input type="date" class="form-control" id="lease_writing_date" placeholder="" name="lease_writing_date" value='{{ isset($lease->lease_writing_date) ? $lease->lease_writing_date : ""}}'>
                                </div>

                                <div class="form-group">
                                    <label for="lease_starting_date">تاربخ بدء الايجار</label>
                                    <input type="date" class="form-control" id="lease_starting_date" placeholder="" name="lease_starting_date" value='{{ isset($lease->lease_starting_date) ? $lease->lease_starting_date : ""}}'>
                                </div>

                                <div class="form-group">
                                    <label for="expiry_date">تاربخ انتهاء العقد</label>
                                    <input type="date" class="form-control" id="expiry_date" placeholder="" name="expiry_date" value='{{ isset($lease->expiry_date) ? $lease->expiry_date : ""}}'>
                                </div>
                             
                            </div>
                            <div class="form-column col-sm-6">

                           

                                <div class="form-group">
                                    <label for="renter">المستاجر</label>
                                    <input type="text" class="form-control" id="renter" placeholder="" name="renter" value='{{ isset($lease->renter) ? $lease->renter : ""}}'>
                                </div>

                                <div class="form-group">
                                    <label for="property">العقار</label>
                                    <input type="text" class="form-control" id="property" placeholder="" name="property" value='{{ isset($lease->property) ? $lease->property : ""}}'>
                                </div>

                                 <div class="form-group">
                                    <label for="number_of_payments">عدد الدفعات</label>
                                    <input type="text" class="form-control" id="number_of_payments" placeholder="" name="number_of_payments" value='{{ isset($lease->number_of_payments) ? $lease->number_of_payments : ""}}'>
                                </div>

                                <div class="form-group">
                                    <label for="property unit">وحدة العقار</label>
                                    <input type="text" class="form-control" id="property_unit" placeholder="" name="property_unit" value='{{ isset($lease->property_unit) ? $lease->property_unit : ""}}'>
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