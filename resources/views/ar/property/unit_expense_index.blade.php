@extends('template')
@section('lang','ar')
@section('head')
    <link href="/css/bootstrap-rtl.css" rel="stylesheet">
@endsection

@section('body')

<body id="p_unit_expence_index" class="property_management p-show">

    <section id="temp1">
        
            <div id="c-nav">
                @include('ar.ar_nav')
            </div>

   <div class="container c-body-con">
        <div class="col-md-9">
         
            <div class="raw">
                <div class="col-md-12 col-md-offset-0" >
                     @include('ar.tabs.property')
                    <div id="" class="page-content">
                         <table class="table table-strip"> 
                                <thead> 
                                    <tr> 
                                        <th>#</th>
                                        <th>تاريخ</th>  
                                        <th>مقدار</th> 
                                        <th>العميل</th> 
                                        <th>الوحدة</th> 
                                        <th></th>
                                    </tr> 
                                </thead> 
                                <tbody> 
                                    
                                     @for ($i = 0; $i < count($result); $i++)
                                        @for ($e = 0; $e < count($result[$i]); $e++)
                                            <tr>
                                            <th scope="row"><a href="{!!action('Unit_expensesController@edit',['name'=>$result[$i][$e]->name])!!}">{{ $result[$i][$e]->name  }}</a></th>
                                            <td>{{$result[$i][$e]->date}}</td> 
                                            <td>{{$result[$i][$e]->amount}}</td>
                                            <td>{{$result[$i][$e]->customer}}</td>
                                            <td>{{$result[$i][$e]->unit}}</td>
                                            <td><input type='checkbox' class='checky' id="{!!$result[$i][$e]->name!!}"></td>
                                            </tr>
                                        @endfor
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
        $(".nav-tabs #expenses").addClass('active')
    </script>
    

</body>

@endsection