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
    return view('admin.dashboard.index');
    return view('client.pages.home.index');
});

Route::group(['prefix' => '5t-music', 'middleware' => [], 'namespace' => 'Admin'], function () {
    Route::get('user', 'UserController@index');

});
