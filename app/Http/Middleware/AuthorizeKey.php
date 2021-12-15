<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;

class AuthorizeKey
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
        //apikey = dnZpcDk=aHR1dG1lZGlh

        if($request->header('Authorization') === Config::get('apikey.apiKey')){
            return $next($request);
        } else {
            return abort(404);
        }
    }
}
