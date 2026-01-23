<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;

class ImpersonationController extends Controller
{
    public function start(User $user): RedirectResponse
    {
        $admin = Auth::user();

        if (!$admin || !method_exists($admin, 'impersonate')) {
            abort(500, 'Impersonation package not configured.');
        }

        if ($admin->id === $user->id) {
            return back()->with('error', 'You cannot impersonate yourself.');
        }

        $admin->impersonate($user);

        return redirect()->route('dashboard')->with('status', 'Impersonation started.');
    }

    public function stop(): RedirectResponse
    {
        $user = Auth::user();

        if ($user && method_exists($user, 'leaveImpersonation')) {
            $user->leaveImpersonation();
        }

        return redirect()->route('admin.dashboard')->with('status', 'Impersonation ended.');
    }
}
