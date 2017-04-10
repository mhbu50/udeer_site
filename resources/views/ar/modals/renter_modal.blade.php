

<div class="modal fade bs-modal-lg c-ud-modal"  tabindex="-1" id="Renter_Modal" role="dialog"aria-labelledby="gridSystemModalLabel" >
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                <h4 class="modal-title">اضافة مستاجر</h4>
            </div>
            <div class="modal-body"> 
                <div class="form-body">
                    <form  class="ajax-form" id="ajax-form" c-url="/renter/create_ajax" target="#renter">
                        <input type='hidden' name='_token' value="{!! csrf_token() !!}">
                        <div class='col-md-6'>
                            <div class="form-group form-md-line-input form-md-floating-label">
                                
                                <input type="text" class="form-control" id="customer_name" placeholder="" name="customer_name">
                                <label for="customer_name">اسم الكامل</label>
                            </div>
                        </div>
                        <div class='col-md-6'>
                            <div class="form-group form-md-line-input form-md-floating-label">
                                
                                <input type="text" class="form-control" id="id_number" placeholder="" name="id_number">
                                <label for="id_number">رقم الهوية</label>
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
                                
                                <input type="email" class="form-control" id="email" placeholder="" name="email">
                                <label for="email">البريد الالكتروني</label>
                            </div>
                        </div>
                        <div class='col-md-6'>
                            <div class="form-group form-md-line-input form-md-floating-label">
                                
                                <select id="bank" class="form-control" name='bank'>
                                    <option value="alriyadh">الرياض</option>
                                    <option value="alarabi">العربي</option>
                                    <option value="alahli">الاهلى</option>
                                </select>
                                <label for="bank">اسم البنك</label>
                            </div>
                        </div>
                        <div class='col-md-6'>
                            <div class="form-group form-md-line-input form-md-floating-label">
                                
                                <input type="text" class="form-control" id="bank_account_number" placeholder="" name="bank_account_number">
                                <label for="bank_account_number">رقم الحساب</label>
                            </div>
                        </div>
                        <div class='col-md-6'>
                            <div class="form-group form-md-line-input form-md-floating-label">
                                
                                <input type="text" class="form-control" id="telephone_number" placeholder="" name="telephone_number">
                                <label for="telephone_number">رقم الهاتف</label>
                            </div>
                        </div>
                        <div class='col-md-6'>
                            <div class="form-group form-md-line-input form-md-floating-label">
                                
                                <input type="text" class="form-control" id="fax" placeholder="" name="fax">
                                <label for="fax">رقم الفاكس</label>
                            </div>
                        </div>
                        <div class='col-md-6'>
                            <div class="form-group form-md-line-input form-md-floating-label">
                                
                                <select type="text" class="form-control" id="territory" placeholder="" name="territory">
                                    <option value="Saudi Arabia">المملكة العربية السعودية</option>
                                </select>
                                <label for="territory">الدولة</label>
                            </div>
                        </div>
                        <div class='col-md-6'>
                            <div class="form-group form-md-line-input form-md-floating-label">
                                
                                <select class="form-control" id="customer_type" placeholder="" name="customer_type">
                                    <option value="Individual">فرد</option>
                                    <option value="Company">شركة</option>
                                </select>
                                <label for="customer_type">نوع العميل</label>
                            </div>
                        </div>
                        <div class='col-md-12'>
                            <div class="form-group form-md-line-input form-md-floating-label">
                                
                                <textarea name="address" class="form-control" id="address"></textarea>
                                <label for="address">العنوان</label>
                                
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


