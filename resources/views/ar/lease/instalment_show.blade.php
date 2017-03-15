@section('module','property_management')
@section('page_title','lease')
@section('page_type','edit_page')
@extends('template')

@section('css_page')

<link href="/assets/global/plugins/bootstrap-print.min.css" rel="stylesheet" type="text/css" />
@endsection
@section('js_page')
    <script src="/assets/global/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js" type="text/javascript"></script>  
    <script src="/assets/pages/scripts/components-date-time-pickers.min.js" type="text/javascript"></script>
    <script type="text/javascript">
      $(document).ready(function(){
        instalment = {!!json_encode($instalment)!!}
        set_value(instalment)
       
        if($('#status').val() =='not paid'){
          $('#payment_method_war,#reciever_war,#payment_date_war').hide();
          $('#payment_method,#receiver,#payment_date').val('');
          $('#payment_method,#receiver,#payment_date').removeClass("edited");
        }
        $('#status').change(function(){
          switch($(this).val()) {
            case 'paid':
                $('#payment_method_war,#receiver_war,#payment_date_war').show();
                $('#payment_method,#receiver,#payment_date').val('');
                $('#payment_method,#receiver,#payment_date').removeClass("edited");
                break;
            case 'not paid':
                $('#payment_method_war,#receiver_war,#payment_date_war').hide();
                $('#payment_method,#receiver,#payment_date').val('');
                $('#payment_method,#receiver,#payment_date').removeClass("edited");
                break;
            
          }
        });
      });
    </script>

        
    </script>
@endsection

@section('content')
    <h1 class="page-title"> ادارة الاملاك العقارية</h1>
    <div class="row">
      <div class="col-md-12">
        <div class="portlet light bordered">
          <div class="portlet-title">
            <div class="caption font-red-sunglo">
                {{$instalment->name}}
            </div>
            
          </div>
          <div class="portlet-body form" >
            <div class="col-md-3">
              <label>رقم الدفعة</label> : <span>{{ $instalment->number or '' }}</span>
            </div>
            <div class="col-md-3">
              <label>مقدار</label> : <span>{{$instalment->amount or ''}}</span>
            </div>
            <div class="col-md-3">
              <label>تاريخ الاستحقاق</label> : <span>{{$instalment->due_date or '*'}}</span>
            </div>
            
            
            
            
            <form method='post' action="{{action('LeaseController@instalment_update',['instalment' => $instalment->name,'lease' => $lease_name])}}" enctype="multipart/form-data">
              <input type='hidden' name='_token' value="{!! csrf_token() !!}">   
              <div class="col-md-12">   
                  <div class="form-group form-md-line-input form-md-floating-label">
                      <div class="input-icon right">
                            <select  class="form-control" id="status" name="status">
                              <option value="not paid">غير مدفوعة</option>
                              <option value="paid">مدفوعة</option>
                            </select>
                            <label for="">الحالة</label> 
                      </div>
                  </div>
              </div>
              <div class="col-md-12" id="payment_date_war">   
                  <div class="form-group form-md-line-input form-md-floating-label">
                      <div class="input-icon right">
                            <input class="form-control form-control-inline date-picker" size="16" type="text" value="" id="payment_date" placeholder="" name="payment_date">
                            <label for="">تاريخ التحصيل</label> 
                      </div>
                  </div>
              </div>
              <div class="col-md-12" id="receiver_war">   
                <div class="form-group form-md-line-input form-md-floating-label">
                    <div class="input-group">
                        <div class="input-group-control">
                            
                            <input type="text" class="form-control typeahead" id="receiver" placeholder="المحصل" name="receiver">
                           
                        </div>
                        <span class="input-group-btn btn-left">
                            <a class="btn blue btn-outline" href="#" data-toggle="modal" data-target="#Property_unitModal"><i class="fa fa-plus"></i></a>
                        </span>
                    </div>
                </div>
              </div>
              <div class="col-md-12" id="payment_method_war">   
                  <div class="form-group form-md-line-input form-md-floating-label">
                      <div class="input-icon right">
                            <select id="payment_method" class="form-control" name="payment_method">
                              <option value=""> </option>
                              <option value="cash">كاش</option>
                              <option value="bank_transfer">تحويل بنكي</option>
                              <option value="cheque">شيك</option>
                              
                            </select>
                            <label for="">طريقة الدفع</label> 
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


   
@endsection

