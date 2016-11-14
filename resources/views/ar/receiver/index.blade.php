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
            <div class="raw">
                <div class="raw">
                    <div class="col-md-2">
                        <button class="btn btn-default" value='ss'>جديد</button>
                    </div>
                    <div class="col-md-2">
                        <button class="btn btn-default"value='ssaa'>مسح</button>
                    </div>
                </div>
                <div class="col-md-12 col-md-offset-0" >
                    <div id="" class="page-content">
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
                                        <td><form action="{!!action('RenterController@delete',['name'=>$result[$i]->name])!!}" method="post">
                                                <input type='hidden' name='_token' value="{!! csrf_token() !!}">
                                                <input type="submit" value="مسح" />
                                           </form>   
                                       </td>
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
</body>
@endsection