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
                            <div class='col-md-12'>
                                <h2>اضافة مالك<h2>
                            </div>        
                        </div>
                        @include('ar.property_owner.property_owner_form',['action' => !action('Property_ownerController@create') ])                            
                        
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
            google.maps.event.addDomListener(window, 'load', set_map(50.0301574,26.3320884));
        })
    </script>
</body>
@endsection