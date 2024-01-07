<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class RedirectBasedOnUserType
{
    public function handle($request, Closure $next)
    {
        $user = Auth::user();

        if ($user && $user->type === 1) {
            return redirect('/admin/home');
        } elseif ($user && $user->type === 0) {
            return redirect('/home');
        }

        return $next($request);
    }
}

