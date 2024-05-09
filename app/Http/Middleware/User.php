<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class User
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $country =[
            'India','USA','Canada','Russia'
        ];

        if(!isset($request->country) && !in_array($request->country,$country))
        {
            return redirect('notfound');
        }

        return $next($request);
    }
}
