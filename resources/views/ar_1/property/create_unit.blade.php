@extends('template')
@section('lang','ar')
@section('head')
    <link href="/css/bootstrap-rtl.css" rel="stylesheet">
    
@endsection

@section('body')
    <body class="property_management p_u-create">

    <section id="temp1">
        
            <!-- Static navbar -->
              <div id="c-nav">
                @include('ar.ar_nav')
            </div>
              
    <div class="container-fluid c-body-con">
        <div class="col-md-9">
            <div class="raw">
                <div class="" >
                    <div id="propriety_uni_form.html" class="page-content">
                      <div class="raw">
                        <div class="col-md-12">
                          <h2>اضافة وحدة</h2>
                        </div>
                      </div>
                      
                      @include('ar.property_unit.property_unit_form',['action' => action('PropertyController@store_unit',$property_name) ])

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
          $("#unit_number").val("{{$last_unit_number+1}}")
          $("#property").val("{{$property_name}}");
          $("#property").prop('readonly', true);

          $("#annual_rent_amount").change(function(){
              com_val = $(this).val()*(5/200);

            $("#commission_amount").val(com_val);
          })
            
          

          
            // $('#property').keyup(function(){
            //     $.ajax({
            //        url: "{{ url('/search_link') }}",
            //        data: {
            //           doctype:'property',
            //           text: $(this).val()
            //        },
            //        type: "POST",
            //       beforeSend: function(request){request.setRequestHeader('X-CSRF-TOKEN', '{!! csrf_token() !!}')
            //                                    }
            //       ,success: function(msg) {
            //            console.log(msg);
                      
            //         }
            //     });
              
              
            // });


         
      });
    </script>

    </body>
@endsection