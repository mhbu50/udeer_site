<form method='post' action="{{$action}}" enctype="multipart/form-data">
    <input type='hidden' name='_token' value="{!! csrf_token() !!}">   
    <div class="form-column col-sm-12">

        <div class="form-group">
            <label for="">قيمة السند</label>
            <input type="number" class="form-control" id="amount" placeholder="" name="amount" requierd min="0">
        </div>
        <div class="form-group">
            <label for="type">نوع السند</label>
            <select id="type" class="form-control" name='type'>
                <option disabled selected value=""> -- اختر -- </option>
                <option value='catch'>سند قبض</option>
                <option value='pay'>سند صرف</option>
            </select>
        </div>

        <div class="form-group">
            <label for="">العقار</label>
            <div class="auto_compile_warp">
              <input type="text" class="form-control" id="property" placeholder="" name='property' requierd>
              <a class="c-pls" href="#" data-toggle="modal" data-target="#PropertyModal"><i class="glyphicon glyphicon-plus"></i></a>
            </div>
        </div>


        <div class="form-group">
            <label for="">تاريخ السند</label>
            <input type="date" class="form-control" id="date" placeholder="" name="date" requierd>
        </div>

        <div class="form-group">
            <label for="">شرح</label>
            <textarea class="form-control" id="description" placeholder="" name="description"></textarea>
        </div>

    </div>
    <div class='raw'>
        <div class='col-md-12'><button class='btn btn-ud'>حفظ</button></div>
    </div>
</form>