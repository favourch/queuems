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

Auth::routes();

Route::get('/','HomeController@index')->name('welcome');

Route::group(['prefix'=>'admin','middleware'=>'auth','namespace'=>'admin'], function(){
    Route::get('dashboard','DashboardController@index')->name('admin.dashboard');
   
});