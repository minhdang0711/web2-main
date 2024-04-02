<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminroleCheck
{
    public function handle(Request $request, Closure $next)
    {
        if (Auth::check() && Auth::user()->user_type === 'Administrator') {
            return $next($request);
        }

        return redirect()->back()->with('error', 'Bạn không có quyền truy cập.');
    }
}
class StudentCheck
{
    public function handle(Request $request, Closure $next)
    {
        if (Auth::check() && Auth::user()->user_type === 'Student') {
            return $next($request);
        }

        return redirect()->back()->with('error', 'Bạn không có quyền truy cập.');
    }
}
class McCheck
{
    public function handle(Request $request, Closure $next)
    {
        if (Auth::check() && Auth::user()->user_type === 'Marketing Coordinator') {
            return $next($request);
        }

        return redirect()->back()->with('error', 'Bạn không có quyền truy cập.');
    }
}
class UmmCheck
{
    public function handle(Request $request, Closure $next)
    {
        if (Auth::check() && Auth::user()->user_type === 'University Marketing Manager') {
            return $next($request);
        }

        return redirect()->back()->with('error', 'Bạn không có quyền truy cập.');
    }
}
