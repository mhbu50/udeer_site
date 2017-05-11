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
                تقرير دفعات المستحقة
            </div>
            
          </div>
          <div class="portlet-body form">
            <div class="row">
                 <div class="col-md-6 col-md-offset-4">
                   <div class="form-group form-md-line-input form-md-floating-label">
                       <select id="commission_type" class="form-control" name="commission_type">
                           <option value="">  </option>
                           <option value="percentage">option 1</option>
                           <option value="cash">option 2</option>
                       </select>
                       <label for="commission_type">اختر المالك </label>
                   </div>

                   <div class="form-group form-md-line-input form-md-floating-label">
                       <select id="commission_type" class="form-control" name="commission_type">
                           <option value="">  </option>
                           <option value="percentage">option 1</option>
                           <option value="cash">option 2</option>
                       </select>
                       <label for="commission_type"> اختر المستاجر     </label>
                   </div>
                   <div class="form-group form-md-line-input form-md-floating-label">
                       <select id="commission_type" class="form-control" name="commission_type">
                           <option value="">  </option>
                           <option value="percentage">option 1</option>
                           <option value="cash">option 2</option>
                       </select>
                       <label for="commission_type"> اختر العقار     </label>
                   </div>

                   <div class="form-group form-md-line-input form-md-floating-label">
                       <select id="commission_type" class="form-control" name="commission_type">
                           <option value="">  </option>
                           <option value="percentage">option 1</option>
                           <option value="cash">option 2</option>
                       </select>
                       <label for="commission_type"> نوع الملكية   </label>
                   </div>



                   <div class="form-group form-md-line-input form-md-floating-label">
                       <select id="commission_type" class="form-control" name="commission_type">
                           <option value="">  </option>
                           <option value="percentage">option 1</option>
                           <option value="cash">option 2</option>
                       </select>
                       <label for="commission_type"> اختر العقار    </label>
                   </div>
                   <div class="form-group form-md-line-input form-md-floating-label">
                       <div class="input-icon right">
                           <input class="form-control form-control-inline date-picker" size="16" type="text" value="" id="construction_date" name="construction_date">
                           <i class="fa fa-calendar"></i>
                           <label for="construction_date"> من تاريخ </label>

                       </div>
                   </div>
                   <div class="form-group form-md-line-input form-md-floating-label">
                       <div class="input-icon right">
                           <input class="form-control form-control-inline date-picker" size="16" type="text" value="" id="construction_date" name="construction_date">
                           <i class="fa fa-calendar"></i>
                           <label for="construction_date">الي تاريخ  </label>

                       </div>
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