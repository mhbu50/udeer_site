
<div class="modal fade bs-modal-lg c-ud-modal"  tabindex="-1" id="Property_unitModal" role="dialog"aria-labelledby="gridSystemModalLabel" >
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                <h4 class="modal-title">اضافة وحدة</h4>
            </div>
            <div class="modal-body"> 
                <div class="form-body">
                    <form  class="ajax-form" id="ajax-form" c-url="/property_unit/create_ajax" target="#property_unit_c1">
                        <input type='hidden' name='_token' value="{!! csrf_token() !!}">
                        <div class="col-md-6">
                          <div class="form-group form-md-line-input form-md-floating-label">
                            
                            <input type="text" class="form-control typeahead" id="property" placeholder="" name='property' value="{{$property_name or '' }}">
                            <label for="property">العقار</label>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group form-md-line-input form-md-floating-label">
                                
                                <input type="text" class="form-control" id="unit_number" placeholder="" name='unit_number'>
                                <label for="unit_number">رقم الوحدة</label>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group form-md-line-input form-md-floating-label">
                            
                            <select id="unit_type" class="form-control" name='unit_type'>
                              <option> </option>
                              <option value='apartment'>شقة</option>
                              <option value='room'>غرفة</option>
                              <option value='villa'>فيلا </option>
                              <option value='house'>بيت</option>
                            </select>
                            <label for="unit_type">نوع الوحدة</label>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group form-md-line-input form-md-floating-label">
                                
                                <input type="number" class="form-control" id="annual_rent_amount" placeholder="" name='annual_rent_amount' min="1">
                                <label for="annual_rent_amount">سعر تاجير السنوي</label>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group form-md-line-input form-md-floating-label">
                                
                                
                                <select id="rent_currency" class="form-control" name='rent_currency' placeholder="العملة" >
                                  <option> </option>
                                  <option value="SAR">ريال سعودي</option>
                                  <option value="USD">دلار امريكي</option>
                                </select>
                                <label for="annual_rent_amount">عملة</label>
                          </div>
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

