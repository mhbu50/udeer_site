@extends('template')
@section('lang','ar')
@section('head')
    <link href="/css/bootstrap-rtl.css" rel="stylesheet">
@endsection

@section('body')

<body id="" class="customer_management supplier-show">

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
                                    <h2>اضافة مزود خدمة<h2>
                                </div>
                                
                            </div>
                        <form method='post' action="{!!action('SupplierController@create')!!}" enctype="multipart/form-data">
                            <input type='hidden' name='_token' value="{!! csrf_token() !!}">   
                            <div class='raw'>
                                <div class='col-md-6'>
                                    <div class="form-group">
                                        <label for="supplier_name">اسم المزود الخدمة</label>
                                        <input type="text" class="form-control" id="supplier_name" placeholder="" name="supplier_name">
                                    </div>
                                </div>
                                <div class='col-md-6'>
                                    <div class="form-group">
                                        <label for="national_id">رقم الهوية الوطنية</label>
                                        <input type="text" class="form-control" id="national_id" placeholder="" name="national_id">
                                    </div>
                                </div>
                            </div>


                            <div class='raw'>
                                <div class='col-md-6'>
                                    <div class="form-group">
                                        <label for="mobile_number">رقم الجوال</label>
                                        <input type="text" class="form-control" id="mobile_number" placeholder="" name="mobile_number">
                                    </div>
                                </div>
                                <div class='col-md-6'>
                                    <div class="form-group">
                                        <label for="email">البريد الالكتروني</label>
                                        <input type="text" class="form-control" id="email" placeholder="" name="email">
                                    </div>
                                </div>
                            </div>

                            <div class='raw'>
                                <div class='col-md-6'>
                                    <div class="form-group">
                                        <label for="mobile_number">اسم البنك</label>
                                        <input type="text" class="form-control" id="bank" placeholder="" name="bank">
                                    </div>
                                </div>
                                <div class='col-md-6'>
                                    <div class="form-group">
                                        <label for="email">رقم الحساب</label>
                                        <input type="text" class="form-control" id="bank_account" placeholder="" name="bank_account">
                                    </div>
                                </div>
                            </div>


                            <div class='raw'>
                                <div class='col-md-6'>
                                    <div class="form-group">
                                        <label for="telephone_number">رقم الهاتف</label>
                                        <input type="text" class="form-control" id="telephone_number" placeholder="" name="telephone_number">
                                    </div>
                                </div>
                                <div class='col-md-6'>
                                    <div class="form-group">
                                        <label for="fax_number">رقم الفاكس</label>
                                        <input type="text" class="form-control" id="fax_number" placeholder="" name="fax_number">
                                    </div>
                                </div>
                            </div>

                            <div class='raw'>
                                <div class='col-md-6'>
                                    <div class="form-group">
                                        <label for="address">العنوان</label>
                                        <input type="text" class="form-control" id="address" placeholder="" name="address">
                                    </div>
                                </div>
                                <div class='col-md-6'>
                                    <div class="form-group">
                                        <label for="kafil">اسم الكفيل</label>
                                        <input type="text" class="form-control" id="kafil" placeholder="" name="kafil">
                                    </div>
                                </div>
                            </div>
                             <div class='raw'>
                                <div class='col-md-6'>
                                    <div class="form-group">
                                        <label for="supplier_type">نوع الخدمة</label>
                                        <input type="text" class="form-control" id="supplier_type" placeholder="" name="supplier_type">
                                    </div>
                                </div>
                                
                            </div>
                            <div class='raw'>
                                <div class='col-md-12'><button class='btn btn-ud'>ارسال</button></div>
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