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
                        <form method='post' action="{!!action('Property_unit_activityController@update',['name' => $property_unit_activity->name])!!}" enctype="multipart/form-data">
                        <input type='hidden' name='_token' value="{!! csrf_token() !!}">
                            <div class="raw">
                                  <h2>عنوان<h2>
                            </div>
                            <div class="form-group">
                                <label for="date_time">تاريخ</label>
                                <input type="datetime" class="form-control" id="date_time" placeholder="" name="date_time" value='{{ isset($property_unit_activity->date_time) ? $property_unit_activity->date_time : "" }}'>
                            </div>

                            <div class="form-group">
                                <label for="activity_description">عنوان الفعالية</label>
                                <textarea class="form-control" rows="5" id="activity_description" name="activity_description" >{{ isset($property_unit_activity->activity_description) ? $property_unit_activity->activity_description : "" }}</textarea>
                            </div>
                            <div class="form-group">
                                <label for="property_unit">الوحدة العارية</label>
                                <input type="text" class="form-control" id="property_unit" name="property_unit" placeholder="" value='{{ isset($property_unit_activity->property_unit) ? $property_unit_activity->property_unit : "" }}'>
                            </div>
                            <input type="submit" value"حفظ" class="btn btn-default"/>
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