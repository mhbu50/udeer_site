@extends('template')
@section('lang','ar')
@section('head')
    <link href="/css/bootstrap-rtl.css" rel="stylesheet">

    <!-- CSS file -->
    <link rel="stylesheet" href="/css/photoswipe.css">
    <link rel="stylesheet" href="/css/default-skin.css">
     
    <!-- JS file -->
    <script src="/javascript/photoswipe.min.js"></script>

    <script src="/javascript/photoswipe-ui-default.min.js"></script>
    
    
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
                    <div id="" class="page-content" style='overflow: visible;'>
                        <div class="row">
                            <div class="col-md-2">
                                <a class="btn btn-default c-btn-tp" href="{{action('DocsController@create',['doctype' => 'property','docname' => $property_name] )}}">اضافة</a>
                            </div>
                            <div class="col-md-2">

                                <form c-url="{!!action('UdeerController@delete_array')!!}" method="post" class="del_arr">
                                    <input type='hidden' name='_token' value="{!! csrf_token() !!}" />
                                    <input type='hidden' name='doctype' value="File"/>
                                    <input name="names" id="del-arr" hidden/>
                                    <a class="btn btn-danger c-btn-tp"id="del-btn">مسح</a>
                                </form>
                                
                            </div>
                        </div>
                        @if(count($result))
                            <table class="table table-strip"> 
                                <thead> 
                                    <tr> 
                                        <th>#</th>  
                                        <th>تاريخ</th> 
                                        <th></th> 
                                    </tr> 
                                </thead> 
                                <tbody> 
                                    <tr>
                                     @for ($i = 0; $i < count($result); $i++)
                                        <td><a href="{!!action('DocsController@show',['name'=>$result[$i]->name])!!}">{{ $result[$i]->file_name }}</a></td>
                                        <td>{{$result[$i]->creation}}</td> 
                                        <td><input type='checkbox' class='del-check' id="{!!$result[$i]->name!!}" name=""></td>
                                    
                                    @endfor                  

                                    </tr> 
                                </tbody> 
                            </table>  
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