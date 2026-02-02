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

<<<<<<< Updated upstream
                    <!-- <li>
                        <a href="#industries" class="{{ request()->is('/') ? '' : '' }}">
                            Industries
                        </a>
                    </li> -->

                    <li class="has-dropdown">
    <a href="#industries">
        Industries
    </a>
    <ul class="dropdown">
        <li><a href="#">Healthcare</a></li>
        <li><a href="#">Finance</a></li>
        <li><a href="#">E-Commerce</a></li>
        <li><a href="#">Education</a></li>
    </ul>
</li>
=======
                    <li class="has-dropdown">
                        <a href="#industries">
                            Industries
                        </a>
                        <ul class="dropdown">
                            <li><a href="#">Healthcare</a></li>
                            <li><a href="#">Finance</a></li>
                            <li><a href="#">E-Commerce</a></li>
                            <li><a href="#">Education</a></li>
                        </ul>
                    </li>
>>>>>>> Stashed changes

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
                        <a href="{{ route('pricing') }}">Pricing</a>
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


            <a href="{{ url('/#contact') }}" class="btn btn-sm btn-accent header-cta">Get Started</a>

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

