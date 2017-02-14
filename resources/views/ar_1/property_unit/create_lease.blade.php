@extends('template')
@section('lang','ar')
@section('head')
    <link href="/css/bootstrap-rtl.css" rel="stylesheet">
@endsection

@section('body')

<body class="property_management p_u-show">
    
        
            <div id="c-nav">
                @include('ar.ar_nav')
            </div>

   <div class="container-fluid c-body-con">
        <div class="col-md-9">
            <div class="raw">
                <div class="" >
                    @include('ar.tabs.property_unit',[ 'unit_name' => $property_unit->name])
                    <div id="propriety_unit_form" class="page-content">
                         <div class="raw">
                                <div class='col-md-12'>
                                    <h2>اضافة عقد<h2>
                                </div>
                                
                            </div>
                            @include('ar.lease.lease_form',['action' => action('Property_unitController@create_lease',$property_unit->name) ])
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

    <footer id="footer">
       @include('ar.ar_footer')
    </footer>
    <script type="text/javascript">
            $('#property').val('{{$property_unit->property}}');
            $('#property_unit').val('{{$property_unit->name}}');
            $('#property, #property_unit').attr('readonly', true);
            $(".nav-tabs #leases").addClass('active')

            $('#renter').typeahead({
                  source: [
                    @foreach( $renters as $renter)
                      {  name: '{{$renter->name}}' },
                    @endforeach 
                      
                  ]
              });
           
          
    </script>
</body>
@endsection