@extends('template')
@section('lang','ar')
@section('head')
    <link href="/css/bootstrap-rtl.css" rel="stylesheet">
    
@endsection

@section('body')
    <body class="property_management p_u-create">

    <section id="temp1">
        
            <!-- Static navbar -->
              <div id="c-nav">
                @include('ar.ar_nav')
            </div>
              
    <div class="container-fluid c-body-con">
        <div class="col-md-9">
            <div class="raw">
                <div class="" >
                    <div id="propriety_uni_form.html" class="page-content">
                      <div class="raw">
                        <div class="col-md-12">
                          <h2>اضافة وحدة</h2>
                        </div>
                      </div>
                      



                      <form method='post' action="{!!action('PropertyController@store_unit',$property_name)!!}" enctype="multipart/form-data">
                        <input type='hidden' name='_token' value="{!! csrf_token() !!}">
                        
                        <div class="col-md-6">
                          <div class="">
                            <label for="property">العقار</label>
                              <div style="position: relative;">
                                <input type="text" class="form-control" id="property" placeholder="" name='property' value="{{$property_name}}" readonly/>
                                
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
                                <input type="number" class="form-control" id="annual_rent_amount" placeholder="" name='annual_rent_amount'>
                              </div>
                              <div class='col-md-4'>
                                <select id="rent_currency" class="form-control" name='rent_currency' placeholder="العملة" >
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
                              <option value=''></option>
                              <option value='For families'>للعوائل</option>
                              <option value='For singles'>للعزاب</option>
                              <option value='For both'>عوائل و عزاب</option>
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
                              <option value='Standard'>عادي</option>
                              <option value='Air conditioned'>مكيف</option>
                              <option value='Furnished and air conditioned'>موثث و مكيف</option>
                            </select>
                          </div>
                        </div>

                        <div class="col-md-6">
                          <div class="form-group">
                            <label for="room_slot">الغرفة\الفتحات</label>
                            <select id="room_slot" class="form-control" name='room_slot'>
                               <option> </option>
                               <option>1</option>
                              <option>2</option>
                            </select>
                          </div>
                        </div>

                        <div class="col-md-6">
                          <div class="form-group">
                            <label for="number_of_bathrooms">دورات مياه</label>
                            <select id="number_of_bathrooms" class="form-control" name='number_of_bathrooms' required>
                              <option>1</option>
                              <option>2</option>
                            </select>
                          </div>  
                        </div>

                        <div class="col-md-6">
                          <div class="form-group">
                            <label for="unit_activity">نشاط الوحدة</label>
                            <select class="form-control" id="unit_activity" placeholder="" name='unit_activity'>
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
                            <label for="number_of_copies">عدد النسخ</label>
                            <input type="number" class="form-control" id="number_of_copies" placeholder="" name="number_of_copies">
                          </div>
                        </div>
                        <div class="col-md-6">
                          <input type='submit' class='btn btn-default'value='ارسال '/>
                        </div>
                        
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
    <section>
      @include('ar.modals.property_modal')
    </section>
    

   

 
    <footer id="footer">
       @include('ar.ar_footer')
    </footer>
    <script type="text/javascript">

      $(document).ready(function(){
          $('#property').typeahead({
              source: [
                @foreach( $properties as $property)
                  {  name: '{{$property->name}}' },
                @endforeach 
                  
              ]
          });

          $("#annual_rent_amount").change(function(){
              com_val = $(this).val()*(5/200);

            $("#commission_amount").val(com_val);
          })
            
          

          
            // $('#property').keyup(function(){
            //     $.ajax({
            //        url: "{{ url('/search_link') }}",
            //        data: {
            //           doctype:'property',
            //           text: $(this).val()
            //        },
            //        type: "POST",
            //       beforeSend: function(request){request.setRequestHeader('X-CSRF-TOKEN', '{!! csrf_token() !!}')
            //                                    }
            //       ,success: function(msg) {
            //            console.log(msg);
                      
            //         }
            //     });
              
              
            // });


         
      });
    </script>

    </body>
@endsection