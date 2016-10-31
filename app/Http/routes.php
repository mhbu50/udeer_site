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

Route::get('/property/{name?}/edit','PropertyController@edit');
Route::post('/property/{name?}/edit','PropertyController@update');

Route::get('/property/index','PropertyController@index');

Route::post('/property/{name?}/delete','PropertyController@delete');


// prperty unit routes
Route::get('/property_unit/create', 'Property_unitController@create');
Route::post('/property_unit/create','Property_unitController@store');

Route::get('/property_unit/{name?}/edit','Property_unitController@edit');
Route::post('/property_unit/{name?}/edit','Property_unitController@update');

Route::get('/property_unit/index','Property_unitController@index');

Route::post('/property_unit/{name?}/delete','Property_unitController@delete');


// prperty unit activity routes
Route::get('/property_unit_activity/create', 'Property_unit_activityController@create');
Route::post('/property_unit_activity/create','Property_unit_activityController@store');

Route::get('/property_unit_activity/{name?}/edit','Property_unit_activityController@edit');
Route::post('/property_unit_activity/{name?}/edit','Property_unit_activityController@update');

Route::get('/property_unit_activity/index','Property_unit_activityController@index');

Route::post('/property_unit_activity/{name?}/delete','Property_unit_activityController@delete');



Route::get('/test', function () {
    return view('test');
});

Route::get('/lease/create', function () {
    return view('ar.ar_lease_form');
});


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



