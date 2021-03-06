@extends('template')
@section('lang','ar')
@section('head')
    <link href="/css/bootstrap-rtl.css" rel="stylesheet">
@endsection

@section('body')

<body id="p_lease_index" class="property_management p-show">

    <section id="temp1">
        
            <div id="c-nav">
                @include('ar.ar_nav')
            </div>

   <div class="container-fluid c-body-con">
        <div class="col-md-9">
            <div class="raw">
                

                <div class="col-md-12 col-md-offset-0" >
                    @include('ar.tabs.property')
                    <div id="" class="page-content" style='overflow: visible;'>
                        <div class="row index-head-btn_wrp">
                            <div class="col-md-2">
                                
                                <a class="btn btn-default c-btn-tp" href="{{action('PropertyController@create_lease',$property_name)}}">اضافة</a>
                            </div>
                            <div class="col-md-2">
                                <form c-url="{!!action('UdeerController@delete_array')!!}" method="post" class="del_arr">
                                    <input type='hidden' name='_token' value="{!! csrf_token() !!}" />
                                    <input type='hidden' name='doctype' value="lease"/>
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
                                        <th>رقم الوحدة</th> 
                                        <th></th> 
                                    </tr> 
                                </thead> 
                                <tbody> 
                                    <tr>
                                     @for ($i = 0; $i < count($result); $i++)
                                        <th scope="row"><a href="{!!action('LeaseController@edit',['name'=>$result[$i]->name])!!}">{{ $result[$i]->name  }}</a></th>
                                        <td>{{$result[$i]->property_unit}}</td> 
                                       <td><input type='checkbox' class='del-check' id="{!!$result[$i]->name!!}"></td>
                                    </tr>
                                    
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
    @include('ar.modals.confirm_modal')
    <script type="text/javascript">
        $(".nav-tabs #leases").addClass('active')
        
    </script>
</body>
@endsection