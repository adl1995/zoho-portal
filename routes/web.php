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

Route::get('/account/verify', 'Auth\RegisterController@verifyAccount')->name('verify');
Route::resource('home', 'HomeController');
Route::get('/zoho/modules', 'ZohoController@list');
Route::get('/zoho/{module_id}/field', 'ZohoController@listFields');


Route::get('/test/zoho', 'ZohoController@create');

// Route::get('/home', 'HomeController@index');
