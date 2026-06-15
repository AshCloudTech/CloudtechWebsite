<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class DashboardController extends Controller
{
    public function index(): View|RedirectResponse
    {
        $user = request()->user();

        // Role-aware redirect (requires spatie/laravel-permission)
        if ($user && method_exists($user, 'hasAnyRole') && $user->hasAnyRole(['super-admin', 'admin'])) {
            return redirect()->route('admin.dashboard');
        }

        if ($user && method_exists($user, 'hasRole') && $user->hasRole('support')) {
            return redirect()->route('support.dashboard');
        }

        return view('admin.users.dashboard');
    }
}
