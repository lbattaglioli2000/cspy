<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
<<<<<<< HEAD
        switch ($guard){
            case 'admin':
                if(Auth::guard($guard)->check()){
                    return redirect()->route('admin');
                }
                break;

            default:
                if (Auth::guard($guard)->check()){
                    return redirect()->route("student");
                }
=======
        if (Auth::guard($guard)->check()) {
            return redirect('/home');
>>>>>>> 6fb102cfe084ae84be1199fe2f65100834a307fe
        }

        return $next($request);
    }
}
