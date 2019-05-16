<?php

namespace App\Http\Middleware;
use Illuminate\Support\Facades\Auth;
use Closure;

class Admin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if(Auth::check()){
            $user=Auth::user();
            if($user->admin==1||$user->admin==2)
            return $next($request);
            else return redirect('LoginAdmin');

        }
        
        else return redirect('LoginAdmin');
    }
}
