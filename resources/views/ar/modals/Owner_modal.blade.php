<div class="modal fade c-ud-modal" tabindex="-1" role="dialog" id="OwnerModal" aria-labelledby="gridSystemModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      </div>
      <div class="modal-body">
        <form  class="ajax-form" id="ajax-form" c-url="/property_owner/create_ajax" target="#owner_name">
            <input type='hidden' name='_token' value="{!! csrf_token() !!}">   
            <div class="raw">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="">اسم المالك</label>
                        <input type="text" class="form-control" id="full_name" placeholder="" name="full_name">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="id_number">رقم الهویة</label>
                        <input type="text" class="form-control" id="id_number" placeholder="" name="id_number">
                    </div>
                </div>
            </div>
            <div class="raw">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="">رقم الجوال</label>
                        <input type="text" class="form-control" id="mobile_number" placeholder="" name="mobile_number">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="id_number">البريد الالكتروني</label>
                        <input type="email" class="form-control" id="email" placeholder="" name="email">
                    </div>
                </div>
            </div>
            <div class="raw">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="">بنك</label>
                        <select id="bank" class="form-control" name='bank'>
                            <option value="enma_bank">الانماء</option>
                            <option value="ahli_bank">الاهلي</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="bank_acount">رقم الحساب </label>
                        <input type="text" class="form-control" id="bank_acount" placeholder="" name="bank_acount">
                    </div>
                </div>
            </div>
            <div class="raw">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="telephone_number">رقم الهاتف</label>
                        <input type="text" class="form-control" id="telephone_number" placeholder="" name="id_number">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="">رقم الفاكس</label>
                        <input type="text" class="form-control" id="fax" placeholder="" name="fax">
                    </div>
                </div>    
            </div>
            <div class="raw">
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="address">العنوان</label>
                        <textarea name="address"class="form-control"></textarea>
                    </div>
                </div>
            </div>
            <div class="raw">
                <div class="col-md-12">
                    <div class='modal-msg'></div>
                </div>
            </div>
        
            
                <a href="#" class="btn btn-default" id="property_btn" onclick="send_ajax(this)">ارسال</a>
            
        
            </form>
      </div>
      <div class="modal-footer">
       
      </div>
      
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->