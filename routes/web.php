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

Route::get('/base', 'SiteController@index' );

Route::group(["prefix" => "/dashboard", "middleware" =>'auth'], function () {
    Route::resource('posts', 'PostController');
    Route::resource('options', 'OptionController');
//    Route::get('/settings/{option}/edit','OptionController@edit');
});



Auth::routes(['register' => false]);
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout');
//Route::get('/logout', 'PostController@logout');
