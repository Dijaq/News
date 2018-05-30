<?php

namespace radioyaravi\Http\Middleware;

use Closure;

class VerifyPage
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
         if(true)
        {
            return $next($request);
        }

        return response('No se puede continuar', 404);
    }
}
