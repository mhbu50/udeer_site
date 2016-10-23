@extends('template')
@section('lang','ar')
@section('head')
    <link href="/css/bootstrap-rtl.css" rel="stylesheet">
@endsection

@section('body')


<body id="home" class="homepage ar">
    

    <header id="header">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-right"><a href="#" data-toggle="modal" data-target="#myModal">تسجيل</a></div>
                <div class="col-md-2 text-center">
                    
                    <div class='logo'>
                        <img src="/image/logo_b.png" class='big-s'>
                        <img src="/image/logo_s.png" class='small-s'>
                    </div>
                </div>
                <!-- <div class="col-sm-2">ss</div> -->
                <div class="col-md-4 col-md-offset-4 text-center"id="c-ti-head">
                    
                    <p class=''>يدير هي الخدمة الأقوى و الأكثر تكاملا لادارة الأملاك و العقارات في المنطقة </p>
                    <div >
                        <div>
                            <a class="btn  btn-lg c-btn-head" href="#">ابدأ باستخدام يدير الان</a>
                        </div>
                        <div>
                            <div class='col-md-6 c-mob'><span class="fa fa-android " aria-hidden="true">  </span> يدير على اندرويد </div>
                            <div class='col-md-6 c-mob'><span class="fa fa fa-apple" aria-hidden="true"> </span> يدير على ايفون </div>
                        </div>       
                        
                    </div>
                </div>
               
            </div>
        </div>
    </header>

    <section id="c-why" class='parallax' >
        <div class='main'>
            <div class="container">
                <div class="row">
                    <div class="section-header">
                        <h2 class="text-center wow fadeInDown">لماذا يدير؟</h2>
                    </div>

                    <div class=" text-center fast">
                        <div class="col-md-4 ">
                            <div class="wow fadeInUp" data-wow-duration="400ms" data-wow-delay="0ms">
                                <a href="#ServModal1" class="portfolio-link " >
                                    <span class="fa-stack fa-4x">
                                        <i class="fa fa-circle fa-stack-2x text-primary"></i>
                                        <i class="fa fa-clock-o fa-stack-1x fa-inverse"></i>
                                    </span>
                                </a>    
                                <h4 class="service-heading">سريع</h4>
                            </div>
                        </div>
                    </div>
                    <div class=" text-center secure">
                        <div class="col-md-4 ">
                            <div class="wow fadeInUp" data-wow-duration="400ms" data-wow-delay="0ms">
                                <a href="#ServModal1" class="portfolio-link">
                                    <span class="fa-stack fa-4x">
                                        <i class="fa fa-circle fa-stack-2x text-primary"></i>
                                        <i class="fa fa-lock fa-stack-1x fa-inverse"></i>
                                    </span>
                                </a>    
                                <h4 class="service-heading">امن</h4>
                            </div>
                        </div>
                    </div>
                    <div class=" text-center cloude">
                        <div class="col-md-4 ">
                            <div class="wow fadeInUp" data-wow-duration="400ms" data-wow-delay="0ms">
                                <a href="#ServModal1" class="portfolio-link">
                                    <span class="fa-stack fa-4x">
                                        <i class="fa fa-circle fa-stack-2x text-primary"></i>
                                        <i class="fa fa-cloud fa-stack-1x fa-inverse"></i>
                                    </span>
                                </a>    
                                <h4 class="service-heading">خدمة سحابية</h4>
                            </div>
                        </div>
                    </div>
                    <div class=" text-center memory">
                        <div class="col-md-4 ">
                            <div class="wow fadeInUp" data-wow-duration="400ms" data-wow-delay="0ms">
                                <a href="#ServModal1" class="portfolio-link" >
                                    <span class="fa-stack fa-4x">
                                        <i class="fa fa-circle fa-stack-2x text-primary"></i>
                                        <i class="fa fa-folder-open-o  fa-stack-1x fa-inverse"></i>
                                    </span>
                                </a>    
                                <h4 class="service-heading">ادارة الاموال و الاملاك</h4>
                            </div>
                        </div>
                    </div>
                    <div class=" text-center report">
                        <div class="col-md-4 ">
                            <div class="wow fadeInUp" data-wow-duration="400ms" data-wow-delay="0ms">
                                <a href="#ServModal1" class="portfolio-link">
                                    <span class="fa-stack fa-4x">
                                        <i class="fa fa-circle fa-stack-2x text-primary"></i>
                                        <i class="fa fa-file-o fa-stack-1x fa-inverse"></i>
                                    </span>
                                </a>    
                                <h4 class="service-heading">تقارير فورية</h4>
                            </div>
                        </div>
                    </div>
                    <div class=" text-center easy">
                        <div class="col-md-4 ">
                            <div class="wow fadeInUp" data-wow-duration="400ms" data-wow-delay="0ms">
                                <a href="#ServModal1" class="portfolio-link">
                                    <span class="fa-stack fa-4x">
                                        <i class="fa fa-circle fa-stack-2x text-primary"></i>
                                        <i class="fa fa-thumbs-o-up fa-stack-1x fa-inverse"></i>
                                    </span>
                                </a>    
                                <h4 class="service-heading">سهل الاستخدام</h4>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
            <img class="img-responsive wow fadeIn" src="/image/bot.png" alt="" data-wow-duration="300ms" data-wow-delay="300ms">
        </div>
        <p class='text-center c-footer '>يدير هو رابط الحقيقي و ألاقوى بين كل من له علاقة في العقارات</p>

    </section>

    <section id="every" class="wow fadeIn parallax">
        <div class='main'>   
            <div>
                <div class='container text-center'>
                    <h2>يدير معك أينما كنت </h2>
                    <p>على الأجهزة اللوحية و حتى الهواتف النقالة</p>
                    <img id='c-tv-im' src="/image/tv.png" >
                </div>
                <!-- change the image -->
                <img src="/image/bot_bl.png" width="100%">
            </div>
            
        </div>
        <p class='c-footer text-center'>يدير هو رابط الحقيقي و ألاقوى بين كل من له علاقة في العقارات</p>
    </section>

    <section id="vid">
        <!-- change the image -->
        <img class="img-responsive wow fadeIn flip" src="/image/bot_bl.png" alt="" data-wow-duration="300ms" data-wow-delay="300ms">
        <div class="container">
            <div class="row text-center">
                <div class="col-md-6 ">
                    <div class="wow fadeInUp c-yout" data-wow-duration="400ms" data-wow-delay="0ms">
                        <iframe width="80%" height="315" src="https://www.youtube.com/embed/CgZMOPLh_4o" frameborder="0" allowfullscreen></iframe>
                        
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="wow fadeInUp" data-wow-duration="400ms" data-wow-delay="0ms">
                        
                        <p>تعرف على يدير من مؤسسي يدير انفسهم</p>
                        
                    </div>
                </div>
            </div>            
        </div>
        
        
    </section>

 
    @include('ar.ar_footer')
    <!-- Modal -->
    <div class="modal fade c-ud-modal" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
             <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            
          </div>
          
          <div class="modal-body">
            <div class="form-group">
                <input type="text" class="form-control " id="" placeholder="البريد الالكتروني">
            </div>
            <div class="form-group">
                <input type="email" class="form-control " id="" placeholder="كلمة السر">    
            </div>
            
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-ud" data-dismiss="modal">تسجيل دخول</button>
            <a class="btn btn-primary" href="/user/register">حساب جديد</a>
          </div>
          
        </div>
      </div>
    </div>

</body>

</body>

