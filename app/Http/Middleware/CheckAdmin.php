<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
use Config;

class CheckAdmin
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
        if ( Auth::check() && Auth::user()->roles->count() > Config::get('social.zero') )
        {
            return $next($request);
        }
        
        return redirect('/');
    }
}
