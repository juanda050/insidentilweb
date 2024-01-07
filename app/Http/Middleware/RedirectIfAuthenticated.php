<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    public function handle(Request $request, Closure $next, $guard = null)
    {
        if (Auth::guard($guard)->check()) {
            // Jika pengguna sudah login, arahkan mereka ke halaman yang sesuai
            if (Auth::user()->type === 'admin') {
                return redirect('/admin/home');
            } else {
                return redirect('/home');
            }
        }

        return $next($request);
    }
}
