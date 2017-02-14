@extends('template')
@section('lang','ar')
@section('head')
    <link href="/css/bootstrap-rtl.css" rel="stylesheet">
@endsection

@section('body')

<body  >

    <section id="temp1">
        
            <div id="c-nav">
                @include('ar.ar_nav')
            </div>

   <div class="container c-body-con">
        <div class="col-md-9">
            <div class="raw index-head-btn_wrp">
                <div class="col-md-2">
                    
                    <a class="btn btn-default" href="{{action('Lease_rent_paymentController@create')}}">اضافة</a>
                </div>
                <div class="col-md-2">
                    <form c-url="{!!action('UdeerController@delete_array')!!}" method="post" class="del_arr">
                        <input type='hidden' name='_token' value="{!! csrf_token() !!}" />
                        <input type='hidden' name='doctype' value="Lease%20rent%20payment"/>
                        <input name="names" id="del-arr" hidden/>
                        <a class="btn btn-danger c-btn-tp"id="del-btn">مسح</a>
                    </form>
                </div>
            </div>

            <div class="raw">
                <div class="col-md-12 col-md-offset-0" >
                    <div id="" class="page-content">
                         @if(count($result))
                         <table class="table table-strip"> 
                                <thead> 
                                    <tr> 
                                        <th>#</th>
                                        <th>رقم العقد</th>  
                                        <th>مقدار</th> 
                                        <th>اسم الموستأجر</th> 
                                        <th></th> 
                                        <th></th>
                                    </tr> 
                                </thead> 
                                <tbody> 
                                    <tr>
                                     @for ($i = 0; $i < count($result); $i++)
                                        <th scope="row"><a href="{!!action('Lease_rent_paymentController@edit',['name'=>$result[$i]->name])!!}">{{ $result[$i]->name  }}</a></th>
                                        <td>{{$result[$i]->lease}}</td>
                                        <td>{{$result[$i]->amount}}</td>
                                        <td>{{$result[$i]->renter}}</td> 
                                        
                                       <td><input type='checkbox' class='del-check' id="{!!$result[$i]->name!!}" name=""></td>
                                    </tr>

                                        @endfor
                                                               

                                    </tr> 
                                </tbody> 
                            </table>
                            @else
                                <p>لا يوجد </p>
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
</body>
@endsection