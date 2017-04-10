<div class="modal fade bs-modal-lg c-ud-modal"  tabindex="-1" id="File_type_Modal" role="dialog"aria-labelledby="gridSystemModalLabel" >
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                <h4 class="modal-title">اضافة مالك</h4>
            </div>
            <div class="modal-body"> 
                <div class="form-body">
                    <form  class="ajax-form" id="ajax-form" c-url="/file_type/create_ajax" target="#file_type">
                        <input type='hidden' name='_token' value="{!! csrf_token() !!}">

                        <div class="col-md-6 col-md-offset-3">
                          <div class="form-group form-md-line-input form-md-floating-label">
                            <input type="text" class="form-control" id="type_name" placeholder="" name="type_name" >
                            <label for="property unit">اسم النوع الملف</label>
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

