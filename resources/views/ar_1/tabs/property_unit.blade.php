
<div class="">
	<ul class="nav nav-tabs">
	  <li id="notes"><a href="{{action('Property_unitController@comments',$unit_name)}}" >الملاحظات</a></li>
	  <li id="leases"><a href="{{action('Property_unitController@lease_index',$unit_name)}}" >عقود الوحدة</a></li>
	  <li id="documents"><a href="{{action('Property_unitController@docs_index',$unit_name)}}" >المستندات</a></li>
	  <li id="rents"><a href="{{action('Property_unitController@rent_index',$unit_name)}}" >حركات المالية</a></li>
	  <li id="show"><a href="{{action('Property_unitController@edit',$unit_name)}}" >معلومات عن الوحدة</a></li>
	</ul>
</div>
