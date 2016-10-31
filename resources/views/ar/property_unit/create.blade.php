@extends('template')
@section('lang','ar')
@section('head')
    <link href="/css/bootstrap-rtl.css" rel="stylesheet">
@endsection

@section('body')
    

<body  >

    <section id="temp1">
        
            <!-- Static navbar -->
              <div id="c-nav">
                @include('ar.ar_nav')
            </div>
              
    <div class="container c-body-con">
        <div class="col-md-9">
            <div class="raw">
                <div class="col-md-12 col-md-offset-0" >
                    <div id="propriety_uni_form.html" class="page-content">
                      <form method='post' action="{!!action('Property_unitController@store')!!}" enctype="multipart/form-data">
                        <input type='hidden' name='_token' value="{!! csrf_token() !!}">
                        <div class="form-column col-sm-6">

                            <div class="raw">
                                <h2>title<h2>
                            </div>





                            <div class="form-group">
                                <label for="unit_number">رقم الوحدة</label>
                                <input type="text" class="form-control" id="unit_number" placeholder="" name='unit_number'>
                            </div>

                            <div class="form-group">
                              <label for="unit_type">نوع الوحدة</label>
                              <select id="unit_type" class="form-control" name='unit_type'>
                                <option value='apartment'>شقة</option>value
                                <option value='room'>غرفة</option>
                                <option value='villa'>فيلا </option>
                                <option value='house'>بيت</option>
                              </select>
                            </div>






                            <div class="form-group">
                                <label for="annual_rent_amount">شعر تاجير السنوي</label>
                                <input type="text" class="form-control" id="annual_rent_amount" placeholder="" name='annual_rent_amount'>
                            </div>

                            <div class="form-group">
                                <label for="insurance_amount">مبلغ التامين</label>
                                <input type="text" class="form-control" id="insurance_amount" placeholder="" name='insurance_amount'>
                            </div>

                            <div class="form-group">
                              <label for="commission_type">العمولة</label>
                              <select id="commission_type" class="form-control" name='commission_type'>
                                <option value='percentage'></option>
                                <option value='cash'></option>
                              </select>
                            </div>


                            <div class="form-group">
                                <label for="commission_amount">قيمة العمولة</label>
                                <input type="text" class="form-control" id="commission_amount" placeholder="" name='commission_amount'>
                            </div>

                            <div class="form-group">
                              <label for="unit_description">وصف الوحدة</label>
                              <select id="commission_type" class="form-control" name='unit_description'>
                                <option value='for_families'>للعوائل</option>
                                <option value='for_singles'>للعزاب</option>
                                <option value='for_both'>عوائل و عزاب</option>
                                <option value='commercial'>تجاري</option>
                              </select>
                            </div>



                            <div class="form-group">
                                <label for="unit_space">المساحة</label>
                                <input type="text" class="form-control" id="unit_space" placeholder="" name='unit_space'>
                            </div>

                            <div class="form-group">
                              <label for="finishing_status">نوع التجهيز</label>
                              <select id="finishing_status" class="form-control" name='finishing_status'>
                                <option value='Standard'>عادي</option>
                                <option value='air_conditioned'>مكيف</option>
                                <option value='furnished_and_air_conditioned'>موثث و مكيف</option>
                              </select>
                            </div>

                            <div class="form-group">
                              <label for="room_slot">الغرفة\الفتحات</label>
                              <select id="room_slot" class="form-control" name='room_slot'>
                                 <option>1</option>
                                <option>2</option>
                              </select>
                            </div>

                            <div class="form-group">
                              <label for="number_of_bathrooms">دورات مياه</label>
                              <select id="number_of_bathrooms" class="form-control" name='number_of_bathrooms'>
                                <option>1</option>
                                <option>2</option>
                              </select>

                              <div class="form-group">
                                  <label for="unit_activity">نشاط الوحدة</label>
                                  <input type="text" class="form-control" id="unit_activity" placeholder="" name='unit_activity'>
                              </div>
                            </div>

                            

                            

                        </div>
                        <div class='col-md-6'>
                            <div class="raw">
                                  <h2>title2<h2>
                            </div>
                            <div class="form-group">
                                <label for="water_meter_number">رقم عداد المياه</label>
                                <input type="text" class="form-control" id="water_meter_number" placeholder="" name='water_meter_number'>
                            </div>

                            <div class="form-group">
                                <label for="electricity_meter_number">رقم عداد الكهرباء</label>
                                <input type="text" class="form-control" id="electricity_meter_number" placeholder="" name='electricity_meter_number'>
                            </div>
                            <div class="form-group">
                                <label for="property">العقار</label>
                                <input type="text" class="form-control" id="property" placeholder="" name='property'>
                            </div>
                            
                            
                    
                            <div class="panel panel-default">
                                <div class="panel-heading">documents</div>
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
                                    <a href="#" class="btn btn-info" role="button">Link Button</a>
                                </div>
                            </div>

                            <div class="panel panel-default">
                                <div class="panel-heading">notes</div>
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
                                    <a href="#" class="btn btn-info" role="button">Link Button</a>
                                </div>
                            </div>




                            <div class="panel panel-default">
                                <div class="panel-heading">images</div>
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
                                    <a href="#" class="btn btn-info" role="button">Link Button</a>
                                </div>
                            </div>
                        </div>
                        <input type='submit' class='btn btn-default'value='ارسال '/>
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