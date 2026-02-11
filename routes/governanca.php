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


        Route::post('/test-submit', function () {
            return redirect()->back()->with('success', 'Processado com sucesso');
        })->name('governanca.test-submit');

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
