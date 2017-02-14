@extends('template')
@section('lang','ar')
@section('head')
    <link href="/css/bootstrap-rtl.css" rel="stylesheet">
    <script type="text/javascript" src="http://maps.google.com/maps/api/js?key=AIzaSyB3WTqSPaoOVVbU6SouYdATOMKsAIgrtGM"></script>
@endsection

@section('body')
    



<body>

    <section id="temp1">
        
            <div id="c-nav">
                @include('ar.ar_nav')
            </div>

    <div class="container c-body-con">

        <div class="col-md-9">

            <div class="raw">
                <div class="col-md-12 col-md-offset-0" >
                  @include('ar.tabs.property')
                    <div id="" class="page-content">
                        <h3>{{ isset($property->name) ? $property->property_name : ""}}</h3>

                       
                        <label>نوع العقار</label>
                        <p></p>

                        <label>سنة البناء</label>
                        <p>{{ isset($property->construction_date) ? $property->construction_date : ""}}</p>

                        <label>تقييم</label>
                        <p>{{ isset($property->evaluation) ? $property->evaluation : ""}}</p>

                        <label>الدولة</label>
                        <p>{{ isset($property->country) ? $property->country : ""}}</p>

                        <label>المدينة</label>
                        <p>{{ isset($property->city) ? $property->city : ""}}</p>

                        <label>العنوان</label>
                        <p>{{ isset($property->address) ? $property->address : ""}}</p>

                        <label>مميزات العقار</label>
                        <p>{{ isset($property->property_advantage) ? $property->property_advantage : ""}}</p>

                        <label>اسم المالك</label>
                        <p>{{ isset($property->owner_name) ? $property->owner_name : ""}}</p>

                        <label>رقم العقار</label>
                        <p>{{ isset($property->property_number) ? $property->property_number : ""}}</p>

                        <label>رقم الصك</label>
                        <p>{{ isset($property->instrument_number) ? $property->instrument_number : ""}}</p>

                        <label>تاريخ الصك</label>
                        <p>{{ isset($property->instrument_date) ? $property->instrument_date : ""}}</p>

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
    <script type="text/javascript">
        $(".nav-tabs #show").addClass('active')
    </script>
    
</body>
@endsection



















