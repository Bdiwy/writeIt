<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class EnsureProfileIsComplete
{
    public function handle($request, Closure $next)
    {
        if (!Auth::check()) {
            return $next($request);
        }

        $user = Auth::user();

        if (!$user->is_profile_complete && !$request->is('complete/profile')) {
            return redirect()->route('show.CompleteProfile');
        }

        return $next($request);
    }
}
