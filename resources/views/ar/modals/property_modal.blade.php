


<div class="modal fade bs-modal-lg c-ud-modal"  tabindex="-1" id="PropertyModal" role="dialog"aria-labelledby="gridSystemModalLabel" >
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                <h4 class="modal-title">اضافة مالك</h4>
            </div>
            <div class="modal-body"> 
                <div class="form-body">
                    <form  class="ajax-form" id="ajax-form" c-url="/property/create_ajax" target="#property">
                        <input type='hidden' name='_token' value="{!! csrf_token() !!}">

                        <div class="col-md-6">
                          <div class="form-group form-md-line-input form-md-floating-label">
                              
                              <input type="text" class="form-control" id="" name="property_name" placeholder="" >
                              <label for="">اسم العقار</label>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group form-md-line-input form-md-floating-label">
                            
                              <div class="">
                                <input type="text" class="form-control" id="owner_name" placeholder="" name="owner_name" >
                                <label for="exampleInputEmail1">اسم المالك</label>
                              </div>
                              
                          </div>  
                        </div>
                        <div class="col-md-6">
                          <div class="form-group form-md-line-input form-md-floating-label">
                            
                            <select id="country" class="form-control" name='country'>
                              <option value="">  </option>
                              <option value="saudi arabia">سعودية</option>
                              <option value="bahrain">بحرين</option>
                            </select>
                            <label for="country">الدولة</label>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group form-md-line-input form-md-floating-label">
                            
                            <select class="form-control" id="city" placeholder="" name="city">
                              <option value="">  </option>
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
                        <div class="col-md-12">
                          <div id="mapCanvas"></div>
                            <input type="text" id="longitude" name="longitude" hidden>
                            <input type="text" id="latitude" name="latitude" hidden>
                        </div>
                        
                    </form>
                </div>    
            </div>
            <div class="modal-footer">

                
                <div class="col-md-12 ">
                    <div class="modal-msg"></div>
                    <button type="button" class="btn dark btn-outline" data-dismiss="modal">الغاء</button>
                    <button type="button" class="btn green" onclick="save_modal(this)">حفظ</button>
                </div>
                
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>









