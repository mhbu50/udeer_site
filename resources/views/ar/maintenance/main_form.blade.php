<form method='post' action="{{$action}}" enctype="multipart/form-data">
    <input type='hidden' name='_token' value="{!! csrf_token() !!}">   
    <div class="col-md-6">
        <div class="form-group form-md-line-input form-md-floating-label">
            <div class="input-icon right">
                  <input class="form-control form-control-inline date-picker" size="16" type="text" value="" id="Subject" placeholder="" name="Subject">
                  <i class="fa fa-calendar"></i>  
                  <label for="Subject">اعنوان</label>
                      
            </div>
        </div>
        
    </div> 

    <div class="col-md-6">
        <div class="form-group form-md-line-input form-md-floating-label">
            <div class="input-icon right">
                  <input class="form-control form-control-inline date-picker" size="16" type="text" value="" id="item" placeholder="" name="item">
                  <i class="fa fa-calendar"></i>  
                  <label for="item">نوع</label>
            </div>
        </div>
    </div> 

    
   
    <div class="form-actions noborder">
      <div class="col-md-12">
        <input type="submit" class="btn blue" value="حفظ"></button>
        <button type="button" class="btn default">الغاء</button>
      </div>
    </div>
</form>