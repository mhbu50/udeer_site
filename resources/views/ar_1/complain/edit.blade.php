@extends('template')
@section('lang','ar')
@section('head')
    <link href="/css/bootstrap-rtl.css" rel="stylesheet">
@endsection

@section('body')

<body  class="complain_management ">

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
                        <form method='post' action="{!!action('ComplainController@update',$complain->name)!!}" enctype="multipart/form-data">
                            <input type='hidden' name='_token' value="{!! csrf_token() !!}">   
                            <div class="form-column col-sm-6">
                               

                                <div class="form-group">
                                  <label for="about">بخصوص</label>
                                  <select id="about" class="form-control" name='about' value='{{ isset($complain->about) ? $complain->about : ""}}'>
                                    <option value="property">العقار</option>
                                    <option value="property unit">وحدة العقار</option>
                                    <option value="other">اخرى</option>
                                  </select>
                                </div>
                                <div class="form-group">
                                    <label for="property">العقار</label>
                                    <input type="text" class="form-control" id="property" placeholder="" name="property" value='{{ isset($complain->property) ? $complain->property : ""}}'>
                                </div>

                                <div class="form-group">
                                    <label for="property_unit">الوحدة</label>
                                    <input type="about" class="form-control" id="property_unit" placeholder="" name="property_unit" value='{{ isset($complain->property_unit) ? $complain->property_unit : ""}}'>
                                </div>
                                <div class="form-group">
                                    <label for="title">عنوان</label>
                                    <input type="text" class="form-control" id="title" placeholder="" name="title" value='{{ isset($complain->property_unit) ? $complain->property_unit : ""}}'>
                                </div>

                                <div class="form-group">
                                  <label for="description">شرح</label>
                                  <textarea class="form-control" rows="5" id="description" name='description'>{{ isset($complain->description) ? $complain->description : ""}}</textarea>
                                </div>

                               <div class="form-group">
                                  <label for="status">نوع العقار</label>
                                  <select id="status" class="form-control" name='status' value='{{ isset($complain->status) ? $complain->status : ""}}'>
                                    <option value="solved">محلولة</option>
                                    <option value="unsolved">عير محلول</option>
                                  </select>
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