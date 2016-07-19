<?php 

namespace App;

use Illuminate\Contracts\Auth\Guard;
use App\Repositories\UserRepository; use Request;
use Laravel\Socialite\Contracts\Factory as Socialite;

class AuthenticateUser {

	private $auth;
	private $users;
	private $socialite;

	public function __construct(Socialite $socialite, Guard $auth, UserRepository $users) 
	{
		$this->auth       = $auth;
		$this->users      = $users;
		$this->socialite  = $socialite;
	}

	public function execute($request, $listener, $provider) {
		session()->flash('driver', $provider);
	   	
	   	if (!$request) return $this->getAuthorizationFirst($provider);
	   	
	   	$user = $this->users->findByUserNameOrCreate($this->getSocialUser($provider));
	   	
	   	$this->auth->login($user, true);
	   	return $listener->userHasLoggedIn($user);

	}



	private function getAuthorizationFirst($provider) {

		return $this->socialite->driver($provider)->redirect();

	}



	private function getSocialUser($provider) {

		return $this->socialite->driver($provider)->user();

	}

}
