
@section('module','property_management')
@section('page_title','user')
@extends('template')

@section('css_page')

@endsection
@section('js_page')
    <script src="/assets/global/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js" type="text/javascript"></script>  
    <script src="/assets/pages/scripts/components-date-time-pickers.min.js" type="text/javascript"></script>
    <script type="text/javascript">
        $(document).ready(function(){
          user = {!!json_encode($user)!!}
          role = user.user_roles
          console.log(role)
          role.forEach(function(element) {
              $('#'+(element.role).replace(/\s+/g, '-') ).attr("checked", true);
              

          });
          
        });
    </script>
@endsection

@section('content')
    <h1 class="page-title"> ادارة الاملاك العقارية</h1>
    <div class="row">
      <div class="col-md-12">
        <div class="portlet light bordered">
          <div class="portlet-title">
            <div class="caption font-red-sunglo">
                {{$user->name}}
            </div>
          </div>
          <div class="portlet-body form">
               @include('ar.user.user_form',['action' => action('UserController@edit',$user->name)])
               <div class='row'>
                
               </div>
          </div>
        </div>
      </div>
    </div>
@endsection