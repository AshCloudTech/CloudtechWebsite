    <header class="site-header">
        <div class="container header-inner">
            @php
                $brandName = $globalCompany?->brand_name ?? 'Cloud Technologies';

                $siteLogoLight = !empty($globalCompany?->logo_light_path)
                    ? asset($globalCompany->logo_light_path)
                    : null;
                $siteLogoDark = !empty($globalCompany?->logo_dark_path) ? asset($globalCompany->logo_dark_path) : null;
            @endphp

            <a href="{{ url('/') }}" class="logo-link" aria-label="Go to {{ $brandName }} home">
                <div class="logo">
                    @if ($siteLogoLight || $siteLogoDark)
                        @if ($siteLogoLight)
                            <img class="site-logo site-logo--light" src="{{ $siteLogoLight }}"
                                alt="{{ $brandName }} logo">
                        @endif

                        @if ($siteLogoDark)
                            <img class="site-logo site-logo--dark" src="{{ $siteLogoDark }}"
                                alt="{{ $brandName }} logo">
                        @endif
                    @else
                        <span class="logo-mark">CT</span>
                        <span class="logo-text">{{ $brandName }}</span>
                    @endif
                </div>
            </a>



            <nav class="main-nav">
                <ul>
                    <li>
                        <a href="{{ route('home') }}" class="{{ request()->routeIs('home') ? 'active' : '' }}">
                            Home
                        </a>
                    </li>

                    <li class="has-dropdown">
                        <a href="#industries">
                            Industries
                        </a>
                        <ul class="dropdown">
                            <li><a href="{{ route('industries.cloudhealth') }}">CloudHealth</a></li>
                            <li><a href="{{ route('industries.cloudcare') }}">CloudCare</a></li>
                            <li><a href="{{ route('industries.cloudedu') }}">CloudEdu</a></li>
                            <li><a href="{{ route('industries.cloudtravel') }}">CloudTravel</a></li>
                            <li><a href="{{ route('industries.cloudrecruit') }}">CloudRecruit</a></li>
                            <li><a href="{{ route('industries.cloudpublic') }}">CloudPublic</a></li>
                        </ul>
                    </li>

                    <li>
                        <a href="{{ route('portfolio') }}"
                            class="{{ request()->routeIs('portfolio*') ? 'active' : '' }}">
                            Portfolio
                        </a>
                    </li>

                    <li>
                        <a href="{{ route('case.studies') }}"
                            class="{{ request()->routeIs('case.studies*') ? 'active' : '' }}">
                            Case Studies
                        </a>
                    </li>

                    <li>
                        <a href="{{ route('pricing') }}"
                            class="{{ request()->routeIs('pricing*') ? 'active' : '' }}">Pricing</a>
                    </li>

                    <li>
                        <a href="{{ route('about.us') }}"
                            class="{{ request()->routeIs('about.us*') ? 'active' : '' }}">
                            About Us
                        </a>
                    </li>

                    <li>
                        <a href="{{ route('contact.us') }}">Contact Us</a>
                    </li>
                </ul>
            </nav>


            <a href="https://wa.me/{{ $globalCompany?->whatsapp }}" class="btn btn-sm btn-accent header-cta"
                target="_blank" rel="noopener" aria-label="WhatsApp Us">
                <i data-lucide="message-circle" aria-hidden="true"></i>
                <span>WhatsApp Us</span>
            </a>
            <script>
                document.addEventListener('DOMContentLoaded', () => {
                    if (window.lucide) lucide.createIcons();
                });
            </script>
            <script src="https://unpkg.com/lucide@latest" defer></script>
            <style>
                .header-cta {
                    display: inline-flex;
                    align-items: center;
                    gap: 8px;
                }

                .header-cta i {
                    width: 18px;
                    height: 18px;
                    display: inline-flex;
                }
            </style>
            <button class="nav-toggle" aria-label="Toggle navigation">
                <span></span>
                <span></span>
                <span></span>
            </button>
        </div>
    </header>
    <script>
        document.querySelectorAll('.has-dropdown > a').forEach(link => {
            link.addEventListener('click', e => {
                if (window.innerWidth <= 768) {
                    e.preventDefault();
                    link.parentElement.classList.toggle('open');
                }
            });
        });
    </script>
