{{-- resources/views/admin/partials/topbar.blade.php --}}
<header class="topbar">
    <div class="topLeft">
        <button class="burger" data-sidebar-toggle aria-label="Toggle sidebar">☰</button>
        <div style="min-width:0;">
            <div class="h1">@yield('page_title', 'Dashboard')</div>
            @hasSection('page_subtitle')
                <p class="sub">@yield('page_subtitle')</p>
            @else
                <p class="sub">&nbsp;</p>
            @endif
        </div>
    </div>

    <div class="topLeft" style="flex:1; max-width: 520px;">
        <div class="search" style="width:100%;">
            <span style="opacity:.8;">⌕</span>
            <input data-global-search type="text" placeholder="Search…" disabled>
            <span class="kbd">Ctrl K</span>
        </div>
    </div>

    <div class="topRight">
        <div class="chip">
            <div class="avatar"></div>
            <div style="display:flex; flex-direction:column; line-height:1.05;">
                <strong style="font-size:13px;">{{ auth()->user()->name ?? 'Admin' }}</strong>
                <span style="font-size:12px; color: var(--muted);">{{ auth()->user()->email ?? '' }}</span>
            </div>
        </div>

        <button class="iconBtn" data-toggle-theme aria-label="Toggle theme">◐</button>

        {{-- Logout --}}
        <form method="POST" action="{{ route('logout') }}" style="display:inline;">
            @csrf
            <button class="iconBtn" type="submit" aria-label="Logout">⎋</button>
        </form>
    </div>
</header>
