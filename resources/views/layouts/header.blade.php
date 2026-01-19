    <header class="site-header">
        <div class="container header-inner">
            <div class="logo">
                <!-- Replace with actual logo if needed -->
                <span class="logo-mark">CT</span>
                <span class="logo-text">Cloud Technologies</span>
            </div>

            <nav class="main-nav">
                <ul>
                    <li>
                        <a href="{{ route('home') }}" class="{{ request()->routeIs('home') ? 'active' : '' }}">
                            Home
                        </a>
                    </li>

                    <li>
                        <a href="#industries" class="{{ request()->is('/') ? '' : '' }}">
                            Industries
                        </a>
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
                        <a href="#pricing">Pricing</a>
                    </li>

                    <li>
                        <a href="{{ route('about.us') }}" class="{{ request()->routeIs('about.us*') ? 'active' : '' }}">
                            About Us
                        </a>
                    </li>

                    <li>
                        <a href="#contact">Contact Us</a>
                    </li>
                </ul>
            </nav>


            <a href="#contact" class="btn btn-sm btn-accent header-cta">Get Started</a>

            <button class="nav-toggle" aria-label="Toggle navigation">
                <span></span>
                <span></span>
                <span></span>
            </button>
        </div>
    </header>
