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
                        <form method='post' action="{!!action('RenterController@create')!!}" enctype="multipart/form-data">
                            <input type='hidden' name='_token' value="{!! csrf_token() !!}">   
                            <div class='raw'>
                                <div class='col-md-6'>
                                    <div class="form-group">
                                        <label for="customer_name">اسم الكامل</label>
                                        <input type="text" class="form-control" id="customer_name" placeholder="" name="customer_name">
                                    </div>
                                </div>
                                <div class='col-md-6'>
                                    <div class="form-group">
                                        <label for="id_number">رقم الهوية</label>
                                        <input type="text" class="form-control" id="id_number" placeholder="" name="id_number">
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
                                        <input type="email" class="form-control" id="email" placeholder="" name="email">
                                    </div>
                                </div>
                            </div>

                            <div class='raw'>
                                <div class='col-md-6'>
                                    <div class="form-group">
                                        <label for="bank">اسم البنك</label>
                                        <select id="bank" class="form-control" name='bank'>
                                            <option value="alriyadh">الرياض</option>
                                            <option value="alarabi">العربي</option>
                                            <option value="alahli">الاهلى</option>
                                        </select>
                                    </div>
                                </div>
                                <div class='col-md-6'>
                                    <div class="form-group">
                                        <label for="bank_account_number">رقم الحساب</label>
                                        <input type="text" class="form-control" id="bank_account_number" placeholder="" name="bank_account_number">
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
                                        <label for="fax">رقم الفاكس</label>
                                        <input type="text" class="form-control" id="fax" placeholder="" name="fax">
                                    </div>
                                </div>
                            </div>
                            <div class='raw'>
                                <div class='col-md-6'>
                                    <div class="form-group">
                                        <label for="territory">الدولة</label>
                                        <select type="text" class="form-control" id="territory" placeholder="" name="territory">
                                            <option value="Saudi Arabia">المملكة العربية السعودية</option>
                                           
                                        </select>
                                    </div>
                                </div>
                                <div class='col-md-6'>
                                    <div class="form-group">
                                        <label for="customer_type">نوع العميل</label>
                                        <select class="form-control" id="customer_type" placeholder="" name="customer_type">
                                            <option value="Individual">فرد</option>
                                            <option value="Company">شركة</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class='raw'>
                                <div class='col-md-12'>
                                    <div class="form-group">
                                        <label for="address">العنوان</label>
                                        <textarea name="address" class="form-control" id="address"></textarea>
                                        
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