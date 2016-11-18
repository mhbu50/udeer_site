@extends('template')
@section('lang','ar')
@section('head')
    <link href="/css/bootstrap-rtl.css" rel="stylesheet">
@endsection

@section('body')

<body  >

    <section id="temp1">
        
            <div id="c-nav">
                @include('ar.ar_nav')
            </div>

   <div class="container c-body-con">

        <div class="col-md-9">
            <div class="raw">
                <div class="col-md-2">
                    
                    <a class="btn btn-default" href="{{action('PropertyController@create')}}">اضافة</a>
                </div>
                <div class="col-md-2">
                    <form action="{!!action('PropertyController@delete_array')!!}" method="post">
                        <input type='text' name="names" id="del-arr" hidden>
                        <input type='hidden' name='_token' value="{!! csrf_token() !!}">
                        <input type="submit" class="btn btn-danger" value="مسح" id="del-btn" disabled/>
                    </form>  
                </div>
            </div>
            <div class="raw">
                <div class="col-md-12 col-md-offset-0" >

                    <div id="" class="page-content">
                         <table class="table table-strip"> 
                                <thead> 
                                    <tr> 
                                        <th>#</th>
                                        <th>اسم العقار</th>  
                                        <th>صاحب العقار</th> 
                                        <th></th> 
                                    </tr> 
                                </thead> 
                                <tbody> 
                                    <tr>
                                     @for ($i = 0; $i < count($result); $i++)
                                        <th scope="row"><a href="{!!action('PropertyController@edit',['name'=>$result[$i]->name])!!}">{{ $result[$i]->name  }}</a></th>
                                        <td>{{$result[$i]->property_name}}</td>
                                        <td>{{$result[$i]->owner}}</td> 
                                        
                                       <td><input type='checkbox' class='checky' id="{!!$result[$i]->name!!}" name=></td>
                                    </tr>
                                        @endfor                  

                                    </tr> 
                                </tbody> 
                            </table>
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
            $checkbox = $('.checky');
            var chkArray = [];
            $('.checky').change(function(){
                var values = $('input:checkbox:checked').map(function () {
                  return '"'+this.id+'"';
                }).get();
                unique = values.filter(function(elem, index, self) {
                    return index == self.indexOf(elem);
                })
                $('#del-arr').val('['+unique+']');
                if(unique.length){
                    $("#del-btn").prop('disabled', false);
                }else{
                    $("#del-btn").prop('disabled', true);
                }
            });
            

        });
    </script>
</body>
@endsection