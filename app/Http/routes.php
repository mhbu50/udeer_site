<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/


Route::get('/', function () {
    return view('ar_1.ar_index');
});

Route::get('/user/register', function () {
    return view('ar.ar_register');
});

Route::get('/test', 'UdeerController@test');

Route::get('/test2', function(){
	return view('test2');
});

Route::get('/find/{doctype}/key/{key?}/field_search/{field_search?}', 'UdeerController@find');

Route::get('/get_rent/property_unit/{name?}', 'UdeerController@get_rent');


Route::post('/login', 'UdeerController@login');

Route::get('/logout', 'UdeerController@logout');

Route::post('/admin', 'UdeerController@admin');

Route::post('/del_array', 'UdeerController@delete_array');


Route::get('/update_password/{key?}', 'UserController@create_update_password');
Route::post('/update_password/{key?}', 'UserController@store_update_password');





// prperty routes
Route::get('/property/create', 'PropertyController@create');
Route::post('/property/create','PropertyController@store');

Route::post('/property/create_ajax','PropertyController@store_ajax');

Route::get('/property/{property_name?}/show','PropertyController@show');

Route::get('/property/{property_name?}/leases','PropertyController@lease_index');

Route::get('/property/{property_name?}/expenses','PropertyController@expense_index');

Route::get('/property/{property_name?}/units','PropertyController@unit_index');

Route::get('/property/{property_name?}/financial_movements','PropertyController@financial_movements');

Route::get('/property/{property_name?}/edit','PropertyController@edit');
Route::post('/property/{property_name?}/edit','PropertyController@update');

Route::get('/property/{property_name?}/comments','PropertyController@comments');

Route::get('/property/{property_name?}/test','PropertyController@test');

Route::get('/property/index','PropertyController@index');

Route::post('/property/index','PropertyController@set_index');


Route::get('/property/{property_name?}/docs','PropertyController@docs_index');

Route::post('/property/{property_name?}/delete','PropertyController@delete');

Route::get('/property/{property_name?}/create/unit','PropertyController@create_unit');
Route::post('/property/{property_name?}/create/unit','PropertyController@store_unit');


Route::get('/property/{property_name?}/lease/create','PropertyController@create_lease');
Route::post('/property/{property_name?}/lease/create','PropertyController@store_lease');

Route::post('/property/delete_array', 'PropertyController@delete_array');

Route::post('/property/delete','PropertyController@delete_array');


Route::post('/search_link','PropertyController@search_link');


// prperty unit routes
Route::get('/property_unit/create', 'Property_unitController@create');
Route::post('/property_unit/create','Property_unitController@store');

Route::post('/property_unit/create_ajax','Property_unitController@store_ajax');

Route::get('/property_unit/{unit_name?}/edit','Property_unitController@edit');
Route::post('/property_unit/{unit_name?}/edit','Property_unitController@update');

Route::get('/property_unit/{unit_name?}/show','Property_unitController@show');

Route::get('/property_unit/index','Property_unitController@index');

Route::post('/property_unit/index','Property_unitController@set_index');

Route::get('/property_unit/{unit_name?}/rents','Property_unitController@rent_index');

Route::get('/property_unit/{unit_name?}/leases','Property_unitController@lease_index');

Route::get('/property_unit/{unit_name?}/lease/create','Property_unitController@create_lease');
Route::post('/property_unit/{unit_name?}/lease/create','Property_unitController@store_lease');

Route::post('/property_unit/{unit_name?}/delete','Property_unitController@delete');

Route::post('/property_unit/delete_array', 'Property_unitController@delete_array');

Route::get('/property_unit/{unit_name?}/comments','Property_unitController@comments');

Route::get('/property_unit/{unit_name?}/docs','Property_unitController@docs_index');


// prperty unit activity routes
Route::get('/property_unit_activity/create', 'Property_unit_activityController@create');
Route::post('/property_unit_activity/create','Property_unit_activityController@store');

Route::get('/property_unit_activity/{name?}/edit','Property_unit_activityController@edit');
Route::post('/property_unit_activity/{name?}/edit','Property_unit_activityController@update');

Route::get('/property_unit_activity/index','Property_unit_activityController@index');

Route::post('/property_unit_activity/{name?}/delete','Property_unit_activityController@delete');

Route::post('/property_unit_activity/delete_array', 'Property_unit_activityController@delete_array');

// lease routes
Route::get('/lease/create', 'LeaseController@create');
Route::post('/lease/create','LeaseController@store');

Route::post('/lease/create_ajax','LeaseController@store_ajax');

Route::get('/lease/{name?}/edit','LeaseController@edit');
Route::post('/lease/{name?}/edit','LeaseController@update');

Route::get('/lease/index','LeaseController@index');

Route::post('/lease/index','LeaseController@set_index');

Route::post('/lease/{name?}/delete','LeaseController@delete');

Route::get('/lease/{name}/instalments','LeaseController@instalment_index');

Route::get('/lease/{lease?}/instalment/{instalment?}','LeaseController@instalment_show');

Route::post('/lease/{lease?}/instalment/{instalment?}','LeaseController@instalment_update');

Route::post('/lease/delete_array', 'LeaseController@delete_array');

Route::get('/lease/{name?}/test','LeaseController@test');

// lease rent payment routes
Route::get('/rent_payment/create', 'Lease_rent_paymentController@create');
Route::post('/rent_payment/create','Lease_rent_paymentController@store');

Route::get('/rent_payment/{name?}/edit','Lease_rent_paymentController@edit');
Route::post('/rent_payment/{name?}/edit','Lease_rent_paymentController@update');

Route::get('/rent_payment/index','Lease_rent_paymentController@index');

Route::post('/rent_payment/{name?}/delete','Lease_rent_paymentController@delete');

Route::post('/rent_payment/delete_array', 'Lease_rent_paymentController@delete_array');

// lease expence routes
Route::get('/property/{property_name?}/expense/create', 'Property_expenseController@create');
Route::post('/property/{property_name?}/expense/create','Property_expenseController@store');

Route::get('/property_expense/{name?}/edit','Property_expenseController@edit');
Route::post('/property_expense/{name?}/edit','Property_expenseController@update');

Route::get('/property_expense/index','Property_expenseController@index');

Route::post('/property_expense/{name?}/delete','Property_expenseController@delete');

Route::post('/property_expense/delete_array', 'Property_expenseController@delete_array');

// complain routes
Route::get('/complain/create', 'ComplainController@create');
Route::post('/complain/create','ComplainController@store');

Route::get('/complain/{name?}/edit','ComplainController@edit');
Route::post('/complain/{name?}/edit','ComplainController@update');

Route::get('/complain/index','ComplainController@index');

Route::post('/complain/{name?}/delete','ComplainController@delete');

Route::post('/complain/delete_array', 'ComplainController@delete_array');

// receipt routes
Route::get('/receipt/create', 'ReceiptController@create');
Route::post('/receipt/create','ReceiptController@store');

Route::get('/receipt/{name?}/edit','ReceiptController@edit');
Route::post('/receipt/{name?}/edit','ReceiptController@update');

Route::get('/receipt/index','ReceiptController@index');
Route::post('/receipt/index','ReceiptController@set_index');

Route::post('/receipt/{name?}/delete','ReceiptController@delete');
Route::post('/receipt/delete_array', 'ReceiptController@delete_array');

Route::get('/catch_receipt/index','ReceiptController@catch_index');
Route::get('/pay_receipt/index','ReceiptController@pay_index');
Route::get('/receipt/index','ReceiptController@index');




// user
Route::get('/user/register', 'UserController@create_user');
Route::post('/user/register', 'UserController@store_user');



// renter routes
Route::get('/renter/create', 'RenterController@create');
Route::post('/renter/create','RenterController@store');

Route::get('/renter/{name?}/edit','RenterController@edit');
Route::post('/renter/{name?}/edit','RenterController@update');

Route::get('/renter/index','RenterController@index');

Route::post('/renter/index','RenterController@set_index');

Route::post('/renter/create_ajax','RenterController@store_ajax');

Route::post('/renter/{name?}/delete','RenterController@delete');


Route::post('/renter/delete_array', 'RenterController@delete_array');

// receiver routes
Route::get('/receiver/create', 'ReceiverController@create');
Route::post('/receiver/create','ReceiverController@store');

Route::post('/receiver/create_ajax','ReceiverController@store_ajax');

Route::get('/receiver/{name?}/edit','ReceiverController@edit');
Route::post('/receiver/{name?}/edit','ReceiverController@update');

Route::get('/receiver/index','ReceiverController@index');

Route::post('/receiver/{name?}/delete','ReceiverController@delete');

Route::post('/receiver/delete_array', 'ReceiverController@delete_array');

// supplier  routes
Route::get('/supplier/create', 'SupplierController@create');
Route::post('/supplier/create','SupplierController@store');

Route::post('/supplier/create_ajax','SupplierController@store_ajax');

Route::get('/supplier/{name?}/edit','SupplierController@edit');
Route::post('/supplier/{name?}/edit','SupplierController@update');

Route::get('/supplier/index','SupplierController@index');

Route::post('/supplier/index','SupplierController@set_index');



Route::post('/supplier/{name?}/delete','SupplierController@delete');

Route::post('/supplier/delete_array', 'SupplierController@delete_array');

// property_owner  routes
Route::get('/property_owner/create', 'Property_ownerController@create');
Route::post('/property_owner/create','Property_ownerController@store');

Route::post('/property_owner/create_ajax','Property_ownerController@store_ajax');


Route::get('/property_owner/{name?}/edit','Property_ownerController@edit');
Route::post('/property_owner/{name?}/edit','Property_ownerController@update');

Route::get('/property_owner/index','Property_ownerController@index');

Route::post('/property_owner/index','Property_ownerController@set_index');

Route::post('/property_owner/{name?}/delete','Property_ownerController@delete');

Route::post('/property_owner/delete_array', 'Property_ownerController@delete_array');


// external_lease  routes
Route::get('/external_lease/create', 'External_leaseController@create');
Route::post('/external_lease/create','External_leaseController@store');

Route::post('/external_lease/create_ajax','External_leaseController@store_ajax');


Route::get('/external_lease/{name?}/edit','External_leaseController@edit');
Route::post('/external_lease/{name?}/edit','External_leaseController@update');

Route::get('/external_lease/index','External_leaseController@index');

Route::post('/external_lease/index','External_leaseController@set_index');

Route::post('/external_lease/{name?}/delete','External_leaseController@delete');

Route::post('/external_lease/delete_array', 'External_leaseController@delete_array');

// sell_agreement  routes
Route::get('/sell_agreement/create', 'Sell_agreementController@create');
Route::post('/sell_agreement/create','Sell_agreementController@store');

Route::post('/sell_agreement/create_ajax','Sell_agreementController@store_ajax');


Route::get('/sell_agreement/{name?}/edit','Sell_agreementController@edit');
Route::post('/sell_agreement/{name?}/edit','Sell_agreementController@update');

Route::get('/sell_agreement/index','Sell_agreementController@index');

Route::post('/sell_agreement/index','Sell_agreementController@set_index');

Route::post('/sell_agreement/{name?}/delete','Sell_agreementController@delete');

Route::post('/sell_agreement/delete_array', 'Sell_agreementController@delete_array');

// property_management_contract  routes
Route::get('/property_management_contract/create', 'Property_management_contractController@create');
Route::post('/property_management_contract/create','Property_management_contractController@store');

Route::post('/property_management_contract/create_ajax','Property_management_contractController@store_ajax');


Route::get('/property_management_contract/{name?}/edit','Property_management_contractController@edit');
Route::post('/property_management_contract/{name?}/edit','Property_management_contractController@update');

Route::get('/property_management_contract/index','Property_management_contractController@index');

Route::post('/property_management_contract/index','Property_management_contractController@set_index');

Route::post('/property_management_contract/{name?}/delete','Property_management_contractController@delete');

Route::post('/property_management_contract/delete_array', 'Property_management_contractController@delete_array');


// lease_script  routes
Route::get('/lease_script/create', 'Lease_scriptController@create');
Route::post('/lease_script/create','Lease_scriptController@store');

Route::get('/lease_script/{name?}/edit','Lease_scriptController@edit');
Route::post('/lease_script/{name?}/edit','Lease_scriptController@update');

Route::get('/lease_script/index','Lease_scriptController@index');

Route::post('/lease_script/{name?}/delete','Lease_scriptController@delete');

Route::post('/lease_script/delete_array', 'Lease_scriptController@delete_array');

// comment  routes

// Route::get('/lease_script/create', 'Lease_scriptController@create');
Route::post('/comment/{doctype?}/{name?}','CommentController@store');

// Route::get('/comment/{name?}/edit','Lease_scriptController@edit');
// Route::post('/comment/{name?}/edit','Lease_scriptController@update');

// Route::get('/comment/index','Lease_scriptController@index');

// Route::post('/comment/{name?}/delete','Lease_scriptController@delete');

// catch_receipt routes
Route::get('/catch_receipt/create', 'Catch_receiptController@create');
Route::post('/catch_receipt/create','Catch_receiptController@store');

Route::get('/catch_receipt/{name?}/edit','Catch_receiptController@edit');
Route::post('/catch_receipt/{name?}/edit','Catch_receiptController@update');

// Route::get('/catch_receipt/index','Catch_receiptController@index');
// Route::post('/catch_receipt/index','Catch_receiptController@set_index');

Route::post('/catch_receipt/{name?}/delete','Catch_receiptController@delete');

Route::post('/catch_receipt/delete_array', 'Catch_receiptController@delete_array');


// pay_receipt routes
Route::get('/pay_receipt/create', 'Pay_receiptController@create');
Route::post('/pay_receipt/create','Pay_receiptController@store');

Route::get('/pay_receipt/{name?}/edit','Pay_receiptController@edit');
Route::post('/pay_receipt/{name?}/edit','Pay_receiptController@update');

// Route::get('/pay_receipt/index','Pay_receiptController@index');
// Route::post('/pay_receipt/index','Pay_receiptController@set_index');

Route::post('/pay_receipt/{name?}/delete','Pay_receiptController@delete');

Route::post('/pay_receipt/delete_array', 'Pay_receiptController@delete_array');


// debt routes
Route::get('/debt/create', 'DebtController@create');
Route::post('/debt/create','DebtController@store');

Route::get('/debt/{name?}/edit','DebtController@edit');
Route::post('/debt/{name?}/edit','DebtController@update');

Route::get('/debt/index','DebtController@index');
Route::post('/debt/index','DebtController@set_index');

Route::post('/debt/{name?}/delete','DebtController@delete');

Route::post('/debt/delete_array', 'DebtController@delete_array');

// doctype routes
Route::get('/doctype/{doctype}/create', 'DoctypeController@create');
Route::post('/doctype/{doctype}/create','DoctypeController@store');

Route::get('/doctype/{doctype}/{name?}/edit','DoctypeController@edit');
Route::post('/doctype/{doctype}/{name?}/edit','DoctypeController@update');

Route::get('/doctype/{doctype}/index','DoctypeController@index');


// uder routes
Route::get('/user/create', 'UserController@create');
Route::post('/user/create','UserController@store');

Route::get('/user/{name?}/edit','UserController@edit');
Route::post('/user/{name?}/edit','UserController@update');

Route::get('/user/index','UserController@index');

// role routes
Route::get('/role/create', 'RoleController@create');
Route::post('/role/create','RoleController@store');

Route::get('/role/{name?}/edit','RoleController@edit');
Route::post('/role/{name?}/edit','RoleController@update');

Route::get('/role/index','RoleController@index');

// doctype routes
Route::get('/doctype/{doctype}/create', 'DoctypeController@create');
Route::post('/doctype/{doctype}/create','DoctypeController@store');

Route::get('/doctype/{doctype}/{name?}/edit','DoctypeController@edit');
Route::post('/doctype/{doctype}/{name?}/edit','DoctypeController@update');

Route::get('/doctype/{doctype}/index','DoctypeController@index');






// dics routes

Route::get('/{doctype?}/{docname?}/doc/create','DocsController@create');
Route::post('/{doctype?}/{docname?}/doc/create','DocsController@store');

Route::get('/doc/{name?}/show','DocsController@show');


// file_type

Route::post('/file_type/create_ajax','File_typeController@store_ajax');


// setting

Route::get('/setting/account','UdeerController@edit_account');
Route::post('/setting/account','UdeerController@update_account');








Route::get('/dashboard', function () {
    return view('ar.ar_dashboard');
});




