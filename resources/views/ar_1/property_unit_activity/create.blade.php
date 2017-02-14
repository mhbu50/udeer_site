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
                <div class="" >
                    <div id="propriety_unit_activity_form.html" class="page-content">
                        <form method='post' action="{!!action('Property_unit_activityController@store')!!}" enctype="multipart/form-data">
                        <input type='hidden' name='_token' value="{!! csrf_token() !!}">
                            <div class="raw">
                                  <h2>عنوان<h2>
                            </div>
                            <div class="form-group">
                                <label for="date_time">تاريخ</label>
                                <input type="datetime" class="form-control" id="date_time" placeholder="" name='date_time'>
                            </div>

                            <div class="form-group">
                                <label for="activity_description">عنوان الفعالية</label>
                                <textarea class="form-control" rows="5" id="activity_description" name='activity_description'></textarea>
                            </div>
                            <div class="form-group">
                                <label for="property_unit">الوحدة العارية</label>
                                <input type="text" class="form-control" id="property_unit" placeholder="" name='property_unit'>
                            </div>
                            <input type='submit' class='btn btn-default'value='حفظ ' />
                        </form>
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