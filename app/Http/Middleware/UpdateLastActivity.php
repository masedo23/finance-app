<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

use function Symfony\Component\Clock\now;

class UpdateLastActivity
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (Auth::check()) {
    $user = Auth::user();

    if (
        !$user->last_activity_at ||
        now()->getTimestamp() - $user->last_activity_at->getTimestamp() >= 60
    ) {
        $user->update([
            'last_activity_at' => now(),
        ]);
    }
}


        return $next($request);
    }
}
