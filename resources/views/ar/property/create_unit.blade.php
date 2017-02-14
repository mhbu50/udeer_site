@section('module','property_management')
@extends('template')

@section('css_page')

@endsection
@section('js_page')
  <script type="text/javascript">
    $(document).ready(function(){
      $("#unit_number").val("{{$last_unit_number+1}}")
      $("#unit_number").addClass("edited");
      $("#property").val("{{$property_name}}");
      $("#property").prop('readonly', true);

      $("#annual_rent_amount").change(function(){
          com_val = $(this).val()*(5/200);

        $("#commission_amount").val(com_val);
      })
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
                <h3>اضافة وحدة</h3>
            </div>
          </div>
          <div class="portlet-body form">
               @include('ar.property_unit.property_unit_form',['action' => action('PropertyController@store_unit')])
          </div>

        </div>
      </div>
    </div>
    
@endsection
