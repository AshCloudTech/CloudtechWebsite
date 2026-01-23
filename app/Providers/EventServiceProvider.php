<?php

namespace App\Providers;

use Illuminate\Auth\Events\Login;
use Illuminate\Auth\Events\Logout;
use Illuminate\Auth\Events\Failed;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Event;

class EventServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        // Audit log for login/logout/failures (requires spatie/laravel-activitylog)
        if (class_exists(\Spatie\Activitylog\Models\Activity::class)) {
            Event::listen(Login::class, function (Login $event) {
                activity('auth')
                    ->causedBy($event->user)
                    ->withProperties([
                        'guard' => $event->guard,
                        'ip' => request()->ip(),
                        'user_agent' => request()->userAgent(),
                    ])
                    ->log('login');
            });

            Event::listen(Logout::class, function (Logout $event) {
                activity('auth')
                    ->causedBy($event->user)
                    ->withProperties([
                        'guard' => $event->guard,
                        'ip' => request()->ip(),
                        'user_agent' => request()->userAgent(),
                    ])
                    ->log('logout');
            });

            Event::listen(Failed::class, function (Failed $event) {
                activity('auth')
                    ->withProperties([
                        'guard' => $event->guard,
                        'email' => $event->credentials['email'] ?? null,
                        'ip' => request()->ip(),
                        'user_agent' => request()->userAgent(),
                    ])
                    ->log('login_failed');
            });
        }
    }
}
