<?php

namespace App\Http\Middleware\AccountType;

use Closure;

class PersonnelMiddleware
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
        if($request->user() && $request->user()->type != '3'){
            return redirect()->back();
        }
        return $next($request);
    }
}
