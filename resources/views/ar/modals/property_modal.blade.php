 <section>
 <!-- Modal -->
    <div class="modal fade c-ud-modal" id="PropertyModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
      <div class="modal-dialog" role="document">
        <div class="modal-content" >
             <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>

          </div>

          <div class="modal-body" >
            <form id="ajax-form" class="ajax-form" c-url="/property/create_ajax" target="#property">
                            <input type='hidden' name='_token' class="token" value="{!! csrf_token() !!}">
                            <div style='overflow: auto'>
                                <div class="raw">
                                    <h2>بيانات العقار<h2>
                                </div>
                            <div class="form-column col-sm-6">

                                
                               

                                <div class="form-group">
                                    <label for="">اسم العقار</label>
                                    <input type="text" class="form-control" id="" name="property_name" placeholder="" >
                                </div>

                                <div class="form-group">
                                  <label for="Property_type">نوع العقار</label>
                                  <select id="Property_type" class="form-control" name='property_type'>
                                    <option>house</option>
                                    <option>schema</option>
                                    <option>residential building</option>
                                  </select>
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputEmail1">سنة البناء</label>
                                    <input type="date" class="form-control" id="construction_date" name='construction_date' placeholder="">
                                </div>


                                
                                <!-- <div class="form-group">
                                    <label for="exampleInputEmail1">عدد وحدات العقاريى</label>
                                    <input type="text" class="form-control" id="number_of_property_units" name="number_of_property_units" placeholder="">
                                </div> -->

                                <div class="form-group">
                                  <label for="comment">تقييم</label>
                                  <textarea class="form-control" rows="5" id="evaluation" name='evaluation'></textarea>
                                </div>

                                
                            </div>
                            <div class="form-column col-sm-6">
                                <div class="raw">
                                    <div class='col-md-6'>
                                        <div class="form-group">
                                          <label for="country">العنوان</label>
                                          <input type="text" class="form-control" id="country" name='country' placeholder="الدولة">
                                        </div>
                                    </div>
                                    <div class='col-md-6'>
                                        <div class="form-group">
                                          <label for="city">&nbsp;</label>
                                          <input type="text" class="form-control" id="city" name='city' placeholder="المدينة">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                  <label for="address"></label>
                                  <textarea class="form-control" rows="5" id="address" name='address' placeholder="العنوان"></textarea>
                                </div>
                                <div id="mapCanvas"></div>
                                <div class="form-group">
                                  <label for="comment">مميزات العقار</label>
                                  <textarea class="form-control" rows="5" id="property_advantage" name="property_advantage"></textarea>
                                </div>

                            </div>

                            <div class="form-column col-sm-6">
                                <div class="raw">
                                    <h2>بياناتن المالك<h2>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">اسم المالك</label>
                                    <input type="text" class="form-control" id="owner_name" placeholder="" name="owner_name">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">رقم العقار</label>
                                    <input type="text" class="form-control" id="property_number" name="property_number" placeholder="">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">رقم الصك</label>
                                    <input type="text" class="form-control" id="instrument_number" name="instrument_number" placeholder="">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">تاريخ الصك</label>
                                    <input type="date" class="form-control" id="instrument_date" name="instrument_date" placeholder="">
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