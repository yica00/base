<?php

namespace App\Http\Middleware;

use App\Models\Admin\Article;
use Closure;

class Get_nav
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
        if( !session('header_nav') ){
            $navs = Article::select('id','title','link','pid')->where('is_nav',1)->get();
            $nav = getSubs($navs,0);
            session(['header_nav' => $navs]);
        }
        return $next($request);
    }
}