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

   <div class="container c-body-con">
        <div class="col-md-9">
            <div class="raw">
                <div class="raw">
                    <div class="col-md-2">
                        
                        <a class="btn btn-default" href="{{action('LeaseController@create')}}">اضافة</a>
                    </div>
                    <div class="col-md-2">
                        <form action="{!!action('LeaseController@delete_array')!!}" method="post">
                            <input type='hidden' name='_token' value="{!! csrf_token() !!}">
                            <input name="names" id="del-arr" hidden/>
                            <button class="btn btn-danger"id="del-btn">مسح</button>
                        </form>
                    </div>
                </div>

                <div class="col-md-12 col-md-offset-0" >
                    <div id="" class="page-content">
                        @if(count($result))
                        <form action="{!!action('LeaseController@set_index')!!}" method="post">
                            <input type='hidden' name='_token' value="{!! csrf_token() !!}">
                            <div class="raw">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>رقم العقد</label>
                                        <input type="text" name="lease_number" class="form-control"/>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>عقود الايجار</label>
                                        <select name="validation" class="form-control">
                                            <option value=""> ---- </option>
                                            <option value="expired">عقود المغلقة</option>
                                            <option value="valid">عقود الفعالة</option>

                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>عقود التي تنتهي في غضون</label>
                                        <input type="date" name="ex_date" class="form-control"/>
                                    </div>
                                </div>
                                <div class="form-group">
                                        <input type="submit" class="btn btn-default" width="100%">
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
</body>
@endsection