@section('module','property_management')
@section('page_title','lease')
@extends('template')

@section('css_page')

@endsection
@section('js_page')
    <script src="/assets/global/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js" type="text/javascript"></script>  
    <script src="/assets/pages/scripts/components-date-time-pickers.min.js" type="text/javascript"></script>
    <script type="text/javascript">
        $(document).ready(function(){
            $('#property').val('{{$property_unit->property}}');
            $('#property_unit').val('{{$property_unit->name}}');
            $('#property, #property_unit').attr('readonly', true);
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
                <h3>اضافة عقد</h3>
            </div>
          </div>
          <div class="portlet-body form">
               @include('ar.lease.lease_form',['action' => action('Property_unitController@create_lease',$property_unit->name)])
          </div>

        </div>
      </div>
    </div>
    
@endsection
