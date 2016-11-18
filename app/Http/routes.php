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
    return view('ar.ar_index');
});
Route::get('/user/register', function () {
    return view('ar.ar_register');
});

Route::post('/login', 'UdeerController@login');


// prperty routes
Route::get('/property/create', 'PropertyController@create');
Route::post('/property/create','PropertyController@store');

Route::get('/property/{property_name?}/show','PropertyController@show');

Route::get('/property/{property_name?}/leases','PropertyController@lease_index');

Route::get('/property/{property_name?}/unit_expense','PropertyController@unit_expense_index');

Route::get('/property/{property_name?}/units','PropertyController@unit_index');

Route::get('/property/{property_name?}/edit','PropertyController@edit');
Route::post('/property/{property_name?}/edit','PropertyController@update');

Route::get('/property/index','PropertyController@index');

Route::post('/property/{property_name?}/delete','PropertyController@delete');

Route::post('/property/delete','PropertyController@delete_array');


// prperty unit routes
Route::get('/property_unit/create', 'Property_unitController@create');
Route::post('/property_unit/create','Property_unitController@store');

Route::get('/property_unit/{unit_name?}/edit','Property_unitController@edit');
Route::post('/property_unit/{unit_name?}/edit','Property_unitController@update');

Route::get('/property_unit/{unit_name?}/show','Property_unitController@show');

Route::get('/property_unit/index','Property_unitController@index');

Route::get('/property_unit/{unit_name?}/rents','Property_unitController@rent_index');

Route::get('/property_unit/{unit_name?}/leases','Property_unitController@lease_index');

Route::post('/property_unit/{unit_name?}/delete','Property_unitController@delete');


// prperty unit activity routes
Route::get('/property_unit_activity/create', 'Property_unit_activityController@create');
Route::post('/property_unit_activity/create','Property_unit_activityController@store');

Route::get('/property_unit_activity/{name?}/edit','Property_unit_activityController@edit');
Route::post('/property_unit_activity/{name?}/edit','Property_unit_activityController@update');

Route::get('/property_unit_activity/index','Property_unit_activityController@index');

Route::post('/property_unit_activity/{name?}/delete','Property_unit_activityController@delete');

// lease routes
Route::get('/lease/create', 'LeaseController@create');
Route::post('/lease/create','LeaseController@store');

Route::get('/lease/{name?}/edit','LeaseController@edit');
Route::post('/lease/{name?}/edit','LeaseController@update');

Route::get('/lease/index','LeaseController@index');

Route::post('/lease/{name?}/delete','LeaseController@delete');

// lease rent payment routes
Route::get('/lease_rent_payment/create', 'Lease_rent_paymentController@create');
Route::post('/lease_rent_payment/create','Lease_rent_paymentController@store');

Route::get('/lease_rent_payment/{name?}/edit','Lease_rent_paymentController@edit');
Route::post('/lease_rent_payment/{name?}/edit','Lease_rent_paymentController@update');

Route::get('/lease_rent_payment/index','Lease_rent_paymentController@index');

Route::post('/lease_rent_payment/{name?}/delete','Lease_rent_paymentController@delete');

// lease expence routes
Route::get('/unit_expense/create', 'Unit_expensesController@create');
Route::post('/unit_expense/create','Unit_expensesController@store');

Route::get('/unit_expense/{name?}/edit','Unit_expensesController@edit');
Route::post('/unit_expense/{name?}/edit','Unit_expensesController@update');

Route::get('/unit_expense/index','Unit_expensesController@index');

Route::post('/unit_expense/{name?}/delete','Unit_expensesController@delete');

// complain routes
Route::get('/complain/create', 'ComplainController@create');
Route::post('/complain/create','ComplainController@store');

Route::get('/complain/{name?}/edit','ComplainController@edit');
Route::post('/complain/{name?}/edit','ComplainController@update');

Route::get('/complain/index','ComplainController@index');

Route::post('/complain/{name?}/delete','ComplainController@delete');

// lease_re routes
Route::get('/lease_receipt/create', 'Lease_receiptController@create');
Route::post('/lease_receipt/create','Lease_receiptController@store');

Route::get('/lease_receipt/{name?}/edit','Lease_receiptController@edit');
Route::post('/lease_receipt/{name?}/edit','Lease_receiptController@update');

Route::get('/lease_receipt/index','Lease_receiptController@index');

Route::post('/lease_receipt/{name?}/delete','Lease_receiptController@delete');


Route::get('/user/register', 'UserController@create_user');
Route::post('/user/register', 'UserController@store_user');

// renter routes
Route::get('/renter/create', 'RenterController@create');
Route::post('/renter/create','RenterController@store');

Route::get('/renter/{name?}/edit','RenterController@edit');
Route::post('/renter/{name?}/edit','RenterController@update');

Route::get('/renter/index','RenterController@index');

Route::post('/renter/{name?}/delete','RenterController@delete');


// renter routes
Route::get('/receiver/create', 'ReceiverController@create');
Route::post('/receiver/create','ReceiverController@store');

Route::get('/receiver/{name?}/edit','ReceiverController@edit');
Route::post('/receiver/{name?}/edit','ReceiverController@update');

Route::get('/receiver/index','ReceiverController@index');

Route::post('/receiver/{name?}/delete','ReceiverController@delete');






Route::get('/dashboard', function () {
    return view('ar.ar_dashboard');
});
Route::get('/control', function () {
    
	define("COOKIE_FILE", "cookie.txt");


	// ===============get data======================
	$ch = curl_init('http://52.8.230.142/api/resource/User');
	curl_setopt ($ch, CURLOPT_COOKIEJAR, COOKIE_FILE);
	curl_setopt ($ch, CURLOPT_COOKIEFILE, COOKIE_FILE);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($ch, CURLOPT_PORT, 8000);
	// curl_setopt($ch, CURLOPT_HEADER, true);
	$result=curl_exec($ch);
	if($result === false){
	    echo 'Curl error: ' . curl_error($ch);
	}
	else{
		echo 'Curl res: ' . $result;
	// 	if($result === 'notalow'){
	// 		return return redirect('/loginn');
	// 	}elseif ($result === 'alow') {
	// 		return 
	// 	}
	    
	}


});



