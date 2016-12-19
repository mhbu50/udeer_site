@extends('template')
@section('lang','ar')
@section('head')
    <link href="/css/bootstrap-rtl.css" rel="stylesheet">
@endsection

@section('body')

<body id="property_comments" class="property_management p-show">

    <section id="temp1">
        
            <div id="c-nav">
                @include('ar.ar_nav')
            </div>

   <div class="container c-body-con">

        <div class="col-md-9">
            <div class="raw">
                <div class="col-md-12 col-md-offset-0" >
                    @include('ar.tabs.property',['property_name' => $property_name])   
                    <div id="" class="page-content">
                        <h3>الملاجظات</h3>
                     @for ($i = 0; $i < count($result); $i++)
                                        <label>{{$i+1}})</label>
                                        <h4>{{$result[$i]->user}},{{$result[$i]->creation}}</h4>
                                        <p>{{$result[$i]->content}}</p>
                      @endfor   
                       <form method='post' action="{!!action('CommentController@store',['doctype' => 'property','name' => $property_name])!!}" enctype="multipart/form-data">
                        <input type='hidden' name='_token' value="{!! csrf_token() !!}">
                          <div class="form-group">
                                <label for="exampleInputEmail1">اضافة ملاحضة</label>
                                <input type="text" class="form-control" id="content" placeholder="" name="content">
                                <input type="submit" class="btn btn-default" value='ارسال'/>
                           </div>  
                        </form>
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
    <script type="text/javascript">
        $(document).ready(function(){
            $(".nav-tabs #notes").addClass('active');
            

        });
    </script>
</body>
@endsection