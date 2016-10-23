@extends('template')
@section('lang','ar')
@section('head')
    <link href="/css/bootstrap-rtl.css" rel="stylesheet">
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
              <form id="contact-form" name="contact-form" method="post" action="#">
                <h3>معلومات الشخصية</h3>
                <div class="form-group">
                    <label class='fo-la'>اسم المستخدم</label>
                    <input class='fo-co form-control'type="text" name="#" class="" placeholder="" required="required">
                </div>
                <div class="form-group">
                    <label class='fo-la'>البريد الالكتروني</label>
                    <input class='fo-co form-control'type="email" name="#" class="" placeholder="" required="required">
                </div>
                <div class="form-group">
                    <label class='fo-la'>كلمة السر</label>
                    <input class='fo-co form-control'type="text" name="#" class="" placeholder="" required="required">
                </div>
                <div class="form-group">
                    <label class='fo-la'>تكرار كلمة السر</label>
                    <input class='fo-co form-control'type="text" name="#" class="" placeholder="" required="required">
                </div>
                <div class="form-group">
                    <label class='fo-la'>رقم الجوال</label>
                    <input class='fo-co form-control'type="text" name="#" class="" placeholder="" required="required">
                </div>
                <div class="form-group">
                    <label class='fo-la'>رقم الهاتف</label>
                    <input class='fo-co form-control'type="text" name="#" class="" placeholder="" required="required">
                </div>
                
                 <h3>معلومات المنشأة</h3>
                 <div class="form-group">
                    <label class='fo-la'>اسم المنشأة</label>
                    <input class='fo-co form-control'type="text" name="#" class="" placeholder="" required="required">
                </div>
                <div class="form-group">
                    <label class='fo-la'>السجل التجاري</label>
                    <input class='fo-co form-control'type="text" name="#" class="" placeholder="" required="required">
                </div>
                <div class="form-group">
                    <label class='fo-la'>موقع المنشأة</label>
                    <input class='fo-co form-control'type="text" name="#" class="" placeholder="الدولة" required="required">
                </div>
                <div class="form-group">
                    <label class='fo-la'>&nbsp;</label>
                    <input class='fo-co form-control'type="text" name="#" class="" placeholder="المدينة" required="required">
                </div>
                <div class="form-group">
                    <label class='fo-la'>&nbsp;</label>
                  
                  <button type="submit" class="btn btn-ud">ارسال</button>
                </div>
              </form>   
            </div>
        </div>
        <div class='col-md-5'id='map'><img src="/image/maps.JPG" width='100%'></div>
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
  
</body>
@endsection
