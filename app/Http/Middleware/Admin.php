<?php

namespace App\Http\Middleware;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Closure;

class Admin
{
    public function handle($request, Closure $next)
    {
        $user = Auth::user();

        if ($user && $user->hasRole('admin')) {
            return $next($request);
        } else {
            return redirect()->route('home')->withErrors(['error' => 'You do not have permission to access this page']);
        }
    }
}
