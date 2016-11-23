@extends('template')
@section('lang','ar')
@section('head')
    <link href="/css/bootstrap-rtl.css" rel="stylesheet">
    <script type="text/javascript" src="http://maps.google.com/maps/api/js?key=AIzaSyB3WTqSPaoOVVbU6SouYdATOMKsAIgrtGM"></script>
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
                 
                    <div id="propriety_unit_form" class="page-content">
                        <form method='post' action="{!!action('PropertyController@store')!!}" enctype="multipart/form-data">
                            <input type='hidden' name='_token' value="{!! csrf_token() !!}">
                            <div style='overflow: auto'>
                                <div class="raw">
                                    <h2>بيانات العقار<h2>
                                </div>
                            <div class="form-column col-sm-6">

                                
                               

                                <div class="form-group">
                                    <label for="">اسم العقار</label>
                                    <input type="text" class="form-control" id="" name="property_name" placeholder="" >
                                </div>

                                <div class="form-group">
                                  <label for="Property_type">نوع العقار</label>
                                  <select id="Property_type" class="form-control" name='property_type'>
                                    <option>house</option>
                                    <option>schema</option>
                                    <option>residential building</option>
                                  </select>
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputEmail1">سنة البناء</label>
                                    <input type="date" class="form-control" id="construction_date" name='construction_date' placeholder="">
                                </div>


                                
                                <!-- <div class="form-group">
                                    <label for="exampleInputEmail1">عدد وحدات العقاريى</label>
                                    <input type="text" class="form-control" id="number_of_property_units" name="number_of_property_units" placeholder="">
                                </div> -->

                                <div class="form-group">
                                  <label for="comment">تقييم</label>
                                  <textarea class="form-control" rows="5" id="evaluation" name='evaluation'></textarea>
                                </div>

                                
                            </div>
                            <div class="form-column col-sm-6">
                                <div class="raw">
                                    <div class='col-md-6'>
                                        <div class="form-group">
                                          <label for="country">العنوان</label>
                                          <input type="text" class="form-control" id="country" name='country' placeholder="الدولة">
                                        </div>
                                    </div>
                                    <div class='col-md-6'>
                                        <div class="form-group">
                                          <label for="city">&nbsp;</label>
                                          <input type="text" class="form-control" id="city" name='city' placeholder="المدينة">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                  <label for="address"></label>
                                  <textarea class="form-control" rows="5" id="address" name='address' placeholder="العنوان"></textarea>
                                </div>
                                <div id="mapCanvas"></div>
                                <div class="form-group">
                                  <label for="comment">مميزات العقار</label>
                                  <textarea class="form-control" rows="5" id="property_advantage" name="property_advantage"></textarea>
                                </div>
                                

                            </div>

                            <div class="form-column col-sm-6">
                                <div class="raw">
                                    <h2>بياناتن المالك<h2>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">اسم المالك</label>
                                    <input type="text" class="form-control" id="owner_name" placeholder="" name="owner_name">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">رقم العقار</label>
                                    <input type="text" class="form-control" id="property_number" name="property_number" placeholder="">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">رقم الصك</label>
                                    <input type="text" class="form-control" id="instrument_number" name="instrument_number" placeholder="">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">تاريخ الصك</label>
                                    <input type="date" class="form-control" id="instrument_date" name="instrument_date" placeholder="">
                                </div>

                            </div>
                        </div>
                            <div class='col-md-2'>
                                <input type="submit" class="btn btn-default" value='ارسال'/>
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

 
    @include('ar.ar_footer')
    <script type="text/javascript">
    
        
        var geocoder = new google.maps.Geocoder();

        function geocodePosition(pos) {
          geocoder.geocode({
            latLng: pos
          }, function(responses) {
            if (responses && responses.length > 0) {
              // updateMarkerAddress(responses[0].formatted_address);
            } else {
              // updateMarkerAddress('Cannot determine address at this location.');
            }
          });
        }

        function updateMarkerStatus(str) {
          // document.getElementById('markerStatus').innerHTML = str;
        }

        function updateMarkerPosition(latLng) {
            // $("#Coordinates_y").val(latLng.lng()) ;
            // $("#Coordinates_x").val(latLng.lat()) ;
        }



        function initialize() {
          var latLng = new google.maps.LatLng(26.333, 50.108);
          var map = new google.maps.Map(document.getElementById('mapCanvas'), {
            zoom: 8,
            center: latLng,
            mapTypeId: google.maps.MapTypeId.ROADMAP
          });
          var marker = new google.maps.Marker({
            position: latLng,
            title: 'Point A',
            map: map,
            draggable: true
          });

        function updateMarkerAddress(latLng) {
            geocoder.geocode({
                latLng: marker.getPosition()
                }, function(responses) {
                if (responses && responses.length > 0) {
                  console.log(responses[0]);
                  $("#address").val(responses[0].formatted_address) ;
                } else {
                  console.log('no');
                }
            });
             
        }

          // Update current position info.
          updateMarkerPosition(latLng);

          geocodePosition(latLng);

          // Add dragging event listeners.
          google.maps.event.addListener(marker, 'dragstart', function() {
            // 
          });

          google.maps.event.addListener(marker, 'drag', function() {
            updateMarkerStatus(marker.getPosition());
            updateMarkerPosition(marker.getPosition());
            
          });

          google.maps.event.addListener(marker, 'dragend', function() {
            updateMarkerStatus(marker.getPosition());
            geocodePosition(marker.getPosition());
            updateMarkerAddress(marker.getPosition());
          });
        }

        // Onload handler to fire off the app.
        google.maps.event.addDomListener(window, 'load', initialize);


    </script>
</body>
@endsection
