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


Route::get('/',function(){
    return view('pages.login');
})->name('/');



Route::post('/login',[
    'uses'=>'AdminController@login',
    'as'=>'login'
]);
    
Route::get('/logout', [
    'uses' => 'AdminController@getLogout',
    'as' => 'logout'
]);

Route::get('/dashboard',[
    'uses'=>'AdminController@getDashboard',
    'as'=>'dashboard',
    'middleware' => 'auth'
]);

