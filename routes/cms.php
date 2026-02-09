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
