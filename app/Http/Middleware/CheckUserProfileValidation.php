<?php

namespace App\Http\Middleware;

use Auth;
use Closure;

class CheckUserProfileValidation
{
    public function handle($request, Closure $next)
    {
        
        if (Auth::user()->profile_status == 0) 
        {
            if ($request->path() == "profile/update" || $request->path() == "profile" ) {
                return $next($request);
            }
            return redirect()->to('profile');
        }

        return $next($request);
    }
}
