<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Session;


class Lang
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
        $lang = 'ar';
        if(Session::has('lang')) {
            $lang = Session::get('lang');
        }
        app()->setLocale($lang);
        Session::put('lang', $lang);
        return $next($request);
    }
}
