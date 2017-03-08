
<div class="modal fade bs-modal-lg c-ud-modal"  tabindex="-1" id="Receiver_Modal" role="dialog"aria-labelledby="gridSystemModalLabel" >
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                <h4 class="modal-title">اضافة مالك</h4>
            </div>
            <div class="modal-body"> 
                <div class="form-body">
                    <form  class="ajax-form" id="ajax-form" c-url="/receiver/create_ajax" target="#receiver">
                        <input type='hidden' name='_token' value="{!! csrf_token() !!}">
                        <div class='col-md-6'>
                            <div class="form-group">
                                <input type="text" class="form-control" id="employee_name" placeholder="" name="employee_name">
                                <label for="employee_name">اسم الكامل</label>
                            </div>
                        </div>
                        <div class='col-md-6'>
                            <div class="form-group">
                                <input type="text" class="form-control" id="company" placeholder="" name="company">
                                <label for="company">الشركة</label>
                            </div>
                        </div>
                        <div class='col-md-6'>
                            <div class="form-group form-md-line-input form-md-floating-label">        
                                <div class="input-icon right">
                                    <input class="form-control form-control-inline date-picker" size="16" type="text" value="" id="date_of_joining" placeholder="" name="date_of_joining">
                                    <i class="fa fa-calendar"></i>  
                                    <label for="date_of_joining">تاريخ الالتحاق</label>
                                </div>
                            </div>
                        </div>
                        <div class='col-md-6'>
                            <div class="form-group form-md-line-input form-md-floating-label">
                                <div class="input-icon right">
                                    <input class="form-control form-control-inline date-picker" size="16" type="text" value="" id="date_of_birth" placeholder="" name="date_of_birth">
                                    <i class="fa fa-calendar"></i>  
                                    <label for="date_of_birth">تاريخ الولادة</label>   
                                </div>
                            </div>
                        </div>
                        <div class='col-md-6'>
                            <div class="form-group">
                                <input type="text" class="form-control" id="employee_number" placeholder="" name="employee_number">
                                <label for="employee_number">رقم الوظيفي</label>
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

