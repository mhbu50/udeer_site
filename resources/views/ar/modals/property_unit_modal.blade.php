 <section>
 <!-- Modal -->
    <div class="modal fade c-ud-modal" id="Property_unitModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
      <div class="modal-dialog" role="document">
        <div class="modal-content" >
             <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>

          </div>

          <div class="modal-body" >
            <form id="ajax-form" class="ajax-form" c-url="/property_unit/create_ajax" target="#property_unit">
                            <input type='hidden' name='_token' class="token" value="{!! csrf_token() !!}">
                              <div class="form-column col-sm-6">

                              <div class="form-group">
                                  <label for="property">العقار</label>
                                  <input type="text" class="form-control" id="property" placeholder="" name='property'>
  
                                
                              </div>
                              <div class="form-group">
                                  <label for="unit_number">رقم الوحدة</label>
                                  <input type="text" class="form-control" id="unit_number" placeholder="" name='unit_number'>
                              </div>

                              <div class="form-group">
                                <label for="unit_type">نوع الوحدة</label>
                                <select id="unit_type" class="form-control" name='unit_type'>
                                  <option value='apartment'>شقة</option>
                                  <option value='room'>غرفة</option>
                                  <option value='villa'>فيلا </option>
                                  <option value='house'>بيت</option>
                                </select>
                              </div>

                            </div>
                            <div class='form-column col-sm-6'>

                              <div class="form-group">
                                  <label for="annual_rent_amount">سعر تاجير السنوي</label>
                                  <div class='raw'>
                                    <div class='col-md-8'>
                                      <input type="number" class="form-control" id="annual_rent_amount" placeholder="" name='annual_rent_amount'>
                                    </div>
                                    <div>
                                      <div class='col-md-4'>
                                        <select id="rent_currency" class="form-control" name='rent_currency' placeholder="العملة" >
                                          <option >SAR</option>
                                          <option >USD</option>
                                        </select>
                                    </div>
                                    </div>
                                  </div>
                                  
                              </div>
                               <div class="form-group">
                                  <label for="insurance_amount">مبلغ التامين</label>
                                  <input type="text" class="form-control" id="insurance_amount" placeholder="" name='insurance_amount'>
                              </div>
                              <div class="form-group">
                                <label for="commission_type">العمولة</label>
                                <select id="commission_type" class="form-control" name='commission_type'>
                                  <option value='percentage'>نسبة</option>
                                  <option value='cash'>كاش</option>
                                </select>
                              </div>
                              <div class="form-group">
                                  <label for="commission_amount">قيمة العمولة</label>
                                  <input type="text" class="form-control" id="commission_amount" placeholder="" name='commission_amount'>
                              </div>
                            </div>
                            <p> &nbsp;<br>&nbsp;</p>
                            <div class='form-column col-sm-6'>
                              <div class="form-group">
                                <label for="unit_description">وصف الوحدة</label>
                                <select id="commission_type" class="form-control" name='unit_description'>
                                  <option value=''></option>
                                  <option value='For families'>للعوائل</option>
                                  <option value='For singles'>للعزاب</option>
                                  <option value='For both'>عوائل و عزاب</option>
                                  <option value='Commercial'>تجاري</option>
                                </select>
                              </div>
                              <div class="form-group">
                                  <label for="unit_space">المساحة</label>
                                  <input type="text" class="form-control" id="unit_space" placeholder="" name='unit_space'>
                              </div>

                              <div class="form-group">
                                <label for="finishing_status">نوع التجهيز</label>
                                <option value=''></option>
                                <select id="finishing_status" class="form-control" name='finishing_status'>
                                  <option value='Standard'>عادي</option>
                                  <option value='Air conditioned'>مكيف</option>
                                  <option value='Furnished and air conditioned'>موثث و مكيف</option>
                                </select>
                              </div>
                            </div>

                            <div class='form-column col-sm-6'>
                              
                              <div class="form-group">
                                <label for="room_slot">الغرفة\الفتحات</label>
                                <select id="room_slot" class="form-control" name='room_slot'>
                                   <option> </option>
                                   <option>1</option>
                                  <option>2</option>
                                </select>
                              </div>

                              <div class="form-group">
                                <label for="number_of_bathrooms">دورات مياه</label>
                                <select id="number_of_bathrooms" class="form-control" name='number_of_bathrooms' required>
                                  <option>1</option>
                                  <option>2</option>
                                </select>
                              </div>  

                              <div class="form-group">
                                    <label for="unit_activity">نشاط الوحدة</label>
                                    
                                    <select class="form-control" id="unit_activity" placeholder="" name='unit_activity'>
                                      <option value="commercial">تجاري</option>
                                      <option value="residential">سكني</option>
                                    </select>
                              </div>
                              <div class="form-group">
                                  <label for="water_meter_number">رقم عداد المياه</label>
                                  <input type="text" class="form-control" id="water_meter_number" placeholder="" name='water_meter_number' >
                              </div>

                              <div class="form-group">
                                  <label for="electricity_meter_number">رقم عداد الكهرباء</label>
                                  <input type="text" class="form-control" id="electricity_meter_number" placeholder="" name='electricity_meter_number'>
                              </div>

                              <div class="form-group">
                                      <label for="number_of_copies">عدد النسخ</label>
                                      <input type="number" class="form-control" id="number_of_copies" placeholder="" name="number_of_copies">
                                  </div>

                            </div>
                            <div class='modal-msg'></div>
                            <a href="#" class="btn btn-default" id="property_btn" onclick="send_ajax(this)">ارسال</a>
                          </form>
                        </div>

                        <div class="modal-footer">
                          
                        </div>
                        


                      </div>
                    </div>
                  </div>
</section>                  