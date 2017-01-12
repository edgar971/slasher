<?php

namespace Envano\Slasher\Middleware;

use Closure;
use Illuminate\Http\Request;

class SlasherAuthentication {


    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next) {

        $token = $request->input('token', false);

        if(!$token) {

            return response('Unauthorized.', 401);

        }

        return $next($request);

    }


}