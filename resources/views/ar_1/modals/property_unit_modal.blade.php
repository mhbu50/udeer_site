 <section>
 <!-- Modal -->
    <div class="modal fade c-ud-modal" id="Property_unitModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
      <div class="modal-dialog" role="document">
        <div class="modal-content" >
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h3>اضافة وحدة</h3>

          </div>

          <div class="modal-body" >
            <form id="ajax-form" class="ajax-form" c-url="/property_unit/create_ajax" target="#property_unit">
              <input type='hidden' name='_token' class="token" value="{!! csrf_token() !!}">
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="property">العقار</label>
                    <input type="text" class="form-control" id="property" placeholder="" name='property'>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                        <label for="unit_number">رقم الوحدة</label>
                        <input type="text" class="form-control" id="unit_number" placeholder="" name='unit_number'>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="unit_type">نوع الوحدة</label>
                    <select id="unit_type" class="form-control" name='unit_type'>
                      <option disabled selected value> -- اختر -- </option>
                      <option value='apartment'>شقة</option>
                      <option value='room'>غرفة</option>
                      <option value='villa'>فيلا </option>
                      <option value='house'>بيت</option>
                    </select>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="annual_rent_amount">سعر تاجير السنوي</label>
                    <div class='raw pd-0-p'>
                      <div class='col-md-8'>
                        <input type="number" class="form-control" id="annual_rent_amount" placeholder="" name='annual_rent_amount' min="1">
                      </div>
                      <div class='col-md-4'>
                        <select id="rent_currency" class="form-control" name='rent_currency' placeholder="العملة" >
                          <option disabled selected value> -- اختر -- </option>
                          <option value="SAR">ريال سعودي</option>
                          <option value="USD">دلار امريكي</option>
                        </select>
                      </div>
                    </div>
                  </div>
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