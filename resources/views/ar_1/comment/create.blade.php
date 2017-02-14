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
                                    <h2>aa<h2>
                                </div>
                                
                            </div>
                        <form method='post' action="{!!action('SupplierController@create')!!}" enctype="multipart/form-data">
                            <input type='hidden' name='_token' value="{!! csrf_token() !!}">   
                            <div class='raw'>
                                <div class='col-md-6'>
                                    <div class="form-group">
                                        <label for="supplier_name">اسم االمزود الخدمة</label>
                                        <input type="text" class="form-control" id="supplier_name" placeholder="" name="supplier_name">
                                    </div>
                                </div>
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