@section('lang','ar')
@section('module','property_management')
@section('page_title','unit_index')
@extends('template')

@section('css_page')
    <link href="/assets/global/plugins/bootstrap-table/bootstrap-table.min.css" rel="stylesheet" type="text/css" />

    <link href="../assets/global/plugins/datatables/datatables.min.css" rel="stylesheet" type="text/css" />
    <link href="../assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap-rtl.css" rel="stylesheet" type="text/css" />

@endsection
@section('js_page')
    <script src="/assets/pages/scripts/table-bootstrap.min.js" type="text/javascript"></script>
    <script src="/assets/global/plugins/bootstrap-table/bootstrap-table.min.js" type="text/javascript"></script>
@endsection

@section('content')
    <h1 class="page-title"> ادارة الاملاك العقارية</h1>
    <div class="row">
      <div class="col-md-12">
        <div class="portlet light bordered ">
          <div class="portlet-title">
            <div class="caption font-red-sunglo">
                الوحدات
            </div>
            <div class="actions">

               
                <a class="btn blue btn-outline" href="/property_unit/create">
                    اضافة
                    <i class="fa fa-plus"></i>
                </a>
                <a class="btn red btn-outline c-btn-tp" href="javascript:;" id="del-btn" doctype="property%20unit">
                    مسح
                    <i class="icon-trash"></i>
                    <input type='hidden' name='_token' class="token" value="{!! csrf_token() !!}" />
                    <input name="names" id="del-arr" hidden/>
                </a>
                <a class="btn btn-outline  buttons-html5 btn yellow btn-outline" tabindex="0" aria-controls="sample_1" href="#"><span>اكسل</span></a>
            </div>
            
            
          </div>
          <div class="portlet-body form">
            @if(count($result))
            <table class="table table-hover table-striped"> 
                <thead> 
                    <tr> 
                        <th><div class="th-inner ">#</div></th>
                        <th><div class="th-inner ">رقم الوحدة</div></th>  
                        <th><div class="th-inner ">العقار</div></th> 
                        <th></th> 
                    </tr> 
                </thead> 
                <tbody> 
                    <tr>
                     @for ($i = 0; $i < count($result); $i++)
                        <th scope="row"><a href="{!!action('Property_unitController@edit',['name'=>$result[$i]->name])!!}">{{ $result[$i]->name  }}</a></th>
                        <td>{{$result[$i]->unit_number}}</td> 
                        <td>{{$result[$i]->property}}</td>
                        <td class="bs-checkbox">
                            <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline del-check-lab "><input data-index="0" name="btSelectItem" type="checkbox" class='del-check' id="{!!$result[$i]->name!!}"><span></span></label>
                        </td> 
                    </tr>

                        @endfor
                                               

                    </tr> 
                </tbody> 
            </table>
            @else
                <p class="bg-warning">لا يوجد </p>
            @endif
          </div>

        </div>
      </div>
    </div>
    @include('ar.modals.confirm_modal')
    
@endsection




























