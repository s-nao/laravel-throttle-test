<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use App\Models\ApiToken;

class TokenAuth
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle($request, Closure $next)
    {
        $token = $request->bearerToken();
    
        if (!$token || !ApiToken::where('token', $token)->exists()) {
            return response()->json(['error' => 'Unauthorized'], 401);
        }
    
        return $next($request);
    }
}
