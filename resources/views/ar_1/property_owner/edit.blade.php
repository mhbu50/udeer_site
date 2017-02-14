@extends('template')
@section('lang','ar')
@section('head')
    <link href="/css/bootstrap-rtl.css" rel="stylesheet">
    <script type="text/javascript" src="http://maps.google.com/maps/api/js?key=AIzaSyB3WTqSPaoOVVbU6SouYdATOMKsAIgrtGM"></script>
@endsection

@section('body')

<body id="" class="customer_management owner-show">

    <section id="temp1">
        
            <div id="c-nav">
                @include('ar.ar_nav')
            </div>

   <div class="container-fluid c-body-con">
        <div class="col-md-9">
            <div class="raw">
                <div class="" >
                    <div id="" class="page-content">
                        <div class="raw">
                            <div class=''>
                                <h2><h2>
                            </div>
                        </div>
                        @include('ar.property_owner.property_owner_form',['action' => action('Property_ownerController@update',['name' => $property_owner->name]) ])
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
        $(document).ready(function(){
            property_owner = {!!json_encode($property_owner)!!}
            set_value(property_owner)
            google.maps.event.addDomListener(window, 'load', set_map(property_owner.longitude,property_owner.latitude));
        })
    </script>
    
</body>
@endsection