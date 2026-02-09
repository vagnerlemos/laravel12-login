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
