<form method='post' action="{{$action}}" enctype="multipart/form-data">
    <input type='hidden' name='_token' value="{!! csrf_token() !!}">   
    <div class="col-md-6">
        <div class="form-group form-md-line-input form-md-floating-label">
            <div class="input-icon right">
                  <input class="form-control form-control-inline date-picker" size="16" type="text" value="" id="date" placeholder="" name="date">
                  <i class="fa fa-calendar"></i>  
                  <label for="date">تاريخ كتابة العقد</label>
                      
            </div>
        </div>
        
    </div> 
    <div class="col-md-6">    
        <div class="form-group form-md-line-input form-md-floating-label">
            <input type="text" class="form-control" id="renter" placeholder="" name="renter">
            <label for="renter">المستاجر</label>
        </div>
    </div> 
    <div class="col-md-6">
        <div class="form-group form-md-line-input form-md-floating-label">
            
            <input type="file" class="form-control" id="lease_doc" name="lease_doc">
            <label for="lease_doc">نص العقد</label>
        </div>
    </div> 
    <div class="col-md-6">   
        <div class="form-group form-md-line-input form-md-floating-label">
            <div class="input-icon right">
                  <input class="form-control form-control-inline date-picker" size="16" type="text" value="" id="lease_writing_date" placeholder="" name="lease_writing_date">
                  <i class="fa fa-calendar"></i>  
                  <label for="lease_writing_date">تاربخ امضاء العقد</label>
                      
            </div>
        </div>
    </div> 
    <div class="col-md-6">
        <div class="form-group form-md-line-input form-md-floating-label">
            <div class="input-icon right">
                <input class="form-control form-control-inline date-picker" size="16" type="text" value="" id="expiry_date" placeholder="" name="expiry_date">
                <i class="fa fa-calendar"></i>  
                <label for="expiry_date">تاربخ انتهاء العقد</label>       
            </div>
        </div>
    </div>
    
    <div class="col-md-6">
        <div class="form-group form-md-line-input form-md-floating-label">
            <input type="text" class="form-control" id="lease_duration" placeholder="" name="duration">
            <label for="lease_duration">مدة العقد</label>
        </div>
    </div>    
    <div class="col-md-6">
        <div class="form-group form-md-line-input form-md-floating-label">
            <div class="input-icon right">
                  <input class="form-control form-control-inline date-picker" size="16" type="text" value="" id="lease_starting_date" placeholder="" name="lease_starting_date">
                  <i class="fa fa-calendar"></i>  
                  <label for="lease_starting_date">تاربخ بدء الايجار</label>  
            </div>
        </div>
        
    </div> 
    <div class="col-md-6">
        <div class="form-group form-md-line-input form-md-floating-label">
            <div class="input-group">
                <div class="input-group-control">
                    
                    <input type="text" class="form-control typeahead" id="property" placeholder="" name="property">
                    <label for="property">اسم العقار</label>
                </div>
                <span class="input-group-btn btn-left">
                    <a class="btn blue btn-outline" href="#" data-toggle="modal" data-target="#OwnerModal"><i class="fa fa-plus"></i></a>
                </span>
            </div>
        </div>

    </div> 
    <div class="col-md-6">
        <div class="form-group form-md-line-input form-md-floating-label">
            <div class="input-group">
                <div class="input-group-control">
                    
                    <input type="text" class="form-control typeahead" id="property_unit" placeholder="" name="property_unit">
                    <label for="property unit">وحدة العقار</label>
                </div>
                <span class="input-group-btn btn-left">
                    <a class="btn blue btn-outline" href="#" data-toggle="modal" data-target="#OwnerModal"><i class="fa fa-plus"></i></a>
                </span>
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