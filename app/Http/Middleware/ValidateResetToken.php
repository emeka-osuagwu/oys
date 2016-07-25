<?php

namespace App\Http\Middleware;

use Closure;
use App\PasswordReset;

class ValidateResetToken
{
	/**
	 * Handle an incoming request.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  \Closure  $next
	 * @return mixed
	 */
	public function handle($request, Closure $next)
	{
		
		
		if ($request->has('token') && $request->has('email')) 
		{
			$token = PasswordReset::where('token', $request->token)->get();

			if ($token->count() > 0) 
			{
				return $next($request);	
			}
		}

		return redirect()->to("/forgot-password");
	}

}