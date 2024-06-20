<?php

namespace App\Http\Middleware;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Closure;

class Admin
{
    public function handle($request, Closure $next)
    {
        if (!Auth::check()) {
            return redirect()->route('login');
        }

        if ($request->user()->role == 'admin') {
            return $next($request);
        } else {
            request()->session()->flash('error', 'You do not have permission to access this page');
            return redirect()->route($request->user()->role);
        }
    }
}
