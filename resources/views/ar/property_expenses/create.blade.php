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

   <div class="container-fluid c-body-con">
        <div class="col-md-9">
            <div class="raw">
                <div class="" >
                    <div id="" class="page-content">
                         <div class="raw">
                                <div class='col-md-12'>
                                    <h2>اضافة مصروف<h2>
                                </div>
                                
                        </div>
                        <form method='post' action="{!!action('Property_expenseController@create',$property_name)!!}" enctype="multipart/form-data">
                            <input type='hidden' name='_token' value="{!! csrf_token() !!}">  
                            
                            <div class='raw'>
                                <div class='col-md-6'>
                                    <div class="form-group">
                                        <label for="amount">الوحدة</label>
                                        <input type="text" class="form-control" id="property_unit" placeholder="" name="property_unit">
                                    </div>
                                </div>
                                <div class='col-md-6'>
                                    <div class="form-group">
                                        <label for="type">النوع</label>
                                        <select name='type' class="form-control">
                                            <option value="maintenance">صيانة</option>
                                            <option value="service">فاتورة خدمة</option>
                                        </select>
                                    </div>
                                </div>
                            </div> 

                            <div class='raw'>
                                <div class='col-md-6'>
                                    <div class="form-group">
                                        <label for="">مزود الخدمة</label>
                                        <input type="text" class="form-control" id="Supplier" placeholder="" name="Supplier">
                                    </div>
                                </div>
                                <div class='col-md-6'>
                                    <div class="form-group">
                                        <label for="">رقم الفاتورة</label>
                                        <input type="text" class="form-control" id="invoice_number" placeholder="" name="invoice_number">
                                    </div>
                                </div>
                            </div>

                            <div class='raw'>
                                <div class='col-md-6'>
                                    <div class="form-group">
                                        <label for="">تاريخ</label>
                                        <input type="date" class="form-control" id="date" placeholder="" name="date">
                                    </div>
                                </div>
                                <div class='col-md-6'>
                                    <div class="form-group">
                                        <label for="">مقدار</label>
                                        <input type="text" class="form-control" id="amount" placeholder="" name="amount">
                                    </div>
                                </div>
                            </div> 

                            

                            <div class="form-column col-sm-12">
                               
                                <div class="form-group">
                                  <label for="comment">شرح</label>
                                  <textarea class="form-control" rows="5" id="description" name='description'></textarea>
                                </div>
                            </div>
                            
                            <div class='raw'>
                                <div class='col-md-12'><button class='btn btn-ud'>ارسال</button></div>
                            </div>
                       <form>
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