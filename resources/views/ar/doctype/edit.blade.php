@section('module','property_management')

@extends('template')
  
@section('css_page')

@endsection
@section('js_page')
    <script src="/assets/global/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js" type="text/javascript"></script>  
    <script src="/assets/pages/scripts/components-date-time-pickers.min.js" type="text/javascript"></script>
    <script type="text/javascript">
    $(document).ready(function(){ 
      doc_data = {!!json_encode($doc_data)!!}
      console.log(doc_data)
      set_value(doc_data)

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
                <h3>تعديل {{$doctype}} : {{$docname}}</h3>
            </div>
          </div>
          <div class="portlet-body form">
            <form method='post' action="/doctype/{{$doctype}}/{{$docname}}/edit" enctype="multipart/form-data">
                <input type='hidden' name='_token' value="{!! csrf_token() !!}">   
                @foreach($doctype_fields as $doctype_fields)
                <div class="col-md-6">
                    <div class="form-group form-md-line-input form-md-floating-label">
                        <input type="text" class="form-control" id="{{$doctype_fields->fieldname}}" placeholder="" name="{{$doctype_fields->fieldname}}">
                        <label for="">{{$doctype_fields->fieldname}}</label>
                    </div>
                </div>
                @endforeach
                <div class="form-actions noborder">
                  <div class="col-md-12">
                    <input type="submit" class="btn blue" value="حفظ"></button>
                    <button type="button" class="btn default">الغاء</button>
                  </div>
                </div>
            </form>    
          </div>

        </div>
      </div>
    </div>
@endsection
