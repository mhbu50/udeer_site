
@section('lang','ar')
@section('module','property_management')
@section('page_title','property_edit')
@section('page_type','edit_page')
@extends('template')

@section('css_page')

@endsection
@section('js_page')
    <script src="/assets/global/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js" type="text/javascript"></script>  
    <script src="/assets/pages/scripts/components-date-time-pickers.min.js" type="text/javascript"></script>
    <script type="text/javascript">
        $(document).ready(function(){
          property_expense = {!!json_encode($property_expense)!!}
          set_value(property_expense)
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
                {{$property_expense->name}}
            </div>
          </div>
          <div class="portlet-body form">
               @include('ar.property_expenses.property_expenses_form',['action' => action('Property_expenseController@update',$property_expense->name)])
          </div>

        </div>
      </div>
    </div>
    
@endsection
