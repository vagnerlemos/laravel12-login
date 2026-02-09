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
