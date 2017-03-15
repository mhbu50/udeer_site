@section('lang','ar')
@section('module','property_management')
@section('page_title','lease')
@extends('template')

@section('css_page')
    <link href="/assets/global/plugins/bootstrap-table/bootstrap-table.min.css" rel="stylesheet" type="text/css" />

    

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
                دفعات العقد رقم {{$lease_name}}
            </div>
            
            
          </div>
          <div class="portlet-body form">
            @if(count($result))
            <table class="table table-hover table-striped"> 
                <thead> 
                    <tr>  
                        <th><div class="th-inner ">رقم الدفعة</div></th>
                        <th><div class="th-inner ">مقدار</div></th>
                        <th><div class="th-inner ">الحالة</div></th>  
                        <th><div class="th-inner ">تاريخ الاستحقاق</div></th> 

                        <th><div class="th-inner ">تاريخ التحصيل</div></th> 
                        <th><div class="th-inner ">المحصل</div></th> 
                        <th><div class="th-inner ">طريقة الدفع</div></th> 
                        <th></th> 
                    </tr> 
                </thead> 
                <tbody> 
                    
                        @foreach($result as $instalment)
                        <tr>
                            <th scope="row"><a href="{{action('LeaseController@instalment_show',['instalment' => $instalment->name,'lease' => $lease_name])}}">{{ $instalment->number  }}</a></th>
                            <td>{{$instalment->amount}}</td>
                            <td>{{$instalment->status}}</td>
                            <td>{{$instalment->due_date }}</td>

                            <td>{{$instalment->payment_date}}</td>
                            <td>{{$instalment->receiver }}</td>
                            <td>{{$instalment->payment_method or ''}}</td> 
                            
                        </tr> 
                        @endforeach
                    
                </tbody> 
            </table>
            @else
                <p class="bg-warning">لا يوجد </p>
            @endif
          </div>

        </div>
      </div>
    </div>
    
@endsection
