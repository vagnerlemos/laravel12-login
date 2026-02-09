<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EnsureUserHasAppAccess
{
    public function handle(Request $request, Closure $next)
    {
        if (! Auth::check()) {
            return $next($request);
        }

        $app = $request->attributes->get('current_app');

        if (! $app) {
            abort(500, 'App context not resolved.');
        }

        /** @var \App\Models\Governanca\User $user */
        $user = Auth::user();

        $hasAccess = $user->apps()
            ->where('gov_apps.id', $app->id)
            ->exists();

        if (! $hasAccess) {
            abort(403);
        }

        return $next($request);
    }
}
