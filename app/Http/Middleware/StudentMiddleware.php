<?php

namespace App\Http\Middleware;

use Closure;

class StudentMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @param \Closure $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {

        if (\Auth::check() && \Auth::user()->isStudent()) {
            return $next($request);
        }


//        abort(403,'you are not allowed');
//        return redirect('/');
//        return redirect()->back();
        return redirect()->route('home');
    }
}
