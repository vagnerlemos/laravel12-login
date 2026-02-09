<?php

namespace App\Http\Middleware\Governanca;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Governanca\App as GovApp;

class EnsureGovernancaContext
{
    public function handle(Request $request, Closure $next)
    {
        // 1) Se NÃO estiver autenticado, não bloqueia aqui
        // Login é responsabilidade do Controller
        if (!Auth::check()) {
            return $next($request);
        }

        /** @var \App\Models\Governanca\User $user */
        $user = Auth::user();

        // 2) Resolver app governança
        $governancaApp = GovApp::where('code', 'governanca')->first();

        // App não existe → rota inválida (404)
        if (!$governancaApp) {
            abort(404);
        }

        // App existe mas está inativo → manutenção
        if (!$governancaApp->is_active) {
            abort(503, 'Governança em manutenção');
        }

        // 3) Verificar vínculo usuário ↔ app
        $hasAccess = $user->apps()
            ->where('gov_apps.id', $governancaApp->id)
            ->exists();

        if (!$hasAccess) {
            abort(403);
        }

        // 4) Fixar contexto
        $request->attributes->set('app', $governancaApp);

        return $next($request);
    }
}
