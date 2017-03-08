@section('module','property_management')
@section('page_title','external_lease')
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
          external_lease = {!!json_encode($external_lease)!!}
          set_value(external_lease)
          $(".nav-tabs #show").addClass('active');
          $("#terms").summernote({height: 300},"code", external_lease.terms);
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
                {{$external_lease->name}}
            </div>
            <div class="actions">

               
                <button class="btn blue btn-outline" href="#" onclick="printDiv('bod-pr')">
                    طباعة
                    <i class="fa fa-print"></i>
                </button>

            </div>
          </div>
          <div class="portlet-body form">
               @include('ar.external_lease.external_lease_form',['action' => action('External_leaseController@edit',$external_lease->name)])
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
    <div class="col-lg-12 row_top_margin" style="height:1px; border-bottom:1px solid #ddd;">
      &nbsp;
    </div>
    <div class="col-lg-12" style="float:right;clear:both;margin-bottom:10px;width:100%;">
      <table class="table" id="dataTables-example" style="padding:0px;margin:0px;">
        <tbody>
          <tr style="border-top:0px;">
            <td style="border-top:0px;padding-bottom:0px;padding-top:10px;" width="45%"><span class="print_red_span_right">رقم العقد : {{$external_lease->name or ''}}</span></td>
            <td style="border-top:0px;padding-bottom:0px;padding-top:10px;" width="55%"><span class="modal-title print_span_title_middle">عقد إيجار خارجي</span></td>
          </tr>
        </tbody>
      </table>
    </div>
    <div class="row">
      <div class="col-lg-12">
        &nbsp;
      </div>
      <div class="col-lg-12">
        <table class="table" id="dataTables-example" style="border:1px solid #ddd;font-size:11px;padding:0px; margin:1px 0px 1px 0px;">
          <tbody>
            <tr>
              <th class="print_agreement_line" width="15%">الاسم:</th>
              <td class="print_agreement_line" colspan="3" width="35%">{{$external_lease->seller_name or ''}}</td>
              <th class="print_agreement_line" style="text-align:left;" width="15%">العنوان:</th>
              <td class="print_agreement_line" colspan="3" width="35%">{{$external_lease->seller_address or ''}}</td>
            </tr>
            <tr>
              <th class="print_agreement_line" width="12%">نوع الهوية:</th>
              <td class="print_agreement_line" width="13%">{{$external_lease->seller_id_type or ''}}</td>
              <th class="print_agreement_line" width="12%">رقم الهوية:</th>
              <td class="print_agreement_line" width="13%">{{$external_lease->seller_id_number or ''}}</td>
              <th class="print_agreement_line" width="12%">تاريخ الانتهاء:</th>
              <td class="print_agreement_line" width="13%">{{$external_lease->seller_id_expire or ''}}</td>
              <th class="print_agreement_line" width="12%">مكان الإصدار:</th>
              <td class="print_agreement_line" width="13%">{{$external_lease->seller_id_place or ''}}</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-12">
        <table class="table" id="dataTables-example" style="border:1px solid #ddd;font-size:11px;padding:0px; margin:1px 0px 1px 0px;">
          <table class="table" id="dataTables-example" style="border:1px solid #ddd;font-size:11px;padding:0px; margin:1px 0px 1px 0px;">
          <tbody>
            <tr>
              <th class="print_agreement_line" width="15%">الاسم:</th>
              <td class="print_agreement_line" colspan="3" width="35%">{{$external_lease->seller_name or ''}}</td>
              <th class="print_agreement_line" style="text-align:left;" width="15%">العنوان:</th>
              <td class="print_agreement_line" colspan="3" width="35%">{{$external_lease->seller_address or ''}}</td>
            </tr>
            <tr>
              <th class="print_agreement_line" width="12%">نوع الهوية:</th>
              <td class="print_agreement_line" width="13%">{{$external_lease->buyer_id_type or ''}}</td>
              <th class="print_agreement_line" width="12%">رقم الهوية:</th>
              <td class="print_agreement_line" width="13%">{{$external_lease->buyer_id_number or ''}}</td>
              <th class="print_agreement_line" width="12%">تاريخ الانتهاء:</th>
              <td class="print_agreement_line" width="13%">{{$external_lease->buyer_id_expire or ''}}</td>
              <th class="print_agreement_line" width="12%">مكان الإصدار:</th>
              <td class="print_agreement_line" width="13%">{{$external_lease->buyer_id_place or ''}}</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-12">
        <table class="table" id="dataTables-example" style="border:1px solid #ddd;font-size:11px; padding:0px; margin:1px 0px 1px 0px;">
          <tbody>
            <tr>
              <th class="print_agreement_line" width="20%">نوع العقار:</th>
              <td class="print_agreement_line" colspan="2" width="30%">{{$external_lease->property_type or ''}}</td>
              <th class="print_agreement_line" width="20%">عنوان العقار:</th>
              <td class="print_agreement_line" colspan="2" width="30%">{{$external_lease->property_address or ''}}</td>
            </tr>
            <tr>
              <th class="print_agreement_line">مدة العقد:</th>
              <td class="print_agreement_line">{{$external_lease->lease_period or ''}}</td>
              <th class="print_agreement_line">تاريخ البداية:</th>
              <td class="print_agreement_line">{{$external_lease->lease_start_day or ''}}</td>
              
            </tr>
            <tr>
              <th class="print_agreement_line">مبلغ الإيجار:</th>
              <td class="print_agreement_line" colspan="5">{{$external_lease->rent_price or ''}}</td>
            </tr>
            <tr>
              <th class="print_agreement_line">طريقة الدفع:</th>
              <td class="print_agreement_line" colspan="5">{{$external_lease->payment_method or ''}}</td>
            </tr>
            <tr>
              <th class="print_agreement_line">رقم اشتراك الكهرباء:</th>
              <td class="print_agreement_line" colspan="2">{{$external_lease->electricity_meter_number or ''}}</td>
              <th class="print_agreement_line">رقم اشتراك المياه:</th>
              <td class="print_agreement_line" colspan="2">{{$external_lease->water_meter_number or ''}}</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-12 row_top_margin">
        <table class="table" id="dataTables-example" style="border:1px solid #ddd;font-size:11px;padding:0px;margin:1px 0px 1px 0px;">
          <tbody>
            <tr>
              <td class="print_agreement_line print_p">
                {{$external_lease->terms or ''}}
            </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-12">
        <table class="table" id="dataTables-example" style="border-bottom:1px solid #ddd;font-size:11px;padding:0px;margin:1px 0px 1px 0px;">
          <tbody>
            <tr>
              <th class="print_agreement_line" colspan="2">ملاحظات:</th>
            </tr>
            <tr>
              <td class="print_agreement_line" colspan="2">{{$external_lease->notes or ''}}</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-12">
        <table class="table" id="dataTables-example" style="border:0px;font-size:11px;padding:0px;margin:1px 0px 1px 0px;">
          <tbody>
            <tr>
              <th class="print_agreement_line" width="50%">توقيع المستأجر</th>
              <th class="print_agreement_line" style="text-align:left;" width="50%">توقيع المؤجر</th>
            </tr>
            <tr>
              <th class="print_agreement_line" colspan="2" style="text-align:center;">الختم</th>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
        
    </div>
    
@endsection

