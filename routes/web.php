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
// Route::get('register', function(){
//     return redirect()->back();
// });
Route::get('/', 'PagesController@index')->middleware('guest');
Route::middleware('auth')->group(function () {
    Route::get('/home', 'PagesController@home')->name('home');
    Route::get('/pds', 'PagesController@pds')->middleware('personnel');
    Route::get('/accounts', 'AccountsController@index')->middleware('admin');
    Route::post('/addAccount', 'AccountsController@addAccount')->middleware('admin');
    Route::get('/listAccount', 'AccountsController@listAccount')->middleware('admin');
    Route::get('/listPosition', 'AccountsController@listPosition')->middleware('admin');
    Route::post('/deleteAccount', 'AccountsController@deleteAccount')->middleware('admin');
});