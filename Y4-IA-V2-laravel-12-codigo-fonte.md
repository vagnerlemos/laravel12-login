=== AI_FILE_INDEX_V2 ===

FILE: app/Http/Controllers/Auth/LoginController.php
FILE: app/Http/Controllers/Auth/PasswordResetController.php
FILE: app/Http/Controllers/Controller.php
FILE: app/Http/Controllers/DashboardController.php
FILE: app/Http/Controllers/UI/UploadController.php
FILE: app/Http/Controllers/UI/VisualProfileController.php
FILE: app/Http/Middleware/EnsureAuthenticated.php
FILE: app/Http/Middleware/EnsureUserHasAppAccess.php
FILE: app/Http/Middleware/Governanca/EnsureGovernancaContext.php
FILE: app/Http/Middleware/ResolveApp.php
FILE: app/Models/Governanca/ActivityLog.php
FILE: app/Models/Governanca/App.php
FILE: app/Models/Governanca/Granularity.php
FILE: app/Models/Governanca/Permission.php
FILE: app/Models/Governanca/Role.php
FILE: app/Models/Governanca/User.php
FILE: app/Models/Governanca/UserPreference.php
FILE: app/Notifications/Auth/ResetPasswordNotification.php
FILE: app/Providers/AppServiceProvider.php [CORE]
FILE: app/Providers/GovernanceServiceProvider.php
FILE: app/Providers/RouteServiceProvider.php
FILE: app/Providers/VisualProfileServiceProvider.php [CORE]
FILE: app/Services/Governanca/Auth/AppLoginService.php
FILE: app/Services/Governanca/UI/VisualProfileService.php
FILE: bootstrap/app.php [CORE]
FILE: bootstrap/providers.php
FILE: config/app.php
FILE: config/auth.php
FILE: config/cache.php
FILE: config/database.php
FILE: config/filesystems.php
FILE: config/logging.php
FILE: config/mail.php
FILE: config/queue.php
FILE: config/services.php
FILE: config/session.php
FILE: database/.gitignore
FILE: database/factories/UserFactory.php
FILE: database/migrations/2026_02_04_105550_create_sessions_table.php
FILE: database/migrations/2026_02_06_082328_create_password_reset_tokens_table.php
FILE: database/migrations/governanca/2026_01_30_184512_create_gov_core_tables.php
FILE: database/migrations/governanca/2026_02_09_185449_create_gov_user_preferences_table.php
FILE: database/seeders/BaseGovernancaSeeder.php
FILE: database/seeders/DatabaseSeeder.php
FILE: database/seeders/definitions/cms.php
FILE: database/seeders/definitions/governanca.php
FILE: database/seeders/definitions/system.php
FILE: database/seeders/definitions/vendas.php
FILE: resources/css/app.css [CORE]
FILE: resources/css/base/app.css
FILE: resources/css/cms/auth/login.css
FILE: resources/css/governanca/auth/login.css
FILE: resources/css/system/auth/login.css
FILE: resources/css/tokens/index.css [CORE]
FILE: resources/css/tokens/zones/app.dark.css
FILE: resources/css/tokens/zones/app.light.css
FILE: resources/css/tokens/zones/auth.dark.css
FILE: resources/css/tokens/zones/auth.light.css
FILE: resources/css/tokens/zones/content.dark.css
FILE: resources/css/tokens/zones/content.light.css
FILE: resources/css/tokens/zones/navigation.dark.css
FILE: resources/css/tokens/zones/navigation.light.css
FILE: resources/css/tokens/_app.css
FILE: resources/css/tokens/_auth.css
FILE: resources/css/tokens/_modal.css
FILE: resources/css/tokens/_navigation.css
FILE: resources/css/tokens/_shadows.css
FILE: resources/css/tokens/_tables.css
FILE: resources/css/tokens/_toast.css
FILE: resources/css/tokens/_upload.css
FILE: resources/css/vendas/auth/login.css
FILE: resources/js/app.js [CORE]
FILE: resources/js/bootstrap.js
FILE: resources/js/components/theme-switch.js
FILE: resources/js/components/toast.js
FILE: resources/js/components/upload.js
FILE: resources/views/auth/governanca/forgot-password.blade.php
FILE: resources/views/auth/governanca/login.blade.php
FILE: resources/views/auth/governanca/reset-password.blade.php
FILE: resources/views/cms/auth/forgot-password.blade.php
FILE: resources/views/cms/auth/login.blade.php
FILE: resources/views/cms/auth/reset-password.blade.php
FILE: resources/views/cms/dashboard/index.blade.php
FILE: resources/views/cms/testes/__test.blade.php
FILE: resources/views/components/ui/auth/card.blade.php
FILE: resources/views/components/ui/auth/container.blade.php
FILE: resources/views/components/ui/auth/header.blade.php
FILE: resources/views/components/ui/button/base.blade.php
FILE: resources/views/components/ui/button/danger.blade.php
FILE: resources/views/components/ui/button/ghost.blade.php
FILE: resources/views/components/ui/button/primary.blade.php
FILE: resources/views/components/ui/button/secondary.blade.php
FILE: resources/views/components/ui/form/field.blade.php
FILE: resources/views/components/ui/form/form.blade.php
FILE: resources/views/components/ui/form/input.blade.php
FILE: resources/views/components/ui/form/password.blade.php
FILE: resources/views/components/ui/form/select.blade.php
FILE: resources/views/components/ui/form/textarea.blade.php
FILE: resources/views/components/ui/modal/base.blade.php
FILE: resources/views/components/ui/modal/confirm.blade.php
FILE: resources/views/components/ui/modal/index.blade.php
FILE: resources/views/components/ui/table/index.blade.php
FILE: resources/views/components/ui/table/pagination.blade.php
FILE: resources/views/components/ui/table.blade.php
FILE: resources/views/components/ui/theme/switch.blade.php
FILE: resources/views/components/ui/toast/container.blade.php
FILE: resources/views/components/ui/upload/index.blade.php
FILE: resources/views/governanca/auth/forgot-password.blade.php
FILE: resources/views/governanca/auth/login.blade.php
FILE: resources/views/governanca/auth/reset-password.blade.php
FILE: resources/views/governanca/dashboard/index.blade.php
FILE: resources/views/layouts/app.blade.php [CORE]
FILE: resources/views/layouts/auth.blade.php [CORE]
FILE: resources/views/layouts/partials/breadcrumb.blade.php
FILE: resources/views/layouts/partials/mobile-menu.blade.php
FILE: resources/views/layouts/partials/sidebar.blade.php
FILE: resources/views/layouts/partials/topbar.blade.php
FILE: resources/views/partials/alerts.blade.php
FILE: resources/views/partials/loader.blade.php
FILE: resources/views/system/auth/forgot-password.blade.php
FILE: resources/views/system/auth/login.blade.php
FILE: resources/views/system/auth/reset-password.blade.php
FILE: resources/views/system/dashboard/index.blade.php
FILE: resources/views/vendas/auth/forgot-password.blade.php
FILE: resources/views/vendas/auth/login.blade.php
FILE: resources/views/vendas/auth/reset-password.blade.php
FILE: resources/views/vendas/dashboard/index.blade.php
FILE: routes/api.php
FILE: routes/cms.php
FILE: routes/governanca.php
FILE: routes/system.php
FILE: routes/vendas.php
FILE: routes/web.php

=== END_AI_FILE_INDEX_V2 ===



##################################################
### SECTION: APP ###
##################################################

/**
 * FILE: app/Http/Controllers/Auth/LoginController.php
 * TYPE: PHP Source
 * DOMAIN: Controller
 * CORE: NO
 */

<<<FILE_START: app/Http/Controllers/Auth/LoginController.php>>>
<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Services\Governanca\Auth\AppLoginService;

class LoginController extends Controller
{
    public function showLoginForm(Request $request)
    {


        $app = $request->attributes->get('current_app');

        if (Auth::check()) {

            return redirect()->route("{$app->code}.dashboard");
        }

        return view("auth.{$app->code}.login");
    }

    public function login(Request $request, AppLoginService $loginService)
    {
        $request->validate([
            'email'    => ['required', 'email'],
            'password' => ['required', 'string'],
        ]);

        $app = $request->attributes->get('current_app');

        return $loginService->login($request, $app->code);
    }

    public function logout(Request $request)
    {
        $app = $request->attributes->get('current_app');

        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route("{$app->code}.login");
    }
}
<<<FILE_END: app/Http/Controllers/Auth/LoginController.php>>>

/**
 * FILE: app/Http/Controllers/Auth/PasswordResetController.php
 * TYPE: PHP Source
 * DOMAIN: Controller
 * CORE: NO
 */

<<<FILE_START: app/Http/Controllers/Auth/PasswordResetController.php>>>
<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Governanca\User;
use App\Notifications\Auth\ResetPasswordNotification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class PasswordResetController extends Controller
{
    /**
     * Form de solicitação (email)
     */
    public function showForgotForm(Request $request)
    {
        $app = $request->attributes->get('current_app');

        return view("auth.{$app->code}.forgot-password");
    }

    /**
     * Envia o link de reset
     */
    public function sendResetLink(Request $request)
    {
        $app = $request->attributes->get('current_app');

        $request->validate([
            'email' => ['required', 'email'],
        ]);

        // 1) Verifica se o usuário existe
        $user = User::where('email', $request->email)->first();

        if (! $user) {
            return back()->withErrors([
                'email' => 'Usuário não encontrado.',
            ]);
        }

        // 2) Barreira soberana: usuário pertence ao app?
        if (! $user->apps()->where('gov_apps.id', $app->id)->exists()) {
            return back()->withErrors([
                'email' => 'Usuário não possui acesso a este aplicativo.',
            ]);
        }

        /**
         * 3) Dispara o broker com callback explícito
         *    (NÃO usa sendPasswordResetNotification do User)
         */
        $status = Password::broker()->sendResetLink(
            ['email' => $request->email],
            function ($user, $token) use ($app) {
                $user->notify(
                    new ResetPasswordNotification(
                        $token,
                        $app->code
                    )
                );
            }
        );

        return $status === Password::RESET_LINK_SENT
            ? back()->with('status', __($status))
            : back()->withErrors(['email' => __($status)]);
    }

    /**
     * Form de redefinição
     */
    public function showResetForm(Request $request, string $token)
    {
        $app = $request->attributes->get('current_app');

        return view("auth.{$app->code}.reset-password", [
            'token' => $token,
            'email' => $request->query('email'),
        ]);
    }

    /**
     * Confirma a troca da senha
     */
    public function reset(Request $request)
    {
        $app = $request->attributes->get('current_app');

        $request->validate([
            'token'    => ['required'],
            'email'    => ['required', 'email'],
            'password' => ['required', 'confirmed', 'min:8'],
        ]);

        // Barreira soberana novamente
        $user = User::where('email', $request->email)->first();

        if (! $user || ! $user->apps()->where('gov_apps.id', $app->id)->exists()) {
            return back()->withErrors([
                'email' => 'Usuário não possui acesso a este aplicativo.',
            ]);
        }

        $status = Password::reset(
            $request->only('email', 'password', 'password_confirmation', 'token'),
            function ($user, $password) {
                $user->forceFill([
                    'password' => Hash::make($password),
                    'remember_token' => Str::random(60),
                ])->save();
            }
        );

        return $status === Password::PASSWORD_RESET
            ? redirect()->route("{$app->code}.login")->with('status', __($status))
            : back()->withErrors(['email' => __($status)]);
    }
}
<<<FILE_END: app/Http/Controllers/Auth/PasswordResetController.php>>>

/**
 * FILE: app/Http/Controllers/Controller.php
 * TYPE: PHP Source
 * DOMAIN: Controller
 * CORE: NO
 */

<<<FILE_START: app/Http/Controllers/Controller.php>>>
<?php

namespace App\Http\Controllers;

abstract class Controller
{
    //
}
<<<FILE_END: app/Http/Controllers/Controller.php>>>

/**
 * FILE: app/Http/Controllers/DashboardController.php
 * TYPE: PHP Source
 * DOMAIN: Controller
 * CORE: NO
 */

<<<FILE_START: app/Http/Controllers/DashboardController.php>>>
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(Request $request)
    {
        // App já foi resolvido pelo middleware resolve.app
        $app = $request->attributes->get('current_app');

        return view("{$app->code}.dashboard.index", [
            'app' => $app,
        ]);
    }
}
<<<FILE_END: app/Http/Controllers/DashboardController.php>>>

/**
 * FILE: app/Http/Controllers/UI/UploadController.php
 * TYPE: PHP Source
 * DOMAIN: Controller
 * CORE: NO
 */

<<<FILE_START: app/Http/Controllers/UI/UploadController.php>>>
<?php

namespace App\Http\Controllers\UI;

use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;


class UploadController extends Controller
{
    /**
     * Store uploaded file securely
     */
    public function store(Request $request): JsonResponse
    {
        if (!$request->hasFile('file')) {
            return response()->json([
                'success' => false,
                'message' => 'Nenhum arquivo enviado.',
            ], 422);
        }

        $file = $request->file('file');

        if (!$file || !$file->isValid()) {
            return response()->json([
                'success' => false,
                'message' => 'Arquivo inválido.',
            ], 422);
        }

        /*
        |--------------------------------------------------------------------------
        | Segurança real
        |--------------------------------------------------------------------------
        */

        $allowedMimeTypes = [
            // imagens
            'image/jpeg',
            'image/png',
            'image/webp',
            'image/gif',

            // documentos
            'application/pdf',
            'text/plain',
            'application/msword',
            'application/vnd.openxmlformats-officedocument.wordprocessingml.document',
        ];

        $validator = Validator::make($request->all(), [
            'file' => [
                'required',
                'file',
                'max:5120',
                function ($attribute, $value, $fail) use ($allowedMimeTypes) {
                    $mime = $value->getMimeType();

                    if (!in_array($mime, $allowedMimeTypes, true)) {
                        $fail('Tipo de arquivo não permitido.');
                    }
                },
            ],
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => $validator->errors()->first(),
                'errors' => $validator->errors(),
            ], 422);
        }



        /*
        |--------------------------------------------------------------------------
        | Organização por app (sem depender de app('current_app'))
        |--------------------------------------------------------------------------
        */

        $appCode = (string) (
            session('current_app_code')
            ?? $request->segment(1)
            ?? 'default'
        );

        $directory = "uploads/{$appCode}";

        if (!Storage::disk('public')->exists($directory)) {
            Storage::disk('public')->makeDirectory($directory);
        }

        /*
        |--------------------------------------------------------------------------
        | Nome seguro
        |--------------------------------------------------------------------------
        */

        $extension = strtolower((string) $file->getClientOriginalExtension());
        $filename = Str::uuid() . ($extension ? ".{$extension}" : '');

        $path = $file->storeAs($directory, $filename, 'public');

        return response()->json([
            'success' => true,
            'message' => 'Upload realizado com sucesso.',
            'data' => [
                'original_name' => $file->getClientOriginalName(),
                'filename' => $filename,
                'path' => $path,
                'url' => asset('storage/' . $path),
                'size' => $file->getSize(),
                'mime' => $file->getMimeType(),
            ],
        ]);
    }
}
<<<FILE_END: app/Http/Controllers/UI/UploadController.php>>>

/**
 * FILE: app/Http/Controllers/UI/VisualProfileController.php
 * TYPE: PHP Source
 * DOMAIN: Controller
 * CORE: NO
 */

<<<FILE_START: app/Http/Controllers/UI/VisualProfileController.php>>>
<?php

namespace App\Http\Controllers\UI;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Governanca\UserPreference;
use Illuminate\Support\Facades\Auth;


class VisualProfileController extends Controller
{
    public function update(Request $request)
    {
        $request->validate([
            'visual_profile' => 'required|string',
        ]);

        UserPreference::updateOrCreate(
            [
                'user_id' => Auth::id(),
                'app_id' => session('current_app_id'),
            ],
            [
                'visual_profile' => $request->visual_profile,
            ]
        );

        return response()->noContent();
    }
}
<<<FILE_END: app/Http/Controllers/UI/VisualProfileController.php>>>

/**
 * FILE: app/Http/Middleware/EnsureAuthenticated.php
 * TYPE: PHP Source
 * DOMAIN: General
 * CORE: NO
 */

<<<FILE_START: app/Http/Middleware/EnsureAuthenticated.php>>>
<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EnsureAuthenticated
{
    public function handle(Request $request, Closure $next)
    {
        if (! Auth::check()) {
            $app = $request->attributes->get('current_app');

            if ($app) {
                return redirect()->route("{$app->code}.login");
            }

            return redirect()->route('login');
        }

        return $next($request);
    }
}
<<<FILE_END: app/Http/Middleware/EnsureAuthenticated.php>>>

/**
 * FILE: app/Http/Middleware/EnsureUserHasAppAccess.php
 * TYPE: PHP Source
 * DOMAIN: General
 * CORE: NO
 */

<<<FILE_START: app/Http/Middleware/EnsureUserHasAppAccess.php>>>
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
<<<FILE_END: app/Http/Middleware/EnsureUserHasAppAccess.php>>>

/**
 * FILE: app/Http/Middleware/Governanca/EnsureGovernancaContext.php
 * TYPE: PHP Source
 * DOMAIN: General
 * CORE: NO
 */

<<<FILE_START: app/Http/Middleware/Governanca/EnsureGovernancaContext.php>>>
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
<<<FILE_END: app/Http/Middleware/Governanca/EnsureGovernancaContext.php>>>

/**
 * FILE: app/Http/Middleware/ResolveApp.php
 * TYPE: PHP Source
 * DOMAIN: General
 * CORE: NO
 */

<<<FILE_START: app/Http/Middleware/ResolveApp.php>>>
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
<<<FILE_END: app/Http/Middleware/ResolveApp.php>>>

/**
 * FILE: app/Models/Governanca/ActivityLog.php
 * TYPE: PHP Source
 * DOMAIN: Model
 * CORE: NO
 */

<<<FILE_START: app/Models/Governanca/ActivityLog.php>>>
<?php

namespace App\Models\Governanca;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ActivityLog extends Model
{
    protected $table = 'gov_activity_logs';

    protected $casts = [
        'old_values' => 'array',
        'new_values' => 'array',
        'context' => 'array',
    ];

    public function actor(): BelongsTo
    {
        return $this->belongsTo(User::class, 'actor_id');
    }
}
<<<FILE_END: app/Models/Governanca/ActivityLog.php>>>

/**
 * FILE: app/Models/Governanca/App.php
 * TYPE: PHP Source
 * DOMAIN: Model
 * CORE: NO
 */

<<<FILE_START: app/Models/Governanca/App.php>>>
<?php

namespace App\Models\Governanca;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class App extends Model
{
    protected $table = 'gov_apps';

    protected $casts = [
        'is_active' => 'boolean',
    ];

    public function users(): BelongsToMany
    {
        return $this->belongsToMany(
            User::class,
            'gov_app_user',
            'app_id',
            'user_id'
        );
    }
}
<<<FILE_END: app/Models/Governanca/App.php>>>

/**
 * FILE: app/Models/Governanca/Granularity.php
 * TYPE: PHP Source
 * DOMAIN: Model
 * CORE: NO
 */

<<<FILE_START: app/Models/Governanca/Granularity.php>>>
<?php

namespace App\Models\Governanca;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Granularity extends Model
{
    protected $table = 'gov_granularities';

    protected $casts = [
        'is_denied' => 'boolean',
    ];

    public function app(): BelongsTo
    {
        return $this->belongsTo(App::class, 'app_id');
    }
}
<<<FILE_END: app/Models/Governanca/Granularity.php>>>

/**
 * FILE: app/Models/Governanca/Permission.php
 * TYPE: PHP Source
 * DOMAIN: Model
 * CORE: NO
 */

<<<FILE_START: app/Models/Governanca/Permission.php>>>
<?php

namespace App\Models\Governanca;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Permission extends Model
{
    protected $table = 'gov_permissions';

    public function app(): BelongsTo
    {
        return $this->belongsTo(App::class, 'app_id');
    }
}
<<<FILE_END: app/Models/Governanca/Permission.php>>>

/**
 * FILE: app/Models/Governanca/Role.php
 * TYPE: PHP Source
 * DOMAIN: Model
 * CORE: NO
 */

<<<FILE_START: app/Models/Governanca/Role.php>>>
<?php

namespace App\Models\Governanca;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Role extends Model
{
    protected $table = 'gov_roles';

    public function app(): BelongsTo
    {
        return $this->belongsTo(App::class, 'app_id');
    }

    public function permissions(): BelongsToMany
    {
        return $this->belongsToMany(
            Permission::class,
            'gov_permission_role',
            'role_id',
            'permission_id'
        );
    }
}
<<<FILE_END: app/Models/Governanca/Role.php>>>

/**
 * FILE: app/Models/Governanca/User.php
 * TYPE: PHP Source
 * DOMAIN: Model
 * CORE: NO
 */

<<<FILE_START: app/Models/Governanca/User.php>>>
<?php

namespace App\Models\Governanca;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Contracts\Auth\CanResetPassword;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable implements CanResetPassword
{
    use Notifiable;

    protected $table = 'gov_users';

    protected $casts = [
        'email_verified_at' => 'datetime',
        'is_active'         => 'boolean',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Apps aos quais o usuário pertence
     */
    public function apps(): BelongsToMany
    {
        return $this->belongsToMany(
            App::class,
            'gov_app_user',
            'user_id',
            'app_id'
        );
    }

    /**
     * Roles atribuídos ao usuário
     */
    public function roles(): BelongsToMany
    {
        return $this->belongsToMany(
            Role::class,
            'gov_role_user',
            'user_id',
            'role_id'
        );
    }

    /**
     * Logs de atividade (governança)
     */
    public function activityLogs(): HasMany
    {
        return $this->hasMany(ActivityLog::class, 'actor_id');
    }
}
<<<FILE_END: app/Models/Governanca/User.php>>>

/**
 * FILE: app/Models/Governanca/UserPreference.php
 * TYPE: PHP Source
 * DOMAIN: Model
 * CORE: NO
 */

<<<FILE_START: app/Models/Governanca/UserPreference.php>>>
<?php

namespace App\Models\Governanca;

use Illuminate\Database\Eloquent\Model;

class UserPreference extends Model
{
    protected $table = 'gov_user_preferences';

    protected $fillable = [
        'user_id',
        'app_id',
        'visual_profile',
    ];
}
<<<FILE_END: app/Models/Governanca/UserPreference.php>>>

/**
 * FILE: app/Notifications/Auth/ResetPasswordNotification.php
 * TYPE: PHP Source
 * DOMAIN: General
 * CORE: NO
 */

<<<FILE_START: app/Notifications/Auth/ResetPasswordNotification.php>>>
<?php

namespace App\Notifications\Auth;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Notification;
use Illuminate\Notifications\Messages\MailMessage;

class ResetPasswordNotification extends Notification
{
    use Queueable;

    protected string $token;
    protected string $appCode;

    public function __construct(string $token, string $appCode)
    {
        $this->token   = $token;
        $this->appCode = $appCode;
    }

    public function via($notifiable): array
    {
        return ['mail'];
    }

    public function toMail($notifiable): MailMessage
    {
        $resetUrl = url(sprintf(
            '/%s/reset-password/%s?email=%s',
            $this->appCode,
            $this->token,
            urlencode($notifiable->email)
        ));

        return (new MailMessage)
            ->subject($this->subjectByApp())
            ->greeting('Recuperação de senha')
            ->line('Você solicitou a redefinição de senha.')
            ->action('Redefinir senha', $resetUrl)
            ->line('Se você não solicitou este e-mail, ignore.');
    }

    protected function subjectByApp(): string
    {
        return match ($this->appCode) {
            'cms'        => 'CMS – Recuperação de senha',
            'system'     => 'Sistema – Recuperação de senha',
            'vendas'     => 'Vendas – Recuperação de senha',
            'governanca' => 'Governança – Recuperação de senha',
            default      => 'Recuperação de senha',
        };
    }
}
<<<FILE_END: app/Notifications/Auth/ResetPasswordNotification.php>>>

/**
 * FILE: app/Providers/AppServiceProvider.php
 * TYPE: PHP Source
 * DOMAIN: Provider
 * CORE: YES
 */

>>> CORE_FILE <<<
<<<FILE_START: app/Providers/AppServiceProvider.php>>>
<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
//------------------------------------------
use Carbon\Carbon;
use Illuminate\Support\Facades\View;
use App\Services\Governanca\UI\VisualProfileService;
use Illuminate\Support\Facades\Auth;



class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //----------------------------------------------------------
        Carbon::setLocale(config('app.locale'));

        View::composer('layouts.app', function ($view) {

            $user = Auth::user();


            if (! $user) {
                return;
            }

            $appId = session('current_app_id');

            if (! $appId) {
                return;
            }

            $visualProfile = VisualProfileService::resolve(
                $user->id,
                $appId
            );

            $view->with('visualProfile', $visualProfile);
        });
    }
}
<<<FILE_END: app/Providers/AppServiceProvider.php>>>

/**
 * FILE: app/Providers/GovernanceServiceProvider.php
 * TYPE: PHP Source
 * DOMAIN: Provider
 * CORE: NO
 */

<<<FILE_START: app/Providers/GovernanceServiceProvider.php>>>
<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class GovernanceServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        $this->loadMigrationsFrom(
            database_path('migrations/governanca')
        );
    }
}
<<<FILE_END: app/Providers/GovernanceServiceProvider.php>>>

/**
 * FILE: app/Providers/RouteServiceProvider.php
 * TYPE: PHP Source
 * DOMAIN: Provider
 * CORE: NO
 */

<<<FILE_START: app/Providers/RouteServiceProvider.php>>>
<?php

namespace App\Providers;

use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;

class RouteServiceProvider extends ServiceProvider
{
    /**
     * Define route model bindings, pattern filters, and route groups.
     */
    public function boot(): void
    {
        $this->routes(function () {

            // ================================
            // CMS (adm do site)
            // ================================
            Route::middleware('web')
                ->group(base_path('routes/cms.php'));

            // ================================
            // SYSTEM (Interno)
            // ================================
            Route::middleware('web')
                ->group(base_path('routes/system.php'));

            // ================================
            // VENDAS (Domínio Operacional)
            // ================================
            Route::middleware('web')
                ->group(base_path('routes/vendas.php'));

            // ================================
            // GOVERNANÇA (RBAC / Administração)
            // ================================
            Route::middleware('web')
                ->group(base_path('routes/governanca.php'));

            // ================================
            // API (Versionada)
            // ================================
            Route::prefix('api/v1')
                ->middleware('api')
                ->group(base_path('routes/api.php'));
        });
    }
}
<<<FILE_END: app/Providers/RouteServiceProvider.php>>>

/**
 * FILE: app/Providers/VisualProfileServiceProvider.php
 * TYPE: PHP Source
 * DOMAIN: Provider
 * CORE: YES
 */

>>> CORE_FILE <<<
<<<FILE_START: app/Providers/VisualProfileServiceProvider.php>>>
<?php

namespace App\Providers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
use App\Models\Governanca\UserPreference;

class VisualProfileServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        View::composer(
            ['layouts.app', 'layouts.auth', 'layouts.partials.topbar'],
            function ($view) {
                $profile = 'light';

                if (Auth::check() && session('current_app_id')) {
                    $pref = UserPreference::query()
                        ->where('user_id', Auth::id())
                        ->where('app_id', session('current_app_id'))
                        ->first();

                    if ($pref?->visual_profile) {
                        $profile = $pref->visual_profile;
                    }
                }

                // Resolve por zonas (canônico)
                $zones = $this->resolveZones($profile);

                $view->with('visualProfile', $profile);
                $view->with('uiZones', $zones);
            }
        );
    }

    private function resolveZones(string $profile): array
    {
        // defaults
        $zones = [
            'app' => 'light',
            'navigation' => 'light',
            'content' => 'light',
            'auth' => 'light',
        ];

        return match ($profile) {
            'dark' => [
                'app' => 'dark',
                'navigation' => 'dark',
                'content' => 'dark',
                'auth' => 'dark',
            ],

            'mixed-nav-dark' => [
                'app' => 'light',
                'navigation' => 'dark',
                'content' => 'light',
                'auth' => 'light',
            ],

            'mixed-content-dark' => [
                'app' => 'dark',
                'navigation' => 'light',
                'content' => 'dark',
                'auth' => 'dark',
            ],

            default => $zones,
        };
    }
}
<<<FILE_END: app/Providers/VisualProfileServiceProvider.php>>>

/**
 * FILE: app/Services/Governanca/Auth/AppLoginService.php
 * TYPE: PHP Source
 * DOMAIN: Service
 * CORE: NO
 */

<<<FILE_START: app/Services/Governanca/Auth/AppLoginService.php>>>
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
<<<FILE_END: app/Services/Governanca/Auth/AppLoginService.php>>>

/**
 * FILE: app/Services/Governanca/UI/VisualProfileService.php
 * TYPE: PHP Source
 * DOMAIN: Service
 * CORE: NO
 */

<<<FILE_START: app/Services/Governanca/UI/VisualProfileService.php>>>
<?php

namespace App\Services\Governanca\UI;

use App\Models\Governanca\UserPreference;

class VisualProfileService
{
    public static function resolve(int $userId, int $appId): string
    {
        return UserPreference::where('user_id', $userId)
            ->where('app_id', $appId)
            ->value('visual_profile')
            ?? 'light';
    }
}
<<<FILE_END: app/Services/Governanca/UI/VisualProfileService.php>>>


##################################################
### SECTION: BOOTSTRAP ###
##################################################

/**
 * FILE: bootstrap/app.php
 * TYPE: PHP Source
 * DOMAIN: General
 * CORE: YES
 */

>>> CORE_FILE <<<
<<<FILE_START: bootstrap/app.php>>>
<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;

use App\Http\Middleware\ResolveApp;
use App\Http\Middleware\EnsureAuthenticated;
use App\Http\Middleware\EnsureUserHasAppAccess;

return Application::configure(basePath: dirname(__DIR__))

    ->withProviders([
        App\Providers\AppServiceProvider::class,
        App\Providers\RouteServiceProvider::class,
        App\Providers\VisualProfileServiceProvider::class,
    ])

    ->withRouting(
        web: __DIR__ . '/../routes/web.php',
        api: __DIR__ . '/../routes/api.php',
        commands: __DIR__ . '/../routes/console.php',
        health: '/up',
    )

    ->withMiddleware(function (Middleware $middleware): void {

        /*
        |--------------------------------------------------------------------------
        | Route Middleware Aliases (Laravel 12)
        |--------------------------------------------------------------------------
        */
        $middleware->alias([
            'resolve.app'          => ResolveApp::class,
            'ensure.authenticated' => EnsureAuthenticated::class,
            'ensure.user.app'      => EnsureUserHasAppAccess::class,
        ]);
    })

    ->withExceptions(function (Exceptions $exceptions): void {
        //coloquei para tirar erro ide
        $exceptions;
    })

    ->create();
<<<FILE_END: bootstrap/app.php>>>

/**
 * FILE: bootstrap/providers.php
 * TYPE: PHP Source
 * DOMAIN: General
 * CORE: NO
 */

<<<FILE_START: bootstrap/providers.php>>>
<?php

return [
    App\Providers\AppServiceProvider::class,
    App\Providers\GovernanceServiceProvider::class,
];
<<<FILE_END: bootstrap/providers.php>>>


##################################################
### SECTION: CONFIG ###
##################################################

/**
 * FILE: config/app.php
 * TYPE: PHP Source
 * DOMAIN: General
 * CORE: NO
 */

<<<FILE_START: config/app.php>>>
<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Application Name
    |--------------------------------------------------------------------------
    |
    | This value is the name of your application, which will be used when the
    | framework needs to place the application's name in a notification or
    | other UI elements where an application name needs to be displayed.
    |
    */

    'name' => env('APP_NAME', 'Laravel'),

    /*
    |--------------------------------------------------------------------------
    | Application Environment
    |--------------------------------------------------------------------------
    |
    | This value determines the "environment" your application is currently
    | running in. This may determine how you prefer to configure various
    | services the application utilizes. Set this in your ".env" file.
    |
    */

    'env' => env('APP_ENV', 'production'),

    /*
    |--------------------------------------------------------------------------
    | Application Debug Mode
    |--------------------------------------------------------------------------
    |
    | When your application is in debug mode, detailed error messages with
    | stack traces will be shown on every error that occurs within your
    | application. If disabled, a simple generic error page is shown.
    |
    */

    'debug' => (bool) env('APP_DEBUG', false),

    /*
    |--------------------------------------------------------------------------
    | Application URL
    |--------------------------------------------------------------------------
    |
    | This URL is used by the console to properly generate URLs when using
    | the Artisan command line tool. You should set this to the root of
    | the application so that it's available within Artisan commands.
    |
    */

    'url' => env('APP_URL', 'http://localhost'),

    /*
    |--------------------------------------------------------------------------
    | Application Timezone
    |--------------------------------------------------------------------------
    |
    | Here you may specify the default timezone for your application, which
    | will be used by the PHP date and date-time functions. The timezone
    | is set to "UTC" by default as it is suitable for most use cases.
    |
    */

    'timezone' => env('APP_TIMEZONE', 'America/Sao_Paulo'),


    /*
    |--------------------------------------------------------------------------
    | Application Locale Configuration
    |--------------------------------------------------------------------------
    |
    | The application locale determines the default locale that will be used
    | by Laravel's translation / localization methods. This option can be
    | set to any locale for which you plan to have translation strings.
    |
    */

    'locale' => env('APP_LOCALE', 'pt_BR'),
    'fallback_locale' => env('APP_FALLBACK_LOCALE', 'pt_BR'),
    'faker_locale' => env('APP_FAKER_LOCALE', 'pt_BR'),


    /*
    |--------------------------------------------------------------------------
    | Encryption Key
    |--------------------------------------------------------------------------
    |
    | This key is utilized by Laravel's encryption services and should be set
    | to a random, 32 character string to ensure that all encrypted values
    | are secure. You should do this prior to deploying the application.
    |
    */

    'cipher' => 'AES-256-CBC',

    'key' => env('APP_KEY'),

    'previous_keys' => [
        ...array_filter(
            explode(',', (string) env('APP_PREVIOUS_KEYS', ''))
        ),
    ],

    /*
    |--------------------------------------------------------------------------
    | Maintenance Mode Driver
    |--------------------------------------------------------------------------
    |
    | These configuration options determine the driver used to determine and
    | manage Laravel's "maintenance mode" status. The "cache" driver will
    | allow maintenance mode to be controlled across multiple machines.
    |
    | Supported drivers: "file", "cache"
    |
    */

    'maintenance' => [
        'driver' => env('APP_MAINTENANCE_DRIVER', 'file'),
        'store' => env('APP_MAINTENANCE_STORE', 'database'),
    ],




];
<<<FILE_END: config/app.php>>>

/**
 * FILE: config/auth.php
 * TYPE: PHP Source
 * DOMAIN: General
 * CORE: NO
 */

<<<FILE_START: config/auth.php>>>
<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Authentication Defaults
    |--------------------------------------------------------------------------
    |
    | This option defines the default authentication "guard" and password
    | reset "broker" for your application. You may change these values
    | as required, but they're a perfect start for most applications.
    |
    */

    'defaults' => [
        'guard' => env('AUTH_GUARD', 'web'),
        'passwords' => env('AUTH_PASSWORD_BROKER', 'users'),
    ],

    /*
    |--------------------------------------------------------------------------
    | Authentication Guards
    |--------------------------------------------------------------------------
    |
    | Next, you may define every authentication guard for your application.
    | Of course, a great default configuration has been defined for you
    | which utilizes session storage plus the Eloquent user provider.
    |
    | All authentication guards have a user provider, which defines how the
    | users are actually retrieved out of your database or other storage
    | system used by the application. Typically, Eloquent is utilized.
    |
    | Supported: "session"
    |
    */
    //Aqui você está dizendo:Use sessões para autenticar usuários do provider users
    'guards' => [
        'web' => [
            'driver' => 'session',
            'provider' => 'users',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | User Providers
    |--------------------------------------------------------------------------
    |
    | All authentication guards have a user provider, which defines how the
    | users are actually retrieved out of your database or other storage
    | system used by the application. Typically, Eloquent is utilized.
    |
    | If you have multiple user tables or models you may configure multiple
    | providers to represent the model / table. These providers may then
    | be assigned to any extra authentication guards you have defined.
    |
    | Supported: "database", "eloquent"
    |
    */

    'providers' => [
        'users' => [
            'driver' => 'eloquent',
            'model' => env('AUTH_MODEL', App\Models\Governanca\User::class),
        ],

        // 'users' => [
        //     'driver' => 'database',
        //     'table' => 'users',
        // ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Resetting Passwords
    |--------------------------------------------------------------------------
    |
    | These configuration options specify the behavior of Laravel's password
    | reset functionality, including the table utilized for token storage
    | and the user provider that is invoked to actually retrieve users.
    |
    | The expiry time is the number of minutes that each reset token will be
    | considered valid. This security feature keeps tokens short-lived so
    | they have less time to be guessed. You may change this as needed.
    |
    | The throttle setting is the number of seconds a user must wait before
    | generating more password reset tokens. This prevents the user from
    | quickly generating a very large amount of password reset tokens.
    |
    */

    'passwords' => [
        'users' => [
            'provider' => 'users',
            'table' => env('AUTH_PASSWORD_RESET_TOKEN_TABLE', 'gov_password_reset_tokens'),
            'expire' => 60,
            'throttle' => 60,
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Password Confirmation Timeout
    |--------------------------------------------------------------------------
    |
    | Here you may define the number of seconds before a password confirmation
    | window expires and users are asked to re-enter their password via the
    | confirmation screen. By default, the timeout lasts for three hours.
    |
    */

    'password_timeout' => env('AUTH_PASSWORD_TIMEOUT', 10800),

];
<<<FILE_END: config/auth.php>>>

/**
 * FILE: config/cache.php
 * TYPE: PHP Source
 * DOMAIN: General
 * CORE: NO
 */

<<<FILE_START: config/cache.php>>>
<?php

use Illuminate\Support\Str;

return [

    /*
    |--------------------------------------------------------------------------
    | Default Cache Store
    |--------------------------------------------------------------------------
    |
    | This option controls the default cache store that will be used by the
    | framework. This connection is utilized if another isn't explicitly
    | specified when running a cache operation inside the application.
    |
    */

    'default' => env('CACHE_STORE', 'database'),

    /*
    |--------------------------------------------------------------------------
    | Cache Stores
    |--------------------------------------------------------------------------
    |
    | Here you may define all of the cache "stores" for your application as
    | well as their drivers. You may even define multiple stores for the
    | same cache driver to group types of items stored in your caches.
    |
    | Supported drivers: "array", "database", "file", "memcached",
    |                    "redis", "dynamodb", "octane",
    |                    "failover", "null"
    |
    */

    'stores' => [

        'array' => [
            'driver' => 'array',
            'serialize' => false,
        ],

        'database' => [
            'driver' => 'database',
            'connection' => env('DB_CACHE_CONNECTION'),
            'table' => env('DB_CACHE_TABLE', 'cache'),
            'lock_connection' => env('DB_CACHE_LOCK_CONNECTION'),
            'lock_table' => env('DB_CACHE_LOCK_TABLE'),
        ],

        'file' => [
            'driver' => 'file',
            'path' => storage_path('framework/cache/data'),
            'lock_path' => storage_path('framework/cache/data'),
        ],

        'memcached' => [
            'driver' => 'memcached',
            'persistent_id' => env('MEMCACHED_PERSISTENT_ID'),
            'sasl' => [
                env('MEMCACHED_USERNAME'),
                env('MEMCACHED_PASSWORD'),
            ],
            'options' => [
                // Memcached::OPT_CONNECT_TIMEOUT => 2000,
            ],
            'servers' => [
                [
                    'host' => env('MEMCACHED_HOST', '127.0.0.1'),
                    'port' => env('MEMCACHED_PORT', 11211),
                    'weight' => 100,
                ],
            ],
        ],

        'redis' => [
            'driver' => 'redis',
            'connection' => env('REDIS_CACHE_CONNECTION', 'cache'),
            'lock_connection' => env('REDIS_CACHE_LOCK_CONNECTION', 'default'),
        ],

        'dynamodb' => [
            'driver' => 'dynamodb',
            'key' => env('AWS_ACCESS_KEY_ID'),
            'secret' => env('AWS_SECRET_ACCESS_KEY'),
            'region' => env('AWS_DEFAULT_REGION', 'us-east-1'),
            'table' => env('DYNAMODB_CACHE_TABLE', 'cache'),
            'endpoint' => env('DYNAMODB_ENDPOINT'),
        ],

        'octane' => [
            'driver' => 'octane',
        ],

        'failover' => [
            'driver' => 'failover',
            'stores' => [
                'database',
                'array',
            ],
        ],

    ],

    /*
    |--------------------------------------------------------------------------
    | Cache Key Prefix
    |--------------------------------------------------------------------------
    |
    | When utilizing the APC, database, memcached, Redis, and DynamoDB cache
    | stores, there might be other applications using the same cache. For
    | that reason, you may prefix every cache key to avoid collisions.
    |
    */

    'prefix' => env('CACHE_PREFIX', Str::slug((string) env('APP_NAME', 'laravel')).'-cache-'),

];
<<<FILE_END: config/cache.php>>>

/**
 * FILE: config/database.php
 * TYPE: PHP Source
 * DOMAIN: General
 * CORE: NO
 */

<<<FILE_START: config/database.php>>>
<?php

use Illuminate\Support\Str;

return [

    /*
    |--------------------------------------------------------------------------
    | Default Database Connection Name
    |--------------------------------------------------------------------------
    |
    | Here you may specify which of the database connections below you wish
    | to use as your default connection for database operations. This is
    | the connection which will be utilized unless another connection
    | is explicitly specified when you execute a query / statement.
    |
    */

    'default' => env('DB_CONNECTION', 'sqlite'),

    /*
    |--------------------------------------------------------------------------
    | Database Connections
    |--------------------------------------------------------------------------
    |
    | Below are all of the database connections defined for your application.
    | An example configuration is provided for each database system which
    | is supported by Laravel. You're free to add / remove connections.
    |
    */

    'connections' => [

        'sqlite' => [
            'driver' => 'sqlite',
            'url' => env('DB_URL'),
            'database' => env('DB_DATABASE', database_path('database.sqlite')),
            'prefix' => '',
            'foreign_key_constraints' => env('DB_FOREIGN_KEYS', true),
            'busy_timeout' => null,
            'journal_mode' => null,
            'synchronous' => null,
            'transaction_mode' => 'DEFERRED',
        ],

        'mysql' => [
            'driver' => 'mysql',
            'url' => env('DB_URL'),
            'host' => env('DB_HOST', '127.0.0.1'),
            'port' => env('DB_PORT', '3306'),
            'database' => env('DB_DATABASE', 'laravel'),
            'username' => env('DB_USERNAME', 'root'),
            'password' => env('DB_PASSWORD', ''),
            'unix_socket' => env('DB_SOCKET', ''),
            'charset' => env('DB_CHARSET', 'utf8mb4'),
            'collation' => env('DB_COLLATION', 'utf8mb4_unicode_ci'),
            'prefix' => '',
            'prefix_indexes' => true,
            'strict' => true,
            'engine' => null,
            'options' => extension_loaded('pdo_mysql') ? array_filter([
                (PHP_VERSION_ID >= 80500 ? \Pdo\Mysql::ATTR_SSL_CA : \PDO::MYSQL_ATTR_SSL_CA) => env('MYSQL_ATTR_SSL_CA'),
            ]) : [],
        ],

        'mariadb' => [
            'driver' => 'mariadb',
            'url' => env('DB_URL'),
            'host' => env('DB_HOST', '127.0.0.1'),
            'port' => env('DB_PORT', '3306'),
            'database' => env('DB_DATABASE', 'laravel'),
            'username' => env('DB_USERNAME', 'root'),
            'password' => env('DB_PASSWORD', ''),
            'unix_socket' => env('DB_SOCKET', ''),
            'charset' => env('DB_CHARSET', 'utf8mb4'),
            'collation' => env('DB_COLLATION', 'utf8mb4_unicode_ci'),
            'prefix' => '',
            'prefix_indexes' => true,
            'strict' => true,
            'engine' => null,
            'options' => extension_loaded('pdo_mysql') ? array_filter([
                (PHP_VERSION_ID >= 80500 ? \Pdo\Mysql::ATTR_SSL_CA : \PDO::MYSQL_ATTR_SSL_CA) => env('MYSQL_ATTR_SSL_CA'),
            ]) : [],
        ],

        'pgsql' => [
            'driver' => 'pgsql',
            'url' => env('DB_URL'),
            'host' => env('DB_HOST', '127.0.0.1'),
            'port' => env('DB_PORT', '5432'),
            'database' => env('DB_DATABASE', 'laravel'),
            'username' => env('DB_USERNAME', 'root'),
            'password' => env('DB_PASSWORD', ''),
            'charset' => env('DB_CHARSET', 'utf8'),
            'prefix' => '',
            'prefix_indexes' => true,
            'search_path' => 'public',
            'sslmode' => env('DB_SSLMODE', 'prefer'),
        ],

        'sqlsrv' => [
            'driver' => 'sqlsrv',
            'url' => env('DB_URL'),
            'host' => env('DB_HOST', 'localhost'),
            'port' => env('DB_PORT', '1433'),
            'database' => env('DB_DATABASE', 'laravel'),
            'username' => env('DB_USERNAME', 'root'),
            'password' => env('DB_PASSWORD', ''),
            'charset' => env('DB_CHARSET', 'utf8'),
            'prefix' => '',
            'prefix_indexes' => true,
            // 'encrypt' => env('DB_ENCRYPT', 'yes'),
            // 'trust_server_certificate' => env('DB_TRUST_SERVER_CERTIFICATE', 'false'),
        ],

    ],

    /*
    |--------------------------------------------------------------------------
    | Migration Repository Table
    |--------------------------------------------------------------------------
    |
    | This table keeps track of all the migrations that have already run for
    | your application. Using this information, we can determine which of
    | the migrations on disk haven't actually been run on the database.
    |
    */

    'migrations' => [
        'table' => 'migrations',
        'update_date_on_publish' => true,
    ],

    /*
    |--------------------------------------------------------------------------
    | Redis Databases
    |--------------------------------------------------------------------------
    |
    | Redis is an open source, fast, and advanced key-value store that also
    | provides a richer body of commands than a typical key-value system
    | such as Memcached. You may define your connection settings here.
    |
    */

    'redis' => [

        'client' => env('REDIS_CLIENT', 'phpredis'),

        'options' => [
            'cluster' => env('REDIS_CLUSTER', 'redis'),
            'prefix' => env('REDIS_PREFIX', Str::slug((string) env('APP_NAME', 'laravel')).'-database-'),
            'persistent' => env('REDIS_PERSISTENT', false),
        ],

        'default' => [
            'url' => env('REDIS_URL'),
            'host' => env('REDIS_HOST', '127.0.0.1'),
            'username' => env('REDIS_USERNAME'),
            'password' => env('REDIS_PASSWORD'),
            'port' => env('REDIS_PORT', '6379'),
            'database' => env('REDIS_DB', '0'),
            'max_retries' => env('REDIS_MAX_RETRIES', 3),
            'backoff_algorithm' => env('REDIS_BACKOFF_ALGORITHM', 'decorrelated_jitter'),
            'backoff_base' => env('REDIS_BACKOFF_BASE', 100),
            'backoff_cap' => env('REDIS_BACKOFF_CAP', 1000),
        ],

        'cache' => [
            'url' => env('REDIS_URL'),
            'host' => env('REDIS_HOST', '127.0.0.1'),
            'username' => env('REDIS_USERNAME'),
            'password' => env('REDIS_PASSWORD'),
            'port' => env('REDIS_PORT', '6379'),
            'database' => env('REDIS_CACHE_DB', '1'),
            'max_retries' => env('REDIS_MAX_RETRIES', 3),
            'backoff_algorithm' => env('REDIS_BACKOFF_ALGORITHM', 'decorrelated_jitter'),
            'backoff_base' => env('REDIS_BACKOFF_BASE', 100),
            'backoff_cap' => env('REDIS_BACKOFF_CAP', 1000),
        ],

    ],

];
<<<FILE_END: config/database.php>>>

/**
 * FILE: config/filesystems.php
 * TYPE: PHP Source
 * DOMAIN: General
 * CORE: NO
 */

<<<FILE_START: config/filesystems.php>>>
<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Default Filesystem Disk
    |--------------------------------------------------------------------------
    |
    | Here you may specify the default filesystem disk that should be used
    | by the framework. The "local" disk, as well as a variety of cloud
    | based disks are available to your application for file storage.
    |
    */

    'default' => env('FILESYSTEM_DISK', 'local'),

    /*
    |--------------------------------------------------------------------------
    | Filesystem Disks
    |--------------------------------------------------------------------------
    |
    | Below you may configure as many filesystem disks as necessary, and you
    | may even configure multiple disks for the same driver. Examples for
    | most supported storage drivers are configured here for reference.
    |
    | Supported drivers: "local", "ftp", "sftp", "s3"
    |
    */

    'disks' => [

        'local' => [
            'driver' => 'local',
            'root' => storage_path('app/private'),
            'serve' => true,
            'throw' => false,
            'report' => false,
        ],

        'public' => [
            'driver' => 'local',
            'root' => storage_path('app/public'),
            'url' => rtrim(env('APP_URL', 'http://localhost'), '/').'/storage',
            'visibility' => 'public',
            'throw' => false,
            'report' => false,
        ],

        's3' => [
            'driver' => 's3',
            'key' => env('AWS_ACCESS_KEY_ID'),
            'secret' => env('AWS_SECRET_ACCESS_KEY'),
            'region' => env('AWS_DEFAULT_REGION'),
            'bucket' => env('AWS_BUCKET'),
            'url' => env('AWS_URL'),
            'endpoint' => env('AWS_ENDPOINT'),
            'use_path_style_endpoint' => env('AWS_USE_PATH_STYLE_ENDPOINT', false),
            'throw' => false,
            'report' => false,
        ],

    ],

    /*
    |--------------------------------------------------------------------------
    | Symbolic Links
    |--------------------------------------------------------------------------
    |
    | Here you may configure the symbolic links that will be created when the
    | `storage:link` Artisan command is executed. The array keys should be
    | the locations of the links and the values should be their targets.
    |
    */

    'links' => [
        public_path('storage') => storage_path('app/public'),
    ],

];
<<<FILE_END: config/filesystems.php>>>

/**
 * FILE: config/logging.php
 * TYPE: PHP Source
 * DOMAIN: General
 * CORE: NO
 */

<<<FILE_START: config/logging.php>>>
<?php

use Monolog\Handler\NullHandler;
use Monolog\Handler\StreamHandler;
use Monolog\Handler\SyslogUdpHandler;
use Monolog\Processor\PsrLogMessageProcessor;

return [

    /*
    |--------------------------------------------------------------------------
    | Default Log Channel
    |--------------------------------------------------------------------------
    |
    | This option defines the default log channel that is utilized to write
    | messages to your logs. The value provided here should match one of
    | the channels present in the list of "channels" configured below.
    |
    */

    'default' => env('LOG_CHANNEL', 'stack'),

    /*
    |--------------------------------------------------------------------------
    | Deprecations Log Channel
    |--------------------------------------------------------------------------
    |
    | This option controls the log channel that should be used to log warnings
    | regarding deprecated PHP and library features. This allows you to get
    | your application ready for upcoming major versions of dependencies.
    |
    */

    'deprecations' => [
        'channel' => env('LOG_DEPRECATIONS_CHANNEL', 'null'),
        'trace' => env('LOG_DEPRECATIONS_TRACE', false),
    ],

    /*
    |--------------------------------------------------------------------------
    | Log Channels
    |--------------------------------------------------------------------------
    |
    | Here you may configure the log channels for your application. Laravel
    | utilizes the Monolog PHP logging library, which includes a variety
    | of powerful log handlers and formatters that you're free to use.
    |
    | Available drivers: "single", "daily", "slack", "syslog",
    |                    "errorlog", "monolog", "custom", "stack"
    |
    */

    'channels' => [

        'stack' => [
            'driver' => 'stack',
            'channels' => explode(',', (string) env('LOG_STACK', 'single')),
            'ignore_exceptions' => false,
        ],

        'single' => [
            'driver' => 'single',
            'path' => storage_path('logs/laravel.log'),
            'level' => env('LOG_LEVEL', 'debug'),
            'replace_placeholders' => true,
        ],

        'daily' => [
            'driver' => 'daily',
            'path' => storage_path('logs/laravel.log'),
            'level' => env('LOG_LEVEL', 'debug'),
            'days' => env('LOG_DAILY_DAYS', 14),
            'replace_placeholders' => true,
        ],

        'slack' => [
            'driver' => 'slack',
            'url' => env('LOG_SLACK_WEBHOOK_URL'),
            'username' => env('LOG_SLACK_USERNAME', 'Laravel Log'),
            'emoji' => env('LOG_SLACK_EMOJI', ':boom:'),
            'level' => env('LOG_LEVEL', 'critical'),
            'replace_placeholders' => true,
        ],

        'papertrail' => [
            'driver' => 'monolog',
            'level' => env('LOG_LEVEL', 'debug'),
            'handler' => env('LOG_PAPERTRAIL_HANDLER', SyslogUdpHandler::class),
            'handler_with' => [
                'host' => env('PAPERTRAIL_URL'),
                'port' => env('PAPERTRAIL_PORT'),
                'connectionString' => 'tls://'.env('PAPERTRAIL_URL').':'.env('PAPERTRAIL_PORT'),
            ],
            'processors' => [PsrLogMessageProcessor::class],
        ],

        'stderr' => [
            'driver' => 'monolog',
            'level' => env('LOG_LEVEL', 'debug'),
            'handler' => StreamHandler::class,
            'handler_with' => [
                'stream' => 'php://stderr',
            ],
            'formatter' => env('LOG_STDERR_FORMATTER'),
            'processors' => [PsrLogMessageProcessor::class],
        ],

        'syslog' => [
            'driver' => 'syslog',
            'level' => env('LOG_LEVEL', 'debug'),
            'facility' => env('LOG_SYSLOG_FACILITY', LOG_USER),
            'replace_placeholders' => true,
        ],

        'errorlog' => [
            'driver' => 'errorlog',
            'level' => env('LOG_LEVEL', 'debug'),
            'replace_placeholders' => true,
        ],

        'null' => [
            'driver' => 'monolog',
            'handler' => NullHandler::class,
        ],

        'emergency' => [
            'path' => storage_path('logs/laravel.log'),
        ],

    ],

];
<<<FILE_END: config/logging.php>>>

/**
 * FILE: config/mail.php
 * TYPE: PHP Source
 * DOMAIN: General
 * CORE: NO
 */

<<<FILE_START: config/mail.php>>>
<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Default Mailer
    |--------------------------------------------------------------------------
    |
    | This option controls the default mailer that is used to send all email
    | messages unless another mailer is explicitly specified when sending
    | the message. All additional mailers can be configured within the
    | "mailers" array. Examples of each type of mailer are provided.
    |
    */

    'default' => env('MAIL_MAILER', 'log'),

    /*
    |--------------------------------------------------------------------------
    | Mailer Configurations
    |--------------------------------------------------------------------------
    |
    | Here you may configure all of the mailers used by your application plus
    | their respective settings. Several examples have been configured for
    | you and you are free to add your own as your application requires.
    |
    | Laravel supports a variety of mail "transport" drivers that can be used
    | when delivering an email. You may specify which one you're using for
    | your mailers below. You may also add additional mailers if needed.
    |
    | Supported: "smtp", "sendmail", "mailgun", "ses", "ses-v2",
    |            "postmark", "resend", "log", "array",
    |            "failover", "roundrobin"
    |
    */

    'mailers' => [

        'smtp' => [
            'transport' => 'smtp',
            'scheme' => env('MAIL_SCHEME'),
            'url' => env('MAIL_URL'),
            'host' => env('MAIL_HOST', '127.0.0.1'),
            'port' => env('MAIL_PORT', 2525),
            'username' => env('MAIL_USERNAME'),
            'password' => env('MAIL_PASSWORD'),
            'timeout' => null,
            'local_domain' => env('MAIL_EHLO_DOMAIN', parse_url((string) env('APP_URL', 'http://localhost'), PHP_URL_HOST)),
        ],

        'ses' => [
            'transport' => 'ses',
        ],

        'postmark' => [
            'transport' => 'postmark',
            // 'message_stream_id' => env('POSTMARK_MESSAGE_STREAM_ID'),
            // 'client' => [
            //     'timeout' => 5,
            // ],
        ],

        'resend' => [
            'transport' => 'resend',
        ],

        'sendmail' => [
            'transport' => 'sendmail',
            'path' => env('MAIL_SENDMAIL_PATH', '/usr/sbin/sendmail -bs -i'),
        ],

        'log' => [
            'transport' => 'log',
            'channel' => env('MAIL_LOG_CHANNEL'),
        ],

        'array' => [
            'transport' => 'array',
        ],

        'failover' => [
            'transport' => 'failover',
            'mailers' => [
                'smtp',
                'log',
            ],
            'retry_after' => 60,
        ],

        'roundrobin' => [
            'transport' => 'roundrobin',
            'mailers' => [
                'ses',
                'postmark',
            ],
            'retry_after' => 60,
        ],

    ],

    /*
    |--------------------------------------------------------------------------
    | Global "From" Address
    |--------------------------------------------------------------------------
    |
    | You may wish for all emails sent by your application to be sent from
    | the same address. Here you may specify a name and address that is
    | used globally for all emails that are sent by your application.
    |
    */

    'from' => [
        'address' => env('MAIL_FROM_ADDRESS', 'hello@example.com'),
        'name' => env('MAIL_FROM_NAME', 'Example'),
    ],

];
<<<FILE_END: config/mail.php>>>

/**
 * FILE: config/queue.php
 * TYPE: PHP Source
 * DOMAIN: General
 * CORE: NO
 */

<<<FILE_START: config/queue.php>>>
<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Default Queue Connection Name
    |--------------------------------------------------------------------------
    |
    | Laravel's queue supports a variety of backends via a single, unified
    | API, giving you convenient access to each backend using identical
    | syntax for each. The default queue connection is defined below.
    |
    */

    'default' => env('QUEUE_CONNECTION', 'database'),

    /*
    |--------------------------------------------------------------------------
    | Queue Connections
    |--------------------------------------------------------------------------
    |
    | Here you may configure the connection options for every queue backend
    | used by your application. An example configuration is provided for
    | each backend supported by Laravel. You're also free to add more.
    |
    | Drivers: "sync", "database", "beanstalkd", "sqs", "redis",
    |          "deferred", "background", "failover", "null"
    |
    */

    'connections' => [

        'sync' => [
            'driver' => 'sync',
        ],

        'database' => [
            'driver' => 'database',
            'connection' => env('DB_QUEUE_CONNECTION'),
            'table' => env('DB_QUEUE_TABLE', 'jobs'),
            'queue' => env('DB_QUEUE', 'default'),
            'retry_after' => (int) env('DB_QUEUE_RETRY_AFTER', 90),
            'after_commit' => false,
        ],

        'beanstalkd' => [
            'driver' => 'beanstalkd',
            'host' => env('BEANSTALKD_QUEUE_HOST', 'localhost'),
            'queue' => env('BEANSTALKD_QUEUE', 'default'),
            'retry_after' => (int) env('BEANSTALKD_QUEUE_RETRY_AFTER', 90),
            'block_for' => 0,
            'after_commit' => false,
        ],

        'sqs' => [
            'driver' => 'sqs',
            'key' => env('AWS_ACCESS_KEY_ID'),
            'secret' => env('AWS_SECRET_ACCESS_KEY'),
            'prefix' => env('SQS_PREFIX', 'https://sqs.us-east-1.amazonaws.com/your-account-id'),
            'queue' => env('SQS_QUEUE', 'default'),
            'suffix' => env('SQS_SUFFIX'),
            'region' => env('AWS_DEFAULT_REGION', 'us-east-1'),
            'after_commit' => false,
        ],

        'redis' => [
            'driver' => 'redis',
            'connection' => env('REDIS_QUEUE_CONNECTION', 'default'),
            'queue' => env('REDIS_QUEUE', 'default'),
            'retry_after' => (int) env('REDIS_QUEUE_RETRY_AFTER', 90),
            'block_for' => null,
            'after_commit' => false,
        ],

        'deferred' => [
            'driver' => 'deferred',
        ],

        'background' => [
            'driver' => 'background',
        ],

        'failover' => [
            'driver' => 'failover',
            'connections' => [
                'database',
                'deferred',
            ],
        ],

    ],

    /*
    |--------------------------------------------------------------------------
    | Job Batching
    |--------------------------------------------------------------------------
    |
    | The following options configure the database and table that store job
    | batching information. These options can be updated to any database
    | connection and table which has been defined by your application.
    |
    */

    'batching' => [
        'database' => env('DB_CONNECTION', 'sqlite'),
        'table' => 'job_batches',
    ],

    /*
    |--------------------------------------------------------------------------
    | Failed Queue Jobs
    |--------------------------------------------------------------------------
    |
    | These options configure the behavior of failed queue job logging so you
    | can control how and where failed jobs are stored. Laravel ships with
    | support for storing failed jobs in a simple file or in a database.
    |
    | Supported drivers: "database-uuids", "dynamodb", "file", "null"
    |
    */

    'failed' => [
        'driver' => env('QUEUE_FAILED_DRIVER', 'database-uuids'),
        'database' => env('DB_CONNECTION', 'sqlite'),
        'table' => 'failed_jobs',
    ],

];
<<<FILE_END: config/queue.php>>>

/**
 * FILE: config/services.php
 * TYPE: PHP Source
 * DOMAIN: General
 * CORE: NO
 */

<<<FILE_START: config/services.php>>>
<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Mailgun, Postmark, AWS and more. This file provides the de facto
    | location for this type of information, allowing packages to have
    | a conventional file to locate the various service credentials.
    |
    */

    'postmark' => [
        'key' => env('POSTMARK_API_KEY'),
    ],

    'resend' => [
        'key' => env('RESEND_API_KEY'),
    ],

    'ses' => [
        'key' => env('AWS_ACCESS_KEY_ID'),
        'secret' => env('AWS_SECRET_ACCESS_KEY'),
        'region' => env('AWS_DEFAULT_REGION', 'us-east-1'),
    ],

    'slack' => [
        'notifications' => [
            'bot_user_oauth_token' => env('SLACK_BOT_USER_OAUTH_TOKEN'),
            'channel' => env('SLACK_BOT_USER_DEFAULT_CHANNEL'),
        ],
    ],

];
<<<FILE_END: config/services.php>>>

/**
 * FILE: config/session.php
 * TYPE: PHP Source
 * DOMAIN: General
 * CORE: NO
 */

<<<FILE_START: config/session.php>>>
<?php

use Illuminate\Support\Str;

return [

    /*
    |--------------------------------------------------------------------------
    | Default Session Driver
    |--------------------------------------------------------------------------
    |
    | This option determines the default session driver that is utilized for
    | incoming requests. Laravel supports a variety of storage options to
    | persist session data. Database storage is a great default choice.
    |
    | Supported: "file", "cookie", "database", "memcached",
    |            "redis", "dynamodb", "array"
    |
    */

    'driver' => env('SESSION_DRIVER', 'database'),

    /*
    |--------------------------------------------------------------------------
    | Session Lifetime
    |--------------------------------------------------------------------------
    |
    | Here you may specify the number of minutes that you wish the session
    | to be allowed to remain idle before it expires. If you want them
    | to expire immediately when the browser is closed then you may
    | indicate that via the expire_on_close configuration option.
    |
    */

    'lifetime' => (int) env('SESSION_LIFETIME', 120), //120 minutos

    'expire_on_close' => env('SESSION_EXPIRE_ON_CLOSE', false), //expire_on_close=true: apaga ao fechar navegador

    /*
    |--------------------------------------------------------------------------
    | Session Encryption
    |--------------------------------------------------------------------------
    |
    | This option allows you to easily specify that all of your session data
    | should be encrypted before it's stored. All encryption is performed
    | automatically by Laravel and you may use the session like normal.
    |
    */

    'encrypt' => env('SESSION_ENCRYPT', false),

    /*
    |--------------------------------------------------------------------------
    | Session File Location
    |--------------------------------------------------------------------------
    |
    | When utilizing the "file" session driver, the session files are placed
    | on disk. The default storage location is defined here; however, you
    | are free to provide another location where they should be stored.
    |
    */

    'files' => storage_path('framework/sessions'),

    /*
    |--------------------------------------------------------------------------
    | Session Database Connection
    |--------------------------------------------------------------------------
    |
    | When using the "database" or "redis" session drivers, you may specify a
    | connection that should be used to manage these sessions. This should
    | correspond to a connection in your database configuration options.
    |
    */

    'connection' => env('SESSION_CONNECTION'),

    /*
    |--------------------------------------------------------------------------
    | Session Database Table
    |--------------------------------------------------------------------------
    |
    | When using the "database" session driver, you may specify the table to
    | be used to store sessions. Of course, a sensible default is defined
    | for you; however, you're welcome to change this to another table.
    |
    */

    'table' => env('SESSION_TABLE', 'sessions'),

    /*
    |--------------------------------------------------------------------------
    | Session Cache Store
    |--------------------------------------------------------------------------
    |
    | When using one of the framework's cache driven session backends, you may
    | define the cache store which should be used to store the session data
    | between requests. This must match one of your defined cache stores.
    |
    | Affects: "dynamodb", "memcached", "redis"
    |
    */

    'store' => env('SESSION_STORE'),

    /*
    |--------------------------------------------------------------------------
    | Session Sweeping Lottery
    |--------------------------------------------------------------------------
    |
    | Some session drivers must manually sweep their storage location to get
    | rid of old sessions from storage. Here are the chances that it will
    | happen on a given request. By default, the odds are 2 out of 100.
    |
    */

    'lottery' => [2, 100],

    /*
    |--------------------------------------------------------------------------
    | Session Cookie Name
    |--------------------------------------------------------------------------
    |
    | Here you may change the name of the session cookie that is created by
    | the framework. Typically, you should not need to change this value
    | since doing so does not grant a meaningful security improvement.
    |
    */

    'cookie' => env(
        'SESSION_COOKIE',
        Str::slug((string) env('APP_NAME', 'laravel')) . '-session'
    ),

    /*
    |--------------------------------------------------------------------------
    | Session Cookie Path
    |--------------------------------------------------------------------------
    |
    | The session cookie path determines the path for which the cookie will
    | be regarded as available. Typically, this will be the root path of
    | your application, but you're free to change this when necessary.
    |
    */

    'path' => env('SESSION_PATH', '/'),

    /*
    |--------------------------------------------------------------------------
    | Session Cookie Domain
    |--------------------------------------------------------------------------
    |
    | This value determines the domain and subdomains the session cookie is
    | available to. By default, the cookie will be available to the root
    | domain without subdomains. Typically, this shouldn't be changed.
    |
    */

    'domain' => env('SESSION_DOMAIN'),

    /*
    |--------------------------------------------------------------------------
    | HTTPS Only Cookies
    |--------------------------------------------------------------------------
    |
    | By setting this option to true, session cookies will only be sent back
    | to the server if the browser has a HTTPS connection. This will keep
    | the cookie from being sent to you when it can't be done securely.
    |
    */

    'secure' => env('SESSION_SECURE_COOKIE'),

    /*
    |--------------------------------------------------------------------------
    | HTTP Access Only
    |--------------------------------------------------------------------------
    |
    | Setting this value to true will prevent JavaScript from accessing the
    | value of the cookie and the cookie will only be accessible through
    | the HTTP protocol. It's unlikely you should disable this option.
    |
    */

    'http_only' => env('SESSION_HTTP_ONLY', true),

    /*
    |--------------------------------------------------------------------------
    | Same-Site Cookies
    |--------------------------------------------------------------------------
    |
    | This option determines how your cookies behave when cross-site requests
    | take place, and can be used to mitigate CSRF attacks. By default, we
    | will set this value to "lax" to permit secure cross-site requests.
    |
    | See: https://developer.mozilla.org/en-US/docs/Web/HTTP/Headers/Set-Cookie#samesitesamesite-value
    |
    | Supported: "lax", "strict", "none", null
    |
    */

    'same_site' => env('SESSION_SAME_SITE', 'lax'),

    /*
    |--------------------------------------------------------------------------
    | Partitioned Cookies
    |--------------------------------------------------------------------------
    |
    | Setting this value to true will tie the cookie to the top-level site for
    | a cross-site context. Partitioned cookies are accepted by the browser
    | when flagged "secure" and the Same-Site attribute is set to "none".
    |
    */

    'partitioned' => env('SESSION_PARTITIONED_COOKIE', false),

];
<<<FILE_END: config/session.php>>>


##################################################
### SECTION: DATABASE ###
##################################################

/**
 * FILE: database/.gitignore
 * TYPE: Text File
 * DOMAIN: General
 * CORE: NO
 */

<<<FILE_START: database/.gitignore>>>
*.sqlite*
<<<FILE_END: database/.gitignore>>>

/**
 * FILE: database/factories/UserFactory.php
 * TYPE: PHP Source
 * DOMAIN: General
 * CORE: NO
 */

<<<FILE_START: database/factories/UserFactory.php>>>
<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * The current password being used by the factory.
     */
    protected static ?string $password;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->name(),
            'email' => fake()->unique()->safeEmail(),
            'email_verified_at' => now(),
            'password' => static::$password ??= Hash::make('password'),
            'remember_token' => Str::random(10),
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     */
    public function unverified(): static
    {
        return $this->state(fn (array $attributes) => [
            'email_verified_at' => null,
        ]);
    }
}
<<<FILE_END: database/factories/UserFactory.php>>>

/**
 * FILE: database/migrations/2026_02_04_105550_create_sessions_table.php
 * TYPE: PHP Source
 * DOMAIN: Migration
 * CORE: NO
 */

<<<FILE_START: database/migrations/2026_02_04_105550_create_sessions_table.php>>>
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('sessions', function (Blueprint $table) {
            $table->string('id')->primary();
            $table->foreignId('user_id')->nullable()->index();
            $table->string('ip_address', 45)->nullable();
            $table->text('user_agent')->nullable();
            $table->longText('payload');
            $table->integer('last_activity')->index();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sessions');
    }
};
<<<FILE_END: database/migrations/2026_02_04_105550_create_sessions_table.php>>>

/**
 * FILE: database/migrations/2026_02_06_082328_create_password_reset_tokens_table.php
 * TYPE: PHP Source
 * DOMAIN: Migration
 * CORE: NO
 */

<<<FILE_START: database/migrations/2026_02_06_082328_create_password_reset_tokens_table.php>>>
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('gov_password_reset_tokens', function (Blueprint $table) {
            $table->string('email')->primary();
            $table->string('token');
            $table->timestamp('created_at')->nullable();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('gov_password_reset_tokens');
    }
};
<<<FILE_END: database/migrations/2026_02_06_082328_create_password_reset_tokens_table.php>>>

/**
 * FILE: database/migrations/governanca/2026_01_30_184512_create_gov_core_tables.php
 * TYPE: PHP Source
 * DOMAIN: Migration
 * CORE: NO
 */

<<<FILE_START: database/migrations/governanca/2026_01_30_184512_create_gov_core_tables.php>>>
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        /**
         * GOV_USERS — Identidade Global
         */
        Schema::create('gov_users', function (Blueprint $table) {
            $table->id();

            $table->string('name');
            $table->string('email')->unique();
            $table->string('password');

            $table->timestamp('email_verified_at')->nullable();
            $table->boolean('is_active')->default(true);

            $table->rememberToken();
            $table->timestamps();
        });

        /**
         * GOV_APPS — Registro Multi-App
         */
        Schema::create('gov_apps', function (Blueprint $table) {
            $table->id();

            $table->string('code')->unique();     // system, vendas, site...
            $table->string('label');              // Nome humano PT-BR
            $table->boolean('is_active')->default(true);

            $table->timestamps();
        });

        /**
         * GOV_APP_USER — Barreira Primária de Acesso
         */
        Schema::create('gov_app_user', function (Blueprint $table) {
            $table->id();

            $table->foreignId('user_id')
                ->constrained('gov_users')
                ->cascadeOnDelete();

            $table->foreignId('app_id')
                ->constrained('gov_apps')
                ->cascadeOnDelete();

            $table->timestamps();

            $table->unique(['user_id', 'app_id'], 'uk_gov_app_user_user_app');
        });

        /**
         * GOV_ROLES — Papéis por App
         */
        Schema::create('gov_roles', function (Blueprint $table) {
            $table->id();

            $table->foreignId('app_id')
                ->constrained('gov_apps')
                ->cascadeOnDelete();

            $table->string('code');   // chave técnica
            $table->string('label');  // nome humano PT-BR

            $table->timestamps();

            $table->unique(['app_id', 'code'], 'uk_gov_roles_app_code');
        });

        /**
         * GOV_PERMISSIONS — Permissões por App + Recurso
         */
        Schema::create('gov_permissions', function (Blueprint $table) {
            $table->id();

            $table->foreignId('app_id')
                ->constrained('gov_apps')
                ->cascadeOnDelete();

            $table->string('resource');                  // users, roles, clients
            $table->string('code');                      // users.create
            $table->string('label');                     // PT-BR (Criar usuários)

            $table->string('resource_group_code')->nullable();
            $table->string('resource_group_label')->nullable(); // PT-BR

            $table->timestamps();

            $table->unique(['app_id', 'code'], 'uk_gov_permissions_app_code');
        });

        /**
         * GOV_ROLE_PERMISSION — Pivot Role ↔ Permission
         */
        Schema::create('gov_role_permission', function (Blueprint $table) {
            $table->id();

            $table->foreignId('role_id')
                ->constrained('gov_roles')
                ->cascadeOnDelete();

            $table->foreignId('permission_id')
                ->constrained('gov_permissions')
                ->cascadeOnDelete();

            $table->timestamps();

            $table->unique(['role_id', 'permission_id'], 'uk_gov_role_permission_pair');
        });

        /**
         * GOV_GRANULARITIES — Controle Fino (Deny > Allow)
         */
        Schema::create('gov_granularities', function (Blueprint $table) {
            $table->id();

            $table->foreignId('app_id')
                ->constrained('gov_apps')
                ->cascadeOnDelete();

            $table->string('code');   // ex: users.field.cpf.hide
            $table->string('label');  // PT-BR (Ocultar CPF)
            $table->boolean('is_denied')->default(false);

            $table->timestamps();

            $table->unique(['app_id', 'code'], 'uk_gov_granularities_app_code');
        });

        /**
         * GOV_ACTIVITY_LOGS — Auditoria Soberana
         */
        Schema::create('gov_activity_logs', function (Blueprint $table) {
            $table->id();

            $table->foreignId('actor_id')
                ->nullable()
                ->constrained('gov_users')
                ->nullOnDelete();

            $table->string('app');          // system, vendas, site
            $table->string('action');       // gov.user.created
            $table->string('resource');     // users, roles
            $table->unsignedBigInteger('resource_id')->nullable();

            $table->json('old_values')->nullable();
            $table->json('new_values')->nullable();
            $table->json('context')->nullable();

            $table->string('ip_address')->nullable();
            $table->text('user_agent')->nullable();
            $table->string('url')->nullable();
            $table->string('method', 10)->nullable();

            $table->timestamp('created_at')->useCurrent();

            $table->index('action', 'idx_gov_activity_logs_action');
            $table->index('resource', 'idx_gov_activity_logs_resource');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('gov_activity_logs');
        Schema::dropIfExists('gov_granularities');
        Schema::dropIfExists('gov_role_permission');
        Schema::dropIfExists('gov_permissions');
        Schema::dropIfExists('gov_roles');
        Schema::dropIfExists('gov_app_user');
        Schema::dropIfExists('gov_apps');
        Schema::dropIfExists('gov_users');
    }
};
<<<FILE_END: database/migrations/governanca/2026_01_30_184512_create_gov_core_tables.php>>>

/**
 * FILE: database/migrations/governanca/2026_02_09_185449_create_gov_user_preferences_table.php
 * TYPE: PHP Source
 * DOMAIN: Migration
 * CORE: NO
 */

<<<FILE_START: database/migrations/governanca/2026_02_09_185449_create_gov_user_preferences_table.php>>>
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('gov_user_preferences', function (Blueprint $table) {
            $table->id();

            $table->foreignId('user_id')
                ->constrained('gov_users')
                ->cascadeOnDelete();

            $table->foreignId('app_id')
                ->constrained('gov_apps')
                ->cascadeOnDelete();

            $table->string('visual_profile', 32)->default('light');

            $table->timestamps();

            $table->unique(['user_id', 'app_id']);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('gov_user_preferences');
    }
};
<<<FILE_END: database/migrations/governanca/2026_02_09_185449_create_gov_user_preferences_table.php>>>

/**
 * FILE: database/seeders/BaseGovernancaSeeder.php
 * TYPE: PHP Source
 * DOMAIN: Seeder
 * CORE: NO
 */

<<<FILE_START: database/seeders/BaseGovernancaSeeder.php>>>
<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class BaseGovernancaSeeder extends Seeder
{
    public function run(): void
    {
        /*
        |--------------------------------------------------------------------------
        | 1. Usuário mestre (root / start)
        |--------------------------------------------------------------------------
        */
        DB::table('gov_users')->updateOrInsert(
            ['email' => 'vagner.lemos@outlook.com'],
            [
                'name'              => 'Administrador Inicial',
                'password'          => Hash::make('123456'),
                'email_verified_at' => now(),
                'is_active'         => true,
                'created_at'        => now(),
                'updated_at'        => now(),
            ]
        );

        $user = DB::table('gov_users')
            ->where('email', 'vagner.lemos@outlook.com')
            ->first();

        /*
        |--------------------------------------------------------------------------
        | 2. Processar todos os apps declarados
        |--------------------------------------------------------------------------
        */
        foreach (glob(database_path('seeders/definitions/*.php')) as $file) {

            $def = require $file;

            /*
            |--------------------------------------------------------------------------
            | APP
            |--------------------------------------------------------------------------
            */
            DB::table('gov_apps')->updateOrInsert(
                ['code' => $def['app']['code']],
                [
                    'label'      => $def['app']['label'],
                    'is_active'  => $def['app']['is_active'],
                    'created_at' => now(),
                    'updated_at' => now(),
                ]
            );

            $app = DB::table('gov_apps')
                ->where('code', $def['app']['code'])
                ->first();

            /*
            |--------------------------------------------------------------------------
            | Vínculo usuário ↔ app
            |--------------------------------------------------------------------------
            */
            DB::table('gov_app_user')->updateOrInsert(
                [
                    'user_id' => $user->id,
                    'app_id'  => $app->id,
                ],
                [
                    'created_at' => now(),
                    'updated_at' => now(),
                ]
            );

            /*
            |--------------------------------------------------------------------------
            | ROLES
            |--------------------------------------------------------------------------
            */
            $rolesMap = [];

            foreach ($def['roles'] as $code => $label) {
                DB::table('gov_roles')->updateOrInsert(
                    [
                        'app_id' => $app->id,
                        'code'   => $code,
                    ],
                    [
                        'label'      => $label,
                        'created_at' => now(),
                        'updated_at' => now(),
                    ]
                );

                $rolesMap[$code] = DB::table('gov_roles')
                    ->where('app_id', $app->id)
                    ->where('code', $code)
                    ->first();
            }

            /*
            |--------------------------------------------------------------------------
            | PERMISSIONS
            |--------------------------------------------------------------------------
            */
            $permissionsMap = [];

            foreach ($def['permissions'] as [$resource, $code, $label]) {
                DB::table('gov_permissions')->updateOrInsert(
                    [
                        'app_id' => $app->id,
                        'code'   => $code,
                    ],
                    [
                        'resource'             => $resource,
                        'label'                => $label,
                        'resource_group_code'  => $resource,
                        'resource_group_label' => ucfirst($resource),
                        'created_at'           => now(),
                        'updated_at'           => now(),
                    ]
                );

                $permissionsMap[$code] = DB::table('gov_permissions')
                    ->where('app_id', $app->id)
                    ->where('code', $code)
                    ->first();
            }

            /*
            |--------------------------------------------------------------------------
            | ROLE ↔ PERMISSION (grant total)
            |--------------------------------------------------------------------------
            */
            foreach ($def['grant_all_permissions_to'] as $roleCode) {
                if (!isset($rolesMap[$roleCode])) {
                    continue;
                }

                foreach ($permissionsMap as $permission) {
                    DB::table('gov_role_permission')->updateOrInsert(
                        [
                            'role_id'       => $rolesMap[$roleCode]->id,
                            'permission_id' => $permission->id,
                        ],
                        [
                            'created_at' => now(),
                            'updated_at' => now(),
                        ]
                    );
                }
            }

            /*
            |--------------------------------------------------------------------------
            | GRANULARITIES
            |--------------------------------------------------------------------------
            */
            foreach ($def['granularities'] as $granularity) {
                DB::table('gov_granularities')->updateOrInsert(
                    [
                        'app_id' => $app->id,
                        'code'   => $granularity['code'],
                    ],
                    [
                        'label'      => $granularity['label'],
                        'is_denied'  => $granularity['is_denied'],
                        'created_at' => now(),
                        'updated_at' => now(),
                    ]
                );
            }
        }
    }
}
<<<FILE_END: database/seeders/BaseGovernancaSeeder.php>>>

/**
 * FILE: database/seeders/DatabaseSeeder.php
 * TYPE: PHP Source
 * DOMAIN: Seeder
 * CORE: NO
 */

<<<FILE_START: database/seeders/DatabaseSeeder.php>>>
<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $this->call([
            BaseGovernancaSeeder::class,
        ]);
    }
}
<<<FILE_END: database/seeders/DatabaseSeeder.php>>>

/**
 * FILE: database/seeders/definitions/cms.php
 * TYPE: PHP Source
 * DOMAIN: Seeder
 * CORE: NO
 */

<<<FILE_START: database/seeders/definitions/cms.php>>>
<?php

return [


    'app' => [
        'code'      => 'cms',
        'label'     => 'CMS',
        'is_active' => true,
    ],

    'roles' => [
        'admin' => 'Administrador',
    ],

    'permissions' => [],

    'grant_all_permissions_to' => ['admin'],

    'granularities' => [],

];
<<<FILE_END: database/seeders/definitions/cms.php>>>

/**
 * FILE: database/seeders/definitions/governanca.php
 * TYPE: PHP Source
 * DOMAIN: Seeder
 * CORE: NO
 */

<<<FILE_START: database/seeders/definitions/governanca.php>>>
<?php

return [

    'app' => [
        'code'      => 'governanca',
        'label'     => 'Governança',
        'is_active' => true,
    ],

    'roles' => [
        'admin'   => 'Administrador',
        'manager' => 'Gerente',
        'viewer'  => 'Visualizador',
    ],

    'permissions' => [
        ['users', 'users.view',   'Visualizar usuários'],
        ['users', 'users.create', 'Criar usuários'],
        ['users', 'users.update', 'Editar usuários'],

        ['roles', 'roles.view',   'Visualizar papéis'],
        ['roles', 'roles.create', 'Criar papéis'],
        ['roles', 'roles.update', 'Editar papéis'],
        ['roles', 'roles.delete', 'Excluir papéis'],

        ['permissions', 'permissions.view',   'Visualizar permissões'],
        ['permissions', 'permissions.update', 'Editar permissões'],

        ['apps', 'apps.view',   'Visualizar aplicativos'],
        ['apps', 'apps.update', 'Editar aplicativos'],

        ['logs', 'logs.view', 'Visualizar logs'],
    ],

    'grant_all_permissions_to' => ['admin'],

    'granularities' => [
        [
            'code'      => 'users.field.password.hide',
            'label'     => 'Ocultar campo senha do usuário',
            'is_denied' => true,
        ],
    ],

];
<<<FILE_END: database/seeders/definitions/governanca.php>>>

/**
 * FILE: database/seeders/definitions/system.php
 * TYPE: PHP Source
 * DOMAIN: Seeder
 * CORE: NO
 */

<<<FILE_START: database/seeders/definitions/system.php>>>
<?php

return [

    'app' => [
        'code'      => 'system',
        'label'     => 'Sistema',
        'is_active' => true,
    ],

    'roles' => [
        'admin' => 'Administrador',
    ],

    'permissions' => [],

    'grant_all_permissions_to' => ['admin'],

    'granularities' => [],

];
<<<FILE_END: database/seeders/definitions/system.php>>>

/**
 * FILE: database/seeders/definitions/vendas.php
 * TYPE: PHP Source
 * DOMAIN: Seeder
 * CORE: NO
 */

<<<FILE_START: database/seeders/definitions/vendas.php>>>
<?php

return [

    'app' => [
        'code'      => 'vendas',
        'label'     => 'Vendas',
        'is_active' => true,
    ],

    'roles' => [
        'admin' => 'Administrador',
    ],

    'permissions' => [],

    'grant_all_permissions_to' => ['admin'],

    'granularities' => [],

];
<<<FILE_END: database/seeders/definitions/vendas.php>>>


##################################################
### SECTION: RESOURCES ###
##################################################

/**
 * FILE: resources/css/app.css
 * TYPE: CSS / Tokens
 * DOMAIN: Styles
 * CORE: YES
 */

>>> CORE_FILE <<<
<<<FILE_START: resources/css/app.css>>>
@import 'tailwindcss';
@import './base/app.css';


/* ================================
   TOKENS (OBRIGATÓRIO)
================================ */
@import './tokens/index.css';

/* ================================
   SOURCES (TAILWIND SCAN)
================================ */
@source '../../vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php';
@source '../../storage/framework/views/*.php';
@source '../**/*.blade.php';
@source '../**/*.js';

/* ================================
   THEME MAPPING
   (Tailwind v4: utilities via CSS variables)
================================ */
@theme {
    /* Font */
    --font-sans: 'Instrument Sans', ui-sans-serif, system-ui, sans-serif,
        'Apple Color Emoji', 'Segoe UI Emoji',
        'Segoe UI Symbol', 'Noto Color Emoji';

    /* Toast */
    --color-ui-toast-bg: var(--ui-toast-bg);
    --color-ui-toast-success: var(--ui-toast-success);
    --color-ui-toast-error: var(--ui-toast-error);
    --color-ui-toast-warning: var(--ui-toast-warning);
    --color-ui-toast-info: var(--ui-toast-info);
    --color-ui-toast-text: var(--ui-toast-text);

    /* Modal */
    --color-ui-modal-title: var(--ui-modal-title);
    --color-ui-modal-text: var(--ui-modal-text);

    /* Card shadow */
    --shadow-ui-card: var(--shadow-ui-card);

    /* App (base) */
    --color-ui-app-bg: var(--ui-app-bg);
    --color-ui-app-text: var(--ui-app-text);

    /* Navigation */
    --color-ui-nav-bg: var(--ui-nav-bg);
    --color-ui-nav-border: var(--ui-nav-border);
    --color-ui-nav-title: var(--ui-nav-title);
    --color-ui-nav-text: var(--ui-nav-text);
    --color-ui-nav-hover: var(--ui-nav-hover);
    --color-ui-nav-active: var(--ui-nav-active);
    --color-ui-nav-active-text: var(--ui-nav-active-text);

    /* Content */
    --color-ui-content-bg: var(--ui-content-bg);
    --color-ui-content-text: var(--ui-content-text);

    /* Auth */
    --color-ui-auth-bg: var(--ui-auth-bg);
    --color-ui-auth-text: var(--ui-auth-text);
    --color-ui-auth-title: var(--ui-auth-title);
    --color-ui-auth-subtitle: var(--ui-auth-subtitle);

    /* Tables */
    --color-ui-table-head: var(--ui-table-head);
    --color-ui-table-border: var(--ui-table-border);
}
<<<FILE_END: resources/css/app.css>>>

/**
 * FILE: resources/css/base/app.css
 * TYPE: CSS / Tokens
 * DOMAIN: Styles
 * CORE: NO
 */

<<<FILE_START: resources/css/base/app.css>>>
[x-cloak] {
    display: none !important;
}
<<<FILE_END: resources/css/base/app.css>>>

/**
 * FILE: resources/css/cms/auth/login.css
 * TYPE: CSS / Tokens
 * DOMAIN: Styles
 * CORE: NO
 */

<<<FILE_START: resources/css/cms/auth/login.css>>>
.auth-cms {
    background: #0f172a;
    color: #e5e7eb;
}

.auth-card {
    width: 360px;
    margin: 10vh auto;
    padding: 2rem;
    background: #020617;
    border-radius: 8px;
}

.auth-error {
    background: #7f1d1d;
    padding: .75rem;
    margin-bottom: 1rem;
    border-radius: 4px;
}
<<<FILE_END: resources/css/cms/auth/login.css>>>

/**
 * FILE: resources/css/governanca/auth/login.css
 * TYPE: CSS / Tokens
 * DOMAIN: Styles
 * CORE: NO
 */

<<<FILE_START: resources/css/governanca/auth/login.css>>>
.auth-governanca {
    background: #0f172a;
    color: #e5e7eb;
}

.auth-card {
    width: 360px;
    margin: 10vh auto;
    padding: 2rem;
    background: #020617;
    border-radius: 8px;
}

.auth-error {
    background: #7f1d1d;
    padding: .75rem;
    margin-bottom: 1rem;
    border-radius: 4px;
}
<<<FILE_END: resources/css/governanca/auth/login.css>>>

/**
 * FILE: resources/css/system/auth/login.css
 * TYPE: CSS / Tokens
 * DOMAIN: Styles
 * CORE: NO
 */

<<<FILE_START: resources/css/system/auth/login.css>>>
.auth-system {
    background: #0f172a;
    color: #e5e7eb;
}

.auth-card {
    width: 360px;
    margin: 10vh auto;
    padding: 2rem;
    background: #020617;
    border-radius: 8px;
}

.auth-error {
    background: #7f1d1d;
    padding: .75rem;
    margin-bottom: 1rem;
    border-radius: 4px;
}
<<<FILE_END: resources/css/system/auth/login.css>>>

/**
 * FILE: resources/css/tokens/index.css
 * TYPE: CSS / Tokens
 * DOMAIN: Styles
 * CORE: YES
 */

>>> CORE_FILE <<<
<<<FILE_START: resources/css/tokens/index.css>>>
/* resources/css/tokens/index.css */

/* =========================================================
   BASE TOKENS (obrigatório)
   - mantém o "design system" vivo (toast/modal/etc)
========================================================= */
@import "./_auth.css";
@import "./_shadows.css";
@import "./_navigation.css";
@import "./_app.css";
@import "./_tables.css";
@import "./_toast.css";
@import "./_modal.css";
@import "./_upload.css";

/* =========================================================
   ZONAS (perfil visual por zona)
========================================================= */
@import "./zones/app.light.css";
@import "./zones/app.dark.css";

@import "./zones/navigation.light.css";
@import "./zones/navigation.dark.css";

@import "./zones/content.light.css";
@import "./zones/content.dark.css";

@import "./zones/auth.light.css";
@import "./zones/auth.dark.css";
<<<FILE_END: resources/css/tokens/index.css>>>

/**
 * FILE: resources/css/tokens/zones/app.dark.css
 * TYPE: CSS / Tokens
 * DOMAIN: Styles
 * CORE: NO
 */

<<<FILE_START: resources/css/tokens/zones/app.dark.css>>>
/* resources/css/tokens/zones/app.dark.css */
[data-zone="app"][data-theme="dark"] {
    /* Design tokens (constitucionais) */
    --ui-app-bg: #0b1220;
    --ui-app-text: #e2e8f0;

    /* Tailwind v4 bridge (utilities via CSS variables)
       Ex.: bg-ui-app-bg / text-ui-app-text
    */
    --color-ui-app-bg: var(--ui-app-bg);
    --color-ui-app-text: var(--ui-app-text);
}
<<<FILE_END: resources/css/tokens/zones/app.dark.css>>>

/**
 * FILE: resources/css/tokens/zones/app.light.css
 * TYPE: CSS / Tokens
 * DOMAIN: Styles
 * CORE: NO
 */

<<<FILE_START: resources/css/tokens/zones/app.light.css>>>
/* resources/css/tokens/zones/app.light.css */
[data-zone="app"][data-theme="light"] {
    /* Design tokens (constitucionais) */
    --ui-app-bg: #f8fafc;
    --ui-app-text: #0f172a;

    /* Tailwind v4 bridge (utilities via CSS variables)
       Ex.: bg-ui-app-bg / text-ui-app-text
    */
    --color-ui-app-bg: var(--ui-app-bg);
    --color-ui-app-text: var(--ui-app-text);
}
<<<FILE_END: resources/css/tokens/zones/app.light.css>>>

/**
 * FILE: resources/css/tokens/zones/auth.dark.css
 * TYPE: CSS / Tokens
 * DOMAIN: Styles
 * CORE: NO
 */

<<<FILE_START: resources/css/tokens/zones/auth.dark.css>>>
/* resources/css/tokens/zones/auth.dark.css */
[data-zone="auth"][data-theme="dark"] {
    /* Design tokens (constitucionais) */
    --ui-auth-bg: #070d18;
    --ui-auth-text: #e2e8f0;
    --ui-auth-title: #ffffff;
    --ui-auth-subtitle: #94a3b8;

    /* Tailwind v4 bridge */
    --color-ui-auth-bg: var(--ui-auth-bg);
    --color-ui-auth-text: var(--ui-auth-text);
    --color-ui-auth-title: var(--ui-auth-title);
    --color-ui-auth-subtitle: var(--ui-auth-subtitle);
}
<<<FILE_END: resources/css/tokens/zones/auth.dark.css>>>

/**
 * FILE: resources/css/tokens/zones/auth.light.css
 * TYPE: CSS / Tokens
 * DOMAIN: Styles
 * CORE: NO
 */

<<<FILE_START: resources/css/tokens/zones/auth.light.css>>>
/* resources/css/tokens/zones/auth.light.css */
[data-zone="auth"][data-theme="light"] {
    /* Design tokens (constitucionais) */
    --ui-auth-bg: #0b1220;
    --ui-auth-text: #e2e8f0;
    --ui-auth-title: #ffffff;
    --ui-auth-subtitle: #94a3b8;

    /* Tailwind v4 bridge */
    --color-ui-auth-bg: var(--ui-auth-bg);
    --color-ui-auth-text: var(--ui-auth-text);
    --color-ui-auth-title: var(--ui-auth-title);
    --color-ui-auth-subtitle: var(--ui-auth-subtitle);
}
<<<FILE_END: resources/css/tokens/zones/auth.light.css>>>

/**
 * FILE: resources/css/tokens/zones/content.dark.css
 * TYPE: CSS / Tokens
 * DOMAIN: Styles
 * CORE: NO
 */

<<<FILE_START: resources/css/tokens/zones/content.dark.css>>>
/* resources/css/tokens/zones/content.dark.css */
[data-zone="content"][data-theme="dark"] {
    /* Design tokens (constitucionais) */
    --ui-content-bg: transparent;
    --ui-content-text: #e2e8f0;

    /* Table tokens (usados pelo UI Kit) */
    --ui-table-head: #0b1220;
    --ui-table-border: #1e293b;
    --ui-table-hover-bg: #111c2e;

    /* Tailwind v4 bridge */
    --color-ui-content-bg: var(--ui-content-bg);
    --color-ui-content-text: var(--ui-content-text);

    --color-ui-table-head: var(--ui-table-head);
    --color-ui-table-border: var(--ui-table-border);
}
<<<FILE_END: resources/css/tokens/zones/content.dark.css>>>

/**
 * FILE: resources/css/tokens/zones/content.light.css
 * TYPE: CSS / Tokens
 * DOMAIN: Styles
 * CORE: NO
 */

<<<FILE_START: resources/css/tokens/zones/content.light.css>>>
/* resources/css/tokens/zones/content.light.css */
[data-zone="content"][data-theme="light"] {
    /* Design tokens (constitucionais) */
    --ui-content-bg: transparent;
    --ui-content-text: #0f172a;

    /* Table tokens (usados pelo UI Kit) */
    --ui-table-head: #f8fafc;
    --ui-table-border: #e2e8f0;
    --ui-table-hover-bg: #f1f5f9;

    /* Tailwind v4 bridge */
    --color-ui-content-bg: var(--ui-content-bg);
    --color-ui-content-text: var(--ui-content-text);

    --color-ui-table-head: var(--ui-table-head);
    --color-ui-table-border: var(--ui-table-border);
}
<<<FILE_END: resources/css/tokens/zones/content.light.css>>>

/**
 * FILE: resources/css/tokens/zones/navigation.dark.css
 * TYPE: CSS / Tokens
 * DOMAIN: Styles
 * CORE: NO
 */

<<<FILE_START: resources/css/tokens/zones/navigation.dark.css>>>
/* resources/css/tokens/zones/navigation.dark.css */
[data-zone="navigation"][data-theme="dark"] {
    /* Design tokens (constitucionais) */
    --ui-nav-bg: #0f172a;
    --ui-nav-text: #cbd5e1;
    --ui-nav-title: #ffffff;
    --ui-nav-border: #1e293b;
    --ui-nav-hover: #111c2e;

    --ui-nav-active: #111c2e;
    --ui-nav-active-text: #ffffff;

    /* Tailwind v4 bridge */
    --color-ui-nav-bg: var(--ui-nav-bg);
    --color-ui-nav-text: var(--ui-nav-text);
    --color-ui-nav-title: var(--ui-nav-title);
    --color-ui-nav-border: var(--ui-nav-border);
    --color-ui-nav-hover: var(--ui-nav-hover);
    --color-ui-nav-active: var(--ui-nav-active);
    --color-ui-nav-active-text: var(--ui-nav-active-text);
}
<<<FILE_END: resources/css/tokens/zones/navigation.dark.css>>>

/**
 * FILE: resources/css/tokens/zones/navigation.light.css
 * TYPE: CSS / Tokens
 * DOMAIN: Styles
 * CORE: NO
 */

<<<FILE_START: resources/css/tokens/zones/navigation.light.css>>>
/* resources/css/tokens/zones/navigation.light.css */
[data-zone="navigation"][data-theme="light"] {
    /* Design tokens (constitucionais) */
    --ui-nav-bg: #ffffff;
    --ui-nav-text: #334155;
    --ui-nav-title: #0f172a;
    --ui-nav-border: #e2e8f0;
    --ui-nav-hover: #f1f5f9;

    --ui-nav-active: #0f172a;
    --ui-nav-active-text: #ffffff;

    /* Tailwind v4 bridge */
    --color-ui-nav-bg: var(--ui-nav-bg);
    --color-ui-nav-text: var(--ui-nav-text);
    --color-ui-nav-title: var(--ui-nav-title);
    --color-ui-nav-border: var(--ui-nav-border);
    --color-ui-nav-hover: var(--ui-nav-hover);
    --color-ui-nav-active: var(--ui-nav-active);
    --color-ui-nav-active-text: var(--ui-nav-active-text);
}
<<<FILE_END: resources/css/tokens/zones/navigation.light.css>>>

/**
 * FILE: resources/css/tokens/_app.css
 * TYPE: CSS / Tokens
 * DOMAIN: Styles
 * CORE: NO
 */

<<<FILE_START: resources/css/tokens/_app.css>>>
/* resources/css/tokens/_app.css */

:root {
    /* Background e texto padrão do sistema */
    --ui-app-bg: #f9fafb;
    --ui-app-text: #111827;
}
<<<FILE_END: resources/css/tokens/_app.css>>>

/**
 * FILE: resources/css/tokens/_auth.css
 * TYPE: CSS / Tokens
 * DOMAIN: Styles
 * CORE: NO
 */

<<<FILE_START: resources/css/tokens/_auth.css>>>
:root {
    /* Auth backgrounds */
    --ui-auth-bg: #0f172a;
    /* slate-900 */
    --ui-auth-text: #e5e7eb;
    /* gray-200 */

    /* Auth typography */
    --ui-auth-title: #ffffff;
    --ui-auth-subtitle: #9ca3af;
    /* gray-400 */
}
<<<FILE_END: resources/css/tokens/_auth.css>>>

/**
 * FILE: resources/css/tokens/_modal.css
 * TYPE: CSS / Tokens
 * DOMAIN: Styles
 * CORE: NO
 */

<<<FILE_START: resources/css/tokens/_modal.css>>>
:root {
    --ui-modal-title: #111827;
    --ui-modal-text: #374151;
}
<<<FILE_END: resources/css/tokens/_modal.css>>>

/**
 * FILE: resources/css/tokens/_navigation.css
 * TYPE: CSS / Tokens
 * DOMAIN: Styles
 * CORE: NO
 */

<<<FILE_START: resources/css/tokens/_navigation.css>>>
/* resources/css/tokens/_navigation.css */

:root {
    /* Sidebar background e bordas */
    --ui-nav-bg: #ffffff;
    --ui-nav-border: #e5e7eb;

    /* Textos */
    --ui-nav-title: #111827;
    --ui-nav-text: #374151;

    /* Estados */
    --ui-nav-hover: #f3f4f6;
    --ui-nav-active: #111827;
    --ui-nav-active-text: #ffffff;
}
<<<FILE_END: resources/css/tokens/_navigation.css>>>

/**
 * FILE: resources/css/tokens/_shadows.css
 * TYPE: CSS / Tokens
 * DOMAIN: Styles
 * CORE: NO
 */

<<<FILE_START: resources/css/tokens/_shadows.css>>>
:root {
    --shadow-ui-card: 0 10px 25px -5px rgba(0, 0, 0, 0.35),
        0 4px 6px -2px rgba(0, 0, 0, 0.2);
}
<<<FILE_END: resources/css/tokens/_shadows.css>>>

/**
 * FILE: resources/css/tokens/_tables.css
 * TYPE: CSS / Tokens
 * DOMAIN: Styles
 * CORE: NO
 */

<<<FILE_START: resources/css/tokens/_tables.css>>>
/* resources/css/tokens/_tables.css */

/* =========================================================
   TOKENS (Tables)
   - Mantém defaults e permite override por zona (content.*)
========================================================= */
:root {
    --ui-table-head: #f8fafc;
    --ui-table-border: #e2e8f0;
    --ui-table-hover-bg: #f1f5f9;
}

.ui-table table {
    width: 100%;
    border-collapse: collapse;
}

.ui-table th,
.ui-table td {
    padding: 0.5rem 0.75rem;
    text-align: left;
    white-space: nowrap;
}

.ui-table thead th {
    font-weight: 600;
}

.ui-table tbody tr:hover {
    background: var(--ui-table-hover-bg);
}
<<<FILE_END: resources/css/tokens/_tables.css>>>

/**
 * FILE: resources/css/tokens/_toast.css
 * TYPE: CSS / Tokens
 * DOMAIN: Styles
 * CORE: NO
 */

<<<FILE_START: resources/css/tokens/_toast.css>>>
:root {
    --ui-toast-bg: #111827;
    --ui-toast-text: #ffffff;

    --ui-toast-success: #16a34a;
    --ui-toast-error: #dc2626;
    --ui-toast-warning: #d97706;
    --ui-toast-info: #2563eb;
}

/* =========================================================
   TOAST (CSS institucional)
   - Não depende de utilities bg-* geradas
   - Apenas consome tokens
========================================================= */
.ui-toast {
    background: var(--ui-toast-bg);
    color: var(--ui-toast-text);
}

.ui-toast[data-toast-type='success'] {
    background: var(--ui-toast-success);
}

.ui-toast[data-toast-type='error'] {
    background: var(--ui-toast-error);
}

.ui-toast[data-toast-type='warning'] {
    background: var(--ui-toast-warning);
}

.ui-toast[data-toast-type='info'] {
    background: var(--ui-toast-info);
}
<<<FILE_END: resources/css/tokens/_toast.css>>>

/**
 * FILE: resources/css/tokens/_upload.css
 * TYPE: CSS / Tokens
 * DOMAIN: Styles
 * CORE: NO
 */

<<<FILE_START: resources/css/tokens/_upload.css>>>
/* =========================================================
   TOKENS — Upload System (Fase 3)
========================================================= */

:root {
    --ui-upload-bg: #ffffff;
    --ui-upload-border: #e2e8f0;
    --ui-upload-hover: #f1f5f9;

    --ui-upload-text: #334155;
    --ui-upload-muted: #64748b;

    --ui-upload-progress-bg: #e2e8f0;
    --ui-upload-progress-fill: #0f172a;

    --ui-upload-error: #dc2626;
    --ui-upload-success: #16a34a;
}

/* Estrutura base */
.ui-upload {
    border: 1px dashed var(--ui-upload-border);
    background: var(--ui-upload-bg);
    padding: 1.5rem;
    border-radius: 0.75rem;
    transition: all 0.2s ease;
}

.ui-upload:hover {
    background: var(--ui-upload-hover);
}

.ui-upload-text {
    color: var(--ui-upload-text);
}

.ui-upload-muted {
    color: var(--ui-upload-muted);
}

/* Progress */
.ui-upload-progress {
    width: 100%;
    height: 6px;
    background: var(--ui-upload-progress-bg);
    border-radius: 999px;
    overflow: hidden;
}

.ui-upload-progress-bar {
    height: 100%;
    background: var(--ui-upload-progress-fill);
    width: 0%;
    transition: width 0.2s ease;
}

/* Estados */
.ui-upload-error {
    border-color: var(--ui-upload-error);
}

.ui-upload-success {
    border-color: var(--ui-upload-success);
}
<<<FILE_END: resources/css/tokens/_upload.css>>>

/**
 * FILE: resources/css/vendas/auth/login.css
 * TYPE: CSS / Tokens
 * DOMAIN: Styles
 * CORE: NO
 */

<<<FILE_START: resources/css/vendas/auth/login.css>>>
.auth-vendas {
    background: #0f172a;
    color: #e5e7eb;
}

.auth-card {
    width: 360px;
    margin: 10vh auto;
    padding: 2rem;
    background: #020617;
    border-radius: 8px;
}

.auth-error {
    background: #7f1d1d;
    padding: .75rem;
    margin-bottom: 1rem;
    border-radius: 4px;
}
<<<FILE_END: resources/css/vendas/auth/login.css>>>

/**
 * FILE: resources/js/app.js
 * TYPE: JavaScript Module
 * DOMAIN: Frontend Logic
 * CORE: YES
 */

>>> CORE_FILE <<<
<<<FILE_START: resources/js/app.js>>>
// resources/js/app.js
import Alpine from 'alpinejs'
import focus from '@alpinejs/focus'

import themeSwitch from './components/theme-switch'
import toastComponent from './components/toast'
import { uiUpload } from './components/upload'

/* =========================================================
   UI MODAL — DEVE EXISTIR ANTES DO Alpine.start()
========================================================= */
globalThis.uiModal = function (id) {
    return {
        open: false,

        init() {
            globalThis.addEventListener('ui-modal-open', (e) => {
                if (e.detail === id) this.open = true
            })

            globalThis.addEventListener('ui-modal-close', (e) => {
                if (!e.detail || e.detail === id) this.open = false
            })
        },

        closeModal() {
            this.open = false
        },
    }
}

/* =========================================================
   UI GLOBAL API (CHAMADA PELO BLADE)
   - PADRÃO: detail = { message, type }
========================================================= */
globalThis.ui = globalThis.ui || {}

globalThis.ui.toast = {
    success(message) {
        globalThis.dispatchEvent(new CustomEvent('ui-toast', { detail: { message, type: 'success' } }))
    },
    error(message) {
        globalThis.dispatchEvent(new CustomEvent('ui-toast', { detail: { message, type: 'error' } }))
    },
    warning(message) {
        globalThis.dispatchEvent(new CustomEvent('ui-toast', { detail: { message, type: 'warning' } }))
    },
    info(message) {
        globalThis.dispatchEvent(new CustomEvent('ui-toast', { detail: { message, type: 'info' } }))
    },
}

globalThis.ui.modal = {
    open(id) {
        globalThis.dispatchEvent(new CustomEvent('ui-modal-open', { detail: id }))
    },
    close(id) {
        globalThis.dispatchEvent(new CustomEvent('ui-modal-close', { detail: id }))
    },
    closeAll() {
        globalThis.dispatchEvent(new CustomEvent('ui-modal-close'))
    },
}

globalThis.ui.loader = {
    show() {
        globalThis.dispatchEvent(new CustomEvent('ui-loader-show'))
    },
    hide() {
        globalThis.dispatchEvent(new CustomEvent('ui-loader-hide'))
    },
}

/* =========================================================
   ALPINE
========================================================= */
Alpine.plugin(focus)

/**
 * REGISTRO CANÔNICO DOS COMPONENTES
 */
Alpine.data('uiToast', toastComponent)
Alpine.data('themeSwitch', themeSwitch)

/**
 * Upload System (Fase 3)
 */
globalThis.uiUpload = uiUpload

globalThis.Alpine = Alpine
Alpine.start()
<<<FILE_END: resources/js/app.js>>>

/**
 * FILE: resources/js/bootstrap.js
 * TYPE: JavaScript Module
 * DOMAIN: Frontend Logic
 * CORE: NO
 */

<<<FILE_START: resources/js/bootstrap.js>>>
import axios from 'axios';
window.axios = axios;

window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';
<<<FILE_END: resources/js/bootstrap.js>>>

/**
 * FILE: resources/js/components/theme-switch.js
 * TYPE: JavaScript Module
 * DOMAIN: Frontend Logic
 * CORE: NO
 */

<<<FILE_START: resources/js/components/theme-switch.js>>>
export default function themeSwitch(current, endpoint) {
    return {
        open: false,
        current,
        endpoint,

        options: [
            { value: 'light', label: 'Light' },
            { value: 'dark', label: 'Dark' },
            { value: 'mixed-nav-dark', label: 'Menu escuro' },
            { value: 'mixed-content-dark', label: 'Conteúdo escuro' },
        ],

        async select(value) {
            if (value === this.current) return

            this.current = value
            this.open = false

            ui.loader.show()

            try {
                const csrfMeta = document.querySelector('meta[name="csrf-token"]')

                if (!csrfMeta) {
                    throw new Error('CSRF token não encontrado no layout.')
                }

                if (!this.endpoint) {
                    throw new Error('Endpoint do visual-profile não informado.')
                }

                const response = await fetch(this.endpoint, {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': csrfMeta.content,
                        'Accept': 'application/json',
                    },
                    body: JSON.stringify({
                        visual_profile: value,
                    }),
                })

                if (!response.ok) {
                    throw new Error(`Erro HTTP ${response.status}`)
                }

                location.reload()
            } catch (error) {
                console.error('[ThemeSwitch]', error)

                ui.loader.hide()

                if (globalThis.ui?.toast) {
                    ui.toast.error('Erro ao aplicar tema')
                } else {
                    alert('Erro ao aplicar tema')
                }
            }
        },
    }
}
<<<FILE_END: resources/js/components/theme-switch.js>>>

/**
 * FILE: resources/js/components/toast.js
 * TYPE: JavaScript Module
 * DOMAIN: Frontend Logic
 * CORE: NO
 */

<<<FILE_START: resources/js/components/toast.js>>>
// resources/js/components/toast.js
export default function toastComponent() {
    return {
        toasts: [],

        init() {
            // Listener ÚNICO (não duplique isso no Blade)
            window.addEventListener('ui-toast', (e) => {
                // compat: aceita {msg} (legado) e {message} (novo)
                const message = e?.detail?.message ?? e?.detail?.msg ?? ''
                const type = e?.detail?.type ?? 'info'

                if (!message) return

                this.add(message, type)
            })
        },

        add(message, type = 'info', timeout = 4000) {
            // id realmente único (evita warning de key duplicada)
            const id = `${Date.now()}-${Math.random().toString(16).slice(2)}`

            this.toasts.push({
                id,
                message,
                type,
                visible: true,
            })

            window.setTimeout(() => this.remove(id), timeout)
        },

        remove(id) {
            this.toasts = this.toasts.filter((t) => t.id !== id)
        },
    }
}
<<<FILE_END: resources/js/components/toast.js>>>

/**
 * FILE: resources/js/components/upload.js
 * TYPE: JavaScript Module
 * DOMAIN: Frontend Logic
 * CORE: NO
 */

<<<FILE_START: resources/js/components/upload.js>>>
// resources/js/components/upload.js

export function uiUpload(config = {}) {
    return {
        file: null,
        fileName: null,
        previewUrl: null,
        progress: 0,
        state: 'idle', // idle | ready | loading | error
        errorMessage: null,

        maxSize: config.maxSize || 5,
        accept: config.accept || '*',
        uploadUrl: config.uploadUrl || null,

        handleFile(event) {
            const selectedFile = event.target.files[0]
            if (!selectedFile) return

            this.reset(false)

            const maxBytes = this.maxSize * 1024 * 1024

            if (selectedFile.size > maxBytes) {
                this.state = 'error'
                this.errorMessage = `Arquivo maior que ${this.maxSize}MB`
                globalThis.ui?.toast?.warning(this.errorMessage)
                this.clearInput(event.target)
                return
            }

            this.file = selectedFile
            this.fileName = selectedFile.name
            this.state = 'ready'

            if (selectedFile.type.startsWith('image/')) {
                this.previewUrl = URL.createObjectURL(selectedFile)
            }
        },

        async upload() {
            if (!this.file || !this.uploadUrl) return

            this.state = 'loading'
            this.progress = 30

            const formData = new FormData()
            formData.append('file', this.file)

            try {
                const response = await fetch(this.uploadUrl, {
                    method: 'POST',
                    headers: {
                        'X-CSRF-TOKEN': document
                            .querySelector('meta[name="csrf-token"]')
                            ?.getAttribute('content'),
                    },
                    body: formData,
                })

                this.progress = 80

                if (!response.ok) {
                    const data = await response.json().catch(() => null)

                    this.state = 'error'
                    this.errorMessage =
                        data?.message || 'Erro ao enviar arquivo'

                    globalThis.ui?.toast?.error(this.errorMessage)
                    return
                }

                this.progress = 100
                globalThis.ui?.toast?.success('Upload realizado com sucesso')

                // RESET AUTOMÁTICO APÓS SUCESSO
                setTimeout(() => {
                    this.reset(true)
                }, 600)

            } catch (error) {
                this.state = 'error'
                this.errorMessage = 'Erro de comunicação com servidor'
                globalThis.ui?.toast?.error(this.errorMessage)
            }
        },

        reset(clearInput = true) {
            this.file = null
            this.fileName = null
            this.previewUrl = null
            this.progress = 0
            this.errorMessage = null
            this.state = 'idle'

            if (clearInput) {
                const input = document.querySelector(
                    `input[type="file"][accept="${this.accept}"]`
                )
                if (input) input.value = ''
            }
        },

        clearInput(inputElement) {
            if (inputElement) {
                inputElement.value = ''
            }
        }
    }
}
<<<FILE_END: resources/js/components/upload.js>>>

/**
 * FILE: resources/views/auth/governanca/forgot-password.blade.php
 * TYPE: Blade View / Component
 * DOMAIN: View / UI
 * CORE: NO
 */

<<<FILE_START: resources/views/auth/governanca/forgot-password.blade.php>>>
@extends('layouts.auth')

@section('content')
    <x-ui.auth.container>
        <x-ui.auth.card>

            <x-ui.auth.header
                title="Recuperar senha"
                subtitle="Informe seu e-mail para receber o link"
            />

            <x-ui.form
                method="POST"
                action="{{ route('governanca.password.email') }}"
                x-on:submit="ui.loader.show()"
            >
                <x-ui.form.input
                    name="email"
                    type="email"
                    label="E-mail"
                    required
                    autofocus
                />

                <x-ui.button.primary
                    type="submit"
                    class="w-full"
                    x-on:click="ui.loader.show()"
                >
                    Enviar link de recuperação
                </x-ui.button.primary>
            </x-ui.form>

            <div class="text-center">
                <a
                    href="{{ route('governanca.login') }}"
                    class="text-sm underline text-ui-auth-subtitle"
                >
                    Voltar ao login
                </a>
            </div>

        </x-ui.auth.card>
    </x-ui.auth.container>
@endsection
<<<FILE_END: resources/views/auth/governanca/forgot-password.blade.php>>>

/**
 * FILE: resources/views/auth/governanca/login.blade.php
 * TYPE: Blade View / Component
 * DOMAIN: View / UI
 * CORE: NO
 */

<<<FILE_START: resources/views/auth/governanca/login.blade.php>>>
@extends('layouts.auth')

@section('content')
    <x-ui.auth.container>
        <x-ui.auth.card>

            <x-ui.auth.header
                title="Acesso à Governança"
                subtitle="Área administrativa do sistema"
            />

            <x-ui.form
    method="POST"
    action="{{ route('governanca.login.submit') }}"
    x-data="{ submitting: false }"
    x-on:submit.prevent="
        if (submitting) return;
        submitting = true;
        ui.loader.show();
        $el.submit();
    "
>

                <x-ui.form.input
                    name="email"
                    type="email"
                    label="E-mail"
                    required
                    autofocus
                />

                <x-ui.form.password
                    name="password"
                    label="Senha"
                    required
                />

                <x-ui.button.primary
                    type="submit"
                    class="w-full"

                >
                    Entrar
                </x-ui.button.primary>
            </x-ui.form>

            <div class="text-center">
                <a
                    href="{{ route('governanca.password.request') }}"
                    class="text-sm underline text-ui-auth-subtitle"
                >
                    Esqueci minha senha
                </a>
            </div>

        </x-ui.auth.card>
    </x-ui.auth.container>
@endsection
<<<FILE_END: resources/views/auth/governanca/login.blade.php>>>

/**
 * FILE: resources/views/auth/governanca/reset-password.blade.php
 * TYPE: Blade View / Component
 * DOMAIN: View / UI
 * CORE: NO
 */

<<<FILE_START: resources/views/auth/governanca/reset-password.blade.php>>>
@extends('layouts.auth')

@section('content')
    <x-ui.auth.container>
        <x-ui.auth.card>

            <x-ui.auth.header
                title="Definir nova senha"
                subtitle="Escolha uma nova senha para sua conta"
            />

            <x-ui.form
                method="POST"
                action="{{ route('governanca.password.update') }}"
                x-on:submit="ui.loader.show()"
            >
                <input type="hidden" name="token" value="{{ $token }}">

                <x-ui.form.input
                    name="email"
                    type="email"
                    label="E-mail"
                    required
                    autofocus
                />

                <x-ui.form.password
                    name="password"
                    label="Nova senha"
                    required
                />

                <x-ui.form.password
                    name="password_confirmation"
                    label="Confirmar senha"
                    required
                />

                <x-ui.button.primary
                    type="submit"
                    class="w-full"
                    x-on:click="ui.loader.show()"
                >
                    Redefinir senha
                </x-ui.button.primary>
            </x-ui.form>

            <div class="text-center">
                <a
                    href="{{ route('governanca.login') }}"
                    class="text-sm underline text-ui-auth-subtitle"
                >
                    Voltar ao login
                </a>
            </div>

        </x-ui.auth.card>
    </x-ui.auth.container>
@endsection
<<<FILE_END: resources/views/auth/governanca/reset-password.blade.php>>>

/**
 * FILE: resources/views/cms/auth/forgot-password.blade.php
 * TYPE: Blade View / Component
 * DOMAIN: View / UI
 * CORE: NO
 */

<<<FILE_START: resources/views/cms/auth/forgot-password.blade.php>>>
@extends('layouts.app')

@section('content')
<div class="auth-container">

    <h1>Recuperar senha</h1>

    <p>Informe seu e-mail para receber o link de redefinição de senha.</p>

    @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif

    @if ($errors->any())
        <div class="alert alert-error">
            {{ $errors->first('email') }}
        </div>
    @endif

    <form method="POST" action="{{ route('cms.password.email') }}">
        @csrf

        <div class="form-group">
            <label for="email">E-mail</label>
            <input
                id="email"
                type="email"
                name="email"
                value="{{ old('email') }}"
                required
                autofocus
            >
        </div>

        <div class="form-actions">
            <button type="submit">
                Enviar link de recuperação
            </button>
        </div>
    </form>

    <div class="auth-links">
        <a href="{{ route('cms.login') }}">Voltar para o login</a>
    </div>

</div>
@endsection
<<<FILE_END: resources/views/cms/auth/forgot-password.blade.php>>>

/**
 * FILE: resources/views/cms/auth/login.blade.php
 * TYPE: Blade View / Component
 * DOMAIN: View / UI
 * CORE: NO
 */

<<<FILE_START: resources/views/cms/auth/login.blade.php>>>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="utf-8">
    <title>Login — CMS</title>

    {{-- CSS funcional global --}}
    @vite('resources/css/app.css')

    {{-- CSS visual exclusivo da Cms --}}
    @vite('resources/css/cms/auth/login.css')

</head>
<body class="auth auth-cms">
    <main class="auth-container">
        <section class="auth-card">
            <h1>CMS</h1>
            <p>Acesso administrativo</p>

            @if ($errors->any())
                <div class="auth-error">
                    {{ __('auth.failed') }}
                </div>
            @endif

            <form method="POST" action="{{ route('cms.login.submit') }}" novalidate>
                @csrf

                <div class="field">
                    <label for="email">E-mail</label>
                    <input
                        id="email"
                        type="email"
                        name="email"
                        value="{{ old('email') }}"
                        required
                        autofocus
                    >
                </div>

                <div class="field">
                    <label for="password">Senha</label>
                    <input
                        id="password"
                        type="password"
                        name="password"
                        required
                    >
                </div>

                <button type="submit" class="btn-primary">
                    Entrar
                </button>
            </form>
        </section>
    </main>

    {{-- JS funcional global --}}
    @vite('resources/js/app.js')
</body>
</html>
<<<FILE_END: resources/views/cms/auth/login.blade.php>>>

/**
 * FILE: resources/views/cms/auth/reset-password.blade.php
 * TYPE: Blade View / Component
 * DOMAIN: View / UI
 * CORE: NO
 */

<<<FILE_START: resources/views/cms/auth/reset-password.blade.php>>>
@extends('layouts.app')

@section('content')
<div class="auth-container">

    <h1>Redefinir senha</h1>

    @if ($errors->any())
        <div class="alert alert-error">
            {{ $errors->first() }}
        </div>
    @endif

    <form method="POST" action="{{ route('cms.password.update') }}">
        @csrf

        <input type="hidden" name="token" value="{{ $token }}">
        <input type="hidden" name="email" value="{{ $email }}">

        <div class="form-group">
            <label for="password">Nova senha</label>
            <input
                id="password"
                type="password"
                name="password"
                required
            >
        </div>

        <div class="form-group">
            <label for="password_confirmation">Confirmar nova senha</label>
            <input
                id="password_confirmation"
                type="password"
                name="password_confirmation"
                required
            >
        </div>

        <div class="form-actions">
            <button type="submit">
                Redefinir senha
            </button>
        </div>
    </form>

</div>
@endsection
<<<FILE_END: resources/views/cms/auth/reset-password.blade.php>>>

/**
 * FILE: resources/views/cms/dashboard/index.blade.php
 * TYPE: Blade View / Component
 * DOMAIN: View / UI
 * CORE: NO
 */

<<<FILE_START: resources/views/cms/dashboard/index.blade.php>>>
@extends('layouts.app')

@section('content')
    <h1>Dashboard do CMS</h1>

    <p>App atual: {{ $app->label }}</p>










<br><br><br><br>
-------------------------------------------------------------------
<br><br><br><br>



<x-ui.button.primary onclick="ui.modal.open('confirmTest')">
    Abrir Modal
</x-ui.button.primary>

<x-ui.modal id="confirmTest">
    <x-slot:title>
        Teste de Modal
    </x-slot:title>

    Modal funcionando corretamente.

    <x-slot:footer>
        <x-ui.button.secondary @click="closeModal()">
    Fechar
</x-ui.button.secondary>

    </x-slot:footer>
</x-ui.modal>

<br><br><br><br>
-------------------------------------------------------------------
<br><br><br><br>

<div class="p-6 bg-blue-600 text-white">
    Teste Tailwind
</div>

<div x-data="{ open:false }" class="mt-6">

    <button
        class="px-3 py-2 bg-gray-800 text-white rounded"
        @click="open = !open"
    >
        Toggle
    </button>

    <div
        x-show="open"
        x-transition
        class="mt-3 rounded bg-green-100 p-3 text-green-800"
    >
        OK Alpine Funcionando
    </div>

</div>
<form method="POST" action="{{ route('cms.__test') }}" class="mt-6 space-y-4">
    @csrf

    <x-ui.form.input
        name="email"
        label="E-mail"
        type="email"
        required
    />

    <x-ui.form.password
        name="password"
        label="Senha"
        required
    />

    <x-ui.form.select
        name="profile"
        label="Perfil"
        :options="[
            '' => 'Selecione...',
            'admin' => 'Administrador',
            'user' => 'Usuário',
        ]"
        required
    />

    <x-ui.form.textarea
        name="notes"
        label="Observações"
        rows="4"
    />

    <x-ui.button.primary type="submit" class="w-full">
        Enviar teste
    </x-ui.button.primary>
</form>




<button
    class="mt-6 rounded bg-blue-600 px-4 py-2 text-white"
    onclick="ui.loader.show()"
>
    Mostrar Loader
</button>

<button
    class="mt-3 rounded bg-gray-700 px-4 py-2 text-white"
    onclick="ui.loader.hide()"
>
    Esconder Loader
</button>

<div class="mt-6 flex gap-3">

    <x-ui.button.primary>
        Salvar
    </x-ui.button.primary>

    <x-ui.button.secondary>
        Cancelar
    </x-ui.button.secondary>

    <x-ui.button.danger>
        Excluir
    </x-ui.button.danger>

    <x-ui.button.ghost>
        Ver
    </x-ui.button.ghost>

</div>









@endsection
<<<FILE_END: resources/views/cms/dashboard/index.blade.php>>>

/**
 * FILE: resources/views/cms/testes/__test.blade.php
 * TYPE: Blade View / Component
 * DOMAIN: View / UI
 * CORE: NO
 */

<<<FILE_START: resources/views/cms/testes/__test.blade.php>>>
<form method="POST" action="{{ route('cms.__test-form') }}" class="mt-6 space-y-4">
    @csrf

    <x-ui.form.input
        name="email"
        label="E-mail"
        type="email"
        required
    />

    <x-ui.form.password
        name="password"
        label="Senha"
        required
    />

    <x-ui.form.select
        name="profile"
        label="Perfil"
        :options="[
            '' => 'Selecione...',
            'admin' => 'Administrador',
            'user' => 'Usuário',
        ]"
        required
    />

    <x-ui.form.textarea
        name="notes"
        label="Observações"
        rows="4"
    />

    <x-ui.button.primary type="submit" class="w-full">
        Enviar teste
    </x-ui.button.primary>
</form>




<button
    class="mt-6 rounded bg-blue-600 px-4 py-2 text-white"
    onclick="ui.loader.show()"
>
    Mostrar Loader
</button>

<button
    class="mt-3 rounded bg-gray-700 px-4 py-2 text-white"
    onclick="ui.loader.hide()"
>
    Esconder Loader
</button>

<div class="mt-6 flex gap-3">

    <x-ui.button.primary>
        Salvar
    </x-ui.button.primary>

    <x-ui.button.secondary>
        Cancelar
    </x-ui.button.secondary>

    <x-ui.button.danger>
        Excluir
    </x-ui.button.danger>

    <x-ui.button.ghost>
        Ver
    </x-ui.button.ghost>

</div>
<<<FILE_END: resources/views/cms/testes/__test.blade.php>>>

/**
 * FILE: resources/views/components/ui/auth/card.blade.php
 * TYPE: Blade View / Component
 * DOMAIN: View / UI
 * CORE: NO
 */

<<<FILE_START: resources/views/components/ui/auth/card.blade.php>>>
{{-- resources/views/components/ui/auth/card.blade.php --}}
<div class="bg-white rounded-xl shadow-ui-card p-6 space-y-6">
    {{ $slot }}
</div>
<<<FILE_END: resources/views/components/ui/auth/card.blade.php>>>

/**
 * FILE: resources/views/components/ui/auth/container.blade.php
 * TYPE: Blade View / Component
 * DOMAIN: View / UI
 * CORE: NO
 */

<<<FILE_START: resources/views/components/ui/auth/container.blade.php>>>
{{-- resources/views/components/ui/auth/container.blade.php --}}
<div class="w-full max-w-sm mx-auto">
    {{ $slot }}
</div>
<<<FILE_END: resources/views/components/ui/auth/container.blade.php>>>

/**
 * FILE: resources/views/components/ui/auth/header.blade.php
 * TYPE: Blade View / Component
 * DOMAIN: View / UI
 * CORE: NO
 */

<<<FILE_START: resources/views/components/ui/auth/header.blade.php>>>
{{-- resources/views/components/ui/auth/header.blade.php --}}
@props([
    'title',
    'subtitle' => null,
])

<div class="text-center space-y-1">
    <h1 class="text-xl font-semibold text-ui-auth-title">
        {{ $title }}
    </h1>

    @if ($subtitle)
        <p class="text-sm text-ui-auth-subtitle">
            {{ $subtitle }}
        </p>
    @endif
</div>
<<<FILE_END: resources/views/components/ui/auth/header.blade.php>>>

/**
 * FILE: resources/views/components/ui/button/base.blade.php
 * TYPE: Blade View / Component
 * DOMAIN: View / UI
 * CORE: NO
 */

<<<FILE_START: resources/views/components/ui/button/base.blade.php>>>
@props([
    'type' => 'button',
    'loading' => false,
    'disabled' => false,
])

<button
    type="{{ $type }}"

    {{ $disabled || $loading ? 'disabled' : '' }}

    {{ $attributes->merge([
        'class' =>
        'inline-flex items-center justify-center gap-2 rounded-lg px-4 py-2 text-sm font-medium transition
         focus:outline-none focus:ring-2 focus:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-60'
    ]) }}
>

    {{-- Spinner --}}
    @if($loading)
        <span
            class="h-4 w-4 animate-spin rounded-full border-2 border-current border-t-transparent"
        ></span>
    @endif

    {{-- Label --}}
    <span>
        {{ $slot }}
    </span>

</button>
<<<FILE_END: resources/views/components/ui/button/base.blade.php>>>

/**
 * FILE: resources/views/components/ui/button/danger.blade.php
 * TYPE: Blade View / Component
 * DOMAIN: View / UI
 * CORE: NO
 */

<<<FILE_START: resources/views/components/ui/button/danger.blade.php>>>
<x-ui.button.base
    {{ $attributes }}
    class="bg-red-600 text-white hover:bg-red-700 focus:ring-red-500"
>
    {{ $slot }}
</x-ui.button.base>
<<<FILE_END: resources/views/components/ui/button/danger.blade.php>>>

/**
 * FILE: resources/views/components/ui/button/ghost.blade.php
 * TYPE: Blade View / Component
 * DOMAIN: View / UI
 * CORE: NO
 */

<<<FILE_START: resources/views/components/ui/button/ghost.blade.php>>>
<x-ui.button.base
    {{ $attributes }}
    class="bg-transparent text-gray-700 hover:bg-gray-100 focus:ring-gray-300"
>
    {{ $slot }}
</x-ui.button.base>
<<<FILE_END: resources/views/components/ui/button/ghost.blade.php>>>

/**
 * FILE: resources/views/components/ui/button/primary.blade.php
 * TYPE: Blade View / Component
 * DOMAIN: View / UI
 * CORE: NO
 */

<<<FILE_START: resources/views/components/ui/button/primary.blade.php>>>
<x-ui.button.base
    {{ $attributes }}
    class="bg-blue-600 text-white hover:bg-blue-700 focus:ring-blue-500"
>
    {{ $slot }}
</x-ui.button.base>
<<<FILE_END: resources/views/components/ui/button/primary.blade.php>>>

/**
 * FILE: resources/views/components/ui/button/secondary.blade.php
 * TYPE: Blade View / Component
 * DOMAIN: View / UI
 * CORE: NO
 */

<<<FILE_START: resources/views/components/ui/button/secondary.blade.php>>>
<x-ui.button.base
    {{ $attributes }}
    class="bg-gray-200 text-gray-800 hover:bg-gray-300 focus:ring-gray-400"
>
    {{ $slot }}
</x-ui.button.base>
<<<FILE_END: resources/views/components/ui/button/secondary.blade.php>>>

/**
 * FILE: resources/views/components/ui/form/field.blade.php
 * TYPE: Blade View / Component
 * DOMAIN: View / UI
 * CORE: NO
 */

<<<FILE_START: resources/views/components/ui/form/field.blade.php>>>
@props([
    'label' => null,
    'name' => null,
    'required' => false,
])

<div class="flex flex-col gap-1">

    @if($label)
        <label
            for="{{ $name }}"
            class="text-sm font-medium text-gray-700"
        >
            {{ $label }}
            @if($required)
                <span class="text-red-500">*</span>
            @endif
        </label>
    @endif

    {{ $slot }}

    @error($name)
        <span class="text-sm text-red-600">
            {{ $message }}
        </span>
    @enderror

</div>
<<<FILE_END: resources/views/components/ui/form/field.blade.php>>>

/**
 * FILE: resources/views/components/ui/form/form.blade.php
 * TYPE: Blade View / Component
 * DOMAIN: View / UI
 * CORE: NO
 */

<<<FILE_START: resources/views/components/ui/form/form.blade.php>>>
{{-- resources/views/components/ui/form.blade.php --}}
@props([
    'method' => 'POST',
    'action',
])

<form method="{{ strtolower($method) === 'get' ? 'GET' : 'POST' }}" action="{{ $action }}" {{ $attributes->merge(['class' => 'space-y-4']) }}>
    @csrf

    @if (! in_array(strtoupper($method), ['GET', 'POST']))
        @method($method)
    @endif

    {{ $slot }}
</form>
<<<FILE_END: resources/views/components/ui/form/form.blade.php>>>

/**
 * FILE: resources/views/components/ui/form/input.blade.php
 * TYPE: Blade View / Component
 * DOMAIN: View / UI
 * CORE: NO
 */

<<<FILE_START: resources/views/components/ui/form/input.blade.php>>>
@props([
    'type' => 'text',
    'name',
    'value' => null,
    'required' => false,
])

<x-ui.form.field
    :label="$attributes->get('label')"
    :name="$name"
    :required="$required"
>
    <div class="relative">
        {{-- Prefix --}}
        @isset($prefix)
            <div class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-3">
                {{ $prefix }}
            </div>
        @endisset

        <input
            id="{{ $name }}"
            name="{{ $name }}"
            type="{{ $type }}"
            value="{{ old($name, $value) }}"
            {{ $required ? 'required' : '' }}

            {{ $attributes->except(['label'])->merge()->class([
                'w-full rounded-lg border px-3 py-2 text-sm',
                'focus:outline-none focus:ring-2',
                'focus:ring-blue-500 border-gray-300',
                'border-red-500 focus:ring-red-500' => $errors->has($name),

                // Espaço para os enxertos
                'pl-10' => isset($prefix),
                'pr-10' => isset($suffix),
            ]) }}
        />

        {{-- Suffix --}}
        @isset($suffix)
            <div class="absolute inset-y-0 right-0 flex items-center pr-3">
                {{ $suffix }}
            </div>
        @endisset
    </div>
</x-ui.form.field>
<<<FILE_END: resources/views/components/ui/form/input.blade.php>>>

/**
 * FILE: resources/views/components/ui/form/password.blade.php
 * TYPE: Blade View / Component
 * DOMAIN: View / UI
 * CORE: NO
 */

<<<FILE_START: resources/views/components/ui/form/password.blade.php>>>
@props([
    'name',
    'label' => null,
    'required' => false,
])

<div x-data="{ show: false }">
    <x-ui.form.input
        name="{{ $name }}"
        type="password"
        :label="$label"
        :required="$required"

        x-bind:type="show ? 'text' : 'password'"
        autocomplete="current-password"
    >
        <x-slot:suffix>
            <button
                type="button"
                class="inline-flex h-8 w-8 items-center justify-center rounded-md text-gray-600 hover:bg-gray-100 hover:text-gray-800 focus:outline-none focus:ring-2 focus:ring-blue-500"
                x-on:click="show = !show"
                x-bind:aria-label="show ? 'Ocultar senha' : 'Mostrar senha'"
            >
                {{-- Eye --}}
                <svg x-show="!show" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                     fill="none" stroke="currentColor" stroke-width="2"
                     class="h-5 w-5">
                    <path d="M2 12s3.5-7 10-7 10 7 10 7-3.5 7-10 7S2 12 2 12z"/>
                    <circle cx="12" cy="12" r="3"/>
                </svg>

                {{-- Eye Off --}}
                <svg x-show="show" x-cloak xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                     fill="none" stroke="currentColor" stroke-width="2"
                     class="h-5 w-5">
                    <path d="M3 3l18 18"/>
                    <path d="M10.58 10.58A3 3 0 0 0 12 15a3 3 0 0 0 2.42-4.42"/>
                    <path d="M9.88 5.09A10.94 10.94 0 0 1 12 5c6.5 0 10 7 10 7a18.3 18.3 0 0 1-4.17 5.27"/>
                    <path d="M6.11 6.11C3.73 8.06 2 12 2 12s3.5 7 10 7c1.03 0 2-.14 2.9-.4"/>
                </svg>
            </button>
        </x-slot:suffix>
    </x-ui.form.input>
</div>
<<<FILE_END: resources/views/components/ui/form/password.blade.php>>>

/**
 * FILE: resources/views/components/ui/form/select.blade.php
 * TYPE: Blade View / Component
 * DOMAIN: View / UI
 * CORE: NO
 */

<<<FILE_START: resources/views/components/ui/form/select.blade.php>>>
@props([
    'name',
    'options' => [],
    'required' => false,
])

<x-ui.form.field
    :label="$attributes->get('label')"
    :name="$name"
    :required="$required"
>

<select
    id="{{ $name }}"
    name="{{ $name }}"
    {{ $required ? 'required' : '' }}

    {{ $attributes->except(['label'])->merge()->class([
        'rounded-lg border px-3 py-2 text-sm',
        'focus:outline-none focus:ring-2',
        'focus:ring-blue-500 border-gray-300',
        'border-red-500 focus:ring-red-500' => $errors->has($name),
    ]) }}
>

        @foreach($options as $value => $label)
            <option value="{{ $value }}" @selected(old($name) == $value)>
                {{ $label }}
            </option>
        @endforeach
    </select>

</x-ui.form.field>
<<<FILE_END: resources/views/components/ui/form/select.blade.php>>>

/**
 * FILE: resources/views/components/ui/form/textarea.blade.php
 * TYPE: Blade View / Component
 * DOMAIN: View / UI
 * CORE: NO
 */

<<<FILE_START: resources/views/components/ui/form/textarea.blade.php>>>
@props([
    'name',
    'rows' => 3,
    'required' => false,
])

<x-ui.form.field
    :label="$attributes->get('label')"
    :name="$name"
    :required="$required"
>

    <textarea
    id="{{ $name }}"
    name="{{ $name }}"
    rows="{{ $rows }}"
    {{ $required ? 'required' : '' }}

    {{ $attributes->except(['label'])->merge()->class([
        'rounded-lg border px-3 py-2 text-sm',
        'focus:outline-none focus:ring-2',
        'focus:ring-blue-500 border-gray-300',
        'border-red-500 focus:ring-red-500' => $errors->has($name),
    ]) }}
>{{ old($name) }}</textarea>


</x-ui.form.field>
<<<FILE_END: resources/views/components/ui/form/textarea.blade.php>>>

/**
 * FILE: resources/views/components/ui/modal/base.blade.php
 * TYPE: Blade View / Component
 * DOMAIN: View / UI
 * CORE: NO
 */

<<<FILE_START: resources/views/components/ui/modal/base.blade.php>>>
<div
    x-data="uiModal('{{ $id }}')"
    x-show="open"
    x-cloak
    class="fixed inset-0 z-50"
>
    {{-- OVERLAY (ÚNICO ELEMENTO CLICÁVEL FORA DO MODAL) --}}
    <div
        class="absolute inset-0 bg-black/40"
        x-on:click="closeModal()"
        aria-hidden="true"
    ></div>

    {{-- WRAPPER (NÃO RECEBE CLIQUES) --}}
    <div
        class="absolute inset-0 flex items-center justify-center p-4 pointer-events-none"
        x-on:keydown.escape.window="closeModal()"
    >
        {{-- CAIXA DO MODAL (RECEBE CLIQUES) --}}
        <div
            class="w-full max-w-md rounded-xl bg-white shadow-ui-card p-6 space-y-4 pointer-events-auto"
            x-trap.noscroll="open"
        >
            @if (!empty($title))
                <h2 class="text-lg font-semibold text-ui-modal-title">
                    {{ $title }}
                </h2>
            @endif

            {{ $slot }}
        </div>
    </div>
</div>
<<<FILE_END: resources/views/components/ui/modal/base.blade.php>>>

/**
 * FILE: resources/views/components/ui/modal/confirm.blade.php
 * TYPE: Blade View / Component
 * DOMAIN: View / UI
 * CORE: NO
 */

<<<FILE_START: resources/views/components/ui/modal/confirm.blade.php>>>
<x-ui.modal.base :id="$id" :title="$title">
    <p class="text-sm text-ui-modal-text">
        {{ $message }}
    </p>

    <div class="flex justify-end gap-2 pt-4">
        <x-ui.button.secondary x-on:click="closeModal()">
            Cancelar
        </x-ui.button.secondary>

        {{ $slot }}
    </div>
</x-ui.modal.base>
<<<FILE_END: resources/views/components/ui/modal/confirm.blade.php>>>

/**
 * FILE: resources/views/components/ui/modal/index.blade.php
 * TYPE: Blade View / Component
 * DOMAIN: View / UI
 * CORE: NO
 */

<<<FILE_START: resources/views/components/ui/modal/index.blade.php>>>
@props([
    'id',
])

<x-ui.modal.base :id="$id">

    {{-- Header --}}
    @isset($title)
        <div class="mb-4 text-lg font-semibold text-gray-800">
            {{ $title }}
        </div>
    @endisset

    {{-- Body --}}
    <div class="text-sm text-gray-700">
        {{ $slot }}
    </div>

    {{-- Footer --}}
    @isset($footer)
        <div class="mt-6 flex justify-end gap-3">
            {{ $footer }}
        </div>
    @endisset

</x-ui.modal.base>
<<<FILE_END: resources/views/components/ui/modal/index.blade.php>>>

/**
 * FILE: resources/views/components/ui/table/index.blade.php
 * TYPE: Blade View / Component
 * DOMAIN: View / UI
 * CORE: NO
 */

<<<FILE_START: resources/views/components/ui/table/index.blade.php>>>
<div class="relative overflow-x-auto rounded-xl border border-ui-nav-border">
    <table class="min-w-full border-collapse text-sm">
        <thead class="sticky top-0 z-10 bg-ui-app-bg border-b border-ui-nav-border">
            {{ $head }}
        </thead>

        <tbody class="divide-y divide-ui-nav-border">
            {{ $slot }}
        </tbody>
    </table>
</div>
<<<FILE_END: resources/views/components/ui/table/index.blade.php>>>

/**
 * FILE: resources/views/components/ui/table/pagination.blade.php
 * TYPE: Blade View / Component
 * DOMAIN: View / UI
 * CORE: NO
 */

<<<FILE_START: resources/views/components/ui/table/pagination.blade.php>>>
@props([
    'paginator',
])

@if ($paginator->hasPages())
    <div class="flex items-center justify-between px-2 py-3 border-t border-ui-table-border text-sm">

        {{-- Informações --}}
        <div class="text-ui-nav-text">
            Mostrando
            <span class="font-medium">{{ $paginator->firstItem() }}</span>
            a
            <span class="font-medium">{{ $paginator->lastItem() }}</span>
            de
            <span class="font-medium">{{ $paginator->total() }}</span>
            registros
        </div>

        {{-- Navegação --}}
        <div class="flex items-center gap-1">
            {{-- Anterior --}}
            @if ($paginator->onFirstPage())
                <span class="px-3 py-1 rounded-md text-ui-nav-text opacity-50">
                    Anterior
                </span>
            @else
                <a
                    href="{{ $paginator->previousPageUrl() }}"
                    class="px-3 py-1 rounded-md hover:bg-ui-nav-hover text-ui-nav-text"
                >
                    Anterior
                </a>
            @endif

            {{-- Próxima --}}
            @if ($paginator->hasMorePages())
                <a
                    href="{{ $paginator->nextPageUrl() }}"
                    class="px-3 py-1 rounded-md hover:bg-ui-nav-hover text-ui-nav-text"
                >
                    Próxima
                </a>
            @else
                <span class="px-3 py-1 rounded-md text-ui-nav-text opacity-50">
                    Próxima
                </span>
            @endif
        </div>
    </div>
@endif
<<<FILE_END: resources/views/components/ui/table/pagination.blade.php>>>

/**
 * FILE: resources/views/components/ui/table.blade.php
 * TYPE: Blade View / Component
 * DOMAIN: View / UI
 * CORE: NO
 */

<<<FILE_START: resources/views/components/ui/table.blade.php>>>
<div class="ui-table w-full overflow-x-auto">
    <table class="min-w-full border-collapse text-sm">
        <thead class="bg-ui-table-head">
            {{ $head ?? '' }}
        </thead>

        <tbody class="divide-y divide-ui-table-border">
            {{ $slot }}
        </tbody>
    </table>

    @if (isset($pagination))
        <div class="mt-3">
            {{ $pagination }}
        </div>
    @endif
</div>
<<<FILE_END: resources/views/components/ui/table.blade.php>>>

/**
 * FILE: resources/views/components/ui/theme/switch.blade.php
 * TYPE: Blade View / Component
 * DOMAIN: View / UI
 * CORE: NO
 */

<<<FILE_START: resources/views/components/ui/theme/switch.blade.php>>>
{{-- resources/views/components/ui/theme/switch.blade.php --}}
@props([
    'visualProfile' => 'light',
    'endpoint' => null,
])

<div
    x-data="themeSwitch('{{ $visualProfile }}', '{{ $endpoint }}')"
    class="relative"
>
    <button
        type="button"
        class="inline-flex items-center gap-2 rounded-lg border border-ui-nav-border bg-ui-nav-bg px-3 py-2 text-xs text-ui-nav-text hover:bg-ui-nav-hover"
        x-on:click="open = !open"
        aria-label="Alterar perfil visual"
    >
        <span class="font-medium">
            Perfil
        </span>

        <span class="opacity-80" x-text="options.find(o => o.value === current)?.label ?? current"></span>

        <span class="opacity-70">▾</span>
    </button>

    <div
        x-show="open"
        x-cloak
        x-transition.opacity
        class="absolute right-0 mt-2 w-52 rounded-xl border border-ui-nav-border bg-ui-nav-bg shadow-ui-card p-2 z-50"
        @click.outside="open = false"
    >
        <template x-for="opt in options" :key="opt.value">
            <button
                type="button"
                class="w-full text-left rounded-lg px-3 py-2 text-sm text-ui-nav-text hover:bg-ui-nav-hover"
                x-on:click="select(opt.value)"
            >
                <span x-text="opt.label"></span>
            </button>
        </template>

        @if (! $endpoint)
            <div class="mt-2 rounded-lg border border-ui-nav-border bg-ui-nav-hover px-3 py-2 text-[11px] text-ui-nav-text">
                Endpoint do perfil visual não configurado para este app.
            </div>
        @endif
    </div>
</div>
<<<FILE_END: resources/views/components/ui/theme/switch.blade.php>>>

/**
 * FILE: resources/views/components/ui/toast/container.blade.php
 * TYPE: Blade View / Component
 * DOMAIN: View / UI
 * CORE: NO
 */

<<<FILE_START: resources/views/components/ui/toast/container.blade.php>>>
<div
    x-data="uiToast"
    class="fixed top-4 right-4 z-[9999] space-y-2"
>
    <template x-for="toast in toasts" :key="toast.id">
        <div
            x-show="toast.visible"
            x-transition.opacity.duration.300ms
            :data-toast-type="toast.type"
            class="ui-toast min-w-[260px] rounded-lg px-4 py-3 shadow-ui-card text-sm"
        >
            <div class="flex items-start justify-between gap-3">
                <span x-text="toast.message"></span>

                <button
                    type="button"
                    class="opacity-70 hover:opacity-100"
                    x-on:click="remove(toast.id)"
                    aria-label="Fechar"
                >
                    ✕
                </button>
            </div>
        </div>
    </template>
</div>
<<<FILE_END: resources/views/components/ui/toast/container.blade.php>>>

/**
 * FILE: resources/views/components/ui/upload/index.blade.php
 * TYPE: Blade View / Component
 * DOMAIN: View / UI
 * CORE: NO
 */

<<<FILE_START: resources/views/components/ui/upload/index.blade.php>>>
{{-- resources/views/components/ui/upload/index.blade.php --}}

@props([
    'name',
    'label' => 'Upload de arquivo',
    'accept' => '*',
    'maxSize' => 5,
    'uploadUrl' => route('upload.store'),
])

<div
    x-data="uiUpload({
        maxSize: {{ $maxSize }},
        accept: '{{ $accept }}',
        uploadUrl: '{{ $uploadUrl }}'
    })"
    class="space-y-3"
>

    {{-- Label institucional --}}
    <label class="block text-sm font-medium">
        {{ $label }}
    </label>

    {{-- Seletor customizado --}}
    <label
        class="flex items-center justify-between gap-3 px-3 py-2 rounded-lg border border-ui-nav-border bg-ui-app-bg cursor-pointer hover:bg-ui-nav-hover transition"
    >
        <span class="text-sm">
            <span x-show="!fileName">Escolher arquivo</span>
            <span x-show="fileName" x-text="fileName"></span>
        </span>

        <input
            type="file"
            name="{{ $name }}"
            class="hidden"
            :accept="accept"
            x-on:change="handleFile($event)"
        />
    </label>

    {{-- Preview nome --}}
    <template x-if="fileName">
        <div class="text-xs opacity-80">
            <strong>Arquivo selecionado:</strong>
            <span x-text="fileName"></span>
        </div>
    </template>

    {{-- Preview imagem --}}
    <template x-if="previewUrl">
        <div>
            <img
                :src="previewUrl"
                class="max-h-40 rounded border border-ui-nav-border"
            />
        </div>
    </template>

    {{-- Barra de progresso --}}
    <template x-if="state === 'loading'">
        <div class="w-full bg-ui-nav-border rounded h-2 overflow-hidden">
            <div
                class="h-2 bg-ui-primary transition-all duration-300"
                :style="'width: ' + progress + '%'"
            ></div>
        </div>
    </template>

    {{-- Erro --}}
    <template x-if="state === 'error'">
        <div class="text-sm text-ui-danger">
            <span x-text="errorMessage"></span>
        </div>
    </template>

    {{-- Ações --}}
    <div class="flex gap-2">
        <x-ui.button.primary
            type="button"
            x-on:click="upload()"
            x-bind:disabled="state !== 'ready'"
        >
            Enviar
        </x-ui.button.primary>

        <x-ui.button.secondary
            type="button"
            x-on:click="reset()"
            x-show="fileName"
        >
            Limpar
        </x-ui.button.secondary>
    </div>

</div>
<<<FILE_END: resources/views/components/ui/upload/index.blade.php>>>

/**
 * FILE: resources/views/governanca/auth/forgot-password.blade.php
 * TYPE: Blade View / Component
 * DOMAIN: View / UI
 * CORE: NO
 */

<<<FILE_START: resources/views/governanca/auth/forgot-password.blade.php>>>
@extends('layouts.app')

@section('content')
<div class="auth-container">

    <h1>Recuperar senha</h1>

    <p>Informe seu e-mail para receber o link de redefinição de senha.</p>

    @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif

    @if ($errors->any())
        <div class="alert alert-error">
            {{ $errors->first('email') }}
        </div>
    @endif

    <form method="POST" action="{{ route('governanca.password.email') }}">
        @csrf

        <div class="form-group">
            <label for="email">E-mail</label>
            <input
                id="email"
                type="email"
                name="email"
                value="{{ old('email') }}"
                required
                autofocus
            >
        </div>

        <div class="form-actions">
            <button type="submit">
                Enviar link de recuperação
            </button>
        </div>
    </form>

    <div class="auth-links">
        <a href="{{ route('governanca.login') }}">Voltar para o login</a>
    </div>

</div>
@endsection
<<<FILE_END: resources/views/governanca/auth/forgot-password.blade.php>>>

/**
 * FILE: resources/views/governanca/auth/login.blade.php
 * TYPE: Blade View / Component
 * DOMAIN: View / UI
 * CORE: NO
 */

<<<FILE_START: resources/views/governanca/auth/login.blade.php>>>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="utf-8">
    <title>Login — Governança</title>

    {{-- CSS funcional global --}}
    @vite('resources/css/app.css')

    {{-- CSS visual exclusivo da Governança --}}
    @vite('resources/css/governanca/auth/login.css')

</head>
<body class="auth auth-governanca">

    <main class="auth-container">
        <section class="auth-card">
            <h1>Governança</h1>
            <p>Acesso administrativo</p>

            @if ($errors->any())
                <div class="auth-error">
                    {{ __('auth.failed') }}
                </div>
            @endif

            <form method="POST" action="{{ route('governanca.login.submit') }}" novalidate>
                @csrf

                <div class="field">
                    <label for="email">E-mail</label>
                    <input
                        id="email"
                        type="email"
                        name="email"
                        value="{{ old('email') }}"
                        required
                        autofocus
                    >
                </div>

                <div class="field">
                    <label for="password">Senha</label>
                    <input
                        id="password"
                        type="password"
                        name="password"
                        required
                    >
                </div>

                <button type="submit" class="btn-primary">
                    Entrar
                </button>
            </form>
        </section>
    </main>

    {{-- JS funcional global --}}
    @vite('resources/js/app.js')
</body>
</html>
<<<FILE_END: resources/views/governanca/auth/login.blade.php>>>

/**
 * FILE: resources/views/governanca/auth/reset-password.blade.php
 * TYPE: Blade View / Component
 * DOMAIN: View / UI
 * CORE: NO
 */

<<<FILE_START: resources/views/governanca/auth/reset-password.blade.php>>>
@extends('layouts.app')

@section('content')
<div class="auth-container">

    <h1>Redefinir senha</h1>

    @if ($errors->any())
        <div class="alert alert-error">
            {{ $errors->first() }}
        </div>
    @endif

    <form method="POST" action="{{ route('governanca.password.update') }}">
        @csrf

        <input type="hidden" name="token" value="{{ $token }}">
        <input type="hidden" name="email" value="{{ $email }}">

        <div class="form-group">
            <label for="password">Nova senha</label>
            <input
                id="password"
                type="password"
                name="password"
                required
            >
        </div>

        <div class="form-group">
            <label for="password_confirmation">Confirmar nova senha</label>
            <input
                id="password_confirmation"
                type="password"
                name="password_confirmation"
                required
            >
        </div>

        <div class="form-actions">
            <button type="submit">
                Redefinir senha
            </button>
        </div>
    </form>

</div>
@endsection
<<<FILE_END: resources/views/governanca/auth/reset-password.blade.php>>>

/**
 * FILE: resources/views/governanca/dashboard/index.blade.php
 * TYPE: Blade View / Component
 * DOMAIN: View / UI
 * CORE: NO
 */

<<<FILE_START: resources/views/governanca/dashboard/index.blade.php>>>
@extends('layouts.app')

@section('content')
@php
    use Illuminate\Pagination\LengthAwarePaginator;

    $items = collect(range(1, 37))->map(function ($i) {
        return (object) [
            'id' => $i,
            'name' => "Item {$i}",
            'status' => $i % 3 === 0 ? 'inactive' : 'active',
            'created_at' => now()->subDays($i)->format('Y-m-d'),
        ];
    });

    $perPage = 10;
    $page = (int) request('page', 1);
    $slice = $items->slice(($page - 1) * $perPage, $perPage)->values();

    $paginator = new LengthAwarePaginator(
        $slice,
        $items->count(),
        $perPage,
        $page,
        [
            'path' => request()->url(),
            'query' => request()->query(),
        ]
    );
@endphp

<div class="space-y-8"
    x-data="{
        ping: null,

        toast(type) {
            if (!globalThis.ui?.toast) return;
            const msg = `Toast (${type}) @ ${new Date().toLocaleTimeString()}`;
            if (type === 'success') ui.toast.success(msg);
            if (type === 'error') ui.toast.error(msg);
            if (type === 'warning') ui.toast.warning(msg);
            if (type === 'info') ui.toast.info(msg);
        },

        loader(ms = 1200) {
            if (!globalThis.ui?.loader) return;
            ui.loader.show();
            setTimeout(() => ui.loader.hide(), ms);
        },

        openModal(id) {
            if (!globalThis.ui?.modal) return;
            ui.modal.open(id);
        },

        closeModal(id) {
            if (!globalThis.ui?.modal) return;
            ui.modal.close(id);
        },

        init() {
            this.ping = 'OK';
        }
    }"
>

    {{-- =========================================================
         1) Feedback & Ações Globais
    ========================================================= --}}
    <section class="rounded-xl border border-ui-nav-border bg-ui-app-bg p-5 shadow-ui-card space-y-4">
        <h2 class="text-lg font-semibold">1) Feedback & Ações Globais</h2>

        <div class="flex flex-wrap gap-2">
            <x-ui.button.primary x-on:click="toast('info')">Toast Info</x-ui.button.primary>
            <x-ui.button.secondary x-on:click="toast('success')">Toast Success</x-ui.button.secondary>
            <x-ui.button.ghost x-on:click="toast('warning')">Toast Warning</x-ui.button.ghost>
            <x-ui.button.danger x-on:click="toast('error')">Toast Error</x-ui.button.danger>
        </div>
    </section>

    {{-- =========================================================
         2) Buttons System
    ========================================================= --}}
    <section class="rounded-xl border border-ui-nav-border bg-ui-app-bg p-5 shadow-ui-card space-y-4">
        <h2 class="text-lg font-semibold">2) Buttons System</h2>

        <div class="flex flex-wrap gap-2">
            <x-ui.button.primary>Primary</x-ui.button.primary>
            <x-ui.button.secondary>Secondary</x-ui.button.secondary>
            <x-ui.button.danger>Danger</x-ui.button.danger>
            <x-ui.button.ghost>Ghost</x-ui.button.ghost>
        </div>
    </section>

    {{-- =========================================================
         3) Forms System
    ========================================================= --}}
    <section class="rounded-xl border border-ui-nav-border bg-ui-app-bg p-5 shadow-ui-card space-y-4">
        <h2 class="text-lg font-semibold">3) Forms System</h2>

        <x-ui.form.input name="nome" label="Nome" />
        <x-ui.form.password name="senha" label="Senha" />
    </section>

    {{-- =========================================================
         4) Tables System
    ========================================================= --}}
    <section class="rounded-xl border border-ui-nav-border bg-ui-app-bg p-5 shadow-ui-card space-y-4">
        <h2 class="text-lg font-semibold">4) Tables System</h2>

        <x-ui.table>
            <x-slot:head>
                <tr>
                    <th class="px-3 py-2 text-left text-xs font-medium uppercase opacity-70">ID</th>
                    <th class="px-3 py-2 text-left text-xs font-medium uppercase opacity-70">Nome</th>
                </tr>
            </x-slot:head>

            @foreach ($paginator as $row)
                <tr>
                    <td class="px-3 py-2">{{ $row->id }}</td>
                    <td class="px-3 py-2">{{ $row->name }}</td>
                </tr>
            @endforeach
        </x-ui.table>

        <x-ui.table.pagination :paginator="$paginator" />
    </section>

    {{-- =========================================================
         5) Tokens & Zonas
    ========================================================= --}}
    <section class="rounded-xl border border-ui-nav-border bg-ui-app-bg p-5 shadow-ui-card space-y-4">
        <h2 class="text-lg font-semibold">5) Tokens & Zonas</h2>
        <x-ui.button.secondary x-on:click="ui.toast.info('Verifique visual')">
            Validar visual
        </x-ui.button.secondary>
    </section>

    {{-- =========================================================
         6) Upload System
    ========================================================= --}}
    <section class="rounded-xl border border-ui-nav-border bg-ui-app-bg p-5 shadow-ui-card space-y-4">
        <h2 class="text-lg font-semibold">6) Upload System</h2>

        <div class="grid gap-6 md:grid-cols-2">

            <div class="space-y-2">
                <div class="text-sm font-medium">Upload de Imagem (max 3MB)</div>
                <x-ui.upload
                    name="arquivo_imagem"
                    label="Selecionar imagem"
                    accept="image/*"
                    :maxSize="3"
                />
            </div>

            <div class="space-y-2">
                <div class="text-sm font-medium">Upload Genérico (max 5MB)</div>
                <x-ui.upload
                    name="arquivo_generico"
                    label="Selecionar arquivo"
                    accept="*"
                    :maxSize="5"
                />
            </div>

        </div>
    </section>

</div>
@endsection
<<<FILE_END: resources/views/governanca/dashboard/index.blade.php>>>

/**
 * FILE: resources/views/layouts/app.blade.php
 * TYPE: Blade View / Component
 * DOMAIN: View / UI
 * CORE: YES
 */

>>> CORE_FILE <<<
<<<FILE_START: resources/views/layouts/app.blade.php>>>
{{-- resources/views/layouts/app.blade.php --}}
@php
    // Perfil visual vindo do provider
    $visualProfile = $visualProfile ?? 'light';

    // Defaults
    $appTheme = 'light';
    $navigationTheme = 'light';
    $contentTheme = 'light';

    switch ($visualProfile) {
        case 'dark':
            $appTheme = 'dark';
            $navigationTheme = 'dark';
            $contentTheme = 'dark';
            break;

        case 'mixed-nav-dark':
            $appTheme = 'light';
            $navigationTheme = 'dark';
            $contentTheme = 'light';
            break;

        case 'mixed-content-dark':
            $appTheme = 'dark';
            $navigationTheme = 'light';
            $contentTheme = 'dark';
            break;
    }
@endphp

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ $title ?? 'Sistema' }}</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body
    x-data
    data-zone="app"
    data-theme="{{ $appTheme }}"
    class="min-h-screen bg-ui-app-bg text-ui-app-text"
>
    {{-- Loader global --}}
    @include('partials.loader')

    {{-- Mobile menu (drawer) --}}
    @include('layouts.partials.mobile-menu')

    <div class="flex min-h-screen">
        {{-- Sidebar (desktop) --}}
        <aside
            data-zone="navigation"
            data-theme="{{ $navigationTheme }}"
            class="hidden lg:block w-64 shrink-0"
        >
            @include('layouts.partials.sidebar')
        </aside>

        {{-- Área principal --}}
        <div class="flex-1 flex flex-col">
            {{-- Topbar --}}
            @include('layouts.partials.topbar')

            {{-- Breadcrumb --}}
            @include('layouts.partials.breadcrumb')

            {{-- Alerts globais (somente sistema interno) --}}
            @include('partials.alerts')

            {{-- Conteúdo --}}
            <main
                data-zone="content"
                data-theme="{{ $contentTheme }}"
                class="flex-1 p-4 bg-ui-content-bg text-ui-content-text"
            >
                {{ $slot ?? $content ?? '' }}
                @yield('content')
            </main>
        </div>
    </div>

    <x-ui.toast.container />
</body>
</html>
<<<FILE_END: resources/views/layouts/app.blade.php>>>

/**
 * FILE: resources/views/layouts/auth.blade.php
 * TYPE: Blade View / Component
 * DOMAIN: View / UI
 * CORE: YES
 */

>>> CORE_FILE <<<
<<<FILE_START: resources/views/layouts/auth.blade.php>>>
{{-- resources/views/layouts/auth.blade.php --}}
@php
    // Perfil visual vindo do provider (quando autenticado) ou default
    $visualProfile = $visualProfile ?? 'light';

    // Resolve por zona (canônico)
    $authTheme = $uiZones['auth'] ?? 'light';
@endphp

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ $title ?? 'Login' }}</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body
    x-data
    data-zone="auth"
    data-theme="{{ $authTheme }}"
    class="min-h-screen bg-ui-auth-bg text-ui-auth-text"
>
    {{-- Loader global --}}
    @include('partials.loader')

    <main class="min-h-screen flex items-center justify-center p-4">
        @yield('content')
    </main>
</body>
</html>
<<<FILE_END: resources/views/layouts/auth.blade.php>>>

/**
 * FILE: resources/views/layouts/partials/breadcrumb.blade.php
 * TYPE: Blade View / Component
 * DOMAIN: View / UI
 * CORE: NO
 */

<<<FILE_START: resources/views/layouts/partials/breadcrumb.blade.php>>>
@if (isset($breadcrumb) && is_array($breadcrumb))
    <nav
        class="bg-ui-app-bg border-b border-ui-nav-border px-4 py-2"
        aria-label="Breadcrumb"
    >
        <ol class="flex items-center gap-2 text-sm text-ui-nav-text">
            @foreach ($breadcrumb as $index => $item)
                <li class="flex items-center gap-2">
                    @if ($index > 0)
                        <span class="opacity-60">/</span>
                    @endif

                    @if (isset($item['url']))
                        <a
                            href="{{ $item['url'] }}"
                            class="hover:underline text-ui-nav-text"
                        >
                            {{ $item['label'] }}
                        </a>
                    @else
                        <span class="font-medium text-ui-nav-title">
                            {{ $item['label'] }}
                        </span>
                    @endif
                </li>
            @endforeach
        </ol>
    </nav>
@endif
<<<FILE_END: resources/views/layouts/partials/breadcrumb.blade.php>>>

/**
 * FILE: resources/views/layouts/partials/mobile-menu.blade.php
 * TYPE: Blade View / Component
 * DOMAIN: View / UI
 * CORE: NO
 */

<<<FILE_START: resources/views/layouts/partials/mobile-menu.blade.php>>>
<div
    x-data="{ open: false }"
    x-show="open"
    x-on:ui-mobile-open.window="open = true"
    x-on:ui-mobile-close.window="open = false"
    x-cloak
    class="fixed inset-0 z-50 lg:hidden"
>
    {{-- Overlay --}}
    <div
        class="absolute inset-0 bg-black/40"
        x-on:click="open = false"
        aria-hidden="true"
    ></div>

    {{-- Drawer --}}
    <aside
        class="absolute inset-y-0 left-0 w-64 bg-ui-nav-bg border-r border-ui-nav-border p-4"
        x-on:keydown.escape.window="open = false"
    >
        @include('layouts.partials.sidebar')
    </aside>
</div>
<<<FILE_END: resources/views/layouts/partials/mobile-menu.blade.php>>>

/**
 * FILE: resources/views/layouts/partials/sidebar.blade.php
 * TYPE: Blade View / Component
 * DOMAIN: View / UI
 * CORE: NO
 */

<<<FILE_START: resources/views/layouts/partials/sidebar.blade.php>>>
<nav class="h-full bg-ui-nav-bg border-r border-ui-nav-border p-4">

    <nav class="space-y-6">

    </nav>


    <div class="space-y-6">

        {{-- Marca / App --}}
        <div class="text-lg font-semibold text-ui-nav-title">
            {{ config('app.name', 'ERP') }}
        </div>

        {{-- Navegação --}}
        <ul class="space-y-1">
            <li>
                <a
                    href="{{ route('governanca.dashboard') }}"
                    class="block rounded-lg px-3 py-2 text-sm
                        {{ request()->routeIs('governanca.dashboard')
                            ? 'bg-ui-nav-active text-ui-nav-active-text'
                            : 'text-ui-nav-text hover:bg-ui-nav-hover' }}"
                >
                    Dashboard
                </a>
            </li>

            <li>
                <a
                    href="#"
                    class="block rounded-lg px-3 py-2 text-sm
                        text-ui-nav-text hover:bg-ui-nav-hover"
                >
                    Usuários
                </a>
            </li>

            <li>
                <a
                    href="#"
                    class="block rounded-lg px-3 py-2 text-sm
                        text-ui-nav-text hover:bg-ui-nav-hover"
                >
                    Configurações
                </a>
            </li>
        </ul>

    </div>
</nav>
<<<FILE_END: resources/views/layouts/partials/sidebar.blade.php>>>

/**
 * FILE: resources/views/layouts/partials/topbar.blade.php
 * TYPE: Blade View / Component
 * DOMAIN: View / UI
 * CORE: NO
 */

<<<FILE_START: resources/views/layouts/partials/topbar.blade.php>>>
{{-- resources/views/layouts/partials/topbar.blade.php --}}
@php
    $appCode = session('current_app_code', 'governanca');

    // tenta resolver a rota do visual-profile por app (ex.: governanca.ui.visual-profile)
    $visualProfileEndpoint = null;

    try {
        $visualProfileEndpoint = route($appCode . '.ui.visual-profile');
    } catch (\Throwable $e) {
        // fallback canônico (caso só Governança exista por enquanto)
        try {
            $visualProfileEndpoint = route('governanca.ui.visual-profile');
        } catch (\Throwable $e2) {
            $visualProfileEndpoint = null;
        }
    }
@endphp

<header
    data-zone="navigation"
    data-theme="{{ $navigationTheme }}"
    class="h-14 bg-ui-nav-bg border-b border-ui-nav-border flex items-center px-4"
>
    <div class="flex items-center justify-between w-full">

        {{-- Esquerda: botão mobile + título --}}
        <div class="flex items-center gap-3">
            {{-- Botão do menu mobile --}}
            <button
                type="button"
                class="lg:hidden rounded-lg p-2 hover:bg-ui-nav-hover"
                x-on:click="window.dispatchEvent(new CustomEvent('ui-mobile-open'))"

                aria-label="Abrir menu"
            >
                ☰
            </button>

            {{-- Título da página --}}
            <h1 class="text-sm font-semibold text-ui-nav-title">
                {{ $title ?? 'Dashboard' }}
            </h1>
        </div>

        {{-- Direita: ações --}}
        <div class="flex items-center gap-3">

            {{-- Seletor de perfil visual --}}
            <x-ui.theme.switch
                :visual-profile="$visualProfile"
                :endpoint="$visualProfileEndpoint"
            />

            <span class="text-sm text-ui-nav-text">
                {{ auth()->user()->name ?? 'Usuário' }}
            </span>

            <button
                type="button"
                class="rounded-full h-8 w-8 bg-ui-nav-hover flex items-center justify-center text-xs"
                aria-label="Usuário"
            >
                U
            </button>
        </div>

    </div>
</header>
<<<FILE_END: resources/views/layouts/partials/topbar.blade.php>>>

/**
 * FILE: resources/views/partials/alerts.blade.php
 * TYPE: Blade View / Component
 * DOMAIN: View / UI
 * CORE: NO
 */

<<<FILE_START: resources/views/partials/alerts.blade.php>>>
<div
    x-data="{
        show: true,
        close() {
            this.show = false
        }
    }"
>

    {{-- Success --}}
    @if (session('success'))
        <div
            x-show="show"
            x-transition
            class="mx-auto mt-4 flex max-w-lg items-start gap-3 rounded-lg border border-emerald-200 bg-emerald-50 px-4 py-3 text-emerald-800"
        >
            <div class="font-bold">✓</div>

            <div class="flex-1">
                {{ session('success') }}
            </div>

            <button @click="close" class="text-emerald-700 hover:opacity-70">
                ✕
            </button>
        </div>
    @endif


    {{-- Error --}}
    @if (session('error'))
        <div
            x-show="show"
            x-transition
            class="mx-auto mt-4 flex max-w-lg items-start gap-3 rounded-lg border border-red-200 bg-red-50 px-4 py-3 text-red-800"
        >
            <div class="font-bold">!</div>

            <div class="flex-1">
                {{ session('error') }}
            </div>

            <button @click="close" class="text-red-700 hover:opacity-70">
                ✕
            </button>
        </div>
    @endif


    {{-- Validation Errors --}}
    @if ($errors->any())
        <div
            x-show="show"
            x-transition
            class="mx-auto mt-4 max-w-lg rounded-lg border border-red-200 bg-red-50 px-4 py-3 text-red-800"
        >
            <ul class="list-disc pl-5">
                @foreach ($errors->all() as $e)
                    <li>{{ $e }}</li>
                @endforeach
            </ul>

            <button
                @click="close"
                class="mt-2 text-sm text-red-700 hover:opacity-70"
            >
                Fechar
            </button>
        </div>
    @endif


</div>
<<<FILE_END: resources/views/partials/alerts.blade.php>>>

/**
 * FILE: resources/views/partials/loader.blade.php
 * TYPE: Blade View / Component
 * DOMAIN: View / UI
 * CORE: NO
 */

<<<FILE_START: resources/views/partials/loader.blade.php>>>
<div
    x-data="{ open: false }"

    x-on:ui-loader-show.window="open = true"
    x-on:ui-loader-hide.window="open = false"

    x-show="open"
    x-transition.opacity

    class="fixed inset-0 z-[9999] flex items-center justify-center bg-black/60 backdrop-blur-sm"
    style="display:none"
>
    <div class="flex flex-col items-center gap-3">

        <!-- Spinner -->
        <div
            class="h-10 w-10 animate-spin rounded-full border-4 border-white/30 border-t-white"
        ></div>

        <!-- Texto -->
        <span class="text-sm text-white/80">
            Processando...
        </span>

    </div>
</div>
<<<FILE_END: resources/views/partials/loader.blade.php>>>

/**
 * FILE: resources/views/system/auth/forgot-password.blade.php
 * TYPE: Blade View / Component
 * DOMAIN: View / UI
 * CORE: NO
 */

<<<FILE_START: resources/views/system/auth/forgot-password.blade.php>>>
@extends('layouts.app')

@section('content')
<div class="auth-container">

    <h1>Recuperar senha</h1>

    <p>Informe seu e-mail para receber o link de redefinição de senha.</p>

    @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif

    @if ($errors->any())
        <div class="alert alert-error">
            {{ $errors->first('email') }}
        </div>
    @endif

    <form method="POST" action="{{ route('system.password.email') }}">
        @csrf

        <div class="form-group">
            <label for="email">E-mail</label>
            <input
                id="email"
                type="email"
                name="email"
                value="{{ old('email') }}"
                required
                autofocus
            >
        </div>

        <div class="form-actions">
            <button type="submit">
                Enviar link de recuperação
            </button>
        </div>
    </form>

    <div class="auth-links">
        <a href="{{ route('system.login') }}">Voltar para o login</a>
    </div>

</div>
@endsection
<<<FILE_END: resources/views/system/auth/forgot-password.blade.php>>>

/**
 * FILE: resources/views/system/auth/login.blade.php
 * TYPE: Blade View / Component
 * DOMAIN: View / UI
 * CORE: NO
 */

<<<FILE_START: resources/views/system/auth/login.blade.php>>>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="utf-8">
    <title>Login — System</title>

    {{-- CSS funcional global --}}
    @vite('resources/css/app.css')

    {{-- CSS visual exclusivo da System --}}
    @vite('resources/css/system/auth/login.css')

</head>
<body class="auth auth-system">

    <main class="auth-container">
        <section class="auth-card">
            <h1>System</h1>
            <p>Acesso administrativo</p>

            @if ($errors->any())
                <div class="auth-error">
                    {{ __('auth.failed') }}
                </div>
            @endif

            <form method="POST" action="{{ route('system.login.submit') }}" novalidate>
                @csrf

                <div class="field">
                    <label for="email">E-mail</label>
                    <input
                        id="email"
                        type="email"
                        name="email"
                        value="{{ old('email') }}"
                        required
                        autofocus
                    >
                </div>

                <div class="field">
                    <label for="password">Senha</label>
                    <input
                        id="password"
                        type="password"
                        name="password"
                        required
                    >
                </div>

                <button type="submit" class="btn-primary">
                    Entrar
                </button>
            </form>
        </section>
    </main>

    {{-- JS funcional global --}}
    @vite('resources/js/app.js')
</body>
</html>
<<<FILE_END: resources/views/system/auth/login.blade.php>>>

/**
 * FILE: resources/views/system/auth/reset-password.blade.php
 * TYPE: Blade View / Component
 * DOMAIN: View / UI
 * CORE: NO
 */

<<<FILE_START: resources/views/system/auth/reset-password.blade.php>>>
@extends('layouts.app')

@section('content')
<div class="auth-container">

    <h1>Redefinir senha</h1>

    @if ($errors->any())
        <div class="alert alert-error">
            {{ $errors->first() }}
        </div>
    @endif

    <form method="POST" action="{{ route('system.password.update') }}">
        @csrf

        <input type="hidden" name="token" value="{{ $token }}">
        <input type="hidden" name="email" value="{{ $email }}">

        <div class="form-group">
            <label for="password">Nova senha</label>
            <input
                id="password"
                type="password"
                name="password"
                required
            >
        </div>

        <div class="form-group">
            <label for="password_confirmation">Confirmar nova senha</label>
            <input
                id="password_confirmation"
                type="password"
                name="password_confirmation"
                required
            >
        </div>

        <div class="form-actions">
            <button type="submit">
                Redefinir senha
            </button>
        </div>
    </form>

</div>
@endsection
<<<FILE_END: resources/views/system/auth/reset-password.blade.php>>>

/**
 * FILE: resources/views/system/dashboard/index.blade.php
 * TYPE: Blade View / Component
 * DOMAIN: View / UI
 * CORE: NO
 */

<<<FILE_START: resources/views/system/dashboard/index.blade.php>>>
@extends('layouts.app')

@section('content')
    <h1>Dashboard do System</h1>

    <p>App atual: {{ $app->label }}</p>
@endsection
<<<FILE_END: resources/views/system/dashboard/index.blade.php>>>

/**
 * FILE: resources/views/vendas/auth/forgot-password.blade.php
 * TYPE: Blade View / Component
 * DOMAIN: View / UI
 * CORE: NO
 */

<<<FILE_START: resources/views/vendas/auth/forgot-password.blade.php>>>
@extends('layouts.app')

@section('content')
<div class="auth-container">

    <h1>Recuperar senha</h1>

    <p>Informe seu e-mail para receber o link de redefinição de senha.</p>

    @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif

    @if ($errors->any())
        <div class="alert alert-error">
            {{ $errors->first('email') }}
        </div>
    @endif

    <form method="POST" action="{{ route('vendas.password.email') }}">
        @csrf

        <div class="form-group">
            <label for="email">E-mail</label>
            <input
                id="email"
                type="email"
                name="email"
                value="{{ old('email') }}"
                required
                autofocus
            >
        </div>

        <div class="form-actions">
            <button type="submit">
                Enviar link de recuperação
            </button>
        </div>
    </form>

    <div class="auth-links">
        <a href="{{ route('vendas.login') }}">Voltar para o login</a>
    </div>

</div>
@endsection
<<<FILE_END: resources/views/vendas/auth/forgot-password.blade.php>>>

/**
 * FILE: resources/views/vendas/auth/login.blade.php
 * TYPE: Blade View / Component
 * DOMAIN: View / UI
 * CORE: NO
 */

<<<FILE_START: resources/views/vendas/auth/login.blade.php>>>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="utf-8">
    <title>Login — Vendas</title>

    {{-- CSS funcional global --}}
    @vite('resources/css/app.css')

    {{-- CSS visual exclusivo da Vendas --}}
    @vite('resources/css/vendas/auth/login.css')

</head>
<body class="auth auth-vendas">
    <main class="auth-container">
        <section class="auth-card">
            <h1>Vendas</h1>
            <p>Acesso administrativo</p>

            @if ($errors->any())
                <div class="auth-error">
                    {{ __('auth.failed') }}
                </div>
            @endif

            <form method="POST" action="{{ route('vendas.login.submit') }}" novalidate>
                @csrf

                <div class="field">
                    <label for="email">E-mail</label>
                    <input
                        id="email"
                        type="email"
                        name="email"
                        value="{{ old('email') }}"
                        required
                        autofocus
                    >
                </div>

                <div class="field">
                    <label for="password">Senha</label>
                    <input
                        id="password"
                        type="password"
                        name="password"
                        required
                    >
                </div>

                <button type="submit" class="btn-primary">
                    Entrar
                </button>
            </form>
        </section>
    </main>

    {{-- JS funcional global --}}
    @vite('resources/js/app.js')
</body>
</html>
<<<FILE_END: resources/views/vendas/auth/login.blade.php>>>

/**
 * FILE: resources/views/vendas/auth/reset-password.blade.php
 * TYPE: Blade View / Component
 * DOMAIN: View / UI
 * CORE: NO
 */

<<<FILE_START: resources/views/vendas/auth/reset-password.blade.php>>>
@extends('layouts.app')

@section('content')
<div class="auth-container">

    <h1>Redefinir senha</h1>

    @if ($errors->any())
        <div class="alert alert-error">
            {{ $errors->first() }}
        </div>
    @endif

    <form method="POST" action="{{ route('vendas.password.update') }}">
        @csrf

        <input type="hidden" name="token" value="{{ $token }}">
        <input type="hidden" name="email" value="{{ $email }}">

        <div class="form-group">
            <label for="password">Nova senha</label>
            <input
                id="password"
                type="password"
                name="password"
                required
            >
        </div>

        <div class="form-group">
            <label for="password_confirmation">Confirmar nova senha</label>
            <input
                id="password_confirmation"
                type="password"
                name="password_confirmation"
                required
            >
        </div>

        <div class="form-actions">
            <button type="submit">
                Redefinir senha
            </button>
        </div>
    </form>

</div>
@endsection
<<<FILE_END: resources/views/vendas/auth/reset-password.blade.php>>>

/**
 * FILE: resources/views/vendas/dashboard/index.blade.php
 * TYPE: Blade View / Component
 * DOMAIN: View / UI
 * CORE: NO
 */

<<<FILE_START: resources/views/vendas/dashboard/index.blade.php>>>
@extends('layouts.app')

@section('content')
    <h1>Dashboard do Vendas</h1>

    <p>App atual: {{ $app->label }}</p>
@endsection
<<<FILE_END: resources/views/vendas/dashboard/index.blade.php>>>


##################################################
### SECTION: ROUTES ###
##################################################

/**
 * FILE: routes/api.php
 * TYPE: PHP Source
 * DOMAIN: Routing
 * CORE: NO
 */

<<<FILE_START: routes/api.php>>>
<?php

use Illuminate\Support\Facades\Route;

Route::get('/ping', function () {
    return response()->json(['status' => 'api-ok']);
});
<<<FILE_END: routes/api.php>>>

/**
 * FILE: routes/cms.php
 * TYPE: PHP Source
 * DOMAIN: Routing
 * CORE: NO
 */

<<<FILE_START: routes/cms.php>>>
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\PasswordResetController;
use App\Http\Controllers\DashboardController;

/*
|--------------------------------------------------------------------------
| CMS – Rotas públicas (login + recuperação de senha)
|--------------------------------------------------------------------------
*/





Route::post('/__test', function (\Illuminate\Http\Request $request) {

    $request->validate([
        'email'    => ['required', 'email'],
        'password' => ['required', 'min:6'],
        'profile'  => ['required'],
    ]);

    return back()->with('success', 'Formulário validado com sucesso!');
})->name('cms.__test');










Route::prefix('cms')
    ->middleware(['resolve.app:cms'])
    ->group(function () {





        /*
        | Login
        */
        Route::get('/login', [LoginController::class, 'showLoginForm'])
            ->name('cms.login');

        Route::post('/login', [LoginController::class, 'login'])
            ->name('cms.login.submit');

        /*
        | Recuperação de senha
        */
        Route::get('/forgot-password', [PasswordResetController::class, 'showForgotForm'])
            ->name('cms.password.request');

        Route::post('/forgot-password', [PasswordResetController::class, 'sendResetLink'])
            ->name('cms.password.email');

        Route::get('/reset-password/{token}', [PasswordResetController::class, 'showResetForm'])
            ->name('cms.password.reset');

        Route::post('/reset-password', [PasswordResetController::class, 'reset'])
            ->name('cms.password.update');
    });

/*
|--------------------------------------------------------------------------
| CMS – Rotas protegidas
|--------------------------------------------------------------------------
*/
Route::prefix('cms')
    ->middleware([
        'resolve.app:cms',
        'ensure.authenticated',
        'ensure.user.app',
    ])
    ->group(function () {

        Route::get('/', [DashboardController::class, 'index'])
            ->name('cms.dashboard');

        Route::post('/logout', [LoginController::class, 'logout'])
            ->name('cms.logout');
    });
<<<FILE_END: routes/cms.php>>>

/**
 * FILE: routes/governanca.php
 * TYPE: PHP Source
 * DOMAIN: Routing
 * CORE: NO
 */

<<<FILE_START: routes/governanca.php>>>
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\PasswordResetController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UI\VisualProfileController;
use App\Http\Controllers\UI\UploadController;



/*
|--------------------------------------------------------------------------
| GOVERNANÇA – Rotas públicas (login)
|--------------------------------------------------------------------------
*/

Route::prefix('governanca')
    ->middleware(['resolve.app:governanca'])
    ->group(function () {


        /*
        | Login
        */
        Route::get('/login', [LoginController::class, 'showLoginForm'])
            ->name('governanca.login');

        Route::post('/login', [LoginController::class, 'login'])
            ->name('governanca.login.submit');
        /*
        | Recuperação de senha
        */
        Route::get('/forgot-password', [PasswordResetController::class, 'showForgotForm'])
            ->name('governanca.password.request');

        Route::post('/forgot-password', [PasswordResetController::class, 'sendResetLink'])
            ->name('governanca.password.email');

        Route::get('/reset-password/{token}', [PasswordResetController::class, 'showResetForm'])
            ->name('governanca.password.reset');

        Route::post('/reset-password', [PasswordResetController::class, 'reset'])
            ->name('governanca.password.update');
    });


/*
|--------------------------------------------------------------------------
| GOVERNANÇA – Rotas protegidas
|--------------------------------------------------------------------------
*/
Route::prefix('governanca')
    ->middleware([
        'resolve.app:governanca',
        'ensure.authenticated',
        'ensure.user.app',
    ])
    ->group(function () {

        Route::get('/', [DashboardController::class, 'index'])
            ->name('governanca.dashboard');

        Route::post('/logout', [LoginController::class, 'logout'])
            ->name('governanca.logout');
        /*
        |--------------------------------------------------------------------------
        | ✅ ROTA DO VISUAL PROFILE DARK/LIGHT
        |--------------------------------------------------------------------------
        */

        Route::post('/ui/visual-profile', [VisualProfileController::class, 'update'])
            ->name('governanca.ui.visual-profile');

        /*
        |--------------------------------------------------------------------------
        | Upload System (Fase 3)
        |--------------------------------------------------------------------------
        */
        Route::post('/upload', [UploadController::class, 'store'])
            ->name('upload.store');
    });
<<<FILE_END: routes/governanca.php>>>

/**
 * FILE: routes/system.php
 * TYPE: PHP Source
 * DOMAIN: Routing
 * CORE: NO
 */

<<<FILE_START: routes/system.php>>>
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\PasswordResetController;
use App\Http\Controllers\DashboardController;


/*
|--------------------------------------------------------------------------
| SYSTEM – Rotas públicas (login)
|--------------------------------------------------------------------------
*/

Route::prefix('system')
    ->middleware(['resolve.app:system'])
    ->group(function () {


        /*
        | Login
        */
        Route::get('/login', [LoginController::class, 'showLoginForm'])
            ->name('system.login');

        Route::post('/login', [LoginController::class, 'login'])
            ->name('system.login.submit');
        /*
        | Recuperação de senha
        */
        Route::get('/forgot-password', [PasswordResetController::class, 'showForgotForm'])
            ->name('system.password.request');

        Route::post('/forgot-password', [PasswordResetController::class, 'sendResetLink'])
            ->name('system.password.email');

        Route::get('/reset-password/{token}', [PasswordResetController::class, 'showResetForm'])
            ->name('system.password.reset');

        Route::post('/reset-password', [PasswordResetController::class, 'reset'])
            ->name('system.password.update');
    });

/*
|--------------------------------------------------------------------------
| SYSTEM – Rotas protegidas
|--------------------------------------------------------------------------
*/
Route::prefix('system')
    ->middleware([
        'resolve.app:system',
        'ensure.authenticated',
        'ensure.user.app',
    ])
    ->group(function () {

        Route::get('/', [DashboardController::class, 'index'])
            ->name('system.dashboard');

        Route::post('/logout', [LoginController::class, 'logout'])
            ->name('system.logout');
    });
<<<FILE_END: routes/system.php>>>

/**
 * FILE: routes/vendas.php
 * TYPE: PHP Source
 * DOMAIN: Routing
 * CORE: NO
 */

<<<FILE_START: routes/vendas.php>>>
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\PasswordResetController;
use App\Http\Controllers\DashboardController;

/*
|--------------------------------------------------------------------------
| VENDAS – Rotas públicas (login)
|--------------------------------------------------------------------------
*/

Route::prefix('vendas')
    ->middleware(['resolve.app:vendas'])
    ->group(function () {


        /*
        | Login
        */
        Route::get('/login', [LoginController::class, 'showLoginForm'])
            ->name('vendas.login');
        Route::post('/login', [LoginController::class, 'login'])
            ->name('vendas.login.submit');
        /*
        | Recuperação de senha
        */
        Route::get('/forgot-password', [PasswordResetController::class, 'showForgotForm'])
            ->name('vendas.password.request');

        Route::post('/forgot-password', [PasswordResetController::class, 'sendResetLink'])
            ->name('vendas.password.email');

        Route::get('/reset-password/{token}', [PasswordResetController::class, 'showResetForm'])
            ->name('vendas.password.reset');

        Route::post('/reset-password', [PasswordResetController::class, 'reset'])
            ->name('vendas.password.update');
    });

/*
|--------------------------------------------------------------------------
| VENDAS – Rotas protegidas
|--------------------------------------------------------------------------
*/
Route::prefix('vendas')
    ->middleware([
        'resolve.app:vendas',
        'ensure.authenticated',
        'ensure.user.app',
    ])
    ->group(function () {

        Route::get('/', [DashboardController::class, 'index'])
            ->name('vendas.dashboard');

        Route::post('/logout', [LoginController::class, 'logout'])
            ->name('vendas.logout');
    });
<<<FILE_END: routes/vendas.php>>>

/**
 * FILE: routes/web.php
 * TYPE: PHP Source
 * DOMAIN: Routing
 * CORE: NO
 */

<<<FILE_START: routes/web.php>>>
<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/__test_alert_redirect', function () {
    return redirect('/')->with('success', 'Alert funcionando!');
});
Route::get('/__test-session', function () {
    session()->flash('success', 'Session OK');
    return redirect('/');
});

Route::get('/__test_alert_back', function () {
    return back()->with('success', 'Alert funcionando!');
});
<<<FILE_END: routes/web.php>>>
