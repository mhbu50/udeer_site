@section('module','property_management')
@section('page_title','property_create')
@section('page_type','create_page')
@extends('template')

@section('css_page')
    

    

@endsection
@section('js_page')
    
    
    <script type="text/javascript">
      $(document).ready(function(){
        google.maps.event.addDomListener(window, 'load', set_map(50.0301574,26.3320884));
        $(".commission").hide();
        
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
