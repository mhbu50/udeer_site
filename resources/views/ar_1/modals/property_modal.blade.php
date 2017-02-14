 <section>
 <!-- Modal -->
    <div class="modal fade c-ud-modal" id="PropertyModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
      <div class="modal-dialog" role="document">
        <div class="modal-content" >
             <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h3>اضافة عقار</h3>

          </div>

          <div class="modal-body" >
            <form id="ajax-form" class="ajax-form" c-url="/property/create_ajax" target="#property">
                            <input type='hidden' name='_token' class="token" value="{!! csrf_token() !!}">
                              
                            

        

                            <div class="col-md-6">
                              <div class="form-group">
                                  <label for="">اسم العقار</label>
                                  <input type="text" class="form-control" id="" name="property_name" placeholder="" >
                              </div>
                            </div>
                            <div class="col-md-6">
                              <div class="form-group">
                                <label for="exampleInputEmail1">اسم المالك</label>
                                  <div class="">
                                    <input type="text" class="form-control" id="owner_name" placeholder="" name="owner_name" >
                                  </div>
                              </div>  
                            </div>
                            <div class="col-md-6">
                              <div class="form-group">
                                <label for="country">الدولة</label>
                                <select id="country" class="form-control" name='country'>
                                  <option disabled selected value=""> -- اختر -- </option>
                                  <option value="saudi arabia">سعودية</option>
                                  <option value="bahrain">بحرين</option>
                                </select>
                              </div>
                            </div>
                            <div class="col-md-6">
                              <div class="form-group">
                                <label for="city">المدينة</label>
                                <select class="form-control" id="city" placeholder="" name="city">
                                  <option disabled selected value=""> -- اختر -- </option>
                                  <option value="دمام">دمام</option>
                                  <option value="رياض">رياض</option>
                                </select>
                              </div>
                            </div>


                            <div class="col-md-6">
                               <div class="form-group">
                                    <label for="">الحي</label>
                                    <input type="text" class="form-control" id="district" placeholder="" name="district">
                                </div>
                            </div>
                            <div class="col-md-6">
                              <div class="form-group">
                                  <label for="">الشارع</label>
                                  <input type="text" class="form-control" id="street" placeholder="" name="street">
                              </div>
                            </div>
                            <div class="col-md-12">
                              <div id="mapCanvas"></div>
                              <input type="text" id="longitude" name="longitude" hidden>
                              <input type="text" id="latitude" name="latitude" hidden>
                            </div>
                           

                                
                            <div class='modal-msg'></div>
                            <a href="#" class="btn btn-default" id="property_btn" onclick="send_ajax(this)">حفظ</a>
                          </form>
                        </div>

                        <div class="modal-footer">
                          
                        </div>
                        


                      </div>
                    </div>
                  </div>
</section>                  