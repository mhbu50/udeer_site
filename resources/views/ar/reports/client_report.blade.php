@section('lang','ar')
@section('module','reports')
@extends('template')

@section('css_page')

@endsection
@section('js_page')
   
@endsection

@section('content')
    <h1 class="page-title"> ادارة الاملاك العقارية</h1>
    <div class="row">
      <div class="col-md-12">
        <div class="portlet light bordered ">
          <div class="portlet-title">
            <div class="caption font-red-sunglo">
                لتقرير المالي
            </div>
            
          </div>
          <div class="portlet-body form">
            <div class="row">
                <div class="col-md-6 col-md-offset-4">
                   <div class="form-group form-md-line-input form-md-floating-label">
                       <select id="commission_type" class="form-control" name="commission_type">
                           <option value="">  </option>
                           <option value="">الملاك</option>
                           <option value="">المستاجرين</option>
                           <option value="">مزود الخدمة </option>
                       </select>
                       <label for="commission_type">اختر العميل </label>
                   </div>
                    
                  
                
              
                   <input type="submit" class="btn   btn-danger" value="تصدير PDF ">

                   <input type="submit" class="btn  btn-primary" value="تصدير Excel">
                 

               </div>   
            </div>
           
          </div>

        </div>
      </div>
    </div>

    
@endsection


