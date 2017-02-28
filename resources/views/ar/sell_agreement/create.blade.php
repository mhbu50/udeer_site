@section('module','property_management')
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
                <h3>اضافة عقد بيع و شراء</h3>
            </div>
          </div>
          <div class="portlet-body form">
               @include('ar.sell_agreement.sell_agreement_form',['action' => action('Sell_agreementController@store')])
          </div>

        </div>
      </div>
    </div>
    
@endsection
