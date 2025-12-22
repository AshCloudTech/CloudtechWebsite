    <header class="site-header">
        <div class="container header-inner">
            <div class="logo">
                <!-- Replace with actual logo if needed -->
                <span class="logo-mark">CT</span>
                <span class="logo-text">Cloud Technologies</span>
            </div>

            <nav class="main-nav">
                <ul>
                    <li><a href="{{ route('home') }}" class="active">Home</a></li>
                    <li><a href="#industries">Industries</a></li>
                    <li><a href="{{ route('portfolio') }}">Portfolio</a></li>
                    <li><a href="{{ route('case.studies') }}">Case Studies</a></li>
                    <li><a href="#pricing">Pricing</a></li>
                    <li><a href="{{ route('about.us') }}">About Us</a></li>
                    <li><a href="#contact">Contact Us</a></li>
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