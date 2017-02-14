@extends('template')
@section('lang','ar')
@section('head')
    <link href="/css/bootstrap-rtl.css" rel="stylesheet">
    
@endsection

@section('body')
    
  <body class="property_management p_u-show">
    <section id="temp1">
        
            <!-- Static navbar -->
              <div id="c-nav">
                @include('ar.ar_nav')
            </div>
              
    <div class="container-fluid c-body-con">
        <div class="col-md-9">

            <div class="raw">
              @include('ar.tabs.property_unit')
                <div class="" >
                    <div id="propriety_uni_form.html" class="page-content">
                      <div class="raw">
                        <div class="col-md-12">
                          <h2></h2>
                        </div>
                      </div>
                      @include('ar.property_unit.property_unit_form',['action' => action('Property_unitController@edit',['name' => $property_unit->name ]) ])
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

      $(document).ready(function(){
        set_value({!!json_encode($property_unit)!!})
        $(".nav-tabs #show").addClass('active');
        
    

        
          $('#property').typeahead({
              source: [
                @foreach( $properties as $property)
                  {  name: '{{$property->name}}' },
                @endforeach 
                  
              ]
          });
      });
    </script>

  </body>
@endsection
