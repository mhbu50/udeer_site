@section('module','property_management')
@section('page_title','unit_show')
@section('page_type','edit_page')
@extends('template')

@section('css_page')

@endsection
@section('js_page')
  <script src="/assets/global/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js" type="text/javascript"></script>  
  <script src="/assets/pages/scripts/components-date-time-pickers.min.js" type="text/javascript"></script>
  <script type="text/javascript">
    $(document).ready(function(){
      property_unit = {!!json_encode($property_unit)!!}
      set_value(property_unit)
      $(".nav-tabs #show").addClass('active');
    });
  </script>
@endsection

@section('content')
    <h1 class="page-title"> ادارة الاملاك العقارية</h1>
    <div class="row">
      <div class="col-md-12">
        @include('ar.tabs.property_unit',['property_name' => $property_unit->name])
        <div class="portlet light bordered">
          <div class="portlet-title">
            <div class="caption font-red-sunglo">
                {{$property_unit->name}}
            </div>
          </div>
          <div class="portlet-body form">
               @include('ar.property_unit.property_unit_form',['action' => action('Property_unitController@update',$property_unit->name)])
          </div>

        </div>
      </div>
    </div>
    
@endsection

