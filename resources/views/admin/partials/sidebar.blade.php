<aside class="sidebar">
    {{-- Mobile close button --}}
    <button class="sidebarClose" data-sidebar-close aria-label="Close sidebar">✕</button>

    @php
        $brandName = $globalCompany?->brand_name ?? 'CloudTech';

        $logoLight = (!empty($globalCompany?->og_image_path) && file_exists(public_path($globalCompany->og_image_path)))
            ? asset($globalCompany->og_image_path)
            : null;

        $logoDark = (!empty($globalCompany?->og_image_path) && file_exists(public_path($globalCompany->og_image_path)))
            ? asset($globalCompany->og_image_path)
            : null;

        /**
         * Mark a group open if any child route is active.
         */
        function isGroupActive(array $patterns): bool {
            foreach ($patterns as $p) {
                if (request()->routeIs($p)) return true;
            }
            return false;
        }
    @endphp

    <div class="brand">
        <div class="brandLogo">
            @if($logoLight || $logoDark)
                @if($logoLight)
                    <img class="logo lightOnly" src="{{ $logoLight }}" alt="{{ $brandName }} logo">
                @endif
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

    {{-- OVERVIEW (no dropdown) --}}
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

    {{-- WEBSITE (dropdown) --}}
    @php
      $websiteOpen = isGroupActive([
          'admin.settings.company.*',
          'admin.settings.branches.*',
          'admin.settings.smtp.*',
          'admin.settings.contact-forms.*',
          'admin.leads.*',
          'admin.case-studies.*',
          'admin.portfolio-items.*',
          'admin.portfolio-platforms.*',
      ]);
    @endphp

    <div class="navSection">
        <button class="navGroupToggle {{ $websiteOpen ? 'open' : '' }}"
                type="button"
                data-nav-group="website"
                aria-expanded="{{ $websiteOpen ? 'true' : 'false' }}">
            <span class="navGroupTitle">
                <span class="navGroupDot"></span>
                <span>Website</span>
            </span>
            <span class="navChevron" aria-hidden="true"></span>
        </button>

        <div class="navGroupPanel {{ $websiteOpen ? 'open' : '' }}" data-nav-panel="website">
            <nav class="nav navNested">

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

                {{-- Case Studies --}}
                @if (Route::has('admin.case-studies.index'))
                    <a class="{{ request()->routeIs('admin.case-studies.*') ? 'active' : '' }}"
                       href="{{ route('admin.case-studies.index') }}">
                        <span class="dot"></span><span>Case Studies</span>
                    </a>
                @endif

                {{-- Portfolio (NEW) --}}
                @if (Route::has('admin.portfolio-items.index') || Route::has('admin.portfolio-platforms.index'))
                    <div style="height:6px;"></div>
                    <div style="padding: 6px 12px; font-size:12px; opacity:.65; letter-spacing:.06em; text-transform:uppercase;">
                        Portfolio
                    </div>

                    @if (Route::has('admin.portfolio-items.index'))
                        <a class="{{ request()->routeIs('admin.portfolio-items.*') ? 'active' : '' }}"
                           href="{{ route('admin.portfolio-items.index') }}">
                            <span class="dot"></span><span>Portfolio Items</span>
                        </a>
                    @endif

                    @if (Route::has('admin.portfolio-platforms.index'))
                        <a class="{{ request()->routeIs('admin.portfolio-platforms.*') ? 'active' : '' }}"
                           href="{{ route('admin.portfolio-platforms.index') }}">
                            <span class="dot"></span><span>Portfolio Platforms</span>
                        </a>
                    @endif
                @endif

            </nav>
        </div>
    </div>

    {{-- ACCESS CONTROL (dropdown) --}}
    @php
      $accessOpen = isGroupActive(['admin.users.*','admin.roles.*','admin.permissions.*','admin.impersonate.*']);
    @endphp

    <div class="navSection">
        <button class="navGroupToggle {{ $accessOpen ? 'open' : '' }}"
                type="button"
                data-nav-group="access"
                aria-expanded="{{ $accessOpen ? 'true' : 'false' }}">
            <span class="navGroupTitle">
                <span class="navGroupDot"></span>
                <span>Access Control</span>
            </span>
            <span class="navChevron" aria-hidden="true"></span>
        </button>

        <div class="navGroupPanel {{ $accessOpen ? 'open' : '' }}" data-nav-panel="access">
            <nav class="nav navNested">
                <a class="{{ request()->routeIs('admin.users.*') ? 'active' : '' }}" href="{{ route('admin.users.index') }}">
                    <span class="dot"></span><span>Users</span>
                </a>

                <a class="{{ request()->routeIs('admin.roles.*') ? 'active' : '' }}" href="{{ route('admin.roles.index') }}">
                    <span class="dot"></span><span>Roles</span>
                </a>

                <a class="{{ request()->routeIs('admin.permissions.*') ? 'active' : '' }}" href="{{ route('admin.permissions.index') }}">
                    <span class="dot"></span><span>Permissions</span>
                </a>

                @if (Route::has('admin.impersonate.start'))
                    <a class="{{ request()->routeIs('admin.impersonate.*') ? 'active' : '' }}"
                       href="{{ route('admin.users.index') }}">
                        <span class="dot"></span><span>Impersonation</span>
                    </a>
                @endif
            </nav>
        </div>
    </div>

    {{-- SYSTEM (dropdown) --}}
    @php
      $systemOpen = isGroupActive(['profile.*','logout']);
    @endphp

    <div class="navSection">
        <button class="navGroupToggle {{ $systemOpen ? 'open' : '' }}"
                type="button"
                data-nav-group="system"
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
                    <a class="{{ request()->routeIs('profile.*') ? 'active' : '' }}" href="{{ route('profile.edit') }}">
                        <span class="dot"></span><span>My Profile</span>
                    </a>
                @endif

                @if (Route::has('logout'))
                    <form method="POST" action="{{ route('logout') }}" style="margin:0;">
                        @csrf
                        <button type="submit"
                                class="linkBtn"
                                style="all:unset;cursor:pointer;display:flex;gap:10px;align-items:center;padding:10px 12px;width:100%;">
                            <span class="dot"></span><span>Logout</span>
                        </button>
                    </form>
                @endif
            </nav>
        </div>
    </div>

    <div class="sidebarFooter">
        <div class="badge">RBAC Console</div>
        <div style="margin-top:8px;">
            Logged in as <span style="font-family:var(--mono);">{{ auth()->user()->email ?? '—' }}</span>
        </div>
    </div>
</aside>
