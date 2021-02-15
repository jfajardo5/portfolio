<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App\Http\Controllers\VisitorController;
class FreshSessionCheck
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
        if(!$request->session()->has('FreshSessionCheck'))
        {
            $request->session()->put('FreshSessionCheck', true);
            VisitorController::store($request);
        }
        return $next($request);
    }
}
