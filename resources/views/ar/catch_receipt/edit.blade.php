@extends('template')
@section('lang','ar')
@section('head')
    <link href="/css/bootstrap-rtl.css" rel="stylesheet">
@endsection

@section('body')

<body id="" class="financial_system ca_re-show">

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
                                    <h2>سند قبض<h2>
                                </div>
                                
                            </div>
                        <form method='post' action="" enctype="multipart/form-data">
                            <input type='hidden' name='_token' value="{!! csrf_token() !!}">   
                            <div class="form-column col-sm-12">

                                <div class="form-group">
                                    <label for="">قيمة السند</label>
                                    <input type="text" class="form-control" id="amount" placeholder="" name="amount" value='{{ isset($catch_receipt->amount) ? $catch_receipt->amount : ""}}' requierd>
                                </div>

                                <div class="form-group">
                                    <label for="">العمارة</label>
                                    <input type="text" class="form-control" id="property" placeholder="" name="property" value='{{ isset($catch_receipt->propert) ? $catch_receipt->propert : ""}}' requierd>
                                </div>

                                <div class="form-group">
                                    <label for="">تاريخ السند</label>
                                    <input type="date" class="form-control" id="date" placeholder="" name="date" value='{{ isset($catch_receipt->date) ? $catch_receipt->date : ""}}' requierd>
                                </div>

                                <div class="form-group">
                                    <label for="">شرح</label>
                                    <textarea class="form-control" id="description" placeholder="" name="description" requierd>{{ isset($catch_receipt->description) ? $catch_receipt->description : ""}}</textarea>
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