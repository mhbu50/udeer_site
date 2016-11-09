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

                                <div class="form-group">
                                    <label for="Company_name">اسم الشركة</label>
                                    <input type="text" class="form-control" id="Company_name" placeholder="اسم الشركة" name="Company_name" requierd>
                                </div>

                                <div class="form-group">
                                    <label for="abbr">Abbr</label>
                                    <input type="text" class="form-control" id="abbr" placeholder="" name="abbr">
                                </div>

                                <div class="form-group">
                                    <label for="country">الدولة</label>
                                    <input type="text" class="form-control" id="country" placeholder="" name="country">
                                </div>

                                <div class="form-group">
                                    <label for="default_currency">عملة</label>
                                    <input type="text" class="form-control" id="default_currency" placeholder="" name="default_currency">
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