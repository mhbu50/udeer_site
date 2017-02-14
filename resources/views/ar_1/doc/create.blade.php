@extends('template')
@section('lang','ar')
@section('head')
    <link href="/css/bootstrap-rtl.css" rel="stylesheet">
    <script type="text/javascript" src="http://maps.google.com/maps/api/js?key=AIzaSyB3WTqSPaoOVVbU6SouYdATOMKsAIgrtGM"></script>
@endsection

@section('body')
    



<body id="" class="property_management ">

    <section id="temp1">
        
            <div id="c-nav">
                @include('ar.ar_nav')
            </div>

    <div class="container-fluid c-body-con">
        <div class="col-md-9">
            
                 
                    <div id="propriety_unit_form" class="page-content">
                        <form method='post' action="{!!action('DocsController@store',['doctype'=>$doctype,'docname'=>$docname ])!!}" enctype="multipart/form-data">
                            <input type='hidden' name='_token' value="{!! csrf_token() !!}">
                            
                                <div class="raw">
                                  <div class="col-md-12">
                                    <h2>اضافة مستند</h2>
                                  </div>
                                  <div class="col-md-12">
                                    <div class="form-group">
                                      <input type='file' name='image' class="form-control" />
                                    </div>
                                  </div>
                                  <div class='col-md-12'>
                                      <input type="submit" class="btn btn-default" value='ارسال'/>
                                  </div>
                                </div>
                                
                        </form>
                    </div>
                    

        </div>
        <div class="col-md-3">
            <div id="side_menu" >
                @include('ar.ar_side')
            </div>
        </div>
    </div>

 
    @include('ar.ar_footer')
    @include('ar.modals.Owner_modal')

    <script type="text/javascript">
     

    </script>
</body>
@endsection
