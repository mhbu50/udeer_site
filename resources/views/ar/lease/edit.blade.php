@section('module','property_management')
@extends('template')

@section('css_page')

@endsection
@section('js_page')
    <script src="/assets/global/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js" type="text/javascript"></script>  
    <script src="/assets/pages/scripts/components-date-time-pickers.min.js" type="text/javascript"></script>
    <script type="text/javascript">
        $(document).ready(function(){
          lease = {!!json_encode($lease)!!}
          set_value(lease)
          $(".nav-tabs #show").addClass('active');
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
                {{$lease->name}}
            </div>
          </div>
          <div class="portlet-body form">
               @include('ar.lease.lease_form',['action' => action('LeaseController@edit',$lease->name)])
          </div>

        </div>
      </div>
    </div>
    
@endsection

