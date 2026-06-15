<aside class="sidebar">
    {{-- Mobile close button --}}
    <button class="sidebarClose" data-sidebar-close aria-label="Close sidebar">✕</button>

    @php
        $brandName = $globalCompany?->brand_name ?? 'CloudTech';

        $logoLight =
            !empty($globalCompany?->og_image_path) && file_exists(public_path($globalCompany->og_image_path))
                ? asset($globalCompany->og_image_path)
                : null;

        $logoDark =
            !empty($globalCompany?->og_image_path) && file_exists(public_path($globalCompany->og_image_path))
                ? asset($globalCompany->og_image_path)
                : null;
    @endphp

    <div class="brand">
        <div class="brandLogo">
            @if ($logoLight || $logoDark)
                @if ($logoLight)
                    <img class="logo lightOnly" src="{{ $logoLight }}" alt="{{ $brandName }} logo">
                @endif
                @if ($logoDark)
                    <img class="logo darkOnly" src="{{ $logoDark }}" alt="{{ $brandName }} logo">
                @endif
            @else
                <div class="logoMark"></div>
            @endif
        </div>

        <div class="title">
            <strong>{{ $brandName }}</strong>
            <span>Support Console</span>
        </div>
    </div>

    {{-- OVERVIEW --}}
    <div class="navSection">
        <div class="navLabel">Overview</div>
        <nav class="nav">
            <a class="{{ request()->routeIs('support.dashboard') ? 'active' : '' }}"
                href="{{ route('support.dashboard') }}">
                <span class="dot"></span><span>Dashboard</span>
            </a>
        </nav>
    </div>

    {{-- BLOG MANAGEMENT --}}
    @php
        $blogOpen = request()->routeIs('support.blogs.*');
    @endphp

    <div class="navSection">
        <button class="navGroupToggle {{ $blogOpen ? 'open' : '' }}" type="button" data-nav-group="blog"
            aria-expanded="{{ $blogOpen ? 'true' : 'false' }}">
            <span class="navGroupTitle">
                <span class="navGroupDot"></span>
                <span>Blog</span>
            </span>
            <span class="navChevron" aria-hidden="true"></span>
        </button>

        <div class="navGroupPanel {{ $blogOpen ? 'open' : '' }}" data-nav-panel="blog">
            <nav class="nav navNested">
                <a class="{{ request()->routeIs('support.blogs.index') ? 'active' : '' }}"
                    href="{{ route('support.blogs.index') }}">
                    <span class="dot"></span><span>All Posts</span>
                </a>

                <a class="{{ request()->routeIs('support.blogs.create') ? 'active' : '' }}"
                    href="{{ route('support.blogs.create') }}">
                    <span class="dot"></span><span>Add New Post</span>
                </a>
            </nav>
        </div>
    </div>

    {{-- SYSTEM --}}
    @php
        $systemOpen = request()->routeIs('profile.*');
    @endphp

    <div class="navSection">
        <button class="navGroupToggle {{ $systemOpen ? 'open' : '' }}" type="button" data-nav-group="system"
            aria-expanded="{{ $systemOpen ? 'true' : 'false' }}">
            <span class="navGroupTitle">
                <span class="navGroupDot"></span>
                <span>System</span>
            </span>
            <span class="navChevron" aria-hidden="true"></span>
        </button>

        <div class="navGroupPanel {{ $systemOpen ? 'open' : '' }}" data-nav-panel="system">
            <nav class="nav navNested">
                @if (Route::has('profile.edit'))
                    <a class="{{ request()->routeIs('profile.*') ? 'active' : '' }}"
                        href="{{ route('profile.edit') }}">
                        <span class="dot"></span><span>My Profile</span>
                    </a>
                @endif

                @if (Route::has('logout'))
                    <form method="POST" action="{{ route('logout') }}" style="margin:0;">
                        @csrf
                        <button type="submit" class="linkBtn"
                            style="all:unset;cursor:pointer;display:flex;gap:10px;align-items:center;padding:10px 12px;width:100%;">
                            <span class="dot"></span><span>Logout</span>
                        </button>
                    </form>
                @endif
            </nav>
        </div>
    </div>

    <div class="sidebarFooter">
        <div class="badge">Support Console</div>
        <div style="margin-top:8px;">
            Logged in as <span style="font-family:var(--mono);">{{ auth()->user()->email ?? '—' }}</span>
        </div>
    </div>
</aside>
