@section('module','property_management')
@section('page_title','debt')
@extends('template')
  
@section('css_page')

@endsection
@section('js_page')
    <script src="/assets/global/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js" type="text/javascript"></script>  
    <script src="/assets/pages/scripts/components-date-time-pickers.min.js" type="text/javascript"></script>
    <script type="text/javascript">
    $(document).ready(function(){ 
      data = {!!json_encode( session()->getOldInput())!!}
      set_value(data)
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
                <h3>اضافة دور</h3>
            </div>
          </div>
          <div class="portlet-body form">
              <form method='post' action="/role/create" enctype="multipart/form-data">
                <input type='hidden' name='_token' value="{!! csrf_token() !!}">   
                <div class="col-md-6">
                    <div class="form-group form-md-line-input form-md-floating-label">
                        <input type="text" class="form-control" id="role_name" placeholder="" name="role_name" >
                        <label for="">اسم الدور</label>
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
