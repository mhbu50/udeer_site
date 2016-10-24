@extends('template')
@section('lang','ar')
@section('head')
    <link href="/css/bootstrap-rtl.css" rel="stylesheet">
@endsection

@section('body')
    

<body  >

    <section id="temp1">
        
            <!-- Static navbar -->
            <div id="c-nav">
                @include('ar.ar_nav')
            </div>
              
              
    <div class="container c-body-con">
        <div class="col-md-9">
            <div class="raw">
                <div class="col-md-12 col-md-offset-0" >
                    <div id="propriety_unit_activity_form.html" class="page-content">
                        
                            <div class="raw">
                                  <h2>عنوان<h2>
                            </div>
                            <div class="form-group">
                                <label for="date_time">تاريخ</label>
                                <input type="date" class="form-control" id="date_time" placeholder="">
                            </div>

                            <div class="form-group">
                                <label for="activity_description">عنوان الفعالية</label>
                                <textarea class="form-control" rows="5" id="activity_description"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="property_unit">الوحدة العارية</label>
                                <input type="text" class="form-control" id="property_unit" placeholder="">
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
    @include('ar.ar_footer')

</body>
@endsection