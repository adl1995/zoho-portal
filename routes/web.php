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

Route::get('/', 'HomeController@index');
Route::resource('home', 'HomeController');

Route::get('/password/reset/{id}', 'Auth\ResetPasswordController@showUpdatePassword');
Route::post('/user/password/reset', 'Auth\ResetPasswordController@updatePassword');


Auth::routes();

Route::get('protected', ['middleware' => ['auth', 'admin'], function() {
	return 'admin';
}]);

Route::group(['middleware' => ['auth', 'admin']], function () {
	Route::group(['prefix' => 'admin'], function() {
		Route::get('/', 'AdminController@index');
		Route::get('/profile', 'AdminController@profile');
		Route::get('/errors', 'AdminController@errorLog');
		Route::get('clients', 'AdminController@currentClient');
		Route::get('clients/add', 'AdminController@addClient');
		Route::post('clients/add', 'AdminController@createClient');
		Route::get('clients/{id}/edit', 'AdminController@editClient');
		Route::post('clients/{id}/update', 'AdminController@updateClient');
		Route::post('clients/{id}/verify', 'AdminController@verifyClient');
		Route::post('clients/{id}/suspend', 'AdminController@suspendClient');
		Route::post('clients/{id}/reactivate', 'AdminController@reactivateClient');
		Route::post('clients/{id}/sync', 'AdminController@syncClient');
	});
});

Route::group(['middleware' => 'auth'], function () {
	Route::post('/error_log', 'AdminController@errorLog');
	Route::post('/{id}/sync', 'AdminController@syncClient');
});

Route::get('/account/verify', 'Auth\RegisterController@verifyAccount')->name('verify');

Route::group(['prefix' => 'zoho'], function () {
	Route::get('/', 'ZohoController@index');
	Route::get('/home', 'ZohoController@home');
	Route::get('/integrations', 'ZohoController@integrations');
	Route::get('/{module}/fields', 'ZohoController@fields');
	Route::get('/fields/values', 'ZohoController@fieldValues'); //@todo add slug
	Route::get('/records', 'ZohoController@records');
	Route::get('/chart', 'ZohoController@chart');
	Route::post('/map', 'ZohoController@map');
	Route::post('/verify', 'ZohoController@verify');
});

Route::get('/test/sql', 'ZohoController@map');
