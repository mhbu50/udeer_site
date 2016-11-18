
<div class="">
	<ul class="nav nav-tabs">
	  <li id="show"><a href="{{action('PropertyController@show',$property_name)}}" >معلومات عن العقار</a></li>
	  <li id="units"><a href="{{action('PropertyController@unit_index',$property_name)}}">وحدات العقار</a></li>
	  <li id="expenses"><a href="{{action('PropertyController@unit_expense_index',$property_name)}}">مصروفات العقار</a></li>
	  <li id="leases"><a href="{{action('PropertyController@lease_index',$property_name)}}">عقود الایجار</a></li>
	  <li id=""><a href="#">حرکات المالیه</a></li>
	  <li id="documents"><a href="#">المستندات</a></li>
	  <li id="notes"><a href="#">الملاحظات</a></li>
	</ul>
</div>