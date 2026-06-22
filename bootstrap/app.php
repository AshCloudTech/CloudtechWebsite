<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware): void {
        $middleware->append(\App\Http\Middleware\SecurityHeaders::class);

        // Middleware aliases for RBAC & impersonation (enabled only when packages exist).
        $aliases = [];

        if (class_exists(\Spatie\Permission\Middleware\RoleMiddleware::class)) {
            $aliases['role'] = \Spatie\Permission\Middleware\RoleMiddleware::class;
            $aliases['permission'] = \Spatie\Permission\Middleware\PermissionMiddleware::class;
            $aliases['role_or_permission'] = \Spatie\Permission\Middleware\RoleOrPermissionMiddleware::class;
        }

        if (class_exists(\Lab404\Impersonate\Middleware\Impersonate::class)) {
            $aliases['impersonate'] = \Lab404\Impersonate\Middleware\Impersonate::class;
        }

        if (!empty($aliases)) {
            $middleware->alias($aliases);
        }
    })
    ->withExceptions(function (Exceptions $exceptions): void {
        //
    })->create();
