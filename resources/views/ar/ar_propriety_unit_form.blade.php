@extends('template')
@section('lang','ar')
@section('head')
    <link href="/css/bootstrap-rtl.css" rel="stylesheet">
@endsection

@section('body')
    

<body  >

    <section id="temp1">
        
            <!-- Static navbar -->
              <div id="c-nav">
                @include('ar.ar_nav')
            </div>
              
    <div class="container c-body-con">
        <div class="col-md-9">
            <div class="raw">
                <div class="col-md-12 col-md-offset-0" >
                    <div id="propriety_uni_form.html" class="page-content">
                        <div class="form-column col-sm-6">

                            <div class="raw">
                                <h2>title<h2>
                            </div>



                            <div class="form-group">
                                <label for="exampleInputEmail1">Property name</label>
                                <input type="text" class="form-control" id="property_name" placeholder="">
                            </div>
                            
                            <div class="form-group">
                              <label for="disabledSelect">input select</label>
                              <select id="disabledSelect" class="form-control">
                                <option>a</option>
                                <option>b</option>
                              </select>
                            </div>


                            <div class="form-group">
                                <label for="exampleInputEmail1">unit number</label>
                                <input type="text" class="form-control" id="unit_number" placeholder="">
                            </div>

                            <div class="form-group">
                              <label for="unit_type">unit type</label>
                              <select id="unit_type" class="form-control">
                                <option>a</option>
                                <option>b</option>
                              </select>
                            </div>


                            <div class="form-group">
                                <label for="exampleInputEmail1">annual rent amount</label>
                                <input type="text" class="form-control" id="annual_rent_amount" placeholder="">
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">insurance amount</label>
                                <input type="text" class="form-control" id="insurance_amount" placeholder="">
                            </div>

                            <div class="form-group">
                              <label for="commission_type">commission type</label>
                              <select id="commission_type" class="form-control">
                                <option>a</option>
                                <option>b</option>
                              </select>
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">commission amount</label>
                                <input type="text" class="form-control" id="commission_amount" placeholder="">
                            </div>

                            <div class="form-group">
                              <label for="unit_description">unit description</label>
                              <select id="commission_type" class="form-control">
                                <option>a</option>
                                <option>b</option>
                              </select>
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">unit_space</label>
                                <input type="text" class="form-control" id="unit_space" placeholder="">
                            </div>

                            <div class="form-group">
                              <label for="finishing_status">finishing status</label>
                              <select id="finishing_status" class="form-control">
                                <option>a</option>
                                <option>b</option>
                              </select>
                            </div>

                            <div class="form-group">
                              <label for="room_slot">room slot</label>
                              <select id="room_slot" class="form-control">
                                <option>a</option>
                                <option>b</option>
                              </select>
                            </div>

                            <div class="form-group">
                              <label for="number_of_bathrooms">number of bathrooms</label>
                              <select id="number_of_bathrooms" class="form-control">
                                <option>a</option>
                                <option>b</option>
                              </select>

                              <div class="form-group">
                                  <label for="unit_activity">unit activity</label>
                                  <input type="text" class="form-control" id="unit_activity" placeholder="">
                              </div>
                            </div>

                            

                            

                        </div>
                        <div class='col-md-6'>
                            <div class="raw">
                                  <h2>title2<h2>
                            </div>
                            <div class="form-group">
                                <label for="water_meter_number">water meter number</label>
                                <input type="text" class="form-control" id="water_meter_number" placeholder="">
                            </div>

                            <div class="form-group">
                                <label for="electricity_meter_number">electricity meter number</label>
                                <input type="text" class="form-control" id="electricity_meter_number" placeholder="">
                            </div>
                            <div class="form-group">
                                <label for="property">property</label>
                                <input type="text" class="form-control" id="property" placeholder="">
                            </div>
                            
                            
                    
                            <div class="panel panel-default">
                                <div class="panel-heading">documents</div>
                                <div class="panel-body">
                                    <table class="table table-bordered">
                                        <thead>
                                          <tr>
                                            <th>Firstname</th>
                                            <th>Lastname</th>
                                            <th>Email</th>
                                          </tr>
                                        </thead>
                                        <tbody>
                                          <tr>
                                            <td>John</td>
                                            <td>Doe</td>
                                            <td>john@example.com</td>
                                          </tr>
                                          <tr>
                                            <td>Mary</td>
                                            <td>Moe</td>
                                            <td>mary@example.com</td>
                                          </tr>
                                          
                                        </tbody>
                                      </table>
                                </div>
                                <div class="panel-footer">
                                    <a href="#" class="btn btn-info" role="button">Link Button</a>
                                </div>
                            </div>

                            <div class="panel panel-default">
                                <div class="panel-heading">notes</div>
                                <div class="panel-body">
                                    <table class="table table-bordered">
                                        <thead>
                                          <tr>
                                            <th>Firstname</th>
                                            <th>Lastname</th>
                                            <th>Email</th>
                                          </tr>
                                        </thead>
                                        <tbody>
                                          <tr>
                                            <td>John</td>
                                            <td>Doe</td>
                                            <td>john@example.com</td>
                                          </tr>
                                          <tr>
                                            <td>Mary</td>
                                            <td>Moe</td>
                                            <td>mary@example.com</td>
                                          </tr>
                                          
                                        </tbody>
                                      </table>
                                </div>
                                <div class="panel-footer">
                                    <a href="#" class="btn btn-info" role="button">Link Button</a>
                                </div>
                            </div>




                            <div class="panel panel-default">
                                <div class="panel-heading">images</div>
                                <div class="panel-body">
                                    <table class="table table-bordered">
                                        <thead>
                                          <tr>
                                            <th>Firstname</th>
                                            <th>Lastname</th>
                                            <th>Email</th>
                                          </tr>
                                        </thead>
                                        <tbody>
                                          <tr>
                                            <td>John</td>
                                            <td>Doe</td>
                                            <td>john@example.com</td>
                                          </tr>
                                          <tr>
                                            <td>Mary</td>
                                            <td>Moe</td>
                                            <td>mary@example.com</td>
                                          </tr>
                                          
                                        </tbody>
                                      </table>
                                </div>
                                <div class="panel-footer">
                                    <a href="#" class="btn btn-info" role="button">Link Button</a>
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

 
    <footer id="footer">
        <div class="container text-center">
            <div class="col-md-2 ">
                <div class="wow fadeInUp" data-wow-duration="400ms" data-wow-delay="0ms">
                    <a href="#">Term of use</a>
                    
                </div>
            </div>
            <div class="col-md-2 ">
                <div class="wow fadeInUp" data-wow-duration="400ms" data-wow-delay="0ms">
                    <a href="#">Privecy Policy</a>
                    
                </div>
            </div>
            <div class="col-md-4 ">
                <div class="wow fadeInUp" data-wow-duration="400ms" data-wow-delay="0ms">
                    <img src="../img/Udeer_Logo.jpg" width="50%">
                    
                </div>
            </div>
            <div class="col-md-2 ">
                <div class="wow fadeInUp" data-wow-duration="400ms" data-wow-delay="0ms">
                    <a href="#">Contact Us</a>
                    
                </div>
            </div>
            <div class="col-md-2 ">
                <div class="wow fadeInUp" data-wow-duration="400ms" data-wow-delay="0ms">
                    <a href="#">About Us</a>
                    
                </div>
            </div>

        
        </div>
    </footer>
</body>
@endsection