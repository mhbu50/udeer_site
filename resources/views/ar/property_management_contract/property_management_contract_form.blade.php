<form method='post' action="{{$action}}" enctype="multipart/form-data">
    <input type='hidden' name='_token' value="{!! csrf_token() !!}">  
   
    <div class="col-md-6">
        <!--Simple Select with Search-->
        <div class="form-group pmd-textfield pmd-textfield-floating-label">
            <label>اسم العقار</label>
            <div class="col-md-11">
                <div class="row">
                    <select class="select2-c pmd-select2 form-control" id="property" doctype="property" doc-label="property_name" name="property">
                        <option></option>
                    </select>
                </div>
            </div>
            <div class="col-md-1">
                <div class="row">
                    <span class="input-group-btn btn-left">
                            <a class="btn blue btn-outline" href="#" data-toggle="modal" data-target="#Property_Modal"><i class="fa fa-plus"></i></a>
                    </span>
                </div>    
            </div>
        </div>
                                    
    </div>    
    
    <div class="col-md-6">
        <div class="form-group form-md-line-input form-md-floating-label">
            <div class="input-icon right">
                <input class="form-control form-control-inline date-picker" size="16" type="text" value="" id="signature_date" placeholder="" name="signature_date">
                <i class="fa fa-calendar"></i>  
                <label for="">تاريخ امضاء العقد</label>       
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group form-md-line-input form-md-floating-label">
            <input type="text" class="form-control" id="first_witness_name" placeholder="" name="first_witness_name">
            <label for="">شاهد الاول</label>
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group form-md-line-input form-md-floating-label">
            <input type="text" class="form-control" id="second_witness_name" placeholder="" name="second_witness_name">
            <label for="">شاهد الثاني</label>
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