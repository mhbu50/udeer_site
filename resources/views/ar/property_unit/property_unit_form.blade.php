<form method='post' action="{{$action}}" enctype="multipart/form-data">
  <div class="form-body">
    <input type='hidden' name='_token' value="{!! csrf_token() !!}">
    
    <div class="col-md-6">
      <div class="form-group form-md-line-input form-md-floating-label">
        <div class="input-group">
          
          <div class="input-group-control">
              <input type="text" class="form-control typeahead" id="property" placeholder="العقار" name='property'>
              
          </div>
          <span class="input-group-btn btn-left">
              
                <a class="btn blue btn-outline" href="#" data-toggle="modal" data-target="#PropertyModal"><i class="fa fa-plus"></i></a>
          </span>
        </div>
      </div>
    </div>

    <div class="col-md-6">
      <div class="form-group form-md-line-input form-md-floating-label">
            <input type="text" class="form-control" id="unit_number" placeholder="" name='unit_number'>
            <label for="unit_number">رقم الوحدة</label>
        </div>
    </div>

    <div class="col-md-6">
      <div class="form-group form-md-line-input form-md-floating-label">
        <select id="unit_type" class="form-control" name='unit_type'>
          <option value="" >  </option>
          <option value='apartment'>شقة</option>
          <option value='room'>غرفة</option>
          <option value='villa'>فيلا </option>
          <option value='house'>بيت</option>
        </select>
        <label for="unit_type">نوع الوحدة</label>
      </div>
    </div>

    <div class="col-md-6">
      
        
        <div class='raw pd-0-p'>
          <div class='col-md-8'>
            <div class="form-group form-md-line-input form-md-floating-label">
              <input type="number" class="form-control" id="annual_rent_amount" placeholder="" name='annual_rent_amount' min="1">
              <label for="annual_rent_amount">سعر تاجير السنوي</label>
            </div>
          </div>
          <div class='col-md-4'>
            <div class="form-group form-md-line-input form-md-floating-label">
              <select id="rent_currency" class="form-control" name='rent_currency' placeholder="العملة" >
                <option value="" > </option>
                <option value="SAR">ريال سعودي</option>
                <option value="USD">دلار امريكي</option>
              </select>
              <label for="annual_rent_amount">عملة</label>
            </div>  
          </div>
        </div>
    </div>

    <div class="col-md-6">
      <div class="form-group form-md-line-input form-md-floating-label">
          <input type="text" class="form-control" id="insurance_amount" placeholder="" name='insurance_amount'>
          <label for="insurance_amount">مبلغ التامين</label>
      </div>
    </div>

    <div class="col-md-6">
      <div class="form-group form-md-line-input form-md-floating-label">
        <select id="commission_type" class="form-control" name='commission_type'>
          <option value="">  </option>
          <option value='percentage'>نسبة</option>
          <option value='cash'>كاش</option>
        </select>
        <label for="commission_type">العمولة</label>
      </div>
      
    </div>

    <div class="col-md-6">
      <div class="form-group form-md-line-input form-md-floating-label">
          <input type="text" class="form-control" id="commission_amount" placeholder="" name='commission_amount'>
          <label for="commission_amount">قيمة العمولة</label>
      </div>
    </div>

    <div class="col-md-6">
      <div class="form-group form-md-line-input form-md-floating-label">
        <select id="unit_description" class="form-control" name='unit_description'>
          <option value="" >  </option>
          <option value='For_families'>للعوائل</option>
          <option value='For_singles'>للعزاب</option>
          <option value='For_both'>عوائل و عزاب</option>
          <option value='Commercial'>تجاري</option>
        </select>
        <label for="unit_description">وصف الوحدة</label>
      </div>
    </div>

    <div class="col-md-6">
      <div class="form-group form-md-line-input form-md-floating-label">
          <input type="text" class="form-control" id="unit_space" placeholder="" name='unit_space'>
          <label for="unit_space">المساحة</label>
      </div>
    </div>

    <div class="col-md-6">
      <div class="form-group form-md-line-input form-md-floating-label">
        
        <select id="finishing_status" class="form-control" name='finishing_status'>
          <option value="" >  </option>
          <option value='Standard'>عادي</option>
          <option value='Air_conditioned'>مكيف</option>
          <option value='Furnished_and_air_conditioned'>موثث و مكيف</option>
        </select>
        <label for="finishing_status">نوع التجهيز</label>
      </div>
    </div>

    <div class="col-md-6">
      <div class="form-group form-md-line-input form-md-floating-label">
        
        <input type="number" id="room_slot" class="form-control" name='room_slot' min="0" required/>
        <label for="room_slot">الغرفة\الفتحات</label>
      </div>
    </div>

    <div class="col-md-6">
      <div class="form-group form-md-line-input form-md-floating-label">
        
        <input type="number" id="number_of_bathrooms" class="form-control" name='number_of_bathrooms' min="0" required/>
        <label for="number_of_bathrooms">دورات مياه</label>
      </div>  
    </div>

    <div class="col-md-6">
      <div class="form-group form-md-line-input form-md-floating-label">
        
        <select class="form-control" id="unit_activity" placeholder="" name='unit_activity'>
          <option value="" >  </option>
          <option value="commercial">تجاري</option>
          <option value="residential">سكني</option>
        </select>
        <label for="unit_activity">نشاط الوحدة</label>
      </div>
    </div>


    <div class="col-md-6">
      <div class="form-group form-md-line-input form-md-floating-label">
        
        <input type="text" class="form-control" id="water_meter_number" placeholder="" name='water_meter_number' >
        <label for="water_meter_number">رقم عداد المياه</label>
      </div>
    </div>

    <div class="col-md-6">
      <div class="form-group form-md-line-input form-md-floating-label">
        
        <input type="text" class="form-control" id="electricity_meter_number" placeholder="" name='electricity_meter_number'>
        <label for="electricity_meter_number">رقم عداد الكهرباء</label>
      </div>
    </div>

    <div class="col-md-6">
      <div class="form-group form-md-line-input form-md-floating-label">
        <input type="text" class="form-control" id="annual_water_usage" placeholder="" name="annual_water_usage">
        <label for="">استهلاك الماء السنوي</label>
      </div>
    </div>



    <div class="col-md-6">
      <div class="form-group form-md-line-input form-md-floating-label">
        
        <select class="form-control" id="guard_service" placeholder="" name="guard_service">
          <option value="" >  </option>
          <option value="available">متوفر</option>
          <option value="not_available">غير متوفر</option>
        </select>
        <label for="">خدمة الحارس</label>
      </div>
    </div>
    <div class="col-md-6">
      <div class="form-group form-md-line-input form-md-floating-label">
        
        <select class="form-control" id="gas_sevice" placeholder="" name="gas_sevice">
          <option value="" >  </option>
          <option value="available">متوفر</option>
          <option value="not_available">غير متوفر</option>
        </select>
        <label for="">خدمة الغاز</label>
      </div>
    </div>




    <div class="col-md-6">
      <div class="form-group form-md-line-input form-md-floating-label">
        <input type="number" class="form-control edited" id="number_of_copies" placeholder="" name="number_of_copies" value='1' min="1">
        <label for="number_of_copies">عدد النسخ</label>
      </div>
    </div>
  </div>
  <div class="form-actions noborder">
    <div class="col-md-12">
      <input type="submit" class="btn blue" value="حفظ" />
      <a type="button" class="btn default">الغاء</a>
    </div>
      
  </div>
</form>
























