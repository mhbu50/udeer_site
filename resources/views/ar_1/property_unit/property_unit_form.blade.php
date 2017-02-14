<form method='post' action="{{$action}}" enctype="multipart/form-data">
  <input type='hidden' name='_token' value="{!! csrf_token() !!}">
  
  <div class="col-md-6">
    <div class="">
      <label for="property">العقار</label>
        <div class="auto_compile_warp">
          <input type="text" class="form-control" id="property" placeholder="" name='property'>
          <a class="c-pls" href="#" data-toggle="modal" data-target="#PropertyModal"><i class="glyphicon glyphicon-plus"></i></a>
        </div>
    </div>  
  </div>

  <div class="col-md-6">
    <div class="form-group">
          <label for="unit_number">رقم الوحدة</label>
          <input type="text" class="form-control" id="unit_number" placeholder="" name='unit_number'>
      </div>
  </div>

  <div class="col-md-6">
    <div class="form-group">
      <label for="unit_type">نوع الوحدة</label>
      <select id="unit_type" class="form-control" name='unit_type'>
        <option disabled selected value> -- اختر -- </option>
        <option value='apartment'>شقة</option>
        <option value='room'>غرفة</option>
        <option value='villa'>فيلا </option>
        <option value='house'>بيت</option>
      </select>
    </div>
  </div>

  <div class="col-md-6">
    <div class="form-group">
      <label for="annual_rent_amount">سعر تاجير السنوي</label>
      <div class='raw pd-0-p'>
        <div class='col-md-8'>
          <input type="number" class="form-control" id="annual_rent_amount" placeholder="" name='annual_rent_amount' min="1">
        </div>
        <div class='col-md-4'>
          <select id="rent_currency" class="form-control" name='rent_currency' placeholder="العملة" >
            <option disabled selected value> -- اختر -- </option>
            <option value="SAR">ريال سعودي</option>
            <option value="USD">دلار امريكي</option>
          </select>
        </div>
      </div>
    </div>
  </div>

  <div class="col-md-6">
    <div class="form-group">
        <label for="insurance_amount">مبلغ التامين</label>
        <input type="text" class="form-control" id="insurance_amount" placeholder="" name='insurance_amount'>
    </div>
  </div>

  <div class="col-md-6">
    <div class="form-group">
      <label for="commission_type">العمولة</label>
      <select id="commission_type" class="form-control" name='commission_type'>
        <option disabled selected value> -- اختر -- </option>
        <option value='percentage'>نسبة</option>
        <option value='cash'>كاش</option>
      </select>
    </div>
  </div>

  <div class="col-md-6">
    <div class="form-group">
        <label for="commission_amount">قيمة العمولة</label>
        <input type="text" class="form-control" id="commission_amount" placeholder="" name='commission_amount'>
    </div>
  </div>

  <div class="col-md-6">
    <div class="form-group">
      <label for="unit_description">وصف الوحدة</label>
      <select id="unit_description" class="form-control" name='unit_description'>
        <option disabled selected value> -- اختر -- </option>
        <option value='For_families'>للعوائل</option>
        <option value='For_singles'>للعزاب</option>
        <option value='For_both'>عوائل و عزاب</option>
        <option value='Commercial'>تجاري</option>
      </select>
    </div>
  </div>

  <div class="col-md-6">
    <div class="form-group">
        <label for="unit_space">المساحة</label>
        <input type="text" class="form-control" id="unit_space" placeholder="" name='unit_space'>
    </div>
  </div>

  <div class="col-md-6">
    <div class="form-group">
      <label for="finishing_status">نوع التجهيز</label>
      <select id="finishing_status" class="form-control" name='finishing_status'>
        <option disabled selected value> -- اختر -- </option>
        <option value='Standard'>عادي</option>
        <option value='Air_conditioned'>مكيف</option>
        <option value='Furnished_and_air_conditioned'>موثث و مكيف</option>
      </select>
    </div>
  </div>

  <div class="col-md-6">
    <div class="form-group">
      <label for="room_slot">الغرفة\الفتحات</label>
      <input type="number" id="room_slot" class="form-control" name='room_slot' min="0" required/>
    </div>
  </div>

  <div class="col-md-6">
    <div class="form-group">
      <label for="number_of_bathrooms">دورات مياه</label>
      <input type="number" id="number_of_bathrooms" class="form-control" name='number_of_bathrooms' min="0" required/>
    </div>  
  </div>

  <div class="col-md-6">
    <div class="form-group">
      <label for="unit_activity">نشاط الوحدة</label>
      <select class="form-control" id="unit_activity" placeholder="" name='unit_activity'>
        <option disabled selected value> -- اختر -- </option>
        <option value="commercial">تجاري</option>
        <option value="residential">سكني</option>
      </select>
    </div>
  </div>


  <div class="col-md-6">
    <div class="form-group">
      <label for="water_meter_number">رقم عداد المياه</label>
      <input type="text" class="form-control" id="water_meter_number" placeholder="" name='water_meter_number' >
    </div>
  </div>

  <div class="col-md-6">
    <div class="form-group">
      <label for="electricity_meter_number">رقم عداد الكهرباء</label>
      <input type="text" class="form-control" id="electricity_meter_number" placeholder="" name='electricity_meter_number'>
    </div>
  </div>

  <div class="col-md-6">
    <div class="form-group">
      <label for="">استهلاك الماء السنوي</label>
      <input type="text" class="form-control" id="annual_water_usage" placeholder="" name="annual_water_usage">
    </div>
  </div>



  <div class="col-md-6">
    <div class="form-group">
      <label for="">خدمة الحارس</label>
      <select class="form-control" id="guard_service" placeholder="" name="guard_service">
        <option disabled selected value> -- اختر -- </option>
        <option value="available">متوفر</option>
        <option value="not_available">غير متوفر</option>
      </select>
    </div>
  </div>
  <div class="col-md-6">
    <div class="form-group">
      <label for="">خدمة الغاز</label>
      <select class="form-control" id="gas_sevice" placeholder="" name="gas_sevice">
        <option disabled selected value> -- اختر -- </option>
        <option value="available">متوفر</option>
        <option value="not_available">غير متوفر</option>
      </select>
    </div>
  </div>




  <div class="col-md-6">
    <div class="form-group">
      <label for="number_of_copies">عدد النسخ</label>
      <input type="number" class="form-control" id="number_of_copies" placeholder="" name="number_of_copies" value='1' min="1">
    </div>
  </div>
  <div class="col-md-12">
    <input type='submit' class='btn btn-default'value='حفظ'/>
  </div>
  
</form>