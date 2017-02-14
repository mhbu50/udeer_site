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
            <div class="raw">
                <div class="col-md-12 col-md-offset-0" >
                    <div id="propriety_unit_form" class="page-content">
                         <div class="raw">
                                <div class='col-md-12'>
                                    <h2>محصل جديد<h2>
                                </div>
                                
                            </div>
                            <?php $doctype = str_replace('/', '*', $reciever->name) ?>
                        <form method='post' action="{!!action('ReceiverController@update',['name' => $doctype])!!}" enctype="multipart/form-data">
                            <input type='hidden' name='_token' value="{!! csrf_token() !!}">   
                            <div class='raw'>
                                <div class='col-md-6'>
                                    <div class="form-group">
                                        <label for="employee_name">اسم الكامل</label>
                                        <input type="text" class="form-control" id="employee_name" placeholder="" name="employee_name" value='{{ isset($reciever->employee_name) ? $reciever->employee_name : ""}}' readonly>
                                    </div>
                                </div>
                                <div class='col-md-6'>
                                    <div class="form-group">
                                        <label for="company">الشركة</label>
                                        <input type="text" class="form-control" id="company" placeholder="" name="company" value='{{ isset($reciever->company) ? $reciever->company : ""}}' readonly>
                                    </div>
                                </div>
                            </div>

                            
                            <div class='raw'>
                               <div class='col-md-6'>
                                    <div class="form-group">
                                        <label for="date_of_joining">تاريخ الالتحاق</label>
                                        <input type="date" class="form-control" id="date_of_joining" placeholder="" name="date_of_joining" value='{{ isset($reciever->date_of_joining) ? $reciever->date_of_joining : ""}}'>
                                    </div>
                                </div>
                                <div class='col-md-6'>
                                    <div class="form-group">
                                        <label for="date_of_birth">تاريخ الولادة</label>
                                        <input type="date" class="form-control" id="date_of_birth" placeholder="" name="date_of_birth" value='{{ isset($reciever->date_of_birth) ? $reciever->date_of_birth : ""}}'>
                                    </div>
                                </div>
                            </div>

                           

                            <div class='raw'>
                                <div class='col-md-12'><button class='btn btn-ud'>حفظ</button></div>
                            </div>
                       
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