<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class AdminAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
           // التحقق من تسجيل دخول الإداريين
        //    if (!Auth::guard('admin')->check()) {
        //     // Redirect to the login page for admins
        //     return redirect()->route('show_login_admin');
        // }
        return $next($request);
    }



}
