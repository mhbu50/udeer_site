@extends('template')
@section('lang','ar')
@section('head')
    <link href="/css/bootstrap-rtl.css" rel="stylesheet">
@endsection

@section('body')

<body id="" class="lease_management l-show">

    <section id="temp1">
        
            <div id="c-nav">
                @include('ar.ar_nav')
            </div>

   <div class="container-fluid c-body-con">
        <div class="col-md-9">
            <div class="row index-head-btn_wrp">
                <div class="col-md-2">
                    
                    <a class="btn btn-default c-btn-tp" href="{{action('LeaseController@create')}}">اضافة</a>
                </div>
                <div class="col-md-2">
                    <form c-url="{!!action('UdeerController@delete_array')!!}" method="post" class="del_arr">
                        <input type='hidden' name='_token' value="{!! csrf_token() !!}" />
                        <input type='hidden' name='doctype' value="lease"/>
                        <input name="names" id="del-arr" hidden/>
                        <a class="btn btn-danger c-btn-tp"id="del-btn">مسح</a>
                    </form>
                    
                </div>
            </div>
            <div class="raw">
                

                <div class="" >
                    <div id="" class="page-content">
                        @if(count($result))
                        <form action="{!!action('LeaseController@set_index')!!}" method="post">
                            <input type='hidden' name='_token' value="{!! csrf_token() !!}">
                            <div class="raw">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <input type="text" name="lease_number" class="form-control" placeholder="رقم العقد"/>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                               
                                        <select name="validation" class="form-control"  >
                                            <option value="" disabled selected> عقود الايجار </option>
                                            <option value="expired">عقود المغلقة</option>
                                            <option value="valid">عقود الفعالة</option>

                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <input placeholder="تنتهي في تاريخ" name="ex_date" class="form-control" type="text" onfocus="(this.type='date')"  id="ex_date">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                         <label>&nbsp;<br></label>
                                        <input type="submit" class="btn btn-ud" width="100%" value="بحث">
                                    </div>
                                </div>
                                
                                
                            </div>
                        </form> 
                         <table class="table table-strip"> 
                                <thead> 
                                    <tr> 
                                        <th>#</th>
                                        <th>اسم العقار</th>  
                                        <th>رقم الوحدة</th> 
                                        <th>تاريخ انتهاء العقد</th> 
                                        <th></th> 
                                        
                                    </tr> 
                                </thead> 
                                <tbody> 
                                    <tr>
                                     @for ($i = 0; $i < count($result); $i++)
                                        <th scope="row"><a href="{!!action('LeaseController@edit',['name'=>$result[$i]->name])!!}">{{ $result[$i]->name  }}</a></th>
                                        <td>{{$result[$i]->property}}</td>
                                        <td>{{$result[$i]->property_unit}}</td>
                                        <td>{{$result[$i]->expiry_date}}</td> 
                                        
                                       <td><input type='checkbox' class='del-check' id="{!!$result[$i]->name!!}" name=""></td>
                                    </tr>
                                    
                                        @endfor
                                                               

                                    </tr> 
                                </tbody> 
                            </table>
                            @else
                                <p>لا يوجد </p>
                            @endif
                            
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
    @include('ar.modals.confirm_modal')
</body>
@endsection