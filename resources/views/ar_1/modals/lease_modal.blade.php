 <section>
 <!-- Modal -->
    <div class="modal fade c-ud-modal" id="Lease_Modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
      <div class="modal-dialog" role="document">
        <div class="modal-content" >
             <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              <h3>اضافة عقد ايجار</h3>
            </div>

          <div class="modal-body" >
            <form id="ajax-form" class="ajax-form" c-url="/lease/create_ajax" target="#lease">
              <input type='hidden' name='_token' value="{!! csrf_token() !!}">   
              <div class="over_au">
                <div class="form-column col-sm-6">
                    <div class="form-group">
                        <label for="date">تاريخ كتابة العقد</label>
                        <input type="date" class="form-control" id="date" placeholder="" name="date">
                    </div>
                    <div class="form-group">
                        <label for="renter">المستاجر</label>
                        <input type="text" class="form-control" id="renter" placeholder="" name="renter">
                    </div>
                   
                    <div class="form-group">
                        <label for="lease_writing_date">تاربخ امضاء العقد</label>
                        <input type="date" class="form-control" id="lease_writing_date" placeholder="" name="lease_writing_date">
                    </div>
                    <div class="form-group">
                        <label for="expiry_date">تاربخ انتهاء العقد</label>
                        <input type="date" class="form-control" id="expiry_date" placeholder="" name="expiry_date">
                    </div>
                </div>
                <div class="form-column col-sm-6">
                    <div class="form-group">
                        <label for="lease_duration">مدة العقد</label>
                        <input type="text" class="form-control" id="lease_duration" placeholder="" name="duration">
                    </div>
                    <div class="form-group">
                        <label for="lease_starting_date">تاربخ بدء الايجار</label>
                        <input type="date" class="form-control" id="lease_starting_date" placeholder="" name="lease_starting_date">
                    </div>
                    <div class="form-group">
                        <label for="property">اسم العقار</label>
                        <div class="">
                            <input type="text" class="form-control" id="property" placeholder="" name="property">
                            
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="property unit">وحدة العقار</label>
                        <div class="">
                            <input type="text" class="form-control" id="property_unit" placeholder="" name="property_unit">
                            
                        </div>
                    </div>
                </div>
              </div>  
              <div class="raw">
                  <div class="col-md-12">
                      <div class='modal-msg'></div>
                  </div>
              </div>    
              <a href="#" class="btn btn-default" id="property_btn" onclick="send_ajax(this)">حفظ</a>
            </form>
          </div>
          <div class="modal-footer">
            
          </div>
        </div>
      </div>
    </div>
</section>                  