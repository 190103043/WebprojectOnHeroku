<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class Setlocale
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
        $locale = session('locale');
        App::setLocale($locale);
        return $next($request);
    }
}
