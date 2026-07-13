<?php

if (! function_exists('console_prefix')) {
    function console_prefix(): string
    {
        return request()->routeIs('support.*') ? 'support.' : 'admin.';
    }
}

if (! function_exists('console_layout')) {
    function console_layout(): string
    {
        return request()->routeIs('support.*') ? 'layouts.support' : 'layouts.admin';
    }
}

if (! function_exists('console_route')) {
    /**
     * @param  mixed  $parameters
     */
    function console_route(string $name, mixed $parameters = [], bool $absolute = true): string
    {
        return route(console_prefix() . $name, $parameters, $absolute);
    }
}
