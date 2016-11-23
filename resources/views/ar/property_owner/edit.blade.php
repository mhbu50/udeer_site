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
                <div class="col-md-12 col-md-offset-0" >
                    <div id="" class="page-content">
                         <div class="raw">
                                <div class='col-md-12'>
                                    <h2> {{ isset($property_owner->name) ? $property_owner->name : ""}}<h2>
                                </div>
                                
                            </div>
                        <form method='post' action="{!!action('Property_ownerController@update',['name' => $property_owner->name])!!}" enctype="multipart/form-data">
                            <input type='hidden' name='_token' value="{!! csrf_token() !!}">   
                            <div class="raw">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">اسم المالك</label>
                                        <input type="text" class="form-control" id="full_name" placeholder="" name="full_name" value='{{ isset($property_owner->full_name) ? $property_owner->full_name : ""}}'>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="id_number">رقم الهویة</label>
                                        <input type="text" class="form-control" id="id_number" placeholder="" name="id_number" value='{{ isset($property_owner->id_number) ? $property_owner->id_number : ""}}'>
                                    </div>
                                </div>
                            </div>
                            <div class="raw">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">رقم الجوال</label>
                                        <input type="text" class="form-control" id="mobile_number" placeholder="" name="mobile_number" value='{{ isset($property_owner->mobile_number) ? $property_owner->mobile_number : ""}}'>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="id_number">البريد الالكتروني</label>
                                        <input type="email" class="form-control" id="email" placeholder="" name="email" value='{{ isset($property_owner->email) ? $property_owner->email : ""}}'>
                                    </div>
                                </div>
                            </div>
                            <div class="raw">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">بنك</label>
                                        <select id="bank" class="form-control" name='bank'>
                                            <option value="enma_bank">الانماء</option>
                                            <option value="alahli_bank">الاهلي</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="bank_acount">رقم الحساب </label>
                                        <input type="text" class="form-control" id="bank_acount" placeholder="" name="bank_acount" value='{{ isset($property_owner->bank_acount) ? $property_owner->bank_acount : ""}}'>
                                    </div>
                                </div>
                            </div>
                            <div class="raw">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="telephone_number">رقم الهاتف</label>
                                        <input type="text" class="form-control" id="telephone_number" placeholder="" name="id_number" value='{{ isset($property_owner->id_number) ? $property_owner->id_number : ""}}'>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">رقم الفاكس</label>
                                        <input type="text" class="form-control" id="fax" placeholder="" name="fax" value='{{ isset($property_owner->fax) ? $property_owner->fax : ""}}'>
                                    </div>
                                </div>    
                            </div>
                            <div class="raw">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="address">العنوان</label>
                                        <textarea name="address"class="form-control">{{ isset($property_owner->address) ? $property_owner->address : ""}}</textarea>
                                    </div>
                                </div>
                            </div>
                        
                            <div class='raw'>
                                <div class='col-md-12'><button class='btn btn-ud'>ارسال</button></div>
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
    <script type="text/javascript">
            $(document).ready(function(){
                $("#bank").val('{{ isset($property_owner->bank) ? $property_owner->bank : ""}}');

              })
    </script>
    
</body>
@endsection