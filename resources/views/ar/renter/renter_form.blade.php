<form method='post' action="{{$action}}" enctype="multipart/form-data">
    <input type='hidden' name='_token' value="{!! csrf_token() !!}">   
    <div class='raw'>
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
        <div class='col-md-6'>
            <div class="form-group form-md-line-input form-md-floating-label">
                <input type="number" class="form-control" id="id_number" placeholder="" name="id_number">
                <label for="id_number">رقم الهوية</label>
            </div>
        </div>

        <div class="col-md-6">
            <div class="form-group form-md-line-input form-md-floating-label">
              <div class="input-icon right">
                  <input class="form-control form-control-inline date-picker" size="16" type="text" id="id_expiry_date" placeholder="" name="id_expiry_date">
                  <i class="fa fa-calendar"></i>  
                  <label for="id_expiry_date">تاريخ انتهاء البطاقة</label>
              </div>
            </div>  
        </div>
        <div class='col-md-6'>
            <div class="form-group form-md-line-input form-md-floating-label">
                <input type="text" class="form-control" id="id_issuer" placeholder="" name="id_issuer">
                <label for="id_issuer">جهة الاصدار</label>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group form-md-line-input form-md-floating-label">
              <div class="input-icon right">
                  <input class="form-control form-control-inline date-picker" size="16" type="text" id="birth_date" placeholder="" name="birth_date">
                  <i class="fa fa-calendar"></i>  
                  <label for="birth_date">تاريخ الميلاد</label>
              </div>
            </div>  
        </div>
        <div class='col-md-6'>
            <div class="form-group form-md-line-input form-md-floating-label">
                <input type="text" class="form-control" id="birth_place" placeholder="" name="birth_place">
                <label for="birth_place">مكان الميلاد</label>
            </div>
        </div>
    </div>

    <div class='raw'>
        <div class='col-md-6'>
            <div class="form-group form-md-line-input form-md-floating-label">
                <input type="number" class="form-control" id="mobile_number" placeholder="" name="mobile_number">
                <label for="mobile_number">رقم الجوال</label>
            </div>
        </div>
        <div class='col-md-6'>
            <div class="form-group form-md-line-input form-md-floating-label">
                <input type="email" class="form-control" id="email" placeholder="" name="email">
                <label for="email">البريد الالكتروني</label>
            </div>
        </div>
    </div>

    <div class='raw'>
        <div class='col-md-6'>
            <div class="form-group form-md-line-input form-md-floating-label">
                <select id="bank" class="form-control" name='bank'>
                    <option value=""></option>
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
    </div>

    <div class='raw'>
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
    </div>
    <div class='raw'>
        <div class='col-md-6'>
            <div class="form-group form-md-line-input form-md-floating-label">
                <select type="text" class="form-control" id="territory" placeholder="" name="territory">
                    <option value=""></option>
                    <option value="Saudi Arabia">المملكة العربية السعودية</option>
                </select>
                <label for="territory">الدولة</label>
            </div>
        </div>
        <div class='col-md-6'>
            <div class="form-group form-md-line-input form-md-floating-label">
                <select class="form-control" id="customer_type" placeholder="" name="customer_type">
                    <option value=""></option>
                    <option value="Individual">فرد</option>
                    <option value="Company">شركة</option>
                </select>
                <label for="customer_type">نوع العميل</label>
            </div>
        </div>
    </div>
    <div class='raw'>
        <div class='col-md-12'>
            <div class="form-group form-md-line-input form-md-floating-label">
                <textarea name="address" class="form-control" id="address"></textarea>
                <label for="address">العنوان</label>
            </div>
        </div>
    </div>

    <div class="form-actions noborder">
      <div class="col-md-12">
        <input type="submit" class="btn blue" value="حفظ"></button>
        <button type="button" class="btn default">الغاء</button>
      </div>
    </div>

</form>    