<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class Authenticate
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
        if (Auth::guard($guard)->guest()) {
            Session::put('oldUrl',$request->url());
            if ($request->ajax()) {
                return response('Unauthorized.', 401);
            } else {
                Session::put('oldUrl',$request->url());
                return redirect('/user/signin');
            }
        }

        return $next($request);
    }
}
