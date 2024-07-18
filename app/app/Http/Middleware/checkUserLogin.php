<?php

namespace App\Http\Middleware;

use Closure;

class checkUserLogin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string  $role
     * @return mixed
     */
    public function handle($request, Closure $next,$role)
    {
        // if($request->session()->get('nik') == ''){
        //     return redirect('login');
        // }else{
            
            if($request->session()->get('role')== $role){
                return $next($request);
            }
            abort(403);
            // if (!$request->user()->hasRole($role)) {
            // abort(401, 'This action is unauthorized.');
            // }
            
        // }


        
        //return $next($request);
    }
}