<?php

namespace App\Http\Middleware;

use Closure;

class authUser
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
        if (!$request->session()->exists('loggedIn')) {
            // user value cannot be found in session
            return redirect()->route('users.get.login');
        }

        return $next($request);
    }
}
