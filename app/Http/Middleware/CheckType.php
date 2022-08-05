<?php

namespace App\Http\Middleware;
use App\Providers\RouteServiceProvider;

use Closure;
use Illuminate\Http\Request;

class CheckType
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        $user = $request->user();
        // if ($user->user_type != 0) {
        //     abort(403,'you must be admin');
        if ($user->user_type = 1) {
            return redirect(RouteServiceProvider::ADMIN);
        }
        return $next($request);
    }
}
