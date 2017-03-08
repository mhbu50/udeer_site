@extends('template')
@section('page_title','unit_rents')
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
                <div class="col-md-12 col-md-offset-0" >
                    @include('ar.tabs.property_unit')
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
                                       
                                       <td><input type='checkbox' class='checky' id="{!!$result[$i]->name!!}"></td>
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
        $(".nav-tabs #rents").addClass('active')
    </script>
</body>
@endsection