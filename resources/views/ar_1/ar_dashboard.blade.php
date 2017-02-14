@extends('template')
@section('lang','ar')
@section('head')
    <link href="/css/bootstrap-rtl.css" rel="stylesheet">
    <link href='/css/fullcalendar.css' rel='stylesheet' />
    <script src='/javascript/moment.min.js'></script>
    <script src='/javascript/fullcalendar.min.js'></script>
@endsection

@section('body')


<body  >

    <section id="temp1">
        
            <div id="c-nav">
                @include('ar.ar_nav')
            </div>

    <div class="container c-body-con">
            <div class="raw">
                <div class="col-md-4 col-md-offset-0" >
                    <div id="" class="page-content">
                        <img class="c-logo" src="/image/logo_horizone.jpg" width='100%'>
                        <p>شركة يدير العقارية</p>
                    </div>
                </div>
                <div class="col-md-8 col-md-offset-0" >
                    <div id="dash-calendar" class="page-content">
                        <div id='cont-cal'>
                            <div id='calendar'></div>
                        </div>
                        
                    </div>
                </div>
            </div>
            <div class="raw">
                <div class="col-md-12 col-md-offset-0" >
                    <div id="" class="content-box">
                        <div class="raw">
                            <h2>الدفعات المستحقة<h2>
                        </div>
                        <div class="raw">
                            <div class='col-md-6'>
                                <label for="exampleInputEmail1">اسم المالك</label>
                                <select id="unit_type" class="form-control c-ud-select-rtl">
                                    <option>a</option>
                                    <option>b</option>
                                </select>
                            </div>
                            <div class='col-md-6'>
                                <label for="exampleInputEmail1">اسم العقار</label>
                                <select id="unit_type" class="form-control c-ud-select-rtl">
                                    <option>a</option>
                                    <option>b</option>
                                </select>
                            </div>
                        </div>
                        <div class="raw">
                            <div class="form-group">
                                <label for="exampleInputEmail1">عدد دفعات المستحقة خلال الايام</label>
                                <input type="text" class="form-control" id="property_name" placeholder="">
                                 <button class='btn btn-ud'>بحث</button>
                            </div>
                        </div>

                        <div class="raw">
                            <table class="table table-strip"> 
                                <thead> 
                                    <tr> 
                                        <th>#</th> <th>عقد الايجار</th> <th>اسم العميل</th> <th>قيمة الدفعة</th> <th>تاريخ الاستحقاق</th> 
                                        <th>رقم الجوال</th> <th>استشعار</th> 
                                    </tr> 
                                </thead> 
                                <tbody> 
                                    <tr> 
                                        <th scope="row">1</th> <td>تست</td><td>تست</td><td>تست</td><td>تست</td><td>تست</td><td>تست</td> </tr>
                                        <th scope="row">2</th> <td>تست</td><td>تست</td><td>تست</td><td>تست</td><td>تست</td><td>تست</td> </tr>
                                        <th scope="row">3</th> <td>تست</td><td>تست</td><td>تست</td><td>تست</td><td>تست</td><td>تست</td> </tr>
                                        

                                    </tr> 
                                </tbody> 
                            </table>
                        </div>
                        
                        
                    </div>
                </div>
            </div>
    </div>
    @include('ar.ar_footer')
    <script type="text/javascript">
        $(document).ready(function() {
            

           
            $('#calendar').fullCalendar({
               
            })

        });
    </script>
</body>
@endsection