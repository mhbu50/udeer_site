<form method='post' action="{{$action}}" enctype="multipart/form-data">
  <input type='hidden' name='_token' value="{!! csrf_token() !!}">
  
      <div class="raw">
        <div class="col-md-12">
          <h2>اضافة العقار</h2>
        </div>
          
      </div>
  <div class="raw">
    <div class="form-column col-sm-6">

        
       

        <div class="form-group">
            <label for="">اسم العقار</label>
            <input type="text" class="form-control" id="" name="property_name" placeholder="" >
        </div>

        <div class="form-group">
          <label for="Property_type">نوع العقار</label>
          <select id="Property_type" class="form-control" name='property_type'>
            <option disabled selected value=""> -- اختر -- </option>
            <option value="house">بيت</option>
            <option value="schema">مخطط</option>
            <option value="residential building">عمارة سكنية</option>
          </select>
        </div>

        <div class="form-group">
            <label for="exampleInputEmail1">سنة البناء</label>
            <input type="date" class="form-control" id="construction_date" name='construction_date' placeholder="">
        </div>
        <div class="form-group">
            <label for="">عدد الوحدات</label>
            <input type="number" class="form-control" id="number_of_units" name='number_of_units' placeholder="">
        </div>


        
     
        <div class="form-group">
          <label for="comment">تقييم</label>
          <textarea class="form-control" rows="5" id="evaluation" name='evaluation'></textarea>
        </div>
        <div class="form-group">
          <label for="comment">مميزات العقار</label>
          <textarea class="form-control" rows="5" id="property_advantage" name="property_advantage"></textarea>
        </div>

        <div class="form-group">
            <label for="">رقم المخطط</label>
            <input type="text" class="form-control" id="scheme__numer" name="scheme__numer" placeholder="">
        </div>

        <div class="form-group">
            <label >وضع العقار</label>
            <select id="condition" class="form-control" name='condition'>
              <option disabled selected value=""> -- اختر -- </option>
              <option value="new">جديد</option>
              <option value="old">فديم</option>
              <option value="under_construction">تحت الانشاء</option>
              <option value="none">غير ذلك</option>
            </select>
        </div>

        <div class="form-group">
            <label>طريقة ادارة الاملاك</label>
            <select id="management_type" class="form-control" name="management_type">
              <option disabled selected value=""> -- اختر -- </option>
              <option value="percentage">نسبة مئوية</option>
              <option value="not_percentage">مبلغ مقطوع</option>
              
            </select>
        </div>

        <div class="form-group" id="not_percentage" hidden>
            <label>النسبة</label>
            <input type="number" class="form-control" name="commission"/>
            
        </div>


        <div class="form-group" id="percentage" hidden>
            <label>النسبة المئوية</label>
            <select id="" class="form-control" name="commission">
              <option disabled selected value=""> -- اختر -- </option>
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
        </div>

        <div class="form-group">
            <label>نوع العرض</label>
            <select class="form-control" id="offer_type" name="offer_type">
              <option disabled selected value=""> -- اختر -- </option>
              <option value="sell">ايجار</option>
              <option value="rent">بيع</option>
              <option value="full_rent">ايجار كامل</option>
              <option value="investment">استثمار</option>
              <option value="taghbeel">تقبيل</option>
              <option value="sell_investment">بيع او استثمار</option>
              
            </select>
        </div>

        <div class="form-group">
            <label for="">السعر</label>
            <input type="text" class="form-control" id="price" name="price" placeholder="">
        </div>

        <div class="form-group">
            <label for="">سعر المتر</label>
            <input type="text" class="form-control" id="meter_price" name="meter_price" placeholder="">
        </div>

        <div class="form-group">
            <label for="">حد التفاوض</label>
            <input type="text" class="form-control" id="negotiating_boundary" name="negotiating_boundary" placeholder="">
        </div>

      



        
    </div>
    <div class="form-column col-sm-6">
        <div class="raw pd-0-p">
            <div class='col-md-6'>
                <div class="form-group">
                  <label for="country">الدولة</label>
                  <select id="country" class="form-control" name='country'>
                    <option disabled selected value=""> -- اختر -- </option>
                    <option value="saudi arabia">سعودية</option>
                    <option value="bahrain">بحرين</option>
                  </select>
                </div>
            </div>
            <div class='col-md-6'>
                <div class="form-group">
                  <label for="city">المدينة</label>
                  <select class="form-control" id="city" placeholder="" name="city">
                    <option disabled selected value=""> -- اختر -- </option>
                    <option value="دمام">دمام</option>
                    <option value="رياض">رياض</option>
                  </select>
                </div>
            </div>
        </div>
      </div>
    <div class="form-column col-sm-6">
      <div class="raw pd-0-p">
        <div class='col-md-6'>
          <div class="form-group">
              <label for="">الحي</label>
              <input type="text" class="form-control" id="district" placeholder="" name="district">
          </div>
        </div>
        <div class='col-md-6'>
          <div class="form-group">
              <label for="">الشارع</label>
              <input type="text" class="form-control" id="street" placeholder="" name="street">
          </div>
        </div> 
      </div> 
      <div class="form-group">
        <label for="address">العنوان</label>
        <textarea class="form-control" rows="5" id="address" name='address' ></textarea>
      </div>
      <div id="mapCanvas"></div>
      <input type="text" id="longitude" name="longitude" hidden>
      <input type="text" id="latitude" name="latitude" hidden>
      <div class="form-group">
          <label>رقم عداد المياة</label>
          <input type="text" class="form-control" id="water_meter_number" name="water_meter_number" placeholder="">
      </div>

      <div class="form-group">
          <label>رقم عداد الكهرباء</label>
          <input type="text" class="form-control" id="electricity_meter_number" name="electricity_meter_number" placeholder="">
      </div>

      <div class="form-group">
          <label for="">المساحة الاجمالية</label>
          <input type="text" class="form-control" id="total_area" name="total_area" placeholder="">
      </div>

      <div class="form-group">
          <label for="">مساحة البناء</label>
          <input type="text" class="form-control" id="construction_area" name="construction_area" placeholder="">
      </div>

      <div class="form-group">
          <label for="">اتجاه العقار</label>
          <select id="property_direction" name="property_direction" class="form-control" >
            <option disabled selected value=""> -- اختر -- </option>
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
      </div>

    </div>  

        
    </div>

  

  <div class="raw">
    <div class='col-md-12'>
      <h2>بيانات المالك</h2>
    </div>
          
  </div>
  <div class="raw">
    <div class="form-column col-md-6">
        
        <div class="raw">

             
              <div class="form-group">
                  <label for="exampleInputEmail1">اسم المالك</label>
                  <div class="auto_compile_warp">
                    <input type="text" class="form-control" id="owner_name" placeholder="" name="owner_name" >
                    <a class="c-pls" href="#" data-toggle="modal" data-target="#OwnerModal"><i class="glyphicon glyphicon-plus"></i></a>
                  </div>
              </div>
            
              
               
                
              
        </div>
        
        <div class="form-group">
            <label for="exampleInputEmail1">رقم العقار</label>
            <input type="text" class="form-control" id="property_number" name="property_number" placeholder="">
        </div>
        


    </div>
    <div class="col-md-6">
        <div class="form-group">
            <label for="exampleInputEmail1">رقم الصك</label>
            <input type="text" class="form-control" id="instrument_number" name="instrument_number" placeholder="">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">تاريخ الصك</label>
            <input type="date" class="form-control" id="instrument_date" name="instrument_date" placeholder="">
        </div>
    </div>
  </div>

  <div class='col-md-12'>
      <input type="submit" class="btn btn-default" value='حفظ'/>
  </div>
</form>