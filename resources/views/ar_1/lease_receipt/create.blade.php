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
                        <form method='post' action="{!!action('Lease_receiptController@create')!!}" enctype="multipart/form-data">
                            <input type='hidden' name='_token' value="{!! csrf_token() !!}">   
                            <div class="form-column col-sm-12">

                                <div class="form-group">
                                    <label for="">قيمة السند</label>
                                    <input type="text" class="form-control" id="amount" placeholder="" name="amount" requierd>
                                </div>
                                <div class="form-group">
                                    <label for="type">نوع السند</label>
                                    <select id="type" class="form-control" name='type'>
                                        <option value='Catch'>سند قبض</option>
                                        <option value='pay'>سند صرف</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="">عقد الايجار</label>
                                    <input type="text" class="form-control" id="lease" placeholder="" name="lease" requierd>
                                </div>

                                <div class="form-group">
                                    <label for="">تاريخ السند</label>
                                    <input type="text" class="form-control" id="date" placeholder="" name="date" requierd>
                                </div>

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