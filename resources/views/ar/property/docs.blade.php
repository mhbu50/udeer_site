@extends('template')
@section('lang','ar')
@section('head')
    <link href="/css/bootstrap-rtl.css" rel="stylesheet">
@endsection

@section('body')

<body id="property_docs" class="property_management p-show">

    <section id="temp1">
        
            <div id="c-nav">
                @include('ar.ar_nav')
            </div>

   <div class="container-fluid c-body-con">

        <div class="col-md-9">
            <div class="raw">
                <div class="" >
                    @include('ar.tabs.property',['property_name' => $property_name])   
                    <div id="" class="page-content">
                        @if(count($result))
                        @foreach($result as $res)
                            <div class='col-md-3'>
                                <img src="http://localhost:8002{{$res->file_url}}" width='100%'>
                            </div>
                        @endforeach   
                        @else
                            <p class="bg-warning">لا يوجد </p>
                        @endif
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
            $(".nav-tabs #documents").addClass('active');
            

        });
    </script>
</body>
@endsection