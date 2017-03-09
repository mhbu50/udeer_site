<form method='post' action="{{$action}}" enctype="multipart/form-data">
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

    <div class='col-md-6'>
        <div class="form-group form-md-line-input form-md-floating-label">
            <input type="text" class="form-control" id="bank_name" placeholder="" name="bank_name">
            <label for="bank_name">اسم البنك</label>
        </div>
    </div>
    <div class='col-md-6'>
        <div class="form-group form-md-line-input form-md-floating-label">
            <input type="text" class="form-control" id="bank_account" placeholder="" name="bank_account">
            <label for="email">رقم الحساب</label>
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
            <input type="text" class="form-control" id="fax_number" placeholder="" name="fax_number">
            <label for="fax_number">رقم الفاكس</label>
        </div>
    </div>

    <div class='col-md-6'>
        <div class="form-group form-md-line-input form-md-floating-label">
            <input type="text" class="form-control" id="address" placeholder="" name="address">
            <label for="address">العنوان</label>
        </div>
    </div>
    <div class='col-md-6'>
        <div class="form-group form-md-line-input form-md-floating-label">
            <input type="text" class="form-control" id="kafeel_name" placeholder="" name="kafeel_name">
            <label for="kafeel_name">اسم الكفيل</label>
        </div>
    </div>
    <div class='col-md-6' hidden>
        <div class="form-group form-md-line-input form-md-floating-label">
            <input type="text" class="form-control" id="supplier_type" placeholder="" name="supplier_type" value="Local">
            <label for="supplier_type">نوع الخدمة</label>
        </div>
    </div>
    <div class="form-actions noborder">
        <div class="col-md-12">
            <input type="submit" class="btn blue" value="حفظ"></button>
            <button type="button" class="btn default">الغاء</button>
        </div>
    </div>
</form>