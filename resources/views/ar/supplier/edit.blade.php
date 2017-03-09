@section('module','property_management')
@section('page_title','supplier')
@extends('template')

@section('css_page')

@endsection
@section('js_page')
    <script type="text/javascript">
        $(document).ready(function(){
          supplier = {!!json_encode($supplier)!!}
          set_value(supplier)
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
                {{$supplier->name}}
            </div>
          </div>
          <div class="portlet-body form">
               @include('ar.supplier.supplier_form',['action' => action('SupplierController@update',$supplier->name)])
          </div>

        </div>
      </div>
    </div>
@endsection

