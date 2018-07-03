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

        if( !cache('header_nav') ){
            $articles = Article::with(array('articles'=>function( $query ){
                $query->select('id','pid','title','serial_number','link')->where('is_nav','1');
            }))
                ->select('id','pid','title','serial_number','link','introduce')->where('pid','0')->where('is_nav','1')
                ->orderBy('serial_number','asc')->orderBy('id','asc')->get();
            cache(['header_nav' =>$articles],3600 * 24);
        }
        $arr= explode('/',\Illuminate\Support\Facades\URL::current());
        $str = "";
        if( count($arr) > 3 ){
            $str = "/".$arr[3];
        }
        cache(['urls' =>$str],3600 * 24);

        if( !cache('links')  ){
            $Articles = Article::where('pid',13)->orderBy('serial_number','desc')->orderBy('id','desc')->take(14)->get();
            cache(['links' =>$Articles],3600 * 24);
        }
        return $next($request);
    }
}
