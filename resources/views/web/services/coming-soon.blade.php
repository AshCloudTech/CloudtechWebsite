@extends('layouts.cloudtech')

@section('title', ($serviceTitle ?? 'Service') . ' - Coming Soon')
@section('meta_title', ($serviceTitle ?? 'Service') . ' - Cloud Technologies Ltd - Coming Soon')

@push('styles')
    <link rel="stylesheet" href="{{ asset('assets/cloud-home/css/style.css') }}">
@endpush

@push('scripts')
 <script src="{{ asset('assets/js/simple-validation.js') }}" defer></script> 
    <script src="{{ asset('assets/cloud-home/js/script.js') }}" defer></script>
@endpush

@section('content')
<section class="service-coming-soon cs-onefold">
    <div class="auto-container">
        <div class="cs-wrap">

            <div class="cs-left">
                <span class="cs-pill">Coming Soon</span>

                <h1 class="cs-title">{{ $serviceTitle ?? 'Service' }}</h1>
                <p class="cs-subtitle">
                    We are finalising this service page and packaging. In the meantime, contact us and we’ll share
                    a quick proposal, timelines, and a relevant portfolio.
                </p>

                <div class="cs-points">
                    <div class="cs-point">
                        <div class="cs-dot"></div>
                        <div>
                            <div class="cs-point-title">Fast response</div>
                            <div class="cs-point-text">We typically respond within one business day.</div>
                        </div>
                    </div>

                    <div class="cs-point">
                        <div class="cs-dot"></div>
                        <div>
                            <div class="cs-point-title">Clear deliverables</div>
                            <div class="cs-point-text">Scope, milestones, and measurable outcomes.</div>
                        </div>
                    </div>

                    <div class="cs-point">
                        <div class="cs-dot"></div>
                        <div>
                            <div class="cs-point-title">UAE-ready</div>
                            <div class="cs-point-text">Localised messaging, compliance-aware, SEO-first execution.</div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="cs-right">
                <div class="cs-card">
                    <h2 class="cs-card-title">Contact Us</h2>
                    <p class="cs-card-subtitle">Tell us what you need. We’ll get back with next steps.</p>

                    {{-- Success --}}
                    @if (session('status'))
                        <div class="cs-alert cs-alert-success">{{ session('status') }}</div>
                    @endif

                    {{-- Errors --}}
                    @if ($errors->any())
                        <div class="cs-alert cs-alert-error">
                            <ul style="margin:0; padding-left:18px;">
                                @foreach ($errors->all() as $e)
                                    <li>{{ $e }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form method="POST"
                          action="{{ Route::has('contact.send') ? route('contact.send') : url('/contact') }}"
                          class="cs-form js-validate-form">
                        @csrf

                        <input type="hidden" name="service" value="{{ $serviceKey ?? '' }}">
                        <input type="hidden" name="subject" value="Service enquiry: {{ $serviceTitle ?? 'Service' }}">

                        <div class="cs-field">
                            <label for="name">Name</label>
                            <input id="name" name="name" type="text" value="{{ old('name') }}" required>
                        </div>

                        <div class="cs-field">
                            <label for="email">Email</label>
                            <input id="email" name="email" type="email" value="{{ old('email') }}" required>
                        </div>

                        <div class="cs-field">
                            <label for="phone">Phone (optional)</label>
                            <input id="phone" name="phone" type="text" value="{{ old('phone') }}">
                        </div>

                        <div class="cs-field">
                            <label for="message">Message</label>
                            <textarea id="message" name="message" rows="4" required>{{ old('message') }}</textarea>
                        </div>

                        <button type="submit" class="cs-btn">Send enquiry</button>

                        <div class="cs-hint">
                            Prefer email? <a href="mailto:contact@clouddigitallabs.ae">contact@clouddigitallabs.ae</a>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
</section>
@endsection

@push('styles')
<style>
/* ==========================================================
   Coming Soon - Dark Tech (Compact single-fold version)
   Scoped to .service-coming-soon.cs-onefold only
   ========================================================== */

.service-coming-soon.cs-onefold{
    --primary: #ff5a00;
    --primary-glow: rgba(255, 90, 0, 0.30);
    --bg-dark: #05070a;
    --card-bg: rgba(255, 255, 255, 0.035);
    --border-glass: rgba(255, 255, 255, 0.09);
    --text-muted: rgba(255,255,255,.62);

    --headerH: 86px;  /* adjust if your sticky header differs */
    --maxW: 1240px;
    --gutter: 24px;
    --gap: 48px;

    min-height: calc(100vh - var(--headerH));
    padding: 34px 0;
    display: flex;
    align-items: center;

    background: var(--bg-dark);
    color: #fff;
    position: relative;
    overflow: hidden;
}

/* Background layers */
.service-coming-soon.cs-onefold::before{
    content:"";
    position:absolute;
    inset:0;
    background:
        radial-gradient(circle at 18% 35%, rgba(255, 90, 0, 0.10) 0%, transparent 45%),
        radial-gradient(circle at 78% 60%, rgba(37, 99, 235, 0.08) 0%, transparent 45%);
    z-index:0;
    pointer-events:none;
}

.service-coming-soon.cs-onefold::after{
    content:"";
    position:absolute;
    inset:0;
    background-image: url("data:image/svg+xml,%3Csvg width='60' height='60' viewBox='0 0 60 60' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M54 48c2.209 0 4 1.791 4 4s-1.791 4-4 4-4-1.791-4-4 1.791-4 4-4zM6 48c2.209 0 4 1.791 4 4s-1.791 4-4 4-4-1.791-4-4 1.791-4 4-4zM30 24c2.209 0 4 1.791 4 4s-1.791 4-4 4-4-1.791-4-4 1.791-4 4-4zM54 0c2.209 0 4 1.791 4 4s-1.791 4-4 4-4-1.791-4-4 1.791-4 4-4zM6 0c2.209 0 4 1.791 4 4s-1.791 4-4 4-4-1.791-4-4 1.791-4 4-4z' fill='%23ffffff' fill-opacity='0.02' fill-rule='evenodd'/%3E%3C/svg%3E");
    z-index:0;
    pointer-events:none;
}

/* Container */
.service-coming-soon.cs-onefold .auto-container{
    position: relative;
    z-index: 2;
    width: 100%;
    max-width: var(--maxW) !important;
    margin: 0 auto !important;
    padding-left: var(--gutter) !important;
    padding-right: var(--gutter) !important;
}

/* Grid */
.service-coming-soon.cs-onefold .cs-wrap{
    display: grid;
    grid-template-columns: minmax(500px, 1.05fr) minmax(420px, .95fr);
    gap: var(--gap);
    align-items: start;
}

.service-coming-soon.cs-onefold .cs-left{ padding-top: 4px; }
.service-coming-soon.cs-onefold .cs-right{
    justify-self: end;
    width: 100%;
    max-width: 520px;
}

/* Pill */
.service-coming-soon.cs-onefold .cs-pill{
    display: inline-flex;
    align-items: center;
    height: 32px;
    padding: 0 12px;
    background: rgba(255, 90, 0, 0.10);
    border: 1px solid rgba(255, 90, 0, 0.55);
    color: var(--primary);
    border-radius: 8px;
    font-size: 10.5px;
    font-weight: 800;
    text-transform: uppercase;
    letter-spacing: 0.14em;
    margin: 0 0 14px 0;
}

/* Title + Subtitle (smaller to fit fold) */
.service-coming-soon.cs-onefold .cs-title{
    margin: 0 0 10px 0;
    font-size: clamp(34px, 3.6vw, 56px);
    font-weight: 850;
    line-height: 1.02;
    letter-spacing: -0.6px;
    background: linear-gradient(to bottom, #fff 40%, rgba(255,255,255,0.72));
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
}

.service-coming-soon.cs-onefold .cs-subtitle{
    margin: 0 0 18px 0;
    font-size: 14px;
    color: var(--text-muted);
    line-height: 1.55;
    max-width: 56ch;
}

/* Points */
.service-coming-soon.cs-onefold .cs-points{
    display: grid;
    gap: 12px;
    margin: 0;
    padding: 0;
}

.service-coming-soon.cs-onefold .cs-point{
    display: flex;
    align-items: flex-start;
    gap: 12px;
    background: var(--card-bg);
    padding: 14px 14px;
    border-radius: 12px;
    border: 1px solid var(--border-glass);
    backdrop-filter: blur(12px);
    margin: 0;
}

.service-coming-soon.cs-onefold .cs-dot{
    width: 9px;
    height: 9px;
    background: var(--primary);
    border-radius: 50%;
    margin-top: 7px;
    box-shadow: 0 0 12px rgba(255, 90, 0, 0.55);
    flex: 0 0 auto;
}

.service-coming-soon.cs-onefold .cs-point-title{
    font-weight: 800;
    font-size: 14px;
    margin: 0 0 3px 0;
}

.service-coming-soon.cs-onefold .cs-point-text{
    font-size: 12px;
    color: rgba(255, 255, 255, 0.50);
    margin: 0;
    line-height: 1.5;
}

/* Card (compact) */
.service-coming-soon.cs-onefold .cs-card{
    background: rgba(255, 255, 255, 0.03);
    backdrop-filter: blur(18px);
    border: 1px solid rgba(255,255,255,0.10);
    border-radius: 18px;
    padding: 24px 22px;
    box-shadow: 0 40px 110px rgba(0, 0, 0, 0.46);
}

.service-coming-soon.cs-onefold .cs-card-title{
    margin: 0 0 6px 0;
    font-size: 22px;
    font-weight: 850;
}
.service-coming-soon.cs-onefold .cs-card-subtitle{
    margin: 0 0 14px 0;
    color: rgba(255,255,255,0.54);
    font-size: 13px;
    line-height: 1.45;
}

/* Form (compact) */
.service-coming-soon.cs-onefold .cs-form{
    display: grid;
    gap: 12px;
}

.service-coming-soon.cs-onefold .cs-field{ margin: 0; }

.service-coming-soon.cs-onefold .cs-field label{
    display: block;
    margin: 0 0 6px 0;
    font-size: 11px;
    text-transform: uppercase;
    letter-spacing: 0.10em;
    color: rgba(255,255,255,0.45);
    font-weight: 700;
}

.service-coming-soon.cs-onefold .cs-field input,
.service-coming-soon.cs-onefold .cs-field textarea{
    width: 100%;
    border-radius: 9px;
    padding: 11px 12px;
    background: rgba(255, 255, 255, 0.05) !important;
    border: 1px solid rgba(255,255,255,0.10) !important;
    color: #fff !important;
    font-size: 14px;
    outline: none;
    transition: .2s ease;
}

.service-coming-soon.cs-onefold .cs-field textarea{
    min-height: 84px;
    resize: vertical;
}

.service-coming-soon.cs-onefold .cs-field input:focus,
.service-coming-soon.cs-onefold .cs-field textarea:focus{
    background: rgba(255, 255, 255, 0.08) !important;
    border-color: rgba(255, 90, 0, 0.75) !important;
    box-shadow: 0 0 0 4px rgba(255, 90, 0, 0.12);
}

/* Button (compact) */
.service-coming-soon.cs-onefold .cs-btn{
    width: 100%;
    padding: 12px 14px;
    border-radius: 9px;
    background: var(--primary) !important;
    border: none !important;
    color: #fff !important;
    font-weight: 850;
    font-size: 14px;
    letter-spacing: 0.08em;
    text-transform: uppercase;
    cursor: pointer;
    box-shadow: 0 14px 28px var(--primary-glow);
    transition: .2s ease;
}
.service-coming-soon.cs-onefold .cs-btn:hover{
    transform: translateY(-1px);
    box-shadow: 0 18px 36px rgba(255, 90, 0, 0.34);
    filter: brightness(1.03);
}

/* Hint */
.service-coming-soon.cs-onefold .cs-hint{
    margin-top: 4px;
    text-align: center;
    font-size: 12px;
    color: rgba(255,255,255,0.45);
}
.service-coming-soon.cs-onefold .cs-hint a{
    color: var(--primary);
    text-decoration: none;
    font-weight: 700;
}
.service-coming-soon.cs-onefold .cs-hint a:hover{ text-decoration: underline; }

/* Alerts */
.service-coming-soon.cs-onefold .cs-alert{
    border-radius: 12px;
    padding: 10px 12px;
    font-size: 13px;
    margin-bottom: 10px;
}
.service-coming-soon.cs-onefold .cs-alert-success{
    border: 1px solid rgba(46, 204, 113, 0.35);
    background: rgba(46, 204, 113, 0.12);
}
.service-coming-soon.cs-onefold .cs-alert-error{
    border: 1px solid rgba(231, 76, 60, 0.35);
    background: rgba(231, 76, 60, 0.12);
}
.service-coming-soon.cs-onefold .cs-alert-error ul{
    margin: 0;
    padding-left: 18px;
}

/* Responsive */
@media (max-width: 991px){
    .service-coming-soon.cs-onefold{
        min-height: auto;
        padding: 92px 0 70px;
        align-items: flex-start;
    }

    .service-coming-soon.cs-onefold .cs-wrap{
        grid-template-columns: 1fr;
        gap: 26px;
        align-items: stretch;
    }

    .service-coming-soon.cs-onefold .cs-right{
        justify-self: stretch;
        max-width: 100%;
    }

    .service-coming-soon.cs-onefold .cs-title{
        font-size: 40px;
    }

    .service-coming-soon.cs-onefold .cs-field textarea{
        min-height: 110px;
    }
}
</style>
@endpush
