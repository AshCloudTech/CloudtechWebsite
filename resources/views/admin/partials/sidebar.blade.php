{{-- resources/views/admin/partials/sidebar.blade.php --}}
<aside class="sidebar">
    <div class="brand">
        <div class="logoMark"></div>
        <div class="title">
            <strong>CloudTech</strong>
            <span>Admin Console</span>
        </div>
    </div>

    <div class="navSection">
        <div class="navLabel">Overview</div>
        <nav class="nav">
            <a class="{{ request()->routeIs('admin.dashboard') ? 'active' : '' }}" href="{{ route('admin.dashboard') }}">
                <span class="dot"></span><span>Dashboard</span>
            </a>
            <a class="{{ request()->routeIs('admin.audit-logs.*') ? 'active' : '' }}" href="{{ route('admin.audit-logs.index') }}">
                <span class="dot"></span><span>Audit Logs</span>
            </a>
        </nav>
    </div>

    <div class="navSection">
        <div class="navLabel">Access Control</div>
        <nav class="nav">
            <a class="{{ request()->routeIs('admin.users.*') ? 'active' : '' }}" href="{{ route('admin.users.index') }}">
                <span class="dot"></span><span>Users</span>
            </a>
            <a class="{{ request()->routeIs('admin.roles.*') ? 'active' : '' }}" href="{{ route('admin.roles.index') }}">
                <span class="dot"></span><span>Roles</span>
            </a>
            <a class="{{ request()->routeIs('admin.permissions.*') ? 'active' : '' }}" href="{{ route('admin.permissions.index') }}">
                <span class="dot"></span><span>Permissions</span>
            </a>

            {{-- Show only if you have these routes implemented --}}
            @if (Route::has('admin.impersonation.index'))
                <a class="{{ request()->routeIs('admin.impersonation.*') ? 'active' : '' }}" href="{{ route('admin.impersonation.index') }}">
                    <span class="dot"></span><span>Impersonation</span>
                </a>
            @endif
        </nav>
    </div>

    <div class="navSection">
        <div class="navLabel">System</div>
        <nav class="nav">
            @if (Route::has('admin.settings'))
                <a class="{{ request()->routeIs('admin.settings*') ? 'active' : '' }}" href="{{ route('admin.settings') }}">
                    <span class="dot"></span><span>Settings</span>
                </a>
            @endif

            @if (Route::has('admin.profile'))
                <a class="{{ request()->routeIs('admin.profile*') ? 'active' : '' }}" href="{{ route('admin.profile') }}">
                    <span class="dot"></span><span>My Profile</span>
                </a>
            @endif
        </nav>
    </div>

    <div class="sidebarFooter">
        <div class="badge">RBAC Console</div>
        <div style="margin-top:8px;">
            Logged in as <span style="font-family:var(--mono);">{{ auth()->user()->email ?? '—' }}</span>
        </div>
    </div>
</aside>
