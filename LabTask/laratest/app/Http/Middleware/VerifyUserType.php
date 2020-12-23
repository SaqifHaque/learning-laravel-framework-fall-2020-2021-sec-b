<?php

namespace App\Http\Middleware;

use Closure;

class VerifyUserType
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

        if($request->session()->get('type') == 'Admin'){
            return $next($request);
        
        }
        else if($request->session()->get('type') == 'Employee'){
            return redirect()->route('emp.empdash');
        }
        else{
            return redirect()->route('/');
        }
    }
}