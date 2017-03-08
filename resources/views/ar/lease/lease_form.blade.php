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
            <input type="text" class="form-control typeahead" id="renter" placeholder="المستاجر" name="renter">
            
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
                    
                    <input type="text" class="form-control typeahead" id="property" placeholder="اسم العقار" name="property">
                    
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
                    
                    <input type="text" class="form-control typeahead" id="property_unit" placeholder="وحدة العقار" name="property_unit">
                   
                </div>
                <span class="input-group-btn btn-left">
                    <a class="btn blue btn-outline" href="#" data-toggle="modal" data-target="#OwnerModal"><i class="fa fa-plus"></i></a>
                </span>
            </div>
        </div>
    </div>
    @if(!empty($terms))
    <div class="col-md-6">
          <div class="form-group form-md-line-input form-md-floating-label">
              <select id="terms_group" class="form-control">
                <option value=""></option>
                @foreach ($terms as $key => $value)
                <option >{{$key}}</option>
                @endforeach
              </select>
              <label for="Property_type">نوع مجموعة شروط</label>
          </div>
    </div>
    @endif  
    <div class="col-md-6">
        <div class="form-group form-md-line-input form-md-floating-label">
            <div class="input-icon right">
                  <input class="form-control form-control-inline " size="16" type="number" id="dof" min='1'>  
                  <label for="lease_starting_date">عدد الدفعات</label>  
            </div>
        </div>
    </div> 
    <div class="col-md-12">
        <div class="row" id='pay_dof'>
            
        </div>
    </div> 

    <div class="col-md-12">
        <div class="form-group form-md-line-input form-md-floating-label">
            <textarea name="terms" id="terms">  </textarea>
    
        </div>
    </div>    
    <div class="form-actions noborder">
      <div class="col-md-12">
        <input type="submit" class="btn blue" value="حفظ"></button>
        <button type="button" class="btn default">الغاء</button>
      </div>
    </div>
</form>