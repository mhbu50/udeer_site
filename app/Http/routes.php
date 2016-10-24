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

Route::get('/property/create', function () {
    return view('ar.ar_propriety_form');
});
Route::get('/property_unit/create', function () {
    return view('ar.ar_propriety_unit_form');
});
Route::get('/property_unit_activity/create', function () {
    return view('ar.ar_property_unit_activity_form');
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

Route::post('/login', 'UdeerController@login');

