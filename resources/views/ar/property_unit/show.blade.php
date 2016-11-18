@extends('template')
@section('lang','ar')
@section('head')
    <link href="/css/bootstrap-rtl.css" rel="stylesheet">
@endsection

@section('body')
    



<body>

    <section id="temp1">
        
            <div id="c-nav">
                @include('ar.ar_nav')
            </div>

    <div class="container c-body-con">

        <div class="col-md-9">

            <div class="raw">
                <div class="col-md-12 col-md-offset-0" >
                  @include('ar.tabs.property_unit')
                    <div id="" class="page-content">
                        <h3>{{ isset($property_unit->name) ? $property_unit->name : ""}}</h3>

                       
                       

                        <label>العقار</label>
                        <p>{{ isset($property_unit->property) ? $property_unit->property : "-"}}</p>

                        <label>رقم الوحدة</label>
                        <p>{{ isset($property_unit->unit_number) ? $property_unit->unit_number : "-"}}</p>

                        <label>سعر تاجير السنوي</label>
                        <p>{{ isset($property_unit->annual_rent_amount) ? $property_unit->annual_rent_amount : "-"}}-{{ isset($property_unit->rent_currency) ? $property_unit->rent_currency : ""}}</p>

                        <label>مبلغ التامين</label>
                        <p>{{ isset($property_unit->insurance_amount) ? $property_unit->insurance_amount : "-"}}</p>

                        <label>العمولة</label>
                        <p>{{ isset($property_unit->commission_type) ? $property_unit->commission_type : "-"}}</p>

                        <label>مقدار العمولة</label>
                        <p>{{ isset($property_unit->commission_amount) ? $property_unit->commission_amount : "-"}}</p>

                        <label>نوع الوحدة</label>
                        <p>{{ isset($property_unit->unit_description) ? $property_unit->unit_description : "-"}}</p>

                        <label>المساحة</label>
                        <p>{{ isset($property_unit->unit_space) ? $property_unit->unit_space : "-"}}</p>

                        <label>نوع التجهيز</label>
                        <p>{{ isset($property_unit->finishing_status) ? $property_unit->finishing_status : "-"}}</p>

                        <label>الغرفة\الفتحات</label>
                        <p>{{ isset($property_unit->room_slot) ? $property_unit->room_slot : "-"}}</p>

                        <label>دورات مياه</label>
                        <p>{{ isset($property_unit->number_of_bathrooms) ? $property_unit->number_of_bathrooms : "-"}}</p>

                        <label>نشاط الوحدة</label>
                        <p>{{ isset($property_unit->unit_activity) ? $property_unit->unit_activity : "-"}}</p>

                        <label>عداد المياة</label>
                        <p>{{ isset($property_unit->water_meter_number) ? $property_unit->water_meter_number : "-"}}</p>

                        <label>عداد الكهرب</label>
                        <p>{{ isset($property_unit->electricity_meter_number) ? $property_unit->electricity_meter_number : "-"}}</p>



                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div id="side_menu" >
                @include('ar.ar_side')
            </div>
        </div>
    </div>
 
    @include('ar.ar_footer')
    
</body>
@endsection











































