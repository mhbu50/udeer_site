@extends('template')
@section('lang','ar')
@section('head')
    <link href="/css/bootstrap-rtl.css" rel="stylesheet">
@endsection

@section('body')

<body  >

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
                        @include('ar.lease_rent_payment.rent_payment_form',['action' => action('Lease_rent_paymentController@update',['name' => $lease_rent_payment->name]) ])
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
    <script type="text/javascript">
    $(document).ready(function(){
        lease_rent_payment = {!!json_encode($lease_rent_payment)!!}
        set_value(lease_rent_payment)
    });
    </script>
</body>
@endsection