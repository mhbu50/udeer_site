<form method='post' action="{{$action}}" enctype="multipart/form-data">
    <input type='hidden' name='_token' value="{!! csrf_token() !!}">  
    
    <div class="col-md-6">
        <div class="form-group form-md-line-input form-md-floating-label">
            <div class="input-group">
                <div class="input-group-control">
                    
                    <input type="text" class="form-control typeahead edit_read_only" id="property" placeholder="اسم العقار" name="property">
                    
                </div>
                <span class="input-group-btn btn-left">
                    <a class="btn blue btn-outline" href="#" data-toggle="modal" data-target="#PropertyModal"><i class="fa fa-plus"></i></a>
                </span>
            </div>
        </div>

    </div> 
    <div class="col-md-6">
        <div class="form-group form-md-line-input form-md-floating-label">
            <div class="input-group">
                <div class="input-group-control">
                    
                    <input type="text" class="form-control typeahead edit_read_only" id="property_unit" placeholder="اسم الوحدة" name="property_unit">
                    
                </div>
                <span class="input-group-btn btn-left">
                    <a class="btn blue btn-outline" href="#" data-toggle="modal" data-target="#Property_unitModal"><i class="fa fa-plus"></i></a>
                </span>
            </div>
        </div>

    </div> 
    
    <div class='col-md-6'>
        <div class="form-group form-md-line-input form-md-floating-label">
            <select name='type' class="form-control">
                <option value=""></option>
                <option value="maintenance">صيانة</option>
                <option value="service">فاتورة خدمة</option>
            </select>
            <label for="type">النوع</label>
        </div>
    </div>

    <div class="col-md-6">
        <div class="form-group form-md-line-input form-md-floating-label">
            <div class="input-group">
                <div class="input-group-control">
                    <input type="text" class="form-control typeahead edit_read_only" id="supplier" placeholder="مزود الخدمة" name="supplier">
                    
                </div>
                <span class="input-group-btn btn-left">
                    <a class="btn blue btn-outline" href="#" data-toggle="modal" data-target="#SupplierModal"><i class="fa fa-plus"></i></a>
                </span>
            </div>
        </div>

    </div> 
    <div class='col-md-6'>
        <div class="form-group form-md-line-input form-md-floating-label">
            <input type="text" class="form-control" id="invoice_number" placeholder="" name="invoice_number">
            <label for="">رقم الفاتورة</label>
        </div>
    </div>
    <div class='col-md-6'>
        <div class="form-group form-md-line-input form-md-floating-label">
            <div class="input-icon right">
                  <input class="form-control form-control-inline date-picker" size="16" type="text" value="" id="date" placeholder="" name="date">
                  <i class="fa fa-calendar"></i>  
                  <label for="">تاريخ</label>
            </div>
        </div>
    </div>
    <div class='col-md-6'>
        <div class="form-group form-md-line-input form-md-floating-label">
            <input type="number" class="form-control" id="amount" placeholder="" name="amount">
            <label for="">مقدار</label>
        </div>
    </div>

    <div class="form-column col-md-12">
        <div class="form-group form-md-line-input form-md-floating-label">
          <textarea class="form-control" rows="5" id="description" name='description'></textarea>
          <label for="comment">شرح</label>
        </div>
    </div>
    
    <div class="form-actions noborder">
      <div class="col-md-12">
        <input type="submit" class="btn blue" value="حفظ"></button>
        <button type="button" class="btn default">الغاء</button>
      </div>
    </div>
</form>