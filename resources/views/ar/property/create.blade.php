@section('module','property_management')
@section('page_title','property_create')
@section('page_type','create_page')
@extends('template')

@section('css_page')
    

    

@endsection
@section('js_page')
    <script src="/assets/global/plugins/select2/js/select2.full.min.js" type="text/javascript"></script>
    <script src="/assets/global/plugins/jquery-validation/js/jquery.validate.min.js" type="text/javascript"></script>
    <script src="/assets/global/plugins/jquery-validation/js/localization/messages_ar.js" />
    <script src="/assets/global/plugins/jquery-validation/js/additional-methods.min.js" type="text/javascript"></script>
    <script src="/assets/global/plugins/bootstrap-wizard/jquery.bootstrap.wizard.min.js" type="text/javascript"></script>
    <script src="/assets/pages/scripts/form-wizard.js" type="text/javascript"></script>
    <script type="text/javascript">
      $(document).ready(function(){
        google.maps.event.addDomListener(window, 'load', set_map(50.0301574,26.3320884));
        $(".commission").hide();
        data = {!!json_encode( session()->getOldInput())!!}
        set_value(data)
      });
    </script>
@endsection

@section('content')

    <h1 class="page-title"> ادارة الاملاك العقارية</h1>
    <div class="row">
    <div class="col-md-12">

        <div class="portlet light bordered" id="form_wizard_1">

            <div class="portlet-body form">
                <form action="/property/create" id="submit_form" method="POST" novalidate="novalidate">
                    <input type="hidden" name="_token" value="{!! csrf_token() !!}">
                    <div class="form-wizard">
                        <div class="form-body">
                            <ul class="nav nav-pills nav-justified steps">
                                <li class="active">
                                    <a href="#tab1" data-toggle="tab" class="step" aria-expanded="true">
                                        <span class="number"> 1 </span>
                                        <span class="desc">
                                                                    <i class="fa fa-check"></i>عنوان العقار   </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#tab2 " data-toggle="tab" class="step">
                                        <span class="number"> 2 </span>
                                        <span class="desc">
                                                                    <i class="fa fa-check"></i>العرض والسعر</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#tab3" data-toggle="tab" class="step active">
                                        <span class="number"> 3 </span>
                                        <span class="desc">
                                                                    <i class="fa fa-check"></i>  المالك   </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#tab4" data-toggle="tab" class="step">
                                        <span class="number"> 4 </span>
                                        <span class="desc">
                                                                    <i class="fa fa-check"></i> تفاصيل العقار </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#tab5" data-toggle="tab" class="step">
                                        <span class="number">5 </span>
                                        <span class="desc">
                                                                    <i class="fa fa-check"></i> موجز
                                                                </span>
                                    </a>
                                </li>
                            </ul>
                            <!-- End name tabs  -->
                            <div id="bar" class="progress progress-striped" role="progressbar">
                                <div class="progress-bar progress-bar-success" style="width: 20%;"> </div>
                            </div>
                            <div class="tab-content">
                                <div class="alert alert-danger display-none">
                                    <button class="close" data-dismiss="alert"></button> يوجد بعض الاخطاء . الرجاء التدقيق في المدخلات </div>
                                <div class="alert alert-success display-none">
                                    <button class="close" data-dismiss="alert"></button> تم ادخال الحقول بنجاح! </div>
                                <div class="tab-pane active" id="tab1">
                                    <!-- ------------------------------------------- -->

                                    <div class="col-md-2">
                                        <div class="form-group form-md-line-input form-md-floating-label">
                                            <select id="Property_type" class="form-control edited" name="property_type" value="{{ old('property_type') }}">
                                                <option value="Value"></option>
                                                <option value="house">دولة 1</option>
                                                <option value="schema">دولة2</option>
                                                <option value="residential building"> دولة3</option>
                                            </select>
                                            <label for="Property_type"> الدولة </label>
                                        </div>
                                    </div>

                                    <div class="col-md-2">
                                        <div class="form-group form-md-line-input form-md-floating-label">
                                            <select id="Property_type" class="form-control edited" name="property_type" value="{{ old('property_type') }}">
                                                <option value="Value"></option>
                                                <option value="house">المنطقة 1</option>
                                                <option value="schema">المنطقة2 </option>
                                                <option value="residential building"> المنطقة3</option>
                                            </select>
                                            <label for="Property_type"> المنطقة </label>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="form-group form-md-line-input form-md-floating-label">
                                            <select id="Property_type" class="form-control edited" name="property_type" value="{{ old('property_type') }}">
                                                <option value="Value"></option>
                                                <option value="house">المدينة 1</option>
                                                <option value="schema">المدينة2 </option>
                                                <option value="residential building"> المدينة3</option>
                                            </select>
                                            <label for="Property_type"> المدينة/المحافظة </label>
                                        </div>
                                    </div>

                                    <div class="col-md-2">
                                        <div class="form-group form-md-line-input form-md-floating-label">
                                            <select id="Property_type" class="form-control edited" name="property_type" value="{{ old('property_type') }}">
                                                <option value="Value"></option>
                                                <option value="house">الحي 1</option>
                                                <option value="schema">الحي 2 </option>
                                                <option value="residential building"> الحي3</option>
                                            </select>
                                            <label for="Property_type"> الحي </label>
                                        </div>
                                    </div>

                                    <div class="col-md-2">
                                        <div class="form-group form-md-line-input form-md-floating-label">
                                            <select id="Property_type" class="form-control edited" name="property_type" value="{{ old('property_type') }}">
                                                <option value="Value"></option>
                                                <option value="house">المخطط 1</option>
                                                <option value="schema">المخطط 2 </option>
                                                <option value="residential building"> المخطط3 </option>
                                            </select>
                                            <label for="Property_type"> المخطط </label>
                                        </div>
                                    </div>

                                    <div class="col-md-2">
                                        <div class="form-group form-md-line-input form-md-floating-label">
                                            <select id="Property_type" class="form-control edited" name="property_type" value="{{ old('property_type') }}">
                                                <option value="Value"></option>
                                                <option value="house">القطعة 1</option>
                                                <option value="schema">القطعة 2 </option>
                                                <option value="residential building"> القطعة3 </option>
                                            </select>
                                            <label for="Property_type"> رقم القطعة </label>
                                        </div>
                                    </div>

                                    <!-- ------------------------------------------- -->
                                    <div class="col-md-12">
                                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3934760.224224704!2d33.75510634604225!3d15.61624547379229!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x15e7b33fe7952a41%3A0x5960504bc21ab69b!2sSaudi+Arabia!5e0!3m2!1sen!2seg!4v1493632821049" width="100%" height="450" frameborder="0" style="border:1px solid ;margin-bottom:20px " allowfullscreen=""></iframe>
                                    </div>
                                    <!-- ------------------------------------------- -->
                                    <script type="text/javascript">
                                        window.onload = function() {
                                            /*
                                    Function onload for not displaying select more option 
                                    */


                                            document.getElementById("optionSelect1").style.display = 'none';
                                            document.getElementById("optionSelect2").style.display = 'none';
                                            document.getElementById("optionVlueFlat1").style.display = 'none';
                                            document.getElementById("optionVlueFlat2").style.display = 'none';
                                            document.getElementById("optionVlueFlat11").style.display = 'none';
                                            document.getElementById("optionVlueFlat21").style.display = 'none';
                                            document.getElementById("optionVlueFlat110").style.display = 'none';
                                            document.getElementById("optionVlueFlat210").style.display = 'none';

                                            document.getElementById("optionVlueFlat1103").style.display = 'none';
                                            document.getElementById("optionVlueFlat2103").style.display = 'none';


                                            document.getElementById("optionVlueFlat11034").style.display = 'none';
                                            document.getElementById("optionVlueFlat21034").style.display = 'none';



                                            document.getElementById("optionVlueFlat110340").style.display = 'none';
                                            document.getElementById("optionVlueFlat210340").style.display = 'none';



                                            document.getElementById("optionVlueFlat110340A").style.display = 'none';
                                            document.getElementById("optionVlueFlat210340A").style.display = 'none';

                                            document.getElementById("optionVlueFlat110340AA").style.display = 'none';
                                            document.getElementById("optionVlueFlat210340AA").style.display = 'none';

                                            document.getElementById("optionVlueFlat110340AAA").style.display = 'none';
                                            document.getElementById("optionVlueFlat210340AAA").style.display = 'none';
                                            ///////////////////////////
                                            /*

                                            document.getElementById("optionVlueFlat110340AAAB").style.display = 'none';
                                            document.getElementById("optionVlueFlat210340AAAB").style.display = 'none';

                                            document.getElementById("optionVlueFlat110340AAABB").style.display = 'none';
                                            document.getElementById("optionVlueFlat210340AAABB").style.display = 'none';

                                            document.getElementById("optionVlueFlat110340AAABBB").style.display = 'none';
                                            document.getElementById("optionVlueFlat210340AAABBB").style.display = 'none';
                                            */
                                            document.getElementById("optionMng1").style.display = 'none';
                                            document.getElementById("optionMng2").style.display = 'none';




                                            /*
                                            Function onload for not displaying all div 
                                            */
                                            document.getElementById("Select1").style.display = 'none'; //Not Display Div name Test1

                                            document.getElementById("Select2").style.display = 'none'; //Not Display Div name Test1
                                            document.getElementById("Select3").style.display = 'none'; //Not Display Div name Test1
                                            document.getElementById("Select4").style.display = 'none'; //Not Display Div name Test1
                                            document.getElementById("Select5").style.display = 'none'; //Not Display Div name Test1
                                            document.getElementById("Select6").style.display = 'none'; //Not Display Div name Test1
                                            document.getElementById("Select7").style.display = 'none'; //Not Display Div name Test1

                                            document.getElementById("Select8").style.display = 'none'; //Not Display Div name Test1
                                            document.getElementById("Select9").style.display = 'none'; //Not Display Div name Test1
                                            document.getElementById("Select10").style.display = 'none'; //Not Display Div name Test1
                                            document.getElementById("Select11").style.display = 'none'; //Not Display Div name Test1
                                            document.getElementById("Select12").style.display = 'none'; //Not Display Div name Test1
                                            document.getElementById("Select13").style.display = 'none'; //Not Display Div name Test1
                                            document.getElementById("Select14").style.display = 'none'; //Not Display Div name Test1



                                            document.getElementById("Tab2-Select1").style.display = 'none'; //No Display Tab 2 
                                            document.getElementById("Tab2-Select2").style.display = 'none'; //Not Display Tab 2 
                                            document.getElementById("Tab2-Select3").style.display = 'none'; //Not Display Tab 2 
                                            document.getElementById("Tab2-Select4").style.display = 'none'; //Not Display Tab 2 
                                            document.getElementById("Tab2-Select5").style.display = 'none'; //Not Display Tab 2 
                                            document.getElementById("Tab2-Select6").style.display = 'none'; //Not Display Tab 2 
                                            document.getElementById("Tab2-Select7").style.display = 'none'; //Not Display Tab 2 
                                            document.getElementById("Tab2-Select8").style.display = 'none'; //Not Display Tab 2 
                                            document.getElementById("Tab2-Select9").style.display = 'none'; //Not Display Tab 2 
                                            document.getElementById("Tab2-Select10").style.display = 'none'; //Not Display Tab 2 
                                            document.getElementById("Tab2-Select11").style.display = 'none'; //Not Display Tab 2 
                                            document.getElementById("Tab2-Select12").style.display = 'none'; //Not Display Tab 2 
                                            document.getElementById("Tab2-Select13").style.display = 'none'; //Not Display Tab 2 
                                            document.getElementById("Tab2-Select14").style.display = 'none'; //Not Display Tab 2 


                                            document.getElementById("Tab3-Select1").style.display = 'none'; //No Display Tab 3 
                                            document.getElementById("Tab3-Select2").style.display = 'none'; //Not Display Tab 3 
                                            document.getElementById("Tab3-Select3").style.display = 'none'; //Not Display Tab 3 
                                            document.getElementById("Tab3-Select4").style.display = 'none'; //Not Display Tab 3 
                                            document.getElementById("Tab3-Select5").style.display = 'none'; //Not Display Tab 3 
                                            document.getElementById("Tab3-Select6").style.display = 'none'; //Not Display Tab 3 
                                            document.getElementById("Tab3-Select7").style.display = 'none'; //Not Display Tab 3 
                                            document.getElementById("Tab3-Select8").style.display = 'none'; //Not Display Tab 3 
                                            document.getElementById("Tab3-Select9").style.display = 'none'; //Not Display Tab 3 
                                            document.getElementById("Tab3-Select10").style.display = 'none'; //Not Display Tab 3 
                                            document.getElementById("Tab3-Select11").style.display = 'none'; //Not Display Tab 3 
                                            document.getElementById("Tab3-Select12").style.display = 'none'; //Not Display Tab 3 
                                            document.getElementById("Tab3-Select13").style.display = 'none'; //Not Display Tab 3 
                                            document.getElementById("Tab3-Select14").style.display = 'none'; //Not Display Tab 3 


                                            document.getElementById("Tab4-Select1").style.display = 'none'; //No Display Tab 3 
                                            document.getElementById("Tab4-Select2").style.display = 'none'; //Not Display Tab 3 
                                            document.getElementById("Tab4-Select3").style.display = 'none'; //Not Display Tab 3 
                                            document.getElementById("Tab4-Select4").style.display = 'none'; //Not Display Tab 3 
                                            document.getElementById("Tab4-Select5").style.display = 'none'; //Not Display Tab 3 
                                            document.getElementById("Tab4-Select6").style.display = 'none'; //Not Display Tab 3 
                                            document.getElementById("Tab4-Select7").style.display = 'none'; //Not Display Tab 3 
                                            document.getElementById("Tab4-Select8").style.display = 'none'; //Not Display Tab 3 
                                            document.getElementById("Tab4-Select9").style.display = 'none'; //Not Display Tab 3 
                                            document.getElementById("Tab4-Select10").style.display = 'none'; //Not Display Tab 3 
                                            document.getElementById("Tab4-Select11").style.display = 'none'; //Not Display Tab 3 
                                            document.getElementById("Tab4-Select12").style.display = 'none'; //Not Display Tab 3 
                                            document.getElementById("Tab4-Select13").style.display = 'none'; //Not Display Tab 3 
                                            document.getElementById("Tab4-Select14").style.display = 'none'; //Not Display Tab 3 

                                            document.getElementById("Tab5-Select1").style.display = 'none'; //No Display Tab 3 
                                            document.getElementById("Tab5-Select2").style.display = 'none'; //Not Display Tab 3 
                                            document.getElementById("Tab5-Select3").style.display = 'none'; //Not Display Tab 3 
                                            document.getElementById("Tab5-Select4").style.display = 'none'; //Not Display Tab 3 
                                            document.getElementById("Tab5-Select5").style.display = 'none'; //Not Display Tab 3 
                                            document.getElementById("Tab5-Select6").style.display = 'none'; //Not Display Tab 3 
                                            document.getElementById("Tab5-Select7").style.display = 'none'; //Not Display Tab 3 
                                            document.getElementById("Tab5-Select8").style.display = 'none'; //Not Display Tab 3 
                                            document.getElementById("Tab5-Select9").style.display = 'none'; //Not Display Tab 3 
                                            document.getElementById("Tab5-Select10").style.display = 'none'; //Not Display Tab 3 
                                            document.getElementById("Tab5-Select11").style.display = 'none'; //Not Display Tab 3 
                                            document.getElementById("Tab5-Select12").style.display = 'none'; //Not Display Tab 3 
                                            document.getElementById("Tab5-Select13").style.display = 'none'; //Not Display Tab 3 
                                            document.getElementById("Tab5-Select14").style.display = 'none'; //Not Display Tab 3 


                                        }

                                        function onSelectBuild() {
                                            /*
            Function  for  displaying spacifice div
            */


                                            var typebld = document.getElementById("SelectBuild").value;
                                            if (typebld == "trLand") {


                                                document.getElementById("Select1").style.display = '';


                                                document.getElementById("Tab5-Select1").style.display = ''; // Display Tab 5 
                                                document.getElementById("Tab5-Select2").style.display = 'none'; //Not Display Tab 5 
                                                document.getElementById("Tab5-Select3").style.display = 'none'; //Not Display Tab 5 
                                                document.getElementById("Tab5-Select4").style.display = 'none'; //Not Display Tab 5 
                                                document.getElementById("Tab5-Select5").style.display = 'none'; //Not Display Tab 5 
                                                document.getElementById("Tab5-Select6").style.display = 'none'; //Not Display Tab 5 
                                                document.getElementById("Tab5-Select7").style.display = 'none'; //Not Display Tab 5 
                                                document.getElementById("Tab5-Select8").style.display = 'none'; //Not Display Tab 5 
                                                document.getElementById("Tab5-Select9").style.display = 'none'; //Not Display Tab 5 
                                                document.getElementById("Tab5-Select10").style.display = 'none'; //Not Display Tab 5 
                                                document.getElementById("Tab5-Select11").style.display = 'none'; //Not Display Tab 5 
                                                document.getElementById("Tab5-Select12").style.display = 'none'; //Not Display Tab 5 
                                                document.getElementById("Tab5-Select13").style.display = 'none'; //Not Display Tab 5 
                                                document.getElementById("Tab5-Select14").style.display = 'none'; //Not Display Tab 5 



                                                document.getElementById("Tab4-Select1").style.display = ''; // Display Tab 4 
                                                document.getElementById("Tab4-Select2").style.display = 'none'; //Not Display Tab 4 
                                                document.getElementById("Tab4-Select3").style.display = 'none'; //Not Display Tab 4 
                                                document.getElementById("Tab4-Select4").style.display = 'none'; //Not Display Tab 4 
                                                document.getElementById("Tab4-Select5").style.display = 'none'; //Not Display Tab 4 
                                                document.getElementById("Tab4-Select6").style.display = 'none'; //Not Display Tab 4 
                                                document.getElementById("Tab4-Select7").style.display = 'none'; //Not Display Tab 4 
                                                document.getElementById("Tab4-Select8").style.display = 'none'; //Not Display Tab 4 
                                                document.getElementById("Tab4-Select9").style.display = 'none'; //Not Display Tab 4 
                                                document.getElementById("Tab4-Select10").style.display = 'none'; //Not Display Tab 4 
                                                document.getElementById("Tab4-Select11").style.display = 'none'; //Not Display Tab 4 
                                                document.getElementById("Tab4-Select12").style.display = 'none'; //Not Display Tab 4 
                                                document.getElementById("Tab4-Select13").style.display = 'none'; //Not Display Tab 4 
                                                document.getElementById("Tab4-Select14").style.display = 'none'; //Not Display Tab 4 




                                                document.getElementById("Tab3-Select1").style.display = ''; // Display Tab 3 
                                                document.getElementById("Tab3-Select2").style.display = 'none'; //Not Display Tab 3 
                                                document.getElementById("Tab3-Select3").style.display = 'none'; //Not Display Tab 3 
                                                document.getElementById("Tab3-Select4").style.display = 'none'; //Not Display Tab 3 
                                                document.getElementById("Tab3-Select5").style.display = 'none'; //Not Display Tab 3 
                                                document.getElementById("Tab3-Select6").style.display = 'none'; //Not Display Tab 3 
                                                document.getElementById("Tab3-Select7").style.display = 'none'; //Not Display Tab 3 
                                                document.getElementById("Tab3-Select8").style.display = 'none'; //Not Display Tab 3 
                                                document.getElementById("Tab3-Select9").style.display = 'none'; //Not Display Tab 3 
                                                document.getElementById("Tab3-Select10").style.display = 'none'; //Not Display Tab 3 
                                                document.getElementById("Tab3-Select11").style.display = 'none'; //Not Display Tab 3 
                                                document.getElementById("Tab3-Select12").style.display = 'none'; //Not Display Tab 3 
                                                document.getElementById("Tab3-Select13").style.display = 'none'; //Not Display Tab 3 
                                                document.getElementById("Tab3-Select14").style.display = 'none'; //Not Display Tab 3 




                                                document.getElementById("Tab2-Select1").style.display = ''; // Display Tab 2 
                                                document.getElementById("Tab2-Select2").style.display = 'none'; //Not Display Tab 2 
                                                document.getElementById("Tab2-Select3").style.display = 'none'; //Not Display Tab 2 
                                                document.getElementById("Tab2-Select4").style.display = 'none'; //Not Display Tab 2 
                                                document.getElementById("Tab2-Select5").style.display = 'none'; //Not Display Tab 2 
                                                document.getElementById("Tab2-Select6").style.display = 'none'; //Not Display Tab 2 
                                                document.getElementById("Tab2-Select7").style.display = 'none'; //Not Display Tab 2 
                                                document.getElementById("Tab2-Select8").style.display = 'none'; //Not Display Tab 2 
                                                document.getElementById("Tab2-Select9").style.display = 'none'; //Not Display Tab 2 
                                                document.getElementById("Tab2-Select10").style.display = 'none'; //Not Display Tab 2 
                                                document.getElementById("Tab2-Select11").style.display = 'none'; //Not Display Tab 2 
                                                document.getElementById("Tab2-Select12").style.display = 'none'; //Not Display Tab 2 
                                                document.getElementById("Tab2-Select13").style.display = 'none'; //Not Display Tab 2 
                                                document.getElementById("Tab2-Select14").style.display = 'none'; //Not Display Tab 2 




                                                document.getElementById("Select2").style.display = 'none'; //Not Display Div name Test1
                                                document.getElementById("Select3").style.display = 'none'; //Not Display Div name Test1
                                                document.getElementById("Select4").style.display = 'none'; //Not Display Div name Test1
                                                document.getElementById("Select5").style.display = 'none'; //Not Display Div name Test1
                                                document.getElementById("Select6").style.display = 'none'; //Not Display Div name Test1
                                                document.getElementById("Select7").style.display = 'none'; //Not Display Div name Test1
                                                document.getElementById("Select8").style.display = 'none'; //Not Display Div name Test1
                                                document.getElementById("Select9").style.display = 'none'; //Not Display Div name Test1
                                                document.getElementById("Select10").style.display = 'none'; //Not Display Div name Test1
                                                document.getElementById("Select11").style.display = 'none'; //Not Display Div name Test1
                                                document.getElementById("Select12").style.display = 'none'; //Not Display Div name Test1
                                                document.getElementById("Select13").style.display = 'none'; //Not Display Div name Test1
                                                document.getElementById("Select14").style.display = 'none'; //Not Display Div name Test1




                                            }
                                            if (typebld == "trFlat") {


                                                document.getElementById("Select2").style.display = '';

                                                document.getElementById("Tab5-Select2").style.display = ''; // Display Tab5 
                                                document.getElementById("Tab5-Select1").style.display = 'none'; //Not Display Tab5 
                                                document.getElementById("Tab5-Select3").style.display = 'none'; //Not Display Tab5 
                                                document.getElementById("Tab5-Select4").style.display = 'none'; //Not Display Tab5 
                                                document.getElementById("Tab5-Select5").style.display = 'none'; //Not Display Tab5 
                                                document.getElementById("Tab5-Select6").style.display = 'none'; //Not Display Tab5 
                                                document.getElementById("Tab5-Select7").style.display = 'none'; //Not Display Tab5 
                                                document.getElementById("Tab5-Select8").style.display = 'none'; //Not Display Tab5 
                                                document.getElementById("Tab5-Select9").style.display = 'none'; //Not Display Tab5 
                                                document.getElementById("Tab5-Select10").style.display = 'none'; //Not Display Tab5 
                                                document.getElementById("Tab5-Select11").style.display = 'none'; //Not Display Tab5 
                                                document.getElementById("Tab5-Select12").style.display = 'none'; //Not Display Tab5 
                                                document.getElementById("Tab5-Select13").style.display = 'none'; //Not Display Tab5 
                                                document.getElementById("Tab5-Select14").style.display = 'none'; //Not Display Tab5



                                                document.getElementById("Tab4-Select2").style.display = ''; // Display Tab4 
                                                document.getElementById("Tab4-Select1").style.display = 'none'; //Not Display Tab4 
                                                document.getElementById("Tab4-Select3").style.display = 'none'; //Not Display Tab4 
                                                document.getElementById("Tab4-Select4").style.display = 'none'; //Not Display Tab4 
                                                document.getElementById("Tab4-Select5").style.display = 'none'; //Not Display Tab4 
                                                document.getElementById("Tab4-Select6").style.display = 'none'; //Not Display Tab4 
                                                document.getElementById("Tab4-Select7").style.display = 'none'; //Not Display Tab4 
                                                document.getElementById("Tab4-Select8").style.display = 'none'; //Not Display Tab4 
                                                document.getElementById("Tab4-Select9").style.display = 'none'; //Not Display Tab4 
                                                document.getElementById("Tab4-Select10").style.display = 'none'; //Not Display Tab4 
                                                document.getElementById("Tab4-Select11").style.display = 'none'; //Not Display Tab4 
                                                document.getElementById("Tab4-Select12").style.display = 'none'; //Not Display Tab4 
                                                document.getElementById("Tab4-Select13").style.display = 'none'; //Not Display Tab4 
                                                document.getElementById("Tab4-Select14").style.display = 'none'; //Not Display Tab4




                                                document.getElementById("Tab3-Select2").style.display = ''; // Display Tab3 
                                                document.getElementById("Tab3-Select1").style.display = 'none'; //Not Display Tab3 
                                                document.getElementById("Tab3-Select3").style.display = 'none'; //Not Display Tab3 
                                                document.getElementById("Tab3-Select4").style.display = 'none'; //Not Display Tab3 
                                                document.getElementById("Tab3-Select5").style.display = 'none'; //Not Display Tab3 
                                                document.getElementById("Tab3-Select6").style.display = 'none'; //Not Display Tab3 
                                                document.getElementById("Tab3-Select7").style.display = 'none'; //Not Display Tab3 
                                                document.getElementById("Tab3-Select8").style.display = 'none'; //Not Display Tab3 
                                                document.getElementById("Tab3-Select9").style.display = 'none'; //Not Display Tab3 
                                                document.getElementById("Tab3-Select10").style.display = 'none'; //Not Display Tab3 
                                                document.getElementById("Tab3-Select11").style.display = 'none'; //Not Display Tab3 
                                                document.getElementById("Tab3-Select12").style.display = 'none'; //Not Display Tab3 
                                                document.getElementById("Tab3-Select13").style.display = 'none'; //Not Display Tab3 
                                                document.getElementById("Tab3-Select14").style.display = 'none'; //Not Display Tab3




                                                document.getElementById("Tab2-Select2").style.display = ''; // Display Tab2 
                                                document.getElementById("Tab2-Select1").style.display = 'none'; //Not Display Tab2 
                                                document.getElementById("Tab2-Select3").style.display = 'none'; //Not Display Tab2 
                                                document.getElementById("Tab2-Select4").style.display = 'none'; //Not Display Tab2 
                                                document.getElementById("Tab2-Select5").style.display = 'none'; //Not Display Tab2 
                                                document.getElementById("Tab2-Select6").style.display = 'none'; //Not Display Tab2 
                                                document.getElementById("Tab2-Select7").style.display = 'none'; //Not Display Tab2 
                                                document.getElementById("Tab2-Select8").style.display = 'none'; //Not Display Tab2 
                                                document.getElementById("Tab2-Select9").style.display = 'none'; //Not Display Tab2 
                                                document.getElementById("Tab2-Select10").style.display = 'none'; //Not Display Tab2 
                                                document.getElementById("Tab2-Select11").style.display = 'none'; //Not Display Tab2 
                                                document.getElementById("Tab2-Select12").style.display = 'none'; //Not Display Tab2 
                                                document.getElementById("Tab2-Select13").style.display = 'none'; //Not Display Tab2 
                                                document.getElementById("Tab2-Select14").style.display = 'none'; //Not Display Tab 2



                                                document.getElementById("Select1").style.display = 'none'; //Not Display Div name Test1
                                                document.getElementById("Select3").style.display = 'none'; //Not Display Div name Test1
                                                document.getElementById("Select4").style.display = 'none'; //Not Display Div name Test1
                                                document.getElementById("Select5").style.display = 'none'; //Not Display Div name Test1
                                                document.getElementById("Select6").style.display = 'none'; //Not Display Div name Test1
                                                document.getElementById("Select7").style.display = 'none'; //Not Display Div name Test1
                                                document.getElementById("Select8").style.display = 'none'; //Not Display Div name Test1
                                                document.getElementById("Select9").style.display = 'none'; //Not Display Div name Test1
                                                document.getElementById("Select10").style.display = 'none'; //Not Display Div name Test1
                                                document.getElementById("Select11").style.display = 'none'; //Not Display Div name Test1
                                                document.getElementById("Select12").style.display = 'none'; //Not Display Div name Test1
                                                document.getElementById("Select13").style.display = 'none'; //Not Display Div name Test1
                                                document.getElementById("Select14").style.display = 'none'; //Not Display Div name Test1



                                            }
                                            if (typebld == "trVella") {

                                                document.getElementById("Select3").style.display = '';

                                                document.getElementById("Tab5-Select3").style.display = ''; // Display Tab5
                                                document.getElementById("Tab5-Select1").style.display = 'none'; //Not Display Tab5 
                                                document.getElementById("Tab5-Select2").style.display = 'none'; //Not Display Tab5 
                                                document.getElementById("Tab5-Select4").style.display = 'none'; //Not Display Tab5 
                                                document.getElementById("Tab5-Select5").style.display = 'none'; //Not Display Tab5 
                                                document.getElementById("Tab5-Select6").style.display = 'none'; //Not Display Tab5 
                                                document.getElementById("Tab5-Select7").style.display = 'none'; //Not Display Tab5 
                                                document.getElementById("Tab5-Select8").style.display = 'none'; //Not Display Tab5 
                                                document.getElementById("Tab5-Select9").style.display = 'none'; //Not Display Tab5 
                                                document.getElementById("Tab5-Select10").style.display = 'none'; //Not Display Tab5 
                                                document.getElementById("Tab5-Select11").style.display = 'none'; //Not Display Tab5 
                                                document.getElementById("Tab5-Select12").style.display = 'none'; //Not Display Tab5 
                                                document.getElementById("Tab5-Select13").style.display = 'none'; //Not Display Tab5 
                                                document.getElementById("Tab5-Select14").style.display = 'none'; //Not Display Tab5

                                                document.getElementById("Tab4-Select3").style.display = ''; // Display Tab4
                                                document.getElementById("Tab4-Select1").style.display = 'none'; //Not Display Tab4 
                                                document.getElementById("Tab4-Select2").style.display = 'none'; //Not Display Tab4 
                                                document.getElementById("Tab4-Select4").style.display = 'none'; //Not Display Tab4 
                                                document.getElementById("Tab4-Select5").style.display = 'none'; //Not Display Tab4 
                                                document.getElementById("Tab4-Select6").style.display = 'none'; //Not Display Tab4 
                                                document.getElementById("Tab4-Select7").style.display = 'none'; //Not Display Tab4 
                                                document.getElementById("Tab4-Select8").style.display = 'none'; //Not Display Tab4 
                                                document.getElementById("Tab4-Select9").style.display = 'none'; //Not Display Tab4 
                                                document.getElementById("Tab4-Select10").style.display = 'none'; //Not Display Tab4 
                                                document.getElementById("Tab4-Select11").style.display = 'none'; //Not Display Tab4 
                                                document.getElementById("Tab4-Select12").style.display = 'none'; //Not Display Tab4 
                                                document.getElementById("Tab4-Select13").style.display = 'none'; //Not Display Tab4 
                                                document.getElementById("Tab4-Select14").style.display = 'none'; //Not Display Tab4

                                                document.getElementById("Tab3-Select3").style.display = ''; // Display Tab3
                                                document.getElementById("Tab3-Select1").style.display = 'none'; //Not Display Tab3 
                                                document.getElementById("Tab3-Select2").style.display = 'none'; //Not Display Tab3 
                                                document.getElementById("Tab3-Select4").style.display = 'none'; //Not Display Tab3 
                                                document.getElementById("Tab3-Select5").style.display = 'none'; //Not Display Tab3 
                                                document.getElementById("Tab3-Select6").style.display = 'none'; //Not Display Tab3 
                                                document.getElementById("Tab3-Select7").style.display = 'none'; //Not Display Tab3 
                                                document.getElementById("Tab3-Select8").style.display = 'none'; //Not Display Tab3 
                                                document.getElementById("Tab3-Select9").style.display = 'none'; //Not Display Tab3 
                                                document.getElementById("Tab3-Select10").style.display = 'none'; //Not Display Tab3 
                                                document.getElementById("Tab3-Select11").style.display = 'none'; //Not Display Tab3 
                                                document.getElementById("Tab3-Select12").style.display = 'none'; //Not Display Tab3 
                                                document.getElementById("Tab3-Select13").style.display = 'none'; //Not Display Tab3 
                                                document.getElementById("Tab3-Select14").style.display = 'none'; //Not Display Tab3


                                                document.getElementById("Tab2-Select3").style.display = ''; // Display Tab2
                                                document.getElementById("Tab2-Select1").style.display = 'none'; //Not Display Tab2 
                                                document.getElementById("Tab2-Select2").style.display = 'none'; //Not Display Tab2 
                                                document.getElementById("Tab2-Select4").style.display = 'none'; //Not Display Tab2 
                                                document.getElementById("Tab2-Select5").style.display = 'none'; //Not Display Tab2 
                                                document.getElementById("Tab2-Select6").style.display = 'none'; //Not Display Tab2 
                                                document.getElementById("Tab2-Select7").style.display = 'none'; //Not Display Tab2 
                                                document.getElementById("Tab2-Select8").style.display = 'none'; //Not Display Tab2 
                                                document.getElementById("Tab2-Select9").style.display = 'none'; //Not Display Tab2 
                                                document.getElementById("Tab2-Select10").style.display = 'none'; //Not Display Tab2 
                                                document.getElementById("Tab2-Select11").style.display = 'none'; //Not Display Tab2 
                                                document.getElementById("Tab2-Select12").style.display = 'none'; //Not Display Tab2 
                                                document.getElementById("Tab2-Select13").style.display = 'none'; //Not Display Tab2 
                                                document.getElementById("Tab2-Select14").style.display = 'none'; //Not Display Tab2




                                                document.getElementById("Select1").style.display = 'none'; //Not Display Div name Test1
                                                document.getElementById("Select2").style.display = 'none'; //Not Display Div name Test1
                                                document.getElementById("Select4").style.display = 'none'; //Not Display Div name Test1
                                                document.getElementById("Select5").style.display = 'none'; //Not Display Div name Test1
                                                document.getElementById("Select6").style.display = 'none'; //Not Display Div name Test1
                                                document.getElementById("Select7").style.display = 'none'; //Not Display Div name Test1
                                                document.getElementById("Select8").style.display = 'none'; //Not Display Div name Test1
                                                document.getElementById("Select9").style.display = 'none'; //Not Display Div name Test1
                                                document.getElementById("Select10").style.display = 'none'; //Not Display Div name Test1
                                                document.getElementById("Select11").style.display = 'none'; //Not Display Div name Test1
                                                document.getElementById("Select12").style.display = 'none'; //Not Display Div name Test1
                                                document.getElementById("Select13").style.display = 'none'; //Not Display Div name Test1
                                                document.getElementById("Select14").style.display = 'none'; //Not Display Div name Test1



                                            }
                                            if (typebld == "trbuilding") {

                                                document.getElementById("Select4").style.display = '';

                                                document.getElementById("Tab5-Select4").style.display = ''; // Display Tab5
                                                document.getElementById("Tab5-Select1").style.display = 'none'; //Not Display Tab5
                                                document.getElementById("Tab5-Select3").style.display = 'none'; //Not Display Tab5
                                                document.getElementById("Tab5-Select2").style.display = 'none'; //Not Display Tab5 
                                                document.getElementById("Tab5-Select5").style.display = 'none'; //Not Display Tab5  
                                                document.getElementById("Tab5-Select6").style.display = 'none'; //Not Display Tab5  
                                                document.getElementById("Tab5-Select7").style.display = 'none'; //Not Display Tab5  
                                                document.getElementById("Tab5-Select8").style.display = 'none'; //Not Display Tab5  
                                                document.getElementById("Tab5-Select9").style.display = 'none'; //Not Display Tab5 
                                                document.getElementById("Tab5-Select10").style.display = 'none'; //Not Display Tab5 
                                                document.getElementById("Tab5-Select11").style.display = 'none'; //Not Display Tab5 
                                                document.getElementById("Tab5-Select12").style.display = 'none'; //Not Display Tab5 
                                                document.getElementById("Tab5-Select13").style.display = 'none'; //Not Display Tab5 
                                                document.getElementById("Tab5-Select14").style.display = 'none'; //Not Display Tab5

                                                document.getElementById("Tab4-Select4").style.display = ''; // Display Tab4
                                                document.getElementById("Tab4-Select1").style.display = 'none'; //Not Display Tab4
                                                document.getElementById("Tab4-Select3").style.display = 'none'; //Not Display Tab4
                                                document.getElementById("Tab4-Select2").style.display = 'none'; //Not Display Tab4 
                                                document.getElementById("Tab4-Select5").style.display = 'none'; //Not Display Tab4  
                                                document.getElementById("Tab4-Select6").style.display = 'none'; //Not Display Tab4  
                                                document.getElementById("Tab4-Select7").style.display = 'none'; //Not Display Tab4  
                                                document.getElementById("Tab4-Select8").style.display = 'none'; //Not Display Tab4  
                                                document.getElementById("Tab4-Select9").style.display = 'none'; //Not Display Tab4 
                                                document.getElementById("Tab4-Select10").style.display = 'none'; //Not Display Tab4 
                                                document.getElementById("Tab4-Select11").style.display = 'none'; //Not Display Tab4 
                                                document.getElementById("Tab4-Select12").style.display = 'none'; //Not Display Tab4 
                                                document.getElementById("Tab4-Select13").style.display = 'none'; //Not Display Tab4 
                                                document.getElementById("Tab4-Select14").style.display = 'none'; //Not Display Tab4

                                                document.getElementById("Tab3-Select4").style.display = ''; // Display Tab3
                                                document.getElementById("Tab3-Select1").style.display = 'none'; //Not Display Tab3
                                                document.getElementById("Tab3-Select3").style.display = 'none'; //Not Display Tab3
                                                document.getElementById("Tab3-Select2").style.display = 'none'; //Not Display Tab3 
                                                document.getElementById("Tab3-Select5").style.display = 'none'; //Not Display Tab3  
                                                document.getElementById("Tab3-Select6").style.display = 'none'; //Not Display Tab3  
                                                document.getElementById("Tab3-Select7").style.display = 'none'; //Not Display Tab3  
                                                document.getElementById("Tab3-Select8").style.display = 'none'; //Not Display Tab3  
                                                document.getElementById("Tab3-Select9").style.display = 'none'; //Not Display Tab3 
                                                document.getElementById("Tab3-Select10").style.display = 'none'; //Not Display Tab3 
                                                document.getElementById("Tab3-Select11").style.display = 'none'; //Not Display Tab3 
                                                document.getElementById("Tab3-Select12").style.display = 'none'; //Not Display Tab3 
                                                document.getElementById("Tab3-Select13").style.display = 'none'; //Not Display Tab3 
                                                document.getElementById("Tab3-Select14").style.display = 'none'; //Not Display Tab3 


                                                document.getElementById("Tab2-Select4").style.display = ''; // Display Tab2
                                                document.getElementById("Tab2-Select1").style.display = 'none'; //Not Display Tab2
                                                document.getElementById("Tab2-Select3").style.display = 'none'; //Not Display Tab2
                                                document.getElementById("Tab2-Select2").style.display = 'none'; //Not Display Tab2 
                                                document.getElementById("Tab2-Select5").style.display = 'none'; //Not Display Tab2 1 
                                                document.getElementById("Tab2-Select6").style.display = 'none'; //Not Display Tab2 1 
                                                document.getElementById("Tab2-Select7").style.display = 'none'; //Not Display Tab2 1 
                                                document.getElementById("Tab2-Select8").style.display = 'none'; //Not Display Tab2 1 
                                                document.getElementById("Tab2-Select9").style.display = 'none'; //Not Display Tab2 1 
                                                document.getElementById("Tab2-Select10").style.display = 'none'; //Not Display Tab2 1 
                                                document.getElementById("Tab2-Select11").style.display = 'none'; //Not Display Tab2 1 
                                                document.getElementById("Tab2-Select12").style.display = 'none'; //Not Display Tab2 1 
                                                document.getElementById("Tab2-Select13").style.display = 'none'; //Not Display Tab2 1 
                                                document.getElementById("Tab2-Select14").style.display = 'none'; //Not Display Tab2 1 


                                                document.getElementById("Select1").style.display = 'none'; //Not Display Div name Test1
                                                document.getElementById("Select2").style.display = 'none'; //Not Display Div name Test1
                                                document.getElementById("Select3").style.display = 'none'; //Not Display Div name Test1
                                                document.getElementById("Select5").style.display = 'none'; //Not Display Div name Test1
                                                document.getElementById("Select6").style.display = 'none'; //Not Display Div name Test1
                                                document.getElementById("Select7").style.display = 'none'; //Not Display Div name Test1
                                                document.getElementById("Select8").style.display = 'none'; //Not Display Div name Test1
                                                document.getElementById("Select9").style.display = 'none'; //Not Display Div name Test1
                                                document.getElementById("Select10").style.display = 'none'; //Not Display Div name Test1
                                                document.getElementById("Select11").style.display = 'none'; //Not Display Div name Test1
                                                document.getElementById("Select12").style.display = 'none'; //Not Display Div name Test1
                                                document.getElementById("Select13").style.display = 'none'; //Not Display Div name Test1
                                                document.getElementById("Select14").style.display = 'none'; //Not Display Div name Test1



                                            }
                                            if (typebld == "trpalace") {

                                                document.getElementById("Select5").style.display = '';

                                                document.getElementById("Tab5-Select5").style.display = ''; // Display Tab5 
                                                document.getElementById("Tab5-Select1").style.display = 'none'; //Not Display Tab5 
                                                document.getElementById("Tab5-Select3").style.display = 'none'; //Not Display Tab5 
                                                document.getElementById("Tab5-Select2").style.display = 'none'; //Not Display Tab5 
                                                document.getElementById("Tab5-Select4").style.display = 'none'; //Not Display Tab5 
                                                document.getElementById("Tab5-Select6").style.display = 'none'; //Not Display Tab5 
                                                document.getElementById("Tab5-Select7").style.display = 'none'; //Not Display Tab5 
                                                document.getElementById("Tab5-Select8").style.display = 'none'; //Not Display Tab5 
                                                document.getElementById("Tab5-Select9").style.display = 'none'; //Not Display Tab5 
                                                document.getElementById("Tab5-Select10").style.display = 'none'; //Not Display Tab5 
                                                document.getElementById("Tab5-Select11").style.display = 'none'; //Not Display Tab5 
                                                document.getElementById("Tab5-Select12").style.display = 'none'; //Not Display Tab5 
                                                document.getElementById("Tab5-Select13").style.display = 'none'; //Not Display Tab5 
                                                document.getElementById("Tab5-Select14").style.display = 'none'; //Not Display Tab5 

                                                document.getElementById("Tab4-Select5").style.display = ''; // Display Tab4 
                                                document.getElementById("Tab4-Select1").style.display = 'none'; //Not Display Tab4 
                                                document.getElementById("Tab4-Select3").style.display = 'none'; //Not Display Tab4 
                                                document.getElementById("Tab4-Select2").style.display = 'none'; //Not Display Tab4 
                                                document.getElementById("Tab4-Select4").style.display = 'none'; //Not Display Tab4 
                                                document.getElementById("Tab4-Select6").style.display = 'none'; //Not Display Tab4 
                                                document.getElementById("Tab4-Select7").style.display = 'none'; //Not Display Tab4 
                                                document.getElementById("Tab4-Select8").style.display = 'none'; //Not Display Tab4 
                                                document.getElementById("Tab4-Select9").style.display = 'none'; //Not Display Tab4 
                                                document.getElementById("Tab4-Select10").style.display = 'none'; //Not Display Tab4 
                                                document.getElementById("Tab4-Select11").style.display = 'none'; //Not Display Tab4 
                                                document.getElementById("Tab4-Select12").style.display = 'none'; //Not Display Tab4 
                                                document.getElementById("Tab4-Select13").style.display = 'none'; //Not Display Tab4 
                                                document.getElementById("Tab4-Select14").style.display = 'none'; //Not Display Tab4 

                                                document.getElementById("Tab3-Select5").style.display = ''; // Display Tab3 
                                                document.getElementById("Tab3-Select1").style.display = 'none'; //Not Display Tab3 
                                                document.getElementById("Tab3-Select3").style.display = 'none'; //Not Display Tab3 
                                                document.getElementById("Tab3-Select2").style.display = 'none'; //Not Display Tab3 
                                                document.getElementById("Tab3-Select4").style.display = 'none'; //Not Display Tab3 
                                                document.getElementById("Tab3-Select6").style.display = 'none'; //Not Display Tab3 
                                                document.getElementById("Tab3-Select7").style.display = 'none'; //Not Display Tab3 
                                                document.getElementById("Tab3-Select8").style.display = 'none'; //Not Display Tab3 
                                                document.getElementById("Tab3-Select9").style.display = 'none'; //Not Display Tab3 
                                                document.getElementById("Tab3-Select10").style.display = 'none'; //Not Display Tab3 
                                                document.getElementById("Tab3-Select11").style.display = 'none'; //Not Display Tab3 
                                                document.getElementById("Tab3-Select12").style.display = 'none'; //Not Display Tab3 
                                                document.getElementById("Tab3-Select13").style.display = 'none'; //Not Display Tab3 
                                                document.getElementById("Tab3-Select14").style.display = 'none'; //Not Display Tab3 



                                                document.getElementById("Tab2-Select5").style.display = ''; // Display Tab2 
                                                document.getElementById("Tab2-Select1").style.display = 'none'; //Not Display Tab2 
                                                document.getElementById("Tab2-Select3").style.display = 'none'; //Not Display Tab2 
                                                document.getElementById("Tab2-Select2").style.display = 'none'; //Not Display Tab2 
                                                document.getElementById("Tab2-Select4").style.display = 'none'; //Not Display Tab2 
                                                document.getElementById("Tab2-Select6").style.display = 'none'; //Not Display Tab2 
                                                document.getElementById("Tab2-Select7").style.display = 'none'; //Not Display Tab2 
                                                document.getElementById("Tab2-Select8").style.display = 'none'; //Not Display Tab2 
                                                document.getElementById("Tab2-Select9").style.display = 'none'; //Not Display Tab2 
                                                document.getElementById("Tab2-Select10").style.display = 'none'; //Not Display Tab2 
                                                document.getElementById("Tab2-Select11").style.display = 'none'; //Not Display Tab2 
                                                document.getElementById("Tab2-Select12").style.display = 'none'; //Not Display Tab2 
                                                document.getElementById("Tab2-Select13").style.display = 'none'; //Not Display Tab2 
                                                document.getElementById("Tab2-Select14").style.display = 'none'; //Not Display Tab2 

                                                document.getElementById("Select1").style.display = 'none'; //Not Display Div name Test1
                                                document.getElementById("Select2").style.display = 'none'; //Not Display Div name Test1
                                                document.getElementById("Select3").style.display = 'none'; //Not Display Div name Test1
                                                document.getElementById("Select4").style.display = 'none'; //Not Display Div name Test1
                                                document.getElementById("Select6").style.display = 'none'; //Not Display Div name Test1
                                                document.getElementById("Select7").style.display = 'none'; //Not Display Div name Test1
                                                document.getElementById("Select8").style.display = 'none'; //Not Display Div name Test1
                                                document.getElementById("Select9").style.display = 'none'; //Not Display Div name Test1
                                                document.getElementById("Select10").style.display = 'none'; //Not Display Div name Test1
                                                document.getElementById("Select11").style.display = 'none'; //Not Display Div name Test1
                                                document.getElementById("Select12").style.display = 'none'; //Not Display Div name Test1
                                                document.getElementById("Select13").style.display = 'none'; //Not Display Div name Test1
                                                document.getElementById("Select14").style.display = 'none'; //Not Display Div name Test1



                                            }
                                            if (typebld == "trfair") {

                                                document.getElementById("Select6").style.display = '';

                                                document.getElementById("Tab5-Select6").style.display = ''; // Display Tab5
                                                document.getElementById("Tab5-Select1").style.display = 'none'; //Not Display Tab5 
                                                document.getElementById("Tab5-Select3").style.display = 'none'; //Not Display Tab5 
                                                document.getElementById("Tab5-Select2").style.display = 'none'; //Not Display Tab5 
                                                document.getElementById("Tab5-Select4").style.display = 'none'; //Not Display Tab5 
                                                document.getElementById("Tab5-Select5").style.display = 'none'; //Not Display Tab5 
                                                document.getElementById("Tab5-Select7").style.display = 'none'; //Not Display Tab5 
                                                document.getElementById("Tab5-Select8").style.display = 'none'; //Not Display Tab5 
                                                document.getElementById("Tab5-Select9").style.display = 'none'; //Not Display Tab5 
                                                document.getElementById("Tab5-Select10").style.display = 'none'; //Not Display Tab5 
                                                document.getElementById("Tab5-Select11").style.display = 'none'; //Not Display Tab5 
                                                document.getElementById("Tab5-Select12").style.display = 'none'; //Not Display Tab5 
                                                document.getElementById("Tab5-Select13").style.display = 'none'; //Not Display Tab5 
                                                document.getElementById("Tab5-Select14").style.display = 'none'; //Not Display Tab5 

                                                document.getElementById("Tab4-Select6").style.display = ''; // Display Tab4
                                                document.getElementById("Tab4-Select1").style.display = 'none'; //Not Display Tab4 
                                                document.getElementById("Tab4-Select3").style.display = 'none'; //Not Display Tab4 
                                                document.getElementById("Tab4-Select2").style.display = 'none'; //Not Display Tab4 
                                                document.getElementById("Tab4-Select4").style.display = 'none'; //Not Display Tab4 
                                                document.getElementById("Tab4-Select5").style.display = 'none'; //Not Display Tab4 
                                                document.getElementById("Tab4-Select7").style.display = 'none'; //Not Display Tab4 
                                                document.getElementById("Tab4-Select8").style.display = 'none'; //Not Display Tab4 
                                                document.getElementById("Tab4-Select9").style.display = 'none'; //Not Display Tab4 
                                                document.getElementById("Tab4-Select10").style.display = 'none'; //Not Display Tab4 
                                                document.getElementById("Tab4-Select11").style.display = 'none'; //Not Display Tab4 
                                                document.getElementById("Tab4-Select12").style.display = 'none'; //Not Display Tab4 
                                                document.getElementById("Tab4-Select13").style.display = 'none'; //Not Display Tab4 
                                                document.getElementById("Tab4-Select14").style.display = 'none'; //Not Display Tab4 

                                                document.getElementById("Tab3-Select6").style.display = ''; // Display Tab3
                                                document.getElementById("Tab3-Select1").style.display = 'none'; //Not Display Tab3 
                                                document.getElementById("Tab3-Select3").style.display = 'none'; //Not Display Tab3 
                                                document.getElementById("Tab3-Select2").style.display = 'none'; //Not Display Tab3 
                                                document.getElementById("Tab3-Select4").style.display = 'none'; //Not Display Tab3 
                                                document.getElementById("Tab3-Select5").style.display = 'none'; //Not Display Tab3 
                                                document.getElementById("Tab3-Select7").style.display = 'none'; //Not Display Tab3 
                                                document.getElementById("Tab3-Select8").style.display = 'none'; //Not Display Tab3 
                                                document.getElementById("Tab3-Select9").style.display = 'none'; //Not Display Tab3 
                                                document.getElementById("Tab3-Select10").style.display = 'none'; //Not Display Tab3 
                                                document.getElementById("Tab3-Select11").style.display = 'none'; //Not Display Tab3 
                                                document.getElementById("Tab3-Select12").style.display = 'none'; //Not Display Tab3 
                                                document.getElementById("Tab3-Select13").style.display = 'none'; //Not Display Tab3 
                                                document.getElementById("Tab3-Select14").style.display = 'none'; //Not Display Tab3 


                                                document.getElementById("Tab2-Select6").style.display = ''; // Display Tab2
                                                document.getElementById("Tab2-Select1").style.display = 'none'; //Not Display Tab2 
                                                document.getElementById("Tab2-Select3").style.display = 'none'; //Not Display Tab2 
                                                document.getElementById("Tab2-Select2").style.display = 'none'; //Not Display Tab2 
                                                document.getElementById("Tab2-Select4").style.display = 'none'; //Not Display Tab2 
                                                document.getElementById("Tab2-Select5").style.display = 'none'; //Not Display Tab2 
                                                document.getElementById("Tab2-Select7").style.display = 'none'; //Not Display Tab2 
                                                document.getElementById("Tab2-Select8").style.display = 'none'; //Not Display Tab2 
                                                document.getElementById("Tab2-Select9").style.display = 'none'; //Not Display Tab2 
                                                document.getElementById("Tab2-Select10").style.display = 'none'; //Not Display Tab2 
                                                document.getElementById("Tab2-Select11").style.display = 'none'; //Not Display Tab2 
                                                document.getElementById("Tab2-Select12").style.display = 'none'; //Not Display Tab2 
                                                document.getElementById("Tab2-Select13").style.display = 'none'; //Not Display Tab2 
                                                document.getElementById("Tab2-Select14").style.display = 'none'; //Not Display Tab2 


                                                document.getElementById("Select1").style.display = 'none'; //Not Display Div name Test1
                                                document.getElementById("Select2").style.display = 'none'; //Not Display Div name Test1
                                                document.getElementById("Select3").style.display = 'none'; //Not Display Div name Test1
                                                document.getElementById("Select4").style.display = 'none'; //Not Display Div name Test1
                                                document.getElementById("Select5").style.display = 'none'; //Not Display Div name Test1
                                                document.getElementById("Select7").style.display = 'none'; //Not Display Div name Test1
                                                document.getElementById("Select8").style.display = 'none'; //Not Display Div name Test1
                                                document.getElementById("Select9").style.display = 'none'; //Not Display Div name Test1
                                                document.getElementById("Select10").style.display = 'none'; //Not Display Div name Test1
                                                document.getElementById("Select11").style.display = 'none'; //Not Display Div name Test1
                                                document.getElementById("Select12").style.display = 'none'; //Not Display Div name Test1
                                                document.getElementById("Select13").style.display = 'none'; //Not Display Div name Test1
                                                document.getElementById("Select14").style.display = 'none'; //Not Display Div name Test1



                                            }
                                            if (typebld == "trOffice") {

                                                document.getElementById("Select7").style.display = '';


                                                document.getElementById("Tab5-Select7").style.display = ''; // Display Tab5 
                                                document.getElementById("Tab5-Select1").style.display = 'none'; //Not Display Tab5 
                                                document.getElementById("Tab5-Select3").style.display = 'none'; //Not Display Tab5 
                                                document.getElementById("Tab5-Select2").style.display = 'none'; //Not Display Tab5 
                                                document.getElementById("Tab5-Select4").style.display = 'none'; //Not Display Tab5 
                                                document.getElementById("Tab5-Select5").style.display = 'none'; //Not Display Tab5 
                                                document.getElementById("Tab5-Select6").style.display = 'none'; //Not Display Tab5 
                                                document.getElementById("Tab5-Select8").style.display = 'none'; //Not Display Tab5 
                                                document.getElementById("Tab5-Select9").style.display = 'none'; //Not Display Tab5 
                                                document.getElementById("Tab5-Select10").style.display = 'none'; //Not Display Tab5 
                                                document.getElementById("Tab5-Select11").style.display = 'none'; //Not Display Tab5 
                                                document.getElementById("Tab5-Select12").style.display = 'none'; //Not Display Tab5 
                                                document.getElementById("Tab5-Select13").style.display = 'none'; //Not Display Tab5 
                                                document.getElementById("Tab5-Select14").style.display = 'none'; //Not Display Tab5 

                                                document.getElementById("Tab4-Select7").style.display = ''; // Display Tab4 
                                                document.getElementById("Tab4-Select1").style.display = 'none'; //Not Display Tab4 
                                                document.getElementById("Tab4-Select3").style.display = 'none'; //Not Display Tab4 
                                                document.getElementById("Tab4-Select2").style.display = 'none'; //Not Display Tab4 
                                                document.getElementById("Tab4-Select4").style.display = 'none'; //Not Display Tab4 
                                                document.getElementById("Tab4-Select5").style.display = 'none'; //Not Display Tab4 
                                                document.getElementById("Tab4-Select6").style.display = 'none'; //Not Display Tab4 
                                                document.getElementById("Tab4-Select8").style.display = 'none'; //Not Display Tab4 
                                                document.getElementById("Tab4-Select9").style.display = 'none'; //Not Display Tab4 
                                                document.getElementById("Tab4-Select10").style.display = 'none'; //Not Display Tab4 
                                                document.getElementById("Tab4-Select11").style.display = 'none'; //Not Display Tab4 
                                                document.getElementById("Tab4-Select12").style.display = 'none'; //Not Display Tab4 
                                                document.getElementById("Tab4-Select13").style.display = 'none'; //Not Display Tab4 
                                                document.getElementById("Tab4-Select14").style.display = 'none'; //Not Display Tab4 

                                                document.getElementById("Tab3-Select7").style.display = ''; // Display Tab3 
                                                document.getElementById("Tab3-Select1").style.display = 'none'; //Not Display Tab3 
                                                document.getElementById("Tab3-Select3").style.display = 'none'; //Not Display Tab3 
                                                document.getElementById("Tab3-Select2").style.display = 'none'; //Not Display Tab3 
                                                document.getElementById("Tab3-Select4").style.display = 'none'; //Not Display Tab3 
                                                document.getElementById("Tab3-Select5").style.display = 'none'; //Not Display Tab3 
                                                document.getElementById("Tab3-Select6").style.display = 'none'; //Not Display Tab3 
                                                document.getElementById("Tab3-Select8").style.display = 'none'; //Not Display Tab3 
                                                document.getElementById("Tab3-Select9").style.display = 'none'; //Not Display Tab3 
                                                document.getElementById("Tab3-Select10").style.display = 'none'; //Not Display Tab3 
                                                document.getElementById("Tab3-Select11").style.display = 'none'; //Not Display Tab3 
                                                document.getElementById("Tab3-Select12").style.display = 'none'; //Not Display Tab3 
                                                document.getElementById("Tab3-Select13").style.display = 'none'; //Not Display Tab3 
                                                document.getElementById("Tab3-Select14").style.display = 'none'; //Not Display Tab3 




                                                document.getElementById("Tab2-Select7").style.display = ''; // Display Tab2 
                                                document.getElementById("Tab2-Select1").style.display = 'none'; //Not Display Tab2 
                                                document.getElementById("Tab2-Select3").style.display = 'none'; //Not Display Tab2 
                                                document.getElementById("Tab2-Select2").style.display = 'none'; //Not Display Tab2 
                                                document.getElementById("Tab2-Select4").style.display = 'none'; //Not Display Tab2 
                                                document.getElementById("Tab2-Select5").style.display = 'none'; //Not Display Tab2 
                                                document.getElementById("Tab2-Select6").style.display = 'none'; //Not Display Tab2 
                                                document.getElementById("Tab2-Select8").style.display = 'none'; //Not Display Tab2 
                                                document.getElementById("Tab2-Select9").style.display = 'none'; //Not Display Tab2 
                                                document.getElementById("Tab2-Select10").style.display = 'none'; //Not Display Tab2 
                                                document.getElementById("Tab2-Select11").style.display = 'none'; //Not Display Tab2 
                                                document.getElementById("Tab2-Select12").style.display = 'none'; //Not Display Tab2 
                                                document.getElementById("Tab2-Select13").style.display = 'none'; //Not Display Tab2 
                                                document.getElementById("Tab2-Select14").style.display = 'none'; //Not Display Tab2 


                                                document.getElementById("Select1").style.display = 'none'; //Not Display Div name Test1
                                                document.getElementById("Select2").style.display = 'none'; //Not Display Div name Test1
                                                document.getElementById("Select3").style.display = 'none'; //Not Display Div name Test1
                                                document.getElementById("Select4").style.display = 'none'; //Not Display Div name Test1
                                                document.getElementById("Select5").style.display = 'none'; //Not Display Div name Test1
                                                document.getElementById("Select6").style.display = 'none'; //Not Display Div name Test1
                                                document.getElementById("Select8").style.display = 'none'; //Not Display Div name Test1
                                                document.getElementById("Select9").style.display = 'none'; //Not Display Div name Test1
                                                document.getElementById("Select10").style.display = 'none'; //Not Display Div name Test1
                                                document.getElementById("Select11").style.display = 'none'; //Not Display Div name Test1
                                                document.getElementById("Select12").style.display = 'none'; //Not Display Div name Test1
                                                document.getElementById("Select13").style.display = 'none'; //Not Display Div name Test1
                                                document.getElementById("Select14").style.display = 'none'; //Not Display Div name Test1



                                            }
                                            if (typebld == "trofficeTrad") {

                                                document.getElementById("Select8").style.display = '';



                                                document.getElementById("Tab5-Select8").style.display = ''; // Display Tab5
                                                document.getElementById("Tab5-Select1").style.display = 'none'; //Not Display Tab5 
                                                document.getElementById("Tab5-Select3").style.display = 'none'; //Not Display Tab5 
                                                document.getElementById("Tab5-Select2").style.display = 'none'; //Not Display Tab5 
                                                document.getElementById("Tab5-Select4").style.display = 'none'; //Not Display Tab5 
                                                document.getElementById("Tab5-Select5").style.display = 'none'; //Not Display Tab5 
                                                document.getElementById("Tab5-Select6").style.display = 'none'; //Not Display Tab5 
                                                document.getElementById("Tab5-Select7").style.display = 'none'; //Not Display Tab5 
                                                document.getElementById("Tab5-Select9").style.display = 'none'; //Not Display Tab5 
                                                document.getElementById("Tab5-Select10").style.display = 'none'; //Not Display Tab5 
                                                document.getElementById("Tab5-Select11").style.display = 'none'; //Not Display Tab5 
                                                document.getElementById("Tab5-Select12").style.display = 'none'; //Not Display Tab5 
                                                document.getElementById("Tab5-Select13").style.display = 'none'; //Not Display Tab5 
                                                document.getElementById("Tab5-Select14").style.display = 'none'; //Not Display Tab5 


                                                document.getElementById("Tab4-Select8").style.display = ''; // Display Tab4
                                                document.getElementById("Tab4-Select1").style.display = 'none'; //Not Display Tab4 
                                                document.getElementById("Tab4-Select3").style.display = 'none'; //Not Display Tab4 
                                                document.getElementById("Tab4-Select2").style.display = 'none'; //Not Display Tab4 
                                                document.getElementById("Tab4-Select4").style.display = 'none'; //Not Display Tab4 
                                                document.getElementById("Tab4-Select5").style.display = 'none'; //Not Display Tab4 
                                                document.getElementById("Tab4-Select6").style.display = 'none'; //Not Display Tab4 
                                                document.getElementById("Tab4-Select7").style.display = 'none'; //Not Display Tab4 
                                                document.getElementById("Tab4-Select9").style.display = 'none'; //Not Display Tab4 
                                                document.getElementById("Tab4-Select10").style.display = 'none'; //Not Display Tab4 
                                                document.getElementById("Tab4-Select11").style.display = 'none'; //Not Display Tab4 
                                                document.getElementById("Tab4-Select12").style.display = 'none'; //Not Display Tab4 
                                                document.getElementById("Tab4-Select13").style.display = 'none'; //Not Display Tab4 
                                                document.getElementById("Tab4-Select14").style.display = 'none'; //Not Display Tab4 


                                                document.getElementById("Tab3-Select8").style.display = ''; // Display Tab3
                                                document.getElementById("Tab3-Select1").style.display = 'none'; //Not Display Tab3 
                                                document.getElementById("Tab3-Select3").style.display = 'none'; //Not Display Tab3 
                                                document.getElementById("Tab3-Select2").style.display = 'none'; //Not Display Tab3 
                                                document.getElementById("Tab3-Select4").style.display = 'none'; //Not Display Tab3 
                                                document.getElementById("Tab3-Select5").style.display = 'none'; //Not Display Tab3 
                                                document.getElementById("Tab3-Select6").style.display = 'none'; //Not Display Tab3 
                                                document.getElementById("Tab3-Select7").style.display = 'none'; //Not Display Tab3 
                                                document.getElementById("Tab3-Select9").style.display = 'none'; //Not Display Tab3 
                                                document.getElementById("Tab3-Select10").style.display = 'none'; //Not Display Tab3 
                                                document.getElementById("Tab3-Select11").style.display = 'none'; //Not Display Tab3 
                                                document.getElementById("Tab3-Select12").style.display = 'none'; //Not Display Tab3 
                                                document.getElementById("Tab3-Select13").style.display = 'none'; //Not Display Tab3 
                                                document.getElementById("Tab3-Select14").style.display = 'none'; //Not Display Tab3 



                                                document.getElementById("Tab2-Select8").style.display = ''; // Display Tab2
                                                document.getElementById("Tab2-Select1").style.display = 'none'; //Not Display Tab2 
                                                document.getElementById("Tab2-Select3").style.display = 'none'; //Not Display Tab2 
                                                document.getElementById("Tab2-Select2").style.display = 'none'; //Not Display Tab2 
                                                document.getElementById("Tab2-Select4").style.display = 'none'; //Not Display Tab2 
                                                document.getElementById("Tab2-Select5").style.display = 'none'; //Not Display Tab2 
                                                document.getElementById("Tab2-Select6").style.display = 'none'; //Not Display Tab2 
                                                document.getElementById("Tab2-Select7").style.display = 'none'; //Not Display Tab2 
                                                document.getElementById("Tab2-Select9").style.display = 'none'; //Not Display Tab2 
                                                document.getElementById("Tab2-Select10").style.display = 'none'; //Not Display Tab2 
                                                document.getElementById("Tab2-Select11").style.display = 'none'; //Not Display Tab2 
                                                document.getElementById("Tab2-Select12").style.display = 'none'; //Not Display Tab2 
                                                document.getElementById("Tab2-Select13").style.display = 'none'; //Not Display Tab2 
                                                document.getElementById("Tab2-Select14").style.display = 'none'; //Not Display Tab2 



                                                document.getElementById("Select1").style.display = 'none'; //Not Display Div name Test1
                                                document.getElementById("Select2").style.display = 'none'; //Not Display Div name Test1
                                                document.getElementById("Select3").style.display = 'none'; //Not Display Div name Test1
                                                document.getElementById("Select4").style.display = 'none'; //Not Display Div name Test1
                                                document.getElementById("Select5").style.display = 'none'; //Not Display Div name Test1
                                                document.getElementById("Select6").style.display = 'none'; //Not Display Div name Test1
                                                document.getElementById("Select7").style.display = 'none'; //Not Display Div name Test1
                                                document.getElementById("Select9").style.display = 'none'; //Not Display Div name Test1
                                                document.getElementById("Select10").style.display = 'none'; //Not Display Div name Test1
                                                document.getElementById("Select11").style.display = 'none'; //Not Display Div name Test1
                                                document.getElementById("Select12").style.display = 'none'; //Not Display Div name Test1
                                                document.getElementById("Select13").style.display = 'none'; //Not Display Div name Test1
                                                document.getElementById("Select14").style.display = 'none'; //Not Display Div name Test1



                                            }
                                            if (typebld == "trShalle") {

                                                document.getElementById("Select9").style.display = '';



                                                document.getElementById("Tab5-Select9").style.display = ''; // Display Tab5
                                                document.getElementById("Tab5-Select1").style.display = 'none'; //Not Display Tab5 
                                                document.getElementById("Tab5-Select3").style.display = 'none'; //Not Display Tab5 
                                                document.getElementById("Tab5-Select2").style.display = 'none'; //Not Display Tab5 
                                                document.getElementById("Tab5-Select4").style.display = 'none'; //Not Display Tab5 
                                                document.getElementById("Tab5-Select5").style.display = 'none'; //Not Display Tab5 
                                                document.getElementById("Tab5-Select6").style.display = 'none'; //Not Display Tab5 
                                                document.getElementById("Tab5-Select7").style.display = 'none'; //Not Display Tab5 
                                                document.getElementById("Tab5-Select8").style.display = 'none'; //Not Display Tab5 
                                                document.getElementById("Tab5-Select10").style.display = 'none'; //Not Display Tab5 
                                                document.getElementById("Tab5-Select11").style.display = 'none'; //Not Display Tab5 
                                                document.getElementById("Tab5-Select12").style.display = 'none'; //Not Display Tab5 
                                                document.getElementById("Tab5-Select13").style.display = 'none'; //Not Display Tab5 
                                                document.getElementById("Tab5-Select14").style.display = 'none'; //Not Display Tab5 

                                                document.getElementById("Tab4-Select9").style.display = ''; // Display Tab4
                                                document.getElementById("Tab4-Select1").style.display = 'none'; //Not Display Tab4 
                                                document.getElementById("Tab4-Select3").style.display = 'none'; //Not Display Tab4 
                                                document.getElementById("Tab4-Select2").style.display = 'none'; //Not Display Tab4 
                                                document.getElementById("Tab4-Select4").style.display = 'none'; //Not Display Tab4 
                                                document.getElementById("Tab4-Select5").style.display = 'none'; //Not Display Tab4 
                                                document.getElementById("Tab4-Select6").style.display = 'none'; //Not Display Tab4 
                                                document.getElementById("Tab4-Select7").style.display = 'none'; //Not Display Tab4 
                                                document.getElementById("Tab4-Select8").style.display = 'none'; //Not Display Tab4 
                                                document.getElementById("Tab4-Select10").style.display = 'none'; //Not Display Tab4 
                                                document.getElementById("Tab4-Select11").style.display = 'none'; //Not Display Tab4 
                                                document.getElementById("Tab4-Select12").style.display = 'none'; //Not Display Tab4 
                                                document.getElementById("Tab4-Select13").style.display = 'none'; //Not Display Tab4 
                                                document.getElementById("Tab4-Select14").style.display = 'none'; //Not Display Tab4 

                                                document.getElementById("Tab3-Select9").style.display = ''; // Display Tab3
                                                document.getElementById("Tab3-Select1").style.display = 'none'; //Not Display Tab3 
                                                document.getElementById("Tab3-Select3").style.display = 'none'; //Not Display Tab3 
                                                document.getElementById("Tab3-Select2").style.display = 'none'; //Not Display Tab3 
                                                document.getElementById("Tab3-Select4").style.display = 'none'; //Not Display Tab3 
                                                document.getElementById("Tab3-Select5").style.display = 'none'; //Not Display Tab3 
                                                document.getElementById("Tab3-Select6").style.display = 'none'; //Not Display Tab3 
                                                document.getElementById("Tab3-Select7").style.display = 'none'; //Not Display Tab3 
                                                document.getElementById("Tab3-Select8").style.display = 'none'; //Not Display Tab3 
                                                document.getElementById("Tab3-Select10").style.display = 'none'; //Not Display Tab3 
                                                document.getElementById("Tab3-Select11").style.display = 'none'; //Not Display Tab3 
                                                document.getElementById("Tab3-Select12").style.display = 'none'; //Not Display Tab3 
                                                document.getElementById("Tab3-Select13").style.display = 'none'; //Not Display Tab3 
                                                document.getElementById("Tab3-Select14").style.display = 'none'; //Not Display Tab3 


                                                document.getElementById("Tab2-Select9").style.display = ''; // Display Tab2
                                                document.getElementById("Tab2-Select1").style.display = 'none'; //Not Display Tab2 
                                                document.getElementById("Tab2-Select3").style.display = 'none'; //Not Display Tab2 
                                                document.getElementById("Tab2-Select2").style.display = 'none'; //Not Display Tab2 
                                                document.getElementById("Tab2-Select4").style.display = 'none'; //Not Display Tab2 
                                                document.getElementById("Tab2-Select5").style.display = 'none'; //Not Display Tab2 
                                                document.getElementById("Tab2-Select6").style.display = 'none'; //Not Display Tab2 
                                                document.getElementById("Tab2-Select7").style.display = 'none'; //Not Display Tab2 
                                                document.getElementById("Tab2-Select8").style.display = 'none'; //Not Display Tab2 
                                                document.getElementById("Tab2-Select10").style.display = 'none'; //Not Display Tab2 
                                                document.getElementById("Tab2-Select11").style.display = 'none'; //Not Display Tab2 
                                                document.getElementById("Tab2-Select12").style.display = 'none'; //Not Display Tab2 
                                                document.getElementById("Tab2-Select13").style.display = 'none'; //Not Display Tab2 
                                                document.getElementById("Tab2-Select14").style.display = 'none'; //Not Display Tab2 



                                                document.getElementById("Select1").style.display = 'none'; //Not Display Div name Test1
                                                document.getElementById("Select2").style.display = 'none'; //Not Display Div name Test1
                                                document.getElementById("Select3").style.display = 'none'; //Not Display Div name Test1
                                                document.getElementById("Select4").style.display = 'none'; //Not Display Div name Test1
                                                document.getElementById("Select5").style.display = 'none'; //Not Display Div name Test1
                                                document.getElementById("Select6").style.display = 'none'; //Not Display Div name Test1
                                                document.getElementById("Select7").style.display = 'none'; //Not Display Div name Test1
                                                document.getElementById("Select8").style.display = 'none'; //Not Display Div name Test1
                                                document.getElementById("Select10").style.display = 'none'; //Not Display Div name Test1
                                                document.getElementById("Select11").style.display = 'none'; //Not Display Div name Test1
                                                document.getElementById("Select12").style.display = 'none'; //Not Display Div name Test1
                                                document.getElementById("Select13").style.display = 'none'; //Not Display Div name Test1
                                                document.getElementById("Select14").style.display = 'none'; //Not Display Div name Test1



                                            }
                                            if (typebld == "trcontainer") {

                                                document.getElementById("Select10").style.display = '';


                                                document.getElementById("Tab5-Select10").style.display = ''; // Display Tab5
                                                document.getElementById("Tab5-Select1").style.display = 'none'; //Not Display Tab5 
                                                document.getElementById("Tab5-Select3").style.display = 'none'; //Not Display Tab5 
                                                document.getElementById("Tab5-Select2").style.display = 'none'; //Not Display Tab5 
                                                document.getElementById("Tab5-Select4").style.display = 'none'; //Not Display Tab5 
                                                document.getElementById("Tab5-Select5").style.display = 'none'; //Not Display Tab5 
                                                document.getElementById("Tab5-Select6").style.display = 'none'; //Not Display Tab5 
                                                document.getElementById("Tab5-Select7").style.display = 'none'; //Not Display Tab5 
                                                document.getElementById("Tab5-Select8").style.display = 'none'; //Not Display Tab5 
                                                document.getElementById("Tab5-Select9").style.display = 'none'; //Not Display Tab5 
                                                document.getElementById("Tab5-Select11").style.display = 'none'; //Not Display Tab5 
                                                document.getElementById("Tab5-Select12").style.display = 'none'; //Not Display Tab5 
                                                document.getElementById("Tab5-Select13").style.display = 'none'; //Not Display Tab5 
                                                document.getElementById("Tab5-Select14").style.display = 'none'; //Not Display Tab5 

                                                document.getElementById("Tab4-Select10").style.display = ''; // Display Tab4
                                                document.getElementById("Tab4-Select1").style.display = 'none'; //Not Display Tab4 
                                                document.getElementById("Tab4-Select3").style.display = 'none'; //Not Display Tab4 
                                                document.getElementById("Tab4-Select2").style.display = 'none'; //Not Display Tab4 
                                                document.getElementById("Tab4-Select4").style.display = 'none'; //Not Display Tab4 
                                                document.getElementById("Tab4-Select5").style.display = 'none'; //Not Display Tab4 
                                                document.getElementById("Tab4-Select6").style.display = 'none'; //Not Display Tab4 
                                                document.getElementById("Tab4-Select7").style.display = 'none'; //Not Display Tab4 
                                                document.getElementById("Tab4-Select8").style.display = 'none'; //Not Display Tab4 
                                                document.getElementById("Tab4-Select9").style.display = 'none'; //Not Display Tab4 
                                                document.getElementById("Tab4-Select11").style.display = 'none'; //Not Display Tab4 
                                                document.getElementById("Tab4-Select12").style.display = 'none'; //Not Display Tab4 
                                                document.getElementById("Tab4-Select13").style.display = 'none'; //Not Display Tab4 
                                                document.getElementById("Tab4-Select14").style.display = 'none'; //Not Display Tab4 

                                                document.getElementById("Tab3-Select10").style.display = ''; // Display Tab3
                                                document.getElementById("Tab3-Select1").style.display = 'none'; //Not Display Tab3 
                                                document.getElementById("Tab3-Select3").style.display = 'none'; //Not Display Tab3 
                                                document.getElementById("Tab3-Select2").style.display = 'none'; //Not Display Tab3 
                                                document.getElementById("Tab3-Select4").style.display = 'none'; //Not Display Tab3 
                                                document.getElementById("Tab3-Select5").style.display = 'none'; //Not Display Tab3 
                                                document.getElementById("Tab3-Select6").style.display = 'none'; //Not Display Tab3 
                                                document.getElementById("Tab3-Select7").style.display = 'none'; //Not Display Tab3 
                                                document.getElementById("Tab3-Select8").style.display = 'none'; //Not Display Tab3 
                                                document.getElementById("Tab3-Select9").style.display = 'none'; //Not Display Tab3 
                                                document.getElementById("Tab3-Select11").style.display = 'none'; //Not Display Tab3 
                                                document.getElementById("Tab3-Select12").style.display = 'none'; //Not Display Tab3 
                                                document.getElementById("Tab3-Select13").style.display = 'none'; //Not Display Tab3 
                                                document.getElementById("Tab3-Select14").style.display = 'none'; //Not Display Tab3 



                                                document.getElementById("Tab2-Select10").style.display = ''; // Display Tab2
                                                document.getElementById("Tab2-Select1").style.display = 'none'; //Not Display Tab2 
                                                document.getElementById("Tab2-Select3").style.display = 'none'; //Not Display Tab2 
                                                document.getElementById("Tab2-Select2").style.display = 'none'; //Not Display Tab2 
                                                document.getElementById("Tab2-Select4").style.display = 'none'; //Not Display Tab2 
                                                document.getElementById("Tab2-Select5").style.display = 'none'; //Not Display Tab2 
                                                document.getElementById("Tab2-Select6").style.display = 'none'; //Not Display Tab2 
                                                document.getElementById("Tab2-Select7").style.display = 'none'; //Not Display Tab2 
                                                document.getElementById("Tab2-Select8").style.display = 'none'; //Not Display Tab2 
                                                document.getElementById("Tab2-Select9").style.display = 'none'; //Not Display Tab2 
                                                document.getElementById("Tab2-Select11").style.display = 'none'; //Not Display Tab2 
                                                document.getElementById("Tab2-Select12").style.display = 'none'; //Not Display Tab2 
                                                document.getElementById("Tab2-Select13").style.display = 'none'; //Not Display Tab2 
                                                document.getElementById("Tab2-Select14").style.display = 'none'; //Not Display Tab2 




                                                document.getElementById("Select1").style.display = 'none'; //Not Display Div name Test1
                                                document.getElementById("Select2").style.display = 'none'; //Not Display Div name Test1
                                                document.getElementById("Select3").style.display = 'none'; //Not Display Div name Test1
                                                document.getElementById("Select4").style.display = 'none'; //Not Display Div name Test1
                                                document.getElementById("Select5").style.display = 'none'; //Not Display Div name Test1
                                                document.getElementById("Select6").style.display = 'none'; //Not Display Div name Test1
                                                document.getElementById("Select7").style.display = 'none'; //Not Display Div name Test1
                                                document.getElementById("Select8").style.display = 'none'; //Not Display Div name Test1
                                                document.getElementById("Select9").style.display = 'none'; //Not Display Div name Test1
                                                document.getElementById("Select11").style.display = 'none'; //Not Display Div name Test1
                                                document.getElementById("Select12").style.display = 'none'; //Not Display Div name Test1
                                                document.getElementById("Select13").style.display = 'none'; //Not Display Div name Test1
                                                document.getElementById("Select14").style.display = 'none'; //Not Display Div name Test1



                                            }

                                            if (typebld == "trfram") {

                                                document.getElementById("Select11").style.display = '';


                                                document.getElementById("Tab5-Select11").style.display = ''; // Display Tab5
                                                document.getElementById("Tab5-Select1").style.display = 'none'; //Not Display Tab5 
                                                document.getElementById("Tab5-Select3").style.display = 'none'; //Not Display Tab5 
                                                document.getElementById("Tab5-Select2").style.display = 'none'; //Not Display Tab5 
                                                document.getElementById("Tab5-Select4").style.display = 'none'; //Not Display Tab5 
                                                document.getElementById("Tab5-Select5").style.display = 'none'; //Not Display Tab5 
                                                document.getElementById("Tab5-Select6").style.display = 'none'; //Not Display Tab5 
                                                document.getElementById("Tab5-Select7").style.display = 'none'; //Not Display Tab5 
                                                document.getElementById("Tab5-Select8").style.display = 'none'; //Not Display Tab5 
                                                document.getElementById("Tab5-Select9").style.display = 'none'; //Not Display Tab5 
                                                document.getElementById("Tab5-Select10").style.display = 'none'; //Not Display Tab5 
                                                document.getElementById("Tab5-Select12").style.display = 'none'; //Not Display Tab5 
                                                document.getElementById("Tab5-Select13").style.display = 'none'; //Not Display Tab5 
                                                document.getElementById("Tab5-Select14").style.display = 'none'; //Not Display Tab5 

                                                document.getElementById("Tab4-Select11").style.display = ''; // Display Tab4
                                                document.getElementById("Tab4-Select1").style.display = 'none'; //Not Display Tab4 
                                                document.getElementById("Tab4-Select3").style.display = 'none'; //Not Display Tab4 
                                                document.getElementById("Tab4-Select2").style.display = 'none'; //Not Display Tab4 
                                                document.getElementById("Tab4-Select4").style.display = 'none'; //Not Display Tab4 
                                                document.getElementById("Tab4-Select5").style.display = 'none'; //Not Display Tab4 
                                                document.getElementById("Tab4-Select6").style.display = 'none'; //Not Display Tab4 
                                                document.getElementById("Tab4-Select7").style.display = 'none'; //Not Display Tab4 
                                                document.getElementById("Tab4-Select8").style.display = 'none'; //Not Display Tab4 
                                                document.getElementById("Tab4-Select9").style.display = 'none'; //Not Display Tab4 
                                                document.getElementById("Tab4-Select10").style.display = 'none'; //Not Display Tab4 
                                                document.getElementById("Tab4-Select12").style.display = 'none'; //Not Display Tab4 
                                                document.getElementById("Tab4-Select13").style.display = 'none'; //Not Display Tab4 
                                                document.getElementById("Tab4-Select14").style.display = 'none'; //Not Display Tab4 

                                                document.getElementById("Tab3-Select11").style.display = ''; // Display Tab3
                                                document.getElementById("Tab3-Select1").style.display = 'none'; //Not Display Tab3 
                                                document.getElementById("Tab3-Select3").style.display = 'none'; //Not Display Tab3 
                                                document.getElementById("Tab3-Select2").style.display = 'none'; //Not Display Tab3 
                                                document.getElementById("Tab3-Select4").style.display = 'none'; //Not Display Tab3 
                                                document.getElementById("Tab3-Select5").style.display = 'none'; //Not Display Tab3 
                                                document.getElementById("Tab3-Select6").style.display = 'none'; //Not Display Tab3 
                                                document.getElementById("Tab3-Select7").style.display = 'none'; //Not Display Tab3 
                                                document.getElementById("Tab3-Select8").style.display = 'none'; //Not Display Tab3 
                                                document.getElementById("Tab3-Select9").style.display = 'none'; //Not Display Tab3 
                                                document.getElementById("Tab3-Select10").style.display = 'none'; //Not Display Tab3 
                                                document.getElementById("Tab3-Select12").style.display = 'none'; //Not Display Tab3 
                                                document.getElementById("Tab3-Select13").style.display = 'none'; //Not Display Tab3 
                                                document.getElementById("Tab3-Select14").style.display = 'none'; //Not Display Tab3 




                                                document.getElementById("Tab2-Select11").style.display = ''; // Display Tab2
                                                document.getElementById("Tab2-Select1").style.display = 'none'; //Not Display Tab2 
                                                document.getElementById("Tab2-Select3").style.display = 'none'; //Not Display Tab2 
                                                document.getElementById("Tab2-Select2").style.display = 'none'; //Not Display Tab2 
                                                document.getElementById("Tab2-Select4").style.display = 'none'; //Not Display Tab2 
                                                document.getElementById("Tab2-Select5").style.display = 'none'; //Not Display Tab2 
                                                document.getElementById("Tab2-Select6").style.display = 'none'; //Not Display Tab2 
                                                document.getElementById("Tab2-Select7").style.display = 'none'; //Not Display Tab2 
                                                document.getElementById("Tab2-Select8").style.display = 'none'; //Not Display Tab2 
                                                document.getElementById("Tab2-Select9").style.display = 'none'; //Not Display Tab2 
                                                document.getElementById("Tab2-Select10").style.display = 'none'; //Not Display Tab2 
                                                document.getElementById("Tab2-Select12").style.display = 'none'; //Not Display Tab2 
                                                document.getElementById("Tab2-Select13").style.display = 'none'; //Not Display Tab2 
                                                document.getElementById("Tab2-Select14").style.display = 'none'; //Not Display Tab2 

                                                document.getElementById("Select1").style.display = 'none'; //Not Display Div name Test1
                                                document.getElementById("Select2").style.display = 'none'; //Not Display Div name Test1
                                                document.getElementById("Select3").style.display = 'none'; //Not Display Div name Test1
                                                document.getElementById("Select4").style.display = 'none'; //Not Display Div name Test1
                                                document.getElementById("Select5").style.display = 'none'; //Not Display Div name Test1
                                                document.getElementById("Select6").style.display = 'none'; //Not Display Div name Test1
                                                document.getElementById("Select7").style.display = 'none'; //Not Display Div name Test1
                                                document.getElementById("Select8").style.display = 'none'; //Not Display Div name Test1
                                                document.getElementById("Select9").style.display = 'none'; //Not Display Div name Test1
                                                document.getElementById("Select10").style.display = 'none'; //Not Display Div name Test1
                                                document.getElementById("Select12").style.display = 'none'; //Not Display Div name Test1
                                                document.getElementById("Select13").style.display = 'none'; //Not Display Div name Test1
                                                document.getElementById("Select14").style.display = 'none'; //Not Display Div name Test1



                                            }
                                            if (typebld == "trStation") {

                                                document.getElementById("Select12").style.display = '';


                                                document.getElementById("Tab5-Select12").style.display = ''; // Display Tab5  
                                                document.getElementById("Tab5-Select1").style.display = 'none'; //Not Display Tab5 
                                                document.getElementById("Tab5-Select3").style.display = 'none'; //Not Display Tab5 
                                                document.getElementById("Tab5-Select2").style.display = 'none'; //Not Display Tab5 
                                                document.getElementById("Tab5-Select4").style.display = 'none'; //Not Display Tab5 
                                                document.getElementById("Tab5-Select5").style.display = 'none'; //Not Display Tab5 
                                                document.getElementById("Tab5-Select6").style.display = 'none'; //Not Display Tab5 
                                                document.getElementById("Tab5-Select7").style.display = 'none'; //Not Display Tab5 
                                                document.getElementById("Tab5-Select8").style.display = 'none'; //Not Display Tab5 
                                                document.getElementById("Tab5-Select9").style.display = 'none'; //Not Display Tab5 
                                                document.getElementById("Tab5-Select10").style.display = 'none'; //Not Display Tab5 
                                                document.getElementById("Tab5-Select11").style.display = 'none'; //Not Display Tab5 
                                                document.getElementById("Tab5-Select13").style.display = 'none'; //Not Display Tab5 
                                                document.getElementById("Tab5-Select14").style.display = 'none'; //Not Display Tab5 

                                                document.getElementById("Tab4-Select12").style.display = ''; // Display Tab4  
                                                document.getElementById("Tab4-Select1").style.display = 'none'; //Not Display Tab4 
                                                document.getElementById("Tab4-Select3").style.display = 'none'; //Not Display Tab4 
                                                document.getElementById("Tab4-Select2").style.display = 'none'; //Not Display Tab4 
                                                document.getElementById("Tab4-Select4").style.display = 'none'; //Not Display Tab4 
                                                document.getElementById("Tab4-Select5").style.display = 'none'; //Not Display Tab4 
                                                document.getElementById("Tab4-Select6").style.display = 'none'; //Not Display Tab4 
                                                document.getElementById("Tab4-Select7").style.display = 'none'; //Not Display Tab4 
                                                document.getElementById("Tab4-Select8").style.display = 'none'; //Not Display Tab4 
                                                document.getElementById("Tab4-Select9").style.display = 'none'; //Not Display Tab4 
                                                document.getElementById("Tab4-Select10").style.display = 'none'; //Not Display Tab4 
                                                document.getElementById("Tab4-Select11").style.display = 'none'; //Not Display Tab4 
                                                document.getElementById("Tab4-Select13").style.display = 'none'; //Not Display Tab4 
                                                document.getElementById("Tab4-Select14").style.display = 'none'; //Not Display Tab4 

                                                document.getElementById("Tab3-Select12").style.display = ''; // Display Tab3  
                                                document.getElementById("Tab3-Select1").style.display = 'none'; //Not Display Tab3 
                                                document.getElementById("Tab3-Select3").style.display = 'none'; //Not Display Tab3 
                                                document.getElementById("Tab3-Select2").style.display = 'none'; //Not Display Tab3 
                                                document.getElementById("Tab3-Select4").style.display = 'none'; //Not Display Tab3 
                                                document.getElementById("Tab3-Select5").style.display = 'none'; //Not Display Tab3 
                                                document.getElementById("Tab3-Select6").style.display = 'none'; //Not Display Tab3 
                                                document.getElementById("Tab3-Select7").style.display = 'none'; //Not Display Tab3 
                                                document.getElementById("Tab3-Select8").style.display = 'none'; //Not Display Tab3 
                                                document.getElementById("Tab3-Select9").style.display = 'none'; //Not Display Tab3 
                                                document.getElementById("Tab3-Select10").style.display = 'none'; //Not Display Tab3 
                                                document.getElementById("Tab3-Select11").style.display = 'none'; //Not Display Tab3 
                                                document.getElementById("Tab3-Select13").style.display = 'none'; //Not Display Tab3 
                                                document.getElementById("Tab3-Select14").style.display = 'none'; //Not Display Tab3 



                                                document.getElementById("Tab2-Select12").style.display = ''; // Display Tab2  
                                                document.getElementById("Tab2-Select1").style.display = 'none'; //Not Display Tab2 
                                                document.getElementById("Tab2-Select3").style.display = 'none'; //Not Display Tab2 
                                                document.getElementById("Tab2-Select2").style.display = 'none'; //Not Display Tab2 
                                                document.getElementById("Tab2-Select4").style.display = 'none'; //Not Display Tab2 
                                                document.getElementById("Tab2-Select5").style.display = 'none'; //Not Display Tab2 
                                                document.getElementById("Tab2-Select6").style.display = 'none'; //Not Display Tab2 
                                                document.getElementById("Tab2-Select7").style.display = 'none'; //Not Display Tab2 
                                                document.getElementById("Tab2-Select8").style.display = 'none'; //Not Display Tab2 
                                                document.getElementById("Tab2-Select9").style.display = 'none'; //Not Display Tab2 
                                                document.getElementById("Tab2-Select10").style.display = 'none'; //Not Display Tab2 
                                                document.getElementById("Tab2-Select11").style.display = 'none'; //Not Display Tab2 
                                                document.getElementById("Tab2-Select13").style.display = 'none'; //Not Display Tab2 
                                                document.getElementById("Tab2-Select14").style.display = 'none'; //Not Display Tab2 


                                                document.getElementById("Select1").style.display = 'none'; //Not Display Div name Test1
                                                document.getElementById("Select2").style.display = 'none'; //Not Display Div name Test1
                                                document.getElementById("Select3").style.display = 'none'; //Not Display Div name Test1
                                                document.getElementById("Select4").style.display = 'none'; //Not Display Div name Test1
                                                document.getElementById("Select5").style.display = 'none'; //Not Display Div name Test1
                                                document.getElementById("Select6").style.display = 'none'; //Not Display Div name Test1
                                                document.getElementById("Select7").style.display = 'none'; //Not Display Div name Test1
                                                document.getElementById("Select8").style.display = 'none'; //Not Display Div name Test1
                                                document.getElementById("Select9").style.display = 'none'; //Not Display Div name Test1
                                                document.getElementById("Select10").style.display = 'none'; //Not Display Div name Test1
                                                document.getElementById("Select11").style.display = 'none'; //Not Display Div name Test1
                                                document.getElementById("Select13").style.display = 'none'; //Not Display Div name Test1
                                                document.getElementById("Select14").style.display = 'none'; //Not Display Div name Test1



                                            }
                                            if (typebld == "trRest") {

                                                document.getElementById("Select13").style.display = '';


                                                document.getElementById("Tab5-Select13").style.display = ''; // Display Tab5 
                                                document.getElementById("Tab5-Select1").style.display = 'none'; //Not Display Tab5 
                                                document.getElementById("Tab5-Select3").style.display = 'none'; //Not Display Tab5 
                                                document.getElementById("Tab5-Select2").style.display = 'none'; //Not Display Tab5 
                                                document.getElementById("Tab5-Select4").style.display = 'none'; //Not Display Tab5 
                                                document.getElementById("Tab5-Select5").style.display = 'none'; //Not Display Tab5 
                                                document.getElementById("Tab5-Select6").style.display = 'none'; //Not Display Tab5 
                                                document.getElementById("Tab5-Select7").style.display = 'none'; //Not Display Tab5 
                                                document.getElementById("Tab5-Select8").style.display = 'none'; //Not Display Tab5 
                                                document.getElementById("Tab5-Select9").style.display = 'none'; //Not Display Tab5 
                                                document.getElementById("Tab5-Select10").style.display = 'none'; //Not Display Tab5 
                                                document.getElementById("Tab5-Select11").style.display = 'none'; //Not Display Tab5 
                                                document.getElementById("Tab5-Select12").style.display = 'none'; //Not Display Tab5 
                                                document.getElementById("Tab5-Select14").style.display = 'none'; //Not Display Tab5 

                                                document.getElementById("Tab4-Select13").style.display = ''; // Display Tab4 
                                                document.getElementById("Tab4-Select1").style.display = 'none'; //Not Display Tab4 
                                                document.getElementById("Tab4-Select3").style.display = 'none'; //Not Display Tab4 
                                                document.getElementById("Tab4-Select2").style.display = 'none'; //Not Display Tab4 
                                                document.getElementById("Tab4-Select4").style.display = 'none'; //Not Display Tab4 
                                                document.getElementById("Tab4-Select5").style.display = 'none'; //Not Display Tab4 
                                                document.getElementById("Tab4-Select6").style.display = 'none'; //Not Display Tab4 
                                                document.getElementById("Tab4-Select7").style.display = 'none'; //Not Display Tab4 
                                                document.getElementById("Tab4-Select8").style.display = 'none'; //Not Display Tab4 
                                                document.getElementById("Tab4-Select9").style.display = 'none'; //Not Display Tab4 
                                                document.getElementById("Tab4-Select10").style.display = 'none'; //Not Display Tab4 
                                                document.getElementById("Tab4-Select11").style.display = 'none'; //Not Display Tab4 
                                                document.getElementById("Tab4-Select12").style.display = 'none'; //Not Display Tab4 
                                                document.getElementById("Tab4-Select14").style.display = 'none'; //Not Display Tab4 

                                                document.getElementById("Tab3-Select13").style.display = ''; // Display Tab3 
                                                document.getElementById("Tab3-Select1").style.display = 'none'; //Not Display Tab3 
                                                document.getElementById("Tab3-Select3").style.display = 'none'; //Not Display Tab3 
                                                document.getElementById("Tab3-Select2").style.display = 'none'; //Not Display Tab3 
                                                document.getElementById("Tab3-Select4").style.display = 'none'; //Not Display Tab3 
                                                document.getElementById("Tab3-Select5").style.display = 'none'; //Not Display Tab3 
                                                document.getElementById("Tab3-Select6").style.display = 'none'; //Not Display Tab3 
                                                document.getElementById("Tab3-Select7").style.display = 'none'; //Not Display Tab3 
                                                document.getElementById("Tab3-Select8").style.display = 'none'; //Not Display Tab3 
                                                document.getElementById("Tab3-Select9").style.display = 'none'; //Not Display Tab3 
                                                document.getElementById("Tab3-Select10").style.display = 'none'; //Not Display Tab3 
                                                document.getElementById("Tab3-Select11").style.display = 'none'; //Not Display Tab3 
                                                document.getElementById("Tab3-Select12").style.display = 'none'; //Not Display Tab3 
                                                document.getElementById("Tab3-Select14").style.display = 'none'; //Not Display Tab3 



                                                document.getElementById("Tab2-Select13").style.display = ''; // Display Tab2 
                                                document.getElementById("Tab2-Select1").style.display = 'none'; //Not Display Tab2 
                                                document.getElementById("Tab2-Select3").style.display = 'none'; //Not Display Tab2 
                                                document.getElementById("Tab2-Select2").style.display = 'none'; //Not Display Tab2 
                                                document.getElementById("Tab2-Select4").style.display = 'none'; //Not Display Tab2 
                                                document.getElementById("Tab2-Select5").style.display = 'none'; //Not Display Tab2 
                                                document.getElementById("Tab2-Select6").style.display = 'none'; //Not Display Tab2 
                                                document.getElementById("Tab2-Select7").style.display = 'none'; //Not Display Tab2 
                                                document.getElementById("Tab2-Select8").style.display = 'none'; //Not Display Tab2 
                                                document.getElementById("Tab2-Select9").style.display = 'none'; //Not Display Tab2 
                                                document.getElementById("Tab2-Select10").style.display = 'none'; //Not Display Tab2 
                                                document.getElementById("Tab2-Select11").style.display = 'none'; //Not Display Tab2 
                                                document.getElementById("Tab2-Select12").style.display = 'none'; //Not Display Tab2 
                                                document.getElementById("Tab2-Select14").style.display = 'none'; //Not Display Tab2 


                                                document.getElementById("Select1").style.display = 'none'; //Not Display Div name Test1
                                                document.getElementById("Select2").style.display = 'none'; //Not Display Div name Test1
                                                document.getElementById("Select3").style.display = 'none'; //Not Display Div name Test1
                                                document.getElementById("Select4").style.display = 'none'; //Not Display Div name Test1
                                                document.getElementById("Select5").style.display = 'none'; //Not Display Div name Test1
                                                document.getElementById("Select6").style.display = 'none'; //Not Display Div name Test1
                                                document.getElementById("Select7").style.display = 'none'; //Not Display Div name Test1
                                                document.getElementById("Select8").style.display = 'none'; //Not Display Div name Test1
                                                document.getElementById("Select9").style.display = 'none'; //Not Display Div name Test1
                                                document.getElementById("Select10").style.display = 'none'; //Not Display Div name Test1
                                                document.getElementById("Select11").style.display = 'none'; //Not Display Div name Test1
                                                document.getElementById("Select12").style.display = 'none'; //Not Display Div name Test1
                                                document.getElementById("Select14").style.display = 'none'; //Not Display Div name Test1



                                            }
                                            if (typebld == "trLandNext") {

                                                document.getElementById("Select14").style.display = '';


                                                document.getElementById("Tab5-Select14").style.display = ''; // Display Tab5
                                                document.getElementById("Tab5-Select1").style.display = 'none'; //Not Display Tab5 
                                                document.getElementById("Tab5-Select3").style.display = 'none'; //Not Display Tab5 
                                                document.getElementById("Tab5-Select2").style.display = 'none'; //Not Display Tab5 
                                                document.getElementById("Tab5-Select4").style.display = 'none'; //Not Display Tab5 
                                                document.getElementById("Tab5-Select5").style.display = 'none'; //Not Display Tab5 
                                                document.getElementById("Tab5-Select6").style.display = 'none'; //Not Display Tab5 
                                                document.getElementById("Tab5-Select7").style.display = 'none'; //Not Display Tab5 
                                                document.getElementById("Tab5-Select8").style.display = 'none'; //Not Display Tab5 
                                                document.getElementById("Tab5-Select9").style.display = 'none'; //Not Display Tab5 
                                                document.getElementById("Tab5-Select10").style.display = 'none'; //Not Display Tab5 
                                                document.getElementById("Tab5-Select11").style.display = 'none'; //Not Display Tab5 
                                                document.getElementById("Tab5-Select12").style.display = 'none'; //Not Display Tab5 
                                                document.getElementById("Tab5-Select13").style.display = 'none'; //Not Display Tab5 


                                                document.getElementById("Tab4-Select14").style.display = ''; // Display Tab4
                                                document.getElementById("Tab4-Select1").style.display = 'none'; //Not Display Tab4 
                                                document.getElementById("Tab4-Select3").style.display = 'none'; //Not Display Tab4 
                                                document.getElementById("Tab4-Select2").style.display = 'none'; //Not Display Tab4 
                                                document.getElementById("Tab4-Select4").style.display = 'none'; //Not Display Tab4 
                                                document.getElementById("Tab4-Select5").style.display = 'none'; //Not Display Tab4 
                                                document.getElementById("Tab4-Select6").style.display = 'none'; //Not Display Tab4 
                                                document.getElementById("Tab4-Select7").style.display = 'none'; //Not Display Tab4 
                                                document.getElementById("Tab4-Select8").style.display = 'none'; //Not Display Tab4 
                                                document.getElementById("Tab4-Select9").style.display = 'none'; //Not Display Tab4 
                                                document.getElementById("Tab4-Select10").style.display = 'none'; //Not Display Tab4 
                                                document.getElementById("Tab4-Select11").style.display = 'none'; //Not Display Tab4 
                                                document.getElementById("Tab4-Select12").style.display = 'none'; //Not Display Tab4 
                                                document.getElementById("Tab4-Select13").style.display = 'none'; //Not Display Tab4 

                                                document.getElementById("Tab3-Select14").style.display = ''; // Display Tab3
                                                document.getElementById("Tab3-Select1").style.display = 'none'; //Not Display Tab3 
                                                document.getElementById("Tab3-Select3").style.display = 'none'; //Not Display Tab3 
                                                document.getElementById("Tab3-Select2").style.display = 'none'; //Not Display Tab3 
                                                document.getElementById("Tab3-Select4").style.display = 'none'; //Not Display Tab3 
                                                document.getElementById("Tab3-Select5").style.display = 'none'; //Not Display Tab3 
                                                document.getElementById("Tab3-Select6").style.display = 'none'; //Not Display Tab3 
                                                document.getElementById("Tab3-Select7").style.display = 'none'; //Not Display Tab3 
                                                document.getElementById("Tab3-Select8").style.display = 'none'; //Not Display Tab3 
                                                document.getElementById("Tab3-Select9").style.display = 'none'; //Not Display Tab3 
                                                document.getElementById("Tab3-Select10").style.display = 'none'; //Not Display Tab3 
                                                document.getElementById("Tab3-Select11").style.display = 'none'; //Not Display Tab3 
                                                document.getElementById("Tab3-Select12").style.display = 'none'; //Not Display Tab3 
                                                document.getElementById("Tab3-Select13").style.display = 'none'; //Not Display Tab3 


                                                document.getElementById("Tab2-Select14").style.display = ''; // Display Tab2
                                                document.getElementById("Tab2-Select1").style.display = 'none'; //Not Display Tab2 
                                                document.getElementById("Tab2-Select3").style.display = 'none'; //Not Display Tab2 
                                                document.getElementById("Tab2-Select2").style.display = 'none'; //Not Display Tab2 
                                                document.getElementById("Tab2-Select4").style.display = 'none'; //Not Display Tab2 
                                                document.getElementById("Tab2-Select5").style.display = 'none'; //Not Display Tab2 
                                                document.getElementById("Tab2-Select6").style.display = 'none'; //Not Display Tab2 
                                                document.getElementById("Tab2-Select7").style.display = 'none'; //Not Display Tab2 
                                                document.getElementById("Tab2-Select8").style.display = 'none'; //Not Display Tab2 
                                                document.getElementById("Tab2-Select9").style.display = 'none'; //Not Display Tab2 
                                                document.getElementById("Tab2-Select10").style.display = 'none'; //Not Display Tab2 
                                                document.getElementById("Tab2-Select11").style.display = 'none'; //Not Display Tab2 
                                                document.getElementById("Tab2-Select12").style.display = 'none'; //Not Display Tab2 
                                                document.getElementById("Tab2-Select13").style.display = 'none'; //Not Display Tab2 

                                                document.getElementById("Select1").style.display = 'none'; //Not Display Div name Test1
                                                document.getElementById("Select2").style.display = 'none'; //Not Display Div name Test1
                                                document.getElementById("Select3").style.display = 'none'; //Not Display Div name Test1
                                                document.getElementById("Select4").style.display = 'none'; //Not Display Div name Test1
                                                document.getElementById("Select5").style.display = 'none'; //Not Display Div name Test1
                                                document.getElementById("Select6").style.display = 'none'; //Not Display Div name Test1
                                                document.getElementById("Select7").style.display = 'none'; //Not Display Div name Test1
                                                document.getElementById("Select8").style.display = 'none'; //Not Display Div name Test1
                                                document.getElementById("Select9").style.display = 'none'; //Not Display Div name Test1
                                                document.getElementById("Select10").style.display = 'none'; //Not Display Div name Test1
                                                document.getElementById("Select11").style.display = 'none'; //Not Display Div name Test1
                                                document.getElementById("Select12").style.display = 'none'; //Not Display Div name Test1
                                                document.getElementById("Select13").style.display = 'none'; //Not Display Div name Test1



                                            }


                                        }
                                    </script>
                                    <!-- ------------------------------------------- -->
                                    <div class="col-md-12">
                                        <div class="form-group form-md-line-input form-md-floating-label">
                                            <select id="SelectBuild" class="form-control edited" name="condition" onchange="onSelectBuild()" required="" aria-required="true">
                                                <option value="Value" id=""></option>

                                                <option value="trLand" id="trLand">ارض</option>
                                                <option value="trFlat" id="trFlat">شقة</option>
                                                <option value="trVella" id="trVella">فيلا </option>
                                                <option value="trbuilding" id="trbuilding">عمارة </option>
                                                <option value="trpalace" id="trpalace">قصر افراح </option>
                                                <option value="trfair" id="trfair">معرض </option>
                                                <option value="trOffice" id="trOffice">مكتب </option>
                                                <option value="trofficeTrad" id="trofficeTrad">محل تجاري </option>
                                                <option value="trShalle" id="trShalle">شاليه </option>
                                                <option value="trcontainer" id="trcontainer">مستودع </option>
                                                <option value="trfram" id="trfram">مزرعة </option>
                                                <option value="trStation" id="trStation">محطة وقود </option>
                                                <option value="trRest" id="trRest">استراحة </option>
                                                <option value="trLandNext" id="trLandNext">اراضي متجاورة </option>

                                            </select>
                                            <label for="condition">نوع العقار</label>
                                        </div>
                                    </div>
                                    <div id="Select1" style="display: none;">
                                        <div class="col-md-6">
                                            <div class="form-group form-md-line-input form-md-floating-label">
                                                <input type="text" class="form-control" id="property_name" name="property_name" placeholder="" value="">
                                                <label for="property_name">اسم الشارع </label>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group form-md-line-input form-md-floating-label">
                                                <input type="number" class="form-control" id="number_of_units" name="number_of_units" placeholder="" min="0" value="{{ old('number_of_units') }}">
                                                <label for="number_of_units">عدد الشوارع</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group form-md-line-input form-md-floating-label">
                                                <input type="number" class="form-control" id="number_of_units" name="number_of_units" placeholder="" min="0" value="{{ old('number_of_units') }}">
                                                <label for="number_of_units">رقم الصق</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group form-md-line-input form-md-floating-label">
                                                <input type="number" class="form-control" id="number_of_units" name="number_of_units" placeholder="" min="0" value="{{ old('number_of_units') }}">
                                                <label for="number_of_units">عرض الشارع</label>
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <label for="number_of_units">طبيعة الارض </label>
                                            <br>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-group form-md-line-input form-md-floating-label">
                                                <input type="checkbox" id="number_of_units" name="number_of_units" placeholder=" " min="0" value="{{ old('number_of_units') }}">
                                                <label for="number_of_units"> زاوية( راس بلوك) </label>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-group form-md-line-input form-md-floating-label">
                                                <input type="checkbox" id="number_of_units" name="number_of_units" placeholder=" " min="0" value="{{ old('number_of_units') }}">
                                                <label for="number_of_units">شطفة </label>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-group form-md-line-input form-md-floating-label">
                                                <input type="checkbox" id="number_of_units" name="number_of_units" placeholder=" " min="0" value="{{ old('number_of_units') }}">
                                                <label for="number_of_units">مستوية </label>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-group form-md-line-input form-md-floating-label">
                                                <input type="checkbox" id="number_of_units" name="number_of_units" placeholder=" " min="0" value="{{ old('number_of_units') }}">
                                                <label for="number_of_units">ميلان </label>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-group form-md-line-input form-md-floating-label">
                                                <input type="checkbox" id="number_of_units" name="number_of_units" placeholder=" " min="0" value="{{ old('number_of_units') }}">
                                                <label for="number_of_units">داخليه </label>
                                            </div>
                                        </div>





                                    </div>
                                    <!-- End Tab1 select 1  -->
                                    <div id="Select2" style="display: none;">

                                        <div class="col-md-6">
                                            <div class="form-group form-md-line-input form-md-floating-label">
                                                <input type="text" class="form-control" id="property_name" name="property_name" placeholder="" value="">
                                                <label for="property_name">ترتيب العقار </label>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group form-md-line-input form-md-floating-label">
                                                <input type="text" class="form-control" id="property_name" name="property_name" placeholder="" value="">
                                                <label for="property_name"> اسم الشارع </label>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group form-md-line-input form-md-floating-label">
                                                <input type="text" class="form-control" id="property_name" name="property_name" placeholder="" value="">
                                                <label for="property_name"> رقم عداد الكهرباء </label>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group form-md-line-input form-md-floating-label">
                                                <select id="" class="form-control edited" name="condition">
                                                    <option value="Value" id=""> </option>
                                                    <option value="Value" id="">تحت الانشاء </option>
                                                    <option value="Value" id="">جيد </option>
                                                    <option value="Value" id="">قديم </option>
                                                    <option value="Value" id="">بدون </option>
                                                </select>
                                                <label for="condition">وضع العقار </label>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group form-md-line-input form-md-floating-label">
                                                <select id="" class="form-control edited" name="condition">
                                                    <option value="Value" id=""> </option>
                                                    <option value="Value" id="">1431 </option>
                                                    <option value="Value" id="">1432 </option>
                                                    <option value="Value" id="">1433 </option>
                                                    <option value="Value" id="">1434 </option>
                                                </select>
                                                <label for="condition">سنة البناء </label>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Tab1 select 2  -->
                                    <div id="Select3" style="display: none;">
                                        <div class="col-md-6">
                                            <div class="form-group form-md-line-input form-md-floating-label">
                                                <input type="text" class="form-control" id="property_name" name="property_name" placeholder="" value="">
                                                <label for="property_name"> رقم عداد الكهرباء </label>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group form-md-line-input form-md-floating-label">
                                                <input type="text" class="form-control" id="property_name" name="property_name" placeholder="" value="">
                                                <label for="property_name"> اسم الشارع </label>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group form-md-line-input form-md-floating-label">
                                                <select id="" class="form-control edited" name="condition">
                                                    <option value="Value" id=""> </option>
                                                    <option value="Value" id="">1431 </option>
                                                    <option value="Value" id="">1432 </option>
                                                    <option value="Value" id="">1433 </option>
                                                    <option value="Value" id="">1434 </option>
                                                </select>
                                                <label for="condition">سنة البناء </label>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group form-md-line-input form-md-floating-label">
                                                <select id="" class="form-control edited" name="condition">
                                                    <option value="Value" id=""> </option>
                                                    <option value="Value" id="">تحت الانشاء </option>
                                                    <option value="Value" id="">جيد </option>
                                                    <option value="Value" id="">قديم </option>
                                                    <option value="Value" id="">بدون </option>
                                                </select>
                                                <label for="condition">وضع العقار </label>
                                            </div>
                                        </div>


                                    </div>
                                    <!-- End Tab1  select 3  -->
                                    <div id="Select4" style="display: none;">

                                        <div class="col-md-6">
                                            <div class="form-group form-md-line-input form-md-floating-label">
                                                <input type="text" class="form-control" id="property_name" name="property_name" placeholder="" value="">
                                                <label for="property_name">رقم عداد الكهرباء</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group form-md-line-input form-md-floating-label">
                                                <input type="text" class="form-control" id="property_name" name="property_name" placeholder="" value="">
                                                <label for="property_name">رقم واصل </label>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group form-md-line-input form-md-floating-label">
                                                <input type="text" class="form-control" id="property_name" name="property_name" placeholder="" value="">
                                                <label for="property_name">اسم الشارع </label>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group form-md-line-input form-md-floating-label">
                                                <select id="" class="form-control edited" name="condition">
                                                    <option value="Value" id=""> </option>
                                                    <option value="Value" id="">تحت الانشاء </option>
                                                    <option value="Value" id="">جيد </option>
                                                    <option value="Value" id="">قديم </option>
                                                    <option value="Value" id="">بدون </option>
                                                </select>
                                                <label for="condition">وضع العقار </label>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group form-md-line-input form-md-floating-label">
                                                <select id="" class="form-control edited" name="condition">
                                                    <option value="Value" id=""> </option>
                                                    <option value="Value" id="">1431 </option>
                                                    <option value="Value" id="">1432 </option>
                                                    <option value="Value" id="">1433 </option>
                                                    <option value="Value" id="">1434 </option>
                                                </select>
                                                <label for="condition">سنة البناء </label>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group form-md-line-input form-md-floating-label">
                                                <select id="" class="form-control edited" name="condition">
                                                    <option value="Value" id=""> </option>
                                                    <option value="Value" id="">تحت الانشاء </option>
                                                    <option value="Value" id="">جيد </option>
                                                    <option value="Value" id="">قديم </option>
                                                    <option value="Value" id="">بدون </option>
                                                </select>
                                                <label for="condition">وضع العقار </label>
                                            </div>
                                        </div>





                                    </div>
                                    <!-- End  Tab1 select 4  -->
                                    <div id="Select5" style="display: none;">

                                        <div class="col-md-6">
                                            <div class="form-group form-md-line-input form-md-floating-label">
                                                <input type="text" class="form-control" id="property_name" name="property_name" placeholder="" value="">
                                                <label for="property_name">رقم عداد الكهرباء</label>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group form-md-line-input form-md-floating-label">
                                                <input type="text" class="form-control" id="property_name" name="property_name" placeholder="" value="">
                                                <label for="property_name">اسم الشارع </label>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group form-md-line-input form-md-floating-label">
                                                <select id="" class="form-control edited" name="condition">
                                                    <option value="Value" id=""> </option>
                                                    <option value="Value" id="">تحت الانشاء </option>
                                                    <option value="Value" id="">جيد </option>
                                                    <option value="Value" id="">قديم </option>
                                                    <option value="Value" id="">بدون </option>
                                                </select>
                                                <label for="condition">وضع العقار </label>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group form-md-line-input form-md-floating-label">
                                                <select id="" class="form-control edited" name="condition">
                                                    <option value="Value" id=""> </option>
                                                    <option value="Value" id="">1431 </option>
                                                    <option value="Value" id="">1432 </option>
                                                    <option value="Value" id="">1433 </option>
                                                    <option value="Value" id="">1434 </option>
                                                </select>
                                                <label for="condition">سنة البناء </label>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group form-md-line-input form-md-floating-label">
                                                <select id="" class="form-control edited" name="condition">
                                                    <option value="Value" id=""> </option>
                                                    <option value="Value" id="">تحت الانشاء </option>
                                                    <option value="Value" id="">جيد </option>
                                                    <option value="Value" id="">قديم </option>
                                                    <option value="Value" id="">بدون </option>
                                                </select>
                                                <label for="condition">وضع العقار </label>
                                            </div>
                                        </div>





                                    </div>
                                    <!-- End Tab1  select 5  -->
                                    <div id="Select6" style="display: none;">
                                        <div class="col-md-6">
                                            <div class="form-group form-md-line-input form-md-floating-label">
                                                <input type="text" class="form-control" id="property_name" name="property_name" placeholder="" value="">
                                                <label for="property_name">ترتيب العقار </label>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group form-md-line-input form-md-floating-label">
                                                <input type="text" class="form-control" id="property_name" name="property_name" placeholder="" value="">
                                                <label for="property_name">اسم الشارع </label>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group form-md-line-input form-md-floating-label">
                                                <input type="text" class="form-control" id="property_name" name="property_name" placeholder="" value="">
                                                <label for="property_name">رقم عداد الكهرباء</label>
                                            </div>
                                        </div>


                                        <div class="col-md-6">
                                            <div class="form-group form-md-line-input form-md-floating-label">
                                                <select id="" class="form-control edited" name="condition">
                                                    <option value="Value" id=""> </option>
                                                    <option value="Value" id="">تحت الانشاء </option>
                                                    <option value="Value" id="">جيد </option>
                                                    <option value="Value" id="">قديم </option>
                                                    <option value="Value" id="">بدون </option>
                                                </select>
                                                <label for="condition">وضع العقار </label>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group form-md-line-input form-md-floating-label">
                                                <select id="" class="form-control edited" name="condition">
                                                    <option value="Value" id=""> </option>
                                                    <option value="Value" id="">1431 </option>
                                                    <option value="Value" id="">1432 </option>
                                                    <option value="Value" id="">1433 </option>
                                                    <option value="Value" id="">1434 </option>
                                                </select>
                                                <label for="condition">سنة البناء </label>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group form-md-line-input form-md-floating-label">
                                                <select id="" class="form-control edited" name="condition">
                                                    <option value="Value" id=""> </option>
                                                    <option value="Value" id="">تحت الانشاء </option>
                                                    <option value="Value" id="">جيد </option>
                                                    <option value="Value" id="">قديم </option>
                                                    <option value="Value" id="">بدون </option>
                                                </select>
                                                <label for="condition">وضع العقار </label>
                                            </div>
                                        </div>


                                    </div>
                                    <!-- End  Tab1  select 6  -->
                                    <div id="Select7" style="display: none;">

                                        <div class="col-md-6">
                                            <div class="form-group form-md-line-input form-md-floating-label">
                                                <input type="text" class="form-control" id="property_name" name="property_name" placeholder="" value="">
                                                <label for="property_name"> ترتيب العقار </label>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group form-md-line-input form-md-floating-label">
                                                <input type="text" class="form-control" id="property_name" name="property_name" placeholder="" value="">
                                                <label for="property_name">اسم الشارع </label>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group form-md-line-input form-md-floating-label">
                                                <input type="text" class="form-control" id="property_name" name="property_name" placeholder="" value="">
                                                <label for="property_name">رقم عداد الكهرباء </label>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group form-md-line-input form-md-floating-label">
                                                <select id="" class="form-control edited" name="condition">
                                                    <option value="Value" id=""> </option>
                                                    <option value="Value" id="">1431 </option>
                                                    <option value="Value" id="">1432 </option>
                                                    <option value="Value" id="">1433 </option>
                                                    <option value="Value" id="">1434 </option>
                                                </select>
                                                <label for="condition">سنة البناء </label>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group form-md-line-input form-md-floating-label">
                                                <select id="" class="form-control edited" name="condition">
                                                    <option value="Value" id=""> </option>
                                                    <option value="Value" id="">تحت الانشاء </option>
                                                    <option value="Value" id="">جيد </option>
                                                    <option value="Value" id="">قديم </option>
                                                    <option value="Value" id="">بدون </option>
                                                </select>
                                                <label for="condition">وضع العقار </label>
                                            </div>
                                        </div>



                                    </div>
                                    <!-- End Tab1  select 7  -->
                                    <div id="Select8" style="display: none;">

                                        <div class="col-md-6">
                                            <div class="form-group form-md-line-input form-md-floating-label">
                                                <input type="text" class="form-control" id="property_name" name="property_name" placeholder="" value="">
                                                <label for="property_name"> ترتيب العقار </label>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group form-md-line-input form-md-floating-label">
                                                <input type="text" class="form-control" id="property_name" name="property_name" placeholder="" value="">
                                                <label for="property_name">اسم الشارع </label>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group form-md-line-input form-md-floating-label">
                                                <input type="text" class="form-control" id="property_name" name="property_name" placeholder="" value="">
                                                <label for="property_name">رقم عداد الكهرباء </label>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group form-md-line-input form-md-floating-label">
                                                <select id="" class="form-control edited" name="condition">
                                                    <option value="Value" id=""> </option>
                                                    <option value="Value" id="">1431 </option>
                                                    <option value="Value" id="">1432 </option>
                                                    <option value="Value" id="">1433 </option>
                                                    <option value="Value" id="">1434 </option>
                                                </select>
                                                <label for="condition">سنة البناء </label>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group form-md-line-input form-md-floating-label">
                                                <select id="" class="form-control edited" name="condition">
                                                    <option value="Value" id=""> </option>
                                                    <option value="Value" id="">تحت الانشاء </option>
                                                    <option value="Value" id="">جيد </option>
                                                    <option value="Value" id="">قديم </option>
                                                    <option value="Value" id="">بدون </option>
                                                </select>
                                                <label for="condition">وضع العقار </label>
                                            </div>
                                        </div>


                                    </div>
                                    <!-- End  Tab1 select 8  -->
                                    <div id="Select9" style="display: none;">


                                        <div class="col-md-6">
                                            <div class="form-group form-md-line-input form-md-floating-label">
                                                <input type="text" class="form-control" id="property_name" name="property_name" placeholder="" value="">
                                                <label for="property_name"> ترتيب العقار </label>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group form-md-line-input form-md-floating-label">
                                                <input type="text" class="form-control" id="property_name" name="property_name" placeholder="" value="">
                                                <label for="property_name">اسم الشارع </label>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group form-md-line-input form-md-floating-label">
                                                <input type="text" class="form-control" id="property_name" name="property_name" placeholder="" value="">
                                                <label for="property_name">رقم عداد الكهرباء </label>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group form-md-line-input form-md-floating-label">
                                                <select id="" class="form-control edited" name="condition">
                                                    <option value="Value" id=""> </option>
                                                    <option value="Value" id="">1431 </option>
                                                    <option value="Value" id="">1432 </option>
                                                    <option value="Value" id="">1433 </option>
                                                    <option value="Value" id="">1434 </option>
                                                </select>
                                                <label for="condition">سنة البناء </label>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group form-md-line-input form-md-floating-label">
                                                <select id="" class="form-control edited" name="condition">
                                                    <option value="Value" id=""> </option>
                                                    <option value="Value" id="">تحت الانشاء </option>
                                                    <option value="Value" id="">جيد </option>
                                                    <option value="Value" id="">قديم </option>
                                                    <option value="Value" id="">بدون </option>
                                                </select>
                                                <label for="condition">وضع العقار </label>
                                            </div>
                                        </div>


                                    </div>
                                    <!-- End Tab1  select 9  -->
                                    <div id="Select10" style="display: none;">

                                        <div class="col-md-6">
                                            <div class="form-group form-md-line-input form-md-floating-label">
                                                <input type="text" class="form-control" id="property_name" name="property_name" placeholder="" value="">
                                                <label for="property_name"> ترتيب العقار </label>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group form-md-line-input form-md-floating-label">
                                                <input type="text" class="form-control" id="property_name" name="property_name" placeholder="" value="">
                                                <label for="property_name">اسم الشارع </label>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group form-md-line-input form-md-floating-label">
                                                <input type="text" class="form-control" id="property_name" name="property_name" placeholder="" value="">
                                                <label for="property_name">رقم عداد الكهرباء </label>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group form-md-line-input form-md-floating-label">
                                                <select id="" class="form-control edited" name="condition">
                                                    <option value="Value" id=""> </option>
                                                    <option value="Value" id="">1431 </option>
                                                    <option value="Value" id="">1432 </option>
                                                    <option value="Value" id="">1433 </option>
                                                    <option value="Value" id="">1434 </option>
                                                </select>
                                                <label for="condition">سنة البناء </label>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group form-md-line-input form-md-floating-label">
                                                <select id="" class="form-control edited" name="condition">
                                                    <option value="Value" id=""> </option>
                                                    <option value="Value" id="">تحت الانشاء </option>
                                                    <option value="Value" id="">جيد </option>
                                                    <option value="Value" id="">قديم </option>
                                                    <option value="Value" id="">بدون </option>
                                                </select>
                                                <label for="condition">وضع العقار </label>
                                            </div>
                                        </div>


                                    </div>
                                    <!-- End  Tab1 select 10  -->
                                    <div id="Select11" style="display: none;">

                                        <div class="col-md-6">
                                            <div class="form-group form-md-line-input form-md-floating-label">
                                                <input type="text" class="form-control" id="property_name" name="property_name" placeholder="" value="">
                                                <label for="property_name"> ترتيب العقار </label>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group form-md-line-input form-md-floating-label">
                                                <input type="text" class="form-control" id="property_name" name="property_name" placeholder="" value="">
                                                <label for="property_name">اسم الشارع </label>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group form-md-line-input form-md-floating-label">
                                                <input type="text" class="form-control" id="property_name" name="property_name" placeholder="" value="">
                                                <label for="property_name">رقم عداد الكهرباء </label>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group form-md-line-input form-md-floating-label">
                                                <select id="" class="form-control edited" name="condition">
                                                    <option value="Value" id=""> </option>
                                                    <option value="Value" id="">1431 </option>
                                                    <option value="Value" id="">1432 </option>
                                                    <option value="Value" id="">1433 </option>
                                                    <option value="Value" id="">1434 </option>
                                                </select>
                                                <label for="condition">سنة البناء </label>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group form-md-line-input form-md-floating-label">
                                                <select id="" class="form-control edited" name="condition">
                                                    <option value="Value" id=""> </option>
                                                    <option value="Value" id="">تحت الانشاء </option>
                                                    <option value="Value" id="">جيد </option>
                                                    <option value="Value" id="">قديم </option>
                                                    <option value="Value" id="">بدون </option>
                                                </select>
                                                <label for="condition">وضع العقار </label>
                                            </div>
                                        </div>


                                    </div>
                                    <!-- End  Tab1 select 11  -->
                                    <div id="Select12" style="display: none;">
                                        <div class="col-md-6">
                                            <div class="form-group form-md-line-input form-md-floating-label">
                                                <input type="text" class="form-control" id="property_name" name="property_name" placeholder="" value="">
                                                <label for="property_name"> ترتيب العقار </label>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group form-md-line-input form-md-floating-label">
                                                <input type="text" class="form-control" id="property_name" name="property_name" placeholder="" value="">
                                                <label for="property_name">اسم الشارع </label>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group form-md-line-input form-md-floating-label">
                                                <input type="text" class="form-control" id="property_name" name="property_name" placeholder="" value="">
                                                <label for="property_name">رقم عداد الكهرباء </label>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group form-md-line-input form-md-floating-label">
                                                <select id="" class="form-control edited" name="condition">
                                                    <option value="Value" id=""> </option>
                                                    <option value="Value" id="">1431 </option>
                                                    <option value="Value" id="">1432 </option>
                                                    <option value="Value" id="">1433 </option>
                                                    <option value="Value" id="">1434 </option>
                                                </select>
                                                <label for="condition">سنة البناء </label>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group form-md-line-input form-md-floating-label">
                                                <select id="" class="form-control edited" name="condition">
                                                    <option value="Value" id=""> </option>
                                                    <option value="Value" id="">تحت الانشاء </option>
                                                    <option value="Value" id="">جيد </option>
                                                    <option value="Value" id="">قديم </option>
                                                    <option value="Value" id="">بدون </option>
                                                </select>
                                                <label for="condition">وضع العقار </label>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Tab1  select 12  -->
                                    <div id="Select13" style="display: none;">


                                        <div class="col-md-6">
                                            <div class="form-group form-md-line-input form-md-floating-label">
                                                <input type="text" class="form-control" id="property_name" name="property_name" placeholder="" value="">
                                                <label for="property_name"> ترتيب العقار </label>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group form-md-line-input form-md-floating-label">
                                                <input type="text" class="form-control" id="property_name" name="property_name" placeholder="" value="">
                                                <label for="property_name">اسم الشارع </label>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group form-md-line-input form-md-floating-label">
                                                <input type="text" class="form-control" id="property_name" name="property_name" placeholder="" value="">
                                                <label for="property_name">رقم عداد الكهرباء </label>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group form-md-line-input form-md-floating-label">
                                                <select id="" class="form-control edited" name="condition">
                                                    <option value="Value" id=""> </option>
                                                    <option value="Value" id="">1431 </option>
                                                    <option value="Value" id="">1432 </option>
                                                    <option value="Value" id="">1433 </option>
                                                    <option value="Value" id="">1434 </option>
                                                </select>
                                                <label for="condition">سنة البناء </label>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group form-md-line-input form-md-floating-label">
                                                <select id="" class="form-control edited" name="condition">
                                                    <option value="Value" id=""> </option>
                                                    <option value="Value" id="">تحت الانشاء </option>
                                                    <option value="Value" id="">جيد </option>
                                                    <option value="Value" id="">قديم </option>
                                                    <option value="Value" id="">بدون </option>
                                                </select>
                                                <label for="condition">وضع العقار </label>
                                            </div>
                                        </div>


                                    </div>
                                    <!-- End Tab1  select 13  -->
                                    <div id="Select14" style="display: none;">

                                        <div class="col-md-6">
                                            <div class="form-group form-md-line-input form-md-floating-label">
                                                <input type="text" class="form-control" id="property_name" name="property_name" placeholder="" value="">
                                                <label for="property_name">اسم الشارع </label>
                                            </div>
                                        </div>

                                    </div>
                                    <!-- End  Tab1 select 14  -->
                                </div>
                                <!-- End tab 1 -->

                                <!-- ---------------------------------- -->
                                <div class="tab-pane" id="tab2">

                                    <div id="Tab2-Select1" style="display: none;">

                                        <div class="col-md-6">
                                            <div class="form-group form-md-line-input form-md-floating-label">
                                                <select id="" class="form-control edited" name="condition">
                                                    <option value="Value" id=""> </option>
                                                    <option value="Value" id="">ايجار </option>
                                                    <option value="Value" id="">بيع </option>
                                                    <option value="Value" id="">استثمار </option>
                                                    <option value="Value" id="">تقبيل </option>
                                                    <option value="Value" id="">بيع او استثمار </option>
                                                </select>
                                                <label for="condition">نوع العرض</label>
                                            </div>
                                        </div>


                                        <script type="text/javascript">
                                            //script for showing two option

                                            function onSelctop() {
                                                var op = document.getElementById("SelectOp").value;
                                                if (op == "V1") {
                                                    document.getElementById("optionSelect1").style.display = '';
                                                    document.getElementById("optionSelect2").style.display = 'none';

                                                }
                                                if (op == "V2") {
                                                    document.getElementById("optionSelect1").style.display = 'none';
                                                    document.getElementById("optionSelect2").style.display = '';

                                                }
                                            }
                                        </script>

                                        <div class="col-md-6">

                                            <div class="form-group form-md-line-input form-md-floating-label">
                                                <select id="SelectOp" class="form-control edited" name="condition" onchange="onSelctop()">
                                                    <option value="Value" id=""> </option>
                                                    <option value="V1" id="V1">نسبة مئوية </option>
                                                    <option value="V2" id="V2">مبلغ مقطوع </option>

                                                </select>
                                                <label for="condition">طريقة ادارة الاملاك</label>
                                            </div>
                                        </div>
                                        <div class="col-md-12" id="optionSelect1" style="display: none;">

                                            <div class="form-group form-md-line-input form-md-floating-label">
                                                <select id="" class="form-control edited" name="condition">
                                                    <option value="Value" id=""> </option>
                                                    <option value="V1" id="">1 </option>
                                                    <option value="V2" id="">2 </option>
                                                    <option value="V3" id="">2.5 </option>
                                                </select>
                                                <label for="condition">اختار النسبة </label>
                                            </div>
                                        </div>
                                        <div class="col-md-12" id="optionSelect2" style="display: none;">

                                            <div class="form-group form-md-line-input form-md-floating-label">
                                                <input type="number" class="form-control" id="price" name="price" placeholder="">
                                                <label for="price">المبلغ المقطوع</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group form-md-line-input form-md-floating-label">
                                                <input type="number" class="form-control" id="price" name="price" placeholder="">
                                                <label for="price">السعر</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6" id="">


                                            <div class="form-group form-md-line-input form-md-floating-label">
                                                <select id="" class="form-control edited" name="condition" aria-invalid="false">
                                                    <option value="Value" id=""></option>
                                                    <option value="R" id="">ريـال </option>
                                                    <option value="G" id="">جنيه </option>

                                                </select>
                                                <label for="">اختار العملة</label>
                                            </div>



                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group form-md-line-input form-md-floating-label">
                                                <input type="number" class="form-control" id="meter_price" name="meter_price" placeholder="">
                                                <label for="meter_price">سعر المتر</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group form-md-line-input form-md-floating-label">
                                                <input type="number" class="form-control" id="negotiating_boundary" name="negotiating_boundary" placeholder="">
                                                <label for="negotiating_boundary">حد التفاوض</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group form-md-line-input form-md-floating-label">
                                                <input type="number" class="form-control" id="price" name="price" placeholder="">
                                                <label for="price">المساحة الاجمالية</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6" id="">

                                            <div class="form-group form-md-line-input form-md-floating-label">
                                                <select id="" class="form-control edited" name="condition">
                                                    <option value="Value" id=""> </option>
                                                    <option value="Value" id="">متر </option>
                                                    <option value="Value" id="">قدم </option>
                                                    <option value="Value" id="">انش </option>
                                                </select>
                                                <label for="condition">وحدة القياس </label>
                                            </div>
                                        </div>
                                        <div class="col-md-6 ">
                                            <div class="form-group form-md-line-input form-md-floating-label">
                                                <select id="property_direction" name="property_direction" class="form-control edited">
                                                    <option value="Value"></option>
                                                    <option value="north">شمال</option>
                                                    <option value="east">شرق</option>
                                                    <option value="west">غرب</option>
                                                    <option value="south">جنوب</option>
                                                    <option value="north_east">شمال شرق</option>
                                                    <option value="north_west">شمال غرب</option>
                                                    <option value="south_east">جنوب شرق</option>
                                                    <option value="south_west">جنوب غرب</option>
                                                    <option value="none">بدون</option>
                                                </select>
                                                <label for="">اتجاه العقار</label>
                                            </div>
                                        </div>


                                    </div>
                                    <!--Tab2-Select1 -->
                                    <div id="Tab2-Select2" style="display: none;">
                                        <div class="col-md-6">
                                            <div class="form-group form-md-line-input form-md-floating-label">
                                                <select id="" class="form-control edited" name="condition">
                                                    <option value="Value" id=""> </option>
                                                    <option value="Value" id="">ايجار </option>
                                                    <option value="Value" id="">بيع </option>
                                                    <option value="Value" id="">استثمار </option>
                                                    <option value="Value" id="">تقبيل </option>
                                                    <option value="Value" id="">بيع او استثمار </option>
                                                </select>
                                                <label for="condition">نوع العرض</label>
                                            </div>
                                        </div>

                                        <script type="text/javascript">
                                            //script for showing two option

                                            function onSelectFlatTap2() {
                                                var op = document.getElementById("SelectFlatTap2").value;
                                                if (op == "VlueFlat1") {
                                                    document.getElementById("optionVlueFlat1").style.display = '';
                                                    document.getElementById("optionVlueFlat2").style.display = 'none';

                                                }
                                                if (op == "VlueFlat2") {
                                                    document.getElementById("optionVlueFlat1").style.display = 'none';
                                                    document.getElementById("optionVlueFlat2").style.display = '';

                                                }
                                            }
                                        </script>

                                        <div class="col-md-6">

                                            <div class="form-group form-md-line-input form-md-floating-label">
                                                <select id="SelectFlatTap2" class="form-control edited" name="condition" onchange="onSelectFlatTap2()">
                                                    <option value="Value" id=""> </option>
                                                    <option value="VlueFlat1" id="VlueFlat1">نسبة مئوية </option>
                                                    <option value="VlueFlat2" id="VlueFlat2">مبلغ مقطوع </option>

                                                </select>
                                                <label for="condition">طريقة ادارة الاملاك</label>
                                            </div>
                                        </div>

                                        <div class="col-md-12" id="optionVlueFlat1" style="display: none;">

                                            <div class="form-group form-md-line-input form-md-floating-label">
                                                <select id="" class="form-control edited" name="condition">
                                                    <option value="Value" id=""> </option>
                                                    <option value="Value" id="">1 </option>
                                                    <option value="Value" id="">2 </option>
                                                    <option value="Value" id="">2.5 </option>
                                                </select>
                                                <label for="condition">اختار النسبة </label>
                                            </div>
                                        </div>
                                        <div class="col-md-12" id="optionVlueFlat2" style="display: none;">

                                            <div class="form-group form-md-line-input form-md-floating-label">
                                                <input type="number" class="form-control" id="price" name="price" placeholder="">
                                                <label for="price">المبلغ المقطوع</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group form-md-line-input form-md-floating-label">
                                                <input type="number" class="form-control" id="price" name="price" placeholder="">
                                                <label for="price">السعر</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6" id="">

                                            <div class="form-group form-md-line-input form-md-floating-label">
                                                <select id="" class="form-control edited" name="condition">
                                                    <option value="Value" id=""> </option>
                                                    <option value="Value" id="">ريال </option>
                                                    <option value="Value" id="">جنيه </option>
                                                    <option value="Value" id="">دينار </option>
                                                </select>
                                                <label for="condition">اختار العملة </label>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group form-md-line-input form-md-floating-label">
                                                <input type="number" class="form-control" id="meter_price" name="meter_price" placeholder="">
                                                <label for="meter_price">سعر المتر</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group form-md-line-input form-md-floating-label">
                                                <input type="number" class="form-control" id="negotiating_boundary" name="negotiating_boundary" placeholder="">
                                                <label for="negotiating_boundary">حد التفاوض</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group form-md-line-input form-md-floating-label">
                                                <input type="number" class="form-control" id="price" name="price" placeholder="">
                                                <label for="price">المساحة الاجمالية</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6" id="">

                                            <div class="form-group form-md-line-input form-md-floating-label">
                                                <select id="" class="form-control edited" name="condition">
                                                    <option value="Value" id=""> </option>
                                                    <option value="Value" id="">متر </option>
                                                    <option value="Value" id="">قدم </option>
                                                    <option value="Value" id="">انش </option>
                                                </select>
                                                <label for="condition">وحدة القياس </label>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group form-md-line-input form-md-floating-label">
                                                <input type="number" class="form-control" id="price" name="price" placeholder="">
                                                <label for="price">المساحة البناء</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6" id="">

                                            <div class="form-group form-md-line-input form-md-floating-label">
                                                <select id="" class="form-control edited" name="condition">
                                                    <option value="Value" id=""> </option>
                                                    <option value="Value" id="">متر </option>
                                                    <option value="Value" id="">قدم </option>
                                                    <option value="Value" id="">انش </option>
                                                </select>
                                                <label for="condition">وحدة القياس </label>
                                            </div>
                                        </div>
                                        <div class="col-md-6 ">
                                            <div class="form-group form-md-line-input form-md-floating-label">
                                                <select id="property_direction" name="property_direction" class="form-control edited">
                                                    <option value="Value"></option>
                                                    <option value="north">شمال</option>
                                                    <option value="east">شرق</option>
                                                    <option value="west">غرب</option>
                                                    <option value="south">جنوب</option>
                                                    <option value="north_east">شمال شرق</option>
                                                    <option value="north_west">شمال غرب</option>
                                                    <option value="south_east">جنوب شرق</option>
                                                    <option value="south_west">جنوب غرب</option>
                                                    <option value="none">بدون</option>
                                                </select>
                                                <label for="">اتجاه العقار</label>
                                            </div>
                                        </div>



                                    </div>
                                    <!--Tab2-Select2  -->
                                    <div id="Tab2-Select3" style="display: none;">


                                        <div class="col-md-6">
                                            <div class="form-group form-md-line-input form-md-floating-label">
                                                <select id="" class="form-control edited" name="condition">
                                                    <option value="Value" id=""> </option>
                                                    <option value="Value" id="">ايجار </option>
                                                    <option value="Value" id="">بيع </option>
                                                    <option value="Value" id="">استثمار </option>
                                                    <option value="Value" id="">تقبيل </option>
                                                    <option value="Value" id="">بيع او استثمار </option>
                                                </select>
                                                <label for="condition">نوع العرض</label>
                                            </div>
                                        </div>

                                        <script type="text/javascript">
                                            //script for showing two option

                                            function onSelectFlatTap21() {
                                                var op = document.getElementById("SelectFlatTap21").value;
                                                if (op == "VlueFlat11") {
                                                    document.getElementById("optionVlueFlat11").style.display = '';
                                                    document.getElementById("optionVlueFlat21").style.display = 'none';

                                                }
                                                if (op == "VlueFlat21") {
                                                    document.getElementById("optionVlueFlat11").style.display = 'none';
                                                    document.getElementById("optionVlueFlat21").style.display = '';

                                                }
                                            }
                                        </script>

                                        <div class="col-md-6">

                                            <div class="form-group form-md-line-input form-md-floating-label">
                                                <select id="SelectFlatTap21" class="form-control edited" name="condition" onchange="onSelectFlatTap21()">
                                                    <option value="Value" id=""> </option>
                                                    <option value="VlueFlat11" id="VlueFlat11">نسبة مئوية </option>
                                                    <option value="VlueFlat21" id="VlueFlat11">مبلغ مقطوع </option>

                                                </select>
                                                <label for="condition">طريقة ادارة الاملاك</label>
                                            </div>
                                        </div>

                                        <div class="col-md-12" id="optionVlueFlat11" style="display: none;">

                                            <div class="form-group form-md-line-input form-md-floating-label">
                                                <select id="" class="form-control edited" name="condition">
                                                    <option value="Value" id=""> </option>
                                                    <option value="Value" id="">1 </option>
                                                    <option value="Value" id="">2 </option>
                                                    <option value="Value" id="">2.5 </option>
                                                </select>
                                                <label for="condition">اختار النسبة </label>
                                            </div>
                                        </div>
                                        <div class="col-md-12" id="optionVlueFlat21" style="display: none;">

                                            <div class="form-group form-md-line-input form-md-floating-label">
                                                <input type="number" class="form-control" id="price" name="price" placeholder="">
                                                <label for="price">المبلغ المقطوع</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group form-md-line-input form-md-floating-label">
                                                <input type="number" class="form-control" id="price" name="price" placeholder="">
                                                <label for="price">السعر</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6" id="">

                                            <div class="form-group form-md-line-input form-md-floating-label">
                                                <select id="" class="form-control edited" name="condition">
                                                    <option value="Value" id=""> </option>
                                                    <option value="Value" id="">ريال </option>
                                                    <option value="Value" id="">جنيه </option>
                                                    <option value="Value" id="">دينار </option>
                                                </select>
                                                <label for="condition">اختار العملة </label>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group form-md-line-input form-md-floating-label">
                                                <input type="number" class="form-control" id="meter_price" name="meter_price" placeholder="">
                                                <label for="meter_price">سعر المتر</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group form-md-line-input form-md-floating-label">
                                                <input type="number" class="form-control" id="negotiating_boundary" name="negotiating_boundary" placeholder="">
                                                <label for="negotiating_boundary">حد التفاوض</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group form-md-line-input form-md-floating-label">
                                                <input type="number" class="form-control" id="price" name="price" placeholder="">
                                                <label for="price">المساحة الاجمالية</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6" id="">

                                            <div class="form-group form-md-line-input form-md-floating-label">
                                                <select id="" class="form-control edited" name="condition">
                                                    <option value="Value" id=""> </option>
                                                    <option value="Value" id="">متر </option>
                                                    <option value="Value" id="">قدم </option>
                                                    <option value="Value" id="">انش </option>
                                                </select>
                                                <label for="condition">وحدة القياس </label>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group form-md-line-input form-md-floating-label">
                                                <input type="number" class="form-control" id="price" name="price" placeholder="">
                                                <label for="price">المساحة البناء</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6" id="">

                                            <div class="form-group form-md-line-input form-md-floating-label">
                                                <select id="" class="form-control edited" name="condition">
                                                    <option value="Value" id=""> </option>
                                                    <option value="Value" id="">متر </option>
                                                    <option value="Value" id="">قدم </option>
                                                    <option value="Value" id="">انش </option>
                                                </select>
                                                <label for="condition">وحدة القياس </label>
                                            </div>
                                        </div>
                                        <div class="col-md-6 ">
                                            <div class="form-group form-md-line-input form-md-floating-label">
                                                <select id="property_direction" name="property_direction" class="form-control edited">
                                                    <option value="Value"></option>
                                                    <option value="north">شمال</option>
                                                    <option value="east">شرق</option>
                                                    <option value="west">غرب</option>
                                                    <option value="south">جنوب</option>
                                                    <option value="north_east">شمال شرق</option>
                                                    <option value="north_west">شمال غرب</option>
                                                    <option value="south_east">جنوب شرق</option>
                                                    <option value="south_west">جنوب غرب</option>
                                                    <option value="none">بدون</option>
                                                </select>
                                                <label for="">اتجاه العقار</label>
                                            </div>
                                        </div>

                                    </div>
                                    <!--Tab2-Select3  -->
                                    <div id="Tab2-Select4" style="display: none;">
                                        <div class="col-md-6">
                                            <div class="form-group form-md-line-input form-md-floating-label">
                                                <select id="" class="form-control edited" name="condition">
                                                    <option value="Value" id=""> </option>
                                                    <option value="Value" id="">ايجار </option>
                                                    <option value="Value" id="">بيع </option>
                                                    <option value="Value" id="">استثمار </option>
                                                    <option value="Value" id="">تقبيل </option>
                                                    <option value="Value" id="">بيع او استثمار </option>
                                                </select>
                                                <label for="condition">نوع العرض</label>
                                            </div>
                                        </div>

                                        <script type="text/javascript">
                                            //script for showing two option

                                            function onSelectFlatTap210() {
                                                var op = document.getElementById("SelectFlatTap210").value;
                                                if (op == "VlueFlat110") {
                                                    document.getElementById("optionVlueFlat110").style.display = '';
                                                    document.getElementById("optionVlueFlat210").style.display = 'none';

                                                }
                                                if (op == "VlueFlat210") {
                                                    document.getElementById("optionVlueFlat110").style.display = 'none';
                                                    document.getElementById("optionVlueFlat210").style.display = '';

                                                }
                                            }
                                        </script>

                                        <div class="col-md-6">

                                            <div class="form-group form-md-line-input form-md-floating-label">
                                                <select id="SelectFlatTap210" class="form-control edited" name="condition" onchange="onSelectFlatTap210()">
                                                    <option value="Value" id=""> </option>
                                                    <option value="VlueFlat110" id="VlueFlat110">نسبة مئوية </option>
                                                    <option value="VlueFlat210" id="VlueFlat210">مبلغ مقطوع </option>

                                                </select>
                                                <label for="condition">طريقة ادارة الاملاك</label>
                                            </div>
                                        </div>

                                        <div class="col-md-12" id="optionVlueFlat110" style="display: none;">

                                            <div class="form-group form-md-line-input form-md-floating-label">
                                                <select id="" class="form-control edited" name="condition">
                                                    <option value="Value" id=""> </option>
                                                    <option value="Value" id="">1 </option>
                                                    <option value="Value" id="">2 </option>
                                                    <option value="Value" id="">2.5 </option>
                                                </select>
                                                <label for="condition">اختار النسبة </label>
                                            </div>
                                        </div>
                                        <div class="col-md-12" id="optionVlueFlat210" style="display: none;">

                                            <div class="form-group form-md-line-input form-md-floating-label">
                                                <input type="number" class="form-control" id="price" name="price" placeholder="">
                                                <label for="price">المبلغ المقطوع</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group form-md-line-input form-md-floating-label">
                                                <input type="number" class="form-control" id="price" name="price" placeholder="">
                                                <label for="price">السعر</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6" id="">

                                            <div class="form-group form-md-line-input form-md-floating-label">
                                                <select id="" class="form-control edited" name="condition">
                                                    <option value="Value" id=""> </option>
                                                    <option value="Value" id="">ريال </option>
                                                    <option value="Value" id="">جنيه </option>
                                                    <option value="Value" id="">دينار </option>
                                                </select>
                                                <label for="condition">اختار العملة </label>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group form-md-line-input form-md-floating-label">
                                                <input type="number" class="form-control" id="price" name="price" placeholder="">
                                                <label for="price">سعر المتر</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group form-md-line-input form-md-floating-label">
                                                <input type="number" class="form-control" id="price" name="price" placeholder="">
                                                <label for="price">حد التفاوض</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group form-md-line-input form-md-floating-label">
                                                <input type="number" class="form-control" id="price" name="price" placeholder="">
                                                <label for="price">المساحة الاجمالية</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6" id="">

                                            <div class="form-group form-md-line-input form-md-floating-label">
                                                <select id="" class="form-control edited" name="condition">
                                                    <option value="Value" id=""> </option>
                                                    <option value="Value" id="">متر </option>
                                                    <option value="Value" id="">قدم </option>
                                                    <option value="Value" id="">انش </option>
                                                </select>
                                                <label for="condition">وحدة القياس </label>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group form-md-line-input form-md-floating-label">
                                                <input type="number" class="form-control" id="price" name="price" placeholder="">
                                                <label for="price">المساحة البناء</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6" id="">

                                            <div class="form-group form-md-line-input form-md-floating-label">
                                                <select id="" class="form-control edited" name="condition">
                                                    <option value="Value" id=""> </option>
                                                    <option value="Value" id="">متر </option>
                                                    <option value="Value" id="">قدم </option>
                                                    <option value="Value" id="">انش </option>
                                                </select>
                                                <label for="condition">وحدة القياس </label>
                                            </div>
                                        </div>
                                        <div class="col-md-6 ">
                                            <div class="form-group form-md-line-input form-md-floating-label">
                                                <select id="property_direction" name="property_direction" class="form-control edited">
                                                    <option value="Value"></option>
                                                    <option value="north">شمال</option>
                                                    <option value="east">شرق</option>
                                                    <option value="west">غرب</option>
                                                    <option value="south">جنوب</option>
                                                    <option value="north_east">شمال شرق</option>
                                                    <option value="north_west">شمال غرب</option>
                                                    <option value="south_east">جنوب شرق</option>
                                                    <option value="south_west">جنوب غرب</option>
                                                    <option value="none">بدون</option>
                                                </select>
                                                <label for="">اتجاه العقار</label>
                                            </div>
                                        </div>

                                    </div>
                                    <!--Tab2-Select4  -->
                                    <div id="Tab2-Select5" style="display: none;">
                                        <div class="col-md-6">
                                            <div class="form-group form-md-line-input form-md-floating-label">
                                                <select id="" class="form-control edited" name="condition">
                                                    <option value="Value" id=""> </option>
                                                    <option value="Value" id="">ايجار </option>
                                                    <option value="Value" id="">بيع </option>
                                                    <option value="Value" id="">استثمار </option>
                                                    <option value="Value" id="">تقبيل </option>
                                                    <option value="Value" id="">بيع او استثمار </option>
                                                </select>
                                                <label for="condition">نوع العرض</label>
                                            </div>
                                        </div>

                                        <script type="text/javascript">
                                            //script for showing two option

                                            function onSelectFlatTap2103() {
                                                var op = document.getElementById("SelectFlatTap2103").value;
                                                if (op == "VlueFlat1103") {
                                                    document.getElementById("optionVlueFlat1103").style.display = '';
                                                    document.getElementById("optionVlueFlat2103").style.display = 'none';

                                                }
                                                if (op == "VlueFlat2103") {
                                                    document.getElementById("optionVlueFlat1103").style.display = 'none';
                                                    document.getElementById("optionVlueFlat2103").style.display = '';

                                                }
                                            }
                                        </script>

                                        <div class="col-md-6">

                                            <div class="form-group form-md-line-input form-md-floating-label">
                                                <select id="SelectFlatTap2103" class="form-control edited" name="condition" onchange="onSelectFlatTap2103()">
                                                    <option value="Value" id=""> </option>
                                                    <option value="VlueFlat1103" id="VlueFlat1103">نسبة مئوية </option>
                                                    <option value="VlueFlat2103" id="VlueFlat2103">مبلغ مقطوع </option>

                                                </select>
                                                <label for="condition">طريقة ادارة الاملاك</label>
                                            </div>
                                        </div>

                                        <div class="col-md-12" id="optionVlueFlat1103" style="display: none;">

                                            <div class="form-group form-md-line-input form-md-floating-label">
                                                <select id="" class="form-control edited" name="condition">
                                                    <option value="Value" id=""> </option>
                                                    <option value="Value" id="">1 </option>
                                                    <option value="Value" id="">2 </option>
                                                    <option value="Value" id="">2.5 </option>
                                                </select>
                                                <label for="condition">اختار النسبة </label>
                                            </div>
                                        </div>
                                        <div class="col-md-12" id="optionVlueFlat2103" style="display: none;">

                                            <div class="form-group form-md-line-input form-md-floating-label">
                                                <input type="number" class="form-control" id="price" name="price" placeholder="">
                                                <label for="price">المبلغ المقطوع</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group form-md-line-input form-md-floating-label">
                                                <input type="number" class="form-control" id="price" name="price" placeholder="">
                                                <label for="price">السعر</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6" id="">

                                            <div class="form-group form-md-line-input form-md-floating-label">
                                                <select id="" class="form-control edited" name="condition">
                                                    <option value="Value" id=""> </option>
                                                    <option value="Value" id="">ريال </option>
                                                    <option value="Value" id="">جنيه </option>
                                                    <option value="Value" id="">دينار </option>
                                                </select>
                                                <label for="condition">اختار العملة </label>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group form-md-line-input form-md-floating-label">
                                                <input type="number" class="form-control" id="price" name="price" placeholder="">
                                                <label for="price">سعر المتر</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group form-md-line-input form-md-floating-label">
                                                <input type="number" class="form-control" id="price" name="price" placeholder="">
                                                <label for="price">حد التفاوض</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group form-md-line-input form-md-floating-label">
                                                <input type="number" class="form-control" id="price" name="price" placeholder="">
                                                <label for="price">المساحة الاجمالية</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6" id="">

                                            <div class="form-group form-md-line-input form-md-floating-label">
                                                <select id="" class="form-control edited" name="condition">
                                                    <option value="Value" id=""> </option>
                                                    <option value="Value" id="">متر </option>
                                                    <option value="Value" id="">قدم </option>
                                                    <option value="Value" id="">انش </option>
                                                </select>
                                                <label for="condition">وحدة القياس </label>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group form-md-line-input form-md-floating-label">
                                                <input type="number" class="form-control" id="price" name="price" placeholder="">
                                                <label for="price">المساحة البناء</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6" id="">

                                            <div class="form-group form-md-line-input form-md-floating-label">
                                                <select id="" class="form-control edited" name="condition">
                                                    <option value="Value" id=""> </option>
                                                    <option value="Value" id="">متر </option>
                                                    <option value="Value" id="">قدم </option>
                                                    <option value="Value" id="">انش </option>
                                                </select>
                                                <label for="condition">وحدة القياس </label>
                                            </div>
                                        </div>
                                        <div class="col-md-6 ">
                                            <div class="form-group form-md-line-input form-md-floating-label">
                                                <select id="property_direction" name="property_direction" class="form-control edited">
                                                    <option value="Value"></option>
                                                    <option value="north">شمال</option>
                                                    <option value="east">شرق</option>
                                                    <option value="west">غرب</option>
                                                    <option value="south">جنوب</option>
                                                    <option value="north_east">شمال شرق</option>
                                                    <option value="north_west">شمال غرب</option>
                                                    <option value="south_east">جنوب شرق</option>
                                                    <option value="south_west">جنوب غرب</option>
                                                    <option value="none">بدون</option>
                                                </select>
                                                <label for="">اتجاه العقار</label>
                                            </div>
                                        </div>



                                    </div>
                                    <!--Tab2-Select5  -->
                                    <div id="Tab2-Select6" style="display: none;">
                                        <div class="col-md-6">
                                            <div class="form-group form-md-line-input form-md-floating-label">
                                                <select id="" class="form-control edited" name="condition">
                                                    <option value="Value" id=""> </option>
                                                    <option value="Value" id="">ايجار </option>
                                                    <option value="Value" id="">بيع </option>
                                                    <option value="Value" id="">استثمار </option>
                                                    <option value="Value" id="">تقبيل </option>
                                                    <option value="Value" id="">بيع او استثمار </option>
                                                </select>
                                                <label for="condition">نوع العرض</label>
                                            </div>
                                        </div>

                                        <script type="text/javascript">
                                            //script for showing two option

                                            function onSelectFlatTap21034() {
                                                var op = document.getElementById("SelectFlatTap21034").value;
                                                if (op == "VlueFlat11034") {
                                                    document.getElementById("optionVlueFlat11034").style.display = '';
                                                    document.getElementById("optionVlueFlat21034").style.display = 'none';

                                                }
                                                if (op == "VlueFlat21034") {
                                                    document.getElementById("optionVlueFlat11034").style.display = 'none';
                                                    document.getElementById("optionVlueFlat21034").style.display = '';

                                                }
                                            }
                                        </script>

                                        <div class="col-md-6">

                                            <div class="form-group form-md-line-input form-md-floating-label">
                                                <select id="SelectFlatTap21034" class="form-control edited" name="condition" onchange="onSelectFlatTap21034()">
                                                    <option value="Value" id=""> </option>
                                                    <option value="VlueFlat11034" id="VlueFlat11034">نسبة مئوية </option>
                                                    <option value="VlueFlat21034" id="VlueFlat21034">مبلغ مقطوع </option>

                                                </select>
                                                <label for="condition">طريقة ادارة الاملاك</label>
                                            </div>
                                        </div>

                                        <div class="col-md-12" id="optionVlueFlat11034" style="display: none;">

                                            <div class="form-group form-md-line-input form-md-floating-label">
                                                <select id="" class="form-control edited" name="condition">
                                                    <option value="Value" id=""> </option>
                                                    <option value="Value" id="">1 </option>
                                                    <option value="Value" id="">2 </option>
                                                    <option value="Value" id="">2.5 </option>
                                                </select>
                                                <label for="condition">اختار النسبة </label>
                                            </div>
                                        </div>
                                        <div class="col-md-12" id="optionVlueFlat21034" style="display: none;">

                                            <div class="form-group form-md-line-input form-md-floating-label">
                                                <input type="number" class="form-control" id="price" name="price" placeholder="">
                                                <label for="price">المبلغ المقطوع</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group form-md-line-input form-md-floating-label">
                                                <input type="number" class="form-control" id="price" name="price" placeholder="">
                                                <label for="price">السعر</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6" id="">

                                            <div class="form-group form-md-line-input form-md-floating-label">
                                                <select id="" class="form-control edited" name="condition">
                                                    <option value="Value" id=""> </option>
                                                    <option value="Value" id="">ريال </option>
                                                    <option value="Value" id="">جنيه </option>
                                                    <option value="Value" id="">دينار </option>
                                                </select>
                                                <label for="condition">اختار العملة </label>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group form-md-line-input form-md-floating-label">
                                                <input type="number" class="form-control" id="price" name="price" placeholder="">
                                                <label for="price">سعر المتر</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group form-md-line-input form-md-floating-label">
                                                <input type="number" class="form-control" id="price" name="price" placeholder="">
                                                <label for="price">حد التفاوض</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group form-md-line-input form-md-floating-label">
                                                <input type="number" class="form-control" id="price" name="price" placeholder="">
                                                <label for="price">المساحة الاجمالية</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6" id="">

                                            <div class="form-group form-md-line-input form-md-floating-label">
                                                <select id="" class="form-control edited" name="condition">
                                                    <option value="Value" id=""> </option>
                                                    <option value="Value" id="">متر </option>
                                                    <option value="Value" id="">قدم </option>
                                                    <option value="Value" id="">انش </option>
                                                </select>
                                                <label for="condition">وحدة القياس </label>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group form-md-line-input form-md-floating-label">
                                                <input type="number" class="form-control" id="price" name="price" placeholder="">
                                                <label for="price">المساحة البناء</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6" id="">

                                            <div class="form-group form-md-line-input form-md-floating-label">
                                                <select id="" class="form-control edited" name="condition">
                                                    <option value="Value" id=""> </option>
                                                    <option value="Value" id="">متر </option>
                                                    <option value="Value" id="">قدم </option>
                                                    <option value="Value" id="">انش </option>
                                                </select>
                                                <label for="condition">وحدة القياس </label>
                                            </div>
                                        </div>
                                        <div class="col-md-6 ">
                                            <div class="form-group form-md-line-input form-md-floating-label">
                                                <select id="property_direction" name="property_direction" class="form-control edited">
                                                    <option value="Value"></option>
                                                    <option value="north">شمال</option>
                                                    <option value="east">شرق</option>
                                                    <option value="west">غرب</option>
                                                    <option value="south">جنوب</option>
                                                    <option value="north_east">شمال شرق</option>
                                                    <option value="north_west">شمال غرب</option>
                                                    <option value="south_east">جنوب شرق</option>
                                                    <option value="south_west">جنوب غرب</option>
                                                    <option value="none">بدون</option>
                                                </select>
                                                <label for="">اتجاه العقار</label>
                                            </div>
                                        </div>

                                    </div>
                                    <!--Tab2-Select6  -->
                                    <div id="Tab2-Select7" style="display: none;">
                                        <div class="col-md-6">
                                            <div class="form-group form-md-line-input form-md-floating-label">
                                                <select id="" class="form-control edited" name="condition">
                                                    <option value="Value" id=""> </option>
                                                    <option value="Value" id="">ايجار </option>
                                                    <option value="Value" id="">بيع </option>
                                                    <option value="Value" id="">استثمار </option>
                                                    <option value="Value" id="">تقبيل </option>
                                                    <option value="Value" id="">بيع او استثمار </option>
                                                </select>
                                                <label for="condition">نوع العرض</label>
                                            </div>
                                        </div>

                                        <script type="text/javascript">
                                            //script for showing two option

                                            function onSelectFlatTap210340() {
                                                var op = document.getElementById("SelectFlatTap210340").value;
                                                if (op == "VlueFlat110340") {
                                                    document.getElementById("optionVlueFlat110340").style.display = '';
                                                    document.getElementById("optionVlueFlat210340").style.display = 'none';

                                                }
                                                if (op == "VlueFlat210340") {
                                                    document.getElementById("optionVlueFlat110340").style.display = 'none';
                                                    document.getElementById("optionVlueFlat210340").style.display = '';

                                                }
                                            }
                                        </script>

                                        <div class="col-md-6">

                                            <div class="form-group form-md-line-input form-md-floating-label">
                                                <select id="SelectFlatTap210340" class="form-control edited" name="condition" onchange="onSelectFlatTap210340()">
                                                    <option value="Value" id=""> </option>
                                                    <option value="VlueFlat110340" id="VlueFlat110340">نسبة مئوية </option>
                                                    <option value="VlueFlat210340" id="VlueFlat210340">مبلغ مقطوع </option>

                                                </select>
                                                <label for="condition">طريقة ادارة الاملاك</label>
                                            </div>
                                        </div>

                                        <div class="col-md-12" id="optionVlueFlat110340" style="display: none;">

                                            <div class="form-group form-md-line-input form-md-floating-label">
                                                <select id="" class="form-control edited" name="condition">
                                                    <option value="Value" id=""> </option>
                                                    <option value="Value" id="">1 </option>
                                                    <option value="Value" id="">2 </option>
                                                    <option value="Value" id="">2.5 </option>
                                                </select>
                                                <label for="condition">اختار النسبة </label>
                                            </div>
                                        </div>
                                        <div class="col-md-12" id="optionVlueFlat210340" style="display: none;">

                                            <div class="form-group form-md-line-input form-md-floating-label">
                                                <input type="number" class="form-control" id="price" name="price" placeholder="">
                                                <label for="price">المبلغ المقطوع</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group form-md-line-input form-md-floating-label">
                                                <input type="number" class="form-control" id="price" name="price" placeholder="">
                                                <label for="price">السعر</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6" id="">

                                            <div class="form-group form-md-line-input form-md-floating-label">
                                                <select id="" class="form-control edited" name="condition">
                                                    <option value="Value" id=""> </option>
                                                    <option value="Value" id="">ريال </option>
                                                    <option value="Value" id="">جنيه </option>
                                                    <option value="Value" id="">دينار </option>
                                                </select>
                                                <label for="condition">اختار العملة </label>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group form-md-line-input form-md-floating-label">
                                                <input type="number" class="form-control" id="price" name="price" placeholder="">
                                                <label for="price">سعر المتر</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group form-md-line-input form-md-floating-label">
                                                <input type="number" class="form-control" id="price" name="price" placeholder="">
                                                <label for="price">حد التفاوض</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group form-md-line-input form-md-floating-label">
                                                <input type="number" class="form-control" id="price" name="price" placeholder="">
                                                <label for="price">المساحة الاجمالية</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6" id="">

                                            <div class="form-group form-md-line-input form-md-floating-label">
                                                <select id="" class="form-control edited" name="condition">
                                                    <option value="Value" id=""> </option>
                                                    <option value="Value" id="">متر </option>
                                                    <option value="Value" id="">قدم </option>
                                                    <option value="Value" id="">انش </option>
                                                </select>
                                                <label for="condition">وحدة القياس </label>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group form-md-line-input form-md-floating-label">
                                                <input type="number" class="form-control" id="price" name="price" placeholder="">
                                                <label for="price">المساحة البناء</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6" id="">

                                            <div class="form-group form-md-line-input form-md-floating-label">
                                                <select id="" class="form-control edited" name="condition">
                                                    <option value="Value" id=""> </option>
                                                    <option value="Value" id="">متر </option>
                                                    <option value="Value" id="">قدم </option>
                                                    <option value="Value" id="">انش </option>
                                                </select>
                                                <label for="condition">وحدة القياس </label>
                                            </div>
                                        </div>
                                        <div class="col-md-6 ">
                                            <div class="form-group form-md-line-input form-md-floating-label">
                                                <select id="property_direction" name="property_direction" class="form-control edited">
                                                    <option value="Value"></option>
                                                    <option value="north">شمال</option>
                                                    <option value="east">شرق</option>
                                                    <option value="west">غرب</option>
                                                    <option value="south">جنوب</option>
                                                    <option value="north_east">شمال شرق</option>
                                                    <option value="north_west">شمال غرب</option>
                                                    <option value="south_east">جنوب شرق</option>
                                                    <option value="south_west">جنوب غرب</option>
                                                    <option value="none">بدون</option>
                                                </select>
                                                <label for="">اتجاه العقار</label>
                                            </div>
                                        </div>



                                    </div>
                                    <!--Tab2-Select7  -->
                                    <div id="Tab2-Select8" style="display: none;">
                                        <div class="col-md-6">
                                            <div class="form-group form-md-line-input form-md-floating-label">
                                                <select id="" class="form-control edited" name="condition">
                                                    <option value="Value" id=""> </option>
                                                    <option value="Value" id="">ايجار </option>
                                                    <option value="Value" id="">بيع </option>
                                                    <option value="Value" id="">استثمار </option>
                                                    <option value="Value" id="">تقبيل </option>
                                                    <option value="Value" id="">بيع او استثمار </option>
                                                </select>
                                                <label for="condition">نوع العرض</label>
                                            </div>
                                        </div>

                                        <script type="text/javascript">
                                            //script for showing two option

                                            function onSelectFlatTap210340A() {
                                                var op = document.getElementById("SelectFlatTap210340A").value;
                                                if (op == "VlueFlat110340A") {
                                                    document.getElementById("optionVlueFlat110340A").style.display = '';
                                                    document.getElementById("optionVlueFlat210340A").style.display = 'none';

                                                }
                                                if (op == "VlueFlat210340A") {
                                                    document.getElementById("optionVlueFlat110340A").style.display = 'none';
                                                    document.getElementById("optionVlueFlat210340A").style.display = '';

                                                }
                                            }
                                        </script>

                                        <div class="col-md-6">

                                            <div class="form-group form-md-line-input form-md-floating-label">
                                                <select id="SelectFlatTap210340A" class="form-control edited" name="condition" onchange="onSelectFlatTap210340A()">
                                                    <option value="Value" id=""> </option>
                                                    <option value="VlueFlat110340A" id="VlueFlat110340A">نسبة مئوية </option>
                                                    <option value="VlueFlat210340A" id="VlueFlat210340A">مبلغ مقطوع </option>

                                                </select>
                                                <label for="condition">طريقة ادارة الاملاك</label>
                                            </div>
                                        </div>

                                        <div class="col-md-12" id="optionVlueFlat110340A" style="display: none;">

                                            <div class="form-group form-md-line-input form-md-floating-label">
                                                <select id="" class="form-control edited" name="condition">
                                                    <option value="Value" id=""> </option>
                                                    <option value="Value" id="">1 </option>
                                                    <option value="Value" id="">2 </option>
                                                    <option value="Value" id="">2.5 </option>
                                                </select>
                                                <label for="condition">اختار النسبة </label>
                                            </div>
                                        </div>
                                        <div class="col-md-12" id="optionVlueFlat210340A" style="display: none;">

                                            <div class="form-group form-md-line-input form-md-floating-label">
                                                <input type="number" class="form-control" id="price" name="price" placeholder="">
                                                <label for="price">المبلغ المقطوع</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group form-md-line-input form-md-floating-label">
                                                <input type="number" class="form-control" id="price" name="price" placeholder="">
                                                <label for="price">السعر</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6" id="">

                                            <div class="form-group form-md-line-input form-md-floating-label">
                                                <select id="" class="form-control edited" name="condition">
                                                    <option value="Value" id=""> </option>
                                                    <option value="Value" id="">ريال </option>
                                                    <option value="Value" id="">جنيه </option>
                                                    <option value="Value" id="">دينار </option>
                                                </select>
                                                <label for="condition">اختار العملة </label>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group form-md-line-input form-md-floating-label">
                                                <input type="number" class="form-control" id="price" name="price" placeholder="">
                                                <label for="price">سعر المتر</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group form-md-line-input form-md-floating-label">
                                                <input type="number" class="form-control" id="price" name="price" placeholder="">
                                                <label for="price">حد التفاوض</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group form-md-line-input form-md-floating-label">
                                                <input type="number" class="form-control" id="price" name="price" placeholder="">
                                                <label for="price">المساحة الاجمالية</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6" id="">

                                            <div class="form-group form-md-line-input form-md-floating-label">
                                                <select id="" class="form-control edited" name="condition">
                                                    <option value="Value" id=""> </option>
                                                    <option value="Value" id="">متر </option>
                                                    <option value="Value" id="">قدم </option>
                                                    <option value="Value" id="">انش </option>
                                                </select>
                                                <label for="condition">وحدة القياس </label>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group form-md-line-input form-md-floating-label">
                                                <input type="number" class="form-control" id="price" name="price" placeholder="">
                                                <label for="price">المساحة البناء</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6" id="">

                                            <div class="form-group form-md-line-input form-md-floating-label">
                                                <select id="" class="form-control edited" name="condition">
                                                    <option value="Value" id=""> </option>
                                                    <option value="Value" id="">متر </option>
                                                    <option value="Value" id="">قدم </option>
                                                    <option value="Value" id="">انش </option>
                                                </select>
                                                <label for="condition">وحدة القياس </label>
                                            </div>
                                        </div>
                                        <div class="col-md-6 ">
                                            <div class="form-group form-md-line-input form-md-floating-label">
                                                <select id="property_direction" name="property_direction" class="form-control edited">
                                                    <option value="Value"></option>
                                                    <option value="north">شمال</option>
                                                    <option value="east">شرق</option>
                                                    <option value="west">غرب</option>
                                                    <option value="south">جنوب</option>
                                                    <option value="north_east">شمال شرق</option>
                                                    <option value="north_west">شمال غرب</option>
                                                    <option value="south_east">جنوب شرق</option>
                                                    <option value="south_west">جنوب غرب</option>
                                                    <option value="none">بدون</option>
                                                </select>
                                                <label for="">اتجاه العقار</label>
                                            </div>
                                        </div>


                                    </div>
                                    <!--Tab2-Select8  -->
                                    <div id="Tab2-Select9" style="display: none;">

                                        <div class="col-md-6">
                                            <div class="form-group form-md-line-input form-md-floating-label">
                                                <select id="" class="form-control edited" name="condition">
                                                    <option value="Value" id=""> </option>
                                                    <option value="Value" id="">ايجار </option>
                                                    <option value="Value" id="">بيع </option>
                                                    <option value="Value" id="">استثمار </option>
                                                    <option value="Value" id="">تقبيل </option>
                                                    <option value="Value" id="">بيع او استثمار </option>
                                                </select>
                                                <label for="condition">نوع العرض</label>
                                            </div>
                                        </div>

                                        <script type="text/javascript">
                                            //script for showing two option

                                            function onSelectFlatTap210340AAA() {
                                                var op = document.getElementById("SelectFlatTap210340AAA").value;
                                                if (op == "VlueFlat110340AAA") {
                                                    document.getElementById("optionVlueFlat110340AAA").style.display = '';
                                                    document.getElementById("optionVlueFlat210340AAA").style.display = 'none';

                                                }
                                                if (op == "VlueFlat210340AAA") {
                                                    document.getElementById("optionVlueFlat110340AAA").style.display = 'none';
                                                    document.getElementById("optionVlueFlat210340AAA").style.display = '';

                                                }
                                            }
                                        </script>

                                        <div class="col-md-6">

                                            <div class="form-group form-md-line-input form-md-floating-label">
                                                <select id="SelectFlatTap210340AAA" class="form-control edited" name="condition" onchange="onSelectFlatTap210340AAA()">
                                                    <option value="Value" id=""> </option>
                                                    <option value="VlueFlat110340AAA" id="VlueFlat110340AAA">نسبة مئوية </option>
                                                    <option value="VlueFlat210340AAA" id="VlueFlat210340AAA">مبلغ مقطوع </option>

                                                </select>
                                                <label for="condition">طريقة ادارة الاملاك</label>
                                            </div>
                                        </div>

                                        <div class="col-md-12" id="optionVlueFlat110340AAA" style="display: none;">

                                            <div class="form-group form-md-line-input form-md-floating-label">
                                                <select id="" class="form-control edited" name="condition">
                                                    <option value="Value" id=""> </option>
                                                    <option value="Value" id="">1 </option>
                                                    <option value="Value" id="">2 </option>
                                                    <option value="Value" id="">2.5 </option>
                                                </select>
                                                <label for="condition">اختار النسبة </label>
                                            </div>
                                        </div>
                                        <div class="col-md-12" id="optionVlueFlat210340AAA" style="display: none;">

                                            <div class="form-group form-md-line-input form-md-floating-label">
                                                <input type="number" class="form-control" id="price" name="price" placeholder="">
                                                <label for="price">المبلغ المقطوع</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group form-md-line-input form-md-floating-label">
                                                <input type="number" class="form-control" id="price" name="price" placeholder="">
                                                <label for="price">السعر</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6" id="">

                                            <div class="form-group form-md-line-input form-md-floating-label">
                                                <select id="" class="form-control edited" name="condition">
                                                    <option value="Value" id=""> </option>
                                                    <option value="Value" id="">ريال </option>
                                                    <option value="Value" id="">جنيه </option>
                                                    <option value="Value" id="">دينار </option>
                                                </select>
                                                <label for="condition">اختار العملة </label>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group form-md-line-input form-md-floating-label">
                                                <input type="number" class="form-control" id="price" name="price" placeholder="">
                                                <label for="price">سعر المتر</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group form-md-line-input form-md-floating-label">
                                                <input type="number" class="form-control" id="price" name="price" placeholder="">
                                                <label for="price">حد التفاوض</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group form-md-line-input form-md-floating-label">
                                                <input type="number" class="form-control" id="price" name="price" placeholder="">
                                                <label for="price">المساحة الاجمالية</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6" id="">

                                            <div class="form-group form-md-line-input form-md-floating-label">
                                                <select id="" class="form-control edited" name="condition">
                                                    <option value="Value" id=""> </option>
                                                    <option value="Value" id="">متر </option>
                                                    <option value="Value" id="">قدم </option>
                                                    <option value="Value" id="">انش </option>
                                                </select>
                                                <label for="condition">وحدة القياس </label>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group form-md-line-input form-md-floating-label">
                                                <input type="number" class="form-control" id="price" name="price" placeholder="">
                                                <label for="price">المساحة البناء</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6" id="">

                                            <div class="form-group form-md-line-input form-md-floating-label">
                                                <select id="" class="form-control edited" name="condition">
                                                    <option value="Value" id=""> </option>
                                                    <option value="Value" id="">متر </option>
                                                    <option value="Value" id="">قدم </option>
                                                    <option value="Value" id="">انش </option>
                                                </select>
                                                <label for="condition">وحدة القياس </label>
                                            </div>
                                        </div>
                                        <div class="col-md-6 ">
                                            <div class="form-group form-md-line-input form-md-floating-label">
                                                <select id="property_direction" name="property_direction" class="form-control edited">
                                                    <option value="Value"></option>
                                                    <option value="north">شمال</option>
                                                    <option value="east">شرق</option>
                                                    <option value="west">غرب</option>
                                                    <option value="south">جنوب</option>
                                                    <option value="north_east">شمال شرق</option>
                                                    <option value="north_west">شمال غرب</option>
                                                    <option value="south_east">جنوب شرق</option>
                                                    <option value="south_west">جنوب غرب</option>
                                                    <option value="none">بدون</option>
                                                </select>
                                                <label for="">اتجاه العقار</label>
                                            </div>
                                        </div>


                                    </div>
                                    <!--Tab2-Select9  -->
                                    <div id="Tab2-Select10" style="display: none;">

                                        <div class="col-md-6">
                                            <div class="form-group form-md-line-input form-md-floating-label">
                                                <select id="" class="form-control edited" name="condition">
                                                    <option value="Value" id=""> </option>
                                                    <option value="Value" id="">ايجار </option>
                                                    <option value="Value" id="">بيع </option>
                                                    <option value="Value" id="">استثمار </option>
                                                    <option value="Value" id="">تقبيل </option>
                                                    <option value="Value" id="">بيع او استثمار </option>
                                                </select>
                                                <label for="condition">نوع العرض</label>
                                            </div>
                                        </div>

                                        <script type="text/javascript">
                                            //script for showing two option

                                            function onSelectFlatTap210340AA() {
                                                var op = document.getElementById("SelectFlatTap210340AA").value;
                                                if (op == "VlueFlat110340AA") {
                                                    document.getElementById("optionVlueFlat110340AA").style.display = '';
                                                    document.getElementById("optionVlueFlat210340AA").style.display = 'none';

                                                }
                                                if (op == "VlueFlat210340AA") {
                                                    document.getElementById("optionVlueFlat110340AA").style.display = 'none';
                                                    document.getElementById("optionVlueFlat210340AA").style.display = '';

                                                }
                                            }
                                        </script>

                                        <div class="col-md-6">

                                            <div class="form-group form-md-line-input form-md-floating-label">
                                                <select id="SelectFlatTap210340AA" class="form-control edited" name="condition" onchange="onSelectFlatTap210340AA()">
                                                    <option value="Value" id=""> </option>
                                                    <option value="VlueFlat110340AA" id="VlueFlat110340AA">نسبة مئوية </option>
                                                    <option value="VlueFlat210340AA" id="VlueFlat210340AA">مبلغ مقطوع </option>

                                                </select>
                                                <label for="condition">طريقة ادارة الاملاك</label>
                                            </div>
                                        </div>

                                        <div class="col-md-12" id="optionVlueFlat110340AA" style="display: none;">

                                            <div class="form-group form-md-line-input form-md-floating-label">
                                                <select id="" class="form-control edited" name="condition">
                                                    <option value="Value" id=""> </option>
                                                    <option value="Value" id="">1 </option>
                                                    <option value="Value" id="">2 </option>
                                                    <option value="Value" id="">2.5 </option>
                                                </select>
                                                <label for="condition">اختار النسبة </label>
                                            </div>
                                        </div>
                                        <div class="col-md-12" id="optionVlueFlat210340AA" style="display: none;">

                                            <div class="form-group form-md-line-input form-md-floating-label">
                                                <input type="number" class="form-control" id="price" name="price" placeholder="">
                                                <label for="price">المبلغ المقطوع</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group form-md-line-input form-md-floating-label">
                                                <input type="number" class="form-control" id="price" name="price" placeholder="">
                                                <label for="price">السعر</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6" id="">

                                            <div class="form-group form-md-line-input form-md-floating-label">
                                                <select id="" class="form-control edited" name="condition">
                                                    <option value="Value" id=""> </option>
                                                    <option value="Value" id="">ريال </option>
                                                    <option value="Value" id="">جنيه </option>
                                                    <option value="Value" id="">دينار </option>
                                                </select>
                                                <label for="condition">اختار العملة </label>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group form-md-line-input form-md-floating-label">
                                                <input type="number" class="form-control" id="price" name="price" placeholder="">
                                                <label for="price">سعر المتر</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group form-md-line-input form-md-floating-label">
                                                <input type="number" class="form-control" id="price" name="price" placeholder="">
                                                <label for="price">حد التفاوض</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group form-md-line-input form-md-floating-label">
                                                <input type="number" class="form-control" id="price" name="price" placeholder="">
                                                <label for="price">المساحة الاجمالية</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6" id="">

                                            <div class="form-group form-md-line-input form-md-floating-label">
                                                <select id="" class="form-control edited" name="condition">
                                                    <option value="Value" id=""> </option>
                                                    <option value="Value" id="">متر </option>
                                                    <option value="Value" id="">قدم </option>
                                                    <option value="Value" id="">انش </option>
                                                </select>
                                                <label for="condition">وحدة القياس </label>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group form-md-line-input form-md-floating-label">
                                                <input type="number" class="form-control" id="price" name="price" placeholder="">
                                                <label for="price">المساحة البناء</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6" id="">

                                            <div class="form-group form-md-line-input form-md-floating-label">
                                                <select id="" class="form-control edited" name="condition">
                                                    <option value="Value" id=""> </option>
                                                    <option value="Value" id="">متر </option>
                                                    <option value="Value" id="">قدم </option>
                                                    <option value="Value" id="">انش </option>
                                                </select>
                                                <label for="condition">وحدة القياس </label>
                                            </div>
                                        </div>
                                        <div class="col-md-6 ">
                                            <div class="form-group form-md-line-input form-md-floating-label">
                                                <select id="property_direction" name="property_direction" class="form-control edited">
                                                    <option value="Value"></option>
                                                    <option value="north">شمال</option>
                                                    <option value="east">شرق</option>
                                                    <option value="west">غرب</option>
                                                    <option value="south">جنوب</option>
                                                    <option value="north_east">شمال شرق</option>
                                                    <option value="north_west">شمال غرب</option>
                                                    <option value="south_east">جنوب شرق</option>
                                                    <option value="south_west">جنوب غرب</option>
                                                    <option value="none">بدون</option>
                                                </select>
                                                <label for="">اتجاه العقار</label>
                                            </div>
                                        </div>




                                    </div>
                                    <!--Tab2-Select10  -->
                                    <div id="Tab2-Select11" style="display: none;">
                                        <div class="col-md-6">
                                            <div class="form-group form-md-line-input form-md-floating-label">
                                                <select id="" class="form-control edited" name="condition">
                                                    <option value="Value" id=""> </option>
                                                    <option value="Value" id="">ايجار </option>
                                                    <option value="Value" id="">بيع </option>
                                                    <option value="Value" id="">استثمار </option>
                                                    <option value="Value" id="">تقبيل </option>
                                                    <option value="Value" id="">بيع او استثمار </option>
                                                </select>
                                                <label for="condition">نوع العرض</label>
                                            </div>
                                        </div>

                                        <script type="text/javascript">
                                            //script for showing two option

                                            function onSelectFarm() {
                                                var op = document.getElementById("SelectFarmID").value;
                                                if (op == "Bersent") {
                                                    document.getElementById("optionMng1").style.display = '';
                                                    document.getElementById("optionMng2").style.display = 'none';

                                                }
                                                if (op == "Money") {
                                                    document.getElementById("optionMng1").style.display = 'none';
                                                    document.getElementById("optionMng2").style.display = '';

                                                }
                                            }
                                        </script>

                                        <div class="col-md-6">

                                            <div class="form-group form-md-line-input form-md-floating-label">
                                                <select id="SelectFarmID" class="form-control edited" name="condition" onchange="onSelectFarm()">
                                                    <option value="Value" id=""> </option>
                                                    <option value="Bersent" id="Bersent">نسبة مئوية </option>
                                                    <option value="Money" id="Money">مبلغ مقطوع </option>

                                                </select>
                                                <label for="condition">طريقة ادارة الاملاك</label>
                                            </div>
                                        </div>

                                        <div class="col-md-12" id="optionMng1" style="display: none;">

                                            <div class="form-group form-md-line-input form-md-floating-label">
                                                <select id="" class="form-control edited" name="condition">
                                                    <option value="Value" id=""> </option>
                                                    <option value="Value" id="">1 </option>
                                                    <option value="Value" id="">2 </option>
                                                    <option value="Value" id="">2.5 </option>
                                                </select>
                                                <label for="condition">اختار النسبة </label>
                                            </div>
                                        </div>
                                        <div class="col-md-12" id="optionMng2" style="display: none;">

                                            <div class="form-group form-md-line-input form-md-floating-label">
                                                <input type="number" class="form-control" id="price" name="price" placeholder="">
                                                <label for="price">المبلغ المقطوع</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group form-md-line-input form-md-floating-label">
                                                <input type="number" class="form-control" id="price" name="price" placeholder="">
                                                <label for="price">السعر</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6" id="">

                                            <div class="form-group form-md-line-input form-md-floating-label">
                                                <select id="" class="form-control edited" name="condition">
                                                    <option value="Value" id=""> </option>
                                                    <option value="Value" id="">ريال </option>
                                                    <option value="Value" id="">جنيه </option>
                                                    <option value="Value" id="">دينار </option>
                                                </select>
                                                <label for="condition">اختار العملة </label>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group form-md-line-input form-md-floating-label">
                                                <input type="number" class="form-control" id="price" name="price" placeholder="">
                                                <label for="price">سعر المتر</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group form-md-line-input form-md-floating-label">
                                                <input type="number" class="form-control" id="price" name="price" placeholder="">
                                                <label for="price">حد التفاوض</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group form-md-line-input form-md-floating-label">
                                                <input type="number" class="form-control" id="price" name="price" placeholder="">
                                                <label for="price">المساحة الاجمالية</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6" id="">

                                            <div class="form-group form-md-line-input form-md-floating-label">
                                                <select id="" class="form-control edited" name="condition">
                                                    <option value="Value" id=""> </option>
                                                    <option value="Value" id="">متر </option>
                                                    <option value="Value" id="">قدم </option>
                                                    <option value="Value" id="">انش </option>
                                                </select>
                                                <label for="condition">وحدة القياس </label>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group form-md-line-input form-md-floating-label">
                                                <input type="number" class="form-control" id="price" name="price" placeholder="">
                                                <label for="price">المساحة البناء</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6" id="">

                                            <div class="form-group form-md-line-input form-md-floating-label">
                                                <select id="" class="form-control edited" name="condition">
                                                    <option value="Value" id=""> </option>
                                                    <option value="Value" id="">متر </option>
                                                    <option value="Value" id="">قدم </option>
                                                    <option value="Value" id="">انش </option>
                                                </select>
                                                <label for="condition">وحدة القياس </label>
                                            </div>
                                        </div>
                                        <div class="col-md-6 ">
                                            <div class="form-group form-md-line-input form-md-floating-label">
                                                <select id="property_direction" name="property_direction" class="form-control edited">
                                                    <option value="Value"></option>
                                                    <option value="north">شمال</option>
                                                    <option value="east">شرق</option>
                                                    <option value="west">غرب</option>
                                                    <option value="south">جنوب</option>
                                                    <option value="north_east">شمال شرق</option>
                                                    <option value="north_west">شمال غرب</option>
                                                    <option value="south_east">جنوب شرق</option>
                                                    <option value="south_west">جنوب غرب</option>
                                                    <option value="none">بدون</option>
                                                </select>
                                                <label for="">اتجاه العقار</label>
                                            </div>
                                        </div>



                                    </div>
                                    <!--Tab2-Select11  -->
                                    <div id="Tab2-Select12" style="display: none;">



                                        <div class="col-md-6">
                                            <div class="form-group form-md-line-input form-md-floating-label">
                                                <select id="" class="form-control edited" name="condition">
                                                    <option value="Value" id=""> </option>
                                                    <option value="Value" id="">ايجار </option>
                                                    <option value="Value" id="">بيع </option>
                                                    <option value="Value" id="">استثمار </option>
                                                    <option value="Value" id="">تقبيل </option>
                                                    <option value="Value" id="">بيع او استثمار </option>
                                                </select>
                                                <label for="condition">نوع العرض</label>
                                            </div>
                                        </div>

                                        <script type="text/javascript">
                                            //script for showing two option

                                            function onSelectStation() {
                                                var op = document.getElementById("SelectStationID").value;
                                                if (op == "Bersent") {
                                                    document.getElementById("optionMng1").style.display = '';
                                                    document.getElementById("optionMng2").style.display = 'none';

                                                }
                                                if (op == "Money") {
                                                    document.getElementById("optionMng1").style.display = 'none';
                                                    document.getElementById("optionMng2").style.display = '';

                                                }
                                            }
                                        </script>

                                        <div class="col-md-6">

                                            <div class="form-group form-md-line-input form-md-floating-label">
                                                <select id="SelectStationID" class="form-control edited" name="condition" onchange="onSelectStation()">
                                                    <option value="Value" id=""> </option>
                                                    <option value="Bersent" id="Bersent">نسبة مئوية </option>
                                                    <option value="Money" id="Money">مبلغ مقطوع </option>

                                                </select>
                                                <label for="condition">طريقة ادارة الاملاك</label>
                                            </div>
                                        </div>

                                        <div class="col-md-12" id="optionMng1">

                                            <div class="form-group form-md-line-input form-md-floating-label">
                                                <select id="" class="form-control edited" name="condition">
                                                    <option value="Value" id=""> </option>
                                                    <option value="Value" id="">1 </option>
                                                    <option value="Value" id="">2 </option>
                                                    <option value="Value" id="">2.5 </option>
                                                </select>
                                                <label for="condition">اختار النسبة </label>
                                            </div>
                                        </div>
                                        <div class="col-md-12" id="optionMng2">

                                            <div class="form-group form-md-line-input form-md-floating-label">
                                                <input type="number" class="form-control" id="price" name="price" placeholder="">
                                                <label for="price">المبلغ المقطوع</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group form-md-line-input form-md-floating-label">
                                                <input type="number" class="form-control" id="price" name="price" placeholder="">
                                                <label for="price">السعر</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6" id="">

                                            <div class="form-group form-md-line-input form-md-floating-label">
                                                <select id="" class="form-control edited" name="condition">
                                                    <option value="Value" id=""> </option>
                                                    <option value="Value" id="">ريال </option>
                                                    <option value="Value" id="">جنيه </option>
                                                    <option value="Value" id="">دينار </option>
                                                </select>
                                                <label for="condition">اختار العملة </label>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group form-md-line-input form-md-floating-label">
                                                <input type="number" class="form-control" id="price" name="price" placeholder="">
                                                <label for="price">سعر المتر</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group form-md-line-input form-md-floating-label">
                                                <input type="number" class="form-control" id="price" name="price" placeholder="">
                                                <label for="price">حد التفاوض</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group form-md-line-input form-md-floating-label">
                                                <input type="number" class="form-control" id="price" name="price" placeholder="">
                                                <label for="price">المساحة الاجمالية</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6" id="">

                                            <div class="form-group form-md-line-input form-md-floating-label">
                                                <select id="" class="form-control edited" name="condition">
                                                    <option value="Value" id=""> </option>
                                                    <option value="Value" id="">متر </option>
                                                    <option value="Value" id="">قدم </option>
                                                    <option value="Value" id="">انش </option>
                                                </select>
                                                <label for="condition">وحدة القياس </label>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group form-md-line-input form-md-floating-label">
                                                <input type="number" class="form-control" id="price" name="price" placeholder="">
                                                <label for="price">المساحة البناء</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6" id="">

                                            <div class="form-group form-md-line-input form-md-floating-label">
                                                <select id="" class="form-control edited" name="condition">
                                                    <option value="Value" id=""> </option>
                                                    <option value="Value" id="">متر </option>
                                                    <option value="Value" id="">قدم </option>
                                                    <option value="Value" id="">انش </option>
                                                </select>
                                                <label for="condition">وحدة القياس </label>
                                            </div>
                                        </div>
                                        <div class="col-md-6 ">
                                            <div class="form-group form-md-line-input form-md-floating-label">
                                                <select id="property_direction" name="property_direction" class="form-control edited">
                                                    <option value="Value"></option>
                                                    <option value="north">شمال</option>
                                                    <option value="east">شرق</option>
                                                    <option value="west">غرب</option>
                                                    <option value="south">جنوب</option>
                                                    <option value="north_east">شمال شرق</option>
                                                    <option value="north_west">شمال غرب</option>
                                                    <option value="south_east">جنوب شرق</option>
                                                    <option value="south_west">جنوب غرب</option>
                                                    <option value="none">بدون</option>
                                                </select>
                                                <label for="">اتجاه العقار</label>
                                            </div>
                                        </div>




                                    </div>
                                    <!--Tab2-Select12  -->
                                    <div id="Tab2-Select13" style="display: none;">


                                        <div class="col-md-6">
                                            <div class="form-group form-md-line-input form-md-floating-label">
                                                <select id="" class="form-control edited" name="condition">
                                                    <option value="Value" id=""> </option>
                                                    <option value="Value" id="">ايجار </option>
                                                    <option value="Value" id="">بيع </option>
                                                    <option value="Value" id="">استثمار </option>
                                                    <option value="Value" id="">تقبيل </option>
                                                    <option value="Value" id="">بيع او استثمار </option>
                                                </select>
                                                <label for="condition">نوع العرض</label>
                                            </div>
                                        </div>

                                        <script type="text/javascript">
                                            //script for showing two option

                                            function onSelectRest() {
                                                var op = document.getElementById("SelectRestID").value;
                                                if (op == "Bersent") {
                                                    document.getElementById("optionMng1").style.display = '';
                                                    document.getElementById("optionMng2").style.display = 'none';

                                                }
                                                if (op == "Money") {
                                                    document.getElementById("optionMng1").style.display = 'none';
                                                    document.getElementById("optionMng2").style.display = '';

                                                }
                                            }
                                        </script>

                                        <div class="col-md-6">

                                            <div class="form-group form-md-line-input form-md-floating-label">
                                                <select id="SelectRestID" class="form-control edited" name="condition" onchange="onSelectRest()">
                                                    <option value="Value" id=""> </option>
                                                    <option value="Bersent" id="Bersent">نسبة مئوية </option>
                                                    <option value="Money" id="Money">مبلغ مقطوع </option>

                                                </select>
                                                <label for="condition">طريقة ادارة الاملاك</label>
                                            </div>
                                        </div>

                                        <div class="col-md-12" id="optionMng1">

                                            <div class="form-group form-md-line-input form-md-floating-label">
                                                <select id="" class="form-control edited" name="condition">
                                                    <option value="Value" id=""> </option>
                                                    <option value="Value" id="">1 </option>
                                                    <option value="Value" id="">2 </option>
                                                    <option value="Value" id="">2.5 </option>
                                                </select>
                                                <label for="condition">اختار النسبة </label>
                                            </div>
                                        </div>
                                        <div class="col-md-12" id="optionMng2">

                                            <div class="form-group form-md-line-input form-md-floating-label">
                                                <input type="number" class="form-control" id="price" name="price" placeholder="">
                                                <label for="price">المبلغ المقطوع</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group form-md-line-input form-md-floating-label">
                                                <input type="number" class="form-control" id="price" name="price" placeholder="">
                                                <label for="price">السعر</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6" id="">

                                            <div class="form-group form-md-line-input form-md-floating-label">
                                                <select id="" class="form-control edited" name="condition">
                                                    <option value="Value" id=""> </option>
                                                    <option value="Value" id="">ريال </option>
                                                    <option value="Value" id="">جنيه </option>
                                                    <option value="Value" id="">دينار </option>
                                                </select>
                                                <label for="condition">اختار العملة </label>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group form-md-line-input form-md-floating-label">
                                                <input type="number" class="form-control" id="price" name="price" placeholder="">
                                                <label for="price">سعر المتر</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group form-md-line-input form-md-floating-label">
                                                <input type="number" class="form-control" id="price" name="price" placeholder="">
                                                <label for="price">حد التفاوض</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group form-md-line-input form-md-floating-label">
                                                <input type="number" class="form-control" id="price" name="price" placeholder="">
                                                <label for="price">المساحة الاجمالية</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6" id="">

                                            <div class="form-group form-md-line-input form-md-floating-label">
                                                <select id="" class="form-control edited" name="condition">
                                                    <option value="Value" id=""> </option>
                                                    <option value="Value" id="">متر </option>
                                                    <option value="Value" id="">قدم </option>
                                                    <option value="Value" id="">انش </option>
                                                </select>
                                                <label for="condition">وحدة القياس </label>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group form-md-line-input form-md-floating-label">
                                                <input type="number" class="form-control" id="price" name="price" placeholder="">
                                                <label for="price">المساحة البناء</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6" id="">

                                            <div class="form-group form-md-line-input form-md-floating-label">
                                                <select id="" class="form-control edited" name="condition">
                                                    <option value="Value" id=""> </option>
                                                    <option value="Value" id="">متر </option>
                                                    <option value="Value" id="">قدم </option>
                                                    <option value="Value" id="">انش </option>
                                                </select>
                                                <label for="condition">وحدة القياس </label>
                                            </div>
                                        </div>
                                        <div class="col-md-6 ">
                                            <div class="form-group form-md-line-input form-md-floating-label">
                                                <select id="property_direction" name="property_direction" class="form-control edited">
                                                    <option value="Value"></option>
                                                    <option value="north">شمال</option>
                                                    <option value="east">شرق</option>
                                                    <option value="west">غرب</option>
                                                    <option value="south">جنوب</option>
                                                    <option value="north_east">شمال شرق</option>
                                                    <option value="north_west">شمال غرب</option>
                                                    <option value="south_east">جنوب شرق</option>
                                                    <option value="south_west">جنوب غرب</option>
                                                    <option value="none">بدون</option>
                                                </select>
                                                <label for="">اتجاه العقار</label>
                                            </div>
                                        </div>





                                    </div>
                                    <!--Tab2-Select13  -->
                                    <div id="Tab2-Select14" style="display: none;">


                                        <div class="col-md-6">
                                            <div class="form-group form-md-line-input form-md-floating-label">
                                                <select id="" class="form-control edited" name="condition">
                                                    <option value="Value" id=""> </option>
                                                    <option value="Value" id="">ايجار </option>
                                                    <option value="Value" id="">بيع </option>
                                                    <option value="Value" id="">استثمار </option>
                                                    <option value="Value" id="">تقبيل </option>
                                                    <option value="Value" id="">بيع او استثمار </option>
                                                </select>
                                                <label for="condition">نوع العرض</label>
                                            </div>
                                        </div>

                                        <script type="text/javascript">
                                            //script for showing two option

                                            function onSelectMang() {
                                                var op = document.getElementById("SelectMangID").value;
                                                if (op == "Bersent") {
                                                    document.getElementById("optionMng1").style.display = '';
                                                    document.getElementById("optionMng2").style.display = 'none';

                                                }
                                                if (op == "Money") {
                                                    document.getElementById("optionMng1").style.display = 'none';
                                                    document.getElementById("optionMng2").style.display = '';

                                                }
                                            }
                                        </script>

                                        <div class="col-md-6">

                                            <div class="form-group form-md-line-input form-md-floating-label">
                                                <select id="SelectMangID" class="form-control edited" name="condition" onchange="onSelectMang()">
                                                    <option value="Value" id=""> </option>
                                                    <option value="Bersent" id="Bersent">نسبة مئوية </option>
                                                    <option value="Money" id="Money">مبلغ مقطوع </option>

                                                </select>
                                                <label for="condition">طريقة ادارة الاملاك</label>
                                            </div>
                                        </div>

                                        <div class="col-md-12" id="optionMng1">

                                            <div class="form-group form-md-line-input form-md-floating-label">
                                                <select id="" class="form-control edited" name="condition">
                                                    <option value="Value" id=""> </option>
                                                    <option value="Value" id="">1 </option>
                                                    <option value="Value" id="">2 </option>
                                                    <option value="Value" id="">2.5 </option>
                                                </select>
                                                <label for="condition">اختار النسبة </label>
                                            </div>
                                        </div>
                                        <div class="col-md-12" id="optionMng2">

                                            <div class="form-group form-md-line-input form-md-floating-label">
                                                <input type="number" class="form-control" id="price" name="price" placeholder="">
                                                <label for="price">المبلغ المقطوع</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group form-md-line-input form-md-floating-label">
                                                <input type="number" class="form-control" id="price" name="price" placeholder="">
                                                <label for="price">السعر</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6" id="">

                                            <div class="form-group form-md-line-input form-md-floating-label">
                                                <select id="" class="form-control edited" name="condition">
                                                    <option value="Value" id=""> </option>
                                                    <option value="Value" id="">ريال </option>
                                                    <option value="Value" id="">جنيه </option>
                                                    <option value="Value" id="">دينار </option>
                                                </select>
                                                <label for="condition">اختار العملة </label>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group form-md-line-input form-md-floating-label">
                                                <input type="number" class="form-control" id="price" name="price" placeholder="">
                                                <label for="price">سعر المتر</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group form-md-line-input form-md-floating-label">
                                                <input type="number" class="form-control" id="price" name="price" placeholder="">
                                                <label for="price">حد التفاوض</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group form-md-line-input form-md-floating-label">
                                                <input type="number" class="form-control" id="price" name="price" placeholder="">
                                                <label for="price">المساحة الاجمالية</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6" id="">

                                            <div class="form-group form-md-line-input form-md-floating-label">
                                                <select id="" class="form-control edited" name="condition">
                                                    <option value="Value" id=""> </option>
                                                    <option value="Value" id="">متر </option>
                                                    <option value="Value" id="">قدم </option>
                                                    <option value="Value" id="">انش </option>
                                                </select>
                                                <label for="condition">وحدة القياس </label>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group form-md-line-input form-md-floating-label">
                                                <input type="number" class="form-control" id="price" name="price" placeholder="">
                                                <label for="price">المساحة البناء</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6" id="">

                                            <div class="form-group form-md-line-input form-md-floating-label">
                                                <select id="" class="form-control edited" name="condition">
                                                    <option value="Value" id=""> </option>
                                                    <option value="Value" id="">متر </option>
                                                    <option value="Value" id="">قدم </option>
                                                    <option value="Value" id="">انش </option>
                                                </select>
                                                <label for="condition">وحدة القياس </label>
                                            </div>
                                        </div>
                                        <div class="col-md-6 ">
                                            <div class="form-group form-md-line-input form-md-floating-label">
                                                <select id="property_direction" name="property_direction" class="form-control edited">
                                                    <option value="Value"></option>
                                                    <option value="north">شمال</option>
                                                    <option value="east">شرق</option>
                                                    <option value="west">غرب</option>
                                                    <option value="south">جنوب</option>
                                                    <option value="north_east">شمال شرق</option>
                                                    <option value="north_west">شمال غرب</option>
                                                    <option value="south_east">جنوب شرق</option>
                                                    <option value="south_west">جنوب غرب</option>
                                                    <option value="none">بدون</option>
                                                </select>
                                                <label for="">اتجاه العقار</label>
                                            </div>
                                        </div>




                                    </div>
                                    <!--Tab2-Select14  -->


                                </div>
                                <!-- End tab 2  -->

                                <!-- ---------------------------------- -->


                                <div class="tab-pane" id="tab3">
                                    <div id="Tab3-Select1" style="display: none;">
                                        <div class="col-md-4">
                                            <div class="form-group form-md-line-input form-md-floating-label">
                                                <input type="text" class="form-control" id="price" name="price" placeholder="">
                                                <label for="price">رقم الهوية </label>
                                            </div>
                                        </div>
                                        <div class="col-md-4" id="">

                                            <div class="form-group form-md-line-input form-md-floating-label">
                                                <select id="" class="form-control edited" name="condition">
                                                    <option value="Value" id=""> </option>
                                                    <option value="Value" id="">بطاقة احوال </option>
                                                    <option value="Value" id="">دفتر عائلة </option>
                                                    <option value="Value" id="">حفيظة نفوس </option>
                                                    <option value="Value" id=""> اقامة </option>
                                                    <option value="Value" id=""> رخصة قيادة </option>
                                                    <option value="Value" id=""> رخصة سير </option>
                                                    <option value="Value" id=""> بطاقة عمل </option>
                                                    <option value="Value" id=""> بطاقة الصراف </option>
                                                    <option value="Value" id=""> بطاقة بديلة </option>
                                                    <option value="Value" id=""> استمارة </option>
                                                    <option value="Value" id=""> وثيقة زواج </option>
                                                    <option value="Value" id=""> بطاقة مجلس دول الخليج </option>
                                                    <option value="Value" id=""> بطاقة هوية دبلوماسي </option>
                                                    <option value="Value" id=""> جواز دبلوماسي </option>
                                                </select>
                                                <label for="condition">نوعها </label>
                                            </div>
                                        </div>


                                        <div class="col-md-4">
                                            <div class="form-group form-md-line-input form-md-floating-label">
                                                <input type="text" class="form-control" id="price" name="price" placeholder="">
                                                <label for="price">مصدرها </label>
                                            </div>
                                        </div>

                                        <div class="col-md-3">
                                            <div class="form-group form-md-line-input form-md-floating-label">
                                                <input type="text" class="form-control" id="price" name="price" placeholder="">
                                                <label for="price">الاول </label>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group form-md-line-input form-md-floating-label">
                                                <input type="text" class="form-control" id="price" name="price" placeholder="">
                                                <label for="price">الثاني </label>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group form-md-line-input form-md-floating-label">
                                                <input type="text" class="form-control" id="price" name="price" placeholder="">
                                                <label for="price">الثالث </label>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group form-md-line-input form-md-floating-label">
                                                <input type="text" class="form-control" id="price" name="price" placeholder="">
                                                <label for="price">الرابع </label>
                                            </div>
                                        </div>


                                        <div class="col-md-6" id="">

                                            <div class="form-group form-md-line-input form-md-floating-label">

                                                <select id="" class="form-control edited" name="condition">
                                                    <option value="Value" id=""> </option>
                                                    <option value="Value" id="">+966 </option>
                                                    <option value="Value" id=""> </option>
                                                    <option value="Value" id=""> </option>
                                                </select>
                                                <input type="text" class="form-control" id="price" name="price" placeholder="01212">

                                                <label for="condition">رقم الجوال </label>
                                            </div>
                                        </div>

                                        <div class="col-md-6" id="">

                                            <div class="form-group form-md-line-input form-md-floating-label">

                                                <select id="" class="form-control edited" name="condition">
                                                    <option value="Value" id=""> </option>
                                                    <option value="Value" id="">سعودي </option>
                                                    <option value="Value" id=""> مصري </option>
                                                    <option value="Value" id=""> قطري </option>
                                                </select>

                                                <label for="condition">الجنسية </label>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Tab3-Select1 -->
                                    <div id="Tab3-Select2" style="display: none;">
                                        <div class="col-md-4">
                                            <div class="form-group form-md-line-input form-md-floating-label">
                                                <input type="text" class="form-control" id="price" name="price" placeholder="">
                                                <label for="price">رقم الهوية </label>
                                            </div>
                                        </div>
                                        <div class="col-md-4" id="">

                                            <div class="form-group form-md-line-input form-md-floating-label">
                                                <select id="" class="form-control edited" name="condition">
                                                    <option value="Value" id=""> </option>
                                                    <option value="Value" id="">بطاقة احوال </option>
                                                    <option value="Value" id="">دفتر عائلة </option>
                                                    <option value="Value" id="">حفيظة نفوس </option>
                                                    <option value="Value" id=""> اقامة </option>
                                                    <option value="Value" id=""> رخصة قيادة </option>
                                                    <option value="Value" id=""> رخصة سير </option>
                                                    <option value="Value" id=""> بطاقة عمل </option>
                                                    <option value="Value" id=""> بطاقة الصراف </option>
                                                    <option value="Value" id=""> بطاقة بديلة </option>
                                                    <option value="Value" id=""> استمارة </option>
                                                    <option value="Value" id=""> وثيقة زواج </option>
                                                    <option value="Value" id=""> بطاقة مجلس دول الخليج </option>
                                                    <option value="Value" id=""> بطاقة هوية دبلوماسي </option>
                                                    <option value="Value" id=""> جواز دبلوماسي </option>
                                                </select>
                                                <label for="condition">نوعها </label>
                                            </div>
                                        </div>


                                        <div class="col-md-4">
                                            <div class="form-group form-md-line-input form-md-floating-label">
                                                <input type="text" class="form-control" id="price" name="price" placeholder="">
                                                <label for="price">مصدرها </label>
                                            </div>
                                        </div>

                                        <div class="col-md-3">
                                            <div class="form-group form-md-line-input form-md-floating-label">
                                                <input type="text" class="form-control" id="price" name="price" placeholder="">
                                                <label for="price">الاول </label>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group form-md-line-input form-md-floating-label">
                                                <input type="text" class="form-control" id="price" name="price" placeholder="">
                                                <label for="price">الثاني </label>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group form-md-line-input form-md-floating-label">
                                                <input type="text" class="form-control" id="price" name="price" placeholder="">
                                                <label for="price">الثالث </label>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group form-md-line-input form-md-floating-label">
                                                <input type="text" class="form-control" id="price" name="price" placeholder="">
                                                <label for="price">الرابع </label>
                                            </div>
                                        </div>


                                        <div class="col-md-6" id="">

                                            <div class="form-group form-md-line-input form-md-floating-label">

                                                <select id="" class="form-control edited" name="condition">
                                                    <option value="Value" id=""> </option>
                                                    <option value="Value" id="">+966 </option>
                                                    <option value="Value" id=""> </option>
                                                    <option value="Value" id=""> </option>
                                                </select>
                                                <input type="text" class="form-control" id="price" name="price" placeholder="01212">

                                                <label for="condition">رقم الجوال </label>
                                            </div>
                                        </div>

                                        <div class="col-md-6" id="">

                                            <div class="form-group form-md-line-input form-md-floating-label">

                                                <select id="" class="form-control edited" name="condition">
                                                    <option value="Value" id=""> </option>
                                                    <option value="Value" id="">سعودي </option>
                                                    <option value="Value" id=""> مصري </option>
                                                    <option value="Value" id=""> قطري </option>
                                                </select>

                                                <label for="condition">الجنسية </label>
                                            </div>
                                        </div>

                                    </div>
                                    <!-- End Tab3-Select2 -->
                                    <div id="Tab3-Select3" style="display: none;">
                                        <div class="col-md-4">
                                            <div class="form-group form-md-line-input form-md-floating-label">
                                                <input type="text" class="form-control" id="price" name="price" placeholder="">
                                                <label for="price">رقم الهوية </label>
                                            </div>
                                        </div>
                                        <div class="col-md-4" id="">

                                            <div class="form-group form-md-line-input form-md-floating-label">
                                                <select id="" class="form-control edited" name="condition">
                                                    <option value="Value" id=""> </option>
                                                    <option value="Value" id="">بطاقة احوال </option>
                                                    <option value="Value" id="">دفتر عائلة </option>
                                                    <option value="Value" id="">حفيظة نفوس </option>
                                                    <option value="Value" id=""> اقامة </option>
                                                    <option value="Value" id=""> رخصة قيادة </option>
                                                    <option value="Value" id=""> رخصة سير </option>
                                                    <option value="Value" id=""> بطاقة عمل </option>
                                                    <option value="Value" id=""> بطاقة الصراف </option>
                                                    <option value="Value" id=""> بطاقة بديلة </option>
                                                    <option value="Value" id=""> استمارة </option>
                                                    <option value="Value" id=""> وثيقة زواج </option>
                                                    <option value="Value" id=""> بطاقة مجلس دول الخليج </option>
                                                    <option value="Value" id=""> بطاقة هوية دبلوماسي </option>
                                                    <option value="Value" id=""> جواز دبلوماسي </option>
                                                </select>
                                                <label for="condition">نوعها </label>
                                            </div>
                                        </div>


                                        <div class="col-md-4">
                                            <div class="form-group form-md-line-input form-md-floating-label">
                                                <input type="text" class="form-control" id="price" name="price" placeholder="">
                                                <label for="price">مصدرها </label>
                                            </div>
                                        </div>

                                        <div class="col-md-3">
                                            <div class="form-group form-md-line-input form-md-floating-label">
                                                <input type="text" class="form-control" id="price" name="price" placeholder="">
                                                <label for="price">الاول </label>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group form-md-line-input form-md-floating-label">
                                                <input type="text" class="form-control" id="price" name="price" placeholder="">
                                                <label for="price">الثاني </label>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group form-md-line-input form-md-floating-label">
                                                <input type="text" class="form-control" id="price" name="price" placeholder="">
                                                <label for="price">الثالث </label>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group form-md-line-input form-md-floating-label">
                                                <input type="text" class="form-control" id="price" name="price" placeholder="">
                                                <label for="price">الرابع </label>
                                            </div>
                                        </div>


                                        <div class="col-md-6" id="">

                                            <div class="form-group form-md-line-input form-md-floating-label">

                                                <select id="" class="form-control edited" name="condition">
                                                    <option value="Value" id=""> </option>
                                                    <option value="Value" id="">+966 </option>
                                                    <option value="Value" id=""> </option>
                                                    <option value="Value" id=""> </option>
                                                </select>
                                                <input type="text" class="form-control" id="price" name="price" placeholder="01212">

                                                <label for="condition">رقم الجوال </label>
                                            </div>
                                        </div>

                                        <div class="col-md-6" id="">

                                            <div class="form-group form-md-line-input form-md-floating-label">

                                                <select id="" class="form-control edited" name="condition">
                                                    <option value="Value" id=""> </option>
                                                    <option value="Value" id="">سعودي </option>
                                                    <option value="Value" id=""> مصري </option>
                                                    <option value="Value" id=""> قطري </option>
                                                </select>

                                                <label for="condition">الجنسية </label>
                                            </div>
                                        </div>


                                    </div>
                                    <!-- End Tab3-Select3 -->
                                    <div id="Tab3-Select4" style="display: none;">
                                        <div class="col-md-4">
                                            <div class="form-group form-md-line-input form-md-floating-label">
                                                <input type="text" class="form-control" id="price" name="price" placeholder="">
                                                <label for="price">رقم الهوية </label>
                                            </div>
                                        </div>
                                        <div class="col-md-4" id="">

                                            <div class="form-group form-md-line-input form-md-floating-label">
                                                <select id="" class="form-control edited" name="condition">
                                                    <option value="Value" id=""> </option>
                                                    <option value="Value" id="">بطاقة احوال </option>
                                                    <option value="Value" id="">دفتر عائلة </option>
                                                    <option value="Value" id="">حفيظة نفوس </option>
                                                    <option value="Value" id=""> اقامة </option>
                                                    <option value="Value" id=""> رخصة قيادة </option>
                                                    <option value="Value" id=""> رخصة سير </option>
                                                    <option value="Value" id=""> بطاقة عمل </option>
                                                    <option value="Value" id=""> بطاقة الصراف </option>
                                                    <option value="Value" id=""> بطاقة بديلة </option>
                                                    <option value="Value" id=""> استمارة </option>
                                                    <option value="Value" id=""> وثيقة زواج </option>
                                                    <option value="Value" id=""> بطاقة مجلس دول الخليج </option>
                                                    <option value="Value" id=""> بطاقة هوية دبلوماسي </option>
                                                    <option value="Value" id=""> جواز دبلوماسي </option>
                                                </select>
                                                <label for="condition">نوعها </label>
                                            </div>
                                        </div>


                                        <div class="col-md-4">
                                            <div class="form-group form-md-line-input form-md-floating-label">
                                                <input type="text" class="form-control" id="price" name="price" placeholder="">
                                                <label for="price">مصدرها </label>
                                            </div>
                                        </div>

                                        <div class="col-md-3">
                                            <div class="form-group form-md-line-input form-md-floating-label">
                                                <input type="text" class="form-control" id="price" name="price" placeholder="">
                                                <label for="price">الاول </label>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group form-md-line-input form-md-floating-label">
                                                <input type="text" class="form-control" id="price" name="price" placeholder="">
                                                <label for="price">الثاني </label>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group form-md-line-input form-md-floating-label">
                                                <input type="text" class="form-control" id="price" name="price" placeholder="">
                                                <label for="price">الثالث </label>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group form-md-line-input form-md-floating-label">
                                                <input type="text" class="form-control" id="price" name="price" placeholder="">
                                                <label for="price">الرابع </label>
                                            </div>
                                        </div>


                                        <div class="col-md-6" id="">

                                            <div class="form-group form-md-line-input form-md-floating-label">

                                                <select id="" class="form-control edited" name="condition">
                                                    <option value="Value" id=""> </option>
                                                    <option value="Value" id="">+966 </option>
                                                    <option value="Value" id=""> </option>
                                                    <option value="Value" id=""> </option>
                                                </select>
                                                <input type="text" class="form-control" id="price" name="price" placeholder="01212">

                                                <label for="condition">رقم الجوال </label>
                                            </div>
                                        </div>

                                        <div class="col-md-6" id="">

                                            <div class="form-group form-md-line-input form-md-floating-label">

                                                <select id="" class="form-control edited" name="condition">
                                                    <option value="Value" id=""> </option>
                                                    <option value="Value" id="">سعودي </option>
                                                    <option value="Value" id=""> مصري </option>
                                                    <option value="Value" id=""> قطري </option>
                                                </select>

                                                <label for="condition">الجنسية </label>
                                            </div>
                                        </div>



                                    </div>
                                    <!-- End Tab3-Select4 -->
                                    <div id="Tab3-Select5" style="display: none;">

                                        <div class="col-md-4">
                                            <div class="form-group form-md-line-input form-md-floating-label">
                                                <input type="text" class="form-control" id="price" name="price" placeholder="">
                                                <label for="price">رقم الهوية </label>
                                            </div>
                                        </div>
                                        <div class="col-md-4" id="">

                                            <div class="form-group form-md-line-input form-md-floating-label">
                                                <select id="" class="form-control edited" name="condition">
                                                    <option value="Value" id=""> </option>
                                                    <option value="Value" id="">بطاقة احوال </option>
                                                    <option value="Value" id="">دفتر عائلة </option>
                                                    <option value="Value" id="">حفيظة نفوس </option>
                                                    <option value="Value" id=""> اقامة </option>
                                                    <option value="Value" id=""> رخصة قيادة </option>
                                                    <option value="Value" id=""> رخصة سير </option>
                                                    <option value="Value" id=""> بطاقة عمل </option>
                                                    <option value="Value" id=""> بطاقة الصراف </option>
                                                    <option value="Value" id=""> بطاقة بديلة </option>
                                                    <option value="Value" id=""> استمارة </option>
                                                    <option value="Value" id=""> وثيقة زواج </option>
                                                    <option value="Value" id=""> بطاقة مجلس دول الخليج </option>
                                                    <option value="Value" id=""> بطاقة هوية دبلوماسي </option>
                                                    <option value="Value" id=""> جواز دبلوماسي </option>
                                                </select>
                                                <label for="condition">نوعها </label>
                                            </div>
                                        </div>


                                        <div class="col-md-4">
                                            <div class="form-group form-md-line-input form-md-floating-label">
                                                <input type="text" class="form-control" id="price" name="price" placeholder="">
                                                <label for="price">مصدرها </label>
                                            </div>
                                        </div>

                                        <div class="col-md-3">
                                            <div class="form-group form-md-line-input form-md-floating-label">
                                                <input type="text" class="form-control" id="price" name="price" placeholder="">
                                                <label for="price">الاول </label>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group form-md-line-input form-md-floating-label">
                                                <input type="text" class="form-control" id="price" name="price" placeholder="">
                                                <label for="price">الثاني </label>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group form-md-line-input form-md-floating-label">
                                                <input type="text" class="form-control" id="price" name="price" placeholder="">
                                                <label for="price">الثالث </label>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group form-md-line-input form-md-floating-label">
                                                <input type="text" class="form-control" id="price" name="price" placeholder="">
                                                <label for="price">الرابع </label>
                                            </div>
                                        </div>


                                        <div class="col-md-6" id="">

                                            <div class="form-group form-md-line-input form-md-floating-label">

                                                <select id="" class="form-control edited" name="condition">
                                                    <option value="Value" id=""> </option>
                                                    <option value="Value" id="">+966 </option>
                                                    <option value="Value" id=""> </option>
                                                    <option value="Value" id=""> </option>
                                                </select>
                                                <input type="text" class="form-control" id="price" name="price" placeholder="01212">

                                                <label for="condition">رقم الجوال </label>
                                            </div>
                                        </div>

                                        <div class="col-md-6" id="">

                                            <div class="form-group form-md-line-input form-md-floating-label">

                                                <select id="" class="form-control edited" name="condition">
                                                    <option value="Value" id=""> </option>
                                                    <option value="Value" id="">سعودي </option>
                                                    <option value="Value" id=""> مصري </option>
                                                    <option value="Value" id=""> قطري </option>
                                                </select>

                                                <label for="condition">الجنسية </label>
                                            </div>
                                        </div>

                                    </div>
                                    <!-- End Tab3-Select5 -->
                                    <div id="Tab3-Select6" style="display: none;">

                                        <div class="col-md-4">
                                            <div class="form-group form-md-line-input form-md-floating-label">
                                                <input type="text" class="form-control" id="price" name="price" placeholder="">
                                                <label for="price">رقم الهوية </label>
                                            </div>
                                        </div>
                                        <div class="col-md-4" id="">

                                            <div class="form-group form-md-line-input form-md-floating-label">
                                                <select id="" class="form-control edited" name="condition">
                                                    <option value="Value" id=""> </option>
                                                    <option value="Value" id="">بطاقة احوال </option>
                                                    <option value="Value" id="">دفتر عائلة </option>
                                                    <option value="Value" id="">حفيظة نفوس </option>
                                                    <option value="Value" id=""> اقامة </option>
                                                    <option value="Value" id=""> رخصة قيادة </option>
                                                    <option value="Value" id=""> رخصة سير </option>
                                                    <option value="Value" id=""> بطاقة عمل </option>
                                                    <option value="Value" id=""> بطاقة الصراف </option>
                                                    <option value="Value" id=""> بطاقة بديلة </option>
                                                    <option value="Value" id=""> استمارة </option>
                                                    <option value="Value" id=""> وثيقة زواج </option>
                                                    <option value="Value" id=""> بطاقة مجلس دول الخليج </option>
                                                    <option value="Value" id=""> بطاقة هوية دبلوماسي </option>
                                                    <option value="Value" id=""> جواز دبلوماسي </option>
                                                </select>
                                                <label for="condition">نوعها </label>
                                            </div>
                                        </div>


                                        <div class="col-md-4">
                                            <div class="form-group form-md-line-input form-md-floating-label">
                                                <input type="text" class="form-control" id="price" name="price" placeholder="">
                                                <label for="price">مصدرها </label>
                                            </div>
                                        </div>

                                        <div class="col-md-3">
                                            <div class="form-group form-md-line-input form-md-floating-label">
                                                <input type="text" class="form-control" id="price" name="price" placeholder="">
                                                <label for="price">الاول </label>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group form-md-line-input form-md-floating-label">
                                                <input type="text" class="form-control" id="price" name="price" placeholder="">
                                                <label for="price">الثاني </label>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group form-md-line-input form-md-floating-label">
                                                <input type="text" class="form-control" id="price" name="price" placeholder="">
                                                <label for="price">الثالث </label>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group form-md-line-input form-md-floating-label">
                                                <input type="text" class="form-control" id="price" name="price" placeholder="">
                                                <label for="price">الرابع </label>
                                            </div>
                                        </div>


                                        <div class="col-md-6" id="">

                                            <div class="form-group form-md-line-input form-md-floating-label">

                                                <select id="" class="form-control edited" name="condition">
                                                    <option value="Value" id=""> </option>
                                                    <option value="Value" id="">+966 </option>
                                                    <option value="Value" id=""> </option>
                                                    <option value="Value" id=""> </option>
                                                </select>
                                                <input type="text" class="form-control" id="price" name="price" placeholder="01212">

                                                <label for="condition">رقم الجوال </label>
                                            </div>
                                        </div>

                                        <div class="col-md-6" id="">

                                            <div class="form-group form-md-line-input form-md-floating-label">

                                                <select id="" class="form-control edited" name="condition">
                                                    <option value="Value" id=""> </option>
                                                    <option value="Value" id="">سعودي </option>
                                                    <option value="Value" id=""> مصري </option>
                                                    <option value="Value" id=""> قطري </option>
                                                </select>

                                                <label for="condition">الجنسية </label>
                                            </div>
                                        </div>

                                    </div>
                                    <!-- End Tab3-Select6 -->
                                    <div id="Tab3-Select7" style="display: none;">

                                        <div class="col-md-4">
                                            <div class="form-group form-md-line-input form-md-floating-label">
                                                <input type="text" class="form-control" id="price" name="price" placeholder="">
                                                <label for="price">رقم الهوية </label>
                                            </div>
                                        </div>
                                        <div class="col-md-4" id="">

                                            <div class="form-group form-md-line-input form-md-floating-label">
                                                <select id="" class="form-control edited" name="condition">
                                                    <option value="Value" id=""> </option>
                                                    <option value="Value" id="">بطاقة احوال </option>
                                                    <option value="Value" id="">دفتر عائلة </option>
                                                    <option value="Value" id="">حفيظة نفوس </option>
                                                    <option value="Value" id=""> اقامة </option>
                                                    <option value="Value" id=""> رخصة قيادة </option>
                                                    <option value="Value" id=""> رخصة سير </option>
                                                    <option value="Value" id=""> بطاقة عمل </option>
                                                    <option value="Value" id=""> بطاقة الصراف </option>
                                                    <option value="Value" id=""> بطاقة بديلة </option>
                                                    <option value="Value" id=""> استمارة </option>
                                                    <option value="Value" id=""> وثيقة زواج </option>
                                                    <option value="Value" id=""> بطاقة مجلس دول الخليج </option>
                                                    <option value="Value" id=""> بطاقة هوية دبلوماسي </option>
                                                    <option value="Value" id=""> جواز دبلوماسي </option>
                                                </select>
                                                <label for="condition">نوعها </label>
                                            </div>
                                        </div>


                                        <div class="col-md-4">
                                            <div class="form-group form-md-line-input form-md-floating-label">
                                                <input type="text" class="form-control" id="price" name="price" placeholder="">
                                                <label for="price">مصدرها </label>
                                            </div>
                                        </div>

                                        <div class="col-md-3">
                                            <div class="form-group form-md-line-input form-md-floating-label">
                                                <input type="text" class="form-control" id="price" name="price" placeholder="">
                                                <label for="price">الاول </label>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group form-md-line-input form-md-floating-label">
                                                <input type="text" class="form-control" id="price" name="price" placeholder="">
                                                <label for="price">الثاني </label>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group form-md-line-input form-md-floating-label">
                                                <input type="text" class="form-control" id="price" name="price" placeholder="">
                                                <label for="price">الثالث </label>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group form-md-line-input form-md-floating-label">
                                                <input type="text" class="form-control" id="price" name="price" placeholder="">
                                                <label for="price">الرابع </label>
                                            </div>
                                        </div>


                                        <div class="col-md-6" id="">

                                            <div class="form-group form-md-line-input form-md-floating-label">

                                                <select id="" class="form-control edited" name="condition">
                                                    <option value="Value" id=""> </option>
                                                    <option value="Value" id="">+966 </option>
                                                    <option value="Value" id=""> </option>
                                                    <option value="Value" id=""> </option>
                                                </select>
                                                <input type="text" class="form-control" id="price" name="price" placeholder="01212">

                                                <label for="condition">رقم الجوال </label>
                                            </div>
                                        </div>

                                        <div class="col-md-6" id="">

                                            <div class="form-group form-md-line-input form-md-floating-label">

                                                <select id="" class="form-control edited" name="condition">
                                                    <option value="Value" id=""> </option>
                                                    <option value="Value" id="">سعودي </option>
                                                    <option value="Value" id=""> مصري </option>
                                                    <option value="Value" id=""> قطري </option>
                                                </select>

                                                <label for="condition">الجنسية </label>
                                            </div>
                                        </div>

                                    </div>
                                    <!-- End Tab3-Select7 -->
                                    <div id="Tab3-Select8" style="display: none;">

                                        <div class="col-md-4">
                                            <div class="form-group form-md-line-input form-md-floating-label">
                                                <input type="text" class="form-control" id="price" name="price" placeholder="">
                                                <label for="price">رقم الهوية </label>
                                            </div>
                                        </div>
                                        <div class="col-md-4" id="">

                                            <div class="form-group form-md-line-input form-md-floating-label">
                                                <select id="" class="form-control edited" name="condition">
                                                    <option value="Value" id=""> </option>
                                                    <option value="Value" id="">بطاقة احوال </option>
                                                    <option value="Value" id="">دفتر عائلة </option>
                                                    <option value="Value" id="">حفيظة نفوس </option>
                                                    <option value="Value" id=""> اقامة </option>
                                                    <option value="Value" id=""> رخصة قيادة </option>
                                                    <option value="Value" id=""> رخصة سير </option>
                                                    <option value="Value" id=""> بطاقة عمل </option>
                                                    <option value="Value" id=""> بطاقة الصراف </option>
                                                    <option value="Value" id=""> بطاقة بديلة </option>
                                                    <option value="Value" id=""> استمارة </option>
                                                    <option value="Value" id=""> وثيقة زواج </option>
                                                    <option value="Value" id=""> بطاقة مجلس دول الخليج </option>
                                                    <option value="Value" id=""> بطاقة هوية دبلوماسي </option>
                                                    <option value="Value" id=""> جواز دبلوماسي </option>
                                                </select>
                                                <label for="condition">نوعها </label>
                                            </div>
                                        </div>


                                        <div class="col-md-4">
                                            <div class="form-group form-md-line-input form-md-floating-label">
                                                <input type="text" class="form-control" id="price" name="price" placeholder="">
                                                <label for="price">مصدرها </label>
                                            </div>
                                        </div>

                                        <div class="col-md-3">
                                            <div class="form-group form-md-line-input form-md-floating-label">
                                                <input type="text" class="form-control" id="price" name="price" placeholder="">
                                                <label for="price">الاول </label>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group form-md-line-input form-md-floating-label">
                                                <input type="text" class="form-control" id="price" name="price" placeholder="">
                                                <label for="price">الثاني </label>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group form-md-line-input form-md-floating-label">
                                                <input type="text" class="form-control" id="price" name="price" placeholder="">
                                                <label for="price">الثالث </label>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group form-md-line-input form-md-floating-label">
                                                <input type="text" class="form-control" id="price" name="price" placeholder="">
                                                <label for="price">الرابع </label>
                                            </div>
                                        </div>


                                        <div class="col-md-6" id="">

                                            <div class="form-group form-md-line-input form-md-floating-label">

                                                <select id="" class="form-control edited" name="condition">
                                                    <option value="Value" id=""> </option>
                                                    <option value="Value" id="">+966 </option>
                                                    <option value="Value" id=""> </option>
                                                    <option value="Value" id=""> </option>
                                                </select>
                                                <input type="text" class="form-control" id="price" name="price" placeholder="01212">

                                                <label for="condition">رقم الجوال </label>
                                            </div>
                                        </div>

                                        <div class="col-md-6" id="">

                                            <div class="form-group form-md-line-input form-md-floating-label">

                                                <select id="" class="form-control edited" name="condition">
                                                    <option value="Value" id=""> </option>
                                                    <option value="Value" id="">سعودي </option>
                                                    <option value="Value" id=""> مصري </option>
                                                    <option value="Value" id=""> قطري </option>
                                                </select>

                                                <label for="condition">الجنسية </label>
                                            </div>
                                        </div>

                                    </div>
                                    <!-- End Tab3-Select8 -->
                                    <div id="Tab3-Select9" style="display: none;">

                                        <div class="col-md-4">
                                            <div class="form-group form-md-line-input form-md-floating-label">
                                                <input type="text" class="form-control" id="price" name="price" placeholder="">
                                                <label for="price">رقم الهوية </label>
                                            </div>
                                        </div>
                                        <div class="col-md-4" id="">

                                            <div class="form-group form-md-line-input form-md-floating-label">
                                                <select id="" class="form-control edited" name="condition">
                                                    <option value="Value" id=""> </option>
                                                    <option value="Value" id="">بطاقة احوال </option>
                                                    <option value="Value" id="">دفتر عائلة </option>
                                                    <option value="Value" id="">حفيظة نفوس </option>
                                                    <option value="Value" id=""> اقامة </option>
                                                    <option value="Value" id=""> رخصة قيادة </option>
                                                    <option value="Value" id=""> رخصة سير </option>
                                                    <option value="Value" id=""> بطاقة عمل </option>
                                                    <option value="Value" id=""> بطاقة الصراف </option>
                                                    <option value="Value" id=""> بطاقة بديلة </option>
                                                    <option value="Value" id=""> استمارة </option>
                                                    <option value="Value" id=""> وثيقة زواج </option>
                                                    <option value="Value" id=""> بطاقة مجلس دول الخليج </option>
                                                    <option value="Value" id=""> بطاقة هوية دبلوماسي </option>
                                                    <option value="Value" id=""> جواز دبلوماسي </option>
                                                </select>
                                                <label for="condition">نوعها </label>
                                            </div>
                                        </div>


                                        <div class="col-md-4">
                                            <div class="form-group form-md-line-input form-md-floating-label">
                                                <input type="text" class="form-control" id="price" name="price" placeholder="">
                                                <label for="price">مصدرها </label>
                                            </div>
                                        </div>

                                        <div class="col-md-3">
                                            <div class="form-group form-md-line-input form-md-floating-label">
                                                <input type="text" class="form-control" id="price" name="price" placeholder="">
                                                <label for="price">الاول </label>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group form-md-line-input form-md-floating-label">
                                                <input type="text" class="form-control" id="price" name="price" placeholder="">
                                                <label for="price">الثاني </label>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group form-md-line-input form-md-floating-label">
                                                <input type="text" class="form-control" id="price" name="price" placeholder="">
                                                <label for="price">الثالث </label>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group form-md-line-input form-md-floating-label">
                                                <input type="text" class="form-control" id="price" name="price" placeholder="">
                                                <label for="price">الرابع </label>
                                            </div>
                                        </div>


                                        <div class="col-md-6" id="">

                                            <div class="form-group form-md-line-input form-md-floating-label">

                                                <select id="" class="form-control edited" name="condition">
                                                    <option value="Value" id=""> </option>
                                                    <option value="Value" id="">+966 </option>
                                                    <option value="Value" id=""> </option>
                                                    <option value="Value" id=""> </option>
                                                </select>
                                                <input type="text" class="form-control" id="price" name="price" placeholder="01212">

                                                <label for="condition">رقم الجوال </label>
                                            </div>
                                        </div>

                                        <div class="col-md-6" id="">

                                            <div class="form-group form-md-line-input form-md-floating-label">

                                                <select id="" class="form-control edited" name="condition">
                                                    <option value="Value" id=""> </option>
                                                    <option value="Value" id="">سعودي </option>
                                                    <option value="Value" id=""> مصري </option>
                                                    <option value="Value" id=""> قطري </option>
                                                </select>

                                                <label for="condition">الجنسية </label>
                                            </div>
                                        </div>

                                    </div>
                                    <!-- End Tab3-Select9 -->
                                    <div id="Tab3-Select10" style="display: none;">

                                        <div class="col-md-4">
                                            <div class="form-group form-md-line-input form-md-floating-label">
                                                <input type="text" class="form-control" id="price" name="price" placeholder="">
                                                <label for="price">رقم الهوية </label>
                                            </div>
                                        </div>
                                        <div class="col-md-4" id="">

                                            <div class="form-group form-md-line-input form-md-floating-label">
                                                <select id="" class="form-control edited" name="condition">
                                                    <option value="Value" id=""> </option>
                                                    <option value="Value" id="">بطاقة احوال </option>
                                                    <option value="Value" id="">دفتر عائلة </option>
                                                    <option value="Value" id="">حفيظة نفوس </option>
                                                    <option value="Value" id=""> اقامة </option>
                                                    <option value="Value" id=""> رخصة قيادة </option>
                                                    <option value="Value" id=""> رخصة سير </option>
                                                    <option value="Value" id=""> بطاقة عمل </option>
                                                    <option value="Value" id=""> بطاقة الصراف </option>
                                                    <option value="Value" id=""> بطاقة بديلة </option>
                                                    <option value="Value" id=""> استمارة </option>
                                                    <option value="Value" id=""> وثيقة زواج </option>
                                                    <option value="Value" id=""> بطاقة مجلس دول الخليج </option>
                                                    <option value="Value" id=""> بطاقة هوية دبلوماسي </option>
                                                    <option value="Value" id=""> جواز دبلوماسي </option>
                                                </select>
                                                <label for="condition">نوعها </label>
                                            </div>
                                        </div>


                                        <div class="col-md-4">
                                            <div class="form-group form-md-line-input form-md-floating-label">
                                                <input type="text" class="form-control" id="price" name="price" placeholder="">
                                                <label for="price">مصدرها </label>
                                            </div>
                                        </div>

                                        <div class="col-md-3">
                                            <div class="form-group form-md-line-input form-md-floating-label">
                                                <input type="text" class="form-control" id="price" name="price" placeholder="">
                                                <label for="price">الاول </label>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group form-md-line-input form-md-floating-label">
                                                <input type="text" class="form-control" id="price" name="price" placeholder="">
                                                <label for="price">الثاني </label>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group form-md-line-input form-md-floating-label">
                                                <input type="text" class="form-control" id="price" name="price" placeholder="">
                                                <label for="price">الثالث </label>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group form-md-line-input form-md-floating-label">
                                                <input type="text" class="form-control" id="price" name="price" placeholder="">
                                                <label for="price">الرابع </label>
                                            </div>
                                        </div>


                                        <div class="col-md-6" id="">

                                            <div class="form-group form-md-line-input form-md-floating-label">

                                                <select id="" class="form-control edited" name="condition">
                                                    <option value="Value" id=""> </option>
                                                    <option value="Value" id="">+966 </option>
                                                    <option value="Value" id=""> </option>
                                                    <option value="Value" id=""> </option>
                                                </select>
                                                <input type="text" class="form-control" id="price" name="price" placeholder="01212">

                                                <label for="condition">رقم الجوال </label>
                                            </div>
                                        </div>

                                        <div class="col-md-6" id="">

                                            <div class="form-group form-md-line-input form-md-floating-label">

                                                <select id="" class="form-control edited" name="condition">
                                                    <option value="Value" id=""> </option>
                                                    <option value="Value" id="">سعودي </option>
                                                    <option value="Value" id=""> مصري </option>
                                                    <option value="Value" id=""> قطري </option>
                                                </select>

                                                <label for="condition">الجنسية </label>
                                            </div>
                                        </div>

                                    </div>
                                    <!-- End Tab3-Select10 -->
                                    <div id="Tab3-Select11" style="display: none;">
                                        <div class="col-md-4">
                                            <div class="form-group form-md-line-input form-md-floating-label">
                                                <input type="text" class="form-control" id="price" name="price" placeholder="">
                                                <label for="price">رقم الهوية </label>
                                            </div>
                                        </div>
                                        <div class="col-md-4" id="">

                                            <div class="form-group form-md-line-input form-md-floating-label">
                                                <select id="" class="form-control edited" name="condition">
                                                    <option value="Value" id=""> </option>
                                                    <option value="Value" id="">بطاقة احوال </option>
                                                    <option value="Value" id="">دفتر عائلة </option>
                                                    <option value="Value" id="">حفيظة نفوس </option>
                                                    <option value="Value" id=""> اقامة </option>
                                                    <option value="Value" id=""> رخصة قيادة </option>
                                                    <option value="Value" id=""> رخصة سير </option>
                                                    <option value="Value" id=""> بطاقة عمل </option>
                                                    <option value="Value" id=""> بطاقة الصراف </option>
                                                    <option value="Value" id=""> بطاقة بديلة </option>
                                                    <option value="Value" id=""> استمارة </option>
                                                    <option value="Value" id=""> وثيقة زواج </option>
                                                    <option value="Value" id=""> بطاقة مجلس دول الخليج </option>
                                                    <option value="Value" id=""> بطاقة هوية دبلوماسي </option>
                                                    <option value="Value" id=""> جواز دبلوماسي </option>
                                                </select>
                                                <label for="condition">نوعها </label>
                                            </div>
                                        </div>


                                        <div class="col-md-4">
                                            <div class="form-group form-md-line-input form-md-floating-label">
                                                <input type="text" class="form-control" id="price" name="price" placeholder="">
                                                <label for="price">مصدرها </label>
                                            </div>
                                        </div>

                                        <div class="col-md-3">
                                            <div class="form-group form-md-line-input form-md-floating-label">
                                                <input type="text" class="form-control" id="price" name="price" placeholder="">
                                                <label for="price">الاول </label>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group form-md-line-input form-md-floating-label">
                                                <input type="text" class="form-control" id="price" name="price" placeholder="">
                                                <label for="price">الثاني </label>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group form-md-line-input form-md-floating-label">
                                                <input type="text" class="form-control" id="price" name="price" placeholder="">
                                                <label for="price">الثالث </label>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group form-md-line-input form-md-floating-label">
                                                <input type="text" class="form-control" id="price" name="price" placeholder="">
                                                <label for="price">الرابع </label>
                                            </div>
                                        </div>


                                        <div class="col-md-6" id="">

                                            <div class="form-group form-md-line-input form-md-floating-label">

                                                <select id="" class="form-control edited" name="condition">
                                                    <option value="Value" id=""> </option>
                                                    <option value="Value" id="">+966 </option>
                                                    <option value="Value" id=""> </option>
                                                    <option value="Value" id=""> </option>
                                                </select>
                                                <input type="text" class="form-control" id="price" name="price" placeholder="01212">

                                                <label for="condition">رقم الجوال </label>
                                            </div>
                                        </div>

                                        <div class="col-md-6" id="">

                                            <div class="form-group form-md-line-input form-md-floating-label">

                                                <select id="" class="form-control edited" name="condition">
                                                    <option value="Value" id=""> </option>
                                                    <option value="Value" id="">سعودي </option>
                                                    <option value="Value" id=""> مصري </option>
                                                    <option value="Value" id=""> قطري </option>
                                                </select>

                                                <label for="condition">الجنسية </label>
                                            </div>
                                        </div>

                                    </div>
                                    <!-- End Tab3-Select11 -->
                                    <div id="Tab3-Select12" style="display: none;">
                                        <div class="col-md-4">
                                            <div class="form-group form-md-line-input form-md-floating-label">
                                                <input type="text" class="form-control" id="price" name="price" placeholder="">
                                                <label for="price">رقم الهوية </label>
                                            </div>
                                        </div>
                                        <div class="col-md-4" id="">

                                            <div class="form-group form-md-line-input form-md-floating-label">
                                                <select id="" class="form-control edited" name="condition">
                                                    <option value="Value" id=""> </option>
                                                    <option value="Value" id="">بطاقة احوال </option>
                                                    <option value="Value" id="">دفتر عائلة </option>
                                                    <option value="Value" id="">حفيظة نفوس </option>
                                                    <option value="Value" id=""> اقامة </option>
                                                    <option value="Value" id=""> رخصة قيادة </option>
                                                    <option value="Value" id=""> رخصة سير </option>
                                                    <option value="Value" id=""> بطاقة عمل </option>
                                                    <option value="Value" id=""> بطاقة الصراف </option>
                                                    <option value="Value" id=""> بطاقة بديلة </option>
                                                    <option value="Value" id=""> استمارة </option>
                                                    <option value="Value" id=""> وثيقة زواج </option>
                                                    <option value="Value" id=""> بطاقة مجلس دول الخليج </option>
                                                    <option value="Value" id=""> بطاقة هوية دبلوماسي </option>
                                                    <option value="Value" id=""> جواز دبلوماسي </option>
                                                </select>
                                                <label for="condition">نوعها </label>
                                            </div>
                                        </div>


                                        <div class="col-md-4">
                                            <div class="form-group form-md-line-input form-md-floating-label">
                                                <input type="text" class="form-control" id="price" name="price" placeholder="">
                                                <label for="price">مصدرها </label>
                                            </div>
                                        </div>

                                        <div class="col-md-3">
                                            <div class="form-group form-md-line-input form-md-floating-label">
                                                <input type="text" class="form-control" id="price" name="price" placeholder="">
                                                <label for="price">الاول </label>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group form-md-line-input form-md-floating-label">
                                                <input type="text" class="form-control" id="price" name="price" placeholder="">
                                                <label for="price">الثاني </label>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group form-md-line-input form-md-floating-label">
                                                <input type="text" class="form-control" id="price" name="price" placeholder="">
                                                <label for="price">الثالث </label>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group form-md-line-input form-md-floating-label">
                                                <input type="text" class="form-control" id="price" name="price" placeholder="">
                                                <label for="price">الرابع </label>
                                            </div>
                                        </div>


                                        <div class="col-md-6" id="">

                                            <div class="form-group form-md-line-input form-md-floating-label">

                                                <select id="" class="form-control edited" name="condition">
                                                    <option value="Value" id=""> </option>
                                                    <option value="Value" id="">+966 </option>
                                                    <option value="Value" id=""> </option>
                                                    <option value="Value" id=""> </option>
                                                </select>
                                                <input type="text" class="form-control" id="price" name="price" placeholder="01212">

                                                <label for="condition">رقم الجوال </label>
                                            </div>
                                        </div>

                                        <div class="col-md-6" id="">

                                            <div class="form-group form-md-line-input form-md-floating-label">

                                                <select id="" class="form-control edited" name="condition">
                                                    <option value="Value" id=""> </option>
                                                    <option value="Value" id="">سعودي </option>
                                                    <option value="Value" id=""> مصري </option>
                                                    <option value="Value" id=""> قطري </option>
                                                </select>

                                                <label for="condition">الجنسية </label>
                                            </div>
                                        </div>


                                    </div>
                                    <!-- End Tab3-Select12 -->
                                    <div id="Tab3-Select13" style="display: none;">

                                        <div class="col-md-4">
                                            <div class="form-group form-md-line-input form-md-floating-label">
                                                <input type="text" class="form-control" id="price" name="price" placeholder="">
                                                <label for="price">رقم الهوية </label>
                                            </div>
                                        </div>
                                        <div class="col-md-4" id="">

                                            <div class="form-group form-md-line-input form-md-floating-label">
                                                <select id="" class="form-control edited" name="condition">
                                                    <option value="Value" id=""> </option>
                                                    <option value="Value" id="">بطاقة احوال </option>
                                                    <option value="Value" id="">دفتر عائلة </option>
                                                    <option value="Value" id="">حفيظة نفوس </option>
                                                    <option value="Value" id=""> اقامة </option>
                                                    <option value="Value" id=""> رخصة قيادة </option>
                                                    <option value="Value" id=""> رخصة سير </option>
                                                    <option value="Value" id=""> بطاقة عمل </option>
                                                    <option value="Value" id=""> بطاقة الصراف </option>
                                                    <option value="Value" id=""> بطاقة بديلة </option>
                                                    <option value="Value" id=""> استمارة </option>
                                                    <option value="Value" id=""> وثيقة زواج </option>
                                                    <option value="Value" id=""> بطاقة مجلس دول الخليج </option>
                                                    <option value="Value" id=""> بطاقة هوية دبلوماسي </option>
                                                    <option value="Value" id=""> جواز دبلوماسي </option>
                                                </select>
                                                <label for="condition">نوعها </label>
                                            </div>
                                        </div>


                                        <div class="col-md-4">
                                            <div class="form-group form-md-line-input form-md-floating-label">
                                                <input type="text" class="form-control" id="price" name="price" placeholder="">
                                                <label for="price">مصدرها </label>
                                            </div>
                                        </div>

                                        <div class="col-md-3">
                                            <div class="form-group form-md-line-input form-md-floating-label">
                                                <input type="text" class="form-control" id="price" name="price" placeholder="">
                                                <label for="price">الاول </label>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group form-md-line-input form-md-floating-label">
                                                <input type="text" class="form-control" id="price" name="price" placeholder="">
                                                <label for="price">الثاني </label>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group form-md-line-input form-md-floating-label">
                                                <input type="text" class="form-control" id="price" name="price" placeholder="">
                                                <label for="price">الثالث </label>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group form-md-line-input form-md-floating-label">
                                                <input type="text" class="form-control" id="price" name="price" placeholder="">
                                                <label for="price">الرابع </label>
                                            </div>
                                        </div>


                                        <div class="col-md-6" id="">

                                            <div class="form-group form-md-line-input form-md-floating-label">

                                                <select id="" class="form-control edited" name="condition">
                                                    <option value="Value" id=""> </option>
                                                    <option value="Value" id="">+966 </option>
                                                    <option value="Value" id=""> </option>
                                                    <option value="Value" id=""> </option>
                                                </select>
                                                <input type="text" class="form-control" id="price" name="price" placeholder="01212">

                                                <label for="condition">رقم الجوال </label>
                                            </div>
                                        </div>

                                        <div class="col-md-6" id="">

                                            <div class="form-group form-md-line-input form-md-floating-label">

                                                <select id="" class="form-control edited" name="condition">
                                                    <option value="Value" id=""> </option>
                                                    <option value="Value" id="">سعودي </option>
                                                    <option value="Value" id=""> مصري </option>
                                                    <option value="Value" id=""> قطري </option>
                                                </select>

                                                <label for="condition">الجنسية </label>
                                            </div>
                                        </div>

                                    </div>
                                    <!-- End Tab3-Select13 -->
                                    <div id="Tab3-Select14" style="display: none;">
                                        <div class="col-md-4">
                                            <div class="form-group form-md-line-input form-md-floating-label">
                                                <input type="text" class="form-control" id="price" name="price" placeholder="">
                                                <label for="price">رقم الهوية </label>
                                            </div>
                                        </div>
                                        <div class="col-md-4" id="">

                                            <div class="form-group form-md-line-input form-md-floating-label">
                                                <select id="" class="form-control edited" name="condition">
                                                    <option value="Value" id=""> </option>
                                                    <option value="Value" id="">بطاقة احوال </option>
                                                    <option value="Value" id="">دفتر عائلة </option>
                                                    <option value="Value" id="">حفيظة نفوس </option>
                                                    <option value="Value" id=""> اقامة </option>
                                                    <option value="Value" id=""> رخصة قيادة </option>
                                                    <option value="Value" id=""> رخصة سير </option>
                                                    <option value="Value" id=""> بطاقة عمل </option>
                                                    <option value="Value" id=""> بطاقة الصراف </option>
                                                    <option value="Value" id=""> بطاقة بديلة </option>
                                                    <option value="Value" id=""> استمارة </option>
                                                    <option value="Value" id=""> وثيقة زواج </option>
                                                    <option value="Value" id=""> بطاقة مجلس دول الخليج </option>
                                                    <option value="Value" id=""> بطاقة هوية دبلوماسي </option>
                                                    <option value="Value" id=""> جواز دبلوماسي </option>
                                                </select>
                                                <label for="condition">نوعها </label>
                                            </div>
                                        </div>


                                        <div class="col-md-4">
                                            <div class="form-group form-md-line-input form-md-floating-label">
                                                <input type="text" class="form-control" id="price" name="price" placeholder="">
                                                <label for="price">مصدرها </label>
                                            </div>
                                        </div>

                                        <div class="col-md-3">
                                            <div class="form-group form-md-line-input form-md-floating-label">
                                                <input type="text" class="form-control" id="price" name="price" placeholder="">
                                                <label for="price">الاول </label>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group form-md-line-input form-md-floating-label">
                                                <input type="text" class="form-control" id="price" name="price" placeholder="">
                                                <label for="price">الثاني </label>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group form-md-line-input form-md-floating-label">
                                                <input type="text" class="form-control" id="price" name="price" placeholder="">
                                                <label for="price">الثالث </label>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group form-md-line-input form-md-floating-label">
                                                <input type="text" class="form-control" id="price" name="price" placeholder="">
                                                <label for="price">الرابع </label>
                                            </div>
                                        </div>


                                        <div class="col-md-6" id="">

                                            <div class="form-group form-md-line-input form-md-floating-label">

                                                <select id="" class="form-control edited" name="condition">
                                                    <option value="Value" id=""> </option>
                                                    <option value="Value" id="">+966 </option>
                                                    <option value="Value" id=""> </option>
                                                    <option value="Value" id=""> </option>
                                                </select>
                                                <input type="text" class="form-control" id="price" name="price" placeholder="01212">

                                                <label for="condition">رقم الجوال </label>
                                            </div>
                                        </div>

                                        <div class="col-md-6" id="">

                                            <div class="form-group form-md-line-input form-md-floating-label">

                                                <select id="" class="form-control edited" name="condition">
                                                    <option value="Value" id=""> </option>
                                                    <option value="Value" id="">سعودي </option>
                                                    <option value="Value" id=""> مصري </option>
                                                    <option value="Value" id=""> قطري </option>
                                                </select>

                                                <label for="condition">الجنسية </label>
                                            </div>
                                        </div>

                                    </div>
                                    <!-- End Tab3-Select14 -->


                                </div>
                                <!-- End tab 3  -->
                                <!-- --------------------------------- -->
                                <div class="tab-pane" id="tab4">

                                    <div id="Tab4-Select1" style="display: none;">


                                        <div class="col-md-6" id="">

                                            <div class="form-group form-md-line-input form-md-floating-label">
                                                <select id="" class="form-control edited" name="condition">
                                                    <option value="Value" id=""> </option>
                                                    <option value="Value" id="">سكني </option>
                                                    <option value="Value" id="">تجاري </option>
                                                    <option value="Value" id="">سكني وتجاري </option>
                                                    <option value="Value" id=""> زراعي </option>
                                                    <option value="Value" id=""> صناعي </option>

                                                </select>
                                                <label for="condition"> ترخيص الارض </label>
                                            </div>
                                        </div>
                                        <div class="col-md-6" id="">

                                            <div class="form-group form-md-line-input form-md-floating-label">
                                                <select id="" class="form-control edited" name="condition">
                                                    <option value="Value" id=""> </option>
                                                    <option value="Value" id=""> متوفرة </option>
                                                    <option value="Value" id=""> غير متوفرة </option>
                                                </select>
                                                <label for="condition"> خدمة الكهرباء </label>
                                            </div>
                                        </div>
                                        <div class="col-md-6" id="">

                                            <div class="form-group form-md-line-input form-md-floating-label">
                                                <select id="" class="form-control edited" name="condition">
                                                    <option value="Value" id=""> </option>
                                                    <option value="Value" id=""> متوفرة </option>
                                                    <option value="Value" id=""> غير متوفرة </option>
                                                </select>
                                                <label for="condition"> خدمة النارة </label>
                                            </div>
                                        </div>
                                        <div class="col-md-6" id="">

                                            <div class="form-group form-md-line-input form-md-floating-label">
                                                <select id="" class="form-control edited" name="condition">
                                                    <option value="Value" id=""> </option>
                                                    <option value="Value" id=""> متوفرة </option>
                                                    <option value="Value" id=""> غير متوفرة </option>
                                                </select>
                                                <label for="condition"> خدمة الماء </label>
                                            </div>
                                        </div>
                                        <div class="col-md-6" id="">

                                            <div class="form-group form-md-line-input form-md-floating-label">
                                                <select id="" class="form-control edited" name="condition">
                                                    <option value="Value" id=""> </option>
                                                    <option value="Value" id=""> متوفرة </option>
                                                    <option value="Value" id=""> غير متوفرة </option>
                                                </select>
                                                <label for="condition"> خدمة الاسفلت </label>
                                            </div>
                                        </div>
                                        <div class="col-md-6" id="">

                                            <div class="form-group form-md-line-input form-md-floating-label">
                                                <select id="" class="form-control edited" name="condition">
                                                    <option value="Value" id=""> </option>
                                                    <option value="Value" id=""> متوفرة </option>
                                                    <option value="Value" id=""> غير متوفرة </option>
                                                </select>
                                                <label for="condition"> خدمة التصريف </label>
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <label for="number_of_units"> مرافق اخري </label>
                                            <br>
                                        </div>
                                        <div class="col-md-1">

                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-group form-md-line-input form-md-floating-label">
                                                <input type="checkbox" id="number_of_units" name="number_of_units" placeholder=" " min="0" value="{{ old('number_of_units') }}">
                                                <label for="number_of_units">مرافق تعليمية </label>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-group form-md-line-input form-md-floating-label">
                                                <input type="checkbox" id="number_of_units" name="number_of_units" placeholder=" " min="0" value="{{ old('number_of_units') }}">
                                                <label for="number_of_units">مرافق صحية </label>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-group form-md-line-input form-md-floating-label">
                                                <input type="checkbox" id="number_of_units" name="number_of_units" placeholder=" " min="0" value="{{ old('number_of_units') }}">
                                                <label for="number_of_units">مرافق تجارية </label>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-group form-md-line-input form-md-floating-label">
                                                <input type="checkbox" id="number_of_units" name="number_of_units" placeholder=" " min="0" value="{{ old('number_of_units') }}">
                                                <label for="number_of_units">مسجد </label>
                                            </div>
                                        </div>

                                        <div class="col-md-2">
                                            <div class="form-group form-md-line-input form-md-floating-label">
                                                <input type="checkbox" id="number_of_units" name="number_of_units" placeholder=" " min="0" value="{{ old('number_of_units') }}">
                                                <label for="number_of_units">مرافق تعليمية </label>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group form-md-line-input form-md-floating-label">
                                                <textarea class="form-control" rows="4" id="property_advantage" name="property_advantage"></textarea>
                                                <label for="property_advantage"> ملاحظات</label>
                                            </div>
                                        </div>



                                    </div>
                                    <!--  Tab4-Select1-->
                                    <div id="Tab4-Select2" style="display: none;">
                                        <div class="col-md-6" id="">

                                            <div class="form-group form-md-line-input form-md-floating-label">

                                                <select id="" class="form-control edited" name="condition">
                                                    <option value="Value" id=""> </option>
                                                    <option value="Value" id="">مفروشة </option>
                                                    <option value="Value" id="">خالية </option>
                                                    <option value="Value" id="">سويت </option>
                                                </select>

                                                <label for="condition"> نوع الشقة </label>
                                            </div>
                                        </div>
                                        <div class="col-md-6" id="">

                                            <div class="form-group form-md-line-input form-md-floating-label">

                                                <select id="" class="form-control edited" name="condition">
                                                    <option value="Value" id=""> </option>
                                                    <option value="Value" id="">ارضي </option>
                                                    <option value="Value" id="">اول </option>
                                                    <option value="Value" id="">ثاني </option>
                                                    <option value="Value" id="">ثالث </option>
                                                </select>

                                                <label for="condition"> رقم الدور </label>
                                            </div>
                                        </div>

                                        <div class="col-md-6" id="">

                                            <div class="form-group form-md-line-input form-md-floating-label">

                                                <select id="" class="form-control edited" name="condition">
                                                    <option value="Value" id=""> </option>
                                                    <option value="Value" id="">1 </option>
                                                    <option value="Value" id="">2 </option>
                                                    <option value="Value" id="">3 </option>
                                                    <option value="Value" id="">4 </option>
                                                </select>

                                                <label for="condition"> عدد الغرف </label>
                                            </div>
                                        </div>
                                        <div class="col-md-6" id="">

                                            <div class="form-group form-md-line-input form-md-floating-label">

                                                <select id="" class="form-control edited" name="condition">
                                                    <option value="Value" id=""> </option>
                                                    <option value="Value" id="">عوائل </option>
                                                    <option value="Value" id="">عزاب </option>

                                                </select>

                                                <label for="condition"> غرض الشقة </label>
                                            </div>
                                        </div>
                                        <div class="col-md-6" id="">

                                            <div class="form-group form-md-line-input form-md-floating-label">

                                                <select id="" class="form-control edited" name="condition">
                                                    <option value="Value" id=""> </option>
                                                    <option value="Value" id="">1 </option>
                                                    <option value="Value" id="">2 </option>
                                                    <option value="Value" id="">3 </option>
                                                    <option value="Value" id="">4 </option>
                                                </select>

                                                <label for="condition"> عدد الحمامات </label>
                                            </div>
                                        </div>
                                        <div class="col-md-6" id="">

                                            <div class="form-group form-md-line-input form-md-floating-label">

                                                <select id="" class="form-control edited" name="condition">
                                                    <option value="Value" id=""> </option>
                                                    <option value="Value" id="">1 </option>
                                                    <option value="Value" id="">2 </option>
                                                    <option value="Value" id="">3 </option>
                                                    <option value="Value" id="">4 </option>
                                                </select>

                                                <label for="condition"> عدد المداخل </label>
                                            </div>
                                        </div>
                                        <div class="col-md-6" id="">

                                            <div class="form-group form-md-line-input form-md-floating-label">

                                                <select id="" class="form-control edited" name="condition">
                                                    <option value="Value" id=""> </option>
                                                    <option value="Value" id="">متوفرة </option>
                                                    <option value="Value" id="">غير متوفرة </option>
                                                </select>

                                                <label for="condition"> خدمة التكيف </label>
                                            </div>
                                        </div>
                                        <div class="col-md-6" id="">

                                            <div class="form-group form-md-line-input form-md-floating-label">

                                                <select id="" class="form-control edited" name="condition">
                                                    <option value="Value" id=""> </option>
                                                    <option value="Value" id="">متوفرة </option>
                                                    <option value="Value" id="">غير متوفرة </option>
                                                </select>

                                                <label for="condition"> نوع التشطيب </label>
                                            </div>
                                        </div>
                                        <div class="col-md-6" id="">

                                            <div class="form-group form-md-line-input form-md-floating-label">

                                                <select id="" class="form-control edited" name="condition">
                                                    <option value="Value" id=""> </option>
                                                    <option value="Value" id="">متوفرة </option>
                                                    <option value="Value" id="">غير متوفرة </option>
                                                </select>

                                                <label for="condition"> خدمة المصاعد </label>
                                            </div>
                                        </div>
                                        <div class="col-md-6" id="">

                                            <div class="form-group form-md-line-input form-md-floating-label">

                                                <select id="" class="form-control edited" name="condition">
                                                    <option value="Value" id=""> </option>
                                                    <option value="Value" id="">متوفرة </option>
                                                    <option value="Value" id="">غير متوفرة </option>
                                                </select>

                                                <label for="condition"> خدمة الغاز </label>
                                            </div>
                                        </div>
                                        <div class="col-md-6" id="">

                                            <div class="form-group form-md-line-input form-md-floating-label">

                                                <select id="" class="form-control edited" name="condition">
                                                    <option value="Value" id=""> </option>
                                                    <option value="Value" id="">متوفرة </option>
                                                    <option value="Value" id="">غير متوفرة </option>
                                                </select>

                                                <label for="condition"> عداد الكهرباء </label>
                                            </div>
                                        </div>
                                        <div class="col-md-6" id="">

                                            <div class="form-group form-md-line-input form-md-floating-label">

                                                <select id="" class="form-control edited" name="condition">
                                                    <option value="Value" id=""> </option>
                                                    <option value="Value" id="">متوفرة </option>
                                                    <option value="Value" id="">غير متوفرة </option>
                                                </select>

                                                <label for="condition"> خدمة الحارس </label>
                                            </div>
                                        </div>
                                        <div class="col-md-6" id="">

                                            <div class="form-group form-md-line-input form-md-floating-label">

                                                <select id="" class="form-control edited" name="condition">
                                                    <option value="Value" id=""> </option>
                                                    <option value="Value" id="">عامة </option>
                                                    <option value="Value" id="">خاصة </option>
                                                </select>

                                                <label for="condition"> مواقف السيارات </label>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group form-md-line-input form-md-floating-label">
                                                <textarea class="form-control" rows="4" id="property_advantage" name="property_advantage"></textarea>
                                                <label for="property_advantage"> ملاحظات</label>
                                            </div>
                                        </div>

                                    </div>
                                    <!--  Tab4-Select2-->
                                    <div id="Tab4-Select3" style="display: none;">
                                        <div class="col-md-6" id="">

                                            <div class="form-group form-md-line-input form-md-floating-label">

                                                <select id="" class="form-control edited" name="condition">
                                                    <option value="Value" id=""> </option>
                                                    <option value="Value" id="">فلي </option>
                                                    <option value="Value" id="">دوبلكس </option>
                                                </select>

                                                <label for="condition"> نوع الفيلا </label>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group form-md-line-input form-md-floating-label">
                                                <input type="number" class="form-control" rows="4" id="property_advantage" name="property_advantage">
                                                <label for="property_advantage"> رقم الفيلا</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group form-md-line-input form-md-floating-label">
                                                <input type="number" class="form-control" rows="4" id="property_advantage" name="property_advantage">
                                                <label for="property_advantage"> عدد المجالس </label>
                                            </div>
                                        </div>

                                        <div class="col-md-6" id="">

                                            <div class="form-group form-md-line-input form-md-floating-label">

                                                <select id="" class="form-control edited" name="condition">
                                                    <option value="Value" id=""> </option>
                                                    <option value="Value" id="">1 </option>
                                                    <option value="Value" id="">2 </option>
                                                    <option value="Value" id="">3 </option>
                                                    <option value="Value" id="">لايوجد </option>
                                                </select>

                                                <label for="condition"> عدد الشقق </label>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group form-md-line-input form-md-floating-label">
                                                <input type="number" class="form-control" rows="4" id="property_advantage" name="property_advantage">
                                                <label for="property_advantage"> عدد غرف النوم </label>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group form-md-line-input form-md-floating-label">
                                                <input type="number" class="form-control" rows="4" id="property_advantage" name="property_advantage">
                                                <label for="property_advantage"> عدد دورات المياه </label>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group form-md-line-input form-md-floating-label">
                                                <input type="number" class="form-control" rows="4" id="property_advantage" name="property_advantage">
                                                <label for="property_advantage"> عدد المطابخ </label>
                                            </div>
                                        </div>
                                        <div class="col-md-6" id="">

                                            <div class="form-group form-md-line-input form-md-floating-label">

                                                <select id="" class="form-control edited" name="condition">
                                                    <option value="Value" id=""> </option>
                                                    <option value="Value" id="">متوفرة </option>
                                                    <option value="Value" id="">غير متوفرة </option>
                                                </select>

                                                <label for="condition"> خدمة التكيف </label>
                                            </div>
                                        </div>

                                        <div class="col-md-6" id="">

                                            <div class="form-group form-md-line-input form-md-floating-label">

                                                <select id="" class="form-control edited" name="condition">
                                                    <option value="Value" id=""> </option>
                                                    <option value="Value" id="">متوفرة </option>
                                                    <option value="Value" id="">غير متوفرة </option>
                                                </select>

                                                <label for="condition"> ملحق للخادمة </label>
                                            </div>
                                        </div>
                                        <div class="col-md-6" id="">

                                            <div class="form-group form-md-line-input form-md-floating-label">

                                                <select id="" class="form-control edited" name="condition">
                                                    <option value="Value" id=""> </option>
                                                    <option value="Value" id="">متوفرة </option>
                                                    <option value="Value" id="">غير متوفرة </option>
                                                </select>

                                                <label for="condition"> رفوف مطبخ </label>
                                            </div>
                                        </div>
                                        <div class="col-md-6" id="">

                                            <div class="form-group form-md-line-input form-md-floating-label">

                                                <select id="" class="form-control edited" name="condition">
                                                    <option value="Value" id=""> </option>
                                                    <option value="Value" id="">متوفرة </option>
                                                    <option value="Value" id="">غير متوفرة </option>
                                                </select>

                                                <label for="condition"> كراج سياراة </label>
                                            </div>
                                        </div>
                                        <div class="col-md-6" id="">

                                            <div class="form-group form-md-line-input form-md-floating-label">

                                                <select id="" class="form-control edited" name="condition">
                                                    <option value="Value" id=""> </option>
                                                    <option value="Value" id="">بدون </option>
                                                    <option value="Value" id="">جيد </option>
                                                    <option value="Value" id=""> متوسط </option>
                                                    <option value="Value" id="">ممتاز </option>

                                                </select>

                                                <label for="condition"> نوع التشطيب </label>
                                            </div>
                                        </div>
                                        <div class="col-md-6" id="">

                                            <div class="form-group form-md-line-input form-md-floating-label">

                                                <select id="" class="form-control edited" name="condition">
                                                    <option value="Value" id=""> </option>
                                                    <option value="Value" id="">متوفرة </option>
                                                    <option value="Value" id="">غير متوفرة </option>
                                                </select>

                                                <label for="condition"> حديقة </label>
                                            </div>
                                        </div>
                                        <div class="col-md-6" id="">

                                            <div class="form-group form-md-line-input form-md-floating-label">

                                                <select id="" class="form-control edited" name="condition">
                                                    <option value="Value" id=""> </option>
                                                    <option value="Value" id="">متوفرة </option>
                                                    <option value="Value" id="">غير متوفرة </option>
                                                </select>

                                                <label for="condition"> بركة سباحة </label>
                                            </div>
                                        </div>
                                        <div class="col-md-6" id="">

                                            <div class="form-group form-md-line-input form-md-floating-label">

                                                <select id="" class="form-control edited" name="condition">
                                                    <option value="Value" id=""> </option>
                                                    <option value="Value" id="">متوفرة </option>
                                                    <option value="Value" id="">غير متوفرة </option>
                                                </select>

                                                <label for="condition"> بيت شعر </label>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group form-md-line-input form-md-floating-label">
                                                <textarea class="form-control" rows="4" id="property_advantage" name="property_advantage"></textarea>
                                                <label for="property_advantage"> ملاحظات</label>
                                            </div>
                                        </div>

                                    </div>
                                    <!--  Tab4-Select3-->
                                    <div id="Tab4-Select4" style="display: none;">
                                        <div class="col-md-6">
                                            <div class="form-group form-md-line-input form-md-floating-label">
                                                <input type="text" class="form-control" rows="4" id="property_advantage" name="property_advantage">
                                                <label for="property_advantage"> اسم العمارة </label>
                                            </div>
                                        </div>
                                        <div class="col-md-6" id="">

                                            <div class="form-group form-md-line-input form-md-floating-label">

                                                <select id="" class="form-control edited" name="condition">
                                                    <option value="Value" id=""> </option>
                                                    <option value="Value" id="">1 </option>
                                                    <option value="Value" id="">2 </option>
                                                    <option value="Value" id="">3 </option>
                                                    <option value="Value" id="">لايوجد </option>
                                                </select>

                                                <label for="condition"> عدد الادوار </label>
                                            </div>
                                        </div>
                                        <div class="col-md-6" id="">
                                            <div class="form-group form-md-line-input form-md-floating-label">
                                                <select id="" class="form-control edited" name="condition">
                                                    <option value="Value" id=""> </option>
                                                    <option value="Value" id="">1 </option>
                                                    <option value="Value" id="">2 </option>
                                                    <option value="Value" id="">3 </option>
                                                </select>
                                                <label for="condition"> عدد الغرف المستقلة </label>
                                            </div>
                                        </div>
                                        <div class="col-md-6" id="">
                                            <div class="form-group form-md-line-input form-md-floating-label">
                                                <select id="" class="form-control edited" name="condition">
                                                    <option value="Value" id=""> </option>
                                                    <option value="Value" id="">1 </option>
                                                    <option value="Value" id="">2 </option>
                                                    <option value="Value" id="">3 </option>
                                                </select>
                                                <label for="condition"> عدد الشقق </label>
                                            </div>
                                        </div>
                                        <div class="col-md-6" id="">
                                            <div class="form-group form-md-line-input form-md-floating-label">
                                                <select id="" class="form-control edited" name="condition">
                                                    <option value="Value" id=""> </option>
                                                    <option value="Value" id="">1 </option>
                                                    <option value="Value" id="">2 </option>
                                                    <option value="Value" id="">3 </option>
                                                </select>
                                                <label for="condition"> عدد المكاتب </label>
                                            </div>
                                        </div>
                                        <div class="col-md-6" id="">
                                            <div class="form-group form-md-line-input form-md-floating-label">
                                                <select id="" class="form-control edited" name="condition">
                                                    <option value="Value" id=""> </option>
                                                    <option value="Value" id="">1 </option>
                                                    <option value="Value" id="">2 </option>
                                                    <option value="Value" id="">3 </option>
                                                </select>
                                                <label for="condition"> عدد المحلات </label>
                                            </div>
                                        </div>
                                        <div class="col-md-6" id="">

                                            <div class="form-group form-md-line-input form-md-floating-label">

                                                <select id="" class="form-control edited" name="condition">
                                                    <option value="Value" id=""> </option>
                                                    <option value="Value" id="">متوفرة </option>
                                                    <option value="Value" id="">غير متوفرة </option>
                                                </select>

                                                <label for="condition"> خدمة المصاعد </label>
                                            </div>
                                        </div>
                                        <div class="col-md-6" id="">

                                            <div class="form-group form-md-line-input form-md-floating-label">

                                                <select id="" class="form-control edited" name="condition">
                                                    <option value="Value" id=""> </option>
                                                    <option value="Value" id="">متوفرة </option>
                                                    <option value="Value" id="">غير متوفرة </option>
                                                </select>

                                                <label for="condition"> خدمة التكيف </label>
                                            </div>
                                        </div>
                                        <div class="col-md-6" id="">

                                            <div class="form-group form-md-line-input form-md-floating-label">

                                                <select id="" class="form-control edited" name="condition">
                                                    <option value="Value" id=""> </option>
                                                    <option value="Value" id="">متوفرة </option>
                                                    <option value="Value" id="">غير متوفرة </option>
                                                </select>

                                                <label for="condition"> مواقف السيارات </label>
                                            </div>
                                        </div>
                                        <div class="col-md-6" id="">

                                            <div class="form-group form-md-line-input form-md-floating-label">

                                                <select id="" class="form-control edited" name="condition">
                                                    <option value="Value" id=""> </option>
                                                    <option value="Value" id="">متوفرة </option>
                                                    <option value="Value" id="">غير متوفرة </option>
                                                </select>

                                                <label for="condition"> خدمة التكيف </label>
                                            </div>
                                        </div>
                                        <div class="col-md-6" id="">

                                            <div class="form-group form-md-line-input form-md-floating-label">

                                                <select id="" class="form-control edited" name="condition">
                                                    <option value="Value" id=""> </option>
                                                    <option value="Value" id="">متوفرة </option>
                                                    <option value="Value" id="">غير متوفرة </option>
                                                </select>

                                                <label for="condition"> الالياف البصرية (كبينة) </label>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group form-md-line-input form-md-floating-label">
                                                <textarea class="form-control" rows="4" id="property_advantage" name="property_advantage"></textarea>
                                                <label for="property_advantage"> ملاحظات</label>
                                            </div>
                                        </div>




                                    </div>
                                    <!--  Tab4-Select4-->
                                    <div id="Tab4-Select5" style="display: none;">

                                        <div class="col-md-6">
                                            <div class="form-group form-md-line-input form-md-floating-label">
                                                <input type="number" class="form-control" id="property_name" name="property_name" placeholder="" value="">
                                                <label for="property_name"> عدد الصالات النسائية </label>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group form-md-line-input form-md-floating-label">
                                                <input type="number" class="form-control" id="property_name" name="property_name" placeholder="" value="">
                                                <label for="property_name"> عدد الصالات الرجالية </label>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group form-md-line-input form-md-floating-label">
                                                <input type="number" class="form-control" id="property_name" name="property_name" placeholder="" value="">
                                                <label for="property_name"> مساحة الصالات النسائية </label>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group form-md-line-input form-md-floating-label">
                                                <input type="number" class="form-control" id="property_name" name="property_name" placeholder="" value="">
                                                <label for="property_name"> مساحة الصالات الرجالية </label>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group form-md-line-input form-md-floating-label">
                                                <input type="number" class="form-control" id="property_name" name="property_name" placeholder="" value="">
                                                <label for="property_name"> عدد دورات المياه </label>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group form-md-line-input form-md-floating-label">
                                                <input type="number" class="form-control" id="property_name" name="property_name" placeholder="" value="">
                                                <label for="property_name"> عدد الغرف </label>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group form-md-line-input form-md-floating-label">
                                                <input type="number" class="form-control" id="property_name" name="property_name" placeholder="" value="">
                                                <label for="property_name"> عدد الطابخ </label>
                                            </div>
                                        </div>

                                        <div class="col-md-6" id="">

                                            <div class="form-group form-md-line-input form-md-floating-label">

                                                <select id="" class="form-control edited" name="condition">
                                                    <option value="Value" id=""> </option>
                                                    <option value="Value" id="">متوفرة </option>
                                                    <option value="Value" id="">غير متوفرة </option>
                                                </select>

                                                <label for="condition"> خدمة التكيف </label>
                                            </div>
                                        </div>
                                        <div class="col-md-6" id="">

                                            <div class="form-group form-md-line-input form-md-floating-label">

                                                <select id="" class="form-control edited" name="condition">
                                                    <option value="Value" id=""> </option>
                                                    <option value="Value" id="">متوفرة </option>
                                                    <option value="Value" id="">غير متوفرة </option>
                                                </select>

                                                <label for="condition"> نوع الشطيب </label>
                                            </div>
                                        </div>
                                        <div class="col-md-6" id="">

                                            <div class="form-group form-md-line-input form-md-floating-label">

                                                <select id="" class="form-control edited" name="condition">
                                                    <option value="Value" id=""> </option>
                                                    <option value="Value" id="">خاصة </option>
                                                    <option value="Value" id="">عامة </option>
                                                </select>

                                                <label for="condition"> مواقف السيارات </label>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group form-md-line-input form-md-floating-label">
                                                <textarea class="form-control" rows="4" id="property_advantage" name="property_advantage"></textarea>
                                                <label for="property_advantage"> ملاحظات</label>
                                            </div>
                                        </div>

                                    </div>
                                    <!--  Tab4-Select5-->
                                    <div id="Tab4-Select6" style="display: none;">
                                        <div class="col-md-6">
                                            <div class="form-group form-md-line-input form-md-floating-label">
                                                <input type="number" class="form-control" rows="4" id="property_advantage" name="property_advantage">
                                                <label for="property_advantage"> عدد الادوار </label>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group form-md-line-input form-md-floating-label">
                                                <input type="number" class="form-control" rows="4" id="property_advantage" name="property_advantage">
                                                <label for="property_advantage"> عدد الغرف </label>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group form-md-line-input form-md-floating-label">
                                                <input type="number" class="form-control" rows="4" id="property_advantage" name="property_advantage">
                                                <label for="property_advantage"> عدد دورات المياه </label>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group form-md-line-input form-md-floating-label">
                                                <input type="number" class="form-control" rows="4" id="property_advantage" name="property_advantage">
                                                <label for="property_advantage"> عدد المداخل </label>
                                            </div>
                                        </div>
                                        <div class="col-md-6" id="">

                                            <div class="form-group form-md-line-input form-md-floating-label">

                                                <select id="" class="form-control edited" name="condition">
                                                    <option value="Value" id=""> </option>
                                                    <option value="Value" id="">متوفرة </option>
                                                    <option value="Value" id="">غير متوفرة </option>
                                                </select>

                                                <label for="condition"> خدمة التكيف </label>
                                            </div>
                                        </div>
                                        <div class="col-md-6" id="">

                                            <div class="form-group form-md-line-input form-md-floating-label">

                                                <select id="" class="form-control edited" name="condition">
                                                    <option value="Value" id=""> .... </option>
                                                    <option value="Value" id=""> .... </option>
                                                    <option value="Value" id=""> .... </option>
                                                </select>

                                                <label for="condition"> نوع التشطيب </label>
                                            </div>
                                        </div>
                                        <div class="col-md-6" id="">

                                            <div class="form-group form-md-line-input form-md-floating-label">

                                                <select id="" class="form-control edited" name="condition">
                                                    <option value="Value" id=""> </option>

                                                    <option value="Value" id=""> خاصة </option>
                                                    <option value="Value" id=""> عامة </option>
                                                </select>

                                                <label for="condition"> مواقف السيارات </label>
                                            </div>
                                        </div>
                                        <div class="col-md-6" id="">

                                            <div class="form-group form-md-line-input form-md-floating-label">

                                                <select id="" class="form-control edited" name="condition">
                                                    <option value="Value" id=""> </option>
                                                    <option value="Value" id=""> مستقل </option>
                                                    <option value="Value" id=""> مشترك </option>
                                                </select>

                                                <label for="condition"> نوع العداد </label>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group form-md-line-input form-md-floating-label">
                                                <textarea class="form-control" rows="4" id="property_advantage" name="property_advantage"></textarea>
                                                <label for="property_advantage"> ملاحظات</label>
                                            </div>
                                        </div>

                                    </div>
                                    <!--  Tab4-Select6-->
                                    <div id="Tab4-Select7" style="display: none;">

                                        <div class="col-md-6" id="">

                                            <div class="form-group form-md-line-input form-md-floating-label">

                                                <select id="" class="form-control edited" name="condition">
                                                    <option value="Value" id=""> </option>
                                                    <option value="Value" id="">مكتب </option>
                                                    <option value="Value" id=""> شقة </option>
                                                </select>

                                                <label for="condition"> نوع المكتب </label>
                                            </div>
                                        </div>

                                        <div class="col-md-6" id="">

                                            <div class="form-group form-md-line-input form-md-floating-label">

                                                <select id="" class="form-control edited" name="condition">
                                                    <option value="Value" id=""> </option>
                                                    <option value="Value" id="">اول </option>
                                                    <option value="Value" id=""> ثاني </option>
                                                </select>

                                                <label for="condition">يقع في الدور </label>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group form-md-line-input form-md-floating-label">
                                                <input type="number" class="form-control" rows="4" id="property_advantage" name="property_advantage">
                                                <label for="property_advantage"> عدد الغرف </label>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group form-md-line-input form-md-floating-label">
                                                <input type="number" class="form-control" rows="4" id="property_advantage" name="property_advantage">
                                                <label for="property_advantage"> عدد الداخل </label>
                                            </div>
                                        </div>


                                        <div class="col-md-6" id="">

                                            <div class="form-group form-md-line-input form-md-floating-label">

                                                <select id="" class="form-control edited" name="condition">
                                                    <option value="Value" id=""> </option>
                                                    <option value="Value" id="">متوفرة </option>
                                                    <option value="Value" id="">غير متوفرة </option>
                                                </select>

                                                <label for="condition"> خدمة التكيف </label>
                                            </div>
                                        </div>
                                        <div class="col-md-6" id="">

                                            <div class="form-group form-md-line-input form-md-floating-label">

                                                <select id="" class="form-control edited" name="condition">
                                                    <option value="Value" id=""> .... </option>
                                                    <option value="Value" id=""> .... </option>
                                                    <option value="Value" id=""> .... </option>
                                                </select>

                                                <label for="condition"> نوع التشطيب </label>
                                            </div>
                                        </div>
                                        <div class="col-md-6" id="">

                                            <div class="form-group form-md-line-input form-md-floating-label">

                                                <select id="" class="form-control edited" name="condition">
                                                    <option value="Value" id=""> </option>
                                                    <option value="Value" id=""> خاصة </option>
                                                    <option value="Value" id=""> عامة </option>
                                                </select>

                                                <label for="condition"> مواقف السيارات </label>
                                            </div>
                                        </div>
                                        <div class="col-md-6" id="">

                                            <div class="form-group form-md-line-input form-md-floating-label">

                                                <select id="" class="form-control edited" name="condition">
                                                    <option value="Value" id=""> </option>
                                                    <option value="Value" id=""> مستقل </option>
                                                    <option value="Value" id=""> مشترك </option>
                                                </select>

                                                <label for="condition">نوع العداد</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group form-md-line-input form-md-floating-label">
                                                <textarea class="form-control" rows="4" id="property_advantage" name="property_advantage"></textarea>
                                                <label for="property_advantage"> ملاحظات</label>
                                            </div>
                                        </div>

                                    </div>
                                    <!--  Tab4-Select7-->
                                    <div id="Tab4-Select8" style="display: none;">
                                        <div class="col-md-6" id="">

                                            <div class="form-group form-md-line-input form-md-floating-label">

                                                <select id="" class="form-control edited" name="condition">
                                                    <option value="Value" id=""> </option>
                                                    <option value="Value" id="">بقالة </option>
                                                    <option value="Value" id=""> سوبر ماركت </option>
                                                    <option value="Value" id=""> حلاق</option>
                                                    <option value="Value" id=""> صالون نسائي </option>
                                                    <option value="Value" id=""> خياط رجالي </option>
                                                    <option value="Value" id=""> مشغل نسائي </option>
                                                    <option value="Value" id=""> مغسلة ملابس </option>
                                                    <option value="Value" id=""> فوال </option>
                                                    <option value="Value" id=""> مطعم </option>
                                                    <option value="Value" id=""> كافيتريا </option>
                                                    <option value="Value" id=""> مقهي </option>
                                                    <option value="Value" id=""> مقهي انترنت </option>
                                                    <option value="Value" id=""> صالة العاب </option>
                                                    <option value="Value" id=""> صالة تمرين </option>
                                                    <option value="Value" id=""> العاب اطفال </option>
                                                    <option value="Value" id=""> محل اقمشة </option>
                                                    <option value="Value" id=""> ملابس جاهزة </option>
                                                    <option value="Value" id=""> حلويات </option>
                                                    <option value="Value" id=""> مكتب عقارات </option>
                                                    <option value="Value" id=""> اثاث </option>
                                                    <option value="Value" id=""> مكتبه </option>
                                                    <option value="Value" id=""> كمبيوتر </option>
                                                    <option value="Value" id=""> زينة سيارات </option>
                                                    <option value="Value" id="">قطع غيار سيارات </option>
                                                    <option value="Value" id="">مواد صحية </option>
                                                    <option value="Value" id=""> مواد بناء </option>
                                                    <option value="Value" id=""> ورشة نجارة </option>
                                                    <option value="Value" id=""> هدايا </option>
                                                    <option value="Value" id=""> صيدلية </option>
                                                    <option value="Value" id=""> كبينة اتصالات </option>
                                                    <option value="Value" id=""> اطفاء وسلامة </option>
                                                    <option value="Value" id=""> مقاولات </option>
                                                    <option value="Value" id=""> اواني منزلية </option>
                                                    <option value="Value" id=""> حداد </option>
                                                    <option value="Value" id=""> معمل غذائي </option>
                                                    <option value="Value" id=""> مخزن </option>
                                                    <option value="Value" id=""> محل مكسرات </option>
                                                    <option value="Value" id=""> ورشة تصليح مكيفات </option>
                                                    <option value="Value" id=""> مطابخ </option>

                                                </select>

                                                <label for="condition"> نشاط المحل </label>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group form-md-line-input form-md-floating-label">
                                                <input type="number" class="form-control" rows="4" id="property_advantage" name="property_advantage">
                                                <label for="property_advantage"> عدد الغرف </label>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group form-md-line-input form-md-floating-label">
                                                <input type="number" class="form-control" rows="4" id="property_advantage" name="property_advantage">
                                                <label for="property_advantage"> عدد دورات المياه </label>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group form-md-line-input form-md-floating-label">
                                                <input type="number" class="form-control" rows="4" id="property_advantage" name="property_advantage">
                                                <label for="property_advantage"> عدد الداخل </label>
                                            </div>
                                        </div>
                                        <div class="col-md-6" id="">

                                            <div class="form-group form-md-line-input form-md-floating-label">

                                                <select id="" class="form-control edited" name="condition">
                                                    <option value="Value" id=""> </option>
                                                    <option value="Value" id="">متوفرة </option>
                                                    <option value="Value" id="">غير متوفرة </option>
                                                </select>

                                                <label for="condition"> خدمة التكيف </label>
                                            </div>
                                        </div>
                                        <div class="col-md-6" id="">

                                            <div class="form-group form-md-line-input form-md-floating-label">

                                                <select id="" class="form-control edited" name="condition">
                                                    <option value="Value" id=""> .... </option>
                                                    <option value="Value" id=""> .... </option>
                                                    <option value="Value" id=""> .... </option>
                                                </select>

                                                <label for="condition"> نوع التشطيب </label>
                                            </div>
                                        </div>
                                        <div class="col-md-6" id="">

                                            <div class="form-group form-md-line-input form-md-floating-label">

                                                <select id="" class="form-control edited" name="condition">
                                                    <option value="Value" id=""> </option>
                                                    <option value="Value" id=""> خاصة </option>
                                                    <option value="Value" id=""> عامة </option>
                                                </select>

                                                <label for="condition"> مواقف السيارات </label>
                                            </div>
                                        </div>
                                        <div class="col-md-6" id="">

                                            <div class="form-group form-md-line-input form-md-floating-label">

                                                <select id="" class="form-control edited" name="condition">
                                                    <option value="Value" id=""> </option>
                                                    <option value="Value" id=""> مستقل </option>
                                                    <option value="Value" id=""> مشترك </option>
                                                </select>

                                                <label for="condition">نوع العداد</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group form-md-line-input form-md-floating-label">
                                                <textarea class="form-control" rows="4" id="property_advantage" name="property_advantage"></textarea>
                                                <label for="property_advantage"> ملاحظات</label>
                                            </div>
                                        </div>


                                    </div>
                                    <!--  Tab4-Select8-->
                                    <div id="Tab4-Select9" style="display: none;">
                                        <div class="col-md-6" id="">

                                            <div class="form-group form-md-line-input form-md-floating-label">

                                                <select id="" class="form-control edited" name="condition">
                                                    <option value="Value" id=""> </option>
                                                    <option value="Value" id="">مفروش </option>
                                                    <option value="Value" id=""> خاليه </option>
                                                    <option value="Value" id=""> سويت </option>

                                                </select>

                                                <label for="condition"> نوع الشاليه </label>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group form-md-line-input form-md-floating-label">
                                                <input type="number" class="form-control" rows="4" id="property_advantage" name="property_advantage">
                                                <label for="property_advantage"> عدد الادوار </label>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group form-md-line-input form-md-floating-label">
                                                <input type="number" class="form-control" rows="4" id="property_advantage" name="property_advantage">
                                                <label for="property_advantage"> عدد الغرف </label>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group form-md-line-input form-md-floating-label">
                                                <input type="number" class="form-control" rows="4" id="property_advantage" name="property_advantage">
                                                <label for="property_advantage"> عدد الحمامات </label>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group form-md-line-input form-md-floating-label">
                                                <input type="text" class="form-control" rows="4" id="property_advantage" name="property_advantage">
                                                <label for="property_advantage"> وصف الغرفة </label>
                                            </div>
                                        </div>
                                        <div class="col-md-6" id="">

                                            <div class="form-group form-md-line-input form-md-floating-label">

                                                <select id="" class="form-control edited" name="condition">
                                                    <option value="Value" id=""> </option>
                                                    <option value="Value" id="">متوفرة </option>
                                                    <option value="Value" id="">غير متوفرة </option>
                                                </select>

                                                <label for="condition"> خدمة التكيف </label>
                                            </div>
                                        </div>
                                        <div class="col-md-6" id="">

                                            <div class="form-group form-md-line-input form-md-floating-label">

                                                <select id="" class="form-control edited" name="condition">
                                                    <option value="Value" id=""> .... </option>
                                                    <option value="Value" id=""> .... </option>
                                                    <option value="Value" id=""> .... </option>
                                                </select>

                                                <label for="condition"> نوع التشطيب </label>
                                            </div>
                                        </div>
                                        <div class="col-md-6" id="">

                                            <div class="form-group form-md-line-input form-md-floating-label">

                                                <select id="" class="form-control edited" name="condition">
                                                    <option value="Value" id=""> </option>
                                                    <option value="Value" id="">متوفرة </option>
                                                    <option value="Value" id="">غير متوفرة </option>
                                                </select>

                                                <label for="condition"> رفوف المطبخ</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6" id="">

                                            <div class="form-group form-md-line-input form-md-floating-label">

                                                <select id="" class="form-control edited" name="condition">
                                                    <option value="Value" id=""> </option>
                                                    <option value="Value" id="">متوفرة </option>
                                                    <option value="Value" id="">غير متوفرة </option>
                                                </select>

                                                <label for="condition"> بركة سباحة </label>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group form-md-line-input form-md-floating-label">
                                                <textarea class="form-control" rows="4" id="property_advantage" name="property_advantage"></textarea>
                                                <label for="property_advantage"> الاثاث الموجود</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group form-md-line-input form-md-floating-label">
                                                <textarea class="form-control" rows="4" id="property_advantage" name="property_advantage"></textarea>
                                                <label for="property_advantage"> ملاحظات</label>
                                            </div>
                                        </div>

                                    </div>
                                    <!--  Tab4-Select9-->
                                    <div id="Tab4-Select10" style="display: none;">

                                        <div class="col-md-6">
                                            <div class="form-group form-md-line-input form-md-floating-label">
                                                <input type="text" class="form-control" rows="4" id="property_advantage" name="property_advantage">
                                                <label for="property_advantage"> اسم المستودع </label>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group form-md-line-input form-md-floating-label">
                                                <input type="number" class="form-control" rows="4" id="property_advantage" name="property_advantage">
                                                <label for="property_advantage"> عدد الغرف </label>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group form-md-line-input form-md-floating-label">
                                                <input type="number" class="form-control" rows="4" id="property_advantage" name="property_advantage">
                                                <label for="property_advantage"> عدد دورات المياه </label>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group form-md-line-input form-md-floating-label">
                                                <input type="number" class="form-control" rows="4" id="property_advantage" name="property_advantage">
                                                <label for="property_advantage"> عدد المداخل </label>
                                            </div>
                                        </div>

                                        <div class="col-md-6" id="">

                                            <div class="form-group form-md-line-input form-md-floating-label">

                                                <select id="" class="form-control edited" name="condition">
                                                    <option value="Value" id=""> </option>
                                                    <option value="Value" id="">متوفرة </option>
                                                    <option value="Value" id="">غير متوفرة </option>
                                                </select>

                                                <label for="condition"> خدمة التكيف </label>
                                            </div>
                                        </div>
                                        <div class="col-md-6" id="">

                                            <div class="form-group form-md-line-input form-md-floating-label">

                                                <select id="" class="form-control edited" name="condition">
                                                    <option value="Value" id=""> </option>
                                                    <option value="Value" id="">متوفرة </option>
                                                    <option value="Value" id="">غير متوفرة </option>
                                                </select>

                                                <label for="condition"> غرفة حارس </label>
                                            </div>
                                        </div>
                                        <div class="col-md-6" id="">

                                            <div class="form-group form-md-line-input form-md-floating-label">

                                                <select id="" class="form-control edited" name="condition">
                                                    <option value="Value" id=""> </option>
                                                    <option value="Value" id="">مسلح </option>
                                                    <option value="Value" id="">هنقر </option>
                                                </select>

                                                <label for="condition"> نوع البناء</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6" id="">

                                            <div class="form-group form-md-line-input form-md-floating-label">

                                                <select id="" class="form-control edited" name="condition">
                                                    <option value="Value" id=""> </option>
                                                    <option value="Value" id="">متوفرة </option>
                                                    <option value="Value" id="">غير متوفرة </option>
                                                </select>

                                                <label for="condition"> منصة تحميل</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6" id="">

                                            <div class="form-group form-md-line-input form-md-floating-label">

                                                <select id="" class="form-control edited" name="condition">
                                                    <option value="Value" id=""> </option>
                                                    <option value="Value" id="">مستقل </option>
                                                    <option value="Value" id="">مشترك </option>
                                                </select>

                                                <label for="condition"> نوع العداد </label>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group form-md-line-input form-md-floating-label">
                                                <textarea class="form-control" rows="4" id="property_advantage" name="property_advantage"></textarea>
                                                <label for="property_advantage"> ملاحظات</label>
                                            </div>
                                        </div>



                                    </div>
                                    <!--  Tab4-Select10-->
                                    <div id="Tab4-Select11" style="display: none;">

                                        <div class="col-md-6">
                                            <div class="form-group form-md-line-input form-md-floating-label">
                                                <input type="number" class="form-control" rows="4" id="property_advantage" name="property_advantage">
                                                <label for="property_advantage"> عدد الغرف </label>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group form-md-line-input form-md-floating-label">
                                                <input type="number" class="form-control" rows="4" id="property_advantage" name="property_advantage">
                                                <label for="property_advantage"> عدد دورات المياه </label>
                                            </div>
                                        </div>
                                        <div class="col-md-6" id="">

                                            <div class="form-group form-md-line-input form-md-floating-label">

                                                <select id="" class="form-control edited" name="condition">
                                                    <option value="Value" id=""> </option>
                                                    <option value="Value" id="">لايوجد </option>
                                                    <option value="Value" id="">فيلا </option>
                                                    <option value="Value" id="">استراحة </option>
                                                    <option value="Value" id="">مستودع </option>
                                                </select>

                                                <label for="condition">نوع العقار المقام عليها</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6" id="">

                                            <div class="form-group form-md-line-input form-md-floating-label">

                                                <select id="" class="form-control edited" name="condition">
                                                    <option value="Value" id=""> </option>
                                                    <option value="Value" id="">متوفرة </option>
                                                    <option value="Value" id="">غير متوفرة </option>
                                                </select>

                                                <label for="condition"> خدمة الكهرباء </label>
                                            </div>
                                        </div>
                                        <div class="col-md-6" id="">

                                            <div class="form-group form-md-line-input form-md-floating-label">

                                                <select id="" class="form-control edited" name="condition">
                                                    <option value="Value" id=""> </option>
                                                    <option value="Value" id="">متوفرة </option>
                                                    <option value="Value" id="">غير متوفرة </option>
                                                </select>

                                                <label for="condition"> خدمة الاسفلت </label>
                                            </div>
                                        </div>
                                        <div class="col-md-6" id="">

                                            <div class="form-group form-md-line-input form-md-floating-label">

                                                <select id="" class="form-control edited" name="condition">
                                                    <option value="Value" id=""> </option>
                                                    <option value="Value" id="">متوفرة </option>
                                                    <option value="Value" id="">غير متوفرة </option>
                                                </select>

                                                <label for="condition"> بئر ماء </label>
                                            </div>
                                        </div>
                                        <div class="col-md-6" id="">

                                            <div class="form-group form-md-line-input form-md-floating-label">

                                                <select id="" class="form-control edited" name="condition">
                                                    <option value="Value" id=""> </option>
                                                    <option value="Value" id="">متوفرة </option>
                                                    <option value="Value" id="">غير متوفرة </option>
                                                </select>

                                                <label for="condition">مستودع</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6" id="">

                                            <div class="form-group form-md-line-input form-md-floating-label">

                                                <select id="" class="form-control edited" name="condition">
                                                    <option value="Value" id=""> </option>
                                                    <option value="Value" id="">متوفرة </option>
                                                    <option value="Value" id="">غير متوفرة </option>
                                                </select>

                                                <label for="condition">غرفة المواشي</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group form-md-line-input form-md-floating-label">
                                                <textarea class="form-control" rows="4" id="property_advantage" name="property_advantage"></textarea>
                                                <label for="property_advantage"> مرافق اخري</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group form-md-line-input form-md-floating-label">
                                                <textarea class="form-control" rows="4" id="property_advantage" name="property_advantage"></textarea>
                                                <label for="property_advantage"> ملاحظات</label>
                                            </div>
                                        </div>


                                    </div>
                                    <!--  Tab4-Select11-->
                                    <div id="Tab4-Select12" style="display: none;">
                                        <div class="col-md-6">
                                            <div class="form-group form-md-line-input form-md-floating-label">
                                                <input type="number" class="form-control" rows="4" id="property_advantage" name="property_advantage">
                                                <label for="property_advantage"> عدد المحلات </label>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group form-md-line-input form-md-floating-label">
                                                <input type="number" class="form-control" rows="4" id="property_advantage" name="property_advantage">
                                                <label for="property_advantage"> عدد دورات المياه </label>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group form-md-line-input form-md-floating-label">
                                                <input type="number" class="form-control" rows="4" id="property_advantage" name="property_advantage">
                                                <label for="property_advantage"> عدد مكائن الوقود </label>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group form-md-line-input form-md-floating-label">
                                                <input type="number" class="form-control" rows="4" id="property_advantage" name="property_advantage">
                                                <label for="property_advantage"> عدد الغرف السكن </label>
                                            </div>
                                        </div>
                                        <div class="col-md-6" id="">

                                            <div class="form-group form-md-line-input form-md-floating-label">

                                                <select id="" class="form-control edited" name="condition">
                                                    <option value="Value" id=""> </option>
                                                    <option value="Value" id="">متوفرة </option>
                                                    <option value="Value" id="">غير متوفرة </option>
                                                </select>

                                                <label for="condition"> مصلي </label>
                                            </div>
                                        </div>
                                        <div class="col-md-6" id="">

                                            <div class="form-group form-md-line-input form-md-floating-label">

                                                <select id="" class="form-control edited" name="condition">
                                                    <option value="Value" id=""> </option>
                                                    <option value="Value" id="">متوفرة </option>
                                                    <option value="Value" id="">غير متوفرة </option>
                                                </select>

                                                <label for="condition"> نوع البناء </label>
                                            </div>
                                        </div>
                                        <div class="col-md-6" id="">

                                            <div class="form-group form-md-line-input form-md-floating-label">

                                                <select id="" class="form-control edited" name="condition">
                                                    <option value="Value" id=""> </option>
                                                    <option value="Value" id="">متوفرة </option>
                                                    <option value="Value" id="">غير متوفرة </option>
                                                </select>

                                                <label for="condition"> مغسلة السيارات </label>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group form-md-line-input form-md-floating-label">
                                                <textarea class="form-control" rows="4" id="property_advantage" name="property_advantage"></textarea>
                                                <label for="property_advantage"> ملاحظات</label>
                                            </div>
                                        </div>



                                    </div>
                                    <!--  Tab4-Select12-->
                                    <div id="Tab4-Select13" style="display: none;">
                                        <div class="col-md-6" id="">
                                            <div class="form-group form-md-line-input form-md-floating-label">
                                                <select id="" class="form-control edited" name="condition">
                                                    <option value="Value" id=""> </option>
                                                    <option value="Value" id=""> .....</option>
                                                    <option value="Value" id=""> .....</option>
                                                </select>
                                                <label for="condition"> نوع الاستراحة </label>
                                            </div>
                                        </div>
                                        <div class="col-md-6" id="">
                                            <div class="form-group form-md-line-input form-md-floating-label">
                                                <select id="" class="form-control edited" name="condition">
                                                    <option value="Value" id=""> </option>
                                                    <option value="Value" id=""> .....</option>
                                                    <option value="Value" id=""> .....</option>
                                                </select>
                                                <label for="condition"> تصريح الاستراحة </label>
                                            </div>
                                        </div>
                                        <div class="col-md-6" id="">
                                            <div class="form-group form-md-line-input form-md-floating-label">
                                                <select id="" class="form-control edited" name="condition">
                                                    <option value="Value" id=""> </option>
                                                    <option value="Value" id=""> .....</option>
                                                    <option value="Value" id=""> .....</option>
                                                </select>
                                                <label for="condition"> عدد الغرف</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6" id="">
                                            <div class="form-group form-md-line-input form-md-floating-label">
                                                <select id="" class="form-control edited" name="condition">
                                                    <option value="Value" id=""> </option>
                                                    <option value="Value" id=""> .....</option>
                                                    <option value="Value" id=""> .....</option>
                                                </select>
                                                <label for="condition"> عدد الحمامات</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6" id="">
                                            <div class="form-group form-md-line-input form-md-floating-label">
                                                <select id="" class="form-control edited" name="condition">
                                                    <option value="Value" id=""> </option>
                                                    <option value="Value" id=""> .....</option>
                                                    <option value="Value" id=""> .....</option>
                                                </select>
                                                <label for="condition"> عدد المطابخ</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6" id="">
                                            <div class="form-group form-md-line-input form-md-floating-label">
                                                <select id="" class="form-control edited" name="condition">
                                                    <option value="Value" id=""> </option>
                                                    <option value="Value" id=""> .....</option>
                                                    <option value="Value" id=""> .....</option>
                                                </select>
                                                <label for="condition"> عدد المداخل</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6" id="">
                                            <div class="form-group form-md-line-input form-md-floating-label">
                                                <select id="" class="form-control edited" name="condition">
                                                    <option value="Value" id=""> </option>
                                                    <option value="Value" id=""> .....</option>
                                                    <option value="Value" id=""> .....</option>
                                                </select>
                                                <label for="condition"> المسبح</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6" id="">
                                            <div class="form-group form-md-line-input form-md-floating-label">
                                                <select id="" class="form-control edited" name="condition">
                                                    <option value="Value" id=""> </option>
                                                    <option value="Value" id=""> .....</option>
                                                    <option value="Value" id=""> .....</option>
                                                </select>
                                                <label for="condition"> حديقة </label>
                                            </div>
                                        </div>
                                        <div class="col-md-6" id="">
                                            <div class="form-group form-md-line-input form-md-floating-label">
                                                <select id="" class="form-control edited" name="condition">
                                                    <option value="Value" id=""> </option>
                                                    <option value="Value" id=""> .....</option>
                                                    <option value="Value" id=""> .....</option>
                                                </select>
                                                <label for="condition"> ملعب </label>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group form-md-line-input form-md-floating-label">
                                                <textarea class="form-control" rows="4" id="property_advantage" name="property_advantage"></textarea>
                                                <label for="property_advantage"> وصف قسم الرجال</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group form-md-line-input form-md-floating-label">
                                                <textarea class="form-control" rows="4" id="property_advantage" name="property_advantage"></textarea>
                                                <label for="property_advantage"> وصف قسم النساء</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group form-md-line-input form-md-floating-label">
                                                <textarea class="form-control" rows="4" id="property_advantage" name="property_advantage"></textarea>
                                                <label for="property_advantage"> ملاحظات</label>
                                            </div>
                                        </div>




                                    </div>
                                    <!--  Tab4-Select13-->
                                    <div id="Tab4-Select14" style="display: none;">

                                        <div class="col-md-6">
                                            <div class="form-group form-md-line-input form-md-floating-label has-error">
                                                <input type="number" class="form-control" id="price" name="price" placeholder="" required="" aria-required="true">
                                                <span id="country-error" class="help-block help-block-error">ملحوظة : ادخل عدد القطع ثم اضغط علي اضافة</span>
                                                <label for="country">عدد القطع </label>
                                            </div>
                                            <input type="submit" class="btn blue" value="اضافة">
                                        </div>

                                        <div class="col-md-6" id="">

                                            <div class="form-group form-md-line-input form-md-floating-label">

                                                <select id="" class="form-control edited" name="condition">
                                                    <option value="Value" id=""> </option>
                                                    <option value="Value" id="">متوفرة </option>
                                                    <option value="Value" id="">غير متوفرة </option>
                                                </select>

                                                <label for="condition"> خدمة الانارة </label>
                                            </div>
                                        </div>
                                        <div class="col-md-6" id="">

                                            <div class="form-group form-md-line-input form-md-floating-label">

                                                <select id="" class="form-control edited" name="condition">
                                                    <option value="Value" id=""> </option>
                                                    <option value="Value" id="">متوفرة </option>
                                                    <option value="Value" id="">غير متوفرة </option>
                                                </select>

                                                <label for="condition"> خدمة الماء </label>
                                            </div>
                                        </div>
                                        <div class="col-md-6" id="">

                                            <div class="form-group form-md-line-input form-md-floating-label">

                                                <select id="" class="form-control edited" name="condition">
                                                    <option value="Value" id=""> </option>
                                                    <option value="Value" id="">متوفرة </option>
                                                    <option value="Value" id="">غير متوفرة </option>
                                                </select>

                                                <label for="condition"> خدمة الاسفلت </label>
                                            </div>
                                        </div>
                                        <div class="col-md-6" id="">

                                            <div class="form-group form-md-line-input form-md-floating-label">

                                                <select id="" class="form-control edited" name="condition">
                                                    <option value="Value" id=""> </option>
                                                    <option value="Value" id="">متوفرة </option>
                                                    <option value="Value" id="">غير متوفرة </option>
                                                </select>

                                                <label for="condition"> خدمة الكهرباء </label>
                                            </div>
                                        </div>

                                        <div class="col-md-12" id="">

                                            <div class="form-group form-md-line-input form-md-floating-label">

                                                <select id="" class="form-control edited" name="condition">
                                                    <option value="Value" id=""> </option>
                                                    <option value="Value" id="">متوفرة </option>
                                                    <option value="Value" id="">غير متوفرة </option>
                                                </select>

                                                <label for="condition"> خدمة التصريف </label>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group form-md-line-input form-md-floating-label">
                                                <textarea class="form-control" rows="4" id="property_advantage" name="property_advantage"></textarea>
                                                <label for="property_advantage"> مرافق اخري </label>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group form-md-line-input form-md-floating-label">
                                                <textarea class="form-control" rows="4" id="property_advantage" name="property_advantage"></textarea>
                                                <label for="property_advantage"> ملاحظات</label>
                                            </div>
                                        </div>
                                        <table>
                                            <thead>
                                                <tr>
                                                    <th class="mdl-data-table__cell--non-numeric">القطعة رقم :1</th>

                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>

                                                    <td class="mdl-data-table__cell--non-numeric">

                                                        <div class="col-md-6">
                                                            <div class="form-group form-md-line-input form-md-floating-label">
                                                                <input type="number" class="form-control" id="property_name" name="property_name" placeholder="" value="">
                                                                <label for="property_name">رقم القطعة</label>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group form-md-line-input form-md-floating-label">
                                                                <input type="number" class="form-control" id="property_name" name="property_name" placeholder="" value="">
                                                                <label for="property_name">مساحتها</label>
                                                            </div>

                                                        </div>
                                                        <div class="col-md-6" id="">

                                                            <div class="form-group form-md-line-input form-md-floating-label">
                                                                <select id="" class="form-control edited" name="condition">
                                                                    <option value="Value" id=""> </option>
                                                                    <option value="Value" id="">متر </option>
                                                                    <option value="Value" id="">قدم </option>
                                                                    <option value="Value" id="">انش </option>
                                                                </select>
                                                                <label for="condition">وحدة القياس </label>
                                                            </div>
                                                        </div>

                                                        <div class="col-md-6">
                                                            <div class="form-group form-md-line-input form-md-floating-label">
                                                                <textarea class="form-control" rows="1" id="property_advantage" name="property_advantage"></textarea>
                                                                <label for="property_advantage"> ملاحظات</label>
                                                            </div>
                                                        </div>

                                                    </td>

                                                </tr>

                                            </tbody>
                                        </table>
                                        <table>
                                            <thead>
                                                <tr>
                                                    <th class="mdl-data-table__cell--non-numeric">القطعة رقم :2</th>

                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>

                                                    <td class="mdl-data-table__cell--non-numeric">

                                                        <div class="col-md-6">
                                                            <div class="form-group form-md-line-input form-md-floating-label">
                                                                <input type="number" class="form-control" id="property_name" name="property_name" placeholder="" value="">
                                                                <label for="property_name">رقم القطعة</label>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group form-md-line-input form-md-floating-label">
                                                                <input type="number" class="form-control" id="property_name" name="property_name" placeholder="" value="">
                                                                <label for="property_name">مساحتها</label>
                                                            </div>

                                                        </div>
                                                        <div class="col-md-6" id="">

                                                            <div class="form-group form-md-line-input form-md-floating-label">
                                                                <select id="" class="form-control edited" name="condition">
                                                                    <option value="Value" id=""> </option>
                                                                    <option value="Value" id="">متر </option>
                                                                    <option value="Value" id="">قدم </option>
                                                                    <option value="Value" id="">انش </option>
                                                                </select>
                                                                <label for="condition">وحدة القياس </label>
                                                            </div>
                                                        </div>

                                                        <div class="col-md-6">
                                                            <div class="form-group form-md-line-input form-md-floating-label">
                                                                <textarea class="form-control" rows="1" id="property_advantage" name="property_advantage"></textarea>
                                                                <label for="property_advantage"> ملاحظات</label>
                                                            </div>
                                                        </div>

                                                    </td>

                                                </tr>

                                            </tbody>
                                        </table>
                                        <table>
                                            <thead>
                                                <tr>
                                                    <th class="mdl-data-table__cell--non-numeric">القطعة رقم :3</th>

                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>

                                                    <td class="mdl-data-table__cell--non-numeric">

                                                        <div class="col-md-6">
                                                            <div class="form-group form-md-line-input form-md-floating-label">
                                                                <input type="number" class="form-control" id="property_name" name="property_name" placeholder="" value="">
                                                                <label for="property_name">رقم القطعة</label>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group form-md-line-input form-md-floating-label">
                                                                <input type="number" class="form-control" id="property_name" name="property_name" placeholder="" value="">
                                                                <label for="property_name">مساحتها</label>
                                                            </div>

                                                        </div>
                                                        <div class="col-md-6" id="">

                                                            <div class="form-group form-md-line-input form-md-floating-label">
                                                                <select id="" class="form-control edited" name="condition">
                                                                    <option value="Value" id=""> </option>
                                                                    <option value="Value" id="">متر </option>
                                                                    <option value="Value" id="">قدم </option>
                                                                    <option value="Value" id="">انش </option>
                                                                </select>
                                                                <label for="condition">وحدة القياس </label>
                                                            </div>
                                                        </div>

                                                        <div class="col-md-6">
                                                            <div class="form-group form-md-line-input form-md-floating-label">
                                                                <textarea class="form-control" rows="1" id="property_advantage" name="property_advantage"></textarea>
                                                                <label for="property_advantage"> ملاحظات</label>
                                                            </div>
                                                        </div>

                                                    </td>

                                                </tr>

                                            </tbody>
                                        </table>



                                    </div>
                                    <!--  Tab4-Select14-->
                                </div>
                                <!-- End tab 4  -->





                                <!-- --------------------------------- -->

                                <div class="tab-pane" id="tab5">

                                    <div id="Tab5-Select1" style="display: none;">
                                        <div>
                                            <h3 class="block">الموجـز </h3>
                                            <div>
                                                <h4 class="form-section">بيانات العقار الاساسية</h4>
                                            </div>
                                            <div class="form-group">

                                                <div class="col-md-12">
                                                    <label class="control-label col-md-3">اسم العقار:</label>
                                                    <p class="form-control-static" data-display="property_name"> </p>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="col-md-12">
                                                    <label class="control-label col-md-3">نوع العقار:</label>
                                                    <p class="form-control-static" data-display="property_type"> </p>
                                                </div>
                                            </div>
                                            <div class="form-group">

                                                <div class="col-md-12">
                                                    <label class="control-label col-md-3">سنة البناء:</label>
                                                    <p class="form-control-static" data-display="property_type"> </p>
                                                </div>
                                            </div>
                                            <div class="form-group">

                                                <div class="col-md-12">
                                                    <label class="control-label col-md-3">عدد الوحدات:</label>
                                                    <p class="form-control-static" data-display="number_of_units"> </p>
                                                </div>
                                            </div>
                                            <div class="form-group">

                                                <div class="col-md-12">
                                                    <label class="control-label col-md-3">تقييم:</label>
                                                    <p class="form-control-static" data-display="evaluation"> </p>
                                                </div>
                                            </div>
                                            <div class="form-group">

                                                <div class="col-md-12">
                                                    <label class="control-label col-md-3">مميزات العقار:</label>
                                                    <p class="form-control-static" data-display="property_advantage"> </p>
                                                </div>
                                            </div>

                                            <div class="form-group">

                                                <div class="col-md-12">
                                                    <label class="control-label col-md-3">نوع العقار:</label>
                                                    <p class="form-control-static" data-display="scheme_numer"> </p>
                                                </div>
                                            </div>
                                            <div class="form-group">

                                                <div class="col-md-12">
                                                    <label class="control-label col-md-3">وضع العقار:</label>
                                                    <p class="form-control-static" data-display="condition"> </p>
                                                </div>
                                            </div>
                                            <div class="form-group">

                                                <div class="col-md-12">
                                                    <label class="control-label col-md-3">طريقة ادارة الاملاك:</label>
                                                    <p class="form-control-static" data-display="management_type"> </p>
                                                </div>
                                            </div>
                                            <div class="form-group">

                                                <div class="col-md-12">
                                                    <label class="control-label col-md-3">المبلغ:</label>
                                                    <p class="form-control-static" data-display="commission"> </p>
                                                </div>
                                            </div>
                                            <div class="form-group">

                                                <div class="col-md-12">
                                                    <label class="control-label col-md-3">نوع العرض:</label>
                                                    <p class="form-control-static" data-display="offer_type"> </p>
                                                </div>
                                            </div>


                                            <div>
                                                <h4 class="form-section">بيانات العقار الثانوية</h4>
                                            </div>
                                            <div class="form-group">

                                                <div class="col-md-12">
                                                    <label class="control-label col-md-3">السعر:</label>
                                                    <p class="form-control-static" data-display="price"> </p>
                                                </div>
                                            </div>
                                            <div class="form-group">

                                                <div class="col-md-12">
                                                    <label class="control-label col-md-3">سعر المتر:</label>
                                                    <p class="form-control-static" data-display="meter_price"> </p>
                                                </div>
                                            </div>
                                            <div class="form-group">

                                                <div class="col-md-12">
                                                    <label class="control-label col-md-3">حد التفاوض:</label>
                                                    <p class="form-control-static" data-display="negotiating_boundary"> </p>
                                                </div>
                                            </div>
                                            <div class="form-group">

                                                <div class="col-md-12">
                                                    <label class="control-label col-md-3">الدولة:</label>
                                                    <p class="form-control-static" data-display="country"> </p>
                                                </div>
                                            </div>
                                            <div class="form-group">

                                                <div class="col-md-12">
                                                    <label class="control-label col-md-3">المدينة:</label>
                                                    <p class="form-control-static" data-display="city"> </p>
                                                </div>
                                            </div>
                                            <div class="form-group">

                                                <div class="col-md-12">
                                                    <label class="control-label col-md-3">الحي:</label>
                                                    <p class="form-control-static" data-display="district"> </p>
                                                </div>
                                            </div>
                                            <div class="form-group">

                                                <div class="col-md-12">
                                                    <label class="control-label col-md-3">الشارع:</label>
                                                    <p class="form-control-static" data-display="street"> </p>
                                                </div>
                                            </div>

                                            <div class="form-group">

                                                <div class="col-md-12">
                                                    <label class="control-label col-md-3">العنوان:</label>
                                                    <p class="form-control-static" data-display="address"> </p>
                                                </div>
                                            </div>
                                            <div class="form-group">

                                                <div class="col-md-12">
                                                    <label class="control-label col-md-3">رقم عداد المياة:</label>
                                                    <p class="form-control-static" data-display="water_meter_number"> </p>
                                                </div>
                                            </div>
                                            <div class="form-group">

                                                <div class="col-md-12">
                                                    <label class="control-label col-md-3">رقم عداد الكهرباء:</label>
                                                    <p class="form-control-static" data-display="electricity_meter_number"> </p>
                                                </div>
                                            </div>
                                            <div class="form-group">

                                                <div class="col-md-12">
                                                    <label class="control-label col-md-3">المساحة الاجمالية:</label>
                                                    <p class="form-control-static" data-display="total_area"> </p>
                                                </div>
                                            </div>
                                            <div class="form-group">

                                                <div class="col-md-12">
                                                    <label class="control-label col-md-3">الشارع:</label>
                                                    <p class="form-control-static" data-display="street"> </p>
                                                </div>
                                            </div>
                                            <div class="form-group">

                                                <div class="col-md-12">
                                                    <label class="control-label col-md-3">مساحة البناء:</label>
                                                    <p class="form-control-static" data-display="construction_area"> </p>
                                                </div>
                                            </div>
                                            <div class="form-group">

                                                <div class="col-md-12">
                                                    <label class="control-label col-md-3">اتجاه العقار:</label>
                                                    <p class="form-control-static" data-display="property_direction"> </p>
                                                </div>
                                            </div>
                                            <div>
                                                <h4 class="form-section">تزويد بيانات المالك</h4>
                                            </div>
                                            <div class="form-group">

                                                <div class="col-md-12">
                                                    <label class="control-label col-md-3">اسم المالك:</label>
                                                    <p class="form-control-static" data-display="owner_name"> </p>
                                                </div>
                                            </div>

                                            <div class="form-group">

                                                <div class="col-md-12">
                                                    <label class="control-label col-md-3">رقم العقار:</label>
                                                    <p class="form-control-static" data-display="property_number"> </p>
                                                </div>
                                            </div>
                                            <div class="form-group">

                                                <div class="col-md-12">
                                                    <label class="control-label col-md-3">رقم الصك:</label>
                                                    <p class="form-control-static" data-display="instrument_number"> </p>
                                                </div>
                                            </div>
                                            <div class="form-group">

                                                <div class="col-md-12">
                                                    <label class="control-label col-md-3">تاريخ الصك:</label>
                                                    <p class="form-control-static" data-display="instrument_date"> </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Tab5-Select1  -->




                                    <div id="Tab5-Select2" style="display: none;">

                                        <div>
                                            <h3 class="block">الموجـز </h3>
                                            <div>
                                                <h4 class="form-section">بيانات العقار الاساسية</h4>
                                            </div>
                                            <div class="form-group">

                                                <div class="col-md-12">
                                                    <label class="control-label col-md-3">اسم العقار:</label>
                                                    <p class="form-control-static" data-display="property_name"> </p>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="col-md-12">
                                                    <label class="control-label col-md-3">نوع العقار:</label>
                                                    <p class="form-control-static" data-display="property_type"> </p>
                                                </div>
                                            </div>
                                            <div class="form-group">

                                                <div class="col-md-12">
                                                    <label class="control-label col-md-3">سنة البناء:</label>
                                                    <p class="form-control-static" data-display="property_type"> </p>
                                                </div>
                                            </div>
                                            <div class="form-group">

                                                <div class="col-md-12">
                                                    <label class="control-label col-md-3">عدد الوحدات:</label>
                                                    <p class="form-control-static" data-display="number_of_units"> </p>
                                                </div>
                                            </div>
                                            <div class="form-group">

                                                <div class="col-md-12">
                                                    <label class="control-label col-md-3">تقييم:</label>
                                                    <p class="form-control-static" data-display="evaluation"> </p>
                                                </div>
                                            </div>
                                            <div class="form-group">

                                                <div class="col-md-12">
                                                    <label class="control-label col-md-3">مميزات العقار:</label>
                                                    <p class="form-control-static" data-display="property_advantage"> </p>
                                                </div>
                                            </div>

                                            <div class="form-group">

                                                <div class="col-md-12">
                                                    <label class="control-label col-md-3">نوع العقار:</label>
                                                    <p class="form-control-static" data-display="scheme_numer"> </p>
                                                </div>
                                            </div>
                                            <div class="form-group">

                                                <div class="col-md-12">
                                                    <label class="control-label col-md-3">وضع العقار:</label>
                                                    <p class="form-control-static" data-display="condition"> </p>
                                                </div>
                                            </div>
                                            <div class="form-group">

                                                <div class="col-md-12">
                                                    <label class="control-label col-md-3">طريقة ادارة الاملاك:</label>
                                                    <p class="form-control-static" data-display="management_type"> </p>
                                                </div>
                                            </div>
                                            <div class="form-group">

                                                <div class="col-md-12">
                                                    <label class="control-label col-md-3">المبلغ:</label>
                                                    <p class="form-control-static" data-display="commission"> </p>
                                                </div>
                                            </div>
                                            <div class="form-group">

                                                <div class="col-md-12">
                                                    <label class="control-label col-md-3">نوع العرض:</label>
                                                    <p class="form-control-static" data-display="offer_type"> </p>
                                                </div>
                                            </div>


                                            <div>
                                                <h4 class="form-section">بيانات العقار الثانوية</h4>
                                            </div>
                                            <div class="form-group">

                                                <div class="col-md-12">
                                                    <label class="control-label col-md-3">السعر:</label>
                                                    <p class="form-control-static" data-display="price"> </p>
                                                </div>
                                            </div>
                                            <div class="form-group">

                                                <div class="col-md-12">
                                                    <label class="control-label col-md-3">سعر المتر:</label>
                                                    <p class="form-control-static" data-display="meter_price"> </p>
                                                </div>
                                            </div>
                                            <div class="form-group">

                                                <div class="col-md-12">
                                                    <label class="control-label col-md-3">حد التفاوض:</label>
                                                    <p class="form-control-static" data-display="negotiating_boundary"> </p>
                                                </div>
                                            </div>
                                            <div class="form-group">

                                                <div class="col-md-12">
                                                    <label class="control-label col-md-3">الدولة:</label>
                                                    <p class="form-control-static" data-display="country"> </p>
                                                </div>
                                            </div>
                                            <div class="form-group">

                                                <div class="col-md-12">
                                                    <label class="control-label col-md-3">المدينة:</label>
                                                    <p class="form-control-static" data-display="city"> </p>
                                                </div>
                                            </div>
                                            <div class="form-group">

                                                <div class="col-md-12">
                                                    <label class="control-label col-md-3">الحي:</label>
                                                    <p class="form-control-static" data-display="district"> </p>
                                                </div>
                                            </div>
                                            <div class="form-group">

                                                <div class="col-md-12">
                                                    <label class="control-label col-md-3">الشارع:</label>
                                                    <p class="form-control-static" data-display="street"> </p>
                                                </div>
                                            </div>

                                            <div class="form-group">

                                                <div class="col-md-12">
                                                    <label class="control-label col-md-3">العنوان:</label>
                                                    <p class="form-control-static" data-display="address"> </p>
                                                </div>
                                            </div>
                                            <div class="form-group">

                                                <div class="col-md-12">
                                                    <label class="control-label col-md-3">رقم عداد المياة:</label>
                                                    <p class="form-control-static" data-display="water_meter_number"> </p>
                                                </div>
                                            </div>
                                            <div class="form-group">

                                                <div class="col-md-12">
                                                    <label class="control-label col-md-3">رقم عداد الكهرباء:</label>
                                                    <p class="form-control-static" data-display="electricity_meter_number"> </p>
                                                </div>
                                            </div>
                                            <div class="form-group">

                                                <div class="col-md-12">
                                                    <label class="control-label col-md-3">المساحة الاجمالية:</label>
                                                    <p class="form-control-static" data-display="total_area"> </p>
                                                </div>
                                            </div>
                                            <div class="form-group">

                                                <div class="col-md-12">
                                                    <label class="control-label col-md-3">الشارع:</label>
                                                    <p class="form-control-static" data-display="street"> </p>
                                                </div>
                                            </div>
                                            <div class="form-group">

                                                <div class="col-md-12">
                                                    <label class="control-label col-md-3">مساحة البناء:</label>
                                                    <p class="form-control-static" data-display="construction_area"> </p>
                                                </div>
                                            </div>
                                            <div class="form-group">

                                                <div class="col-md-12">
                                                    <label class="control-label col-md-3">اتجاه العقار:</label>
                                                    <p class="form-control-static" data-display="property_direction"> </p>
                                                </div>
                                            </div>
                                            <div>
                                                <h4 class="form-section">تزويد بيانات المالك</h4>
                                            </div>
                                            <div class="form-group">

                                                <div class="col-md-12">
                                                    <label class="control-label col-md-3">اسم المالك:</label>
                                                    <p class="form-control-static" data-display="owner_name"> </p>
                                                </div>
                                            </div>

                                            <div class="form-group">

                                                <div class="col-md-12">
                                                    <label class="control-label col-md-3">رقم العقار:</label>
                                                    <p class="form-control-static" data-display="property_number"> </p>
                                                </div>
                                            </div>
                                            <div class="form-group">

                                                <div class="col-md-12">
                                                    <label class="control-label col-md-3">رقم الصك:</label>
                                                    <p class="form-control-static" data-display="instrument_number"> </p>
                                                </div>
                                            </div>
                                            <div class="form-group">

                                                <div class="col-md-12">
                                                    <label class="control-label col-md-3">تاريخ الصك:</label>
                                                    <p class="form-control-static" data-display="instrument_date"> </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Tab5-Select2  -->
                                    <div id="Tab5-Select3" style="display: none;">

                                        <div>
                                            <h3 class="block">الموجـز </h3>
                                            <div>
                                                <h4 class="form-section">بيانات العقار الاساسية</h4>
                                            </div>
                                            <div class="form-group">

                                                <div class="col-md-12">
                                                    <label class="control-label col-md-3">اسم العقار:</label>
                                                    <p class="form-control-static" data-display="property_name"> </p>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="col-md-12">
                                                    <label class="control-label col-md-3">نوع العقار:</label>
                                                    <p class="form-control-static" data-display="property_type"> </p>
                                                </div>
                                            </div>
                                            <div class="form-group">

                                                <div class="col-md-12">
                                                    <label class="control-label col-md-3">سنة البناء:</label>
                                                    <p class="form-control-static" data-display="property_type"> </p>
                                                </div>
                                            </div>
                                            <div class="form-group">

                                                <div class="col-md-12">
                                                    <label class="control-label col-md-3">عدد الوحدات:</label>
                                                    <p class="form-control-static" data-display="number_of_units"> </p>
                                                </div>
                                            </div>
                                            <div class="form-group">

                                                <div class="col-md-12">
                                                    <label class="control-label col-md-3">تقييم:</label>
                                                    <p class="form-control-static" data-display="evaluation"> </p>
                                                </div>
                                            </div>
                                            <div class="form-group">

                                                <div class="col-md-12">
                                                    <label class="control-label col-md-3">مميزات العقار:</label>
                                                    <p class="form-control-static" data-display="property_advantage"> </p>
                                                </div>
                                            </div>

                                            <div class="form-group">

                                                <div class="col-md-12">
                                                    <label class="control-label col-md-3">نوع العقار:</label>
                                                    <p class="form-control-static" data-display="scheme_numer"> </p>
                                                </div>
                                            </div>
                                            <div class="form-group">

                                                <div class="col-md-12">
                                                    <label class="control-label col-md-3">وضع العقار:</label>
                                                    <p class="form-control-static" data-display="condition"> </p>
                                                </div>
                                            </div>
                                            <div class="form-group">

                                                <div class="col-md-12">
                                                    <label class="control-label col-md-3">طريقة ادارة الاملاك:</label>
                                                    <p class="form-control-static" data-display="management_type"> </p>
                                                </div>
                                            </div>
                                            <div class="form-group">

                                                <div class="col-md-12">
                                                    <label class="control-label col-md-3">المبلغ:</label>
                                                    <p class="form-control-static" data-display="commission"> </p>
                                                </div>
                                            </div>
                                            <div class="form-group">

                                                <div class="col-md-12">
                                                    <label class="control-label col-md-3">نوع العرض:</label>
                                                    <p class="form-control-static" data-display="offer_type"> </p>
                                                </div>
                                            </div>


                                            <div>
                                                <h4 class="form-section">بيانات العقار الثانوية</h4>
                                            </div>
                                            <div class="form-group">

                                                <div class="col-md-12">
                                                    <label class="control-label col-md-3">السعر:</label>
                                                    <p class="form-control-static" data-display="price"> </p>
                                                </div>
                                            </div>
                                            <div class="form-group">

                                                <div class="col-md-12">
                                                    <label class="control-label col-md-3">سعر المتر:</label>
                                                    <p class="form-control-static" data-display="meter_price"> </p>
                                                </div>
                                            </div>
                                            <div class="form-group">

                                                <div class="col-md-12">
                                                    <label class="control-label col-md-3">حد التفاوض:</label>
                                                    <p class="form-control-static" data-display="negotiating_boundary"> </p>
                                                </div>
                                            </div>
                                            <div class="form-group">

                                                <div class="col-md-12">
                                                    <label class="control-label col-md-3">الدولة:</label>
                                                    <p class="form-control-static" data-display="country"> </p>
                                                </div>
                                            </div>
                                            <div class="form-group">

                                                <div class="col-md-12">
                                                    <label class="control-label col-md-3">المدينة:</label>
                                                    <p class="form-control-static" data-display="city"> </p>
                                                </div>
                                            </div>
                                            <div class="form-group">

                                                <div class="col-md-12">
                                                    <label class="control-label col-md-3">الحي:</label>
                                                    <p class="form-control-static" data-display="district"> </p>
                                                </div>
                                            </div>
                                            <div class="form-group">

                                                <div class="col-md-12">
                                                    <label class="control-label col-md-3">الشارع:</label>
                                                    <p class="form-control-static" data-display="street"> </p>
                                                </div>
                                            </div>

                                            <div class="form-group">

                                                <div class="col-md-12">
                                                    <label class="control-label col-md-3">العنوان:</label>
                                                    <p class="form-control-static" data-display="address"> </p>
                                                </div>
                                            </div>
                                            <div class="form-group">

                                                <div class="col-md-12">
                                                    <label class="control-label col-md-3">رقم عداد المياة:</label>
                                                    <p class="form-control-static" data-display="water_meter_number"> </p>
                                                </div>
                                            </div>
                                            <div class="form-group">

                                                <div class="col-md-12">
                                                    <label class="control-label col-md-3">رقم عداد الكهرباء:</label>
                                                    <p class="form-control-static" data-display="electricity_meter_number"> </p>
                                                </div>
                                            </div>
                                            <div class="form-group">

                                                <div class="col-md-12">
                                                    <label class="control-label col-md-3">المساحة الاجمالية:</label>
                                                    <p class="form-control-static" data-display="total_area"> </p>
                                                </div>
                                            </div>
                                            <div class="form-group">

                                                <div class="col-md-12">
                                                    <label class="control-label col-md-3">الشارع:</label>
                                                    <p class="form-control-static" data-display="street"> </p>
                                                </div>
                                            </div>
                                            <div class="form-group">

                                                <div class="col-md-12">
                                                    <label class="control-label col-md-3">مساحة البناء:</label>
                                                    <p class="form-control-static" data-display="construction_area"> </p>
                                                </div>
                                            </div>
                                            <div class="form-group">

                                                <div class="col-md-12">
                                                    <label class="control-label col-md-3">اتجاه العقار:</label>
                                                    <p class="form-control-static" data-display="property_direction"> </p>
                                                </div>
                                            </div>
                                            <div>
                                                <h4 class="form-section">تزويد بيانات المالك</h4>
                                            </div>
                                            <div class="form-group">

                                                <div class="col-md-12">
                                                    <label class="control-label col-md-3">اسم المالك:</label>
                                                    <p class="form-control-static" data-display="owner_name"> </p>
                                                </div>
                                            </div>

                                            <div class="form-group">

                                                <div class="col-md-12">
                                                    <label class="control-label col-md-3">رقم العقار:</label>
                                                    <p class="form-control-static" data-display="property_number"> </p>
                                                </div>
                                            </div>
                                            <div class="form-group">

                                                <div class="col-md-12">
                                                    <label class="control-label col-md-3">رقم الصك:</label>
                                                    <p class="form-control-static" data-display="instrument_number"> </p>
                                                </div>
                                            </div>
                                            <div class="form-group">

                                                <div class="col-md-12">
                                                    <label class="control-label col-md-3">تاريخ الصك:</label>
                                                    <p class="form-control-static" data-display="instrument_date"> </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Tab5-Select3  -->
                                    <div id="Tab5-Select4" style="display: none;">

                                        <div>
                                            <h3 class="block">الموجـز </h3>
                                            <div>
                                                <h4 class="form-section">بيانات العقار الاساسية</h4>
                                            </div>
                                            <div class="form-group">

                                                <div class="col-md-12">
                                                    <label class="control-label col-md-3">اسم العقار:</label>
                                                    <p class="form-control-static" data-display="property_name"> </p>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="col-md-12">
                                                    <label class="control-label col-md-3">نوع العقار:</label>
                                                    <p class="form-control-static" data-display="property_type"> </p>
                                                </div>
                                            </div>
                                            <div class="form-group">

                                                <div class="col-md-12">
                                                    <label class="control-label col-md-3">سنة البناء:</label>
                                                    <p class="form-control-static" data-display="property_type"> </p>
                                                </div>
                                            </div>
                                            <div class="form-group">

                                                <div class="col-md-12">
                                                    <label class="control-label col-md-3">عدد الوحدات:</label>
                                                    <p class="form-control-static" data-display="number_of_units"> </p>
                                                </div>
                                            </div>
                                            <div class="form-group">

                                                <div class="col-md-12">
                                                    <label class="control-label col-md-3">تقييم:</label>
                                                    <p class="form-control-static" data-display="evaluation"> </p>
                                                </div>
                                            </div>
                                            <div class="form-group">

                                                <div class="col-md-12">
                                                    <label class="control-label col-md-3">مميزات العقار:</label>
                                                    <p class="form-control-static" data-display="property_advantage"> </p>
                                                </div>
                                            </div>

                                            <div class="form-group">

                                                <div class="col-md-12">
                                                    <label class="control-label col-md-3">نوع العقار:</label>
                                                    <p class="form-control-static" data-display="scheme_numer"> </p>
                                                </div>
                                            </div>
                                            <div class="form-group">

                                                <div class="col-md-12">
                                                    <label class="control-label col-md-3">وضع العقار:</label>
                                                    <p class="form-control-static" data-display="condition"> </p>
                                                </div>
                                            </div>
                                            <div class="form-group">

                                                <div class="col-md-12">
                                                    <label class="control-label col-md-3">طريقة ادارة الاملاك:</label>
                                                    <p class="form-control-static" data-display="management_type"> </p>
                                                </div>
                                            </div>
                                            <div class="form-group">

                                                <div class="col-md-12">
                                                    <label class="control-label col-md-3">المبلغ:</label>
                                                    <p class="form-control-static" data-display="commission"> </p>
                                                </div>
                                            </div>
                                            <div class="form-group">

                                                <div class="col-md-12">
                                                    <label class="control-label col-md-3">نوع العرض:</label>
                                                    <p class="form-control-static" data-display="offer_type"> </p>
                                                </div>
                                            </div>


                                            <div>
                                                <h4 class="form-section">بيانات العقار الثانوية</h4>
                                            </div>
                                            <div class="form-group">

                                                <div class="col-md-12">
                                                    <label class="control-label col-md-3">السعر:</label>
                                                    <p class="form-control-static" data-display="price"> </p>
                                                </div>
                                            </div>
                                            <div class="form-group">

                                                <div class="col-md-12">
                                                    <label class="control-label col-md-3">سعر المتر:</label>
                                                    <p class="form-control-static" data-display="meter_price"> </p>
                                                </div>
                                            </div>
                                            <div class="form-group">

                                                <div class="col-md-12">
                                                    <label class="control-label col-md-3">حد التفاوض:</label>
                                                    <p class="form-control-static" data-display="negotiating_boundary"> </p>
                                                </div>
                                            </div>
                                            <div class="form-group">

                                                <div class="col-md-12">
                                                    <label class="control-label col-md-3">الدولة:</label>
                                                    <p class="form-control-static" data-display="country"> </p>
                                                </div>
                                            </div>
                                            <div class="form-group">

                                                <div class="col-md-12">
                                                    <label class="control-label col-md-3">المدينة:</label>
                                                    <p class="form-control-static" data-display="city"> </p>
                                                </div>
                                            </div>
                                            <div class="form-group">

                                                <div class="col-md-12">
                                                    <label class="control-label col-md-3">الحي:</label>
                                                    <p class="form-control-static" data-display="district"> </p>
                                                </div>
                                            </div>
                                            <div class="form-group">

                                                <div class="col-md-12">
                                                    <label class="control-label col-md-3">الشارع:</label>
                                                    <p class="form-control-static" data-display="street"> </p>
                                                </div>
                                            </div>

                                            <div class="form-group">

                                                <div class="col-md-12">
                                                    <label class="control-label col-md-3">العنوان:</label>
                                                    <p class="form-control-static" data-display="address"> </p>
                                                </div>
                                            </div>
                                            <div class="form-group">

                                                <div class="col-md-12">
                                                    <label class="control-label col-md-3">رقم عداد المياة:</label>
                                                    <p class="form-control-static" data-display="water_meter_number"> </p>
                                                </div>
                                            </div>
                                            <div class="form-group">

                                                <div class="col-md-12">
                                                    <label class="control-label col-md-3">رقم عداد الكهرباء:</label>
                                                    <p class="form-control-static" data-display="electricity_meter_number"> </p>
                                                </div>
                                            </div>
                                            <div class="form-group">

                                                <div class="col-md-12">
                                                    <label class="control-label col-md-3">المساحة الاجمالية:</label>
                                                    <p class="form-control-static" data-display="total_area"> </p>
                                                </div>
                                            </div>
                                            <div class="form-group">

                                                <div class="col-md-12">
                                                    <label class="control-label col-md-3">الشارع:</label>
                                                    <p class="form-control-static" data-display="street"> </p>
                                                </div>
                                            </div>
                                            <div class="form-group">

                                                <div class="col-md-12">
                                                    <label class="control-label col-md-3">مساحة البناء:</label>
                                                    <p class="form-control-static" data-display="construction_area"> </p>
                                                </div>
                                            </div>
                                            <div class="form-group">

                                                <div class="col-md-12">
                                                    <label class="control-label col-md-3">اتجاه العقار:</label>
                                                    <p class="form-control-static" data-display="property_direction"> </p>
                                                </div>
                                            </div>
                                            <div>
                                                <h4 class="form-section">تزويد بيانات المالك</h4>
                                            </div>
                                            <div class="form-group">

                                                <div class="col-md-12">
                                                    <label class="control-label col-md-3">اسم المالك:</label>
                                                    <p class="form-control-static" data-display="owner_name"> </p>
                                                </div>
                                            </div>

                                            <div class="form-group">

                                                <div class="col-md-12">
                                                    <label class="control-label col-md-3">رقم العقار:</label>
                                                    <p class="form-control-static" data-display="property_number"> </p>
                                                </div>
                                            </div>
                                            <div class="form-group">

                                                <div class="col-md-12">
                                                    <label class="control-label col-md-3">رقم الصك:</label>
                                                    <p class="form-control-static" data-display="instrument_number"> </p>
                                                </div>
                                            </div>
                                            <div class="form-group">

                                                <div class="col-md-12">
                                                    <label class="control-label col-md-3">تاريخ الصك:</label>
                                                    <p class="form-control-static" data-display="instrument_date"> </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Tab5-Select4  -->
                                    <div id="Tab5-Select5" style="display: none;">
                                        <div>
                                            <h3 class="block">الموجـز </h3>
                                            <div>
                                                <h4 class="form-section">بيانات العقار الاساسية</h4>
                                            </div>
                                            <div class="form-group">

                                                <div class="col-md-12">
                                                    <label class="control-label col-md-3">اسم العقار:</label>
                                                    <p class="form-control-static" data-display="property_name"> </p>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="col-md-12">
                                                    <label class="control-label col-md-3">نوع العقار:</label>
                                                    <p class="form-control-static" data-display="property_type"> </p>
                                                </div>
                                            </div>
                                            <div class="form-group">

                                                <div class="col-md-12">
                                                    <label class="control-label col-md-3">سنة البناء:</label>
                                                    <p class="form-control-static" data-display="property_type"> </p>
                                                </div>
                                            </div>
                                            <div class="form-group">

                                                <div class="col-md-12">
                                                    <label class="control-label col-md-3">عدد الوحدات:</label>
                                                    <p class="form-control-static" data-display="number_of_units"> </p>
                                                </div>
                                            </div>
                                            <div class="form-group">

                                                <div class="col-md-12">
                                                    <label class="control-label col-md-3">تقييم:</label>
                                                    <p class="form-control-static" data-display="evaluation"> </p>
                                                </div>
                                            </div>
                                            <div class="form-group">

                                                <div class="col-md-12">
                                                    <label class="control-label col-md-3">مميزات العقار:</label>
                                                    <p class="form-control-static" data-display="property_advantage"> </p>
                                                </div>
                                            </div>

                                            <div class="form-group">

                                                <div class="col-md-12">
                                                    <label class="control-label col-md-3">نوع العقار:</label>
                                                    <p class="form-control-static" data-display="scheme_numer"> </p>
                                                </div>
                                            </div>
                                            <div class="form-group">

                                                <div class="col-md-12">
                                                    <label class="control-label col-md-3">وضع العقار:</label>
                                                    <p class="form-control-static" data-display="condition"> </p>
                                                </div>
                                            </div>
                                            <div class="form-group">

                                                <div class="col-md-12">
                                                    <label class="control-label col-md-3">طريقة ادارة الاملاك:</label>
                                                    <p class="form-control-static" data-display="management_type"> </p>
                                                </div>
                                            </div>
                                            <div class="form-group">

                                                <div class="col-md-12">
                                                    <label class="control-label col-md-3">المبلغ:</label>
                                                    <p class="form-control-static" data-display="commission"> </p>
                                                </div>
                                            </div>
                                            <div class="form-group">

                                                <div class="col-md-12">
                                                    <label class="control-label col-md-3">نوع العرض:</label>
                                                    <p class="form-control-static" data-display="offer_type"> </p>
                                                </div>
                                            </div>


                                            <div>
                                                <h4 class="form-section">بيانات العقار الثانوية</h4>
                                            </div>
                                            <div class="form-group">

                                                <div class="col-md-12">
                                                    <label class="control-label col-md-3">السعر:</label>
                                                    <p class="form-control-static" data-display="price"> </p>
                                                </div>
                                            </div>
                                            <div class="form-group">

                                                <div class="col-md-12">
                                                    <label class="control-label col-md-3">سعر المتر:</label>
                                                    <p class="form-control-static" data-display="meter_price"> </p>
                                                </div>
                                            </div>
                                            <div class="form-group">

                                                <div class="col-md-12">
                                                    <label class="control-label col-md-3">حد التفاوض:</label>
                                                    <p class="form-control-static" data-display="negotiating_boundary"> </p>
                                                </div>
                                            </div>
                                            <div class="form-group">

                                                <div class="col-md-12">
                                                    <label class="control-label col-md-3">الدولة:</label>
                                                    <p class="form-control-static" data-display="country"> </p>
                                                </div>
                                            </div>
                                            <div class="form-group">

                                                <div class="col-md-12">
                                                    <label class="control-label col-md-3">المدينة:</label>
                                                    <p class="form-control-static" data-display="city"> </p>
                                                </div>
                                            </div>
                                            <div class="form-group">

                                                <div class="col-md-12">
                                                    <label class="control-label col-md-3">الحي:</label>
                                                    <p class="form-control-static" data-display="district"> </p>
                                                </div>
                                            </div>
                                            <div class="form-group">

                                                <div class="col-md-12">
                                                    <label class="control-label col-md-3">الشارع:</label>
                                                    <p class="form-control-static" data-display="street"> </p>
                                                </div>
                                            </div>

                                            <div class="form-group">

                                                <div class="col-md-12">
                                                    <label class="control-label col-md-3">العنوان:</label>
                                                    <p class="form-control-static" data-display="address"> </p>
                                                </div>
                                            </div>
                                            <div class="form-group">

                                                <div class="col-md-12">
                                                    <label class="control-label col-md-3">رقم عداد المياة:</label>
                                                    <p class="form-control-static" data-display="water_meter_number"> </p>
                                                </div>
                                            </div>
                                            <div class="form-group">

                                                <div class="col-md-12">
                                                    <label class="control-label col-md-3">رقم عداد الكهرباء:</label>
                                                    <p class="form-control-static" data-display="electricity_meter_number"> </p>
                                                </div>
                                            </div>
                                            <div class="form-group">

                                                <div class="col-md-12">
                                                    <label class="control-label col-md-3">المساحة الاجمالية:</label>
                                                    <p class="form-control-static" data-display="total_area"> </p>
                                                </div>
                                            </div>
                                            <div class="form-group">

                                                <div class="col-md-12">
                                                    <label class="control-label col-md-3">الشارع:</label>
                                                    <p class="form-control-static" data-display="street"> </p>
                                                </div>
                                            </div>
                                            <div class="form-group">

                                                <div class="col-md-12">
                                                    <label class="control-label col-md-3">مساحة البناء:</label>
                                                    <p class="form-control-static" data-display="construction_area"> </p>
                                                </div>
                                            </div>
                                            <div class="form-group">

                                                <div class="col-md-12">
                                                    <label class="control-label col-md-3">اتجاه العقار:</label>
                                                    <p class="form-control-static" data-display="property_direction"> </p>
                                                </div>
                                            </div>
                                            <div>
                                                <h4 class="form-section">تزويد بيانات المالك</h4>
                                            </div>
                                            <div class="form-group">

                                                <div class="col-md-12">
                                                    <label class="control-label col-md-3">اسم المالك:</label>
                                                    <p class="form-control-static" data-display="owner_name"> </p>
                                                </div>
                                            </div>

                                            <div class="form-group">

                                                <div class="col-md-12">
                                                    <label class="control-label col-md-3">رقم العقار:</label>
                                                    <p class="form-control-static" data-display="property_number"> </p>
                                                </div>
                                            </div>
                                            <div class="form-group">

                                                <div class="col-md-12">
                                                    <label class="control-label col-md-3">رقم الصك:</label>
                                                    <p class="form-control-static" data-display="instrument_number"> </p>
                                                </div>
                                            </div>
                                            <div class="form-group">

                                                <div class="col-md-12">
                                                    <label class="control-label col-md-3">تاريخ الصك:</label>
                                                    <p class="form-control-static" data-display="instrument_date"> </p>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <!-- End Tab5-Select5  -->
                                    <div id="Tab5-Select6" style="display: none;">
                                        <div>
                                            <h3 class="block">الموجـز </h3>
                                            <div>
                                                <h4 class="form-section">بيانات العقار الاساسية</h4>
                                            </div>
                                            <div class="form-group">

                                                <div class="col-md-12">
                                                    <label class="control-label col-md-3">اسم العقار:</label>
                                                    <p class="form-control-static" data-display="property_name"> </p>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="col-md-12">
                                                    <label class="control-label col-md-3">نوع العقار:</label>
                                                    <p class="form-control-static" data-display="property_type"> </p>
                                                </div>
                                            </div>
                                            <div class="form-group">

                                                <div class="col-md-12">
                                                    <label class="control-label col-md-3">سنة البناء:</label>
                                                    <p class="form-control-static" data-display="property_type"> </p>
                                                </div>
                                            </div>
                                            <div class="form-group">

                                                <div class="col-md-12">
                                                    <label class="control-label col-md-3">عدد الوحدات:</label>
                                                    <p class="form-control-static" data-display="number_of_units"> </p>
                                                </div>
                                            </div>
                                            <div class="form-group">

                                                <div class="col-md-12">
                                                    <label class="control-label col-md-3">تقييم:</label>
                                                    <p class="form-control-static" data-display="evaluation"> </p>
                                                </div>
                                            </div>
                                            <div class="form-group">

                                                <div class="col-md-12">
                                                    <label class="control-label col-md-3">مميزات العقار:</label>
                                                    <p class="form-control-static" data-display="property_advantage"> </p>
                                                </div>
                                            </div>

                                            <div class="form-group">

                                                <div class="col-md-12">
                                                    <label class="control-label col-md-3">نوع العقار:</label>
                                                    <p class="form-control-static" data-display="scheme_numer"> </p>
                                                </div>
                                            </div>
                                            <div class="form-group">

                                                <div class="col-md-12">
                                                    <label class="control-label col-md-3">وضع العقار:</label>
                                                    <p class="form-control-static" data-display="condition"> </p>
                                                </div>
                                            </div>
                                            <div class="form-group">

                                                <div class="col-md-12">
                                                    <label class="control-label col-md-3">طريقة ادارة الاملاك:</label>
                                                    <p class="form-control-static" data-display="management_type"> </p>
                                                </div>
                                            </div>
                                            <div class="form-group">

                                                <div class="col-md-12">
                                                    <label class="control-label col-md-3">المبلغ:</label>
                                                    <p class="form-control-static" data-display="commission"> </p>
                                                </div>
                                            </div>
                                            <div class="form-group">

                                                <div class="col-md-12">
                                                    <label class="control-label col-md-3">نوع العرض:</label>
                                                    <p class="form-control-static" data-display="offer_type"> </p>
                                                </div>
                                            </div>


                                            <div>
                                                <h4 class="form-section">بيانات العقار الثانوية</h4>
                                            </div>
                                            <div class="form-group">

                                                <div class="col-md-12">
                                                    <label class="control-label col-md-3">السعر:</label>
                                                    <p class="form-control-static" data-display="price"> </p>
                                                </div>
                                            </div>
                                            <div class="form-group">

                                                <div class="col-md-12">
                                                    <label class="control-label col-md-3">سعر المتر:</label>
                                                    <p class="form-control-static" data-display="meter_price"> </p>
                                                </div>
                                            </div>
                                            <div class="form-group">

                                                <div class="col-md-12">
                                                    <label class="control-label col-md-3">حد التفاوض:</label>
                                                    <p class="form-control-static" data-display="negotiating_boundary"> </p>
                                                </div>
                                            </div>
                                            <div class="form-group">

                                                <div class="col-md-12">
                                                    <label class="control-label col-md-3">الدولة:</label>
                                                    <p class="form-control-static" data-display="country"> </p>
                                                </div>
                                            </div>
                                            <div class="form-group">

                                                <div class="col-md-12">
                                                    <label class="control-label col-md-3">المدينة:</label>
                                                    <p class="form-control-static" data-display="city"> </p>
                                                </div>
                                            </div>
                                            <div class="form-group">

                                                <div class="col-md-12">
                                                    <label class="control-label col-md-3">الحي:</label>
                                                    <p class="form-control-static" data-display="district"> </p>
                                                </div>
                                            </div>
                                            <div class="form-group">

                                                <div class="col-md-12">
                                                    <label class="control-label col-md-3">الشارع:</label>
                                                    <p class="form-control-static" data-display="street"> </p>
                                                </div>
                                            </div>

                                            <div class="form-group">

                                                <div class="col-md-12">
                                                    <label class="control-label col-md-3">العنوان:</label>
                                                    <p class="form-control-static" data-display="address"> </p>
                                                </div>
                                            </div>
                                            <div class="form-group">

                                                <div class="col-md-12">
                                                    <label class="control-label col-md-3">رقم عداد المياة:</label>
                                                    <p class="form-control-static" data-display="water_meter_number"> </p>
                                                </div>
                                            </div>
                                            <div class="form-group">

                                                <div class="col-md-12">
                                                    <label class="control-label col-md-3">رقم عداد الكهرباء:</label>
                                                    <p class="form-control-static" data-display="electricity_meter_number"> </p>
                                                </div>
                                            </div>
                                            <div class="form-group">

                                                <div class="col-md-12">
                                                    <label class="control-label col-md-3">المساحة الاجمالية:</label>
                                                    <p class="form-control-static" data-display="total_area"> </p>
                                                </div>
                                            </div>
                                            <div class="form-group">

                                                <div class="col-md-12">
                                                    <label class="control-label col-md-3">الشارع:</label>
                                                    <p class="form-control-static" data-display="street"> </p>
                                                </div>
                                            </div>
                                            <div class="form-group">

                                                <div class="col-md-12">
                                                    <label class="control-label col-md-3">مساحة البناء:</label>
                                                    <p class="form-control-static" data-display="construction_area"> </p>
                                                </div>
                                            </div>
                                            <div class="form-group">

                                                <div class="col-md-12">
                                                    <label class="control-label col-md-3">اتجاه العقار:</label>
                                                    <p class="form-control-static" data-display="property_direction"> </p>
                                                </div>
                                            </div>
                                            <div>
                                                <h4 class="form-section">تزويد بيانات المالك</h4>
                                            </div>
                                            <div class="form-group">

                                                <div class="col-md-12">
                                                    <label class="control-label col-md-3">اسم المالك:</label>
                                                    <p class="form-control-static" data-display="owner_name"> </p>
                                                </div>
                                            </div>

                                            <div class="form-group">

                                                <div class="col-md-12">
                                                    <label class="control-label col-md-3">رقم العقار:</label>
                                                    <p class="form-control-static" data-display="property_number"> </p>
                                                </div>
                                            </div>
                                            <div class="form-group">

                                                <div class="col-md-12">
                                                    <label class="control-label col-md-3">رقم الصك:</label>
                                                    <p class="form-control-static" data-display="instrument_number"> </p>
                                                </div>
                                            </div>
                                            <div class="form-group">

                                                <div class="col-md-12">
                                                    <label class="control-label col-md-3">تاريخ الصك:</label>
                                                    <p class="form-control-static" data-display="instrument_date"> </p>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <!-- End Tab5-Select6  -->
                                    <div id="Tab5-Select7" style="display: none;">
                                        <div>
                                            <h3 class="block">الموجـز </h3>
                                            <div>
                                                <h4 class="form-section">بيانات العقار الاساسية</h4>
                                            </div>
                                            <div class="form-group">

                                                <div class="col-md-12">
                                                    <label class="control-label col-md-3">اسم العقار:</label>
                                                    <p class="form-control-static" data-display="property_name"> </p>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="col-md-12">
                                                    <label class="control-label col-md-3">نوع العقار:</label>
                                                    <p class="form-control-static" data-display="property_type"> </p>
                                                </div>
                                            </div>
                                            <div class="form-group">

                                                <div class="col-md-12">
                                                    <label class="control-label col-md-3">سنة البناء:</label>
                                                    <p class="form-control-static" data-display="property_type"> </p>
                                                </div>
                                            </div>
                                            <div class="form-group">

                                                <div class="col-md-12">
                                                    <label class="control-label col-md-3">عدد الوحدات:</label>
                                                    <p class="form-control-static" data-display="number_of_units"> </p>
                                                </div>
                                            </div>
                                            <div class="form-group">

                                                <div class="col-md-12">
                                                    <label class="control-label col-md-3">تقييم:</label>
                                                    <p class="form-control-static" data-display="evaluation"> </p>
                                                </div>
                                            </div>
                                            <div class="form-group">

                                                <div class="col-md-12">
                                                    <label class="control-label col-md-3">مميزات العقار:</label>
                                                    <p class="form-control-static" data-display="property_advantage"> </p>
                                                </div>
                                            </div>

                                            <div class="form-group">

                                                <div class="col-md-12">
                                                    <label class="control-label col-md-3">نوع العقار:</label>
                                                    <p class="form-control-static" data-display="scheme_numer"> </p>
                                                </div>
                                            </div>
                                            <div class="form-group">

                                                <div class="col-md-12">
                                                    <label class="control-label col-md-3">وضع العقار:</label>
                                                    <p class="form-control-static" data-display="condition"> </p>
                                                </div>
                                            </div>
                                            <div class="form-group">

                                                <div class="col-md-12">
                                                    <label class="control-label col-md-3">طريقة ادارة الاملاك:</label>
                                                    <p class="form-control-static" data-display="management_type"> </p>
                                                </div>
                                            </div>
                                            <div class="form-group">

                                                <div class="col-md-12">
                                                    <label class="control-label col-md-3">المبلغ:</label>
                                                    <p class="form-control-static" data-display="commission"> </p>
                                                </div>
                                            </div>
                                            <div class="form-group">

                                                <div class="col-md-12">
                                                    <label class="control-label col-md-3">نوع العرض:</label>
                                                    <p class="form-control-static" data-display="offer_type"> </p>
                                                </div>
                                            </div>


                                            <div>
                                                <h4 class="form-section">بيانات العقار الثانوية</h4>
                                            </div>
                                            <div class="form-group">

                                                <div class="col-md-12">
                                                    <label class="control-label col-md-3">السعر:</label>
                                                    <p class="form-control-static" data-display="price"> </p>
                                                </div>
                                            </div>
                                            <div class="form-group">

                                                <div class="col-md-12">
                                                    <label class="control-label col-md-3">سعر المتر:</label>
                                                    <p class="form-control-static" data-display="meter_price"> </p>
                                                </div>
                                            </div>
                                            <div class="form-group">

                                                <div class="col-md-12">
                                                    <label class="control-label col-md-3">حد التفاوض:</label>
                                                    <p class="form-control-static" data-display="negotiating_boundary"> </p>
                                                </div>
                                            </div>
                                            <div class="form-group">

                                                <div class="col-md-12">
                                                    <label class="control-label col-md-3">الدولة:</label>
                                                    <p class="form-control-static" data-display="country"> </p>
                                                </div>
                                            </div>
                                            <div class="form-group">

                                                <div class="col-md-12">
                                                    <label class="control-label col-md-3">المدينة:</label>
                                                    <p class="form-control-static" data-display="city"> </p>
                                                </div>
                                            </div>
                                            <div class="form-group">

                                                <div class="col-md-12">
                                                    <label class="control-label col-md-3">الحي:</label>
                                                    <p class="form-control-static" data-display="district"> </p>
                                                </div>
                                            </div>
                                            <div class="form-group">

                                                <div class="col-md-12">
                                                    <label class="control-label col-md-3">الشارع:</label>
                                                    <p class="form-control-static" data-display="street"> </p>
                                                </div>
                                            </div>

                                            <div class="form-group">

                                                <div class="col-md-12">
                                                    <label class="control-label col-md-3">العنوان:</label>
                                                    <p class="form-control-static" data-display="address"> </p>
                                                </div>
                                            </div>
                                            <div class="form-group">

                                                <div class="col-md-12">
                                                    <label class="control-label col-md-3">رقم عداد المياة:</label>
                                                    <p class="form-control-static" data-display="water_meter_number"> </p>
                                                </div>
                                            </div>
                                            <div class="form-group">

                                                <div class="col-md-12">
                                                    <label class="control-label col-md-3">رقم عداد الكهرباء:</label>
                                                    <p class="form-control-static" data-display="electricity_meter_number"> </p>
                                                </div>
                                            </div>
                                            <div class="form-group">

                                                <div class="col-md-12">
                                                    <label class="control-label col-md-3">المساحة الاجمالية:</label>
                                                    <p class="form-control-static" data-display="total_area"> </p>
                                                </div>
                                            </div>
                                            <div class="form-group">

                                                <div class="col-md-12">
                                                    <label class="control-label col-md-3">الشارع:</label>
                                                    <p class="form-control-static" data-display="street"> </p>
                                                </div>
                                            </div>
                                            <div class="form-group">

                                                <div class="col-md-12">
                                                    <label class="control-label col-md-3">مساحة البناء:</label>
                                                    <p class="form-control-static" data-display="construction_area"> </p>
                                                </div>
                                            </div>
                                            <div class="form-group">

                                                <div class="col-md-12">
                                                    <label class="control-label col-md-3">اتجاه العقار:</label>
                                                    <p class="form-control-static" data-display="property_direction"> </p>
                                                </div>
                                            </div>
                                            <div>
                                                <h4 class="form-section">تزويد بيانات المالك</h4>
                                            </div>
                                            <div class="form-group">

                                                <div class="col-md-12">
                                                    <label class="control-label col-md-3">اسم المالك:</label>
                                                    <p class="form-control-static" data-display="owner_name"> </p>
                                                </div>
                                            </div>

                                            <div class="form-group">

                                                <div class="col-md-12">
                                                    <label class="control-label col-md-3">رقم العقار:</label>
                                                    <p class="form-control-static" data-display="property_number"> </p>
                                                </div>
                                            </div>
                                            <div class="form-group">

                                                <div class="col-md-12">
                                                    <label class="control-label col-md-3">رقم الصك:</label>
                                                    <p class="form-control-static" data-display="instrument_number"> </p>
                                                </div>
                                            </div>
                                            <div class="form-group">

                                                <div class="col-md-12">
                                                    <label class="control-label col-md-3">تاريخ الصك:</label>
                                                    <p class="form-control-static" data-display="instrument_date"> </p>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <!-- End Tab5-Select7  -->
                                    <div id="Tab5-Select8" style="display: none;">

                                        <div>
                                            <h3 class="block">الموجـز </h3>
                                            <div>
                                                <h4 class="form-section">بيانات العقار الاساسية</h4>
                                            </div>
                                            <div class="form-group">

                                                <div class="col-md-12">
                                                    <label class="control-label col-md-3">اسم العقار:</label>
                                                    <p class="form-control-static" data-display="property_name"> </p>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="col-md-12">
                                                    <label class="control-label col-md-3">نوع العقار:</label>
                                                    <p class="form-control-static" data-display="property_type"> </p>
                                                </div>
                                            </div>
                                            <div class="form-group">

                                                <div class="col-md-12">
                                                    <label class="control-label col-md-3">سنة البناء:</label>
                                                    <p class="form-control-static" data-display="property_type"> </p>
                                                </div>
                                            </div>
                                            <div class="form-group">

                                                <div class="col-md-12">
                                                    <label class="control-label col-md-3">عدد الوحدات:</label>
                                                    <p class="form-control-static" data-display="number_of_units"> </p>
                                                </div>
                                            </div>
                                            <div class="form-group">

                                                <div class="col-md-12">
                                                    <label class="control-label col-md-3">تقييم:</label>
                                                    <p class="form-control-static" data-display="evaluation"> </p>
                                                </div>
                                            </div>
                                            <div class="form-group">

                                                <div class="col-md-12">
                                                    <label class="control-label col-md-3">مميزات العقار:</label>
                                                    <p class="form-control-static" data-display="property_advantage"> </p>
                                                </div>
                                            </div>

                                            <div class="form-group">

                                                <div class="col-md-12">
                                                    <label class="control-label col-md-3">نوع العقار:</label>
                                                    <p class="form-control-static" data-display="scheme_numer"> </p>
                                                </div>
                                            </div>
                                            <div class="form-group">

                                                <div class="col-md-12">
                                                    <label class="control-label col-md-3">وضع العقار:</label>
                                                    <p class="form-control-static" data-display="condition"> </p>
                                                </div>
                                            </div>
                                            <div class="form-group">

                                                <div class="col-md-12">
                                                    <label class="control-label col-md-3">طريقة ادارة الاملاك:</label>
                                                    <p class="form-control-static" data-display="management_type"> </p>
                                                </div>
                                            </div>
                                            <div class="form-group">

                                                <div class="col-md-12">
                                                    <label class="control-label col-md-3">المبلغ:</label>
                                                    <p class="form-control-static" data-display="commission"> </p>
                                                </div>
                                            </div>
                                            <div class="form-group">

                                                <div class="col-md-12">
                                                    <label class="control-label col-md-3">نوع العرض:</label>
                                                    <p class="form-control-static" data-display="offer_type"> </p>
                                                </div>
                                            </div>


                                            <div>
                                                <h4 class="form-section">بيانات العقار الثانوية</h4>
                                            </div>
                                            <div class="form-group">

                                                <div class="col-md-12">
                                                    <label class="control-label col-md-3">السعر:</label>
                                                    <p class="form-control-static" data-display="price"> </p>
                                                </div>
                                            </div>
                                            <div class="form-group">

                                                <div class="col-md-12">
                                                    <label class="control-label col-md-3">سعر المتر:</label>
                                                    <p class="form-control-static" data-display="meter_price"> </p>
                                                </div>
                                            </div>
                                            <div class="form-group">

                                                <div class="col-md-12">
                                                    <label class="control-label col-md-3">حد التفاوض:</label>
                                                    <p class="form-control-static" data-display="negotiating_boundary"> </p>
                                                </div>
                                            </div>
                                            <div class="form-group">

                                                <div class="col-md-12">
                                                    <label class="control-label col-md-3">الدولة:</label>
                                                    <p class="form-control-static" data-display="country"> </p>
                                                </div>
                                            </div>
                                            <div class="form-group">

                                                <div class="col-md-12">
                                                    <label class="control-label col-md-3">المدينة:</label>
                                                    <p class="form-control-static" data-display="city"> </p>
                                                </div>
                                            </div>
                                            <div class="form-group">

                                                <div class="col-md-12">
                                                    <label class="control-label col-md-3">الحي:</label>
                                                    <p class="form-control-static" data-display="district"> </p>
                                                </div>
                                            </div>
                                            <div class="form-group">

                                                <div class="col-md-12">
                                                    <label class="control-label col-md-3">الشارع:</label>
                                                    <p class="form-control-static" data-display="street"> </p>
                                                </div>
                                            </div>

                                            <div class="form-group">

                                                <div class="col-md-12">
                                                    <label class="control-label col-md-3">العنوان:</label>
                                                    <p class="form-control-static" data-display="address"> </p>
                                                </div>
                                            </div>
                                            <div class="form-group">

                                                <div class="col-md-12">
                                                    <label class="control-label col-md-3">رقم عداد المياة:</label>
                                                    <p class="form-control-static" data-display="water_meter_number"> </p>
                                                </div>
                                            </div>
                                            <div class="form-group">

                                                <div class="col-md-12">
                                                    <label class="control-label col-md-3">رقم عداد الكهرباء:</label>
                                                    <p class="form-control-static" data-display="electricity_meter_number"> </p>
                                                </div>
                                            </div>
                                            <div class="form-group">

                                                <div class="col-md-12">
                                                    <label class="control-label col-md-3">المساحة الاجمالية:</label>
                                                    <p class="form-control-static" data-display="total_area"> </p>
                                                </div>
                                            </div>
                                            <div class="form-group">

                                                <div class="col-md-12">
                                                    <label class="control-label col-md-3">الشارع:</label>
                                                    <p class="form-control-static" data-display="street"> </p>
                                                </div>
                                            </div>
                                            <div class="form-group">

                                                <div class="col-md-12">
                                                    <label class="control-label col-md-3">مساحة البناء:</label>
                                                    <p class="form-control-static" data-display="construction_area"> </p>
                                                </div>
                                            </div>
                                            <div class="form-group">

                                                <div class="col-md-12">
                                                    <label class="control-label col-md-3">اتجاه العقار:</label>
                                                    <p class="form-control-static" data-display="property_direction"> </p>
                                                </div>
                                            </div>
                                            <div>
                                                <h4 class="form-section">تزويد بيانات المالك</h4>
                                            </div>
                                            <div class="form-group">

                                                <div class="col-md-12">
                                                    <label class="control-label col-md-3">اسم المالك:</label>
                                                    <p class="form-control-static" data-display="owner_name"> </p>
                                                </div>
                                            </div>

                                            <div class="form-group">

                                                <div class="col-md-12">
                                                    <label class="control-label col-md-3">رقم العقار:</label>
                                                    <p class="form-control-static" data-display="property_number"> </p>
                                                </div>
                                            </div>
                                            <div class="form-group">

                                                <div class="col-md-12">
                                                    <label class="control-label col-md-3">رقم الصك:</label>
                                                    <p class="form-control-static" data-display="instrument_number"> </p>
                                                </div>
                                            </div>
                                            <div class="form-group">

                                                <div class="col-md-12">
                                                    <label class="control-label col-md-3">تاريخ الصك:</label>
                                                    <p class="form-control-static" data-display="instrument_date"> </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Tab5-Select8  -->
                                    <div id="Tab5-Select9" style="display: none;">

                                        <div>
                                            <h3 class="block">الموجـز </h3>
                                            <div>
                                                <h4 class="form-section">بيانات العقار الاساسية</h4>
                                            </div>
                                            <div class="form-group">

                                                <div class="col-md-12">
                                                    <label class="control-label col-md-3">اسم العقار:</label>
                                                    <p class="form-control-static" data-display="property_name"> </p>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="col-md-12">
                                                    <label class="control-label col-md-3">نوع العقار:</label>
                                                    <p class="form-control-static" data-display="property_type"> </p>
                                                </div>
                                            </div>
                                            <div class="form-group">

                                                <div class="col-md-12">
                                                    <label class="control-label col-md-3">سنة البناء:</label>
                                                    <p class="form-control-static" data-display="property_type"> </p>
                                                </div>
                                            </div>
                                            <div class="form-group">

                                                <div class="col-md-12">
                                                    <label class="control-label col-md-3">عدد الوحدات:</label>
                                                    <p class="form-control-static" data-display="number_of_units"> </p>
                                                </div>
                                            </div>
                                            <div class="form-group">

                                                <div class="col-md-12">
                                                    <label class="control-label col-md-3">تقييم:</label>
                                                    <p class="form-control-static" data-display="evaluation"> </p>
                                                </div>
                                            </div>
                                            <div class="form-group">

                                                <div class="col-md-12">
                                                    <label class="control-label col-md-3">مميزات العقار:</label>
                                                    <p class="form-control-static" data-display="property_advantage"> </p>
                                                </div>
                                            </div>

                                            <div class="form-group">

                                                <div class="col-md-12">
                                                    <label class="control-label col-md-3">نوع العقار:</label>
                                                    <p class="form-control-static" data-display="scheme_numer"> </p>
                                                </div>
                                            </div>
                                            <div class="form-group">

                                                <div class="col-md-12">
                                                    <label class="control-label col-md-3">وضع العقار:</label>
                                                    <p class="form-control-static" data-display="condition"> </p>
                                                </div>
                                            </div>
                                            <div class="form-group">

                                                <div class="col-md-12">
                                                    <label class="control-label col-md-3">طريقة ادارة الاملاك:</label>
                                                    <p class="form-control-static" data-display="management_type"> </p>
                                                </div>
                                            </div>
                                            <div class="form-group">

                                                <div class="col-md-12">
                                                    <label class="control-label col-md-3">المبلغ:</label>
                                                    <p class="form-control-static" data-display="commission"> </p>
                                                </div>
                                            </div>
                                            <div class="form-group">

                                                <div class="col-md-12">
                                                    <label class="control-label col-md-3">نوع العرض:</label>
                                                    <p class="form-control-static" data-display="offer_type"> </p>
                                                </div>
                                            </div>


                                            <div>
                                                <h4 class="form-section">بيانات العقار الثانوية</h4>
                                            </div>
                                            <div class="form-group">

                                                <div class="col-md-12">
                                                    <label class="control-label col-md-3">السعر:</label>
                                                    <p class="form-control-static" data-display="price"> </p>
                                                </div>
                                            </div>
                                            <div class="form-group">

                                                <div class="col-md-12">
                                                    <label class="control-label col-md-3">سعر المتر:</label>
                                                    <p class="form-control-static" data-display="meter_price"> </p>
                                                </div>
                                            </div>
                                            <div class="form-group">

                                                <div class="col-md-12">
                                                    <label class="control-label col-md-3">حد التفاوض:</label>
                                                    <p class="form-control-static" data-display="negotiating_boundary"> </p>
                                                </div>
                                            </div>
                                            <div class="form-group">

                                                <div class="col-md-12">
                                                    <label class="control-label col-md-3">الدولة:</label>
                                                    <p class="form-control-static" data-display="country"> </p>
                                                </div>
                                            </div>
                                            <div class="form-group">

                                                <div class="col-md-12">
                                                    <label class="control-label col-md-3">المدينة:</label>
                                                    <p class="form-control-static" data-display="city"> </p>
                                                </div>
                                            </div>
                                            <div class="form-group">

                                                <div class="col-md-12">
                                                    <label class="control-label col-md-3">الحي:</label>
                                                    <p class="form-control-static" data-display="district"> </p>
                                                </div>
                                            </div>
                                            <div class="form-group">

                                                <div class="col-md-12">
                                                    <label class="control-label col-md-3">الشارع:</label>
                                                    <p class="form-control-static" data-display="street"> </p>
                                                </div>
                                            </div>

                                            <div class="form-group">

                                                <div class="col-md-12">
                                                    <label class="control-label col-md-3">العنوان:</label>
                                                    <p class="form-control-static" data-display="address"> </p>
                                                </div>
                                            </div>
                                            <div class="form-group">

                                                <div class="col-md-12">
                                                    <label class="control-label col-md-3">رقم عداد المياة:</label>
                                                    <p class="form-control-static" data-display="water_meter_number"> </p>
                                                </div>
                                            </div>
                                            <div class="form-group">

                                                <div class="col-md-12">
                                                    <label class="control-label col-md-3">رقم عداد الكهرباء:</label>
                                                    <p class="form-control-static" data-display="electricity_meter_number"> </p>
                                                </div>
                                            </div>
                                            <div class="form-group">

                                                <div class="col-md-12">
                                                    <label class="control-label col-md-3">المساحة الاجمالية:</label>
                                                    <p class="form-control-static" data-display="total_area"> </p>
                                                </div>
                                            </div>
                                            <div class="form-group">

                                                <div class="col-md-12">
                                                    <label class="control-label col-md-3">الشارع:</label>
                                                    <p class="form-control-static" data-display="street"> </p>
                                                </div>
                                            </div>
                                            <div class="form-group">

                                                <div class="col-md-12">
                                                    <label class="control-label col-md-3">مساحة البناء:</label>
                                                    <p class="form-control-static" data-display="construction_area"> </p>
                                                </div>
                                            </div>
                                            <div class="form-group">

                                                <div class="col-md-12">
                                                    <label class="control-label col-md-3">اتجاه العقار:</label>
                                                    <p class="form-control-static" data-display="property_direction"> </p>
                                                </div>
                                            </div>
                                            <div>
                                                <h4 class="form-section">تزويد بيانات المالك</h4>
                                            </div>
                                            <div class="form-group">

                                                <div class="col-md-12">
                                                    <label class="control-label col-md-3">اسم المالك:</label>
                                                    <p class="form-control-static" data-display="owner_name"> </p>
                                                </div>
                                            </div>

                                            <div class="form-group">

                                                <div class="col-md-12">
                                                    <label class="control-label col-md-3">رقم العقار:</label>
                                                    <p class="form-control-static" data-display="property_number"> </p>
                                                </div>
                                            </div>
                                            <div class="form-group">

                                                <div class="col-md-12">
                                                    <label class="control-label col-md-3">رقم الصك:</label>
                                                    <p class="form-control-static" data-display="instrument_number"> </p>
                                                </div>
                                            </div>
                                            <div class="form-group">

                                                <div class="col-md-12">
                                                    <label class="control-label col-md-3">تاريخ الصك:</label>
                                                    <p class="form-control-static" data-display="instrument_date"> </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Tab5-Select9  -->
                                    <div id="Tab5-Select10" style="display: none;">
                                        <div>
                                            <h3 class="block">الموجـز </h3>
                                            <div>
                                                <h4 class="form-section">بيانات العقار الاساسية</h4>
                                            </div>
                                            <div class="form-group">

                                                <div class="col-md-12">
                                                    <label class="control-label col-md-3">اسم العقار:</label>
                                                    <p class="form-control-static" data-display="property_name"> </p>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="col-md-12">
                                                    <label class="control-label col-md-3">نوع العقار:</label>
                                                    <p class="form-control-static" data-display="property_type"> </p>
                                                </div>
                                            </div>
                                            <div class="form-group">

                                                <div class="col-md-12">
                                                    <label class="control-label col-md-3">سنة البناء:</label>
                                                    <p class="form-control-static" data-display="property_type"> </p>
                                                </div>
                                            </div>
                                            <div class="form-group">

                                                <div class="col-md-12">
                                                    <label class="control-label col-md-3">عدد الوحدات:</label>
                                                    <p class="form-control-static" data-display="number_of_units"> </p>
                                                </div>
                                            </div>
                                            <div class="form-group">

                                                <div class="col-md-12">
                                                    <label class="control-label col-md-3">تقييم:</label>
                                                    <p class="form-control-static" data-display="evaluation"> </p>
                                                </div>
                                            </div>
                                            <div class="form-group">

                                                <div class="col-md-12">
                                                    <label class="control-label col-md-3">مميزات العقار:</label>
                                                    <p class="form-control-static" data-display="property_advantage"> </p>
                                                </div>
                                            </div>

                                            <div class="form-group">

                                                <div class="col-md-12">
                                                    <label class="control-label col-md-3">نوع العقار:</label>
                                                    <p class="form-control-static" data-display="scheme_numer"> </p>
                                                </div>
                                            </div>
                                            <div class="form-group">

                                                <div class="col-md-12">
                                                    <label class="control-label col-md-3">وضع العقار:</label>
                                                    <p class="form-control-static" data-display="condition"> </p>
                                                </div>
                                            </div>
                                            <div class="form-group">

                                                <div class="col-md-12">
                                                    <label class="control-label col-md-3">طريقة ادارة الاملاك:</label>
                                                    <p class="form-control-static" data-display="management_type"> </p>
                                                </div>
                                            </div>
                                            <div class="form-group">

                                                <div class="col-md-12">
                                                    <label class="control-label col-md-3">المبلغ:</label>
                                                    <p class="form-control-static" data-display="commission"> </p>
                                                </div>
                                            </div>
                                            <div class="form-group">

                                                <div class="col-md-12">
                                                    <label class="control-label col-md-3">نوع العرض:</label>
                                                    <p class="form-control-static" data-display="offer_type"> </p>
                                                </div>
                                            </div>


                                            <div>
                                                <h4 class="form-section">بيانات العقار الثانوية</h4>
                                            </div>
                                            <div class="form-group">

                                                <div class="col-md-12">
                                                    <label class="control-label col-md-3">السعر:</label>
                                                    <p class="form-control-static" data-display="price"> </p>
                                                </div>
                                            </div>
                                            <div class="form-group">

                                                <div class="col-md-12">
                                                    <label class="control-label col-md-3">سعر المتر:</label>
                                                    <p class="form-control-static" data-display="meter_price"> </p>
                                                </div>
                                            </div>
                                            <div class="form-group">

                                                <div class="col-md-12">
                                                    <label class="control-label col-md-3">حد التفاوض:</label>
                                                    <p class="form-control-static" data-display="negotiating_boundary"> </p>
                                                </div>
                                            </div>
                                            <div class="form-group">

                                                <div class="col-md-12">
                                                    <label class="control-label col-md-3">الدولة:</label>
                                                    <p class="form-control-static" data-display="country"> </p>
                                                </div>
                                            </div>
                                            <div class="form-group">

                                                <div class="col-md-12">
                                                    <label class="control-label col-md-3">المدينة:</label>
                                                    <p class="form-control-static" data-display="city"> </p>
                                                </div>
                                            </div>
                                            <div class="form-group">

                                                <div class="col-md-12">
                                                    <label class="control-label col-md-3">الحي:</label>
                                                    <p class="form-control-static" data-display="district"> </p>
                                                </div>
                                            </div>
                                            <div class="form-group">

                                                <div class="col-md-12">
                                                    <label class="control-label col-md-3">الشارع:</label>
                                                    <p class="form-control-static" data-display="street"> </p>
                                                </div>
                                            </div>

                                            <div class="form-group">

                                                <div class="col-md-12">
                                                    <label class="control-label col-md-3">العنوان:</label>
                                                    <p class="form-control-static" data-display="address"> </p>
                                                </div>
                                            </div>
                                            <div class="form-group">

                                                <div class="col-md-12">
                                                    <label class="control-label col-md-3">رقم عداد المياة:</label>
                                                    <p class="form-control-static" data-display="water_meter_number"> </p>
                                                </div>
                                            </div>
                                            <div class="form-group">

                                                <div class="col-md-12">
                                                    <label class="control-label col-md-3">رقم عداد الكهرباء:</label>
                                                    <p class="form-control-static" data-display="electricity_meter_number"> </p>
                                                </div>
                                            </div>
                                            <div class="form-group">

                                                <div class="col-md-12">
                                                    <label class="control-label col-md-3">المساحة الاجمالية:</label>
                                                    <p class="form-control-static" data-display="total_area"> </p>
                                                </div>
                                            </div>
                                            <div class="form-group">

                                                <div class="col-md-12">
                                                    <label class="control-label col-md-3">الشارع:</label>
                                                    <p class="form-control-static" data-display="street"> </p>
                                                </div>
                                            </div>
                                            <div class="form-group">

                                                <div class="col-md-12">
                                                    <label class="control-label col-md-3">مساحة البناء:</label>
                                                    <p class="form-control-static" data-display="construction_area"> </p>
                                                </div>
                                            </div>
                                            <div class="form-group">

                                                <div class="col-md-12">
                                                    <label class="control-label col-md-3">اتجاه العقار:</label>
                                                    <p class="form-control-static" data-display="property_direction"> </p>
                                                </div>
                                            </div>
                                            <div>
                                                <h4 class="form-section">تزويد بيانات المالك</h4>
                                            </div>
                                            <div class="form-group">

                                                <div class="col-md-12">
                                                    <label class="control-label col-md-3">اسم المالك:</label>
                                                    <p class="form-control-static" data-display="owner_name"> </p>
                                                </div>
                                            </div>

                                            <div class="form-group">

                                                <div class="col-md-12">
                                                    <label class="control-label col-md-3">رقم العقار:</label>
                                                    <p class="form-control-static" data-display="property_number"> </p>
                                                </div>
                                            </div>
                                            <div class="form-group">

                                                <div class="col-md-12">
                                                    <label class="control-label col-md-3">رقم الصك:</label>
                                                    <p class="form-control-static" data-display="instrument_number"> </p>
                                                </div>
                                            </div>
                                            <div class="form-group">

                                                <div class="col-md-12">
                                                    <label class="control-label col-md-3">تاريخ الصك:</label>
                                                    <p class="form-control-static" data-display="instrument_date"> </p>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <!-- End Tab5-Select10  -->
                                    <div id="Tab5-Select11" style="display: none;">
                                        <div>
                                            <h3 class="block">الموجـز </h3>
                                            <div>
                                                <h4 class="form-section">بيانات العقار الاساسية</h4>
                                            </div>
                                            <div class="form-group">

                                                <div class="col-md-12">
                                                    <label class="control-label col-md-3">اسم العقار:</label>
                                                    <p class="form-control-static" data-display="property_name"> </p>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="col-md-12">
                                                    <label class="control-label col-md-3">نوع العقار:</label>
                                                    <p class="form-control-static" data-display="property_type"> </p>
                                                </div>
                                            </div>
                                            <div class="form-group">

                                                <div class="col-md-12">
                                                    <label class="control-label col-md-3">سنة البناء:</label>
                                                    <p class="form-control-static" data-display="property_type"> </p>
                                                </div>
                                            </div>
                                            <div class="form-group">

                                                <div class="col-md-12">
                                                    <label class="control-label col-md-3">عدد الوحدات:</label>
                                                    <p class="form-control-static" data-display="number_of_units"> </p>
                                                </div>
                                            </div>
                                            <div class="form-group">

                                                <div class="col-md-12">
                                                    <label class="control-label col-md-3">تقييم:</label>
                                                    <p class="form-control-static" data-display="evaluation"> </p>
                                                </div>
                                            </div>
                                            <div class="form-group">

                                                <div class="col-md-12">
                                                    <label class="control-label col-md-3">مميزات العقار:</label>
                                                    <p class="form-control-static" data-display="property_advantage"> </p>
                                                </div>
                                            </div>

                                            <div class="form-group">

                                                <div class="col-md-12">
                                                    <label class="control-label col-md-3">نوع العقار:</label>
                                                    <p class="form-control-static" data-display="scheme_numer"> </p>
                                                </div>
                                            </div>
                                            <div class="form-group">

                                                <div class="col-md-12">
                                                    <label class="control-label col-md-3">وضع العقار:</label>
                                                    <p class="form-control-static" data-display="condition"> </p>
                                                </div>
                                            </div>
                                            <div class="form-group">

                                                <div class="col-md-12">
                                                    <label class="control-label col-md-3">طريقة ادارة الاملاك:</label>
                                                    <p class="form-control-static" data-display="management_type"> </p>
                                                </div>
                                            </div>
                                            <div class="form-group">

                                                <div class="col-md-12">
                                                    <label class="control-label col-md-3">المبلغ:</label>
                                                    <p class="form-control-static" data-display="commission"> </p>
                                                </div>
                                            </div>
                                            <div class="form-group">

                                                <div class="col-md-12">
                                                    <label class="control-label col-md-3">نوع العرض:</label>
                                                    <p class="form-control-static" data-display="offer_type"> </p>
                                                </div>
                                            </div>


                                            <div>
                                                <h4 class="form-section">بيانات العقار الثانوية</h4>
                                            </div>
                                            <div class="form-group">

                                                <div class="col-md-12">
                                                    <label class="control-label col-md-3">السعر:</label>
                                                    <p class="form-control-static" data-display="price"> </p>
                                                </div>
                                            </div>
                                            <div class="form-group">

                                                <div class="col-md-12">
                                                    <label class="control-label col-md-3">سعر المتر:</label>
                                                    <p class="form-control-static" data-display="meter_price"> </p>
                                                </div>
                                            </div>
                                            <div class="form-group">

                                                <div class="col-md-12">
                                                    <label class="control-label col-md-3">حد التفاوض:</label>
                                                    <p class="form-control-static" data-display="negotiating_boundary"> </p>
                                                </div>
                                            </div>
                                            <div class="form-group">

                                                <div class="col-md-12">
                                                    <label class="control-label col-md-3">الدولة:</label>
                                                    <p class="form-control-static" data-display="country"> </p>
                                                </div>
                                            </div>
                                            <div class="form-group">

                                                <div class="col-md-12">
                                                    <label class="control-label col-md-3">المدينة:</label>
                                                    <p class="form-control-static" data-display="city"> </p>
                                                </div>
                                            </div>
                                            <div class="form-group">

                                                <div class="col-md-12">
                                                    <label class="control-label col-md-3">الحي:</label>
                                                    <p class="form-control-static" data-display="district"> </p>
                                                </div>
                                            </div>
                                            <div class="form-group">

                                                <div class="col-md-12">
                                                    <label class="control-label col-md-3">الشارع:</label>
                                                    <p class="form-control-static" data-display="street"> </p>
                                                </div>
                                            </div>

                                            <div class="form-group">

                                                <div class="col-md-12">
                                                    <label class="control-label col-md-3">العنوان:</label>
                                                    <p class="form-control-static" data-display="address"> </p>
                                                </div>
                                            </div>
                                            <div class="form-group">

                                                <div class="col-md-12">
                                                    <label class="control-label col-md-3">رقم عداد المياة:</label>
                                                    <p class="form-control-static" data-display="water_meter_number"> </p>
                                                </div>
                                            </div>
                                            <div class="form-group">

                                                <div class="col-md-12">
                                                    <label class="control-label col-md-3">رقم عداد الكهرباء:</label>
                                                    <p class="form-control-static" data-display="electricity_meter_number"> </p>
                                                </div>
                                            </div>
                                            <div class="form-group">

                                                <div class="col-md-12">
                                                    <label class="control-label col-md-3">المساحة الاجمالية:</label>
                                                    <p class="form-control-static" data-display="total_area"> </p>
                                                </div>
                                            </div>
                                            <div class="form-group">

                                                <div class="col-md-12">
                                                    <label class="control-label col-md-3">الشارع:</label>
                                                    <p class="form-control-static" data-display="street"> </p>
                                                </div>
                                            </div>
                                            <div class="form-group">

                                                <div class="col-md-12">
                                                    <label class="control-label col-md-3">مساحة البناء:</label>
                                                    <p class="form-control-static" data-display="construction_area"> </p>
                                                </div>
                                            </div>
                                            <div class="form-group">

                                                <div class="col-md-12">
                                                    <label class="control-label col-md-3">اتجاه العقار:</label>
                                                    <p class="form-control-static" data-display="property_direction"> </p>
                                                </div>
                                            </div>
                                            <div>
                                                <h4 class="form-section">تزويد بيانات المالك</h4>
                                            </div>
                                            <div class="form-group">

                                                <div class="col-md-12">
                                                    <label class="control-label col-md-3">اسم المالك:</label>
                                                    <p class="form-control-static" data-display="owner_name"> </p>
                                                </div>
                                            </div>

                                            <div class="form-group">

                                                <div class="col-md-12">
                                                    <label class="control-label col-md-3">رقم العقار:</label>
                                                    <p class="form-control-static" data-display="property_number"> </p>
                                                </div>
                                            </div>
                                            <div class="form-group">

                                                <div class="col-md-12">
                                                    <label class="control-label col-md-3">رقم الصك:</label>
                                                    <p class="form-control-static" data-display="instrument_number"> </p>
                                                </div>
                                            </div>
                                            <div class="form-group">

                                                <div class="col-md-12">
                                                    <label class="control-label col-md-3">تاريخ الصك:</label>
                                                    <p class="form-control-static" data-display="instrument_date"> </p>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <!-- End Tab5-Select11  -->
                                    <div id="Tab5-Select12" style="display: none;">
                                        <div>
                                            <h3 class="block">الموجـز </h3>
                                            <div>
                                                <h4 class="form-section">بيانات العقار الاساسية</h4>
                                            </div>
                                            <div class="form-group">

                                                <div class="col-md-12">
                                                    <label class="control-label col-md-3">اسم العقار:</label>
                                                    <p class="form-control-static" data-display="property_name"> </p>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="col-md-12">
                                                    <label class="control-label col-md-3">نوع العقار:</label>
                                                    <p class="form-control-static" data-display="property_type"> </p>
                                                </div>
                                            </div>
                                            <div class="form-group">

                                                <div class="col-md-12">
                                                    <label class="control-label col-md-3">سنة البناء:</label>
                                                    <p class="form-control-static" data-display="property_type"> </p>
                                                </div>
                                            </div>
                                            <div class="form-group">

                                                <div class="col-md-12">
                                                    <label class="control-label col-md-3">عدد الوحدات:</label>
                                                    <p class="form-control-static" data-display="number_of_units"> </p>
                                                </div>
                                            </div>
                                            <div class="form-group">

                                                <div class="col-md-12">
                                                    <label class="control-label col-md-3">تقييم:</label>
                                                    <p class="form-control-static" data-display="evaluation"> </p>
                                                </div>
                                            </div>
                                            <div class="form-group">

                                                <div class="col-md-12">
                                                    <label class="control-label col-md-3">مميزات العقار:</label>
                                                    <p class="form-control-static" data-display="property_advantage"> </p>
                                                </div>
                                            </div>

                                            <div class="form-group">

                                                <div class="col-md-12">
                                                    <label class="control-label col-md-3">نوع العقار:</label>
                                                    <p class="form-control-static" data-display="scheme_numer"> </p>
                                                </div>
                                            </div>
                                            <div class="form-group">

                                                <div class="col-md-12">
                                                    <label class="control-label col-md-3">وضع العقار:</label>
                                                    <p class="form-control-static" data-display="condition"> </p>
                                                </div>
                                            </div>
                                            <div class="form-group">

                                                <div class="col-md-12">
                                                    <label class="control-label col-md-3">طريقة ادارة الاملاك:</label>
                                                    <p class="form-control-static" data-display="management_type"> </p>
                                                </div>
                                            </div>
                                            <div class="form-group">

                                                <div class="col-md-12">
                                                    <label class="control-label col-md-3">المبلغ:</label>
                                                    <p class="form-control-static" data-display="commission"> </p>
                                                </div>
                                            </div>
                                            <div class="form-group">

                                                <div class="col-md-12">
                                                    <label class="control-label col-md-3">نوع العرض:</label>
                                                    <p class="form-control-static" data-display="offer_type"> </p>
                                                </div>
                                            </div>


                                            <div>
                                                <h4 class="form-section">بيانات العقار الثانوية</h4>
                                            </div>
                                            <div class="form-group">

                                                <div class="col-md-12">
                                                    <label class="control-label col-md-3">السعر:</label>
                                                    <p class="form-control-static" data-display="price"> </p>
                                                </div>
                                            </div>
                                            <div class="form-group">

                                                <div class="col-md-12">
                                                    <label class="control-label col-md-3">سعر المتر:</label>
                                                    <p class="form-control-static" data-display="meter_price"> </p>
                                                </div>
                                            </div>
                                            <div class="form-group">

                                                <div class="col-md-12">
                                                    <label class="control-label col-md-3">حد التفاوض:</label>
                                                    <p class="form-control-static" data-display="negotiating_boundary"> </p>
                                                </div>
                                            </div>
                                            <div class="form-group">

                                                <div class="col-md-12">
                                                    <label class="control-label col-md-3">الدولة:</label>
                                                    <p class="form-control-static" data-display="country"> </p>
                                                </div>
                                            </div>
                                            <div class="form-group">

                                                <div class="col-md-12">
                                                    <label class="control-label col-md-3">المدينة:</label>
                                                    <p class="form-control-static" data-display="city"> </p>
                                                </div>
                                            </div>
                                            <div class="form-group">

                                                <div class="col-md-12">
                                                    <label class="control-label col-md-3">الحي:</label>
                                                    <p class="form-control-static" data-display="district"> </p>
                                                </div>
                                            </div>
                                            <div class="form-group">

                                                <div class="col-md-12">
                                                    <label class="control-label col-md-3">الشارع:</label>
                                                    <p class="form-control-static" data-display="street"> </p>
                                                </div>
                                            </div>

                                            <div class="form-group">

                                                <div class="col-md-12">
                                                    <label class="control-label col-md-3">العنوان:</label>
                                                    <p class="form-control-static" data-display="address"> </p>
                                                </div>
                                            </div>
                                            <div class="form-group">

                                                <div class="col-md-12">
                                                    <label class="control-label col-md-3">رقم عداد المياة:</label>
                                                    <p class="form-control-static" data-display="water_meter_number"> </p>
                                                </div>
                                            </div>
                                            <div class="form-group">

                                                <div class="col-md-12">
                                                    <label class="control-label col-md-3">رقم عداد الكهرباء:</label>
                                                    <p class="form-control-static" data-display="electricity_meter_number"> </p>
                                                </div>
                                            </div>
                                            <div class="form-group">

                                                <div class="col-md-12">
                                                    <label class="control-label col-md-3">المساحة الاجمالية:</label>
                                                    <p class="form-control-static" data-display="total_area"> </p>
                                                </div>
                                            </div>
                                            <div class="form-group">

                                                <div class="col-md-12">
                                                    <label class="control-label col-md-3">الشارع:</label>
                                                    <p class="form-control-static" data-display="street"> </p>
                                                </div>
                                            </div>
                                            <div class="form-group">

                                                <div class="col-md-12">
                                                    <label class="control-label col-md-3">مساحة البناء:</label>
                                                    <p class="form-control-static" data-display="construction_area"> </p>
                                                </div>
                                            </div>
                                            <div class="form-group">

                                                <div class="col-md-12">
                                                    <label class="control-label col-md-3">اتجاه العقار:</label>
                                                    <p class="form-control-static" data-display="property_direction"> </p>
                                                </div>
                                            </div>
                                            <div>
                                                <h4 class="form-section">تزويد بيانات المالك</h4>
                                            </div>
                                            <div class="form-group">

                                                <div class="col-md-12">
                                                    <label class="control-label col-md-3">اسم المالك:</label>
                                                    <p class="form-control-static" data-display="owner_name"> </p>
                                                </div>
                                            </div>

                                            <div class="form-group">

                                                <div class="col-md-12">
                                                    <label class="control-label col-md-3">رقم العقار:</label>
                                                    <p class="form-control-static" data-display="property_number"> </p>
                                                </div>
                                            </div>
                                            <div class="form-group">

                                                <div class="col-md-12">
                                                    <label class="control-label col-md-3">رقم الصك:</label>
                                                    <p class="form-control-static" data-display="instrument_number"> </p>
                                                </div>
                                            </div>
                                            <div class="form-group">

                                                <div class="col-md-12">
                                                    <label class="control-label col-md-3">تاريخ الصك:</label>
                                                    <p class="form-control-static" data-display="instrument_date"> </p>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <!-- End Tab5-Select12  -->
                                    <div id="Tab5-Select13" style="display: none;">

                                        <div>
                                            <h3 class="block">الموجـز </h3>
                                            <div>
                                                <h4 class="form-section">بيانات العقار الاساسية</h4>
                                            </div>
                                            <div class="form-group">

                                                <div class="col-md-12">
                                                    <label class="control-label col-md-3">اسم العقار:</label>
                                                    <p class="form-control-static" data-display="property_name"> </p>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="col-md-12">
                                                    <label class="control-label col-md-3">نوع العقار:</label>
                                                    <p class="form-control-static" data-display="property_type"> </p>
                                                </div>
                                            </div>
                                            <div class="form-group">

                                                <div class="col-md-12">
                                                    <label class="control-label col-md-3">سنة البناء:</label>
                                                    <p class="form-control-static" data-display="property_type"> </p>
                                                </div>
                                            </div>
                                            <div class="form-group">

                                                <div class="col-md-12">
                                                    <label class="control-label col-md-3">عدد الوحدات:</label>
                                                    <p class="form-control-static" data-display="number_of_units"> </p>
                                                </div>
                                            </div>
                                            <div class="form-group">

                                                <div class="col-md-12">
                                                    <label class="control-label col-md-3">تقييم:</label>
                                                    <p class="form-control-static" data-display="evaluation"> </p>
                                                </div>
                                            </div>
                                            <div class="form-group">

                                                <div class="col-md-12">
                                                    <label class="control-label col-md-3">مميزات العقار:</label>
                                                    <p class="form-control-static" data-display="property_advantage"> </p>
                                                </div>
                                            </div>

                                            <div class="form-group">

                                                <div class="col-md-12">
                                                    <label class="control-label col-md-3">نوع العقار:</label>
                                                    <p class="form-control-static" data-display="scheme_numer"> </p>
                                                </div>
                                            </div>
                                            <div class="form-group">

                                                <div class="col-md-12">
                                                    <label class="control-label col-md-3">وضع العقار:</label>
                                                    <p class="form-control-static" data-display="condition"> </p>
                                                </div>
                                            </div>
                                            <div class="form-group">

                                                <div class="col-md-12">
                                                    <label class="control-label col-md-3">طريقة ادارة الاملاك:</label>
                                                    <p class="form-control-static" data-display="management_type"> </p>
                                                </div>
                                            </div>
                                            <div class="form-group">

                                                <div class="col-md-12">
                                                    <label class="control-label col-md-3">المبلغ:</label>
                                                    <p class="form-control-static" data-display="commission"> </p>
                                                </div>
                                            </div>
                                            <div class="form-group">

                                                <div class="col-md-12">
                                                    <label class="control-label col-md-3">نوع العرض:</label>
                                                    <p class="form-control-static" data-display="offer_type"> </p>
                                                </div>
                                            </div>


                                            <div>
                                                <h4 class="form-section">بيانات العقار الثانوية</h4>
                                            </div>
                                            <div class="form-group">

                                                <div class="col-md-12">
                                                    <label class="control-label col-md-3">السعر:</label>
                                                    <p class="form-control-static" data-display="price"> </p>
                                                </div>
                                            </div>
                                            <div class="form-group">

                                                <div class="col-md-12">
                                                    <label class="control-label col-md-3">سعر المتر:</label>
                                                    <p class="form-control-static" data-display="meter_price"> </p>
                                                </div>
                                            </div>
                                            <div class="form-group">

                                                <div class="col-md-12">
                                                    <label class="control-label col-md-3">حد التفاوض:</label>
                                                    <p class="form-control-static" data-display="negotiating_boundary"> </p>
                                                </div>
                                            </div>
                                            <div class="form-group">

                                                <div class="col-md-12">
                                                    <label class="control-label col-md-3">الدولة:</label>
                                                    <p class="form-control-static" data-display="country"> </p>
                                                </div>
                                            </div>
                                            <div class="form-group">

                                                <div class="col-md-12">
                                                    <label class="control-label col-md-3">المدينة:</label>
                                                    <p class="form-control-static" data-display="city"> </p>
                                                </div>
                                            </div>
                                            <div class="form-group">

                                                <div class="col-md-12">
                                                    <label class="control-label col-md-3">الحي:</label>
                                                    <p class="form-control-static" data-display="district"> </p>
                                                </div>
                                            </div>
                                            <div class="form-group">

                                                <div class="col-md-12">
                                                    <label class="control-label col-md-3">الشارع:</label>
                                                    <p class="form-control-static" data-display="street"> </p>
                                                </div>
                                            </div>

                                            <div class="form-group">

                                                <div class="col-md-12">
                                                    <label class="control-label col-md-3">العنوان:</label>
                                                    <p class="form-control-static" data-display="address"> </p>
                                                </div>
                                            </div>
                                            <div class="form-group">

                                                <div class="col-md-12">
                                                    <label class="control-label col-md-3">رقم عداد المياة:</label>
                                                    <p class="form-control-static" data-display="water_meter_number"> </p>
                                                </div>
                                            </div>
                                            <div class="form-group">

                                                <div class="col-md-12">
                                                    <label class="control-label col-md-3">رقم عداد الكهرباء:</label>
                                                    <p class="form-control-static" data-display="electricity_meter_number"> </p>
                                                </div>
                                            </div>
                                            <div class="form-group">

                                                <div class="col-md-12">
                                                    <label class="control-label col-md-3">المساحة الاجمالية:</label>
                                                    <p class="form-control-static" data-display="total_area"> </p>
                                                </div>
                                            </div>
                                            <div class="form-group">

                                                <div class="col-md-12">
                                                    <label class="control-label col-md-3">الشارع:</label>
                                                    <p class="form-control-static" data-display="street"> </p>
                                                </div>
                                            </div>
                                            <div class="form-group">

                                                <div class="col-md-12">
                                                    <label class="control-label col-md-3">مساحة البناء:</label>
                                                    <p class="form-control-static" data-display="construction_area"> </p>
                                                </div>
                                            </div>
                                            <div class="form-group">

                                                <div class="col-md-12">
                                                    <label class="control-label col-md-3">اتجاه العقار:</label>
                                                    <p class="form-control-static" data-display="property_direction"> </p>
                                                </div>
                                            </div>
                                            <div>
                                                <h4 class="form-section">تزويد بيانات المالك</h4>
                                            </div>
                                            <div class="form-group">

                                                <div class="col-md-12">
                                                    <label class="control-label col-md-3">اسم المالك:</label>
                                                    <p class="form-control-static" data-display="owner_name"> </p>
                                                </div>
                                            </div>

                                            <div class="form-group">

                                                <div class="col-md-12">
                                                    <label class="control-label col-md-3">رقم العقار:</label>
                                                    <p class="form-control-static" data-display="property_number"> </p>
                                                </div>
                                            </div>
                                            <div class="form-group">

                                                <div class="col-md-12">
                                                    <label class="control-label col-md-3">رقم الصك:</label>
                                                    <p class="form-control-static" data-display="instrument_number"> </p>
                                                </div>
                                            </div>
                                            <div class="form-group">

                                                <div class="col-md-12">
                                                    <label class="control-label col-md-3">تاريخ الصك:</label>
                                                    <p class="form-control-static" data-display="instrument_date"> </p>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <!-- End Tab5-Select13  -->
                                    <div id="Tab5-Select14" style="display: none;">

                                        <div>
                                            <h3 class="block">الموجـز </h3>
                                            <div>
                                                <h4 class="form-section">بيانات العقار الاساسية</h4>
                                            </div>
                                            <div class="form-group">

                                                <div class="col-md-12">
                                                    <label class="control-label col-md-3">اسم العقار:</label>
                                                    <p class="form-control-static" data-display="property_name"> </p>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="col-md-12">
                                                    <label class="control-label col-md-3">نوع العقار:</label>
                                                    <p class="form-control-static" data-display="property_type"> </p>
                                                </div>
                                            </div>
                                            <div class="form-group">

                                                <div class="col-md-12">
                                                    <label class="control-label col-md-3">سنة البناء:</label>
                                                    <p class="form-control-static" data-display="property_type"> </p>
                                                </div>
                                            </div>
                                            <div class="form-group">

                                                <div class="col-md-12">
                                                    <label class="control-label col-md-3">عدد الوحدات:</label>
                                                    <p class="form-control-static" data-display="number_of_units"> </p>
                                                </div>
                                            </div>
                                            <div class="form-group">

                                                <div class="col-md-12">
                                                    <label class="control-label col-md-3">تقييم:</label>
                                                    <p class="form-control-static" data-display="evaluation"> </p>
                                                </div>
                                            </div>
                                            <div class="form-group">

                                                <div class="col-md-12">
                                                    <label class="control-label col-md-3">مميزات العقار:</label>
                                                    <p class="form-control-static" data-display="property_advantage"> </p>
                                                </div>
                                            </div>

                                            <div class="form-group">

                                                <div class="col-md-12">
                                                    <label class="control-label col-md-3">نوع العقار:</label>
                                                    <p class="form-control-static" data-display="scheme_numer"> </p>
                                                </div>
                                            </div>
                                            <div class="form-group">

                                                <div class="col-md-12">
                                                    <label class="control-label col-md-3">وضع العقار:</label>
                                                    <p class="form-control-static" data-display="condition"> </p>
                                                </div>
                                            </div>
                                            <div class="form-group">

                                                <div class="col-md-12">
                                                    <label class="control-label col-md-3">طريقة ادارة الاملاك:</label>
                                                    <p class="form-control-static" data-display="management_type"> </p>
                                                </div>
                                            </div>
                                            <div class="form-group">

                                                <div class="col-md-12">
                                                    <label class="control-label col-md-3">المبلغ:</label>
                                                    <p class="form-control-static" data-display="commission"> </p>
                                                </div>
                                            </div>
                                            <div class="form-group">

                                                <div class="col-md-12">
                                                    <label class="control-label col-md-3">نوع العرض:</label>
                                                    <p class="form-control-static" data-display="offer_type"> </p>
                                                </div>
                                            </div>


                                            <div>
                                                <h4 class="form-section">بيانات العقار الثانوية</h4>
                                            </div>
                                            <div class="form-group">

                                                <div class="col-md-12">
                                                    <label class="control-label col-md-3">السعر:</label>
                                                    <p class="form-control-static" data-display="price"> </p>
                                                </div>
                                            </div>
                                            <div class="form-group">

                                                <div class="col-md-12">
                                                    <label class="control-label col-md-3">سعر المتر:</label>
                                                    <p class="form-control-static" data-display="meter_price"> </p>
                                                </div>
                                            </div>
                                            <div class="form-group">

                                                <div class="col-md-12">
                                                    <label class="control-label col-md-3">حد التفاوض:</label>
                                                    <p class="form-control-static" data-display="negotiating_boundary"> </p>
                                                </div>
                                            </div>
                                            <div class="form-group">

                                                <div class="col-md-12">
                                                    <label class="control-label col-md-3">الدولة:</label>
                                                    <p class="form-control-static" data-display="country"> </p>
                                                </div>
                                            </div>
                                            <div class="form-group">

                                                <div class="col-md-12">
                                                    <label class="control-label col-md-3">المدينة:</label>
                                                    <p class="form-control-static" data-display="city"> </p>
                                                </div>
                                            </div>
                                            <div class="form-group">

                                                <div class="col-md-12">
                                                    <label class="control-label col-md-3">الحي:</label>
                                                    <p class="form-control-static" data-display="district"> </p>
                                                </div>
                                            </div>
                                            <div class="form-group">

                                                <div class="col-md-12">
                                                    <label class="control-label col-md-3">الشارع:</label>
                                                    <p class="form-control-static" data-display="street"> </p>
                                                </div>
                                            </div>

                                            <div class="form-group">

                                                <div class="col-md-12">
                                                    <label class="control-label col-md-3">العنوان:</label>
                                                    <p class="form-control-static" data-display="address"> </p>
                                                </div>
                                            </div>
                                            <div class="form-group">

                                                <div class="col-md-12">
                                                    <label class="control-label col-md-3">رقم عداد المياة:</label>
                                                    <p class="form-control-static" data-display="water_meter_number"> </p>
                                                </div>
                                            </div>
                                            <div class="form-group">

                                                <div class="col-md-12">
                                                    <label class="control-label col-md-3">رقم عداد الكهرباء:</label>
                                                    <p class="form-control-static" data-display="electricity_meter_number"> </p>
                                                </div>
                                            </div>
                                            <div class="form-group">

                                                <div class="col-md-12">
                                                    <label class="control-label col-md-3">المساحة الاجمالية:</label>
                                                    <p class="form-control-static" data-display="total_area"> </p>
                                                </div>
                                            </div>
                                            <div class="form-group">

                                                <div class="col-md-12">
                                                    <label class="control-label col-md-3">الشارع:</label>
                                                    <p class="form-control-static" data-display="street"> </p>
                                                </div>
                                            </div>
                                            <div class="form-group">

                                                <div class="col-md-12">
                                                    <label class="control-label col-md-3">مساحة البناء:</label>
                                                    <p class="form-control-static" data-display="construction_area"> </p>
                                                </div>
                                            </div>
                                            <div class="form-group">

                                                <div class="col-md-12">
                                                    <label class="control-label col-md-3">اتجاه العقار:</label>
                                                    <p class="form-control-static" data-display="property_direction"> </p>
                                                </div>
                                            </div>
                                            <div>
                                                <h4 class="form-section">تزويد بيانات المالك</h4>
                                            </div>
                                            <div class="form-group">

                                                <div class="col-md-12">
                                                    <label class="control-label col-md-3">اسم المالك:</label>
                                                    <p class="form-control-static" data-display="owner_name"> </p>
                                                </div>
                                            </div>

                                            <div class="form-group">

                                                <div class="col-md-12">
                                                    <label class="control-label col-md-3">رقم العقار:</label>
                                                    <p class="form-control-static" data-display="property_number"> </p>
                                                </div>
                                            </div>
                                            <div class="form-group">

                                                <div class="col-md-12">
                                                    <label class="control-label col-md-3">رقم الصك:</label>
                                                    <p class="form-control-static" data-display="instrument_number"> </p>
                                                </div>
                                            </div>
                                            <div class="form-group">

                                                <div class="col-md-12">
                                                    <label class="control-label col-md-3">تاريخ الصك:</label>
                                                    <p class="form-control-static" data-display="instrument_date"> </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Tab5-Select14  -->
                                </div>
                                <!-- End tab 5 -->





                                <div class="form-actions">
                                    <div class="row">
                                        <div class="col-md-12 text-center">
                                            <a href="javascript:;" class="btn default button-previous disabled" style="display: none;">
                                                <i class="fa fa-angle-right"></i> قبل
                                            </a>
                                            <a href="javascript:;" class="btn btn-outline green button-next">
                                                                        بعد
                                                                        <i class="fa  fa-angle-left"></i>
                                                                    </a>
                                            <input type="submit" class="btn green button-submit" value="حفظ" style="display: none;">


                                        </div>
                                    </div>
                                </div>
                                <!-- End Action next - back  5 -->
                            </div>
                        </div>



                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
    @include('ar.modals.owner_modal')
    
@endsection
