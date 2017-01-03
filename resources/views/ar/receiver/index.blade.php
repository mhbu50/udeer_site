@extends('template')
@section('lang','ar')
@section('head')
    <link href="/css/bootstrap-rtl.css" rel="stylesheet">
@endsection

@section('body')

<body id="" class="customer_management receiver-show">

    <section id="temp1">
        
            <div id="c-nav">
                @include('ar.ar_nav')
            </div>

   <div class="container-fluid c-body-con">
        <div class="col-md-9">  
            <div class="row">
                <div class="col-md-2">
                    
                    <a class="btn btn-default c-btn-tp" href="{{action('ReceiverController@create')}}">اضافة</a>
                </div>
                <div class="col-md-2">
                    <form action="{!!action('ReceiverController@delete_array')!!}" method="post">
                        <input type='hidden' name='_token' value="{!! csrf_token() !!}">
                        <input name="names" id="del-arr" hidden/>
                        <button class="btn btn-danger c-btn-tp"id="del-btn" disabled>مسح</button>
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
                                        <th>اسم الموظف</th>  
                                        <th>تاريخ الالتحاق</th> 
                                        <th>تاريخ الولادة</th> 
                                        <th></th> 
                                        
                                    </tr> 
                                </thead> 
                                <tbody> 
                                    <tr>
                                     @for ($i = 0; $i < count($result); $i++)
                                     <?php $doctype = str_replace('/', '*', $result[$i]->name) ?>
                                        <th scope="row"><a href="{!!action('ReceiverController@edit',['name' => $doctype])!!}">{{ $result[$i]->name  }}</a></th>
                                        <td>{{$result[$i]->employee_name}}</td>
                                        <td>{{$result[$i]->date_of_joining}}</td>
                                        <td>{{$result[$i]->date_of_birth}}</td> 
                                        <td><input type='checkbox' class='del-check' id="{!!$result[$i]->name!!}" name=""></td>
                                       </td>
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
</body>
@endsection