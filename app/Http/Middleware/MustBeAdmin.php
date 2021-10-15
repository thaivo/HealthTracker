<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class MustBeAdmin
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
        //ddd(auth()->user()->is_admin === 0);
        if (auth()->user()->is_admin === 0 ){
            abort(Response::HTTP_FORBIDDEN);
        }
        //ddd(auth()->user()->is_admin === 1);
        return $next($request);
    }
}
