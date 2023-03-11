<?php

namespace App\Http\Middleware;

use Auth;
use Illuminate\Support\Facades\Session;
use Closure;
class CheckDoctorDashboard
{
    
    public function handle($request, Closure $next)
    {
        if(Auth::guard('doctors')->check()==false){
            // dd(Auth::guard('students')->user()->name;);
            return redirect('doctor-login');
        }
        return $next($request);
    }
}
