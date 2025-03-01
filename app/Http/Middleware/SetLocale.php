<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\URL;

class SetLocale
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if(in_array($request->segment(1), ['en', 'ar'])){
            App::setLocale($request->segment(1));
        }else{
            App::setLocale('en');
        }
        URL::defaults(['lang' => App::getLocale()]);
 
        return $next($request);
    }
}