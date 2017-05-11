@section('lang','ar')
@section('module','property_management')
@section('page_title','property_index')
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
                التقرير المالي
            </div>
            
          </div>
          <div class="portlet-body form">
            <div class="row">
              <div class="col-md-12">
                   <div style="background-color:#ffffff">
                       <table class="table table-bordered">
                           <thead>
                               <tr class="info">
                                   <td>اضافة مزود الخدمة</td>
                                   <td></td>
                                   <td></td>
                                   <td></td>
                                   <td><a href="#">مسح</a> </td>

                               </tr>
                           </thead>
                          </table>
                       <div class="col-md-3">
                           <div class="form-group form-md-line-input form-md-floating-label">
                               <select id="commission_type" class="form-control" name="commission_type">
                                   <option value="">  </option>
                                   <option value="percentage"></option>
                                   <option value="cash"> </option>
                               </select>
                               <label for="commission_type"> اسم البنك   </label>
                           </div>
                       </div>
                       <div class="col-md-3">
                           <div class="form-group form-md-line-input form-md-floating-label">
                               <select id="commission_type" class="form-control" name="commission_type">
                                   <option value="">  </option>
                                   <option value="percentage"></option>
                                   <option value="cash"> </option>
                               </select>
                               <label for="commission_type"> اسم البنك   </label>
                           </div>
                       </div>
                       <div class="col-md-3">
                           <div class="form-group form-md-line-input form-md-floating-label">
                               <select id="commission_type" class="form-control" name="commission_type">
                                   <option value="">  </option>
                                   <option value="percentage"></option>
                                   <option value="cash"> </option>
                               </select>
                               <label for="commission_type"> اسم البنك   </label>
                           </div>
                       </div>
                       <div class="col-md-3">
                           <br />
                           <button class="btn btn-success text-center">بحث </button>
                           <button class="btn btn-primary" >اضافة تذكرة جديدة</button>


                       </div>



                                       
                             
                                          



                   </div>
              </div>
              <div class="col-md-12">
                 <div style="background-color:#ffffff">
                     <table class="table table-bordered">
                         <thead>
                             <tr class="info">
                                 <td> عرض التذاكر </td>
                             </tr>
                         </thead>
                     </table>
                     <table class="table table-bordered">
                         <button class="btn btn-success text-center">كافة التذاكر </button>
                         <button class="btn btn-success text-center">التذاكر المغلقة </button>
                         <button class="btn btn-success text-center">التذاكر المفتوحة </button>
                         <br />
                         <br />
                         <thead>
                             <tr class="danger">
                                 <td> االرقم  </td>

                                 <td> عنوان االتذكرة </td>

                                 <td> المخصص له</td>

                                 <td> الاولوية  </td>

                                 <td> النوع  </td>

                                 <td> التاريخ  </td>
                             </tr>

                         </thead>
                         <tr>
                             <td></td>
                             <td></td>
                             <td></td>
                             <td></td>
                             <td></td>
                             <td></td>
                         </tr>
                         <tr>
                             <td></td>
                             <td></td>
                             <td></td>
                             <td></td>
                             <td></td>
                             <td></td>
                         </tr>
                         <tr>
                             <td></td>
                             <td></td>
                             <td></td>
                             <td></td>
                             <td></td>
                             <td></td>
                         </tr>
                     </table>
                    
                     <div class="col-md-12">
                         <br />
                         <!-- Large modal -->
                         <button class="btn btn-primary" data-toggle="modal" data-target=".bs-example-modal-lg" style="float:left">اضافة تذكرة جديدة </button>

                         <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                             <div class="modal-dialog modal-lg">
                                 <div class="modal-content">
                                     <table class="table table-bordered">
                                         <thead>
                                             <tr class="info">
                                                 <td>  اضافة تذكرة جديدة</td>
                                             </tr>
                                         </thead>
                                         <tr>
                                             <td>
                                                 <div class="form-group form-md-line-input form-md-floating-label">
                                                     <input type="text" class="form-control" rows="4" id="property_advantage" name="property_advantage">
                                                     <label for="property_advantage" class="text-center">  عنوان التذكرة  </label>
                                                 </div>

                                         
                                                 <div class="form-group form-md-line-input form-md-floating-label">
                                                     <input type="text" class="form-control" rows="4" id="property_advantage" name="property_advantage">
                                                     <label for="property_advantage" class="text-center">   تفاصيل التذكرة </label>
                                                 </div>

                                          
                                                 <div class="form-group form-md-line-input form-md-floating-label">
                                                     <input type="text" class="form-control" rows="4" id="property_advantage" name="property_advantage">
                                                     <label for="property_advantage" class="text-center">  النوع  </label>
                                                 </div>

                                                 <div class="form-group form-md-line-input form-md-floating-label">
                                                     <input type="text" class="form-control" rows="4" id="property_advantage" name="property_advantage">
                                                     <label for="property_advantage" class="text-center">  العقار  </label>
                                                 </div>

                                                 <div class="form-group form-md-line-input form-md-floating-label">
                                                     <input type="text" class="form-control" rows="4" id="property_advantage" name="property_advantage">
                                                     <label for="property_advantage" class="text-center">  الوحدة  </label>
                                                 </div>

                                                 <div class="form-group form-md-line-input form-md-floating-label">
                                                     <select id="commission_type" class="form-control" name="commission_type">
                                                         <option value="">  </option>
                                                         <option value="percentage"></option>
                                                         <option value="cash"> </option>
                                                     </select>
                                                     <label for="commission_type"> الاولوية    </label>
                                                 </div>
                                             
                                                 <div class="form-group form-md-line-input form-md-floating-label">
                                                     <select id="commission_type" class="form-control" name="commission_type">
                                                         <option value="">  </option>
                                                         <option value="percentage"></option>
                                                         <option value="cash"> </option>
                                                     </select>
                                                     <label for="commission_type"> تخصيص تذكرة    </label>
                                                 </div>
                                             
                                                 <div class="form-group form-md-line-input form-md-floating-label">
                                                     <select id="commission_type" class="form-control" name="commission_type">
                                                         <option value="">  </option>
                                                         <option value="percentage"></option>
                                                         <option value="cash"> </option>
                                                     </select>
                                                     <label for="commission_type"> متابعو التذكرة    </label>
                                                 </div>
                                            
                                                 <div class="form-group form-md-line-input form-md-floating-label">
                                                     <input type="text" class="form-control" rows="4" id="property_advantage" name="property_advantage">
                                                     <label for="property_advantage" class="text-center">  الوحدة  </label>
                                                 </div>
                                                 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                 <button class="btn btn-success text-center">حفظ التذكرة  </button>
                                                 <button class="btn btn-danger  text-center">الغاء الامر </button>
                                             </td>
                                         </tr>
                                     </table>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>
              </div>

            </div>
           
          </div>

        </div>
      </div>
    </div>

    
@endsection


