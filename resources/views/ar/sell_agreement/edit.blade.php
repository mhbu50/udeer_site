@section('module','property_management')
@extends('template')

@section('css_page')
<link href="/assets/global/plugins/bootstrap-summernote/summernote.css" rel="stylesheet" type="text/css" />
@endsection
@section('js_page')
    <script src="/assets/global/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js" type="text/javascript"></script>  
    <script src="/assets/pages/scripts/components-date-time-pickers.min.js" type="text/javascript"></script>
    <script src="/assets/global/plugins/bootstrap-summernote/summernote.min.js" type="text/javascript"></script>
    <script type="text/javascript">
        $(document).ready(function(){
          sell_agreement = {!!json_encode($sell_agreement)!!}
          set_value(sell_agreement)
          $(".nav-tabs #show").addClass('active');
          $("#terms").summernote({height: 300},"code", sell_agreement.term_group);
        });
    </script>
@endsection

@section('content')
    <h1 class="page-title"> ادارة الاملاك العقارية</h1>
    <div class="row">
      <div class="col-md-12">
        <div class="portlet light bordered">
          <div class="portlet-title">
            <div class="caption font-red-sunglo">
                {{$sell_agreement->name}}
            </div>
            <div class="actions">

               
                <button class="btn blue btn-outline" href="#" onclick="printDiv('bod-pr')">
                    طباعة
                    <i class="fa fa-print"></i>
                </button>

            </div>
          </div>
          <div class="portlet-body form">
               @include('ar.sell_agreement.sell_agreement_form',['action' => action('Sell_agreementController@edit',$sell_agreement->name)])
          </div>

        </div>
      </div>
    </div>
      <div id="bod-pr" class="container" hidden>
        
        <table class="table" style="background-color:#FFFFFF;margin-bottom:1px;">
          <tbody>
              <tr class="no_border_tr">
                  <th width="30%" style="text-align:center;font-weight:normal;border:none;padding:0px;">
                      <div class="col-lg-12" style="padding:0px;">{{$data['user']->company or ''}}</div>
                      <div class="col-lg-12" style="padding:0px;">تليفن:{{$data['company']->phone_no or ''}}-فاكس:{{$data['company']->fax or ''}}</div>
                      <div class="col-lg-12" style="padding:0px;">العنوان:{{$data['company']->address or ''}}</div>
                  </th>
                  <th width="45%" style="text-align:center; border:none;padding:0px;">
                      <img src="{{$data['user']->user_image}}" alt="ss" onerror="this.src='/{{'image/logo_horizone.jpg'}}';" width="80" height="80">
                  </th>
                  <th width="25%" style="text-align:center;font-weight:normal;border:none;padding:0px;">
                      <div class="col-lg-12" style="margin-top:6px;padding:0px;">
                          <span style="padding:0px 10px;"> </span> تاريخ:{{date("Y-m-d")}}
                      </div>
                      

                  </th>
              </tr>
          </tbody>
      </table>
      <div class="col-lg-12 row_top_margin" style="height:1px; border-bottom:1px solid #ddd;">&nbsp;</div>
      <div class="col-lg-12" style="float:right;clear:both;margin-bottom:10px;width:100%;">
        <table class="table" style="padding:0px;margin:0px;" id="dataTables-example">
          <tbody><tr style="border-top:0px;">
            <td style="border-top:0px;padding-bottom:0px;padding-top:10px;"> 
              <span class="print_red_span_right">
                رقم عقد البيع الشراء : {{$sell_agreement->name or ''}}          </span>
            </td>
            <td style="border-top:0px;padding-bottom:0px;padding-top:10px;"> 
              <span class="modal-title print_span_title_middle">
                عقد بيع وشراء         </span>
            </td>
          </tr>
        </tbody></table>
      </div>
      <div class="row">
        <div class="col-lg-12 row_top_margin"> <strong>الحمد لله وحده ... وبعد تم الاتفاق بتاريخه بين الطرفين :  :</strong> </div>
        <div class="col-lg-12 row_top_margin">
        <table class="table" id="dataTables-example" style="border:1px solid #ddd;font-size:11px;padding:0px; margin:1px 0px 1px 0px; ">
          <tbody><tr>
            <th width="15%" class="print_agreement_line">الاسم:</th>
            <td width="35%" class="print_agreement_line" colspan="3">{{$sell_agreement->seller_name or ''}}</td>
            <th width="15%" class="print_agreement_line" style="text-align:left;">العنوان:</th>
            <td width="35%" class="print_agreement_line" colspan="3">{{$sell_agreement->seller_address or ''}}</td>
          </tr>
          <tr>
            <th width="12%" class="print_agreement_line"> نوع الهوية :</th>
            <td width="13%" class="print_agreement_line">{{$sell_agreement->seller_id_type or ''}}</td>
            <th width="12%" class="print_agreement_line"> رقم الهوية :</th>
            <td width="13%" class="print_agreement_line">{{$sell_agreement->seller_id_number or ''}}</td>
            <th width="12%" class="print_agreement_line">تاريخ الانتهاء:</th>
            <td width="13%" class="print_agreement_line">{{$sell_agreement->seller_id_expire or ''}}</td>
            <th width="12%" class="print_agreement_line">رقم الجوا:</th>
            <td width="13%" class="print_agreement_line">{{$sell_agreement->seller_mobile_number or ''}}</td>
            
          </tr>
        </tbody>
      </table>
        </div>
        </div>
        
        <div class="row">
        <div class="col-lg-12">
        <table class="table" id="dataTables-example" style="border:1px solid #ddd;font-size:10px;padding:0px; margin:1px 0px 1px 0px; ">
          <tbody><tr>
              <th width="15%" class="print_agreement_line">الاسم:</th>
              <td width="35%" class="print_agreement_line" colspan="3">{{$sell_agreement->buyer_name or ''}}</td>
              <th width="15%" class="print_agreement_line" style="text-align:left;">العنوان:</th>
              <td width="35%" class="print_agreement_line" colspan="3">{{$sell_agreement->buyer_address or ''}}</td>
            </tr>
            <tr>
              <th width="12%" class="print_agreement_line"> نوع الهوية:</th>
              <td width="13%" class="print_agreement_line">{{$sell_agreement->buyer_id_type or ''}}</td>
              <th width="12%" class="print_agreement_line"> رقم الهوية:</th>
              <td width="13%" class="print_agreement_line">{{$sell_agreement->buyer_id_number or ''}}</td>
              <th width="12%" class="print_agreement_line">تاريخ الانتهاء:</th>
              <td width="13%" class="print_agreement_line">{{$sell_agreement->buyer_id_expire or ''}}</td>
              <th width="12%" class="print_agreement_line">رقم الجوا:</th>
              <td width="13%" class="print_agreement_line">{{$sell_agreement->buyer_mobile_number or ''}}</td>
              
            </tr>
          </tbody>
        </table>
        </div>
        </div>
        
        <div class="row">
        <div class="col-lg-12">
        <table class="table" id="dataTables-example" style="border:1px solid #ddd;font-size:11px; padding:0px; margin:1px 0px 1px 0px;">
          <tbody><tr>
            <td colspan="8" style="text-align:right; font-weight:bold;">حيث باع الطرف الأول على الطرف الثاني: </td>
          </tr>
          <tr>
            <th width="13%" class="print_agreement_line">نوع العقار:</th>
            <td width="12%" class="print_agreement_line">{{$sell_agreement->property_type or ''}}</td>
            <th width="12%" class="print_agreement_line">رقم العقار:</th>
            <td width="10%" class="print_agreement_line">{{$sell_agreement->property_number or ''}}</td>
            <th width="10%" class="print_agreement_line">الدولة:</th>
            <td width="13%" class="print_agreement_line">{{$sell_agreement->property_country or ''}}</td>
            <th width="10%" class="print_agreement_line">المدينة:</th>
            <td width="20%" class="print_agreement_line">{{$sell_agreement->property_city or ''}}</td>
          </tr>
          
        </div>
        </div>
              <div class="row">
            <div class="col-lg-12 row_top_margin">
              <table class="table" id="dataTables-example" style="border:1px solid #ddd;font-size:11px;padding:0px;margin:1px 0px 1px 0px;">
                <tbody>
                  <tr>
                    <td  style="text-align:right; font-weight:bold;">شروط و الاحكام: </td>
                  </tr>
                  <tr>
                  <td class="print_agreement_line print_p">
                    {{$sell_agreement->property_city or ''}}
                    .</td>
                </tr>
              </tbody></table>
            </div>
          </div>
            <div class="row">
        <div class="col-lg-12">
        <table class="table" id="dataTables-example" style="border:0px;font-size:11px;padding:0px;margin:1px 0px 1px 0px;">
          <tbody>
          <tr>
            <th class="print_agreement_line">الطرف الأول:</th>
            <td class="print_agreement_line">{{$sell_agreement->seller_name or ''}}</td>
            <th class="print_agreement_line">الطرف الثاني:</th>
            <td class="print_agreement_line">{{$sell_agreement->buyer_name or ''}}</td>
            <th class="print_agreement_line">الشاهد الأول:</th>
            <td class="print_agreement_line">{{$sell_agreement->first_witness_name or ''}}</td>
          </tr>
          <tr  style="height:50px;">
            <th class="print_agreement_line">التوقيع:</th>
            <td class="print_agreement_line">&nbsp;</td>
            <th class="print_agreement_line">التوقيع:</th>
            <td class="print_agreement_line">&nbsp;</td>
            <th class="print_agreement_line">التوقيع:</th>
            <td class="print_agreement_line">&nbsp;</td>
          </tr>
          <tr>
            <th class="print_agreement_line">&nbsp;</th>
            <td class="print_agreement_line">&nbsp;</td>
            <th class="print_agreement_line">&nbsp;</th>
            <td class="print_agreement_line">&nbsp;</td>
            <th class="print_agreement_line">الشاهد الثاني:</th>
            <td class="print_agreement_line">{{$sell_agreement->secound_witness_name or ''}}</td>
          </tr>
          <tr>
            <th class="print_agreement_line" colspan="4">السعي بواقع 2.5% على المشتري</th>
            <th class="print_agreement_line">التوقيع:</th>
            <td class="print_agreement_line">&nbsp;</td>
          </tr>
        </tbody></table>
        </div>
        </div>
    
    </div>
    
@endsection

