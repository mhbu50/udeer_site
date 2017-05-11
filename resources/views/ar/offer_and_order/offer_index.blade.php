@section('lang','ar')
@section('module','offer')
@extends('template')

@section('css_page')

@endsection
@section('js_page')
   
@endsection

@section('content')
    <h1 class="page-title"> العروض و الطلبات</h1>
    <div class="row">
      <div class="col-md-12">
        <div class="portlet light bordered ">
          <div class="portlet-title">
            <div class="caption font-red-sunglo">
                اضافة كافة العروض
            </div>
            
          </div>
          <div class="portlet-body form">
            <div class="">
              <div class="row">
                 
                
                
                 <div class="col-md-8 col-md-offset-2">



                     <div class="col-lg-12">

                         <input type="submit" class="btn  btn-success " value=" اضافة عرض عقاري  " style="float:left">
                     </div>
                     <br /><br /><br /><br />
                    
                     <div class="col-md-10">

                         <div class="input-group">
                             <div class="input-group-btn">
                                 <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">فرز بواسطة <span class="caret"></span></button>
                                 <ul class="dropdown-menu" role="menu">
                                     <li><a href="#">ادني سعر</a></li>
                                     <li><a href="#"> اعلي سعر</a></li>
                                     <li><a href="#">  تاريخ الانشاء</a></li>
                                     <li class="divider"></li>

                                 </ul>
                             </div><!-- /btn-group -->
                             <input type="text" class="form-control">
                         </div><!-- /input-group -->

                     </div><!-- /.col-lg-6 -->


                     <div class="col-md-12">
                         <div class="form-group form-md-line-input form-md-floating-label">
                             <label for="property_advantage">  نوع العرض </label>
                         </div>
                         <div class="form-group form-md-line-input form-md-floating-label">
                             <label for="property_advantage">  نوع العقار </label>
                         </div>
                         <div class="form-group form-md-line-input form-md-floating-label">
                             <label for="property_advantage">  غرف النوم  </label>
                         </div>
                         <div class="form-group form-md-line-input form-md-floating-label">
                             <label for="property_advantage">  السعر   </label>
                         </div>
                         <div class="form-group form-md-line-input form-md-floating-label">
                             <label for="property_advantage">  المساحة   </label>
                         </div>
                     </div>




                     <br /><br /><br /><br />


                 </div><!--End Row -->
                     
                 
                        

                     </div>
               

            </div>
            </div>
           
            
           
          </div>

        </div>
      </div>
    </div>

    
@endsection


