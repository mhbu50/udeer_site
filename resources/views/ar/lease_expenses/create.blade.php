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
                        <form method='post' action="{!!action('Lease_expensesController@create')!!}" enctype="multipart/form-data">
                            <input type='hidden' name='_token' value="{!! csrf_token() !!}">   
                            <div class="form-column col-sm-12">
                               

                                <div class="form-group">
                                    <label for="amount">تاريخ</label>
                                    <input type="date" class="form-control" id="date" placeholder="" name="date">
                                </div>

                                <div class="form-group">
                                    <label for="amount">مقدار</label>
                                    <input type="text" class="form-control" id="amount" placeholder="" name="amount">
                                </div>

                            



                                <div class="form-group">
                                  <label for="comment">شرح</label>
                                  <textarea class="form-control" rows="5" id="description" name='description'></textarea>
                                </div>

                                <div class="form-group">
                                    <label for="lease">رقم العقد</label>
                                    <input type="text" class="form-control" id="lease" placeholder="" name="lease">
                                </div>

                                <div class="form-group">
                                    <label for="lease">رقم الوحدة</label>
                                    <input type="text" class="form-control" id="unit" placeholder="" name="unit">
                                </div>
                             
                            </div>
                            
                            <div class='raw'>
                                <div class='col-md-12'><button class='btn btn-ud'>ارسال</button></div>
                            </div>
                       <form>
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