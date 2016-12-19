@extends('template')
@section('lang','ar')
@section('head')
    <link href="/css/bootstrap-rtl.css" rel="stylesheet">
@endsection

@section('body')

<body id="" class="financial_system debt-show">

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
                                    <h2>تعديل مدين<h2>
                                </div>
                                
                            </div>
                        <form method='post' action="{!!action('DebtController@update',$debt->name)!!}" enctype="multipart/form-data">
                            <input type='hidden' name='_token' value="{!! csrf_token() !!}">   
                            <div class="raw">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">اسم المدين</label>
                                        <input type="text" class="form-control" id="debtor_name" placeholder="" name="debtor_name" value="{{ isset($debt->debtor_name) ? $debt->debtor_name : ""}}">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="amount">مقدار</label>
                                        <input type="text" class="form-control" id="amount" placeholder="" name="amount" value="{{ isset($debt->amount) ? $debt->amount : ""}}">
                                    </div>
                                </div>
                            </div>
                            <div class="raw">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">شرح</label>
                                        <textarea type="text" class="form-control" id="description" placeholder="" name="description"> {{ isset($debt->description) ? $debt->description : ""}}</textarea>
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