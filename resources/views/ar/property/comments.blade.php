@section('lang','ar')
@section('module','property_management')
@section('page_title','property_comment')
@extends('template')

@section('css_page')
    <link href="/assets/global/plugins/bootstrap-table/bootstrap-table.min.css" rel="stylesheet" type="text/css" />

    <link href="/assets/global/plugins/datatables/datatables.min.css" rel="stylesheet" type="text/css" />
    <link href="/assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap-rtl.css" rel="stylesheet" type="text/css" />

@endsection
@section('js_page')
    <script src="../assets/global/plugins/bootstrap-tabdrop/js/bootstrap-tabdrop.js" type="text/javascript"></script>
    <script src="/assets/pages/scripts/table-bootstrap.min.js" type="text/javascript"></script>
    <script src="/assets/global/plugins/bootstrap-table/bootstrap-table.min.js" type="text/javascript"></script>
@endsection

@section('content')
    <h1 class="page-title"> ادارة الاملاك العقارية</h1>
    <div class="row">
      <div class="col-md-12">
        @include('ar.tabs.property')
        <div class="portlet light bordered ">
         
              <div class="portlet-title">
                <div class="caption font-red-sunglo">
                    ملاحظات
                </div>
              </div>
              <div class="portlet-body">
                  <div class="mt-element-list">

                      
                      <div class="mt-list-container list-news">
                          <ul>
                            @for ($i = 0; $i < count($result); $i++)
                              <li class="mt-list-item">
                                  <div class="list-datetime bold uppercase font-green"> {{$result[$i]->creation}} </div>
                                  <div class="list-item-content">
                                      <h3 class="uppercase">
                                          {{$result[$i]->user}}
                                      </h3>
                                      <p>{{$result[$i]->content}}</p>
                                  </div>
                              </li>
                            @endfor   
                              
                          </ul>
                      </div>
                      <form method='post' action="{!!action('CommentController@store',['doctype' => 'property','name' => $property_name])!!}" enctype="multipart/form-data">
                        <input type='hidden' name='_token' value="{!! csrf_token() !!}">
                          <div class="form-group form-md-line-input form-md-floating-label">
                            <textarea class="form-control " id="content" placeholder="اضافة ملاحظة" name="content"></textarea>
                          </div>  
                          <div class="form-group">
                            <input type="submit" class="btn blue btn-outline " value="ارسال"/>
                          </div>
                           
                        </form>
                  </div>

          </div>

        </div>
      </div>
    </div>
   
    
@endsection








