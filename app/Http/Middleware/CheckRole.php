<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CheckRole
{
    public function handle(Request $request, Closure $next, $role)
    {
        if (!auth()->check() || auth()->user()->role !== $role) {
            if (auth()->check()) {
                return redirect()->route(auth()->user()->role === 'admin' ? 'admin.dashboard' : 'student.dashboard');
            }
            return redirect('login');
        }
        return $next($request);
    }
}