@extends('template')
@section('lang','ar')
@section('head')
    <link href="/css/bootstrap-rtl.css" rel="stylesheet">
@endsection

@section('body')

<body class="financial_system pay_rec-show">

    <section id="temp1">
        
            <div id="c-nav">
                @include('ar.ar_nav')
            </div>

   <div class="container-fluid c-body-con">
        <div class="col-md-9">
            <div class="raw">
                <div class="col-md-12 col-md-offset-0" >
                    <div id="" class="page-content">
                         <div class="raw">
                                <div class='col-md-12'>
                                    <h2>سند صرف<h2>
                                </div>
                                
                            </div>
                        <form method='post' action="" enctype="multipart/form-data">
                            <input type='hidden' name='_token' value="{!! csrf_token() !!}">   
                            <div class="form-column col-sm-12">

                                <div class="form-group">
                                    <label for="">قيمة السند</label>
                                    <input type="text" class="form-control" id="amount" placeholder="" name="amount" requierd>
                                </div>

                                <div class="form-group">
                                    <label for="">العقار</label>
                                    <div style="position: relative;">
                                        <input type="text" class="form-control" id="property" placeholder="" name="property" requierd>
                                        <a class="c-pls" href="#" data-toggle="modal" data-target="#PropertyModal"><i class="glyphicon glyphicon-plus"></i></a>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="">تاريخ السند</label>
                                    <input type="date" class="form-control" id="date" placeholder="" name="date" requierd>
                                </div>

                                <div class="form-group">
                                    <label for="">شرح</label>
                                    <textarea class="form-control" id="description" placeholder="" name="description" requierd></textarea>
                                </div>

                            </div>
                            <div class='raw'>
                                <div class='col-md-12'><button class='btn btn-ud'>حفظ</button></div>
                            </div>
                        </form>
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
        $('#property').typeahead({
              source: [
                @foreach( $properties as $property)
                  {  name: '{{$property->name}}' },
                @endforeach 
                  
              ]
          });

    </script>
</body>
@endsection