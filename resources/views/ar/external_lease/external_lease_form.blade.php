<form method='post' action="{{$action}}" enctype="multipart/form-data">
    <input type='hidden' name='_token' value="{!! csrf_token() !!}">   
    <div class="col-md-6">
        <h4>طرف الاول<h4>
        <div class="form-group form-md-line-input form-md-floating-label">
            <input type="text" class="form-control" id="seller_name" placeholder="" name="seller_name">
            <label for="">اسم</label>
        </div>
        <div class="form-group form-md-line-input form-md-floating-label">
            <input type="number" class="form-control" id="seller_mobile_number" placeholder="" name="seller_mobile_number">
            <label for="">رقم الجوال</label>
        </div>
        <div class="form-group form-md-line-input form-md-floating-label">
            <input type="text" class="form-control" id="seller_address" placeholder="" name="seller_address">
            <label for="">العنوان</label>
        </div>
        <div class="form-group form-md-line-input form-md-floating-label">
            <select class="form-control" id="seller_citizenship" placeholder="" name="seller_citizenship">
                <option value=""></option>
                <option value="saudi_arabia">المملكة العربية السعودية</option>
                <option value="kuwait">الكويت</option>
            </select>
            <label for="">الجنسية</label>
        </div>
        <div class="form-group form-md-line-input form-md-floating-label">
            <select class="form-control" id="seller_id_type" placeholder="" name="seller_id_type">
                <option value=""></option>
                <option value="eghama">اقامة</option>
                <option value="national_id_card">بطاقة الهوية الوطنية</option>
            </select>
            <label for="">نوع الهوية</label>
        </div>
        <div class="form-group form-md-line-input form-md-floating-label">
            <input type="number" class="form-control" id="seller_id_number" placeholder="" name="seller_id_number">
            <label for="">رقم الهوية</label>
        </div>
        <div class="form-group form-md-line-input form-md-floating-label">
            <input type="text" class="form-control" id="seller_id_place" placeholder="" name="seller_id_place">
            <label for="">مكان اصدار الهوية</label>
        </div>
        <div class="form-group form-md-line-input form-md-floating-label">
            <div class="input-icon right">
                <input class="form-control form-control-inline date-picker" size="16" type="text" value="" id="seller_id_expire" placeholder="" name="seller_id_expire">
                <i class="fa fa-calendar"></i>  
                <label for="expiry_date">تاريخ انتهاء الهوية</label>       
            </div>
        </div>
    </div> 
    <div class="col-md-6">
        <h4>طرف الثاني<h4>
        <div class="form-group form-md-line-input form-md-floating-label">
            <input type="text" class="form-control" id="buyer_name" placeholder="" name="buyer_name">
            <label for="">اسم</label>
        </div>
        <div class="form-group form-md-line-input form-md-floating-label">
            <input type="number" class="form-control" id="buyer_mobile_number" placeholder="" name="buyer_mobile_number">
            <label for="">رقم الجوال</label>
        </div>
        <div class="form-group form-md-line-input form-md-floating-label">
            <input type="text" class="form-control" id="buyer_address" placeholder="" name="buyer_address">
            <label for="">العنوان</label>
        </div>
        <div class="form-group form-md-line-input form-md-floating-label">
            <select class="form-control" id="buyer_citizenship" placeholder="" name="buyer_citizenship">
                <option value=""></option>
                <option value="saudi_arabia">المملكة العربية السعودية</option>
                <option value="kuwait">الكويت</option>
            </select>
            <label for="">الجنسية</label>
        </div>
        <div class="form-group form-md-line-input form-md-floating-label">
            <select class="form-control" id="buyer_id_type" placeholder="" name="buyer_id_type">
                <option value=""></option>
                <option value="eghama">اقامة</option>
                <option value="national_id_card">بطاقة الهوية الوطنية</option>
            </select>
            <label for="">نوع الهوية</label>
        </div>
        <div class="form-group form-md-line-input form-md-floating-label">
            <input type="number" class="form-control" id="buyer_id_number" placeholder="" name="buyer_id_number">
            <label for="">رقم الهوية</label>
        </div>
        <div class="form-group form-md-line-input form-md-floating-label">
            <input type="text" class="form-control" id="buyer_id_place" placeholder="" name="buyer_id_place">
            <label for="">مكان اصدار الهوية</label>
        </div>
        
        <div class="form-group form-md-line-input form-md-floating-label">
            <div class="input-icon right">
                <input class="form-control form-control-inline date-picker" size="16" type="text" value="" id="buyer_id_expire" placeholder="" name="buyer_id_expire">
                <i class="fa fa-calendar"></i>  
                <label for="expiry_date">تاريخ انتهاء الهوية</label>       
            </div>
        </div>
    </div>
   
    
    <div class="col-md-12">
        <h4>معلومات العقار<h4>
    </div>

    <div class="col-md-6">
        <div class="form-group form-md-line-input form-md-floating-label">
            <select class="form-control" id="property_type" placeholder="" name="property_type">
                <option value=""></option>
                <option value="house">بيت</option>
                <option value="room">غرفة</option>
            </select>
            <label for="">نوع العقار</label>
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group form-md-line-input form-md-floating-label">
            <input type="number" class="form-control" id="lease_period" placeholder="" name="lease_period">
            <label for="">مدة العقد</label>
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group form-md-line-input form-md-floating-label">
            <div class="input-icon right">
                <input class="form-control form-control-inline date-picker" size="16" type="text" value="" id="lease_start_day" placeholder="" name="lease_start_day">
                <i class="fa fa-calendar"></i>  
                <label for="expiry_date">تاريخ ابتداء العقد</label>       
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group form-md-line-input form-md-floating-label">
            <select class="form-control" id="payment_method" placeholder="" name="payment_method">
                <option value=""></option>
                <option value="cach">كاش</option>
                <option value="cheque">شيك</option>
            </select>
            <label for="">طريقة الدفع</label>
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group form-md-line-input form-md-floating-label">
            <input type="number" class="form-control" id="water_meter_number" placeholder="" name="water_meter_number">
            <label for="">رقم عداد المياه</label>
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group form-md-line-input form-md-floating-label">
            <input type="number" class="form-control" id="electricity_meter_number" placeholder="" name="electricity_meter_number">
            <label for="">رقم عداد الكهرباء</label>
        </div>
    </div>
    
    <div class="col-md-6">
        <div class="form-group form-md-line-input form-md-floating-label">
            <input type="text" class="form-control" id="first_witness_name" placeholder="" name="first_witness_name">
            <label for="">شاهد الاول</label>
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group form-md-line-input form-md-floating-label">
            <input type="text" class="form-control" id="secound_witness_name" placeholder="" name="secound_witness_name">
            <label for="">شاهد الثاني</label>
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group form-md-line-input form-md-floating-label">
            <input type="number" class="form-control" id="" placeholder="" name="rent_price">
            <label for="rent_price">سعر اليجار الشهري</label>
        </div>
    </div>
    <div class="col-md-12">
        <div class="form-group form-md-line-input form-md-floating-label">
            <textarea class="form-control" rows="5" id="property_address" placeholder="" name="property_address"></textarea>
            <label for="">عنوان العقار</label>
        </div>
    </div>
    <div class="col-md-12">
        <div class="form-group form-md-line-input form-md-floating-label">
            <textarea class="form-control" rows="5" id="notes" placeholder="" name="notes"></textarea>
            <label for="">ملاحظة</label>
        </div>
    </div>
    @if(!empty($terms))
    <div class="col-md-6">
          <div class="form-group form-md-line-input form-md-floating-label">
              <select id="terms_group" class="form-control">
                <option value=""></option>
                @foreach ($terms as $key => $value)
                <option >{{$key}}</option>
                @endforeach
              </select>
              <label for="Property_type">نوع مجموعة شروط</label>
          </div>
    </div>
    @endif  
    <div class="col-md-12">
        <div class="form-group form-md-line-input form-md-floating-label">
            <textarea name="terms" id="terms">  </textarea>
            
            
        </div>
    </div>    
    
    <div class="form-actions noborder">
      <div class="col-md-12">
        <input type="submit" class="btn blue" value="حفظ"></button>
        <button type="button" class="btn default">الغاء</button>
      </div>
        
    </div>
    
</form>