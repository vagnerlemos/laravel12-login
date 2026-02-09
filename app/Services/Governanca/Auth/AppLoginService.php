<?php

namespace App\Services\Governanca\Auth;


use App\Models\Governanca\App as GovernancaApp;
use App\Models\Governanca\User;
use App\Services\Governanca\ActivityLogger;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class AppLoginService
{
    public function login(Request $request, string $appCode)
    {
        // 1. Resolver APP
        $app = GovernancaApp::where('code', $appCode)->first();

        if (! $app) {
            abort(404);
        }

        // 2. Verificar estado do APP
        if (! $app->is_active) {
            abort(503);
        }

        // 3. Buscar usuário
        $user = User::where('email', $request->input('email'))->first();

        if (! $user) {
            throw ValidationException::withMessages([
                'email' => __('auth.failed'),
            ]);
        }

        // 4. Validar vínculo usuário ↔ app (barreira soberana)
        $hasAccess = $user->apps()
            ->where('gov_apps.id', $app->id)
            ->exists();

        if (! $hasAccess) {
            abort(403);
        }

        // 5. Autenticar (sessão global)
        $credentials = $request->only('email', 'password');

        if (! Auth::attempt($credentials)) {
            throw ValidationException::withMessages([
                'email' => __('auth.failed'),
            ]);
        }

        // 6. Regenerar sessão (segurança)
        $request->session()->regenerate();

        // 7. Fixar contexto do APP na sessão
        session([
            'current_app_id'   => $app->id,
            'current_app_code' => $app->code,
        ]);
        /*
        // 8. Registrar log de login
        ActivityLogger::log(
            actorId: Auth::id(),
            app: $app->code,
            action: 'auth.login',
            resource: 'users',
            resourceId: Auth::id(),
            oldValues: null,
            newValues: null,
            context: [
                'ip'         => $request->ip(),
                'user_agent' => $request->userAgent(),
            ]
        );*/

        // 9. Redirecionar para dashboard do APP
        return redirect()->route("{$app->code}.dashboard");
    }
}
