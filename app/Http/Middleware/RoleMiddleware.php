<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

class RoleMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next, ...$roles)
    {

        $user = Auth::user();
        /*
        if($user->id_level == '1'){
            return $next($request);
        }
        */

        foreach($roles as $role){
            if($user->id_level == $role){
                return $next($request);
            }
        }
        
        Alert::error('Error', 'Anda tidak memiliki akses ke halaman tersebut');
        return redirect()->back();
    }
}
