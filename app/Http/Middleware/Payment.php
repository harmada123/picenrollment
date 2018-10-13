<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class Payment
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
        $user = Auth::user();
        if($user->role == 'payment'){
            return $next($request);
        }
        return redirect('/portal');
    }
}
