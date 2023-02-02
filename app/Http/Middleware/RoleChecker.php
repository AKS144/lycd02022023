<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;


class RoleChecker
{

    public function handle(Request $request, Closure $next)
    {
       return Redirect::route('after.signup');
       // return $next($request);
    }

    // public function handle($request, Closure $next, $admin, $artist, $client, $expert)
    // {
    //     $roles = Auth::check() ? Auth::user()->role->pluck('name')->toArray() : [];

    //     if (in_array($admin, $roles)) {
    //         return $next($request);
    //     } else if (in_array($artist, $roles)) {
    //         return $next($request);
    //     } else if (in_array($client, $roles)) {
    //         return $next($request);
    //     }else if (in_array($expert, $roles)) {
    //         return $next($request);
    //     }
        

    //     return Redirect::route('after.signup');
    // }
}
