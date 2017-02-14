@section('module','property_management')
@extends('template')

@section('css_page')
    

    

@endsection
@section('js_page')
    <script src="/assets/global/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js" type="text/javascript"></script>  
    <script src="/assets/pages/scripts/components-date-time-pickers.min.js" type="text/javascript"></script>
    <script src="/assets/global/plugins/typeahead/handlebars.min.js" type="text/javascript"></script>
    <script src="/assets/global/plugins/typeahead/typeahead.bundle.min.js" type="text/javascript"></script>
    <script type="text/javascript">
      $(document).ready(function(){
        google.maps.event.addDomListener(window, 'load', set_map(50.0301574,26.3320884));

          // var bestPictures = new Bloodhound({
          //   datumTokenizer: Bloodhound.tokenizers.obj.whitespace('name'),
          //   queryTokenizer: Bloodhound.tokenizers.whitespace,
          //   prefetch: '/find/property/p',
          //   remote: {
          //     url: '/find/property/%QUERY',
          //     wildcard: '%QUERY'
          //   }
          // });
          var arabicPhrases = new Bloodhound({
            datumTokenizer: Bloodhound.tokenizers.whitespace,
            queryTokenizer: Bloodhound.tokenizers.whitespace,
            local: [
              "الإنجليزية",
              "نعم",
              "لا",
              "مرحبا",
              "أهلا"
            ]
          });
      

          $(' .typeahead').typeahead({
            hint: false
          },
          {
            name: 'arabic-phrases',
            source: arabicPhrases
          });
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
                اضافة عقار
            </div>
            
          </div>
          <div class="portlet-body form">
               @include('ar.property.property_form',['action' => action('PropertyController@store')])
          </div>

        </div>
      </div>
    </div>
    @include('ar.modals.owner_modal')
    
@endsection
