<?php

namespace App\Http\Middleware;

use Auth;
use Closure;

class CheckUserProfileValidation
{
    public function handle($request, Closure $next)
    {
        dd(Auth::check());
        return $next($request);
    }
}
