<form method='post' action="{{$action}}" enctype="multipart/form-data">
    <input type='hidden' name='_token' value="{!! csrf_token() !!}">   
    <div class="form-column col-sm-6">
        <div class="form-group">
            <label for="date">تاريخ كتابة العقد</label>
            <input type="date" class="form-control" id="date" placeholder="" name="date">
        </div>
        <div class="form-group">
            <label for="renter">المستاجر</label>
            <input type="text" class="form-control" id="renter" placeholder="" name="renter">
        </div>
        <div class="form-group">
            <label for="lease_doc">نص العقد</label>
            <input type="file" class="form-control" id="lease_doc" name="lease_doc">
        </div>
       
        <div class="form-group">
            <label for="lease_writing_date">تاربخ امضاء العقد</label>
            <input type="date" class="form-control" id="lease_writing_date" placeholder="" name="lease_writing_date">
        </div>
        <div class="form-group">
            <label for="expiry_date">تاربخ انتهاء العقد</label>
            <input type="date" class="form-control" id="expiry_date" placeholder="" name="expiry_date">
        </div>
    </div>
    <div class="form-column col-sm-6">
        <div class="form-group">
            <label for="lease_duration">مدة العقد</label>
            <input type="text" class="form-control" id="lease_duration" placeholder="" name="duration">
        </div>
        <div class="form-group">
            <label for="lease_starting_date">تاربخ بدء الايجار</label>
            <input type="date" class="form-control" id="lease_starting_date" placeholder="" name="lease_starting_date">
        </div>
        <div class="form-group">
            <label for="property">اسم العقار</label>
            <div class="auto_compile_warp">
                <input type="text" class="form-control" id="property" placeholder="" name="property">
                <a class="c-pls" href="#" data-toggle="modal" data-target="#PropertyModal"><i class="glyphicon glyphicon-plus"></i></a>
            </div>
        </div>
        <div class="form-group">
            <label for="property unit">وحدة العقار</label>
            <div class="auto_compile_warp">
                <input type="text" class="form-control" id="property_unit" placeholder="" name="property_unit">
                <a class="c-pls" href="#" data-toggle="modal" data-target="#Property_unitModal"><i class="glyphicon glyphicon-plus"></i></a>
            </div>
        </div>
    </div>
    <div class='raw'>
        <div class='col-md-12'><button class='btn btn-ud'>حفظ</button></div>
    </div>
</form>