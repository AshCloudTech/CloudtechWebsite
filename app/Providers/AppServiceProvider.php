<?php

namespace App\Providers;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

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
        // Custom Blade "if" directives (requires spatie/laravel-permission)
        Blade::if('superadmin', function () {
            $user = auth()->user();
            return $user && method_exists($user, 'hasRole') && $user->hasRole('super-admin');
        });

        Blade::if('admin', function () {
            $user = auth()->user();
            return $user && method_exists($user, 'hasAnyRole') && $user->hasAnyRole(['super-admin', 'admin']);
        });
    }
}
