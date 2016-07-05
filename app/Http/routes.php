<?php

Route::group(['middleware' => ['web']], function () {
  
	Route::get('/', [
		'as' 	=> '/',
		'uses' 	=> 'PagesController@dashboardPage'
	])->middleware('auth');

	Route::get('login', [
		'as' 	=> 'logout',
		'uses' 	=> 'PagesController@getLogin'
	]);

	Route::post('login', [
		'as' 	=> 'logout',
		'uses' 	=> 'Auth\AuthController@postLogin'
	]);

	Route::get('/logout', [
		'as' 	=> 'logout',
		'uses' 	=> 'Auth\AuthController@logout'
	]);

	Route::get('/register', [
		'as' 	=> 'logout',
		'uses' 	=> 'PagesController@getRegister'
	]);

	Route::post('/register', [
		'as' 	=> 'logout',
		'uses' 	=> 'Auth\AuthController@postRegister'
	]);

	Route::get('profile', [
		'as' 	=> 'logout',
		'uses' 	=> 'UserController@updateprofile'
	]);
	
	Route::get('properties', [
		'as' 	=> 'properties',
		'uses' 	=> 'PropertyController@index'
	]);

	Route::group(['prefix' => 'property'], function () {

		Route::get('create', [
			'as' 	=> 'properties',
			'uses' 	=> 'PropertyController@getCreate'
		]);
	});

	Route::get('rents', [
		'as' 	=> 'rents',
		'uses' 	=> 'RentController@index'
	]);

	Route::group(['prefix' => 'rent'], function () {

		Route::get('create', [
			'as' 	=> 'properties',
			'uses' 	=> 'RentController@create'
		]);
	});

	Route::get('savings', [
		'as' 	=> 'savings',
		'uses' 	=> 'SavingsController@index'
	]);

	Route::group(['prefix' => 'savings'], function () {

		Route::get('history', [
			'as' 	=> 'savings.history',
			'uses' 	=> 'SavingsController@history'
		]);
	});

	Route::group(['prefix' => 'cashout'], function () {

		Route::get('history', [
			'as' 	=> 'cashout.history',
			'uses' 	=> 'SavingsController@cashoutsHistory'
		]);
	});

	Route::get('earnings', [
		'as' 	=> 'savings',
		'uses' 	=> 'RentController@earnings'
	]);
	

});




//   Route::auth();
//   /*
//   Route::get('auth/login', 'Auth\AuthController@getLogin');
//   Route::post('auth/login', 'Auth\AuthController@postLogin');
//   Route::get('auth/logout', 'Auth\AuthController@logout');

//   Route::get('login/{provider?}', 'Auth\AuthController@login');
//   Route::get('auth/{driver}', 'Auth\AuthController@redirectToProvider');
//   Route::get('auth/{driver}/callback', 'Auth\AuthController@handleProviderCallback');
//   */
//   Route::get('auth/social/{provider?}', 'Auth\AuthController@redirectToProvider');
//   Route::get('auth/social/{provider?}/callback', 'Auth\AuthController@handleProviderCallback');

//   // Registration routes...
//   /*Route::get('auth/register', 'Auth\AuthController@getRegister');
//   Route::post('auth/register', 'Auth\AuthController@postRegister');
//   */



//   // Password reset link request routes...
//   /*
//   Route::get('password/email', 'Auth\PasswordController@getEmail');
//   Route::post('password/email', 'Auth\PasswordController@postEmail');

//   // Password reset routes...
//   Route::get('password/reset/{token?}', 'Auth\PasswordController@showResetForm');
//   Route::post('password/reset', 'Auth\PasswordController@reset');
//   */

//   Route::get('sendNotifications', 'RentController@sendNotifications');
//   Route::resource('profile', 'UsersController');
// });

// Route::group(['middleware' => ['web', 'auth']], function () {


//   //  Route::get('/','HomeController@index');
//   Route::get('home', 'HomeController@index');
//   Route::get('profile', 'UserController@index');
//   Route::post('profile', 'UserController@updateprofile');
//   Route::resource('properties', 'PropertyController');
//   Route::post('property/create', 'PropertyController@store');
//   Route::post('properties/{id}/edit/','PropertyController@update');
//   Route::get('singleproperty/{id}',   'PropertyController@singleproperty');
//   Route::get('occupant/{id}', 'PropertyController@tenantdetails');
//   Route::resource('rents',    'RentController');
//   Route::post('rents/create', 'RentController@store');
//   Route::post('rents/{id}/edit/',   'RentController@update');

//   Route::post('property/rent/create', 'RentController@storePropertyRent');
//   Route::get('property/rents/{id}', 'RentController@propertyRent');
//   Route::post('makepayment', 'PaymentController@makepayment');
//   Route::post('/pay', ['uses' => 'PaymentController@redirectToGateway', 'as' => 'pay']);
//   Route::get('/payment/callback', 'PaymentController@handleGatewayCallback');

//   Route::get('savings', 'SavingsController@index');
//   Route::get('savings/history', 'SavingsController@history');
//   Route::get('cashout/history', 'SavingsController@cashoutsHistory');
//   Route::post('savings', 'SavingsController@store');
//   Route::post('cashout', 'SavingsController@requestCashout');
//   Route::post('topup', 'PaymentController@makepayment');
//   Route::post('rent/pay', 'RentController@payrent');
//   Route::get('earnings', 'RentController@earnings');
//   Route::post('request/payout', 'RentController@requestPayout');

// Route::auth();

// Route::get('/home', 'HomeController@index');
