@section('lang','ar')
@section('module','property_management')
@extends('template')

@section('css_page')
    <link href="/assets/global/plugins/bootstrap-table/bootstrap-table.min.css" rel="stylesheet" type="text/css" />

    <link href="../assets/global/plugins/datatables/datatables.min.css" rel="stylesheet" type="text/css" />
    <link href="../assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap-rtl.css" rel="stylesheet" type="text/css" />

@endsection
@section('js_page')
    <script src="/assets/pages/scripts/table-bootstrap.min.js" type="text/javascript"></script>
    <script src="/assets/global/plugins/bootstrap-table/bootstrap-table.min.js" type="text/javascript"></script>
@endsection

@section('content')
    <h1 class="page-title"> ادارة الاملاك العقارية</h1>
    <div class="row">
      <div class="col-md-12">
        <div class="portlet light bordered ">
          <div class="portlet-title">
            <div class="caption font-red-sunglo">
                العقود
            </div>
            <div class="actions">

               
                <a class="btn blue btn-outline" href="/lease/create">
                    اضافة
                    <i class="fa fa-plus"></i>
                </a>
                <a class="btn red btn-outline c-btn-tp" href="javascript:;" id="del-btn" doctype="lease">
                    مسح
                    <i class="icon-trash"></i>
                    <input type='hidden' name='_token' class="token" value="{!! csrf_token() !!}" />
                    <input name="names" id="del-arr" hidden/>
                </a>
                <a class="btn btn-outline  buttons-html5 btn yellow btn-outline" tabindex="0" aria-controls="sample_1" href="#"><span>اكسل</span></a>
            </div>
            
            
          </div>
          <div class="portlet-body form">
            @if(count($result))
            <table class="table table-hover table-striped"> 
                <thead> 
                    <tr>  
                        <th><div class="th-inner ">#</div></th>
                        <th><div class="th-inner ">اسم الموظف</div></th>  
                        <th><div class="th-inner ">تاريخ الالتحاق</div></th> 
                        <th><div class="th-inner ">تاريخ الولادة</div></th> 
                        <th></th> 
                    </tr> 
                </thead> 
                <tbody> 
                    
                        @for ($i = 0; $i < count($result); $i++)
                        <tr>
                            <th scope="row"><a href="{!!action('LeaseController@edit',['name'=>$result[$i]->name])!!}">{{ $result[$i]->name  }}</a></th>
                            <td>{{$result[$i]->property}}</td>
                            <td>{{$result[$i]->property_unit}}</td>
                            <td>{{$result[$i]->expiry_date}}</td> 
                            
                           <td class="bs-checkbox">
                                <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline del-check-lab "><input data-index="0" name="btSelectItem" type="checkbox" class='del-check' id="{!!$result[$i]->name!!}"><span></span></label>
                            </td> 
                        </tr> 
                        @endfor
                    
                </tbody> 
            </table>
            @else
                <p class="bg-warning">لا يوجد </p>
            @endif
          </div>

        </div>
      </div>
    </div>
    @include('ar.modals.confirm_modal')
    
@endsection


















@extends('template')
@section('lang','ar')
@section('head')
    <link href="/css/bootstrap-rtl.css" rel="stylesheet">
@endsection

@section('body')

<body id="" class="customer_management receiver-show">

    <section id="temp1">
        
            <div id="c-nav">
                @include('ar.ar_nav')
            </div>

   <div class="container-fluid c-body-con">
        <div class="col-md-9">  
            <div class="row index-head-btn_wrp">
                <div class="col-md-2">
                    
                    <a class="btn btn-default c-btn-tp" href="{{action('ReceiverController@create')}}">اضافة</a>
                </div>
                <div class="col-md-2">
                    <form c-url="{!!action('UdeerController@delete_array')!!}" method="post" class="del_arr">
                        <input type='hidden' name='_token' value="{!! csrf_token() !!}" />
                        <input type='hidden' name='doctype' value="Employee"/>
                        <input name="names" id="del-arr" hidden/>
                        <a class="btn btn-danger c-btn-tp"id="del-btn">مسح</a>
                    </form>
                    
                </div>
            </div>
            <div class="raw">
                
                <div class="" >
                    <div id="" class="page-content">
                        @if(count($result))
                         <table class="table table-strip"> 
                                <thead> 
                                    <tr> 

                                        
                                    </tr> 
                                </thead> 
                                <tbody> 
                                    <tr>
                                     @for ($i = 0; $i < count($result); $i++)
                                     <?php $doctype = str_replace('/', '*', $result[$i]->name) ?>
                                        <th scope="row"><a href="{!!action('ReceiverController@edit',['name' => $doctype])!!}">{{ $result[$i]->name  }}</a></th>
                                        <td>{{$result[$i]->employee_name}}</td>
                                        <td>{{$result[$i]->date_of_joining}}</td>
                                        <td>{{$result[$i]->date_of_birth}}</td> 
                                        <td><input type='checkbox' class='del-check' id="{!!$result[$i]->name!!}" name=""></td>
                                       </td>
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