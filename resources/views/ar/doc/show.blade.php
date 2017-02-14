@section('module','property_management')
@extends('template')

@section('css_page')
    <link href="/assets/global/plugins/bootstrap-fileinput/bootstrap-fileinput.css" rel="stylesheet" type="text/css" />

@endsection
@section('js_page')
  <script src="/assets/global/plugins/bootstrap-fileinput/bootstrap-fileinput.js" type="text/javascript"></script>
@endsection

@section('content')
    <h1 class="page-title"> ادارة الاملاك العقارية</h1>
    <div class="row">
      <div class="col-md-12">
        <div class="portlet light bordered">
          <div class="portlet-title">
            <div class="caption font-red-sunglo">
                 {{$doc->name}}
            </div>
            
          </div>
          <div class="portlet-body text-center">
               
                    <img src="http://localhost:8002{{$doc->file_url}}" max-width="100%">
                
          </div>

        </div>
      </div>
    </div>
    @include('ar.modals.owner_modal')
    
@endsection
