@section('module','property_management')
@extends('template')
  
@section('css_page')

@endsection
@section('js_page')
     <script type="text/javascript">
        $(document).ready(function(){
            google.maps.event.addDomListener(window, 'load', set_map(50.0301574,26.3320884));
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
                <h3>اضافة مالك</h3>
            </div>
          </div>
          <div class="portlet-body form">
               @include('ar.property_owner.property_owner_form',['action' => action('Property_ownerController@store')])
          </div>

        </div>
      </div>
    </div>
    @include('ar.modals.property_modal')
    @include('ar.modals.property_unit_modal')
    
@endsection



