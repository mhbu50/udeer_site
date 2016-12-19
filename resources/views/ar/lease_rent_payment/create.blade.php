@extends('template')
@section('lang','ar')
@section('head')
    <link href="/css/bootstrap-rtl.css" rel="stylesheet">
@endsection

@section('body')

<body id="" class="financial_system re_pa-show">

    <section id="temp1">
        
            <div id="c-nav">
                @include('ar.ar_nav')
            </div>

   <div class="container c-body-con">
        <div class="col-md-9">
            <div class="raw">
                <div class="col-md-12 col-md-offset-0" >
                    <div id="propriety_unit_form" class="page-content">
                         <div class="raw">
                                <div class='col-md-12'>
                                    <h2>عنوان<h2>
                                </div>
                                
                        </div>
                        <form method='post' action="{!!action('Lease_rent_paymentController@create')!!}" enctype="multipart/form-data">
                            <input type='hidden' name='_token' value="{!! csrf_token() !!}">  
                            <div class="raw">
                                <div class='col-md-6'>
                                    <div class="form-group">
                                        <label for="date">تاريخ التحصيل</label>
                                        <input type="date" class="form-control" id="date" placeholder="" name="date">
                                    </div>
                                </div>
                                <div class='col-md-6'>
                                    <div class="form-group">
                                      <label for="payment_method">طريقة الدفع</label>
                                      <select id="payment_method" class="form-control" name='payment_method'>
                                        <option value='cash'>كاش</option>
                                        <option vlaue='bank transfer'>تحويل بنكي</option>
                                        <option vlaue='cheque'>الشيك</option>
                                      </select>
                                    </div>
                                </div>
                            </div>
                            <div class='raw'>
                                <div class='col-md-6'>
                                    <div class="form-group">
                                        <label for="due_date">من تاريخ</label>
                                        <input type="date" class="form-control" id="due_date" placeholder="" name="due_date">
                                    </div>
                                </div>
                                <div class='col-md-6'>
                                    <div class="form-group">
                                        <label for="to_date">لتاريخ</label>
                                        <input type="date" class="form-control" id="to_date" placeholder="" name="to_date">
                                    </div>
                                </div>
                            </div> 

                            <div class='raw'>
                                <div class='col-md-6'>
                                
                                </div>
                                <div class='col-md-6'>

                                </div>
                            </div> 
                             <div class='raw'>
                                <div class='col-md-6'>
                                    <div class="form-group">
                                        <label for="renter">الموأجر</label>
                                        <input type="text" class="form-control" id="renter" placeholder="" name="renter">
                                        <a href="#" data-toggle="modal" data-target="#Renter_Modal"><i class="glyphicon glyphicon-plus"></i></a>
                                    </div>
                                </div>
                                <div class='col-md-6'>
                                    <div class="form-group">
                                        <label for="duration">اسم العقد</label>
                                        <input type="text" class="form-control" id="lease" placeholder="" name="lease">
                                        <a href="#" data-toggle="modal" data-target="#Lease_Modal"><i class="glyphicon glyphicon-plus"></i></a>
                                    </div>
                                </div>
                            </div> 
                            <div class='raw'>
                                <div class='col-md-6'>
                                    <div class="form-group">
                                        <label for="employee">اسم المحصل</label>
                                        <input type="text" class="form-control" id="receiver" placeholder="" name="employee">
                                        <a href="#" data-toggle="modal" data-target="#Receiver_Modal"><i class="glyphicon glyphicon-plus"></i></a>
                                    </div>
                                </div>
                                <div class='col-md-6'>
                                    <div class="form-group">
                                        <label for="amount">مقدار</label>
                                        <input type="text" class="form-control" id="amount" placeholder="" name="amount">
                                    </div>
                                </div>
                            </div> 
                           
                                

                                

                                

                                

                                

                                



                                <!-- <div class="form-group">
                                  <label for="comment">شرح</label>
                                  <textarea class="form-control" rows="5" id="statement" name='statement'></textarea>
                                </div> -->
                             
                            
                            <div class='raw'>
                                <div class='col-md-12'><button class='btn btn-ud'>ارسال</button></div>
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
    @include('ar.modals.lease_modal')
    @include('ar.modals.receiver_modal')
    @include('ar.modals.renter_modal')
    <script type="text/javascript">
        $('#lease').typeahead({
              source: [
                @foreach( $leases as $lease)
                  {  name: '{{$lease->name}}' },
                @endforeach 
                  
              ]
          });
        $('#receiver').typeahead({
              source: [
                @foreach( $receivers as $receiver)
                  {  name: '{{$receiver->name}}' },
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