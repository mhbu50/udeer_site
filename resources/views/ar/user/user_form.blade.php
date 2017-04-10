<form method='post' action="{{$action}}" enctype="multipart/form-data">
    <input type='hidden' name='_token' value="{!! csrf_token() !!}">   
    <div class="col-md-6">
        <div class="form-group form-md-line-input form-md-floating-label">
            <input type="text" class="form-control" id="first_name" placeholder="" name="first_name">
            <label for="">اسم</label>
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group form-md-line-input form-md-floating-label">
            <input type="text" class="form-control" id="last_name" placeholder="" name="last_name">
            <label for="">اسم العائلة</label>
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group form-md-line-input form-md-floating-label">
            <input type="number" class="form-control" id="mobile_number" placeholder="" name="mobile_number">
            <label for="">رقم الجوال</label>
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group form-md-line-input form-md-floating-label">
            <input type="email" class="form-control" id="email" placeholder="" name="email">
            <label for="Email">البريد الالكتروني</label>
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group form-md-line-input form-md-floating-label">
            <input type="password" class="form-control" id="new_password" placeholder="" name="new_password">
            <label for="password">كلمة المرور</label>
        </div>
    </div>
    <div class="col-md-12">
        <div class="row">
            <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
              <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="headingOne">
                  <h4 class="panel-title">
                    <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-controls="collapseOne">
                      صلاحيات
                    </a>
                  </h4>
                </div>
                <div id="collapseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
                  <div class="panel-body">
                    @foreach($roles as $role)
                    <div class="col-md-3">     
                        <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline " >{{$role->name}}<input data-index="0" name='role[{{rawurlencode($role->name)}}]' type="checkbox" class='' id="{{str_replace(' ', '-', $role->name )}}"><span></span></label>
                    </div>
                    @endforeach
                  </div>
                </div>
              </div>
            </div>
        </div>    
    </div>
    <div class="form-actions noborder">
      <div class="col-md-12">
        <input type="submit" class="btn blue" value="حفظ"/>
        <button type="button" class="btn default">الغاء</button>
      </div>
    </div>
</form>    