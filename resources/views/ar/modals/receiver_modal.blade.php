 <section>
 <!-- Modal -->
    <div class="modal fade c-ud-modal" id="Receiver_Modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
      <div class="modal-dialog" role="document">
        <div class="modal-content" >
             <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>

          </div>

          <div class="modal-body" >
            <form id="ajax-form" class="ajax-form" c-url="/receiver/create_ajax" target="#receiver">
                            <input type='hidden' name='_token' class="token" value="{!! csrf_token() !!}">
                            <div class='raw'>
                                <div class='col-md-6'>
                                    <div class="form-group">
                                        <label for="employee_name">اسم الكامل</label>
                                        <input type="text" class="form-control" id="employee_name" placeholder="" name="employee_name">
                                    </div>
                                </div>
                                <div class='col-md-6'>
                                    <div class="form-group">
                                        <label for="company">الشركة</label>
                                        <input type="text" class="form-control" id="company" placeholder="" name="company">
                                    </div>
                                </div>
                            </div>

                            
                            <div class='raw'>
                               <div class='col-md-6'>
                                    <div class="form-group">
                                        <label for="date_of_joining">تاريخ الالتحاق</label>
                                        <input type="date" class="form-control" id="date_of_joining" placeholder="" name="date_of_joining">
                                    </div>
                                </div>
                                <div class='col-md-6'>
                                    <div class="form-group">
                                        <label for="date_of_birth">تاريخ الولادة</label>
                                        <input type="date" class="form-control" id="date_of_birth" placeholder="" name="date_of_birth">
                                    </div>
                                </div>
                            </div>
                             <div class='raw'>
                               <div class='col-md-6'>
                                    <div class="form-group">
                                        <label for="employee_number">رقم الوظيفي</label>
                                        <input type="text" class="form-control" id="employee_number" placeholder="" name="employee_number">
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