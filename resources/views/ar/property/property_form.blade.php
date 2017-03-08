
<form method='post' action="{{$action}}" enctype="multipart/form-data">
    <input type='hidden' name='_token' value="{!! csrf_token() !!}">   
    <div class="form-body">


      <div class="col-md-6">
          <div class="form-group form-md-line-input form-md-floating-label">
              <input type="text" class="form-control" id="property_name" name="property_name" placeholder="" >
              <label for="property_name">اسم العقار</label>
          </div>
      </div>
      <div class="col-md-6">
          <div class="form-group form-md-line-input form-md-floating-label">
              <select id="Property_type" class="form-control" name='property_type'>
                <option value=""></option>
                <option value="house">بيت</option>
                <option value="schema">مخطط</option>
                <option value="residential building">عمارة سكنية</option>
              </select>
              <label for="Property_type">نوع العقار</label>
          </div>
      </div>

      <div class="col-md-6">
        <div class="form-group form-md-line-input form-md-floating-label">
          <div class="input-icon right">
              <input class="form-control form-control-inline date-picker" size="16" type="text" value="" id="construction_date" name='construction_date'>
              <i class="fa fa-calendar"></i>  
              <label for="construction_date">سنة البناء</label>
                  
          </div>
        </div>  
      </div>
      <div class="col-md-6">
          <div class="form-group form-md-line-input form-md-floating-label">
              <input type="number" class="form-control" id="number_of_units" name='number_of_units' placeholder="" min="0">
              <label for="number_of_units">عدد الوحدات</label>
          </div>
      </div>
      <div class="col-md-6">
          <div class="form-group form-md-line-input form-md-floating-label">
            <textarea class="form-control" rows="5" id="evaluation" name='evaluation'></textarea>
            <label for="evaluation">تقييم</label>
          </div>
      </div>
      <div class="col-md-6">
          <div class="form-group form-md-line-input form-md-floating-label">
            <textarea class="form-control" rows="5" id="property_advantage" name="property_advantage"></textarea>
            <label for="property_advantage">مميزات العقار</label>
          </div>
      </div>
      <div class="col-md-6">
          <div class="form-group form-md-line-input form-md-floating-label">
            <input type="text" class="form-control" id="scheme_numer" name="scheme_numer" placeholder="">
            <label for="scheme_numer">رقم المخطط</label>
          </div>
      </div>
      <div class="col-md-6">
          <div class="form-group form-md-line-input form-md-floating-label">
            <select id="condition" class="form-control" name='condition'>
              <option value=""></option>
              <option value="new">جديد</option>
              <option value="old">فديم</option>
              <option value="under_construction">تحت الانشاء</option>
              <option value="none">غير ذلك</option>
            </select>
            <label for="condition">وضع العقار</label>
          </div>
      </div>
      <div class="col-md-6">
          <div class="form-group form-md-line-input form-md-floating-label">
              <select id="management_type" class="form-control" name="management_type">
                <option value=""></option>
                <option value="percentage">نسبة مئوية</option>
                <option value="not_percentage">مبلغ مقطوع</option>
              </select>
              <label for="management_type">طريقة ادارة الاملاك</label>
          </div>
      </div>
      <div class="col-md-6" >
          <div class="form-group form-md-line-input form-md-floating-label commission" id="not_percentage">
            <input type="number" class="form-control" name="commission"/>
            <label>المبلغ</label>
          </div>
          <div class="form-group form-md-line-input form-md-floating-label commission" id="percentage">
              <select class="form-control" name="commission">
                <option value=""></option>
                <option value="0.5/100">0.5%</option>
                <option value="1/100">1%</option>
                <option value="1.5/100">1.5%</option>
                <option value="2/100">2%</option>
                <option value="2.5/100">2.5%</option>
                <option value="3/100">3%</option>
                <option value="3.5/100">3.5%</option>
                <option value="4/100">4%</option>
                <option value="4.5/100">4.5%</option>
                <option value="5/100">5%</option>
              </select>
              <label for="commission">النسبة المئوية</label>
          </div>
      </div>
      <div class="col-md-6">
        <div class="form-group form-md-line-input form-md-floating-label">
          <select class="form-control" id="offer_type" name="offer_type">
            <option value=""></option>
            <option value="sell">ايجار</option>
            <option value="rent">بيع</option>
            <option value="full_rent">ايجار كامل</option>
            <option value="investment">استثمار</option>
            <option value="taghbeel">تقبيل</option>
            <option value="sell_investment">بيع او استثمار</option>
          </select>
          <label for="offer_type">نوع العرض</label>
        </div>
      </div>
      <div class="col-md-6">
        <div class="form-group form-md-line-input form-md-floating-label">
          <input type="number" class="form-control" id="price" name="price" placeholder="">
          <label for="price">السعر</label>
        </div>
      </div>
      <div class="col-md-6">
        <div class="form-group form-md-line-input form-md-floating-label">
          <input type="number" class="form-control" id="meter_price" name="meter_price" placeholder="">
          <label for="meter_price">سعر المتر</label>
        </div>
      </div>
      <div class="col-md-6">
        <div class="form-group form-md-line-input form-md-floating-label">
          <input type="number" class="form-control" id="negotiating_boundary" name="negotiating_boundary" placeholder="">
          <label for="negotiating_boundary">حد التفاوض</label>
        </div>
      </div>

      <div class="col-md-3">
        <div class="form-group form-md-line-input form-md-floating-label">
          <select id="country" class="form-control" name='country'>
            <option value=""></option>
            <option value="saudi arabia">سعودية</option>
            <option value="bahrain">بحرين</option>
          </select>
          <label for="country">الدولة</label>
        </div>
      </div>
      <div class="col-md-3">
        <div class="form-group form-md-line-input form-md-floating-label">
          <select class="form-control" id="city" placeholder="" name="city">
            <option value=""></option>
            <option value="دمام">دمام</option>
            <option value="رياض">رياض</option>
          </select>
          <label for="city">المدينة</label>
        </div>
      </div>
      <div class="col-md-6">
        <div class="form-group form-md-line-input form-md-floating-label">
          <input type="text" class="form-control" id="district" placeholder="" name="district">
          <label for="">الحي</label>
        </div>
      </div>
      <div class="col-md-6">
        <div class="form-group form-md-line-input form-md-floating-label">
          <input type="text" class="form-control" id="street" placeholder="" name="street">
          <label for="">الشارع</label>
        </div>
      </div>
      <div class="col-md-6">
        <div class="form-group form-md-line-input form-md-floating-label">
          <input class="form-control" rows="1" id="address" name='address'>
          <label for="address">العنوان</label>
        </div>
      </div>
      <div class="col-md-6">
        <div class="form-group form-md-line-input form-md-floating-label">
          <input type="text" class="form-control" id="water_meter_number" name="water_meter_number" placeholder="">
          <label>رقم عداد المياة</label>
        </div>
      </div>
      <div class="col-md-6">
        <div class="form-group form-md-line-input form-md-floating-label">
          <input type="text" class="form-control" id="electricity_meter_number" name="electricity_meter_number" placeholder="">
          <label>رقم عداد الكهرباء</label>
        </div>
      </div>
      <div class="col-md-6">
        <div class="form-group form-md-line-input form-md-floating-label">
          <input type="number" class="form-control" id="total_area" name="total_area" placeholder="">
          <label for="">المساحة الاجمالية</label>
        </div>
      </div>
      <div class="col-md-6">
        <div class="form-group form-md-line-input form-md-floating-label">
          <input type="number" class="form-control" id="construction_area" name="construction_area" placeholder="">
          <label for="">مساحة البناء</label>
        </div>
      </div>
      
      <div class="col-md-6 ">
        <div class="form-group form-md-line-input form-md-floating-label">
          <select id="property_direction" name="property_direction" class="form-control" >
            <option value=""></option>
            <option value="north">شمال</option>
            <option value="east">شرق</option>
            <option value="west">غرب</option>
            <option value="south">جنوب</option>
            <option value="north_east">شمال شرق</option>
            <option value="north_west">شمال غرب</option>
            <option value="south_east">جنوب شرق</option>
            <option value="south_west">جنوب غرب</option>
            <option value="none">بدون</option>
          </select>
          <label for="">اتجاه العقار</label>
        </div>
      </div>
      <div class="col-md-12 ">
        <div class="form-group">
          <div id="mapCanvas"></div>
          <input type="text" id="longitude" name="longitude" hidden>
          <input type="text" id="latitude" name="latitude" hidden>
        </div>
      </div>
      

      <div class="col-md-12">
        <h4>بيانات المالك</h4>
      </div>
      

      <div class="col-md-6">
        <div class="form-group form-md-line-input ">
          <div class="input-group">
            
            <div class="input-group-control">
                <input type="text" class="form-control typeahead" id="owner_name" placeholder="اسم المالك" name="owner_name" >
            </div>
            <span class="input-group-btn btn-left">
                <a class="btn blue btn-outline" href="#" data-toggle="modal" data-target="#OwnerModal"><i class="fa fa-plus"></i></a>
                
            </span>
          </div>
        </div>
      </div>
      <div class="col-md-6">
        <div class="form-group form-md-line-input form-md-floating-label">
          
          <input type="text" class="form-control" id="property_number" name="property_number" placeholder="">
          <label for="property_number">رقم العقار</label>
        </div>
      </div>
      <div class='col-md-12'>
        <div class='row'>
        <div class="col-md-6">
          <div class="form-group form-md-line-input form-md-floating-label">
            <input type="text" class="form-control" id="instrument_number" name="instrument_number" placeholder="">
            <label for="instrument_number">رقم الصك</label>
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-group form-md-line-input form-md-floating-label">
            <div class="input-icon right">
                <input class="form-control form-control-inline date-picker" size="16" type="text" value="" id="instrument_date" name="instrument_date">
                <i class="fa fa-calendar"></i>  
                <label for="instrument_date">تاريخ الصك</label>
            </div>
          </div>  
        </div>
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


























