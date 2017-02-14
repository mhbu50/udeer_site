@extends('template')
@section('lang','ar')
@section('head')
    <link href="/css/bootstrap-rtl.css" rel="stylesheet">
    <script type="text/javascript" src="http://maps.google.com/maps/api/js?key=AIzaSyB3WTqSPaoOVVbU6SouYdATOMKsAIgrtGM"></script>
@endsection

@section('body')
    



<body id="property_edit" class="property_management p-show">
  <div id="c-nav">
      @include('ar.ar_nav')
  </div>
  <div class="container-fluid c-body-con">
    <div class="col-md-9">
    @include('ar.tabs.property',['property_name' => $property->name])
      <div id="propriety_unit_form" class="page-content">
        @include('ar.property.property_form',['action' => action('PropertyController@update',['name' => $property->name]) ])
      </div>
    </div>
    <div class="col-md-3">
        <div id="side_menu" >
            @include('ar.ar_side')
        </div>
    </div>
  </div>

    @include('ar.modals.Owner_modal')
    @include('ar.ar_footer')
    <script type="text/javascript">
        $(document).ready(function(){
            property = {!!json_encode($property)!!}
            set_value(property)
            google.maps.event.addDomListener(window, 'load', set_map(property.longitude,property.latitude));
            $(".nav-tabs #show").addClass('active');
        })
    </script>
</body>
@endsection

