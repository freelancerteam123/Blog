<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
use Carbon\Carbon;
use App\User;

// Check authenticate for admin

class Admin {
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */

    public function handle($request, Closure $next) {
        if (!Auth::check()) {
            return redirect()->route('admin.login.show');
        }

        // Save time admin
        User::updateLastActive(Auth::user()['id']);
        return $next($request);
    }
}
