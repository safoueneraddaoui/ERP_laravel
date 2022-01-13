<?php

namespace App\Http\Middleware;

use Hyn\Tenancy\Models\Hostname;

use Closure;

class SuperAdmin
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
        $hostname = Hostname::get();
        if($hostname->role == 'super_admin')
        {
            abort(403,'Nope.');
        }
        return $next($request);
    }
}
