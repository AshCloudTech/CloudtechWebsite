<?php

namespace App\Http\Controllers\Concerns;

trait RedirectsToConsole
{
    /**
     * @param  mixed  $parameters
     */
    protected function consoleRedirect(string $routeName, mixed $parameters = [], ?string $message = null): \Illuminate\Http\RedirectResponse
    {
        $redirect = redirect()->route(console_prefix() . $routeName, $parameters);

        return $message ? $redirect->with('success', $message) : $redirect;
    }
}
