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


Auth::routes();
Route::get('register', function(){
    return redirect()->back();
});
Route::get('/', 'PagesController@index')->middleware('guest');
Route::middleware('auth')->group(function () {
    Route::get('/home', 'PagesController@home')->name('home');
    Route::get('/pds', 'PagesController@pds');
    Route::get('/accounts', 'PagesController@accounts');
});
Route::middleware('admin')->group(function () {
    Route::match(['get', 'post'], '/accounts', 'PagesController@accounts');
});
Route::middleware('personnel')->group(function () {
    Route::match(['get', 'post'], '/pds', 'PagesController@pds');
});