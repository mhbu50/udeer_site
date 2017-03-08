<div class="modal fade bs-modal-lg c-ud-modal"  tabindex="-1" id="SupplierModal" role="dialog"aria-labelledby="gridSystemModalLabel" >
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                <h4 class="modal-title">اضافة مالك</h4>
            </div>
            <div class="modal-body"> 
                <div class="form-body">
                    <form  class="ajax-form" id="ajax-form" c-url="/supplier/create_ajax" target="#supplier">
                        <input type='hidden' name='_token' value="{!! csrf_token() !!}">
                        <div class='col-md-6'>
                            <div class="form-group form-md-line-input form-md-floating-label">
                                <input type="text" class="form-control" id="supplier_name" placeholder="" name="supplier_name">
                                <label for="supplier_name">اسم المزود الخدمة</label>
                            </div>
                        </div>
                        <div class='col-md-6'>
                            <div class="form-group form-md-line-input form-md-floating-label">
                                <input type="text" class="form-control" id="national_id" placeholder="" name="national_id">
                                <label for="national_id">رقم الهوية الوطنية</label>
                            </div>
                        </div>


                        <div class='col-md-6'>
                            <div class="form-group form-md-line-input form-md-floating-label">
                                <input type="text" class="form-control" id="mobile_number" placeholder="" name="mobile_number">
                                <label for="mobile_number">رقم الجوال</label>
                            </div>
                        </div>
                        <div class='col-md-6'>
                            <div class="form-group form-md-line-input form-md-floating-label">
                                <input type="text" class="form-control" id="email" placeholder="" name="email">
                                <label for="email">البريد الالكتروني</label>
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

