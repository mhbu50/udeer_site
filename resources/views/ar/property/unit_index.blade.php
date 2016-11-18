@extends('template')
@section('lang','ar')
@section('head')
    <link href="/css/bootstrap-rtl.css" rel="stylesheet">
@endsection

@section('body')

<body>

    <section id="temp1">
        
            <div id="c-nav">
                @include('ar.ar_nav')
            </div>

   <div class="container c-body-con">
        <div class="col-md-9">
            <div class="raw">
                <div class="col-md-2">
                   
                    <a class="btn btn-default" href="{{action('Property_unitController@create')}}">اضافة</a>
                </div>
                <div class="col-md-2">
                    <button class="btn btn-danger"value=''>مسح</button>
                </div>
            </div>
            <div class="raw">
                <div class="col-md-12 col-md-offset-0" >
                     @include('ar.tabs.property')
                    <div id="" class="page-content">
                         <table class="table table-strip"> 
                                <thead> 
                                    <tr> 
                                        <th>#</th>
                                        <th>رقم الوحدة</th>  
                                        <th>العقار</th> 
                                        <th></th> 
                                        <th></th> 
                                    </tr> 
                                </thead> 
                                <tbody> 
                                    <tr>
                                     @for ($i = 0; $i < count($result); $i++)
                                        <th scope="row"><a href="{!!action('Property_unitController@edit',['name'=>$result[$i]->name])!!}">{{ $result[$i]->name  }}</a></th>
                                        <td>{{$result[$i]->unit_number}}</td> 
                                        <td><form action="{!!action('Property_unitController@delete',['name'=>$result[$i]->name])!!}" method="post">
                                                <input type='hidden' name='_token' value="{!! csrf_token() !!}">
                                                <input type="submit" value="مسح" />
                                           </form>   
                                       </td>
                                       <td><input type='checkbox' class='checky' id="{!!$result[$i]->name!!}"></td>
                                    </tr>

                                        @endfor
                                                               

                                    </tr> 
                                </tbody> 
                            </table>
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
        $(".nav-tabs #units").addClass('active')
    </script>
    

</body>

@endsection