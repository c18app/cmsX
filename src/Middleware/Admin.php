<?php

namespace C18app\Cmsx\Middleware;

use Closure;
use \Illuminate\Support\Facades\Auth;

class Admin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \Closure $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {

        if (!Auth::user()->roles()->where('name', 'admin')->count()) {
            return redirect('/');
        }

        return $next($request);
    }
}