@section('module','property_management')
@section('page_title','renter')
@extends('template')
  
@section('css_page')

@endsection
@section('js_page')
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
                <h3>اضافة مستأجر</h3>
            </div>
          </div>
          <div class="portlet-body form">
               @include('ar.renter.renter_form',['action' => action('RenterController@store')])
          </div>

        </div>
      </div>
    </div>
@endsection
