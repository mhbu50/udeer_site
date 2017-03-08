@section('module','property_management')
@section('page_title','management_contract')
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
          property_management_contract = {!!json_encode($property_management_contract)!!}
          set_value(property_management_contract)
          $(".nav-tabs #show").addClass('active');
          $("#terms").summernote({height: 300},"code", property_management_contract.terms);
          
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
                {{$property_management_contract->name}}
            </div>
            <div class="actions">

               
                <button class="btn blue btn-outline" href="#" onclick="printDiv('bod-pr')">
                    طباعة
                    <i class="fa fa-print"></i>
                </button>

            </div>
          </div>
          <div class="portlet-body form">
               @include('ar.property_management_contract.property_management_contract_form',['action' => action('Property_management_contractController@edit',$property_management_contract->name)])
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
            <tbody>
                <tr style="border-top:0px;">
                    <td style="border-top:0px;padding-bottom:0px;padding-top:10px;" width="45%">
                        <span class="print_red_span_right">
            رقم العقد : {{$lease->name or ''}}          </span>
                    </td>
                    <td style="border-top:0px;padding-bottom:0px;padding-top:10px;" width="55%">
                        <span class="modal-title print_span_title_middle">
            عقد ادارة املاك          </span>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    <div class="row">
        
        <div class="col-lg-12">
            <table class="table" id="dataTables-example" style="border:1px solid #ddd;font-size:11px;padding:0px; margin:1px 0px 1px 0px;">
                <tbody>
                    <tr>
                        <th width="15%" class="print_agreement_line">الاسم:</th>
                        <td width="35%" class="print_agreement_line" colspan="3">{{$data['user']->first_name or ''}} {{$data['user']->last_name or ''}}</td>
                        <th width="15%" class="print_agreement_line" style="text-align:left;">العنوان:</th>
                        <td width="35%" class="print_agreement_line" colspan="3">{{$data['company']->address or ''}}</td>
                    </tr>
                    <tr>
                        <th width="15%" class="print_agreement_line">رقم الهوية:</th>
                        <td width="15%" class="print_agreement_line">{{'**' or ''}}</td>
                        <th width="15%" class="print_agreement_line">رقم الجوال::</th>
                        <td width="15%" class="print_agreement_line">{{$data['company']->phone_no or ''}}</td>
                        <th width="20%" class="print_agreement_line">رقم التليفون:</th>
                        <td width="20%" class="print_agreement_line">{{$data['company']->phone_no or ''}} </td>
                        
                    </tr>
                </tbody>
            </table>
        </div>
    </div>





    <div class="row">
        <div class="col-lg-12">
            <table class="table" id="dataTables-example" style="border:1px solid #ddd;font-size:11px;padding:0px; margin:1px 0px 1px 0px;">
                <tbody>
                    <tr>
                        <th width="15%" class="print_agreement_line">الاسم:</th>
                        <td width="35%" class="print_agreement_line" colspan="3">{{$data['owner']->first_name or ''}} {{$data['owner']->last_name or ''}}</td>
                        <th width="15%" class="print_agreement_line" style="text-align:left;">العنوان:</th>
                        <td width="35%" class="print_agreement_line" colspan="3">{{$data['owner']->address or ''}}</td>
                    </tr>
                    <tr>
                        <th width="8%" class="print_agreement_line">رقم الهوية:</th>
                        <td width="12%" class="print_agreement_line">{{$data['owner']->id_number or ''}}</td>
                        <th width="12%" class="print_agreement_line">رقم الجوال::</th>
                        <td width="12%" class="print_agreement_line">{{$data['owner']->mobile_number or ''}}</td>
                        <th width="15%" class="print_agreement_line">رقم التليفون:</th>
                        <td width="10%" class="print_agreement_line">11-03-1432 </td>
                        <th width="15%" class="print_agreement_line">رقم الهاتف:</th>
                        <td width="30%" class="print_agreement_line">{{$data['owner']->telephone_number or ''}}</td>
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
                        <th width="20%" class="print_agreement_line">نوع العقار:</th>
                        <td width="30%" class="print_agreement_line" colspan="2">{{$data['property']->type or ''}}</td>
                        <th width="20%" class="print_agreement_line">عنوان العقار:</th>
                        <td width="30%" class="print_agreement_line" colspan="2">{{$data['property']->address or ''}}</td>
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
            <th class="print_agreement_line" width="12%" >الطرف الأول:</th>
            <td class="print_agreement_line" width="13%">{{$data['user']->first_name or ''}} {{$data['user']->last_name or ''}}</td>
            <th class="print_agreement_line" width="12%">الطرف الثاني:</th>
            <td class="print_agreement_line" width="13%">{{$data['owner']->first_name or ''}} {{ $data['owner']->last_name or ''}}</td>
            <th class="print_agreement_line" width="12%">الشاهد الأول:</th>
            <td class="print_agreement_line" width="13%">{{$property_management_contract->first_witness_name or ''}}</td>
            <th class="print_agreement_line" width="12%">الشاهد الثاني:</th>
            <td class="print_agreement_line" width="13%">{{$property_management_contract->second_witness_name or ''}}</td>
          </tr>
          <tr  style="height:50px;">
            <th class="print_agreement_line">التوقيع:</th>
            <td class="print_agreement_line">&nbsp;</td>
            <th class="print_agreement_line">التوقيع:</th>
            <td class="print_agreement_line">&nbsp;</td>
            <th class="print_agreement_line">التوقيع:</th>
            <td class="print_agreement_line">&nbsp;</td>
            
            <th class="print_agreement_line">التوقيع:</th>
            <td class="print_agreement_line">&nbsp;</td>
          </tr>
          
          
        </tbody>
      </table>
        </div>
        </div>
    </div>
    
@endsection

