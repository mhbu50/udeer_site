@section('module','property_management')
@section('page_title','supplier')
@extends('template')
  
@section('css_page')

@endsection
@section('js_page')
@endsection

@section('content')
    <h1 class="page-title"> ادارة الاملاك العقارية</h1>
    <div class="row">
      <div class="col-md-12">
        <div class="portlet light bordered">
          <div class="portlet-title">
            <div class="caption font-red-sunglo">
                <h3>اضافة مزود خدمة</h3>
            </div>
          </div>
          <div class="portlet-body form">
               @include('ar.supplier.supplier_form',['action' => action('SupplierController@store')])
          </div>

        </div>
      </div>
    </div>
@endsection
