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
*/


Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::group(['middleware' => ['web', 'auth']], function () {
	Route::get('home', 'UsersRegistration@index');
	// Members
	Route::resource('members','MemberController');
	// Route::patch('memberupdate',['asany' => 'memberupdate', 'uses' => 'MemberController@update']);
});
