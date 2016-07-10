<?php

namespace App\Http\Controllers;

use Auth;
use App\User;
use App\Http\Requests;
use Illuminate\Http\Request;
use App\Http\Checker\Checker;
use App\Repositories\AuthenticateUser;
use App\Http\Controllers\Controller;
use Illuminate\Contracts\Auth\Guard;

class OauthController extends Controller
{
    private 
    $auth,
    $oauth_data;
    public function __construct(Guard $auth)
    {
        $this->auth = $auth;
    }
    public function getSocialLogin(AuthenticateUser $authenticate, Request $request, $provider )
    {
        return $authenticate->execute( $request->has('code') || $request->has('oauth_token'), $provider, $this);
    }
    
    public function userAuthenticated( $user )
    {
        $authUser = $this->findBySocaialIdOrCreate($user);
        $this->auth->login($authUser,true);
        return redirect('/');
    }
    protected function create($data)
    {
        User::create([
            'email'     => $data['email'],
            'name'  	=> $data['username'],
            'oauth'     => $data['id'],
        ]);
        return redirect('/');
    }
    public function findBySocaialIdOrCreate($user)
    {
        $authUser = User::firstOrNew(['oauth'=> $user->id]);
        if (! is_null($authUser->id)) {
            return $authUser;
        }
        $authUser->name     	= ($user->name) ? $user->name : $user->nickname;
        $authUser->email        = ($user->email)? $user->email: "";
        $authUser->password     = bcrypt($user->id);
        $authUser->oauth        = $user->id;
        $authUser->avatar       = $user->avatar;
        return $authUser;
    }
}