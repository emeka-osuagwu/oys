<?php

namespace App\Http\Middleware;

use Auth;
use Closure;

class CheckUserProfileValidation
{
    public function handle($request, Closure $next)
    {
        if (isset(Auth::user()->profile_status) ? (int) Auth::user()->profile_status : 0 == 0) 
        {
            if ($request->path() == "profile/update" || $request->path() == "profile" || $request->path() == "login" || $request->path() == "register" ) {
                return $next($request);
            }
            return redirect()->to('profile');
        }

        return $next($request);
    }
}
