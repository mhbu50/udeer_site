<form method='post' action="{{$action}}" enctype="multipart/form-data">
    <input type='hidden' name='_token' value="{!! csrf_token() !!}">   
    <div class="col-md-6">
        <div class="form-group form-md-line-input form-md-floating-label">
            <input type="text" class="form-control" id="debtor_name" placeholder="" name="debtor_name" value="{{ isset($debt->debtor_name) ? $debt->debtor_name : ""}}">
            <label for="">اسم المدين</label>
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group form-md-line-input form-md-floating-label">
            <input type="number" class="form-control" id="amount" placeholder="" name="amount" value="{{ isset($debt->amount) ? $debt->amount : ""}}">
            <label for="amount">مقدار</label>
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group form-md-line-input form-md-floating-label">
            <textarea type="text" class="form-control" id="description" placeholder="" name="description"> {{ isset($debt->description) ? $debt->description : ""}}</textarea>
            <label for="">شرح</label>
        </div>
    </div>
    <div class="form-actions noborder">
      <div class="col-md-12">
        <input type="submit" class="btn blue" value="حفظ"/>
        <button type="button" class="btn default">الغاء</button>
      </div>
    </div>
</form>    