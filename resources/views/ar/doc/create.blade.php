@section('module','property_management')
@extends('template')

@section('css_page')
    <link href="/assets/global/plugins/bootstrap-fileinput/bootstrap-fileinput.css" rel="stylesheet" type="text/css" />

@endsection
@section('js_page')
  <script src="/assets/global/plugins/bootstrap-fileinput/bootstrap-fileinput.js" type="text/javascript"></script>
  <script type="text/javascript">
    $(document).ready(function(){ 
      data = {!!json_encode( session()->getOldInput())!!}
      set_value(data)
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
                اضافة مستند
            </div>
            
          </div>
          <div class="portlet-body form">
               <form method='post' action="{!!action('DocsController@store',['doctype'=>$doctype,'docname'=>$docname ])!!}" enctype="multipart/form-data">
                  <input type='hidden' name='_token' value="{!! csrf_token() !!}">
                    <div class="col-md-12">
                      <div class="fileinput fileinput-new" data-provides="fileinput">
                          <div class="input-group input-large">
                              <div class="form-control uneditable-input input-fixed input-medium" data-trigger="fileinput">
                                  <i class="fa fa-file fileinput-exists"></i>&nbsp;
                                  <span class="fileinput-filename"> </span>
                              </div>
                              <span class="input-group-addon btn default btn-file">
                                  <span class="fileinput-new"> اختر ملف </span>
                                  <span class="fileinput-exists"> تبديل </span>
                                  <input type="file" name="image"> </span>
                              <a href="javascript:;" class="input-group-addon btn red fileinput-exists" data-dismiss="fileinput"> حذف </a>
                          </div>
                      </div>
                    </div>
                    
                    <div class="col-md-6">
                        <!--Simple Select with Search-->
                        <div class="form-group pmd-textfield pmd-textfield-floating-label">
                            <label>نوع الملف</label>
                            <div class="col-md-11">
                                <div class="row">
                                    <select class="select2-c pmd-select2 form-control" id="file_type" doctype="file_type" doc-label="type_name" name="file_type">
                                        <option></option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-1">
                                <div class="row">
                                    <span class="input-group-btn btn-left">
                                            <a class="btn blue btn-outline" href="#" data-toggle="modal" data-target="#File_type_Modal"><i class="fa fa-plus"></i></a>
                                    </span>
                                </div>    
                            </div>
                        </div>               
                    </div>    
                    
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
    @include('ar.modals.file_type_modal')
    
@endsection



