@extends('template')
@section('lang','ar')
@section('head')
    <link href="/css/bootstrap-rtl.css" rel="stylesheet">
    
@endsection

@section('body')
    

    <section id="temp1">
        
            <!-- Static navbar -->
              <div id="c-nav">
                @include('ar.ar_nav')
            </div>
              
    <div class="container c-body-con">
        <div class="col-md-9">

            <div class="raw">
                <div class="col-md-12 col-md-offset-0" >
                  @include('ar.tabs.property_unit')
                    <div id="propriety_uni_form.html" class="page-content">
                      <form method='post' action="{!!action('Property_unitController@edit',['name' => $property_unit->name ])!!}" enctype="multipart/form-data">
                        <input type='hidden' name='_token' value="{!! csrf_token() !!}">
                        <div class="form-column col-sm-6">

                            <div class="form-group">
                                <label for="property">العقار</label>
                                <input type="text" class="form-control" id="property" placeholder="" name='property' value='{{ isset($property_unit->property) ? $property_unit->property : ""}}'>
                            </div>
                            <div class="form-group">
                                <label for="unit_number">رقم الوحدة</label>
                                <input type="text" class="form-control" id="unit_number" placeholder="" name='unit_number' value='{{ isset($property_unit->unit_number) ? $property_unit->unit_number : ""}}'>
                            </div>

                            <div class="form-group">
                              <label for="unit_type">نوع الوحدة</label>
                              <select id="unit_type" class="form-control" name='unit_type'>
                                <option value='apartment'>شقة</option>
                                <option value='room'>غرفة</option>
                                <option value='villa'>فيلا </option>
                                <option value='house'>بيت</option>
                              </select>
                            </div>

                          </div>
                          <div class='form-column col-sm-6'>

                            <div class="form-group">
                                <label for="annual_rent_amount">سعر تاجير السنوي</label>
                                <div class='raw'>
                                  <div class='col-md-8'>
                                    <input type="text" class="form-control" id="annual_rent_amount" placeholder="" name='annual_rent_amount' value='{{ isset($property_unit->annual_rent_amount) ? $property_unit->annual_rent_amount : ""}}'>
                                  </div>
                                  <div>
                                    <div class='col-md-4'>
                                      <select id="rent_currency" class="form-control" name='rent_currency' placeholder="العملة"  selected='{{ isset($property_unit->rent_currency) ? $property_unit->rent_currency : ""}}'>
                                        <option >SAR</option>
                                        <option >USD</option>
                                      </select>
                                  </div>
                                  </div>
                                </div>
                                
                            </div>
                             <div class="form-group">
                                <label for="insurance_amount">مبلغ التامين</label>
                                <input type="text" class="form-control" id="insurance_amount" placeholder="" name='insurance_amount' value='{{ isset($property_unit->insurance_amount) ? $property_unit->insurance_amount : ""}}'>
                            </div>
                            <div class="form-group">
                              <label for="commission_type">العمولة</label>
                              <select id="commission_type" class="form-control" name='commission_type' selected='{{ isset($property_unit->commission_type) ? $property_unit->commission_type : ""}}'>
                                <option value='percentage'>نسبة</option>
                                <option value='cash'>كاش</option>
                              </select>
                            </div>
                            <div class="form-group">
                                <label for="commission_amount">قيمة العمولة</label>
                                <input type="text" class="form-control" id="commission_amount" placeholder="" name='commission_amount' value='{{ isset($property_unit->commission_amount) ? $property_unit->commission_amount : ""}}'>
                            </div>
                          </div>
                          <p> &nbsp;<br>&nbsp;</p>
                          <div class='form-column col-sm-6'>
                            <div class="form-group">
                              <label for="unit_description">وصف الوحدة</label>
                              <select id="unit_description" class="form-control" name='unit_description' selected='{{ isset($property_unit->unit_description) ? $property_unit->unit_description : ""}}'>
                                <option value='For families'>للعوائل</option>
                                <option value='For singles'>للعزاب</option>
                                <option value='For both'>عوائل و عزاب</option>
                                <option value='Commercial'>تجاري</option>
                              </select>
                            </div>
                            <div class="form-group">
                                <label for="unit_space">المساحة</label>
                                <input type="text" class="form-control" id="unit_space" placeholder="" name='unit_space' value='{{ isset($property_unit->unit_space) ? $property_unit->unit_space : ""}}'>
                            </div>

                            <div class="form-group">
                              <label for="finishing_status">نوع التجهيز</label>
                              <select id="finishing_status" class="form-control" name='finishing_status' selected='{{ isset($property_unit->finishing_status) ? $property_unit->finishing_status : ""}}'>
                                <option value='Standard'>عادي</option>
                                <option value='air_conditioned'>مكيف</option>
                                <option value='furnished_and_air_conditioned'>موثث و مكيف</option>
                              </select>
                            </div>
                          </div>

                          <div class='form-column col-sm-6'>
                            
                            <div class="form-group">
                              <label for="room_slot">الغرفة\الفتحات</label>
                              <select id="room_slot" class="form-control" name='room_slot' selected='{{ isset($property_unit->room_slot) ? $property_unit->room_slot : ""}}'>
                                 <option>1</option>
                                <option>2</option>
                              </select>
                            </div>

                            <div class="form-group">
                              <label for="number_of_bathrooms">دورات مياه</label>
                              <select id="number_of_bathrooms" class="form-control" name='number_of_bathrooms' selected='{{ isset($property_unit->number_of_bathrooms) ? $property_unit->number_of_bathrooms : ""}}'>
                                <option>1</option>
                                <option>2</option>
                              </select>
                            </div>  

                            <div class="form-group">
                                  <label for="unit_activity">نشاط الوحدة</label>
                                  <select class="form-control" id="unit_activity" placeholder="" name='unit_activity'>
                                    <option value="commercial">تجاري</option>
                                    <option value="residential">سكني</option>
                                  </select>
                            </div>
                            <div class="form-group">
                                <label for="water_meter_number">رقم عداد المياه</label>
                                <input type="text" class="form-control" id="water_meter_number" placeholder="" name='water_meter_number'  value='{{ isset($property_unit->water_meter_number) ? $property_unit->water_meter_number : ""}}'>
                            </div>

                            <div class="form-group">
                                <label for="electricity_meter_number">رقم عداد الكهرباء</label>
                                <input type="text" class="form-control" id="electricity_meter_number" placeholder="" name='electricity_meter_number' value='{{ isset($property_unit->electricity_meter_number) ? $property_unit->electricity_meter_number : ""}}'>
                            </div>

                          </div>
                        
                        <input type='submit' class='btn btn-default'value='ارسال '/>
                      </form>

                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div id="side_menu" >
                 @include('ar.ar_side')
            </div>
        </div>
    </div>
 
    @include('ar.ar_footer')
    <script type="text/javascript">

      $(document).ready(function(){
        $("#unit_type").val('{{ isset($property_unit->unit_type) ? $property_unit->unit_type : ""}}');
        $("#rent_currency").val('{{ isset($property_unit->rent_currency) ? $property_unit->rent_currency : ""}}');
        $("#commission_type").val('{{ isset($property_unit->commission_type) ? $property_unit->commission_type : ""}}');
        $("#unit_description").val('{{ isset($property_unit->unit_description) ? $property_unit->unit_description : ""}}');
        $("#finishing_status").val('{{ isset($property_unit->finishing_status) ? $property_unit->finishing_status : ""}}');
        $("#room_slot").val('{{ isset($property_unit->room_slot) ? $property_unit->room_slot : ""}}');
        $("#number_of_bathrooms").val('{{ isset($property_unit->number_of_bathrooms) ? $property_unit->number_of_bathrooms : ""}}');
        $("#unit_activity").val('{{ isset($property_unit->unit_activity) ? $property_unit->unit_activity : ""}}');
        
         $(".nav-tabs #show").addClass('active');
        
    

        
          $('#property').typeahead({
              source: [
                @foreach( $properties as $property)
                  {  name: '{{$property->name}}' },
                @endforeach 
                  
              ]
          });
      });
    </script>
@endsection
