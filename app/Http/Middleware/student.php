<?php

namespace App\Http\Middleware;

use Auth;
use Closure;

class student
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
         /*
        if (!Auth::check()) {
            return redirect()->route('login');
        }
        */

        if (Auth::user()->role == 2) {
            return redirect()->route('student');

         return $next($request);
        }

    }
}
