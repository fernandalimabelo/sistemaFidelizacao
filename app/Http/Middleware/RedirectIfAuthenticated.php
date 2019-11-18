<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    public function handle($request, Closure $next, $guard = null)
    {
        if (Auth::guard($guard)->check()) {
            if($guard == 'empresa'){
                return redirect()->route("db_empresa");
            }
            elseif($guard == 'user'){
                return redirect()->route("db_user");            
            }
            else{
                return redirect()->route("home");            
            }
        }   

        return $next($request);
    }
}
