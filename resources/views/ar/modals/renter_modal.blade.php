 <section>
 <!-- Modal -->
    <div class="modal fade c-ud-modal" id="Renter_Modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
      <div class="modal-dialog" role="document">
        <div class="modal-content" >
             <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>

          </div>

          <div class="modal-body" >
            <form id="ajax-form" class="ajax-form" c-url="/renter/create_ajax" target="#renter">
                            <input type='hidden' name='_token' class="token" value="{!! csrf_token() !!}">
                                 <div class='raw'>
                                  <div class='col-md-6'>
                                      <div class="form-group">
                                          <label for="customer_name">اسم الكامل</label>
                                          <input type="text" class="form-control" id="customer_name" placeholder="" name="customer_name">
                                      </div>
                                  </div>
                                  <div class='col-md-6'>
                                      <div class="form-group">
                                          <label for="id_number">رقم الهوية</label>
                                          <input type="text" class="form-control" id="id_number" placeholder="" name="id_number">
                                      </div>
                                  </div>
                              </div>

                              <div class='raw'>
                                  <div class='col-md-6'>
                                      <div class="form-group">
                                          <label for="mobile_number">رقم الجوال</label>
                                          <input type="text" class="form-control" id="mobile_number" placeholder="" name="mobile_number">
                                      </div>
                                  </div>
                                  <div class='col-md-6'>
                                      <div class="form-group">
                                          <label for="email">البريد الالكتروني</label>
                                          <input type="email" class="form-control" id="email" placeholder="" name="email">
                                      </div>
                                  </div>
                              </div>

                              <div class='raw'>
                                  <div class='col-md-6'>
                                      <div class="form-group">
                                          <label for="bank">اسم البنك</label>
                                          <select id="bank" class="form-control" name='bank'>
                                              <option value="alriyadh">الرياض</option>
                                              <option value="alarabi">العربي</option>
                                              <option value="alahli">الاهلى</option>
                                          </select>
                                      </div>
                                  </div>
                                  <div class='col-md-6'>
                                      <div class="form-group">
                                          <label for="bank_account_number">رقم الحساب</label>
                                          <input type="text" class="form-control" id="bank_account_number" placeholder="" name="bank_account_number">
                                      </div>
                                  </div>
                              </div>

                              <div class='raw'>
                                  <div class='col-md-6'>
                                      <div class="form-group">
                                          <label for="telephone_number">رقم الهاتف</label>
                                          <input type="text" class="form-control" id="telephone_number" placeholder="" name="telephone_number">
                                      </div>
                                  </div>
                                  <div class='col-md-6'>
                                      <div class="form-group">
                                          <label for="fax">رقم الفاكس</label>
                                          <input type="text" class="form-control" id="fax" placeholder="" name="fax">
                                      </div>
                                  </div>
                              </div>
                              <div class='raw'>
                                  <div class='col-md-6'>
                                      <div class="form-group">
                                          <label for="territory">الدولة</label>
                                          <select type="text" class="form-control" id="territory" placeholder="" name="territory">
                                              <option value="Saudi Arabia">المملكة العربية السعودية</option>
                                             
                                          </select>
                                      </div>
                                  </div>
                                  <div class='col-md-6'>
                                      <div class="form-group">
                                          <label for="customer_type">نوع العميل</label>
                                          <select class="form-control" id="customer_type" placeholder="" name="customer_type">
                                              <option value="Individual">فرد</option>
                                              <option value="Company">شركة</option>
                                          </select>
                                      </div>
                                  </div>
                              </div>
                              <div class='raw'>
                                  <div class='col-md-12'>
                                      <div class="form-group">
                                          <label for="address">العنوان</label>
                                          <textarea name="address" class="form-control" id="address"></textarea>
                                          
                                      </div>
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