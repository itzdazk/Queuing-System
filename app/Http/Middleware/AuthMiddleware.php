<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;

class AuthMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle($request, Closure $next)
    {
        // $credentials = $request->only('username', 'password');
        $credentials = [
            'username' => auth()->user()->username,
            'password' => auth()->user()->password,
        ];

        if (auth()->user()->role->name === 'admin') {
            return $next($request);
        }

        return abort(403, 'Unauthorized');
    }
}
