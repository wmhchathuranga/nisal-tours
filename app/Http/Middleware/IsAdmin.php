<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class IsAdmin
{
    public function handle(Request $request, Closure $next)
    {
        // Login wela inna ekena admin nam witharak athulata yanawa
        if (Auth::check() && Auth::user()->role === 'admin') {
            return $next($request);
        }

        // Nattam home page ekata gihin danawanawa
        return redirect('/')->with('error', 'Access Denied! You are not an Admin.');
    }
}