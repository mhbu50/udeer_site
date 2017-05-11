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
                مشاركة وحدة
            </div>
            
          </div>
          <div class="portlet-body form">
            <div class="row">
               
               <div class="col-md-8">



                   
                   <div class="col-md-10">

                           <div class="form-group form-md-line-input form-md-floating-label">
                               <select id="commission_type" class="form-control" name="commission_type">
                                   <option value="">  </option>
                                   <option value="percentage">#ID</option>
                                   <option value="cash">ID </option>
                               </select>
                               <label for="commission_type"> اختر المكتب المشارك    </label>
                           </div>
                       <br />
                       <br />
                   <br />
                       <input type="submit" class="btn  btn-primary" value=" مشاركة عقار ">
                       <input type="submit" class="btn   btn-danger" value=" مشاركة وحدة ">
                       <input type="submit" class="btn   btn-danger" value=" صيانة تعاونية ">
                     

                   </div><!-- /.col-lg-10 -->




               




                   <br /><br /><br /><br />


               </div><!--End Row -->
                   
               
                      

                   </div>
             

          </div>
            
           
          </div>

        </div>
      </div>
    </div>

    
@endsection


