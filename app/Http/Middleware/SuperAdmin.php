<?php

namespace App\Http\Middleware;

use Closure;

class SuperAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next) {
        if (!Auth::check()) {
            $user = Auth::user();
            if (!$user['isSuperAdmin']) {
                return redirect()->route('admin.login.show');
            }
        }

        return $next($request);
    }
}
