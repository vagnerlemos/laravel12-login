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
