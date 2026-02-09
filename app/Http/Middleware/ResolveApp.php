<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App\Models\Governanca\App as GovApp;
use Illuminate\Support\Facades\View;

class ResolveApp
{
    public function handle(Request $request, Closure $next, string $appCode)
    {
        $app = GovApp::where('code', $appCode)->first();

        if (! $app) {
            abort(404);
        }

        if (! $app->is_active) {
            abort(503);
        }

        // App disponível para toda a pipeline
        $request->attributes->set('current_app', $app);

        // View (GLOBAL)
        View::share('app', $app);

        return $next($request);
    }
}
