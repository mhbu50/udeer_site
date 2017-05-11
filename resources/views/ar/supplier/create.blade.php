@section('module','property_management')
@section('page_title','supplier')
@extends('template')
  
@section('css_page')

@endsection
@section('js_page')
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

        
         <div class="col-md-10 col-md-offset-1">


             
             <div style="background-color:#ffffff" >
                 <table class="table table-bordered">
                     <thead>
                         <tr class="info">
                             <td>اضافة مزود الخدمة</td>

                         </tr>
                     </thead>
                     <tr>
                         <td>
                             <div class="form-group form-md-line-input form-md-floating-label">
                                 <input type="text" class="form-control" rows="4" id="property_advantage" name="property_advantage">
                                 <label for="property_advantage" class="text-center">  الاسم الحقيقي    </label>
                             </div>
                        
                             <div class="form-group form-md-line-input form-md-floating-label">
                                 <input type="text" class="form-control" rows="4" id="property_advantage" name="property_advantage">
                                 <label for="property_advantage" class="text-center">  رقم الهوية   </label>
                             </div>
                        
                             <div class="form-group form-md-line-input form-md-floating-label">
                                 <input type="text" class="form-control" rows="4" id="property_advantage" name="property_advantage">
                                 <label for="property_advantage" class="text-center">   رقم الجوال    </label>
                             </div>
                         
                             <div class="form-group form-md-line-input form-md-floating-label">
                                 <input type="text" class="form-control" rows="4" id="property_advantage" name="property_advantage">
                                 <label for="property_advantage" class="text-center">  البريد الالكتروني</label>
                             </div>
                             <div class="form-group form-md-line-input form-md-floating-label">
                                 <select id="commission_type" class="form-control" name="commission_type">
                                     <option value="">  </option>
                                     <option value="percentage"></option>
                                     <option value="cash"> </option>
                                 </select>
                                 <label for="commission_type"> اسم البنك   </label>
                             </div>

                             <div class="form-group form-md-line-input form-md-floating-label">
                                 <input type="text" class="form-control" rows="4" id="property_advantage" name="property_advantage">
                                 <label for="property_advantage" class="text-center">   رقم الحساب    </label>
                             </div>

                             <div class="form-group form-md-line-input form-md-floating-label">
                                 <input type="text" class="form-control" rows="4" id="property_advantage" name="property_advantage">
                                 <label for="property_advantage" class="text-center">  رقم الهاتف </label>
                             </div>
                             <div class="form-group form-md-line-input form-md-floating-label">
                                 <input type="text" class="form-control" rows="4" id="property_advantage" name="property_advantage">
                                 <label for="property_advantage" class="text-center">  رقم الفاكس </label>
                             </div>
                             <div class="form-group form-md-line-input form-md-floating-label">
                                 <input type="text" class="form-control" rows="4" id="property_advantage" name="property_advantage">
                                 <label for="property_advantage" class="text-center">  صندوق البريد  </label>
                             </div>
                             <div class="form-group form-md-line-input form-md-floating-label">
                                 <input type="text" class="form-control" rows="4" id="property_advantage" name="property_advantage">
                                 <label for="property_advantage" class="text-center">   العنوان </label>
                             </div>
                             <div class="form-group form-md-line-input form-md-floating-label">
                                 <select id="commission_type" class="form-control" name="commission_type">
                                     <option value="">  </option>
                                     <option value="percentage"></option>
                                     <option value="cash"> </option>
                                 </select>
                                 <label for="commission_type" class="text-center"> الكفيل    </label>
                                <br />
                                 <!-- Small modal -->
                                 <button class="btn btn-primary" data-toggle="modal" data-target=".bs-example-modal-sm">اضافة كفيل</button>
                                 
                                 

                                 <div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
                                     <div class="modal-dialog modal-sm">
                                         <div class="modal-content">
                                             <table class="table table-bordered">
                                                 <thead>
                                                     <tr class="info">
                                                         <td>اضافة كفيل </td>

                                                     </tr>
                                                 </thead>
                                                 <tr>
                                                     <td>
                                                         <div class="form-group form-md-line-input form-md-floating-label">
                                                             <input type="text" class="form-control" rows="4" id="property_advantage" name="property_advantage">
                                                             <label for="property_advantage" class="text-center">  الاسم الكفيل    </label>
                                                         </div>

                                                         <div class="form-group form-md-line-input form-md-floating-label">
                                                             <input type="text" class="form-control" rows="4" id="property_advantage" name="property_advantage">
                                                             <label for="property_advantage" class="text-center">  رقم الهوية   </label>
                                                         </div>

                                                         <div class="form-group form-md-line-input form-md-floating-label">
                                                             <input type="text" class="form-control" rows="4" id="property_advantage" name="property_advantage">
                                                             <label for="property_advantage" class="text-center">   رقم الجوال    </label>
                                                         </div>
                                                         <div class="form-group form-md-line-input form-md-floating-label">
                                                             <input type="text" class="form-control" rows="4" id="property_advantage" name="property_advantage">
                                                             <label for="property_advantage" class="text-center">   البريد الالكتروني     </label>
                                                         </div>
                                                         <button class="btn btn-primary">حفظ </button>

                                                         </table>

                                         </div>
                                     </div>
                                 </div>
                                 &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;
                                 <button class="btn btn-success text-center">حفظ </button>


                             </div>
                             
                             

                         </td>

                     </tr>




                 </table>
                 

          
             </div>


            

         </div>





             <br /><br /><br /><br />


         </div><!--End Row -->
         
     
            

         </div>
   

</div>
    </div>
@endsection
