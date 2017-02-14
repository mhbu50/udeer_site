<div class="modal fade c-ud-modal" tabindex="-1" role="dialog" id="OwnerModal" aria-labelledby="gridSystemModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h3>اضافة مالك</h3>
      </div>
      <div class="modal-body">
        <form  class="ajax-form" id="ajax-form" c-url="/property_owner/create_ajax" target="#owner_name">
            <input type='hidden' name='_token' value="{!! csrf_token() !!}"> 
            <div class="over_au">  
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">الاسم</label>
                            <input type="text" class="form-control" id="first_name" placeholder="" name="first_name">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">اسم الأب</label>
                            <input type="text" class="form-control" id="second_name" placeholder="" name="second_name">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">اسم الجد</label>
                            <input type="text" class="form-control" id="third_name" placeholder="" name="third_name">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">اسم العائلة</label>
                            <input type="text" class="form-control" id="last_name" placeholder="" name="last_name">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="id_number">رقم الهویة</label>
                            <input type="text" class="form-control" id="id_number" placeholder="" name="id_number">
                        </div>
                    </div>
                
                
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">رقم الجوال</label>
                            <input type="text" class="form-control" id="mobile_number" placeholder="" name="mobile_number">
                        </div>
                    </div>
                    
                
            </div>
            <a href="#" class="btn btn-default" id="property_btn" onclick="send_ajax(this)">حفظ</a>
        </form>
      </div>
      <div class="modal-footer">
       
      </div>
      
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->