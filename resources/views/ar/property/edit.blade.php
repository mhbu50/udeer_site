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
                <div class="col-md-12 col-md-offset-0" >
                    <div id="propriety_unit_form" class="page-content">
                        <form method='post' action="{!!action('PropertyController@update',['name' => $property->name])!!}" enctype="multipart/form-data">
                            <input type='hidden' name='_token' value="{!! csrf_token() !!}">
                                <div class="form-column col-sm-6">

                                    <div class="raw">
                                        <h2>عنوان<h2>
                                    </div>
                                   

                                    <div class="form-group">
                                        <label for="exampleInputEmail1">اسم العقار</label>
                                        <input type="text" class="form-control" id="property_name" placeholder="" value='{{ isset($property->property_name) ? $property->property_name : ""}}' name='property_name'>
                                    </div>

                                    <div class="form-group">
                                      <label for="property_type">نوع العقار</label>
                                      <select id="property_type" class="form-control" value='{{ isset($property->property_type) ? $property->property_type : ""}}' name='property_type'>
                                        <option>house</option>
                                        <option>schema</option>
                                        <option>residential building</option>
                                      </select>
                                    </div>

                                    <div class="form-group">
                                        <label for="exampleInputEmail1">تاريخ الانشاء</label>
                                        <input type="date" class="form-control" id="construction_date" placeholder="" value='{{ isset($property->construction_date) ? $property->construction_date : ""}}' name='construction_date'>
                                    </div>

                                    <div class="form-group">
                                      <label for="comment">العنوان</label>
                                      <textarea class="form-control" rows="5" id="Address" name='address' >{{ isset($property->address) ? $property->address : ""}}</textarea>
                                    </div>

                                    <div class="form-group">
                                        <label for="exampleInputEmail1">عدد وحدات العقاريى</label>
                                        <input type="text" class="form-control" id="number_of_property_units" placeholder="" value='{{ isset($property->number_of_property_units) ? $property->number_of_property_units : ""}}' name='number_of_property_units'>
                                    </div>

                                    <div class="form-group">
                                      <label for="comment">الميزات</label>
                                      <textarea class="form-control" rows="5" id="evaluation" name='evaluation'>{{ isset($property->evaluation) ? $property->evaluation : ""}}</textarea>
                                    </div>

                                    <div class="form-group">
                                      <label for="comment">مميزات العقار</label>
                                      <textarea class="form-control" rows="5" id="property_advantage" name='property_advantage'>{{ isset($property->property_advantage) ? $property->property_advantage : ""}}</textarea>
                                    </div>

                                </div>
                                <div class="form-column col-sm-6">
                                    <div class="raw">
                                        <h2>بياناتن المالك<h2>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">اسم المالك</label>
                                        <input type="text" class="form-control" id="owner_name" placeholder="" value='{{ isset($property->owner_name) ? $property->owner_name : ""}}' name='owner_name'>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">رقم العقار</label>
                                        <input type="text" class="form-control" id="Property_number" placeholder="" value='{{ isset($property->property_number) ? $property->property_number : ""}}' name='property_number'>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">رقم الصك</label>
                                        <input type="text" class="form-control" id="instrument_number" placeholder="" value='{{ isset($property->instrument_number) ? $property->instrument_number : ""}}' name='instrument_number'>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">تاريخ الصك</label>
                                        <input type="date" class="form-control" id="instrument_date" placeholder="" value='{{ isset($property->instrument_date) ? $property->instrument_date : ""}}' name='instrument_date'>
                                    </div>

                                    <div class="panel panel-default">
                                        <div class="panel-heading">وحدات العقار</div>
                                        <div class="panel-body">
                                            <table class="table table-bordered">
                                                <thead>
                                                  <tr>
                                                    <th>Firstname</th>
                                                    <th>Lastname</th>
                                                    <th>Email</th>
                                                  </tr>
                                                </thead>
                                                <tbody>
                                                  <tr>
                                                    <td>John</td>
                                                    <td>Doe</td>
                                                    <td>john@example.com</td>
                                                  </tr>
                                                  <tr>
                                                    <td>Mary</td>
                                                    <td>Moe</td>
                                                    <td>mary@example.com</td>
                                                  </tr>
                                                  
                                                </tbody>
                                              </table>
                                        </div>
                                        <div class="panel-footer">
                                            <a href="#" class="btn btn-info" role="button">اضافة</a>
                                        </div>
                                    </div>

                                    <div class="panel panel-default">
                                        <div class="panel-heading">المستندات</div>
                                        <div class="panel-body">
                                            <table class="table table-bordered">
                                                <thead>
                                                  <tr>
                                                    <th>Firstname</th>
                                                    <th>Lastname</th>
                                                    <th>Email</th>
                                                  </tr>
                                                </thead>
                                                <tbody>
                                                  <tr>
                                                    <td>John</td>
                                                    <td>Doe</td>
                                                    <td>john@example.com</td>
                                                  </tr>
                                                  <tr>
                                                    <td>Mary</td>
                                                    <td>Moe</td>
                                                    <td>mary@example.com</td>
                                                  </tr>
                                                </tbody>
                                              </table>
                                        </div>
                                        <div class="panel-footer">
                                            <a href="#" class="btn btn-info" role="button">اضافة</a>
                                        </div>
                                    </div>

                                    <div class="panel panel-default">
                                        <div class="panel-heading">نوت</div>
                                        <div class="panel-body">
                                            <table class="table table-bordered">
                                                <thead>
                                                  <tr>
                                                    <th>Firstname</th>
                                                    <th>Lastname</th>
                                                    <th>Email</th>
                                                  </tr>
                                                </thead>
                                                <tbody>
                                                  <tr>
                                                    <td>John</td>
                                                    <td>Doe</td>
                                                    <td>john@example.com</td>
                                                  </tr>
                                                  <tr>
                                                    <td>Mary</td>
                                                    <td>Moe</td>
                                                    <td>mary@example.com</td>
                                                  </tr>
                                                  
                                                </tbody>
                                              </table>
                                        </div>
                                        <div class="panel-footer">
                                            <a href="#" class="btn btn-info" role="button">اضافة</a>
                                        </div>
                                    </div>


                                    <div class="panel panel-default">
                                        <div class="panel-heading">الصور</div>
                                        <div class="panel-body">
                                            <table class="table table-bordered">
                                                <thead>
                                                  <tr>
                                                    <th>Firstname</th>
                                                    <th>Lastname</th>
                                                    <th>Email</th>
                                                  </tr>
                                                </thead>
                                                <tbody>
                                                  <tr>
                                                    <td>John</td>
                                                    <td>Doe</td>
                                                    <td>john@example.com</td>
                                                  </tr>
                                                  <tr>
                                                    <td>Mary</td>
                                                    <td>Moe</td>
                                                    <td>mary@example.com</td>
                                                  </tr>
                                                  
                                                </tbody>
                                              </table>
                                        </div>
                                        <div class="panel-footer">
                                            <a href="#" class="btn btn-info" role="button">اضافة</a>
                                        </div>
                                    </div>

                                </div>
                                <input type='submit' class='btn btn-default' value='ارسال'/>
                            </form>
                       
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

 
    @include('ar.ar_footer')
</body>
@endsection
