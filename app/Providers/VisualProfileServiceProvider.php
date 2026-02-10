<?php

namespace App\Providers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
use App\Models\Governanca\UserPreference;

class VisualProfileServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        View::composer(
            ['layouts.app', 'layouts.auth', 'layouts.partials.topbar'],
            function ($view) {
                $profile = 'light';

                if (Auth::check() && session('current_app_id')) {
                    $pref = UserPreference::query()
                        ->where('user_id', Auth::id())
                        ->where('app_id', session('current_app_id'))
                        ->first();

                    if ($pref?->visual_profile) {
                        $profile = $pref->visual_profile;
                    }
                }

                // Resolve por zonas (canônico)
                $zones = $this->resolveZones($profile);

                $view->with('visualProfile', $profile);
                $view->with('uiZones', $zones);
            }
        );
    }

    private function resolveZones(string $profile): array
    {
        // defaults
        $zones = [
            'app' => 'light',
            'navigation' => 'light',
            'content' => 'light',
            'auth' => 'light',
        ];

        return match ($profile) {
            'dark' => [
                'app' => 'dark',
                'navigation' => 'dark',
                'content' => 'dark',
                'auth' => 'dark',
            ],

            'mixed-nav-dark' => [
                'app' => 'light',
                'navigation' => 'dark',
                'content' => 'light',
                'auth' => 'light',
            ],

            'mixed-content-dark' => [
                'app' => 'dark',
                'navigation' => 'light',
                'content' => 'dark',
                'auth' => 'dark',
            ],

            default => $zones,
        };
    }
}
