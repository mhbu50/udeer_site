<form method='post' action="{{$action}}" enctype="multipart/form-data">
    <input type='hidden' name='_token' value="{!! csrf_token() !!}">   
    
    <div class='col-md-6'>
        <div class="form-group form-md-line-input form-md-floating-label">
            <input type="text" class="form-control" id="employee_name" placeholder="" name="employee_name">
            <label for="employee_name">اسم الكامل</label>
        </div>
    </div>
    <div class='col-md-6'>
        <div class="form-group form-md-line-input form-md-floating-label">
            <input type="text" class="form-control" id="company" placeholder="" name="company">
            <label for="company">الشركة</label>
        </div>
    </div>
     <div class='col-md-6'>
        <div class="form-group form-md-line-input form-md-floating-label">        
            <div class="input-icon right">
                <input class="form-control form-control-inline date-picker" size="16" type="text" value="" id="date_of_joining" placeholder="" name="date_of_joining">
                <i class="fa fa-calendar"></i>  
                <label for="date_of_joining">تاريخ الالتحاق</label>
            </div>
        </div>
    </div>
    <div class='col-md-6'>
        <div class="form-group form-md-line-input form-md-floating-label">
            <div class="input-icon right">
                <input class="form-control form-control-inline date-picker" size="16" type="text" value="" id="date_of_birth" placeholder="" name="date_of_birth">
                <i class="fa fa-calendar"></i>  
                <label for="date_of_birth">تاريخ الولادة</label>   
            </div>
        </div>
    </div>
    <div class='col-md-6'>
        <div class="form-group form-md-line-input form-md-floating-label">
            <input type="text" class="form-control" id="employee_number" placeholder="" name="employee_number">
            <label for="employee_number">رقم الوظيفي</label>
        </div>
    </div>

    <div class="form-actions noborder">
      <div class="col-md-12">
        <input type="submit" class="btn blue" value="حفظ"></button>
        <button type="button" class="btn default">الغاء</button>
      </div>
    </div>

</form>
