<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App\JWT\JWTUtils;

class ValidateToken
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        if ($request->header('Authorization') == null || trim($request->header('Authorization') == ""))
            return response()->json(['error' => 'Unauthorized action'], 401);

        $token_request = explode(" ", $request->header('Authorization'))[1];
        JWTUtils::tokenValidate($token_request);
        return $next($request);
    }
}