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

Route::get('protected', ['middleware' => ['auth', 'admin'], function() {
    return "testing Admin";
}]);

Route::group(['middleware' => 'auth'], function () {
	Route::get('clients', 'AdminController@listClients');
	Route::get('clients/{id}', 'AdminController@listClientsDetails');
	Route::post('clients/{id}/verify', 'AdminController@verifyClient');
	Route::post('clients/{id}/suspend', 'AdminController@suspendClient');
	Route::post('clients/{id}/reactivate', 'AdminController@reactivateClient');
	Route::post('clients/{id}/sync', 'AdminController@syncClient');
	Route::post('/error_log', 'AdminController@errorLog');
	Route::post('/{id}/sync', 'AdminController@syncClient');
});

Route::get('/account/verify', 'Auth\RegisterController@verifyAccount')->name('verify');
Route::resource('home', 'HomeController');
Route::get('/zoho', 'ZohoController@index');
Route::get('/zoho/home', 'ZohoController@home');
Route::get('/zoho/integrations', 'ZohoController@integrations');
Route::get('/zoho/{module}/fields', 'ZohoController@fields');
Route::get('/zoho/fields/values', 'ZohoController@fieldValues'); //@todo add slug
Route::get('/zoho/records', 'ZohoController@records');
Route::post('/zoho/map', 'ZohoController@map');
Route::post('/verify', 'ZohoController@verify');

Route::get('/test/sql', 'ZohoController@map');
