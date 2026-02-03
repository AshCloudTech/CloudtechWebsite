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

    {{-- <div class="topLeft" style="flex:1; max-width: 520px;">
        <div class="search" style="width:100%;">
            <span style="opacity:.8;">⌕</span>
            <input data-global-search type="text" placeholder="Search…" disabled>
            <span class="kbd">Ctrl K</span>
        </div>
    </div> --}}

<div class="topRight">
    <div class="chip">
        <div class="avatar"></div>
        <div style="display:flex; flex-direction:column; line-height:1.05;">
            <strong style="font-size:13px;">{{ auth()->user()->name ?? 'Admin' }}</strong>
            <span style="font-size:12px; color: var(--muted);">{{ auth()->user()->email ?? '' }}</span>
        </div>
    </div>

    {{-- Theme toggle --}}
<button class="iconBtn themeBtn" data-toggle-theme aria-label="Toggle theme" type="button">
    {{-- Sun icon (shown in light mode) --}}
    <svg class="icoSun" width="18" height="18" viewBox="0 0 24 24" fill="none" aria-hidden="true">
        <path d="M12 18a6 6 0 1 0 0-12 6 6 0 0 0 0 12Z"
              stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/>
        <path d="M12 2v2M12 20v2M4 12H2M22 12h-2M5 5l1.5 1.5M17.5 17.5 19 19M19 5l-1.5 1.5M6.5 17.5 5 19"
              stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/>
    </svg>

    {{-- Moon icon (shown in dark mode) --}}
    <svg class="icoMoon" width="18" height="18" viewBox="0 0 24 24" fill="none" aria-hidden="true">
        <path d="M21 12.6A8.5 8.5 0 1 1 11.4 3a7 7 0 0 0 9.6 9.6Z"
              stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/>
    </svg>
</button>


    {{-- Logout --}}
    <form method="POST" action="{{ route('logout') }}" style="display:inline;">
        @csrf
        <button class="iconBtn" type="submit" aria-label="Logout">
            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" aria-hidden="true">
                <path d="M10 7V6a2 2 0 0 1 2-2h7a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2h-7a2 2 0 0 1-2-2v-1"
                      stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M15 12H3m0 0 3-3M3 12l3 3"
                      stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
        </button>
    </form>
</div>

</header>
