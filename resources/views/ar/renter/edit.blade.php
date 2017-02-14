@section('module','property_management')
@extends('template')

@section('css_page')

@endsection
@section('js_page')
    <script type="text/javascript">
        $(document).ready(function(){
          renter = {!!json_encode($renter)!!}
          set_value(renter)
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
                {{$renter->name}}
            </div>
          </div>
          <div class="portlet-body form">
               @include('ar.renter.renter_form',['action' => action('RenterController@edit',$renter->name)])
          </div>

        </div>
      </div>
    </div>
    
@endsection
