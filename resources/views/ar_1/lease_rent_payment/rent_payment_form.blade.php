<form method='post' action="{{$action}}" enctype="multipart/form-data">
    <input type='hidden' name='_token' value="{!! csrf_token() !!}">  
    <div class="raw">
        <div class='col-md-6'>
            <div class="form-group">
                <label for="date">تاريخ التحصيل</label>
                <input type="date" class="form-control" id="date" placeholder="" name="date">
            </div>
        </div>
        <div class='col-md-6'>
            <div class="form-group">
              <label for="payment_method">طريقة الدفع</label>
              <select id="payment_method" class="form-control" name='payment_method'>
                <option value='cash'>كاش</option>
                <option vlaue='bank transfer'>تحويل بنكي</option>
                <option vlaue='cheque'>الشيك</option>
              </select>
            </div>
        </div>
    </div>
    <div class='raw'>
        <div class='col-md-6'>
            <div class="form-group">
                <label for="due_date">من تاريخ</label>
                <input type="date" class="form-control" id="due_date" placeholder="" name="from_date">
            </div>
        </div>
        <div class='col-md-6'>
            <div class="form-group">
                <label for="to_date">لتاريخ</label>
                <input type="date" class="form-control" id="to_date" placeholder="" name="to_date">
            </div>
        </div>
    </div> 

    <div class='raw'>
        <div class='col-md-6'>
        
        </div>
        <div class='col-md-6'>

        </div>
    </div> 
     <div class='raw'>
        <div class='col-md-6'>
            <div class="form-group">
                <label for="renter">الموأجر</label>
                <div class="auto_compile_warp">
                    <input type="text" class="form-control" id="renter" placeholder="" name="renter">
                    <a class="c-pls" href="#" data-toggle="modal" data-target="#Renter_Modal"><i class="glyphicon glyphicon-plus"></i></a>
                </div>
            </div>
        </div>
        <div class='col-md-6'>
            <div class="form-group">
                <label for="duration">اسم العقد</label>
                <div class="auto_compile_warp">
                    <input type="text" class="form-control" id="lease" placeholder="" name="lease">
                    <a class="c-pls" href="#" data-toggle="modal" data-target="#Lease_Modal"><i class="glyphicon glyphicon-plus"></i></a>
                </div>
            </div>
        </div>
    </div> 
    <div class='raw'>
        <div class='col-md-6'>
            <div class="form-group">
                <label for="collector">اسم المحصل</label>
                <div class="auto_compile_warp">
                    <input type="text" class="form-control" id="receiver" placeholder="" name="collector">
                    <a class="c-pls" href="#" data-toggle="modal" data-target="#Receiver_Modal"><i class="glyphicon glyphicon-plus"></i></a>
                </div>
            </div>
        </div>
        <div class='col-md-6'>
            <div class="form-group">
                <label for="amount">مقدار</label>
                <input type="text" class="form-control" id="amount" placeholder="" name="amount">
            </div>
        </div>
    </div>
    
    <div class='raw'>
        <div class='col-md-12'><button class='btn btn-ud'>حفظ</button></div>
    </div>
</form>