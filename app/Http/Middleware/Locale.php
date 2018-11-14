<?php

namespace App\Http\Middleware;

use Closure;
use Session;
use Config;
use App;

class Locale
{
    public function handle($request, Closure $next)
    {
        if (Session::has('locale')) {
            $locale = Session::get('locale', Config::get('app.locale'));
        }
        else {
            $locale = Config::get('app.locale');
        }
        App::setlocale($locale);

        return $next($request);
    }
}
