@section('module','property_management')
@section('page_title','lease')
@section('page_type','create_page')
@extends('template')
  
@section('css_page')
   
    <link href="/assets/global/plugins/bootstrap-summernote/summernote.css" rel="stylesheet" type="text/css" />
@endsection
@section('js_page')
    <script src="/assets/global/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js" type="text/javascript"></script>  
    <script src="/assets/pages/scripts/components-date-time-pickers.min.js" type="text/javascript"></script>

    <script src="/assets/global/plugins/bootstrap-summernote/summernote.min.js" type="text/javascript"></script>
    <script type="text/javascript">
    $(document).ready(function(){
      terms = {!!json_encode($terms)!!}
      $('#terms').hide();
      
      $("#terms_group").change(function() {
        // $('#terms').summernote({height: 300});
        $("#terms").summernote("code", terms[this.value]);
          
          
        })

        $('#instalment_number').change(function(){
          $("#instalment_amount").empty()
          for(count=0;count<this.value;count++){
            $("#instalment_amount").append('<div class="col-md-6 .col-md-offset-6"><div class="form-group form-md-line-input form-md-floating-label"><input class="form-control form-control-inline " size="16" type="number"><label >دفعة رقم '+(count+1)+'</label></div></div>');
          }
          
          

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
                <h3>اضافة عقد داخلى</h3>
            </div>
          </div>
          <div class="portlet-body form">
               @include('ar.lease.lease_form',['action' => action('LeaseController@store')])
          </div>

        </div>
      </div>
    </div>
    @include('ar.modals.property_modal')
    @include('ar.modals.property_unit_modal')
    @include('ar.modals.renter_modal')
    
@endsection
