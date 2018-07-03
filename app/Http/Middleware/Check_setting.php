<?php

namespace App\Http\Middleware;

use Closure;

class Check_setting
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
        if( cache('setting') ){
            $setting = readJson();
            cache(['setting' => $setting],3600 * 24);
        }
        return $next($request);
    }
}
