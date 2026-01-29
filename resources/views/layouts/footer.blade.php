    <footer class="site-footer">
        <div class="container footer-inner">
            <div class="footer-about">
     @php
    $brandName = $globalCompany?->brand_name ?? 'Cloud Technologies';

    $footerLogoLight = !empty($globalCompany?->logo_light_path) ? asset($globalCompany->logo_light_path) : null;
    $footerLogoDark  = !empty($globalCompany?->logo_dark_path)  ? asset($globalCompany->logo_dark_path)  : null;
@endphp

<div class="logo footer-logo">
    @if($footerLogoLight || $footerLogoDark)
        @if($footerLogoLight)
            <img class="footer-site-logo footer-site-logo--light" src="{{ $footerLogoLight }}" alt="{{ $brandName }} logo">
        @endif

        @if($footerLogoDark)
            <img class="footer-site-logo footer-site-logo--dark" src="{{ $footerLogoDark }}" alt="{{ $brandName }} logo">
        @endif
    @else
        <span class="logo-mark">CT</span>
        <span class="logo-text">{{ $brandName }}</span>
    @endif
</div>

                <p>
                    British-led global digital transformation partner delivering end-to-end solutions for healthcare, education, travel, recruitment, and public sector organizations worldwide.
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
                        <li><a href="#about">About Us</a></li>
                        <li><a href="#pricing">Pricing</a></li>
                        <li><a href="#case-studies">Case Studies</a></li>
                        <li><a href="#portfolio">Portfolio</a></li>
                        <li><a href="#contact">Contact</a></li>
                    </ul>
                </div>

                <div class="footer-column">
                    <h4>Stay Connected</h4>
                    <ul>
                        <li><a href="#">LinkedIn</a></li>
                        <li><a href="#">Twitter</a></li>
                        <li><a href="#">YouTube</a></li>
                        <li><a href="#">Newsletter</a></li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="footer-bottom">
            <div class="container footer-bottom-inner">
                <p>© 2025 Cloud Technologies Ltd. All rights reserved.</p>
            </div>
        </div>
    </footer>