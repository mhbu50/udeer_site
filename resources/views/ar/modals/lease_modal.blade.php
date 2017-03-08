<div class="modal fade bs-modal-lg c-ud-modal"  tabindex="-1" id="LeaseModal" role="dialog"aria-labelledby="gridSystemModalLabel" >
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                <h4 class="modal-title">اضافة مالك</h4>
            </div>
            <div class="modal-body"> 
                <div class="form-body">
                    <form  class="ajax-form" id="ajax-form" c-url="/lease/create_ajax" target="#lease">
                        <input type='hidden' name='_token' value="{!! csrf_token() !!}">


                        <div class="col-md-6">
                          <div class="form-group form-md-line-input form-md-floating-label">
                            <div class="input-icon right">
                                  <input class="form-control form-control-inline date-picker" size="16" type="text" value="" id="date" placeholder="" name="date">
                                  <i class="fa fa-calendar"></i>  
                                  <label for="date">تاريخ كتابة العقد</label>
                                      
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group form-md-line-input form-md-floating-label">
                              
                              <input type="text" class="form-control" id="renter" placeholder="" name="renter">
                              <label for="renter">المستاجر</label>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group form-md-line-input form-md-floating-label">
                              <div class="input-icon right">
                                <input class="form-control form-control-inline date-picker" size="16" type="text" value="" id="lease_writing_date" placeholder="" name="lease_writing_date">
                                <i class="fa fa-calendar"></i>  
                                <label for="lease_writing_date">تاربخ امضاء العقد</label>         
                              </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group form-md-line-input form-md-floating-label">
                                <div class="input-icon right">
                                    <input class="form-control form-control-inline date-picker" size="16" type="text" value="" id="expiry_date" placeholder="" name="expiry_date">
                                    <i class="fa fa-calendar"></i>  
                                    <label for="expiry_date">تاربخ انتهاء العقد</label>       
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group form-md-line-input form-md-floating-label">
                            <input type="text" class="form-control" id="lease_duration" placeholder="" name="duration">
                            <label for="lease_duration">مدة العقد</label>
                          </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group form-md-line-input form-md-floating-label">
                                <div class="input-icon right">
                                      <input class="form-control form-control-inline date-picker" size="16" type="text" value="" id="lease_starting_date" placeholder="" name="lease_starting_date">
                                      <i class="fa fa-calendar"></i>  
                                      <label for="lease_starting_date">تاربخ بدء الايجار</label>  
                                </div>
                            </div>
                        </div> 
                        <div class="col-md-6">
                          <div class="form-group form-md-line-input form-md-floating-label">
                            
                            <input type="text" class="form-control" id="property" placeholder="" name="property">
                            <label for="property">اسم العقار</label>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group form-md-line-input form-md-floating-label">
                            <input type="text" class="form-control" id="property_unit" placeholder="" name="property_unit">
                            <label for="property unit">وحدة العقار</label>
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

