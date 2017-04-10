@section('module','property_management')
@section('page_title','property_create')
@section('page_type','create_page')
@extends('template')

@section('css_page')
    

    

@endsection
@section('js_page')
    <script src="/assets/global/plugins/select2/js/select2.full.min.js" type="text/javascript"></script>
    <script src="/assets/global/plugins/jquery-validation/js/jquery.validate.min.js" type="text/javascript"></script>
    <script src="/assets/global/plugins/jquery-validation/js/localization/messages_ar.js" />
    <script src="/assets/global/plugins/jquery-validation/js/additional-methods.min.js" type="text/javascript"></script>
    <script src="/assets/global/plugins/bootstrap-wizard/jquery.bootstrap.wizard.min.js" type="text/javascript"></script>
    <script src="/assets/pages/scripts/form-wizard.js" type="text/javascript"></script>
    <script type="text/javascript">
      $(document).ready(function(){
        google.maps.event.addDomListener(window, 'load', set_map(50.0301574,26.3320884));
        $(".commission").hide();
        data = {!!json_encode( session()->getOldInput())!!}
        set_value(data)
      });
    </script>
@endsection

@section('content')

    <h1 class="page-title"> ادارة الاملاك العقارية</h1>
                        <!-- END PAGE TITLE-->
                        <!-- END PAGE HEADER-->
                        <div class="row">
                            <div class="col-md-12">
                                
                                <div class="portlet light bordered" id="form_wizard_1">
                                    <div class="portlet-title">
                                        <div class="caption">
                                            <i class=" icon-layers font-red"></i>
                                            <span class="caption-subject font-red bold uppercase"> اضافة عقار-
                                                <span class="step-title"> خطوة 1 من 4 </span>
                                            </span>
                                        </div>

                                    </div>
                                    <div class="portlet-body form">
                                        <form  action="/property/create" id="submit_form" method="POST">
                                            <input type='hidden' name='_token' value="{!! csrf_token() !!}">   
                                            <div class="form-wizard">
                                                <div class="form-body">
                                                    <ul class="nav nav-pills nav-justified steps">
                                                        <li>
                                                            <a href="#tab1" data-toggle="tab" class="step">
                                                                <span class="number"> 1 </span>
                                                                <span class="desc">
                                                                    <i class="fa fa-check"></i> بيانات الاساسية </span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#tab2" data-toggle="tab" class="step">
                                                                <span class="number"> 2 </span>
                                                                <span class="desc">
                                                                    <i class="fa fa-check"></i> بيانات الثانوية </span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#tab3" data-toggle="tab" class="step active">
                                                                <span class="number"> 3 </span>
                                                                <span class="desc">
                                                                    <i class="fa fa-check"></i> بيانات المالك </span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#tab4" data-toggle="tab" class="step">
                                                                <span class="number"> 4 </span>
                                                                <span class="desc">
                                                                    <i class="fa fa-check"></i> مراجعة </span>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                    <div id="bar" class="progress progress-striped" role="progressbar">
                                                        <div class="progress-bar progress-bar-success"> </div>
                                                    </div>
                                                    <div class="tab-content">
                                                        <div class="alert alert-danger display-none">
                                                            <button class="close" data-dismiss="alert"></button> يوجد بعض الاخطاء . الرجاء التدقيق في المدخلات </div>
                                                        <div class="alert alert-success display-none">
                                                            <button class="close" data-dismiss="alert"></button> تم ادخال الحقول بنجاح! </div>
                                                        <div class="tab-pane active" id="tab1">
                                                            <h3 class="block">تزويد بيانات العقار الاساسية</h3>
                                                            <div class="col-md-6">
                                                                <div class="form-group form-md-line-input form-md-floating-label">
                                                                    <input type="text" class="form-control" id="property_name" name="property_name" placeholder="" value="">
                                                                    <label for="property_name">اسم العقار</label>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group form-md-line-input form-md-floating-label">
                                                                    <select id="Property_type" class="form-control" name='property_type' value="{{ old('property_type') }}" >
                                                                      <option value=""></option>
                                                                      <option value="house">بيت</option>
                                                                      <option value="schema">مخطط</option>
                                                                      <option value="residential building">عمارة سكنية</option>
                                                                    </select>
                                                                    <label for="Property_type">نوع العقار</label>
                                                                </div>
                                                            </div>

                                                            <div class="col-md-6">
                                                                <!--Simple Select with Search-->
                                                                <div class="form-group pmd-textfield pmd-textfield-floating-label">
                                                                    <label>نوع العقار</label>
                                                                    <div class="col-md-11">
                                                                        <div class="row">
                                                                            <select class="select2-c pmd-select2 form-control" id="property_type" doctype="property_type" doc-label="property_type" name="property_type">
                                                                                <option></option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-1">
                                                                        <div class="row">
                                                                            <span class="input-group-btn btn-left">
                                                                                    <a class="btn blue btn-outline" href="#" data-toggle="modal" data-target="#Property_typeModal"><i class="fa fa-plus"></i></a>
                                                                            </span>
                                                                        </div>    
                                                                    </div>
                                                                </div>               
                                                            </div>    

                                                            <div class="col-md-6">
                                                              <div class="form-group form-md-line-input form-md-floating-label">
                                                                <div class="input-icon right">
                                                                    <input class="form-control form-control-inline date-picker" size="16" type="text" value="" id="construction_date" name='construction_date' value="{{ old('construction_date') }}">
                                                                    <i class="fa fa-calendar"></i>  
                                                                    <label for="construction_date">سنة البناء</label>
                                                                        
                                                                </div>
                                                              </div>  
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group form-md-line-input form-md-floating-label">
                                                                    <input type="number" class="form-control" id="number_of_units" name='number_of_units' placeholder="" min="0" value="{{ old('number_of_units') }}">
                                                                    <label for="number_of_units">عدد الوحدات</label>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group form-md-line-input form-md-floating-label">
                                                                  <textarea class="form-control" rows="5" id="evaluation" name='evaluation'></textarea>
                                                                  <label for="evaluation">تقييم</label>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group form-md-line-input form-md-floating-label">
                                                                  <textarea class="form-control" rows="5" id="property_advantage" name="property_advantage"></textarea>
                                                                  <label for="property_advantage">مميزات العقار</label>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group form-md-line-input form-md-floating-label">
                                                                  <input type="text" class="form-control" id="scheme_numer" name="scheme_numer" placeholder="">
                                                                  <label for="scheme_numer">رقم المخطط</label>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group form-md-line-input form-md-floating-label">
                                                                  <select id="condition" class="form-control" name='condition'>
                                                                    <option value=""></option>
                                                                    <option value="new">جديد</option>
                                                                    <option value="old">فديم</option>
                                                                    <option value="under_construction">تحت الانشاء</option>
                                                                    <option value="none">غير ذلك</option>
                                                                  </select>
                                                                  <label for="condition">وضع العقار</label>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group form-md-line-input form-md-floating-label">
                                                                    <select id="management_type" class="form-control" name="management_type">
                                                                      <option value=""></option>
                                                                      <option value="percentage">نسبة مئوية</option>
                                                                      <option value="not_percentage">مبلغ مقطوع</option>
                                                                    </select>
                                                                    <label for="management_type">طريقة ادارة الاملاك</label>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6" >
                                                                <div class="form-group form-md-line-input form-md-floating-label commission" id="not_percentage">
                                                                  <input type="number" class="form-control" name="commission"/>
                                                                  <label>المبلغ</label>
                                                                </div>
                                                                <div class="form-group form-md-line-input form-md-floating-label commission" id="percentage">
                                                                    <select class="form-control" name="commission">
                                                                      <option value=""></option>
                                                                      <option value="0.5/100">0.5%</option>
                                                                      <option value="1/100">1%</option>
                                                                      <option value="1.5/100">1.5%</option>
                                                                      <option value="2/100">2%</option>
                                                                      <option value="2.5/100">2.5%</option>
                                                                      <option value="3/100">3%</option>
                                                                      <option value="3.5/100">3.5%</option>
                                                                      <option value="4/100">4%</option>
                                                                      <option value="4.5/100">4.5%</option>
                                                                      <option value="5/100">5%</option>
                                                                    </select>
                                                                    <label for="commission">النسبة المئوية</label>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                              <div class="form-group form-md-line-input form-md-floating-label">
                                                                <select class="form-control" id="offer_type" name="offer_type">
                                                                  <option value=""></option>
                                                                  <option value="sell">ايجار</option>
                                                                  <option value="rent">بيع</option>
                                                                  <option value="full_rent">ايجار كامل</option>
                                                                  <option value="investment">استثمار</option>
                                                                  <option value="taghbeel">تقبيل</option>
                                                                  <option value="sell_investment">بيع او استثمار</option>
                                                                </select>
                                                                <label for="offer_type">نوع العرض</label>
                                                              </div>
                                                            </div>
          
                                                        </div>
                                                        <div class="tab-pane" id="tab2">
                                                            <h3 class="block">تزويد بيانات العقار الثانوية</h3>
                                                            <div class="col-md-6">
                                                              <div class="form-group form-md-line-input form-md-floating-label">
                                                                <input type="number" class="form-control" id="price" name="price" placeholder="">
                                                                <label for="price">السعر</label>
                                                              </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                              <div class="form-group form-md-line-input form-md-floating-label">
                                                                <input type="number" class="form-control" id="meter_price" name="meter_price" placeholder="">
                                                                <label for="meter_price">سعر المتر</label>
                                                              </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                              <div class="form-group form-md-line-input form-md-floating-label">
                                                                <input type="number" class="form-control" id="negotiating_boundary" name="negotiating_boundary" placeholder="">
                                                                <label for="negotiating_boundary">حد التفاوض</label>
                                                              </div>
                                                            </div>

                                                            <div class="col-md-3">
                                                              <div class="form-group form-md-line-input form-md-floating-label">
                                                                <select id="country" class="form-control" name='country'>
                                                                  <option value=""></option>
                                                                  <option value="saudi arabia">سعودية</option>
                                                                  <option value="bahrain">بحرين</option>
                                                                </select>
                                                                <label for="country">الدولة</label>
                                                              </div>
                                                            </div>
                                                            <div class="col-md-3">
                                                              <div class="form-group form-md-line-input form-md-floating-label">
                                                                <select class="form-control" id="city" placeholder="" name="city">
                                                                  <option value=""></option>
                                                                  <option value="دمام">دمام</option>
                                                                  <option value="رياض">رياض</option>
                                                                </select>
                                                                <label for="city">المدينة</label>
                                                              </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                              <div class="form-group form-md-line-input form-md-floating-label">
                                                                <input type="text" class="form-control" id="district" placeholder="" name="district">
                                                                <label for="">الحي</label>
                                                              </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                              <div class="form-group form-md-line-input form-md-floating-label">
                                                                <input type="text" class="form-control" id="street" placeholder="" name="street">
                                                                <label for="">الشارع</label>
                                                              </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                              <div class="form-group form-md-line-input form-md-floating-label">
                                                                <input class="form-control" rows="1" id="address" name='address'>
                                                                <label for="address">العنوان</label>
                                                              </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                              <div class="form-group form-md-line-input form-md-floating-label">
                                                                <input type="number" class="form-control" id="water_meter_number" name="water_meter_number" placeholder="">
                                                                <label>رقم عداد المياة</label>
                                                              </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                              <div class="form-group form-md-line-input form-md-floating-label">
                                                                <input type="number" class="form-control" id="electricity_meter_number" name="electricity_meter_number" placeholder="">
                                                                <label>رقم عداد الكهرباء</label>
                                                              </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                              <div class="form-group form-md-line-input form-md-floating-label">
                                                                <input type="number" class="form-control" id="total_area" name="total_area" placeholder="">
                                                                <label for="">المساحة الاجمالية</label>
                                                              </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                              <div class="form-group form-md-line-input form-md-floating-label">
                                                                <input type="number" class="form-control" id="construction_area" name="construction_area" placeholder="">
                                                                <label for="">مساحة البناء</label>
                                                              </div>
                                                            </div>
                                                            <div class="col-md-6 ">
                                                              <div class="form-group form-md-line-input form-md-floating-label">
                                                                <select id="property_direction" name="property_direction" class="form-control" >
                                                                  <option value=""></option>
                                                                  <option value="north">شمال</option>
                                                                  <option value="east">شرق</option>
                                                                  <option value="west">غرب</option>
                                                                  <option value="south">جنوب</option>
                                                                  <option value="north_east">شمال شرق</option>
                                                                  <option value="north_west">شمال غرب</option>
                                                                  <option value="south_east">جنوب شرق</option>
                                                                  <option value="south_west">جنوب غرب</option>
                                                                  <option value="none">بدون</option>
                                                                </select>
                                                                <label for="">اتجاه العقار</label>
                                                              </div>
                                                            </div>
                                                            <div class="col-md-12 ">
                                                              <div class="form-group">
                                                                <div id="mapCanvas"></div>
                                                                <input type="text" id="longitude" name="longitude" hidden>
                                                                <input type="text" id="latitude" name="latitude" hidden>
                                                              </div>
                                                            </div>
                                                        </div>
                                                        <div class="tab-pane" id="tab3">
                                                            <h3 class="block">تزويد بيانات المالك</h3>
                                                            
                                                            <div class="col-md-6">
                                                                <!--Simple Select with Search-->
                                                                <div class="form-group pmd-textfield pmd-textfield-floating-label">
                                                                    <label>اسم المالك</label>
                                                                    <div class="col-md-11">
                                                                        <div class="row">
                                                                            <select class="select2-c pmd-select2 form-control" id="property_owner" doctype="property_owner" doc-label="first_name" name="property_owner">
                                                                                <option></option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-1">
                                                                        <div class="row">
                                                                            <span class="input-group-btn btn-left">
                                                                                    <a class="btn blue btn-outline" href="#" data-toggle="modal" data-target="#OwnerModal"><i class="fa fa-plus"></i></a>
                                                                            </span>
                                                                        </div>    
                                                                    </div>
                                                                </div>               
                                                            </div>    
                                                            <div class="col-md-6">
                                                              <div class="form-group form-md-line-input form-md-floating-label">
                                                                
                                                                <input type="number" class="form-control" id="property_number" name="property_number" placeholder="" min="0">
                                                                <label for="property_number">رقم العقار</label>
                                                              </div>
                                                            </div>
                                                            <div class='col-md-12'>
                                                              <div class='row'>
                                                              <div class="col-md-6">
                                                                <div class="form-group form-md-line-input form-md-floating-label">
                                                                  <input type="text" class="form-control" id="instrument_number" name="instrument_number" placeholder="">
                                                                  <label for="instrument_number">رقم الصك</label>
                                                                </div>
                                                              </div>
                                                              <div class="col-md-6">
                                                                <div class="form-group form-md-line-input form-md-floating-label">
                                                                  <div class="input-icon right">
                                                                      <input class="form-control form-control-inline date-picker" size="16" type="text" value="" id="instrument_date" name="instrument_date">
                                                                      <i class="fa fa-calendar"></i>  
                                                                      <label for="instrument_date">تاريخ الصك</label>
                                                                  </div>
                                                                </div>  
                                                              </div>
                                                              </div>
                                                            </div>
                                                        </div>













                                                        <div class="tab-pane" id="tab4">
                                                              <h3 class="block">مراجعة</h3>
                                                            <div><h4 class="form-section">بيانات العقار الاساسية</h4></div>
                                                            <div class="form-group">
                                                                
                                                                <div class="col-md-12">
                                                                    <label class="control-label col-md-3">اسم العقار:</label>
                                                                    <p class="form-control-static" data-display="property_name"> </p>
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <div class="col-md-12">
                                                                    <label class="control-label col-md-3">نوع العقار:</label>
                                                                    <p class="form-control-static" data-display="property_type"> </p>
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                
                                                                <div class="col-md-12">
                                                                    <label class="control-label col-md-3">سنة البناء:</label>
                                                                    <p class="form-control-static" data-display="property_type"> </p>
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                
                                                                <div class="col-md-12">
                                                                    <label class="control-label col-md-3">عدد الوحدات:</label>
                                                                    <p class="form-control-static" data-display="number_of_units"> </p>
                                                                </div>
                                                            </div>

                                                            <div class="form-group">
                                                                
                                                                <div class="col-md-12">
                                                                    <label class="control-label col-md-3">تقييم:</label>
                                                                    <p class="form-control-static" data-display="evaluation"> </p>
                                                                </div>
                                                            </div>

                                                            <div class="form-group">
                                                                
                                                                <div class="col-md-12">
                                                                    <label class="control-label col-md-3">مميزات العقار:</label>
                                                                    <p class="form-control-static" data-display="property_advantage"> </p>
                                                                </div>
                                                            </div>
                                                           
                                                            <div class="form-group">
                                                                
                                                                <div class="col-md-12">
                                                                    <label class="control-label col-md-3">نوع العقار:</label>
                                                                    <p class="form-control-static" data-display="scheme_numer"> </p>
                                                                </div>
                                                            </div>

                                                            <div class="form-group">
                                                                
                                                                <div class="col-md-12">
                                                                    <label class="control-label col-md-3">وضع العقار:</label>
                                                                    <p class="form-control-static" data-display="condition"> </p>
                                                                </div>
                                                            </div>

                                                            <div class="form-group">
                                                                
                                                                <div class="col-md-12">
                                                                    <label class="control-label col-md-3">طريقة ادارة الاملاك:</label>
                                                                    <p class="form-control-static" data-display="management_type"> </p>
                                                                </div>
                                                            </div>

                                                            <div class="form-group">
                                                                
                                                                <div class="col-md-12">
                                                                    <label class="control-label col-md-3">المبلغ:</label>
                                                                    <p class="form-control-static" data-display="commission"> </p>
                                                                </div>
                                                            </div>

                                                            <div class="form-group">
                                                                
                                                                <div class="col-md-12">
                                                                    <label class="control-label col-md-3">نوع العرض:</label>
                                                                    <p class="form-control-static" data-display="offer_type"> </p>
                                                                </div>
                                                            </div>




                                                            <div><h4 class="form-section">بيانات العقار الثانوية</h4></div>
                                                            <div class="form-group">
                                                                
                                                                <div class="col-md-12">
                                                                    <label class="control-label col-md-3">السعر:</label>
                                                                    <p class="form-control-static" data-display="price"> </p>
                                                                </div>
                                                            </div>

                                                            <div class="form-group">
                                                                
                                                                <div class="col-md-12">
                                                                    <label class="control-label col-md-3">سعر المتر:</label>
                                                                    <p class="form-control-static" data-display="meter_price"> </p>
                                                                </div>
                                                            </div>

                                                            <div class="form-group">
                                                                
                                                                <div class="col-md-12">
                                                                    <label class="control-label col-md-3">حد التفاوض:</label>
                                                                    <p class="form-control-static" data-display="negotiating_boundary"> </p>
                                                                </div>
                                                            </div>

                                                            <div class="form-group">
                                                                
                                                                <div class="col-md-12">
                                                                    <label class="control-label col-md-3">الدولة:</label>
                                                                    <p class="form-control-static" data-display="country"> </p>
                                                                </div>
                                                            </div>

                                                            <div class="form-group">
                                                                
                                                                <div class="col-md-12">
                                                                    <label class="control-label col-md-3">المدينة:</label>
                                                                    <p class="form-control-static" data-display="city"> </p>
                                                                </div>
                                                            </div>

                                                            <div class="form-group">
                                                                
                                                                <div class="col-md-12">
                                                                    <label class="control-label col-md-3">الحي:</label>
                                                                    <p class="form-control-static" data-display="district"> </p>
                                                                </div>
                                                            </div>

                                                            <div class="form-group">
                                                                
                                                                <div class="col-md-12">
                                                                    <label class="control-label col-md-3">الشارع:</label>
                                                                    <p class="form-control-static" data-display="street"> </p>
                                                                </div>
                                                            </div>
                                                           
                                                            <div class="form-group">
                                                                
                                                                <div class="col-md-12">
                                                                    <label class="control-label col-md-3">العنوان:</label>
                                                                    <p class="form-control-static" data-display="address"> </p>
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                
                                                                <div class="col-md-12">
                                                                    <label class="control-label col-md-3">رقم عداد المياة:</label>
                                                                    <p class="form-control-static" data-display="water_meter_number"> </p>
                                                                </div>
                                                            </div>

                                                            <div class="form-group">
                                                                
                                                                <div class="col-md-12">
                                                                    <label class="control-label col-md-3">رقم عداد الكهرباء:</label>
                                                                    <p class="form-control-static" data-display="electricity_meter_number"> </p>
                                                                </div>
                                                            </div>

                                                            <div class="form-group">
                                                                
                                                                <div class="col-md-12">
                                                                    <label class="control-label col-md-3">المساحة الاجمالية:</label>
                                                                    <p class="form-control-static" data-display="total_area"> </p>
                                                                </div>
                                                            </div>

                                                            <div class="form-group">
                                                                
                                                                <div class="col-md-12">
                                                                    <label class="control-label col-md-3">الشارع:</label>
                                                                    <p class="form-control-static" data-display="street"> </p>
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                
                                                                <div class="col-md-12">
                                                                    <label class="control-label col-md-3">مساحة البناء:</label>
                                                                    <p class="form-control-static" data-display="construction_area"> </p>
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                               
                                                                <div class="col-md-12">
                                                                     <label class="control-label col-md-3">اتجاه العقار:</label>
                                                                    <p class="form-control-static" data-display="property_direction"> </p>
                                                                </div>
                                                            </div>
                                                            <div><h4 class="form-section">تزويد بيانات المالك</h4></div>
                                                            <div class="form-group">
                                                                
                                                                <div class="col-md-12">
                                                                    <label class="control-label col-md-3">اسم المالك:</label>
                                                                    <p class="form-control-static" data-display="owner_name"> </p>
                                                                </div>
                                                            </div>
                                                            
                                                            <div class="form-group">
                                                                
                                                                <div class="col-md-12">
                                                                    <label class="control-label col-md-3">رقم العقار:</label>
                                                                    <p class="form-control-static" data-display="property_number"> </p>
                                                                </div>
                                                            </div>

                                                            <div class="form-group">
                                                                
                                                                <div class="col-md-12">
                                                                    <label class="control-label col-md-3">رقم الصك:</label>
                                                                    <p class="form-control-static" data-display="instrument_number"> </p>
                                                                </div>
                                                            </div>

                                                            <div class="form-group">
                                                                
                                                                <div class="col-md-12">
                                                                    <label class="control-label col-md-3">تاريخ الصك:</label>
                                                                    <p class="form-control-static" data-display="instrument_date"> </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-actions">
                                                    <div class="row">
                                                        <div class="col-md-12 text-center">
                                                            <a href="javascript:;" class="btn default button-previous">
                                                                <i class="fa fa-angle-right"></i> قبل </a>
                                                            <a href="javascript:;" class="btn btn-outline green button-next"> بعد
                                                                <i class="fa  fa-angle-left"></i>
                                                            </a>
                                                            <input type="submit" class="btn green button-submit" value="حفظ"/> 
                                                                
                                                            
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
    @include('ar.modals.owner_modal')
    
@endsection
