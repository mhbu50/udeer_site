@extends('template')
@section('lang','ar')
@section('head')
    <link href="/css/bootstrap-rtl.css" rel="stylesheet">
@endsection

@section('body')

<body id="property_index" class="property_management p-show">

    <section id="temp1">
        
            <div id="c-nav">
                @include('ar.ar_nav')
            </div>

   <div class="container-fluid c-body-con">

        <div class="col-md-9">
            <div class="row">
                <div class="col-md-2">
                    
                    <a class="btn btn-default c-btn-tp" href="{{action('PropertyController@create')}}">اضافة</a>
                </div>
                <div class="col-md-2">
                    <form action="{!!action('PropertyController@delete_array')!!}" method="post">
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
                        <form action="{!!action('PropertyController@set_index')!!}" method="post">
                            <input type='hidden' name='_token' value="{!! csrf_token() !!}">
                            <div class="raw">
                                
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <input type="text" name="name" class="form-control" placeholder="اسم العقار"/>
                                    </div>  
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <input type="text" name="city" class="form-control" placeholder="المدينة"/>
                                    </div>
                                </div>
                                <div class="form-group">
                                        <input type="submit" class="btn btn-ud" width="100%" value="بحث">
                                </div>
                                
                            </div>
                        </form> 
                        
                         <table class="table table-strip"> 
                                <thead> 
                                    <tr> 
                                        <th>#</th>
                                        <th>اسم العقار</th>  
                                        <th>صاحب العقار</th> 
                                        <th></th> 
                                    </tr> 
                                </thead> 
                                <tbody> 
                                    <tr>
                                     @for ($i = 0; $i < count($result); $i++)
                                        <th scope="row"><a href="{!!action('PropertyController@edit',['name'=>$result[$i]->name])!!}">{{ $result[$i]->name  }}</a></th>
                                        <td>{{$result[$i]->property_name}}</td>
                                        <td>{{$result[$i]->owner}}</td> 
                                        
                                       <td><input type='checkbox' class='del-check' id="{!!$result[$i]->name!!}" name=""></td>
                                    </tr>
                                        @endfor                  

                                    </tr> 
                                </tbody> 
                            </table>
                            <span></span>
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
            
            

        });
    </script>
</body>
@endsection