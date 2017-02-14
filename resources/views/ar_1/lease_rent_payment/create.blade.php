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

   <div class="container-fluid c-body-con">
        <div class="col-md-9">
            <div class="raw">
                <div class="" >
                    <div id="propriety_unit_form" class="page-content">
                        <div class="raw">
                            <div class='col-md-12'>
                                <h2>تحصيل ايجار<h2>
                            </div>
                        </div>
                        @include('ar.lease_rent_payment.rent_payment_form',['action' => action('Lease_rent_paymentController@create') ])
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