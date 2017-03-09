@section('lang','ar')
@section('module','property_management')
@section('page_title','property_edit')
@section('page_type','edit_page')
@extends('template')

@section('css_page')

   
    <link href="/assets/global/plugins/bootstrap-datetimepicker/css/bootstrap-datetimepicker.min.css" rel="stylesheet" type="text/css" />

    

@endsection
@section('js_page') 
    <script src="/assets/pages/scripts/components-date-time-pickers.min.js" type="text/javascript"></script>
    <script type="text/javascript">
      $(document).ready(function(){
        property = {!!json_encode($property)!!}
        set_value(property)
        $("#not_percentage").hide();
        if(property.management_type == 'percentage'){
          $("#percentage").show()
          $("#not_percentage,#not_percentage").hide();
        }else if(property.management_type == 'not_percentage'){
          $("#percentage").hide()
          $("#not_percentage").show();
        }
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
               @include('ar.property.property_form',['action' => action('PropertyController@update',$property->name)])
          </div>

        </div>
      </div>
    </div>
    
@endsection











