@extends('template')
@section('lang','ar')
@section('head')
    <link href="/css/bootstrap-rtl.css" rel="stylesheet">
    
@endsection

@section('body')

  <body class="property_management p_u-show">

    <section id="temp1">
        
            <div id="c-nav">
                @include('ar.ar_nav')
            </div>

   <div class="container-fluid c-body-con">

        <div class="col-md-9">
            <div class="raw">
                <div class="" >
                    @include('ar.tabs.property_unit',['unit_name' => $unit_name])   
                    <div id="" class="page-content" style='overflow: visible;'>
                        <div class="row index-head-btn_wrp">
                            <div class="col-md-2">
                                <a class="btn btn-default c-btn-tp" href="{{action('DocsController@create',['doctype' => 'property_unit','docname' => $unit_name] )}}">اضافة</a>
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
                                    
                                    @for ($i = 0; $i < count($result); $i++)
                                    <tr>
                                        <td><a href="{!!action('DocsController@show',['name'=>$result[$i]->name])!!}">{{ $result[$i]->file_name }}</a></td>
                                        <td>{{$result[$i]->creation}}</td> 
                                        <td><input type='checkbox' class='del-check' id="{!!$result[$i]->name!!}" name=""></td>
                                    </tr> 
                                    @endfor                  

                                    
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