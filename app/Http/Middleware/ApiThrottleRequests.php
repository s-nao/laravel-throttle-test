<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Routing\Middleware\ThrottleRequests;
use Illuminate\Http\Request;

class ApiThrottleRequests extends ThrottleRequests
{
    protected static $shouldHashKeys = true;

    /**
     * @param Request $request
     * @param \Closure $next
     * @param int $maxAttempts
     * @param int $decayMinutes
     * @param string $prefix
     * @return Response
     */
    public function handle($request, $next, $maxAttempts = 10, $decayMinutes = 1, $prefix = '')
    {
        $token = $request->bearerToken();
        return parent::handle($request, $next, $maxAttempts, $decayMinutes, ":api:{$token}:");
    }
}
