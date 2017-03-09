<form method='post' action="{{$action}}" enctype="multipart/form-data">
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
            <input type="number" class="form-control" id="id_number" placeholder="" name="id_number">
            <label for="id_number">رقم الهویة</label>
        </div>
    </div>

    <div class="col-md-6">
        <div class="form-group form-md-line-input form-md-floating-label">
            <input type="text" class="form-control" id="mobile_number" placeholder="" name="mobile_number">
            <label for="">رقم الجوال</label>
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group form-md-line-input form-md-floating-label">
            <input type="email" class="form-control" id="email" placeholder="" name="email">
            <label for="id_number">البريد الالكتروني</label>
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group form-md-line-input form-md-floating-label">
            <select id="bank" class="form-control" name='bank'>
                <option value="">  </option>
                <option value="enma_bank">الانماء</option>
                <option value="ahli_bank">الاهلي</option>
            </select>
            <label for="">بنك</label>
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group form-md-line-input form-md-floating-label">
            <input type="text" class="form-control" id="bank_acount" placeholder="" name="bank_acount">
            <label for="bank_acount">رقم الحساب </label>
        </div>
    </div>

    <div class="col-md-6">
        <div class="form-group form-md-line-input form-md-floating-label">
            <input type="text" class="form-control" id="telephone_number" placeholder="" name="telephone_number">
            <label for="telephone_number">رقم الهاتف</label>
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group form-md-line-input form-md-floating-label">
            <input type="text" class="form-control" id="fax" placeholder="" name="fax">
            <label for="">رقم الفاكس</label>
        </div>
    </div>    

    <div class="col-md-6">
        <div class="form-group form-md-line-input form-md-floating-label">
            <select id="nationality" class="form-control" name='nationality'>
                <option value="">  </option>
                <option value="saudi">سعودي</option>
                <option value="bahrainy">بحريني</option>
            </select>
            <label for="">الجنسية</label>
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group form-md-line-input form-md-floating-label">
            <select class="form-control" id="id_type" placeholder="" name="id_type">
                <option value="">  </option>
                <option value="iqama">اقامة</option>
                <option value="id_card">بطافة الهوية</option>
            </select>
            <label for="id_type">نوع الهوية</label>
        </div>
    </div>

    <div class="col-md-6">
        <div class="form-group form-md-line-input form-md-floating-label">
            <select id="country" class="form-control" name='country'>
                <option   value="">  </option>
                <option value="saudi arabia">سعودية</option>
                <option value="bahrain">بحرين</option>
            </select>
            <label for="country">الدولة</label>
        </div>
    </div>    
    <div class="col-md-6">    
        <div class="form-group form-md-line-input form-md-floating-label">
            
            <select class="form-control" id="city" placeholder="" name="city">
                <option   value="">  </option>
                <option value="دمام">دمام</option>
                <option value="رياض">رياض</option>
            </select>
            <label for="city">المدينة</label>
        </div>
    </div>    
    <div class="col-md-6">
        <div class="form-group form-md-line-input form-md-floating-label">
            <input type="text" class="form-control" id="block" placeholder="" name="district">
            <label for="">الحي</label>
        </div>
    </div>    
    <div class="col-md-6">
        <div class="form-group form-md-line-input form-md-floating-label">
            <input type="text" class="form-control" id="fax" placeholder="" name="street">
            <label for="">الشارع</label>
        </div>
    </div>
    <div class="col-md-12">
        <div class="form-group form-md-line-input form-md-floating-label">
            <input type="text" id="longitude" name="longitude" hidden>
            <input type="text" id="latitude" name="latitude" hidden>
            <div id="mapCanvas" class="form-group"></div>
        </div>
    </div>

    <div class="col-md-12">
        <div class="form-group form-md-line-input form-md-floating-label">
            <textarea name="address" class="form-control"></textarea>
            <label for="address">العنوان</label>
        </div>
    </div>
    
    <div class="form-actions noborder">
      <div class="col-md-12">
        <input type="submit" class="btn blue" value="حفظ"></button>
        <button type="button" class="btn default">الغاء</button>
      </div>
    </div>
</form>             
