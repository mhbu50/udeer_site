@section('module','setting')
@section('page_title','setting')
@extends('template')

@section('css_page')

@endsection
@section('js_page')
    <script src="/assets/global/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js" type="text/javascript"></script>  
    <script src="/assets/pages/scripts/components-date-time-pickers.min.js" type="text/javascript"></script>
    <script type="text/javascript">
        $(document).ready(function(){
          company = {!!json_encode($data['company']->data)!!}
          user = {!!json_encode($data['user']->data)!!}
          if(!company.longitude && !company.latitude){
            company.longitude = 50.0301574
            company.latitude = 26.3320884
          }
          google.maps.event.addDomListener(window, 'load', set_map(company.longitude,company.latitude));
          console.log(user)
          set_value(user)
          
        });
    </script>
@endsection
@section('content')
    <h1 class="page-title"> ادارة الاملاك العقارية</h1>
    <div class="row">
      <div class="col-md-12">
        <div class="portlet light bordered">
          <div class="portlet-title">
            <div class="caption font-red-sunglo">
                <h3>اعدادات</h3>
            </div>
          </div>
          <div class="portlet-body form">
               <form method='post' action="/setting/account" enctype="multipart/form-data">
                <input type='hidden' name='_token' value="{!! csrf_token() !!}"> 
                <div class="col-md-7">
                    <div class="form-group form-md-line-input form-md-floating-label">
                        <input type="text" class="form-control" id="first_name" placeholder="" name="first_name" >
                        <label for="">اسم المستخدم</label>
                    </div>
                </div>
                <div class="col-md-7 ">
                    <div class="form-group form-md-line-input form-md-floating-label">
                        <input type="email" class="form-control" id="email" placeholder="" name="email" readonly>
                        <label for="">البريد الالكتروني</label>
                    </div>
                </div>
                <div class="col-md-7">
                    <div class="form-group form-md-line-input form-md-floating-label">
                        <input type="text" class="form-control" id="mobile_number" placeholder="" name="mobile_number" >
                        <label for="">رقم الجوال</label>
                    </div>
                </div>
                <div class="col-md-7">
                  @if(isset($data['company']->data->logo))
                    <img src="http://{{env('SERVER_ADD', '52.8.230.142').$data['company']->data->logo}}" max-width="100%">
                  @endif
                </div>
                <div class="col-md-7">
                    <div class="form-group form-md-line-input form-md-floating-label">
                        <input type="file" class="form-control" id="image" placeholder="" name="image" >
                        <label for="">شعار الشركة</label>
                    </div>
                </div>
                <div class="col-md-12 ">
                  <div class="form-group">
                    <label for="">موقع الشركة</label>
                    <div id="mapCanvas"></div>
                    <input type="text" id="longitude" name="longitude" hidden>
                    <input type="text" id="latitude" name="latitude" hidden>
                  </div>
                </div>
                <div class="form-actions noborder">
                  <div class="col-md-12">
                    <input type="submit" class="btn blue" value="حفظ"/>
                    <button type="button" class="btn default">الغاء</button>
                  </div>
                </div>
              </form>
          </div>

        </div>
      </div>
    </div>
@endsection