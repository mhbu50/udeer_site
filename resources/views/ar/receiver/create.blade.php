@section('module','property_management')
@section('page_title','receiver')
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
                 <h3>اضافة محصل</h3>
            </div>
          </div>
          <div class="portlet-body form">
               @include('ar.receiver.receiver_form',['action' => action('ReceiverController@create')])
          </div>
        </div>
      </div>
    </div>
   
@endsection
