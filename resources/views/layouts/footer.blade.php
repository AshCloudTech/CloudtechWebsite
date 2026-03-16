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
                        {{-- <li><a href="{{ route('cloud.digital.solutions') }}">Cloud Digital Solutions</a></li> --}}
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
    @php
        // Inline SVG icons (lightweight, no external libs)
        $socialIcon = function (string $platform) {
            $p = strtolower(trim($platform));
 
            return match (true) {
                str_contains($p, 'facebook') => '<svg viewBox="0 0 24 24" aria-hidden="true"><path d="M22 12a10 10 0 1 0-11.56 9.87v-6.99H7.9V12h2.54V9.8c0-2.5 1.5-3.9 3.8-3.9 1.1 0 2.25.2 2.25.2v2.46h-1.27c-1.25 0-1.64.78-1.64 1.57V12h2.79l-.45 2.88h-2.34v6.99A10 10 0 0 0 22 12z"/></svg>',
                str_contains($p, 'instagram') => '<svg viewBox="0 0 24 24" aria-hidden="true"><path d="M7 2h10a5 5 0 0 1 5 5v10a5 5 0 0 1-5 5H7a5 5 0 0 1-5-5V7a5 5 0 0 1 5-5zm10 2H7a3 3 0 0 0-3 3v10a3 3 0 0 0 3 3h10a3 3 0 0 0 3-3V7a3 3 0 0 0-3-3zm-5 4.5A3.5 3.5 0 1 1 8.5 12 3.5 3.5 0 0 1 12 8.5zm0 2A1.5 1.5 0 1 0 13.5 12 1.5 1.5 0 0 0 12 10.5zM18 6.7a.9.9 0 1 1-.9-.9.9.9 0 0 1 .9.9z"/></svg>',
                str_contains($p, 'linkedin') => '<svg viewBox="0 0 24 24" aria-hidden="true"><path d="M4.98 3.5A2.5 2.5 0 1 1 2.5 6a2.5 2.5 0 0 1 2.48-2.5zM3 21h4V9H3zm6 0h4v-6.2c0-3.3 4-3.6 4 0V21h4v-7.6c0-6-6.5-5.8-8-2.8V9H9z"/></svg>',
                str_contains($p, 'twitter') || str_contains($p, 'x') => '<svg viewBox="0 0 24 24" aria-hidden="true"><path d="M18.9 2H22l-6.8 7.8L23 22h-6.2l-4.9-6.4L6.3 22H3.2l7.3-8.4L1 2h6.3l4.4 5.8L18.9 2zm-1.1 18h1.7L7.1 3.9H5.3L17.8 20z"/></svg>',
                str_contains($p, 'youtube') => '<svg viewBox="0 0 24 24" aria-hidden="true"><path d="M21.6 7.2a2.7 2.7 0 0 0-1.9-1.9C18 5 12 5 12 5s-6 0-7.7.3A2.7 2.7 0 0 0 2.4 7.2 28.3 28.3 0 0 0 2 12c0 1.6.1 3.2.4 4.8a2.7 2.7 0 0 0 1.9 1.9C6 19 12 19 12 19s6 0 7.7-.3a2.7 2.7 0 0 0 1.9-1.9c.3-1.6.4-3.2.4-4.8s-.1-3.2-.4-4.8zM10 15V9l6 3-6 3z"/></svg>',
                str_contains($p, 'whatsapp') => '<svg viewBox="0 0 24 24" aria-hidden="true"><path d="M20.5 3.5A11 11 0 0 0 3.4 19.6L2 22l2.5-.7A11 11 0 0 0 20.5 3.5zM12 20a9 9 0 0 1-4.6-1.3l-.3-.2-2.7.7.7-2.6-.2-.3A9 9 0 1 1 12 20zm5-6.3c-.3-.1-1.7-.8-2-.9s-.5-.1-.7.1-.8.9-1 .9-.4.1-.7-.1a7.4 7.4 0 0 1-2.2-1.4 8.2 8.2 0 0 1-1.5-2c-.2-.3 0-.5.1-.6l.4-.5c.1-.2.1-.4 0-.6s-.7-1.6-.9-2.1c-.2-.6-.5-.5-.7-.5H6.4c-.2 0-.6.1-.9.4s-1.2 1.1-1.2 2.7 1.2 3.1 1.4 3.3 2.4 3.7 5.9 5c.8.3 1.5.5 2 .6.8.3 1.6.2 2.2.1.7-.1 1.7-.7 2-1.4s.3-1.3.2-1.4-.3-.2-.6-.3z"/></svg>',
                default => '<svg viewBox="0 0 24 24" aria-hidden="true"><path d="M10.59 13.41a1.996 1.996 0 0 0 2.82 0l3.59-3.59A2 2 0 0 0 14.17 7l-1.18 1.18 1.41 1.41L15.59 8.4a.5.5 0 0 1 .71.71l-3.59 3.59a.5.5 0 0 1-.71 0l-1.18-1.18-1.41 1.41 1.18 1.18z"/><path d="M13.41 10.59a1.996 1.996 0 0 0-2.82 0L7 14.17A2 2 0 1 0 9.83 17l1.18-1.18-1.41-1.41L8.41 15.6a.5.5 0 0 1-.71-.71l3.59-3.59a.5.5 0 0 1 .71 0l1.18 1.18 1.41-1.41-1.18-1.18z"/></svg>',
            };
        };
    @endphp
 
    <ul class="social-icons">
        @foreach ($socialLinks as $link)
            @php
                $url = $link->url ?? '#';
                $isExternal = \Illuminate\Support\Str::startsWith($url, ['http://', 'https://']);
                $label = $link->platform ?? 'Social';
            @endphp
 
            <li>
                <a href="{{ $url }}"
                   class="social-icon"
                   aria-label="{{ $label }}"
                   title="{{ $label }}"
                   @if ($isExternal) target="_blank" rel="noopener noreferrer" @endif>
                    {!! $socialIcon($label) !!}
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
