<?php

namespace App\Http\Middleware;

use Closure;

class checkuser
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
        $ip=$request->ip();
        if($ip == ('127.0.0.1'))
        {
           // return("done");
            return redirect()->route('test');
        }
        return $next($request);
    }
}
