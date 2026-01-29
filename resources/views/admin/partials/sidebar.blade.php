<aside class="sidebar">
@php
    $brandName = $globalCompany?->brand_name ?? 'CloudTech';

    $logoLight = (!empty($globalCompany?->logo_light_path) && file_exists(public_path($globalCompany->logo_light_path)))
        ? asset($globalCompany->logo_light_path)
        : null;

    $logoDark = (!empty($globalCompany?->logo_dark_path) && file_exists(public_path($globalCompany->logo_dark_path)))
        ? asset($globalCompany->logo_dark_path)
        : null;
@endphp

<div class="brand">
    <div class="brandLogo">
        @if($logoLight || $logoDark)
            {{-- Light theme logo --}}
            @if($logoLight)
                <img class="logo lightOnly" src="{{ $logoLight }}" alt="{{ $brandName }} logo">
            @endif

            {{-- Dark theme logo --}}
            @if($logoDark)
                <img class="logo darkOnly" src="{{ $logoDark }}" alt="{{ $brandName }} logo">
            @endif
        @else
            <div class="logoMark"></div>
        @endif
    </div>

    <div class="title">
        <strong>{{ $brandName }}</strong>
        <span>Admin Console</span>
    </div>
</div>


    <div class="navSection">
        <div class="navLabel">Overview</div>
        <nav class="nav">
            <a class="{{ request()->routeIs('admin.dashboard') ? 'active' : '' }}" href="{{ route('admin.dashboard') }}">
                <span class="dot"></span><span>Dashboard</span>
            </a>

            <a class="{{ request()->routeIs('admin.audit-logs.*') ? 'active' : '' }}"
                href="{{ route('admin.audit-logs.index') }}">
                <span class="dot"></span><span>Audit Logs</span>
            </a>
        </nav>
    </div>

    <div class="navSection">
        <div class="navLabel">Website</div>
        <nav class="nav">
            <a class="{{ request()->routeIs('admin.settings.company.*') ? 'active' : '' }}"
                href="{{ route('admin.settings.company.edit') }}">
                <span class="dot"></span><span>Company Settings</span>
            </a>
            @if (Route::has('admin.settings.branches.index'))
                <a class="{{ request()->routeIs('admin.settings.branches.*') ? 'active' : '' }}"
                    href="{{ route('admin.settings.branches.index') }}">
                    <span class="dot"></span><span>Branches</span>
                </a>
            @endif

            <a class="{{ request()->routeIs('admin.settings.smtp.*') ? 'active' : '' }}"
                href="{{ route('admin.settings.smtp.index') }}">
                <span class="dot"></span><span>SMTP Mailers</span>
            </a>

            <a class="{{ request()->routeIs('admin.settings.contact-forms.*') ? 'active' : '' }}"
                href="{{ route('admin.settings.contact-forms.index') }}">
                <span class="dot"></span><span>Contact Forms</span>
            </a>

            <a class="{{ request()->routeIs('admin.leads.*') ? 'active' : '' }}"
                href="{{ route('admin.leads.index') }}">
                <span class="dot"></span><span>Leads</span>
            </a>
        </nav>
    </div>

    <div class="navSection">
        <div class="navLabel">Access Control</div>
        <nav class="nav">
            <a class="{{ request()->routeIs('admin.users.*') ? 'active' : '' }}"
                href="{{ route('admin.users.index') }}">
                <span class="dot"></span><span>Users</span>
            </a>

            <a class="{{ request()->routeIs('admin.roles.*') ? 'active' : '' }}"
                href="{{ route('admin.roles.index') }}">
                <span class="dot"></span><span>Roles</span>
            </a>

            <a class="{{ request()->routeIs('admin.permissions.*') ? 'active' : '' }}"
                href="{{ route('admin.permissions.index') }}">
                <span class="dot"></span><span>Permissions</span>
            </a>

            {{-- Impersonation routes exist (start/stop). Index does not exist in your routes. --}}
            @if (Route::has('admin.impersonate.start'))
                <a class="{{ request()->routeIs('admin.impersonate.*') ? 'active' : '' }}"
                    href="{{ route('admin.users.index') }}">
                    <span class="dot"></span><span>Impersonation</span>
                </a>
            @endif
        </nav>
    </div>

    <div class="navSection">
        <div class="navLabel">System</div>
        <nav class="nav">
            {{-- Your routes file uses profile.edit (not admin.profile) --}}
            @if (Route::has('profile.edit'))
                <a class="{{ request()->routeIs('profile.*') ? 'active' : '' }}" href="{{ route('profile.edit') }}">
                    <span class="dot"></span><span>My Profile</span>
                </a>
            @endif

            {{-- Logout typically exists via Breeze --}}
            @if (Route::has('logout'))
                <form method="POST" action="{{ route('logout') }}" style="margin:0;">
                    @csrf
                    <button type="submit" class="linkBtn {{ request()->routeIs('logout') ? 'active' : '' }}"
                        style="all:unset;cursor:pointer;display:flex;gap:10px;align-items:center;padding:10px 12px;width:100%;">
                        <span class="dot"></span><span>Logout</span>
                    </button>
                </form>
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
