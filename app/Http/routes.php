<?php

Route::group(['middleware' => ['web']], function () {

	Route::get('/', [
		'as' 	=> '/',
		'uses' 	=> 'PagesController@dashboardPage'
	]);

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
	
	Route::get('properties', [
		'as' 	=> 'properties',
		'uses' 	=> 'PropertyController@index'
	]);

	Route::group(['prefix' => 'property'], function () {

		Route::get('create', [
			'as' 	=> 'properties',
			'uses' 	=> 'PropertyController@getCreate'
		]);
		
		Route::post('create', [
			'as' 	=> 'properties',
			'uses' 	=> 'PropertyController@postCreate'
		]);

		Route::get('{id}', [
			'as' 	=> 'property.id',
			'uses' 	=> 'PropertyController@show'
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

		Route::post('create', [
			'as' 	=> 'properties',
			'uses' 	=> 'RentController@postCreate'
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
	
	Route::get('users', [
		'as' 	=> 'savings',
		'uses' 	=> 'UserController@getAllUsers'
	]);
	
	Route::group(['prefix' => 'user'], function () {

		Route::get('/', [
			'as' 	=> 'user',
			'uses' 	=> 'UserController@userProfile'
		]);

		Route::get('create', [
			'as' 	=> 'user.create',
			'uses' 	=> 'UserController@getCreateUserAccount'
		]);

		Route::post('create', [
			'as' 	=> 'user.create',
			'uses' 	=> 'UserController@postCreateUserAccount'
		]);

		Route::post('update', [
			'as' 	=> 'user.update',
			'uses' 	=> 'UserController@updateUser'
		]);

		Route::get('{id}', [
			'as' 	=> 'user.{id}',
			'uses' 	=> 'UserController@getUser'
		]);

		Route::post('sendmessage', [
			'as' 	=> 'user.sendmessage',
			'uses' 	=> 'UserController@sendUserEmail'
		]);
	});

	Route::get('/login/{provider}', 'OauthController@getSocialLogin');

	Route::get('forgot-password', function () {
		return view('pages.password_reset');
	});

	Route::post('password/email', 'Auth\PasswordController@sendResetLinkEmail');
	
	Route::get('password/reset/{token?}', [
		'as' => 'login',
		'uses' => 'Auth\PasswordController@showResetForm'
	])->middleware('resetToken');

	Route::post('password/reset', 'Auth\PasswordController@reset');

	Route::get('/setPassword/{id}/{encyptedEmail}', [
		'as' => 'set_password',
		'uses' => 'AdminController@setPassword'
	]);

	Route::post('/setPassword',[
		'as' => 'set_password',
		'uses' => 'AdminController@p_setPassword'
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
