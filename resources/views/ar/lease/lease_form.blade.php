<form method='post' action="{{$action}}" enctype="multipart/form-data">
    <input type='hidden' name='_token' value="{!! csrf_token() !!}">   
    <div class="col-md-6">
        <div class="form-group form-md-line-input form-md-floating-label">
            <div class="input-icon right">
                  <input class="form-control form-control-inline date-picker" size="16" type="text" value="" id="date" placeholder="" name="date">
                  <i class="fa fa-calendar"></i>  
                  <label for="lease_writing_date">تاريخ كتابة العقد</label>
                      
            </div>
        </div>
        
    </div> 
    <div class="col-md-6">    
        <div class="form-group form-md-line-input form-md-floating-label">
            <div class="input-group">
                <div class="input-group-control">
                    <input type="text" class="form-control typeahead edit_read_only" id="renter" placeholder="المستاجر" name="renter">
                </div>
                <span class="input-group-btn btn-left">
                    <a class="btn blue btn-outline" href="#" data-toggle="modal" data-target="#RenterModal"><i class="fa fa-plus"></i></a>
                </span>
            </div>
        </div>
    </div> 
    
    <div class="col-md-6">   
        <div class="form-group form-md-line-input form-md-floating-label">
            <div class="input-icon right">
                  <input class="form-control form-control-inline date-picker" size="16" type="text" value="" id="lease_writing_date" placeholder="" name="lease_writing_date">
                  <i class="fa fa-calendar"></i>  
                  <label for="lease_signature_date">تاربخ امضاء العقد</label>
                      
            </div>
        </div>
    </div> 
    
    
    <div class="col-md-6">
        <div class="form-group form-md-line-input form-md-floating-label">
            <input type="text" class="form-control edit_read_only" id="lease_duration" placeholder="" name="duration">
            <label for="lease_duration">مدة العقد(بالشهر)</label>
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
                    
                    <input type="text" class="form-control typeahead edit_read_only" id="property" placeholder="اسم العقار" name="property">
                    
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
                    
                    <input type="text" class="form-control typeahead edit_read_only" id="property_unit" placeholder="وحدة العقار" name="property_unit">
                   
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
                  <input class="form-control form-control-inline edit_read_only " size="16" type="number" id="instalment_number" min='1' name="instalment_number">  
                  <label for="lease_starting_date">عدد الدفعات</label>  
            </div>
        </div>
    </div> 
    <div class="col-md-12">
        <div class="row" id='instalment_amount'>
            
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