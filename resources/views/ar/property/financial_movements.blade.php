@extends('template')
@section('lang','ar')
@section('head')
    <link href="/css/bootstrap-rtl.css" rel="stylesheet">
@endsection

@section('body')

<body  id="property_financial_movements" class="property_management p-show">

    <section id="temp1">
        
            <div id="c-nav">
                @include('ar.ar_nav')
            </div>

   <div class="container-fluid c-body-con">
        <div class="col-md-9">
            

            <div class="raw">
                <div class="" >
                        @include('ar.tabs.property')
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
                                        @for ($e = 0; $e < count($result[$i]); $e++)
                                        <th scope="row"><a href="{!!action('Lease_rent_paymentController@edit',['name'=>$result[$i][$e]->name])!!}">{{ $result[$i][$e]->name  }}</a></th>
                                        <td>{{$result[$i][$e]->lease}}</td>
                                        <td>{{$result[$i][$e]->amount}}</td>
                                        <td>{{$result[$i][$e]->renter}}</td> 
                                       <td><input type='checkbox' class='checky' id="{!!$result[$i][$e]->name!!}"></td>
                                    </tr>
                                            @endfor
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
        $(".nav-tabs #financial_movements").addClass('active')
    </script>
</body>
@endsection