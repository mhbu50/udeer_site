@section('module','property_management')
@extends('template')

@section('css_page')

    <link href="/assets/global/plugins/bootstrap-daterangepicker/daterangepicker.min.css" rel="stylesheet" type="text/css" />
    <link href="/assets/global/plugins/bootstrap-timepicker/css/bootstrap-timepicker.min.css" rel="stylesheet" type="text/css" />
    <link href="/assets/global/plugins/bootstrap-datetimepicker/css/bootstrap-datetimepicker.min.css" rel="stylesheet" type="text/css" />
    <link href="/assets/global/plugins/clockface/css/clockface.css" rel="stylesheet" type="text/css" />

    

@endsection
@section('js_page')
    <script src="/assets/global/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js" type="text/javascript"></script>  
    <script src="/assets/pages/scripts/components-date-time-pickers.min.js" type="text/javascript"></script>
    <script type="text/javascript">
      $(document).ready(function(){
        property = {!!json_encode($property)!!}
        set_value(property)
        google.maps.event.addDomListener(window, 'load', set_map(property.longitude,property.latitude));
        $(".nav-tabs #show").addClass('active');
      });
    </script>
@endsection

@section('content')
    <h1 class="page-title"> ادارة الاملاك العقارية</h1>
    <div class="row">
      <div class="col-md-12">
        @include('ar.tabs.property',['property_name' => $property->name])
        <div class="portlet light bordered">
          <div class="portlet-title">
            <div class="caption font-red-sunglo">
                {{$property->name}}
            </div>
            
          </div>
          <div class="portlet-body form">
               @include('ar.property.property_form',['action' => action('PropertyController@store')])
          </div>

        </div>
      </div>
    </div>
    
@endsection











