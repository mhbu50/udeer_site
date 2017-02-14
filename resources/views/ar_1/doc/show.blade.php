@extends('template')
@section('lang','ar')
@section('head')
    <link href="/css/bootstrap-rtl.css" rel="stylesheet">
    <script type="text/javascript" src="http://maps.google.com/maps/api/js?key=AIzaSyB3WTqSPaoOVVbU6SouYdATOMKsAIgrtGM"></script>
@endsection

@section('body')
    



<body id="" class="property_management">

    <section id="temp1">
        
            <div id="c-nav">
                @include('ar.ar_nav')
            </div>

    <div class="container-fluid c-body-con">
        <div class="col-md-9">
            
                 
                    <div id="" class="page-content">
                        <img src="http://localhost:8002{{$doc->file_url}}" width="100%">
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
     

    </script>
</body>
@endsection
