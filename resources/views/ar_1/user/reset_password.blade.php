@extends('template')
@section('lang','ar')
@section('head')
    <link href="/css/bootstrap-rtl.css" rel="stylesheet">
@endsection

@section('body')

<body id="" class="customer_management renter-show">

    <section id="temp1">
        
            <div id="c-nav">
                @include('ar.ar_nav')
            </div>

    <div class="container-fluid c-body-con">
        <div class="col-md-2">
            
        </div>   
        <div class="col-md-8">
            <div class="page-content reset-pass" >
                <h1>ادخل كلمة المرور</h1>
                <form method='post' action="{!!action('UserController@store_update_password',['key' => $key])!!}" enctype="multipart/form-data">
                  <input type='hidden' name='_token' value="{!! csrf_token() !!}">    
                    <div class="form-group">
                        <input type="password" class="form-control" id="password" name="password" placeholder="">
                    </div>
                    <input type='submit' class='btn btn-ud' value="تحديث">
                </form>
            </div>
        </div>    
    </div>


 
    <footer id="footer">
       @include('ar.ar_footer')
    </footer>
</body>
@endsection