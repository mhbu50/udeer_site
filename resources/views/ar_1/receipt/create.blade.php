@extends('template')
@section('lang','ar')
@section('head')
    <link href="/css/bootstrap-rtl.css" rel="stylesheet">
@endsection

@section('body')

<body  class="financial_system" >

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
                                <h2>اضافة سند<h2>
                            </div>
                            @include('ar.receipt.receipt_form',['action' => action('ReceiptController@store')])
                        </div>
                        
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
    <script type="text/javascript">
    $(document).ready(function(){
        $('#property').typeahead({
            source: [
                @foreach($properties as $property)
                  {  name: '{{$property->name}}' },
                @endforeach 
                  
            ]
        });
    });
        
    </script>
</body>
@endsection