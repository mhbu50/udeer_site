@section('module','property_management')
@section('page_title','external_lease')
@extends('template')
  
@section('css_page')
<link href="/assets/global/plugins/bootstrap-summernote/summernote.css" rel="stylesheet" type="text/css" />
@endsection
@section('js_page')
    <script src="/assets/global/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js" type="text/javascript"></script>  
    
      <script src="/assets/global/plugins/bootstrap-summernote/summernote.min.js" type="text/javascript"></script>
      <script type="text/javascript">
      $(document).ready(function(){
        terms = {!!json_encode($terms)!!}
        $('#terms').hide();
          $("#terms_group").change(function() {
            // $('#terms').summernote({height: 300});
            $("#terms").summernote("code", terms[this.value]);
            data = {!!json_encode( session()->getOldInput())!!}
            set_value(data)
            
            
          })
        })
        
      </script>
@endsection

@section('content')
    <h1 class="page-title"> ادارة الاملاك العقارية</h1>
    <div class="row">
      <div class="col-md-12">
        <div class="portlet light bordered">
          <div class="portlet-title">
            <div class="caption font-red-sunglo">
                <h3>اضافة عقد خارجي</h3>
            </div>
          </div>
          <div class="portlet-body form">
               @include('ar.external_lease.external_lease_form',['action' => action('External_leaseController@store')])
          </div>

        </div>
      </div>
    </div>
    
@endsection
