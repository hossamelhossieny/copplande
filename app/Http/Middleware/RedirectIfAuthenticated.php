<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    public function handle(Request $request, Closure $next, string ...$guards)
    {
        $guards = empty($guards) ? [null] : $guards;
        foreach ($guards as $guard) {
            if (Auth::guard($guard)->check()) {
                $user = Auth::guard($guard)->user();

                // Role-based redirection
                if ($user->hasRole('admin')) {
                    return redirect()->route('admin.dashboard');
                }

                if ($user->hasRole('customer')) {
                    return redirect()->route('customer.dashboard');
                }

                if ($user->hasRole('manger')) {
                    return redirect()->route('manager.dashboard');
                }

                // Default fallback
                return redirect('/home');
            }
        }

        return $next($request);
    }
}
