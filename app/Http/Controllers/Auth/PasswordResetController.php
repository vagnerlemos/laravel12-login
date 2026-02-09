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
