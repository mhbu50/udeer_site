@extends('template')
@section('lang','ar')
@section('head')
    <link href="/css/bootstrap-rtl.css" rel="stylesheet">
@endsection

@section('body')

<body  class="complain_management ">

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
                                    <h2>اضافة شكوى<h2>
                                </div>
                                
                            </div>
                        <form method='post' action="{!!action('ComplainController@create')!!}" enctype="multipart/form-data">
                            <input type='hidden' name='_token' value="{!! csrf_token() !!}">
                            <div class="col-md-12">
                                <div class="form-group">
                                  <label for="about">بخصوص</label>
                                  <select id="about" class="form-control" name='about'>
                                    <option value="" disabled selected>  </option>
                                    <option value="property">عقار</option>
                                    <option value="property_unit">وحدة العقار</option>
                                    <option value="other">اخرى</option>
                                  </select>
                                </div>
                            </div>

                             <div class="col-md-12">
                                <div class="form-group" hidden  id="property_w" >
                                    <label for="property" >العقار</label>
                                    <input type="text" class="form-control" id="property" placeholder="" name="property">
                                </div>
                                <div class="form-group" hidden id="property_unit_w">
                                    <label for="property_unit" >الوحدة</label>
                                    <input type="about" class="form-control" id="property_unit" placeholder="" name="property_unit">
                                </div>
                            </div>

                             <div class="col-md-12">
                                <div class="form-group">
                                    <label for="title">عنوان</label>
                                    <input class="form-control" rows="5" id="title" name='title' />
                                </div>
                            </div>

                             <div class="col-md-12">
                                <div class="form-group">
                                  <label for="description">شرح</label>
                                  <textarea class="form-control" rows="5" id="description" name='description'></textarea>
                                </div>
                            </div>

                             <div class="col-md-12">
                                <div class="form-group">
                                  <label for="status">الحالة</label>
                                  <select id="status" class="form-control" name='status'>
                                    <option value="solved">محلولة</option>
                                    <option value="unsolved">عير محلول</option>
                                  </select>
                                </div>
                            </div>  

                            
                            <div class='raw'>
                                <div class='col-md-12'><button class='btn btn-ud'>حفظ</button></div>
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

    <script type="text/javascript">
        $(document).ready(function(){
            $("#about").change(function () {
                switch(this.value) {
                    case 'property':
                        $('#property_w').show();
                        $('#property_unit_w').hide();
                        break;
                    case 'property_unit':
                        $('#property_unit_w').show();
                        $('#property_w').hide();
                        break;
                    case 'other':
                        $('#property_unit_w,#property_w').hide();
                        break;    
                }
            });
        });
    </script>


 
    <footer id="footer">
       @include('ar.ar_footer')
    </footer>
</body>
@endsection