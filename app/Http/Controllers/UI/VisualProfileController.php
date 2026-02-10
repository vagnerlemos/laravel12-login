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
