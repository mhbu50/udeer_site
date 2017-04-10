@section('lang','ar')
@section('module','property_management')
@section('page_title','property_docs')
@extends('template')

@section('css_page')
@endsection
@section('js_page')
    <script type="text/javascript">
      
    </script>
@endsection

@section('content')
    <h1 class="page-title"> ادارة الاملاك العقارية</h1>
    <div class="row">
      <div class="col-md-12">
        @include('ar.tabs.property',['property_name' => $property_name])
        <div class="portlet light bordered">
          <div class="portlet-title">
            <div class="caption font-red-sunglo">
                <h3>المستندات</h3>
            </div>
            <div class="actions">
                <a class="btn blue btn-outline" href="{{action('DocsController@create',['doctype' => 'property','docname' => $property_name] )}}">
                    اضافة
                    <i class="fa fa-plus"></i>
                </a>
                <a class="btn red btn-outline c-btn-tp" href="javascript:;" id="del-btn" doctype="File">
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
                    <table class="table table-strip"> 
                        <thead> 
                            <tr> 
                                <th>#</th>  
                                <th>تاريخ</th> 
                                <th>نوع المستند</th> 
                                <th></th> 
                            </tr> 
                        </thead> 
                        <tbody> 
                            
                             @for ($i = 0; $i < count($result); $i++)
                             <tr>
                                <td><a href="{!!action('DocsController@show',['name'=>$result[$i]->name])!!}">{{ $result[$i]->file_name }}</a></td>
                                <td>{{$result[$i]->creation}}</td> 
                                <td>{{$result[$i]->file_type or ''}}</td>
                                <td class="bs-checkbox">
                                <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline del-check-lab"><input data-index="0" name="btSelectItem" type="checkbox" class='del-check hide' id="{!!$result[$i]->name!!}"><span></span></label>
                                </td>
                            </tr> 
                            @endfor                  

                            
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

