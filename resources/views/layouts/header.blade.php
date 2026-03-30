    <header class="site-header">
        <div class="container header-inner">
            @php
                $brandName = $globalCompany?->brand_name ?? 'Cloud Technologies';

                $siteLogoLight = !empty($globalCompany?->logo_light_path)
                    ? asset($globalCompany->logo_light_path)
                    : null;
                $siteLogoDark = !empty($globalCompany?->logo_dark_path) ? asset($globalCompany->logo_dark_path) : null;

                $isServicesActive = request()->routeIs('services.*');
                $isDigitalMarketingActive = request()->routeIs('services.digital.marketing')
                    || request()->routeIs('services.digi-marketing.*');
                $isWebDevelopmentActive = request()->routeIs('services.web.development')
                    || request()->routeIs('services.website-development.*');
                $isSeoActive = request()->routeIs('services.seo')
                    || request()->routeIs('services.seo.*');
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
                        <a href="{{ route('home') }}" class="{{ request()->path() === '/' ? 'active' : '' }}">
                            Home
                        </a>
                    </li>

                    <li class="has-dropdown {{ $isServicesActive ? 'active' : '' }}">
                        <a href="#services" class="{{ $isServicesActive ? 'active' : '' }}">
                            Services
                        </a>

                        <ul class="dropdown">
                            <li class="has-dropdown {{ $isDigitalMarketingActive ? 'active' : '' }}">
                                <a href="{{ route('services.digital.marketing') }}"
                                    class="{{ $isDigitalMarketingActive ? 'active' : '' }}">
                                    Digital Marketing
                                </a>

                                <ul class="dropdown">
                                    <li>
                                        <a href="{{ route('services.digi-marketing.google-my-business-optimisation') }}"
                                            class="{{ request()->routeIs('services.digi-marketing.google-my-business-optimisation') ? 'active' : '' }}">
                                            Google Business Profile
                                        </a>
                                    </li>

                                    <li>
                                        <a href="{{ route('services.digi-marketing.meta-ads-services') }}"
                                            class="{{ request()->routeIs('services.digi-marketing.meta-ads-services') ? 'active' : '' }}">
                                            Meta Ads Services
                                        </a>
                                    </li>

                                    <li>
                                        <a href="{{ route('services.digi-marketing.ppc-services') }}"
                                            class="{{ request()->routeIs('services.digi-marketing.ppc-services') ? 'active' : '' }}">
                                            PPC Services
                                        </a>
                                    </li>

                                    <li>
                                        <a href="{{ route('services.digi-marketing.smm-services') }}"
                                            class="{{ request()->routeIs('services.digi-marketing.smm-services') ? 'active' : '' }}">
                                            SMM Services
                                        </a>
                                    </li>
                                </ul>
                            </li>

                            <li>
                                <a href="{{ route('services.uiux') }}"
                                    class="{{ request()->routeIs('services.uiux') ? 'active' : '' }}">
                                    UI/UX Design
                                </a>
                            </li>

                            <li class="has-dropdown {{ $isWebDevelopmentActive ? 'active' : '' }}">
                                <a href="{{ route('services.web.development') }}"
                                    class="{{ $isWebDevelopmentActive ? 'active' : '' }}">
                                    Web Development
                                </a>

                                <ul class="dropdown">
                                    <li>
                                        <a href="{{ route('services.website-development.wordpress') }}"
                                            class="{{ request()->routeIs('services.website-development.wordpress') ? 'active' : '' }}">
                                            WordPress Development
                                        </a>
                                    </li>

                                    <li>
                                        <a href="{{ route('services.website-development.woocommerce') }}"
                                            class="{{ request()->routeIs('services.website-development.woocommerce') ? 'active' : '' }}">
                                            WooCommerce Development
                                        </a>
                                    </li>

                                    <li>
                                        <a href="{{ route('services.website-development.shopify') }}"
                                            class="{{ request()->routeIs('services.website-development.shopify') ? 'active' : '' }}">
                                            Shopify Development
                                        </a>
                                    </li>

                                    <li>
                                        <a href="{{ route('services.website-development.squarespace') }}"
                                            class="{{ request()->routeIs('services.website-development.squarespace') ? 'active' : '' }}">
                                            Squarespace Websites
                                        </a>
                                    </li>

                                    <li>
                                        <a href="{{ route('services.website-development.wix') }}"
                                            class="{{ request()->routeIs('services.website-development.wix') ? 'active' : '' }}">
                                            Wix Websites
                                        </a>
                                    </li>

                                    <li>
                                        <a href="{{ route('services.website-development.godaddy') }}"
                                            class="{{ request()->routeIs('services.website-development.godaddy') ? 'active' : '' }}">
                                            GoDaddy Builder
                                        </a>
                                    </li>

                                    <li>
                                        <a href="{{ route('services.website-development.laravel') }}"
                                            class="{{ request()->routeIs('services.website-development.laravel') ? 'active' : '' }}">
                                            Laravel Development
                                        </a>
                                    </li>

                                    <li>
                                        <a href="{{ route('services.website-development.custom-php') }}"
                                            class="{{ request()->routeIs('services.website-development.custom-php') ? 'active' : '' }}">
                                            Custom PHP Projects
                                        </a>
                                    </li>
                                </ul>
                            </li>

                            <li>
                                <a href="{{ route('services.branding') }}"
                                    class="{{ request()->routeIs('services.branding') ? 'active' : '' }}">
                                    Branding
                                </a>
                            </li>

                            <li class="has-dropdown {{ $isSeoActive ? 'active' : '' }}">
                                <a href="{{ route('services.seo') }}"
                                    class="{{ $isSeoActive ? 'active' : '' }}">
                                    SEO
                                </a>

                                <ul class="dropdown">
                                    <li>
                                        <a href="{{ route('services.seo.national-seo') }}"
                                            class="{{ request()->routeIs('services.seo.national-seo') ? 'active' : '' }}">
                                            National SEO
                                        </a>
                                    </li>

                                    <li>
                                        <a href="{{ route('services.seo.international-seo') }}"
                                            class="{{ request()->routeIs('services.seo.international-seo') ? 'active' : '' }}">
                                            International SEO
                                        </a>
                                    </li>

                                    <li>
                                        <a href="{{ route('services.seo.technical-seo') }}"
                                            class="{{ request()->routeIs('services.seo.technical-seo') ? 'active' : '' }}">
                                            Technical SEO
                                        </a>
                                    </li>

                                    <li>
                                        <a href="{{ route('services.seo.content-seo') }}"
                                            class="{{ request()->routeIs('services.seo.content-seo') ? 'active' : '' }}">
                                            Content SEO
                                        </a>
                                    </li>

                                    <li>
                                        <a href="{{ route('services.seo.image-seo') }}"
                                            class="{{ request()->routeIs('services.seo.image-seo') ? 'active' : '' }}">
                                            Image SEO
                                        </a>
                                    </li>

                                    <li>
                                        <a href="{{ route('services.seo.local-seo') }}"
                                            class="{{ request()->routeIs('services.seo.local-seo') ? 'active' : '' }}">
                                            Local SEO
                                        </a>
                                    </li>

                                    <li>
                                        <a href="{{ route('services.seo.ecommerce-seo') }}"
                                            class="{{ request()->routeIs('services.seo.ecommerce-seo') ? 'active' : '' }}">
                                            eCommerce SEO
                                        </a>
                                    </li>

                                    <li>
                                        <a href="{{ route('services.seo.on-page-seo') }}"
                                            class="{{ request()->routeIs('services.seo.on-page-seo') ? 'active' : '' }}">
                                            On-Page SEO
                                        </a>
                                    </li>

                                    <li>
                                        <a href="{{ route('services.seo.off-page-seo') }}"
                                            class="{{ request()->routeIs('services.seo.off-page-seo') ? 'active' : '' }}">
                                            Off-Page SEO
                                        </a>
                                    </li>
                                </ul>
                            </li>

                            <li>
                                <a href="{{ route('services.product.marketing') }}"
                                    class="{{ request()->routeIs('services.product.marketing') ? 'active' : '' }}">
                                    Product Marketing
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li class="has-dropdown {{ request()->routeIs('industries.*') ? 'active' : '' }}">

                        <a href="#industries" class="{{ request()->routeIs('industries.*') ? 'active' : '' }}">
                            Industries
                        </a>

                        <ul class="dropdown">
                            <li>
                                <a href="{{ route('industries.cloudhealth') }}"
                                    class="{{ request()->routeIs('industries.cloudhealth') ? 'active' : '' }}">
                                    CloudHealth
                                </a>
                            </li>


                            <li>
                                <a href="{{ route('industries.cloudcare') }}"
                                    class="{{ request()->routeIs('industries.cloudcare') ? 'active' : '' }}">
                                    CloudCare
                                </a>
                            </li>

                            <li>
                                <a href="{{ route('industries.cloudedu') }}"
                                    class="{{ request()->routeIs('industries.cloudedu') ? 'active' : '' }}">
                                    CloudEdu
                                </a>
                            </li>

                            <li>
                                <a href="{{ route('industries.cloudtravel') }}"
                                    class="{{ request()->routeIs('industries.cloudtravel') ? 'active' : '' }}">
                                    CloudTravel
                                </a>
                            </li>

                            <li>
                                <a href="{{ route('industries.cloudrecruit') }}"
                                    class="{{ request()->routeIs('industries.cloudrecruit') ? 'active' : '' }}">
                                    CloudRecruit
                                </a>
                            </li>

                            <li>
                                <a href="{{ route('industries.cloudpublic') }}"
                                    class="{{ request()->routeIs('industries.cloudpublic') ? 'active' : '' }}">
                                    CloudPublic
                                </a>
                            </li>
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
                        <a href="{{ route('pricing') }}" class="{{ request()->routeIs('pricing*') ? 'active' : '' }}">
                            Pricing
                        </a>
                    </li>

                    <li>
                        <a href="{{ route('about.us') }}" class="{{ request()->is('about-us') ? 'active' : '' }}">
                            About Us
                        </a>

                    </li>

                    <li>
                        <a href="{{ route('contact.us') }}"
                            class="{{ request()->routeIs('contact.us') ? 'active' : '' }}">
                            Contact Us
                        </a>
                    </li>
                </ul>
            </nav>


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
