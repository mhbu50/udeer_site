<form method='post' action="{{$action}}" enctype="multipart/form-data">
    <input type='hidden' name='_token' value="{!! csrf_token() !!}">   
    <div class="col-md-6">
        <div class="form-group form-md-line-input form-md-floating-label">
            <input type="number" class="form-control" id="amount" placeholder="" name="amount" requierd min="0">
            <label for="">قيمة السند</label>
        </div>
    </div>    
    <div class="col-md-6">    
        <div class="form-group form-md-line-input form-md-floating-label">
            <select id="type" class="form-control" name='type'>
                <option value=""></option>
                <option value='catch'>سند قبض</option>
                <option value='pay'>سند صرف</option>
            </select>
            <label for="type">نوع السند</label>
        </div>
    </div>    
    <div class="col-md-6">
        <div class="form-group form-md-line-input form-md-floating-label">
            <div class="input-group">
                <div class="input-group-control">
                    <input type="text" class="form-control typeahead" id="property" placeholder="" name='property'>
                    <label for="">العقار</label>
                </div>
                <span class="input-group-btn btn-left">
                    <a class="btn blue btn-outline" href="#" data-toggle="modal" data-target="#PropertyModal"><i class="fa fa-plus"></i></a>
                </span>
            </div>
        </div>
    </div>    
    <div class="col-md-6">
        <div class="form-group form-md-line-input form-md-floating-label">
            <div class="input-icon right">
                  <input class="form-control form-control-inline date-picker" size="16" type="text" value="" id="date" placeholder="" name="date" requierd >
                  <i class="fa fa-calendar"></i>  
                <label for="">تاريخ السند</label>
                      
            </div>
        </div>
    </div>    
    <div class="col-md-6">
        <div class="form-group form-md-line-input form-md-floating-label">
            <textarea class="form-control" id="description" placeholder="" name="description"></textarea>
            <label for="">شرح</label>
        </div>
    </div>
    <div class="form-actions noborder">
      <div class="col-md-12">
        <input type="submit" class="btn blue" value="حفظ"></button>
        <button type="button" class="btn default">الغاء</button>
      </div>
    </div>
</form>
