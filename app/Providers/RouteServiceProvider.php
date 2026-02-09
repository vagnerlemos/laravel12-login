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
