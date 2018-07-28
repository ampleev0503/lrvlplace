<?php

namespace App\Http\Middleware;

use App\Models\Place;
use Closure;

class CheckExistPlacesMiddleware
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
        if(!Place::exists())
        {
            return redirect(route('main'));
        }
        return $next($request);
    }
}
