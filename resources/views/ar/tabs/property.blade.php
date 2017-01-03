
<div class="">
	<ul class="nav nav-tabs">
	  <li id="show"><a href="{{action('PropertyController@edit',$property_name)}}" >معلومات عن العقار</a></li>
	  <li id="units"><a href="{{action('PropertyController@unit_index',$property_name)}}">وحدات العقار</a></li>
	  <li id="expenses"><a href="{{action('PropertyController@expense_index',$property_name)}}">مصروفات العقار</a></li>
	  <li id="leases"><a href="{{action('PropertyController@lease_index',$property_name)}}">عقود الایجار</a></li>
	  <li id="financial_movements"><a href="{{action('PropertyController@financial_movements',$property_name)}}">حرکات المالیه</a></li>
	  <li id="documents"><a href="{{action('PropertyController@docs_index',$property_name)}}">المستندات</a></li>
	  <li id="notes"><a href="{{action('PropertyController@comments',$property_name)}}">الملاحظات</a></li>
	</ul>
</div>