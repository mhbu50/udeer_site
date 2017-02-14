@extends('template')
@section('lang','ar')
@section('head')
    <link href="/css/bootstrap-rtl.css" rel="stylesheet">
@endsection

@section('body')

<body id="" class="lease_management l-create">

    
        
            <div id="c-nav">
                @include('ar.ar_nav')
            </div>

   <div class="container-fluid c-body-con">
        <div class="col-md-9">
            <div class="raw">
                <div class="" >
                    <div id="propriety_unit_form" class="page-content">
                        <div class="raw">
                            <div class='col-md-12'>
                                <h2>اضافة عقد<h2>
                            </div>
                        </div>
                        @include('ar.lease.lease_form',['action' => action('LeaseController@create') ])
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
    @include('ar.modals.property_modal')
    @include('ar.modals.property_unit_modal')
    <script type="text/javascript">
       $('#property').typeahead({
              source: [
                @foreach( $properties as $property)
                  {  name: '{{$property->name}}' },
                @endforeach 
                  
              ]
          });
          $('#property_unit').typeahead({
              source: [
                @foreach( $property_units as $property_unit)
                  {  name: '{{$property_unit->name}}' },
                @endforeach 
                  
              ]
          }); 
    </script>
</body>
@endsection