@extends('template')
@section('lang','ar')
@section('head')
    <link href="/css/bootstrap-rtl.css" rel="stylesheet">
@endsection

@section('body')

<body class="complain_management">

    <section id="temp1">
        
            <div id="c-nav">
                @include('ar.ar_nav')
            </div>

   <div class="container-fluid c-body-con">
        <div class="col-md-9">
      

            <div class="row index-head-btn_wrp">
                <div class="col-md-2">
                    
                    <a class="btn btn-default c-btn-tp" href="{{action('ComplainController@create')}}">اضافة</a>
                </div>
                <div class="col-md-2">
                    <form c-url="{!!action('UdeerController@delete_array')!!}" method="post" class="del_arr">
                        <input type='hidden' name='_token' value="{!! csrf_token() !!}" />
                        <input type='hidden' name='doctype' value="Company"/>
                        <input name="names" id="del-arr" hidden/>
                        <a class="btn btn-danger c-btn-tp"id="del-btn">مسح</a>
                    </form>
                    
                </div>
            </div>

            <div class="raw">
                <div class="" >
                    <div id="" class="page-content">
                         @if(count($result))
                         <table class="table table-strip"> 
                                <thead> 
                                    <tr> 
                                        <th>#</th>
                                        <th>الموضوع</th>  
                                        <th>عنوان</th> 
                                        <th>الحالة</th>
                                        <th></th> 
                                    </tr> 
                                </thead> 
                                <tbody> 
                                    <tr>
                                     @for ($i = 0; $i < count($result); $i++)
                                        <th scope="row"><a href="{!!action('ComplainController@edit',['name'=>$result[$i]->name])!!}">{{ $result[$i]->name  }}</a></th>
                                        <td>{{$result[$i]->about}}</td>
                                        <td>{{$result[$i]->title}}</td> 
                                        <td>{{$result[$i]->status}}</td> 
                                        <td><input type='checkbox' class='del-check' id="{!!$result[$i]->name!!}" name=""></td>  
                                       </td>
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
                
            </div>
        </div>
    </div>


 
    <footer id="footer">
       @include('ar.ar_footer')
    </footer>
    @include('ar.modals.confirm_modal')
</body>
@endsection