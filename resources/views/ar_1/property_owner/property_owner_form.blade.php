<form method='post' action="{{$action}}" enctype="multipart/form-data">
    <input type='hidden' name='_token' value="{!! csrf_token() !!}">   
    <div class="raw">
        <div class="col-md-6">
            <div class="form-group">
                <label for="">الاسم</label>
                <input type="text" class="form-control" id="first_name" placeholder="" name="first_name">
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="">اسم الأب</label>
                <input type="text" class="form-control" id="second_name" placeholder="" name="second_name">
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="">اسم الجد</label>
                <input type="text" class="form-control" id="third_name" placeholder="" name="third_name">
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="">اسم العائلة</label>
                <input type="text" class="form-control" id="last_name" placeholder="" name="last_name">
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="id_number">رقم الهویة</label>
                <input type="text" class="form-control" id="id_number" placeholder="" name="id_number">
            </div>
        </div>
    </div>
    <div class="raw">
        <div class="col-md-6">
            <div class="form-group">
                <label for="">رقم الجوال</label>
                <input type="text" class="form-control" id="mobile_number" placeholder="" name="mobile_number">
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="id_number">البريد الالكتروني</label>
                <input type="email" class="form-control" id="email" placeholder="" name="email">
            </div>
        </div>
    </div>
    <div class="raw">
        <div class="col-md-6">
            <div class="form-group">
                <label for="">بنك</label>
                <select id="bank" class="form-control" name='bank'>
                    <option disabled selected value=""> -- اختر -- </option>
                    <option value="enma_bank">الانماء</option>
                    <option value="ahli_bank">الاهلي</option>
                </select>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="bank_acount">رقم الحساب </label>
                <input type="text" class="form-control" id="bank_acount" placeholder="" name="bank_acount">
            </div>
        </div>
    </div>
    <div class="raw">
        <div class="col-md-6">
            <div class="form-group">
                <label for="telephone_number">رقم الهاتف</label>
                <input type="text" class="form-control" id="telephone_number" placeholder="" name="telephone_number">
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="">رقم الفاكس</label>
                <input type="text" class="form-control" id="fax" placeholder="" name="fax">
            </div>
        </div>    
    </div>

    <div class="raw">
        <div class="col-md-6">
            <div class="form-group">
                <label for="">الجنسية</label>
                <select id="nationality" class="form-control" name='nationality'>
                    <option disabled selected value=""> -- اختر -- </option>
                    <option value="saudi">سعودي</option>
                    <option value="bahrainy">بحريني</option>
                </select>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="id_type">نوع الهوية</label>
                <select class="form-control" id="id_type" placeholder="" name="id_type">
                    <option disabled selected value=""> -- اختر -- </option>
                    <option value="iqama">اقامة</option>
                    <option value="id_card">بطافة الهوية</option>
                </select>
            </div>
        </div>
    </div>

    <div class="raw">
        <div class="col-md-6">
            <div class="form-group">
                <label for="country">الدولة</label>
                <select id="country" class="form-control" name='country'>
                    <option disabled selected value=""> -- اختر -- </option>
                    <option value="saudi arabia">سعودية</option>
                    <option value="bahrain">بحرين</option>
                </select>
            </div>
            <div class="form-group">
                <label for="city">المدينة</label>
                <select class="form-control" id="city" placeholder="" name="city">
                    <option disabled selected value=""> -- اختر -- </option>
                    <option value="دمام">دمام</option>
                    <option value="رياض">رياض</option>
                </select>
            </div>
            <div class="form-group">
                <label for="">الحي</label>
                <input type="text" class="form-control" id="block" placeholder="" name="district">
            </div>
            <div class="form-group">
                <label for="">الشارع</label>
                <input type="text" class="form-control" id="fax" placeholder="" name="street">
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <input type="text" id="longitude" name="longitude" hidden>
                <input type="text" id="latitude" name="latitude" hidden>
                <div id="mapCanvas" class="form-group"></div>
            </div>
        </div>
    </div>



    <div class="raw">
        <div class="col-md-12">
            <div class="form-group">
                <label for="address">العنوان</label>
                <textarea name="address"class="form-control"></textarea>
            </div>
        </div>
    </div>
    <div class="raw">
        <div class="col-md-12">
            <div class="form-group">
                <label for="address">صورة بطاقة الاحوال</label>
               <input type="file" name="id_photo"/>
            </div>
        </div>
    </div>

    <div class='raw'>
        <div class='col-md-12'><button class='btn btn-ud'>حفظ</button></div>
    </div>
</form>             