<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
//------------------------------------------
use Carbon\Carbon;
use Illuminate\Support\Facades\View;
use App\Services\Governanca\UI\VisualProfileService;
use Illuminate\Support\Facades\Auth;



class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //----------------------------------------------------------
        Carbon::setLocale(config('app.locale'));

        View::composer('layouts.app', function ($view) {

            $user = Auth::user();


            if (! $user) {
                return;
            }

            $appId = session('current_app_id');

            if (! $appId) {
                return;
            }

            $visualProfile = VisualProfileService::resolve(
                $user->id,
                $appId
            );

            $view->with('visualProfile', $visualProfile);
        });
    }
}
