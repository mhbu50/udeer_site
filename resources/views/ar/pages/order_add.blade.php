@section('lang','ar')
@section('module','property_management')
@section('page_title','property_index')
@extends('template')

@section('css_page')

@endsection
@section('js_page')
   
@endsection

@section('content')
    <h1 class="page-title"> ادارة الاملاك العقارية</h1>
    <div class="row">
      <div class="col-md-12">
        <div class="portlet light bordered ">
          <div class="portlet-title">
            <div class="caption font-red-sunglo">
                العقارات
            </div>
            
          </div>
          <div class="portlet-body form">
            <div class="row">
                <div class="col-md-12">
                    <div class="row">

                        <div class="col-md-6">
                            <div class="form-group form-md-line-input form-md-floating-label">
                                <select id="commission_type" class="form-control" name="commission_type">
                                    <option value="">  </option>
                                    <option value="percentage">بيع</option>
                                    <option value="cash">ايجار </option>
                                </select>
                                <label for="commission_type"> نوع الطلب   </label>
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
                                <input type="text" class="form-control" rows="4" id="property_advantage" name="property_advantage">
                                <label for="property_advantage"> غرف النوم من </label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group form-md-line-input form-md-floating-label">
                                <input type="text" class="form-control" rows="4" id="property_advantage" name="property_advantage">
                                <label for="property_advantage"> غرف النوم الي </label>
                            </div>
                        </div>
                       
                        <div class="col-md-6">
                            <div class="form-group form-md-line-input form-md-floating-label">
                                <input type="text" class="form-control" rows="4" id="property_advantage" name="property_advantage">
                                <label for="property_advantage"> غرف  من </label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group form-md-line-input form-md-floating-label">
                                <input type="text" class="form-control" rows="4" id="property_advantage" name="property_advantage">
                                <label for="property_advantage"> غرف  الي </label>
                            </div>
                        </div>
                        

                        <div class="col-md-6">
                            <div class="form-group form-md-line-input form-md-floating-label">
                                <input type="number" class="form-control" rows="4" id="property_advantage" name="property_advantage">
                                <label for="property_advantage"> المساحة من </label>
                            </div>
                        </div>
                        
                        
                         <div class="col-md-6">
                            <div class="form-group form-md-line-input form-md-floating-label">
                                <input type="number" class="form-control" rows="4" id="property_advantage" name="property_advantage">
                                <label for="property_advantage"> المساحة الي</label>
                            </div>
                        </div>
                         
                        <div class="col-md-6">
                            <div class="form-group form-md-line-input form-md-floating-label">
                                <input type="text" class="form-control" rows="4" id="property_advantage" name="property_advantage">
                                <label for="property_advantage">    دورات المياه من   </label>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group form-md-line-input form-md-floating-label">
                                <input type="text" class="form-control" rows="4" id="property_advantage" name="property_advantage">
                                <label for="property_advantage"> دورات المياه الي  </label>
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
                                <label for="property_advantage">  السعر من    </label>
                            </div> 
                        </div>

                        <div class="col-md-6">  
                            <div class="form-group form-md-line-input form-md-floating-label">
                                <input type="number" class="form-control" rows="4" id="property_advantage" name="property_advantage">
                                <label for="property_advantage">  السعر الي    </label>
                            </div>
                        </div>


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
             

            </div>
           
          </div>

        </div>
      </div>
    </div>

    
@endsection


