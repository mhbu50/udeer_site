@extends('template')
@section('lang','ar')
@section('head')
    <link href="/css/bootstrap-rtl.css" rel="stylesheet">
    <script type="text/javascript" src="http://maps.google.com/maps/api/js?key=AIzaSyB3WTqSPaoOVVbU6SouYdATOMKsAIgrtGM"></script>
@endsection

@section('body')
<body id="register" class="ar">
    <section id='main'>
    <div class='container'>
        <div class='col-md-5 text-center logo'>
            <img src="/image/logo_horizone.jpg" width='50%'>
        </div>
        <div class='col-md-7'>
            <div id='form-con'>
              <form id="contact-form" method="post" action="{!!action('UserController@store_user')!!}">
                <input type='hidden' name='_token' value="{!! csrf_token() !!}">  
                <h3>معلومات الشخصية</h3>
                <div class="form-group">
                    <label class='fo-la'>اسم المستخدم</label>
                    <input class='fo-co form-control'type="text" name="first_name" class="" placeholder="" required="required">
                </div>
                <div class="form-group">
                    <label class='fo-la'>البريد الالكتروني</label>
                    <input class='fo-co form-control'type="email" name="email" class="" placeholder="" required="required">
                </div>
                <div class="form-group">
                    <label class='fo-la'>رقم الجوال</label>
                    <input class='fo-co form-control'type="text" name="mobile_number" class="" placeholder="" required="required">
                </div>
                <div class="form-group">
                    <label class='fo-la'>رقم الهاتف</label>
                    <input class='fo-co form-control'type="text" name="telephone_number" class="" placeholder="" required="required">
                </div>
                
                 <h3>معلومات المنشأة</h3>
                 <div class="form-group">
                    <label class='fo-la'>اسم المنشأة</label>
                    <input class='fo-co form-control'type="text" name="company_name" class="" placeholder="" required="required">
                </div>
                <div class="form-group">
                    <label class='fo-la'>abbr</label>
                    <input class='fo-co form-control'type="text" name="abbr" class="" placeholder="" required="required">
                </div>
                <div class="form-group">
                    <label class='fo-la'>السجل التجاري</label>
                    <input class='fo-co form-control'type="text" name="commercial_number" class="" placeholder="" required="required">
                </div>
                <div class="form-group">
                    <label class='fo-la'>موقع المنشأة</label>
                    <input class='fo-co form-control'type="text" name="city" class="" placeholder="الدولة" required="required">
                </div>
                <div class="form-group">
                    <label class='fo-la'>&nbsp;</label>
                    <input class='fo-co form-control'type="text" name="country" class="" placeholder="المدينة" required="required">
                </div>
                 <div class="form-group">
                    <label class='fo-la'>&nbsp;</label>
                    <textarea type="text" name="address" class="form-control fo-co" placeholder="العنوان" required></textarea>
                </div>
                <div class="form-group">
                    <label class='fo-la'>العملة</label>
                    <input class='fo-co form-control'type="text" name="currency" class="" placeholder="" required="required">
                </div>
                <!-- <div class="form-group Coordinates_p" hidden>
                    <input type="text" name="Coordinates_x" id='Coordinates_x' class="form-control" required>
                </div>
                <div class="form-group Coordinates_p" hidden>
                    <input type="text" name="Coordinates_y" id='Coordinates_y'class="form-control"required >
                </div> -->
               
                <div class="form-group">
                    <label class='fo-la'>&nbsp;</label>
                  
                  <button type="submit" class="btn btn-ud">ارسال</button>
                </div>
              </form>   
            </div>
        </div>
        <div class='col-md-5'id='map'>
            <div id="mapCanvas"></div>
        </div>

        
    </div>
    </section>
     <footer id="footer">
        <div class='raw'>
        <div class="container text-center">
            <div class="col-md-2 col-sm-12 ">
                <div class="wow fadeInUp" data-wow-duration="400ms" data-wow-delay="0ms">
                    <a href="#">من نحن</a>
                    
                </div>
            </div>
            <div class="col-md-2 ">
                <div class="wow fadeInUp" data-wow-duration="400ms" data-wow-delay="0ms">
                    <a href="#">اتص بنا</a>
                    
                </div>
            </div>
            <div class="col-md-4 ">
                <div class="wow fadeInUp" data-wow-duration="400ms" data-wow-delay="0ms">
                    <img src="/image/Udeer_Logo.jpg" width="50%">
                    
                </div>
            </div>
            <div class="col-md-2 ">
                <div class="wow fadeInUp" data-wow-duration="400ms" data-wow-delay="0ms">
                    <a href="#">الخصوصية</a>
                    
                </div>
            </div>
            <div class="col-md-2 ">
                <div class="wow fadeInUp" data-wow-duration="400ms" data-wow-delay="0ms">
                    <a href="#">سياسة الاستخدام</a>
                    
                </div>
            </div>

        </div>
        </div>
    </footer>
<script type="text/javascript">
    
        var geocoder = new google.maps.Geocoder();

        function geocodePosition(pos) {
          geocoder.geocode({
            latLng: pos
          }, function(responses) {
            if (responses && responses.length > 0) {
              updateMarkerAddress(responses[0].formatted_address);
            } else {
              updateMarkerAddress('Cannot determine address at this location.');
            }
          });
        }

        function updateMarkerStatus(str) {
          // document.getElementById('markerStatus').innerHTML = str;
        }

        function updateMarkerPosition(latLng) {
            $("#Coordinates_y").val(latLng.lng()) ;
            $("#Coordinates_x").val(latLng.lat()) ;
          
        }

        function updateMarkerAddress(str) {
          // document.getElementById('address').innerHTML = str;
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

          // Update current position info.
          updateMarkerPosition(latLng);
          geocodePosition(latLng);

          // Add dragging event listeners.
          google.maps.event.addListener(marker, 'dragstart', function() {
            updateMarkerAddress('Dragging...');
          });

          google.maps.event.addListener(marker, 'drag', function() {
            updateMarkerStatus('Dragging...');
            updateMarkerPosition(marker.getPosition());
          });

          google.maps.event.addListener(marker, 'dragend', function() {
            updateMarkerStatus('Drag ended');
            geocodePosition(marker.getPosition());

            // geocoder.geocode({
            //     latLng: marker.getPosition()
            //     }, function(responses) {
            //     if (responses && responses.length > 0) {
            //       console.log(responses[0]);
            //     } else {
            //       console.log('no');
            //     }
            //   });
            
          });
        }

        // Onload handler to fire off the app.
        google.maps.event.addDomListener(window, 'load', initialize);


</script>


   
</body>
@endsection
