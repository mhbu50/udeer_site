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
                <div class="col-md-12 col-md-offset-0" >
                    <div id="" class="page-content">
                         <table class="table table-strip"> 
                                <thead> 
                                    <tr> 
                                        <th>#</th>
                                        <th>اسم العقار</th>  
                                        <th>صاحب العقار</th> 
                                        <th></th> 
                                        <th></th>
                                    </tr> 
                                </thead> 
                                <tbody> 
                                    <tr>
                                     @for ($i = 0; $i < count($result); $i++)
                                        <th scope="row"><a href="{!!action('PropertyController@edit',['name'=>$result[$i]->name])!!}">{{ $result[$i]->name  }}</a></th>
                                        <td>{{$result[$i]->property_name}}</td>
                                        <td>{{$result[$i]->owner}}</td> 
                                        <td><form action="{!!action('PropertyController@delete',['name'=>$result[$i]->name])!!}" method="post">
                                                <input type='hidden' name='_token' value="{!! csrf_token() !!}">
                                                <input type="submit" value="مسح" />
                                           </form>   
                                       </td>
                                       <td><input type='checkbox' class='checky' id="{!!$result[$i]->name!!}"></td>
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
                {!! $data['property_management']['label'] = 'ادارة املاك العقارية';

                    $data['property_management']['property']['url'] = action("PropertyController@index");
                    $data['property_management']['property']['label'] = 'العرقارات';

                    $data['property_management']['property_unit']['url'] = action("Property_unitController@index");
                    $data['property_management']['property_unit']['label'] = 'وحدات العقارات';

                    $data['property_management']['property_unit_activity']['url'] = action("Property_unit_activityController@index");
                    $data['property_management']['property_unit_activity']['label'] = 'نشاط الوحدات';
                    
                 !!}
                @include('ar.ar_side',['data' => $data])
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
                  return this.id;
                }).get();
                unique = values.filter(function(elem, index, self) {
                    return index == self.indexOf(elem);
                })
                console.log(values);


            });
        });
    </script>
</body>
@endsection