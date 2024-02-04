<?php


namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Log;

class LogRequest
{
    public function handle($request, Closure $next)
    {
        // Log IP address and timestamp
        $ipAddress = $request->ip();
        $timestamp = now();

        Log::info("Request from IP $ipAddress at $timestamp");

        return $next($request);
    }
}

