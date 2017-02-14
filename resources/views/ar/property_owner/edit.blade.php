@section('module','property_management')
@extends('template')

@section('css_page')

@endsection
@section('js_page')
    <script src="/assets/global/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js" type="text/javascript"></script>  
    <script src="/assets/pages/scripts/components-date-time-pickers.min.js" type="text/javascript"></script>
    <script type="text/javascript">
        $(document).ready(function(){
            property_owner = {!!json_encode($property_owner)!!}
            set_value(property_owner)
            google.maps.event.addDomListener(window, 'load', set_map(property_owner.longitude,property_owner.latitude));
        });
    </script>
@endsection

@section('content')
    <h1 class="page-title"> ادارة الاملاك العقارية</h1>
    <div class="row">
      <div class="col-md-12">
        <div class="portlet light bordered">
          <div class="portlet-title">
            <div class="caption font-red-sunglo">
                {{$property_owner->name}}
            </div>
          </div>
          <div class="portlet-body form">
               @include('ar.property_owner.property_owner_form',['action' => action('Property_ownerController@edit',$property_owner->name)])
          </div>

        </div>
      </div>
    </div>
    
@endsection















