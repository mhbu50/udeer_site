<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UDEER</title>
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/bootstrap-rtl.css" rel="stylesheet">
    <link href="../css/font-awesome.min.css" rel="stylesheet">
    <link href="../css/animate.min.css" rel="stylesheet">
    
    <link href="../css/main.css" rel="stylesheet">
    
    <link rel="shortcut icon" href="../img/favicon.ico">
</head>

<body  >

    <section id="temp1">
        
            <div id="c-nav">
                @include('ar.nav')
            </div>

    <div class="container c-body-con">
        <div class="col-md-9">
            <div class="raw">
                <div class="col-md-12 col-md-offset-0" >
                    <div id="propriety_unit_form" class="page-content">
                        <div class="form-column col-sm-6">

                            <div class="raw">
                                <h2>عنوان<h2>
                            </div>
                           

                            <div class="form-group">
                                <label for="date">تاريخ</label>
                                <input type="date" class="form-control" id="date" placeholder="">
                            </div>
                            <div class="form-group">
                                <label for="duration">دورة</label>
                                <input type="text" class="form-control" id="duration" placeholder="">
                            </div>

                            <div class="form-group">
                                <label for="rent_writing_date">تاربخ امضاء العقد</label>
                                <input type="text" class="form-control" id="rent_writing_date" placeholder="">
                            </div>
                            
                            

                            <div class="form-group">
                              <label for="Property type">نوع العقار</label>
                              <select id="Property type" class="form-control">
                                <option>a</option>
                                <option>b</option>
                              </select>
                            </div>

                           
                                <div class="panel-footer">
                                    <a href="#" class="btn btn-info" role="button">اضافة</a>
                                </div>
                            </div>

                        </div>
                      

                        

                        
                        

                        
                        
                        


                        
                        
                       
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
</body>
</html>