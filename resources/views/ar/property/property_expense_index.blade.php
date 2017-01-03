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

   <div class="container-fluid c-body-con">
        <div class="col-md-9">
         
            <div class="raw">
                <div class="" >
                     @include('ar.tabs.property')
                    <div id="" class="page-content" style="overflow:visible !important">
                        <div class="row">
                            <div class="col-md-2">
                                
                                <a class="btn btn-default c-btn-tp" href="{{action('Property_expenseController@create',$property_name)}}">اضافة</a>
                            </div>
                            <div class="col-md-2">
                                <form action="{!!action('PropertyController@delete_array')!!}" method="post">
                                    <input type='hidden' name='_token' value="{!! csrf_token() !!}">
                                    <input name="names" id="del-arr" hidden/>
                                    <button class="btn btn-danger c-btn-tp"id="del-btn" disabled>مسح</button>
                                </form>
                                
                            </div>
                        </div>
                         @if(count($result))
                         <table class="table table-strip"> 
                                <thead> 
                                    <tr> 
                                        <th>#</th>
                                        <th>تاريخ</th>  
                                        <th>مقدار</th> 
                                        <th>مزود الخدمة</th> 
                                        <th>رقم الفاتورة</th> 
                                        <th></th>
                                       
                                    </tr> 
                                </thead> 
                                <tbody> 
                                    
                                    @foreach($result as $result)    
                                            <tr>
                                                <th scope="row">{{ $result->name  }}</th>
                                                <td>{{$result->date}}</td> 
                                                <td>{{$result->amount}}</td>
                                                <td>{{$result->Supplier}}</td>
                                                <td>{{$result->invoice_number}}</td>
                                                <td><input type='checkbox' class='del-check' id="{!!$result->name!!}" name=""></td>
                                            
                                           
                                            </tr>
                                        @endforeach
                                    
                                    
                                                               

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
        $(".nav-tabs #expenses").addClass('active')
    </script>
    

</body>

@endsection