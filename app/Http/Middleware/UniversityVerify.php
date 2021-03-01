<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class UniversityVerify
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if ( $request->session()->has('status')) {
            $status=$request->session()->get('status');
            if($status==0){
                return $next($request);
            }
            else
            {
                return redirect('/');
            }
            
            // return $request->session()->get('status');
            // return "Got";
        }
        else
        {
            return redirect('/');
        }
    }
}
