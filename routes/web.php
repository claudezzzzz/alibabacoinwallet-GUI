<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('/landing', function () {
    return view('landing');
});

Route::get('/exchange', function () {
    return view('exchange');
});

Route::get('/send', function () {
    return view('send');
});

Route::get('/recieve', function () {
    return view('recieve');
});

Route::get('/market', function () {
    return view('cryptomarket');
});

Route::get('/abbcshopping', function () {
    return view('shopping');
});

Route::get('/accountmodify', function () {
    return view('accountmodify');
});

Route::get('/managewallet', function () {
    return view('managewallet');
});

Route::get('/test', function () {
    return view('test');
});

Route::get('/logout', function(){
   Auth::logout();
   return Redirect::to('/');
});