    <nav class="navbar navbar-custom navbar-fixed-top big-s big-nav">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand " href="#"><img class="c-logo"src="/image/logo_horizone.jpg"></a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-center c-menu-center">
            
            <li class="c-menue-item"><a href="{{url('/')}}"><img src="/image/home.png"><p>الصفحة الرئيسية</p></a></li>
            <li class="c-menue-item pm_a"><a href="{{action('PropertyController@index')}}"><img src="/image/Office.png"><p>ادارة الاملاك العقارية</p></a></li>
            <li class="c-menue-item"><a href="#"><img src="/image/File.png"><p>التقارير</p></a></li>
            <li class="c-menue-item"><a href="#"><img src="/image/Tag.png"><p>العروض و الصيانة</p></a></li>
            <li class="c-menue-item"><a href="#"><img src="/image/setting.png"><p>الصيانة</p></a></li>
            <li class="c-menue-item"><a href="#"><img src="/image/Bell.png"><p>الاشعارات</p></a></li>
            <li class="c-menue-item"><a href="#"><img src="/image/tick.png"><p>التذاكر و المهام</p></a></li>
            <li class="c-menue-item com_a"><a href="{{action('ComplainController@index')}}"><img src="/image/search.png"><p>الشكاوي و التحقيق</p></a></li>
            
            
          </ul>
          <ul class="nav navbar-nav navbar-right">
            
            <li class="c-user">
              <p>محمد عبدالله</p>
              <button type="button" class="btn btn-danger">تسجيل خروج</button>
            </li>
          </ul>
        </div><!--/.nav-collapse -->
      </div><!--/.container-fluid -->
    </nav>

    <nav class="navbar small-s side-menue-sm">
      <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">يدير</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav">

            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">العقار و الوحدات  <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li ><a href="/property/create">اضافة عقار</a></li>
                <li ><a href="/property_unit/create">اضافة وحدة</a></li>
                <li ><a href="/property/index">عرض العقار</a></li>
                <li ><a href="/property_unit/index">عرض الوحدات</a></li>
              </ul>
            </li>

            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">عقود الايجار <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li id="side_lease_show"><a href="/lease/index">عرض كافة العقود</a></li>
                <li id="side_lease_create"><a href="/lease/create">اضافة عقود ايجار</a></li>
                <li><a href="/lease_rent_payment/index">تقارير العقود*</a></li>
                <li><a href="/lease_rent_payment/index">ارشيف عقود الايجار*</a></li>
              </ul>
            </li>

            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">النظام المالي <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li id="side_rent_payment_show" ><a href="/rent_payment/create">تحصيل ايجار</a></li>
                <li><a href="#">استلام مبلغ*</a></li>
                <li id="side_debt_show"><a href="/debt/index">سجلات المكتب</a></li>
                <li id="side_pay_rec_show"><a href="/pay_receipt/index">الصادرات</a></li>
                <li id="side_catch_rec_show"><a href="/catch_receipt/index">الواردات</a></li>
                <li><a href="#">التزامات المالية*</a></li>
                <li><a href="#">ارصدة عملاء*</a></li>
                <li><a href="#">تحويل*</a></li>
                <li><a href="#">السندات المالية*</a></li>
                <li><a href="#">ارشيف سندات المالية*</a></li>
              </ul>
            </li>

            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">ادارة العملاء <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="#">كل العملاء*</a></li>
                <li id="side_owner_show"><a href="/property_owner/index">اصحاب الاملاك</a></li>
                <li id="side_renter_show"><a href="/renter/index">الموستجرون</a></li>
                <li id="side_supplier_show"><a href="/supplier/index">مزودو الخدمة</a></li>
                <li id="side_receiver_show"><a href="/receiver/index">المحصلين</a></li>
              </ul>
            </li>

            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">ارشفة سريعة <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="#">عرض كافة العقود</a></li>
                <li><a href="#">عرض كافة السندات</a></li>
              </ul>
            </li>

          </ul>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </nav>



    <div id="mySidenav" class="sidenav small-s">
      <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
      <a href="{{url('/')}}"><div>الصفحة الرئيسية</div> <img src="/image/home.png" ></a>
      <a href="{{action('PropertyController@index')}}"><div>التقارير </div><img src="/image/File.png" ></a>
      <a href="#"><div>العروض و الصيانة </div><img src="/image/Tag.png"></a>
      <a href="#"><div>الصيانة </div> <img src="/image/setting.png" ></a>
      <a href="#"><div>الاشعارات</div> <img src="/image/Bell.png" ></a>
      <a href="#"><div>التذاكر و المهام</div> <img src="/image/tick.png" ></a>
      <a href="{{action('ComplainController@index')}}"><div>الشكاوي و التحقيق </div><img src="/image/search.png" ></a>
    </div>


    <span style="font-size:30px" id='men-ic' class="small-s" onclick="openNav()">&#9776;</span>
