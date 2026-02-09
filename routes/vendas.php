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
