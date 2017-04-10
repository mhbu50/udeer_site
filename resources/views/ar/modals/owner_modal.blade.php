
<div class="modal fade bs-modal-lg c-ud-modal"  tabindex="-1" id="OwnerModal" role="dialog"aria-labelledby="gridSystemModalLabel" >
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                <h4 class="modal-title">اضافة مالك</h4>
            </div>
            <div class="modal-body"> 
                <div class="form-body">
                    <form  class="ajax-form" id="ajax-form" c-url="/property_owner/create_ajax" target="#property_owner">
                        <input type='hidden' name='_token' value="{!! csrf_token() !!}">
                        <div class="col-md-6">
                            <div class="form-group form-md-line-input form-md-floating-label">
                                
                                <input type="text" class="form-control" id="first_name" placeholder="" name="first_name">
                                <label for="">الاسم</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group form-md-line-input form-md-floating-label">
                                
                                <input type="text" class="form-control" id="second_name" placeholder="" name="second_name">
                                <label for="">اسم الأب</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group form-md-line-input form-md-floating-label">
                                
                                <input type="text" class="form-control" id="third_name" placeholder="" name="third_name">
                                <label for="">اسم الجد</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group form-md-line-input form-md-floating-label">
                                
                                <input type="text" class="form-control" id="last_name" placeholder="" name="last_name">
                                <label for="">اسم العائلة</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group form-md-line-input form-md-floating-label">
                                <input type="text" class="form-control" id="id_number" placeholder="" name="id_number">
                                <label for="id_number">رقم الهویة</label>
                            </div>
                        </div>
                    
                    
                        <div class="col-md-6">
                            <div class="form-group form-md-line-input form-md-floating-label">
                                
                                <input type="text" class="form-control" id="mobile_number" placeholder="" name="mobile_number">
                                <label for="">رقم الجوال</label>
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


