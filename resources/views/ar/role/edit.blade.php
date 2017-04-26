
@section('module','property_management')
@section('page_title','debt')
@extends('template')

@section('css_page')

@endsection
@section('js_page')
    <script src="/assets/global/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js" type="text/javascript"></script>  
    <script src="/assets/pages/scripts/components-date-time-pickers.min.js" type="text/javascript"></script>
    <script type="text/javascript">
        $(document).ready(function(){
          role = {!!json_encode($role)!!}
          perm = {!!json_encode($perm)!!}
          console.log(perm)

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
                {{$role->name}}
            </div>
          </div>
          <div class="portlet-body form">
               <table class="table table-hover table-striped"> 
                  <thead> 
                      <tr>  
                          <th>#</th>
                          <th><div class="th-inner ">#</div></th>  
                      </tr> 
                  </thead> 
                  <tbody> 
                      @for ($i = 0; $i < count($perm); $i++)
                          <tr>
                            
                              <td>{{$perm[$i]->parent}}</td>
                              <td>
                                
                                    <span>مشاهدة <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline  "><input data-index="0" name="btSelectItem" type="checkbox" class='' id="" <?php echo ( $perm[$i]->read == 1 ? 'checked' : ''  )?> > <span></span></label></span>
                                    <span>تعديل <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline  "><input data-index="0" name="btSelectItem" type="checkbox" class='' id=""  <?php echo ( $perm[$i]->write == 1 ? 'checked' : ''  )?>><span></span></label></span>
                                    <span>تكوين <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline  "><input data-index="0" name="btSelectItem" type="checkbox" class='' id=""  <?php echo ( $perm[$i]->create == 1 ? 'checked' : ''  )?>><span></span></label></span>
                                    <span>مسح <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline  "><input data-index="0" name="btSelectItem" type="checkbox" class='' id=""  <?php echo ( $perm[$i]->delete == 1 ? 'checked' : ''  )?>><span></span></label></span>
                                 

                              </td>
                              
                              
                              
                          </tr>
                      @endfor                    
                  </tbody> 
              </table>
          </div>
        </div>
      </div>
    </div>
@endsection