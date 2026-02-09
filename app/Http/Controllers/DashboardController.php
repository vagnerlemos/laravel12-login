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
