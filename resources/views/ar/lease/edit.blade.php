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
                                    <label for="rent_writing_date">تاربخ امضاء العقد</label>
                                    <input type="text" class="form-control" id="rent_writing_date" placeholder="" name="rent_writing_date" value='{{ isset($lease->rent_writing_date) ? $lease->rent_writing_date : ""}}'>
                                </div>

                                <div class="form-group">
                                    <label for="rent_starting_date">تاربخ بدء الايجار</label>
                                    <input type="text" class="form-control" id="rent_starting_date" placeholder="" name="rent_starting_date" value='{{ isset($lease->rent_starting_date) ? $lease->rent_starting_date : ""}}'>
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