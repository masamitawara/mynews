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


Route::group(['prefix' => 'admin'], function() {
    Route::get('news/create', 'Admin\NewsController@add')->middleware('auth');
});


Route::get('admin/profile/create','Admin\ProfileController@add');

<<<<<<< HEAD
Route::get('admin/profile/edit','Admin\ProfileController@edit')->middleware('auth');

Route::get('admin/profile/profile','Admin\ProfileController@edit');
=======
Route::get('admin/profile/profile','Admin\ProfileController@edit')->middleware('auth');
>>>>>>> 209eb152b2e076d256981ecac8ccbecc3328b3ec


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

