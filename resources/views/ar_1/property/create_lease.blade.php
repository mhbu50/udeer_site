@extends('template')
@section('lang','ar')
@section('head')
    <link href="/css/bootstrap-rtl.css" rel="stylesheet">
@endsection

@section('body')

<body id="" class="lease_management l-create">

    
        
            <div id="c-nav">
                @include('ar.ar_nav')
            </div>

   <div class="container-fluid c-body-con">
        <div class="col-md-9">
            <div class="raw">
                <div class="" >
                    <div id="propriety_unit_form" class="page-content">
                         <div class="raw">
                                <div class='col-md-12'>
                                    <h2>اضافة عقد<h2>
                                </div>
                                
                            </div>
                        <form method='post' action="{!!action('PropertyController@create_lease',$property_name)!!}" enctype="multipart/form-data">
                            <input type='hidden' name='_token' value="{!! csrf_token() !!}">   
                            <div class="form-column col-sm-6">
                               

                                <div class="form-group">
                                    <label for="date">تاريخ كتابة العقد</label>
                                    <input type="date" class="form-control" id="date" placeholder="" name="date">
                                </div>
                                <div class="form-group">
                                    <label for="renter">المستاجر</label>
                                    <div style="position: relative;">
                                        <input type="text" class="form-control" id="renter" placeholder="" name="renter">
                                        <a class="c-pls" href="#" data-toggle="modal" data-target="#Renter_Modal"><i class="glyphicon glyphicon-plus"></i></a>
                                    </div>
                                </div>

                                
                                <div class="form-group">
                                    <label for="lease_doc">نص العقد</label>
                                    <input type="file" class="form-control" id="lease_doc" name="lease_doc">
                                </div>
                               
                                <div class="form-group">
                                    <label for="lease_writing_date">تاربخ امضاء العقد</label>
                                    <input type="date" class="form-control" id="lease_writing_date" placeholder="" name="lease_writing_date">
                                </div>
                                <div class="form-group">
                                    <label for="expiry_date">تاربخ انتهاء العقد</label>
                                    <input type="date" class="form-control" id="expiry_date" placeholder="" name="expiry_date">
                                </div>


                                
                             
                            </div>
                            <div class="form-column col-sm-6">

                           

                                
                                <div class="form-group">
                                    <label for="lease_duration">مدة العقد</label>
                                    <input type="text" class="form-control" id="lease_duration" placeholder="" name="duration">
                                </div>
                                <div class="form-group">
                                    <label for="lease_starting_date">تاربخ بدء الايجار</label>
                                    <input type="date" class="form-control" id="lease_starting_date" placeholder="" name="lease_starting_date">
                                </div>
                                <div class="form-group">
                                    <label for="property">اسم العقار</label>
                                    <div style="position: relative;">
                                        <input type="text" class="form-control" id="property" placeholder="" name="property" value="{{$property_name}}" readonly>
                
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="property unit">وحدة العقار</label>
                                    <div style="position: relative;">
                                        <input type="text" class="form-control" id="property_unit" placeholder="" name="property_unit">
                                        <a class="c-pls" href="#" data-toggle="modal" data-target="#Property_unitModal"><i class="glyphicon glyphicon-plus"></i></a>
                                    </div>
                                </div>
                                
<!--                                  <div class="form-group">
                                    <label for="number_of_payments">عدد الدفعات</label>
                                    <input type="text" class="form-control" id="number_of_payments" placeholder="" name="number_of_payments">
                                </div> -->
                                
                                

                            </div>
                            <div class='raw'>
                                <div class='col-md-12'><button class='btn btn-ud'>حفظ</button></div>
                            </div>
                        </form>
                       
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

    <footer id="footer">
       @include('ar.ar_footer')
    </footer>
    
    @include('ar.modals.property_unit_modal')
    @include('ar.modals.renter_modal')
    <script type="text/javascript">
        
        $('#Property_unitModal').on('shown.bs.modal', function() {
            $('.modal-body #property').val('{{$property_name}}');
            $('.modal-body #property').attr('readonly', true);
              

        })

          $('#property_unit').typeahead({
              source: [
                @foreach( $property_units as $property_unit)
                  {  name: '{{$property_unit->name}}' },
                @endforeach 
                  
              ]
          }); 

          $('#renter').typeahead({
              source: [
                @foreach( $renters as $renter)
                  {  name: '{{$renter->name}}' },
                @endforeach 
                  
              ]
          }); 
    </script>
</body>
@endsection