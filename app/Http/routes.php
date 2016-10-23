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
