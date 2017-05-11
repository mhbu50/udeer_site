@section('lang','ar')
@section('module','property_management')
@section('page_title','property_index')
@extends('template')

@section('css_page')

@endsection
@section('js_page')
   
@endsection

@section('content')
    <h1 class="page-title"> العروض و الطلبات</h1>
    <div class="row">
      <div class="col-md-12">
        <div class="portlet light bordered ">
          <div class="portlet-title">
            <div class="caption font-red-sunglo">
                العروض و الطلبات
            </div>
            
          </div>
          <div class="portlet-body form">
            <div class="row">
              <div class="col-md-12">
              <h1 class="page-title">البيانات الاساسية  </h1>
                <div class="form-group form-md-line-input form-md-floating-label">
                    <select id="commission_type" class="form-control" name="commission_type">
                        <option value="">  </option>
                        <option value="percentage">option 1</option>
                        <option value="cash">option 2</option>
                    </select>
                    <label for="commission_type">عنوان العرض </label>
                </div>

                <div class=" row ">

                    <div class="col-md-6">
                        <div class="form-group form-md-line-input form-md-floating-label">
                            <select id="commission_type" class="form-control" name="commission_type">
                                <option value="">  </option>
                                <option value="percentage">بيع</option>
                                <option value="cash">ايجار </option>
                            </select>
                            <label for="commission_type"> نوع العرض   </label>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group form-md-line-input form-md-floating-label">
                            <select id="commission_type" class="form-control" name="commission_type">
                                <option value="">  </option>
                                <option value="percentage">فيلا</option>
                                <option value="cash">عمارة </option>
                            </select>
                            <label for="commission_type"> نوع العقار   </label>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group form-md-line-input form-md-floating-label">
                            <input type="number" class="form-control" rows="4" id="property_advantage" name="property_advantage">
                            <label for="property_advantage"> المساحة</label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group form-md-line-input form-md-floating-label">
                            <input type="text" class="form-control" rows="4" id="property_advantage" name="property_advantage">
                            <label for="property_advantage">  غرف النوم </label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group form-md-line-input form-md-floating-label">
                            <input type="number" class="form-control" rows="4" id="property_advantage" name="property_advantage">
                            <label for="property_advantage"> الغرف</label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group form-md-line-input form-md-floating-label">
                            <input type="text" class="form-control" rows="4" id="property_advantage" name="property_advantage">
                            <label for="property_advantage">  دورات المياه  </label>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="form-group form-md-line-input form-md-floating-label">
                            <textarea class="form-control" rows="4" id="property_advantage" name="property_advantage"></textarea>
                            <label for="property_advantage"> ملاحظات</label>
                        </div>
                    </div>

                    <h1 class="page-title">بيانات البيع  </h1>


                    <div class="col-md-6">
                        <div class="form-group form-md-line-input form-md-floating-label">
                            <input type="number" class="form-control" rows="4" id="property_advantage" name="property_advantage">
                            <label for="property_advantage">  السعر   </label>
                        </div>


                        <label class="mdl-switch mdl-js-switch mdl-js-ripple-effect" for="switch-1">
                            <input type="checkbox" id="switch-1" class="mdl-switch__input" checked>
                            <span class="mdl-switch__label">  قابل للتقسيط</span>
                        </label>
                    </div>

                    <div class="col-md-6">  </div>


                    <div class="row">

                    </div>
                    <h1 class="page-title"> موقع الخريطة  </h1>


                    <div class="col-md-6">
                        <div class="form-group form-md-line-input form-md-floating-label">
                            <input type="text" class="form-control" rows="4" id="property_advantage" name="property_advantage">
                            <label for="property_advantage">  المنطقة   </label>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group form-md-line-input form-md-floating-label">
                            <input type="text" class="form-control" rows="4" id="property_advantage" name="property_advantage">
                            <label for="property_advantage">  المدينة   </label>
                        </div>
                    </div>
                    <div class="col-md-6">

                        <div class="form-group form-md-line-input form-md-floating-label">
                            <input type="text" class="form-control" rows="4" id="property_advantage" name="property_advantage">
                            <label for="property_advantage">  الحي   </label>
                        </div>
                    </div>
                    <div class="col-md-6">

                        <div class="form-group form-md-line-input form-md-floating-label">
                            <input type="text" class="form-control" rows="4" id="property_advantage" name="property_advantage">
                            <label for="property_advantage">  اسم الشارع   </label>
                        </div>
                    </div>
                    <div class="col-md-6">

                        <div class="form-group form-md-line-input form-md-floating-label">
                            <input type="text" class="form-control" rows="4" id="property_advantage" name="property_advantage">
                            <label for="property_advantage">  العنوان البريدي   </label>
                        </div>
                    </div>

                </div>



                <h1 class="page-title"> مميزات العرض   </h1>

                <div class="col-md-12">
                    <div class="form-group form-md-line-input form-md-floating-label">
                        <textarea class="form-control" rows="4" id="property_advantage" name="property_advantage"></textarea>
                        <label for="property_advantage"> المميزات</label>
                    </div>
                </div>






                <input type="submit" class="btn  btn-primary" value=" حفظ ">

                <input type="submit" class="btn   btn-danger" value=" الغاء الامر">


                <br /><br /><br /><br />
            </div><!--End Row -->
            </div>
           
          </div>

        </div>
      </div>
    </div>

    
@endsection


