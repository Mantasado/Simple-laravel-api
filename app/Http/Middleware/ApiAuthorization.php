<?php

namespace App\Http\Middleware;

use Closure;

class ApiAuthorization
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
        // API key. Use it in token field to send request.
        $api_key = '0290d5bc-f1fa-4ad9-bb81-74b417ce68e6';
        $hash_key = password_hash($api_key, PASSWORD_DEFAULT);

        //Check if token in request matches hashed token.
        if (!password_verify($request->input('token'), $hash_key)) {
            return response()->json('Authorization failed', 401);
        }

        return $next($request);
    }
}
