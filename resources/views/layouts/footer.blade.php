    <footer class="site-footer">
        <div class="container footer-inner">
            <div class="footer-about">
                @php
                    $brandName = $globalCompany?->brand_name ?? 'Cloud Technologies';

                    $footerLogoLight = !empty($globalCompany?->logo_light_path)
                        ? asset($globalCompany->logo_light_path)
                        : null;
                    $footerLogoDark = !empty($globalCompany?->logo_dark_path)
                        ? asset($globalCompany->logo_dark_path)
                        : null;
                @endphp

                <a href="{{ url('/') }}" class="footer-logo-link" aria-label="Go to {{ $brandName }} home">
                    <div class="logo footer-logo">
                        @if ($footerLogoLight || $footerLogoDark)
                            @if ($footerLogoLight)
                                <img class="footer-site-logo footer-site-logo--light" src="{{ $footerLogoLight }}"
                                    alt="{{ $brandName }} logo">
                            @endif

                            @if ($footerLogoDark)
                                <img class="footer-site-logo footer-site-logo--dark" src="{{ $footerLogoDark }}"
                                    alt="{{ $brandName }} logo">
                            @endif
                        @else
                            <span class="logo-mark">CT</span>
                            <span class="logo-text">{{ $brandName }}</span>
                        @endif
                    </div>
                </a>

                <p>
                    British-led global digital transformation partner delivering end-to-end solutions for healthcare,
                    education, travel, recruitment, and public sector organizations worldwide.
                </p>
            </div>


            <div class="footer-columns">
                <div class="footer-column">
                    <h4>Our Industries</h4>
                    <ul>
                        <li><a href="{{ route('industries.cloudhealth') }}">CloudHealth</a></li>
                        <li><a href="{{ route('industries.cloudcare') }}">CloudCare</a></li>
                        <li><a href="{{ route('industries.cloudedu') }}">CloudEdu</a></li>
                        <li><a href="{{ route('industries.cloudtravel') }}">CloudTravel</a></li>
                        <li><a href="{{ route('industries.cloudrecruit') }}">CloudRecruit</a></li>
                        <li><a href="{{ route('industries.cloudpublic') }}">CloudPublic</a></li>
                    </ul>
                </div>

                <div class="footer-column">
                    <h4>Company</h4>
                    <ul>
                        <li><a href="{{ route('about.us') }}">About Us</a></li>
                        <li><a href="{{ route('pricing') }}">Pricing</a></li>
                        <li><a href="{{ route('case.studies') }}">Case Studies</a></li>
                        <li><a href="{{ route('portfolio') }}">Portfolio</a></li>
                        <li><a href="{{ route('contact.us') }}">Contact Us</a></li>
                    </ul>
                </div>

                <div class="footer-column">
                    <h4>Stay Connected</h4>

                    @php
                        $socialLinks =
                            // footer = company-level links (optional)
                            $globalCompany?->socialLinks
                                ?->where('is_active', true)
                                ?->whereNull('branch_id')
                                ?->sortBy(fn($item) => $item->sort_order ?? 999999);
                    @endphp

                    @if ($socialLinks && $socialLinks->count())
                        <ul>
                            @foreach ($socialLinks as $link)
                                <li>
                                    <a href="{{ $link->url }}"
                                        @if (\Illuminate\Support\Str::startsWith($link->url, ['http://', 'https://'])) target="_blank" rel="noopener noreferrer" @endif>
                                        {{ $link->platform }}
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    @else
                        <p class="muted">Social links will appear once added.</p>
                    @endif
                </div>

            </div>
        </div>

        <div class="footer-bottom">
            <div class="container footer-bottom-inner">
                <p>
                    © {{ now()->year }} Made with <span class="heart" aria-hidden="true">❤️</span>
                </p>
            </div>

        </div>
    </footer>
