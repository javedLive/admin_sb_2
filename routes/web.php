<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|


Route::get('/', function () {
    return view('welcome');
});*/

/* Admin Sb-2 */

/* IndexPage */
Route::get('/', function () {
    return view('pages.index');
});

/* Logout  */

Route::get('/logout',function(){
    return view('pages.login');
});

