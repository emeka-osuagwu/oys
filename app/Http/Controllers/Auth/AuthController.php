<?php

namespace App\Http\Controllers\Auth;

use Auth;
use App\User;
use Validator;
use Socialite;
use App\AuthenticateUser;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;

class AuthController extends Controller
{
	/*
	|--------------------------------------------------------------------------
	| Registration & Login Controller
	|--------------------------------------------------------------------------
	|
	| This controller handles the registration of new users, as well as the
	| authentication of existing users. By default, this controller uses
	| a simple trait to add these behaviors. Why don't you explore it?
	|
	*/

	use AuthenticatesAndRegistersUsers, ThrottlesLogins;

	/**
	* Where to redirect users after login / registration.
	*
	* @var string
	*/
	protected $redirectTo = '/';

	/**
	* Create a new authentication controller instance.
	*
	* @return void
	*/
	public function __construct()
	{
		$this->middleware($this->guestMiddleware(), ['except' => 'logout']);
	}


	public function postLogin(Request $request)
	{
		return $request->all();
	}



	/**
	* Get a validator for an incoming registration request.
	*
	* @param  array  $data
	* @return \Illuminate\Contracts\Validation\Validator
	*/
	protected function validator(array $data)
	{
		return Validator::make($data, [
			'name' => 'required|max:255',
			'email' => 'required|email|max:255|unique:users',
			'password' => 'required|min:6|confirmed',
		]);
	}

	/**
	* Create a new user instance after a valid registration.
	*
	* @param  array  $data
	* @return User
	*/
	protected function create(array $data)
	{
		return User::create([
			'name' => $data['name'],
			'email' => $data['email'],
			// 'date_birth' => $data['date_birth'],
			'password' => bcrypt($data['password']),
		]);
	}

	public function redirectToProvider($driver)
	{
		return Socialite::driver($driver)->redirect();
	}

	public function handleProviderCallback($driver)
	{
		try {
			$user = Socialite::driver($driver)->user();
		} catch (Exception $e) {
			return \Redirect::to('auth/login');
		}

		$authUser = $this->findOrCreateUser($user);

		Auth::login($authUser, true);

		return \Redirect::intended();
	}

	private function findOrCreateUser($user)
	{
		if ($authUser = User::where('email', $user->getEmail())->first()) {
			return $authUser;
		}

		return User::create([
			'name' => $user->getName(),
			'email' => $user->getEmail(),
			'password' => '',
			'phone' => '0800'
		]);
	}

	public function logout()
	{
			Auth::logout();
			return back();
	}

}
