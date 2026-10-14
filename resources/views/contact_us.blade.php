@extends('layouts.cloudtech')

@section('title', 'Contact Cloud Technologies | SEO & Digital Marketing UK')
@section('meta_title', 'Contact Cloud Technologies | SEO & Digital Marketing UK')
@section('meta_description', 'Contact Cloud Technologies for SEO services, website development and digital marketing. Speak with our team about your online growth goals.')
@section('meta_keywords', 'contact us, SEO services, website development, digital marketing, Cloud Technologies UK')

@push('styles')
    <link rel="stylesheet" href="{{ asset('assets/contact/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/footer.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/header.css') }}">
@endpush

@push('scripts')
    <script src="{{ asset('assets/contact/js/script.js') }}" defer></script>
    <script src="{{ asset('assets/js/simple-validation.js') }}" defer></script>
@endpush

@section('content')
@php
    $company = $globalCompany ?? null;
    $companyName = $company?->legal_name ?: ($company?->brand_name ?: 'Cloud Technologies Ltd');
    $contactEmail = $company?->primary_email ?: 'contact@cloudtechnologiesltd.co.uk';
    $phoneOne = '+44 7427 547394';
    $phoneTwo = '+44 7835 761525';
    $officeAddress = '174 London, Sugar House Island, The Type Building, 1st Floor, London, E15 2TP, Greater London, England, United Kingdom.';
    $mapUrl = 'https://www.google.com/maps/place/Cloud+Techchologies+Ltd/@51.5921252,0.083456,17z/data=!3m1!4b1!4m6!3m5!1s0x41b52610d813d269:0x5d8c3ee0d701e47f!8m2!3d51.5921252!4d0.083456!16s%2Fg%2F11nc28rgjs?hl=en&entry=ttu&g_ep=EgoyMDI2MTAwNy4wIKXMDSoASAFQAw%3D%3D';
@endphp

<main class="ct-contact-page">
    {{-- HERO --}}
    <section class="ct-contact-hero" id="contact-hero">
        <div class="ct-contact-hero__image" aria-hidden="true"></div>
        <div class="ct-contact-hero__shade" aria-hidden="true"></div>

        <div class="ct-contact-hero__inner">
            <p class="ct-eyebrow"><span>Contact Us</span></p>
            <h1>Let’s Grow Your<br><span>Business Online</span></h1>
            <p class="ct-contact-hero__intro">
                Looking to improve your Google rankings, attract more relevant traffic and generate quality leads?
                Contact Cloud Technologies Ltd for expert SEO services tailored to your business goals.
            </p>

            <div class="ct-benefits" aria-label="Our benefits">
                <div class="ct-benefit">
                    <span class="ct-benefit__icon" aria-hidden="true">
                        <svg viewBox="0 0 24 24"><path d="M4 19V13h4v6M10 19V9h4v10M16 19V4h4v15M2 21h20"/></svg>
                    </span>
                    <span>Higher<br>Rankings</span>
                </div>
                <span class="ct-benefits__divider" aria-hidden="true"></span>
                <div class="ct-benefit">
                    <span class="ct-benefit__icon" aria-hidden="true">
                        <svg viewBox="0 0 24 24"><circle cx="9" cy="8" r="3"/><circle cx="17" cy="9" r="2.5"/><path d="M2.5 20v-2a6.5 6.5 0 0 1 13 0v2zM15 14a5 5 0 0 1 6.5 5v1H17"/></svg>
                    </span>
                    <span>More<br>Traffic</span>
                </div>
                <span class="ct-benefits__divider" aria-hidden="true"></span>
                <div class="ct-benefit">
                    <span class="ct-benefit__icon" aria-hidden="true">
                        <svg viewBox="0 0 24 24"><path d="M3 4h18l-7 8v6l-4 2v-8z"/></svg>
                    </span>
                    <span>Better<br>Leads</span>
                </div>
                <span class="ct-benefits__divider" aria-hidden="true"></span>
                <div class="ct-benefit">
                    <span class="ct-benefit__icon" aria-hidden="true">
                        <svg viewBox="0 0 24 24"><path d="M12 2v3m0 14v3M2 12h3m14 0h3M4.9 4.9 7 7m10 10 2.1 2.1m0-14.2L17 7M7 17l-2.1 2.1"/><circle cx="12" cy="12" r="5"/></svg>
                    </span>
                    <span>Measurable<br>Results</span>
                </div>
            </div>
        </div>
    </section>

    {{-- CONTACT DETAILS + FORM --}}
    <section class="ct-contact-main" id="contact-form">
        <div class="ct-contact-columns">
            <section class="ct-contact-details" aria-labelledby="get-in-touch-title">
                <h2 id="get-in-touch-title">Get in <span>Touch</span></h2>
                <p class="ct-panel-intro">
                    We’re here to help your business grow online. Speak to our team about your SEO goals,
                    website requirements and opportunities for growth.
                </p>

                <article class="ct-detail-card">
                    <span class="ct-detail-card__icon" aria-hidden="true">
                        <svg viewBox="0 0 24 24"><path d="M6.6 2.8 10 2l2 5-2.1 1.7a15 15 0 0 0 5.4 5.4L17 12l5 2-.8 3.4a3 3 0 0 1-3.3 2.3A18.5 18.5 0 0 1 4.3 6.1a3 3 0 0 1 2.3-3.3Z"/></svg>
                    </span>
                    <div class="ct-detail-card__content">
                        <h3>Call Us</h3>
                        <p>Discuss your project and SEO requirements directly with our team.</p>
                        <div class="ct-contact-inline">
                            <a href="tel:+447427547394">{{ $phoneOne }}</a>
                            <span aria-hidden="true"></span>
                            <a href="tel:+447835761525">{{ $phoneTwo }}</a>
                        </div>
                    </div>
                </article>

                <article class="ct-detail-card">
                    <span class="ct-detail-card__icon" aria-hidden="true">
                        <svg viewBox="0 0 24 24"><rect x="2" y="4" width="20" height="16" rx="1.5"/><path d="m3 6 9 7 9-7"/></svg>
                    </span>
                    <div class="ct-detail-card__content">
                        <h3>Email Us</h3>
                        <p>Send us your questions or project details.</p>
                        <a class="ct-contact-email" href="mailto:{{ $contactEmail }}">{{ $contactEmail }}</a>
                        <p class="ct-detail-card__note">We typically respond within one business day.</p>
                    </div>
                </article>

                <article class="ct-detail-card ct-detail-card--office">
                    <span class="ct-detail-card__icon" aria-hidden="true">
                        <svg viewBox="0 0 24 24"><path d="M20 10c0 5-8 12-8 12S4 15 4 10a8 8 0 1 1 16 0Z"/><circle cx="12" cy="10" r="2.5"/></svg>
                    </span>
                    <div class="ct-detail-card__content">
                        <h3>Visit Our Office</h3>
                        <strong>{{ $companyName }}</strong>
                        <p>{{ $officeAddress }}</p>
                        <p class="ct-detail-card__note">Prefer an online meeting? Get in touch to discuss your project.</p>
                    </div>
                </article>
            </section>

            <section class="ct-message-panel" aria-labelledby="send-message-title">
                <h2 id="send-message-title">Send Us a <span>Message</span></h2>
                <h3>Tell Us About Your Project</h3>
                <p class="ct-message-panel__intro">
                    Fill in the form, and our team will review your requirements and recommend the next steps.
                </p>

                <form class="ct-contact-form js-validate-form" method="POST" id="simple_contact_form"
                    action="{{ Route::has('contact.send') ? route('contact.send') : (Route::has('contact.submit') ? route('contact.submit') : url('/contact')) }}"
                    novalidate>
                    @csrf
                    <input type="hidden" name="form_key" value="main_contact">
                    <input type="hidden" name="source_page" value="{{ request()->path() }}">

                    <div class="ct-form-grid">
                        <label class="ct-input-wrap">
                            <span class="ct-input-icon" aria-hidden="true">
                                <svg viewBox="0 0 24 24"><circle cx="12" cy="7" r="4"/><path d="M4 21v-2a8 8 0 0 1 16 0v2z"/></svg>
                            </span>
                            <input id="name" name="name" type="text" placeholder="Full Name *" autocomplete="name" required>
                        </label>

                        <label class="ct-input-wrap">
                            <span class="ct-input-icon" aria-hidden="true">
                                <svg viewBox="0 0 24 24"><rect x="2" y="4" width="20" height="16" rx="1.5"/><path d="m3 6 9 7 9-7"/></svg>
                            </span>
                            <input id="email" name="email" type="email" placeholder="Email Address *" autocomplete="email" required>
                        </label>

                        <label class="ct-input-wrap">
                            <span class="ct-input-icon" aria-hidden="true">
                                <svg viewBox="0 0 24 24"><path d="M6.6 2.8 10 2l2 5-2.1 1.7a15 15 0 0 0 5.4 5.4L17 12l5 2-.8 3.4a3 3 0 0 1-3.3 2.3A18.5 18.5 0 0 1 4.3 6.1a3 3 0 0 1 2.3-3.3Z"/></svg>
                            </span>
                            <input id="phone" name="phone" type="tel" placeholder="Phone Number *" autocomplete="tel" required>
                        </label>

                        <label class="ct-input-wrap">
                            <span class="ct-input-icon" aria-hidden="true">
                                <svg viewBox="0 0 24 24"><path d="M10 13a5 5 0 0 0 7.1 0l3-3A5 5 0 0 0 13 2.9l-1.7 1.7"/><path d="M14 11a5 5 0 0 0-7.1 0l-3 3A5 5 0 0 0 11 21.1l1.7-1.7"/></svg>
                            </span>
                            <input id="website" name="website" type="url" placeholder="Business Website" autocomplete="url">
                        </label>

                        <label class="ct-input-wrap ct-input-wrap--select">
                            <span class="ct-input-icon" aria-hidden="true">
                                <svg viewBox="0 0 24 24"><rect x="3" y="3" width="18" height="18" rx="2"/><path d="M7 7h10M7 12h10M7 17h6"/></svg>
                            </span>
                            <select id="service" name="service" required>
                                <option value="">Service Required *</option>
                                <option>SEO Services</option>
                                <option>Website Development</option>
                                <option>Digital Marketing</option>
                                <option>UI/UX Design</option>
                                <option>Branding</option>
                                <option>Custom PHP Development</option>
                            </select>
                        </label>

                        <label class="ct-input-wrap ct-input-wrap--textarea">
                            <span class="ct-input-icon" aria-hidden="true">
                                <svg viewBox="0 0 24 24"><path d="M4 4h16v13H8l-4 3z"/><path d="M8 8h8M8 12h6"/></svg>
                            </span>
                            <textarea id="message" name="message" rows="4" placeholder="Your Message *" required></textarea>
                        </label>
                    </div>

                    <p class="ct-services-line"><strong>Services:</strong> SEO Services, Website Development &amp; Digital Marketing</p>

                    <button class="ct-submit-button" type="submit">
                        <span>Send Message</span>
                        <span aria-hidden="true">⟶</span>
                    </button>

                    <p class="ct-privacy-note">
                        <svg viewBox="0 0 24 24" aria-hidden="true"><rect x="5" y="10" width="14" height="11" rx="2"/><path d="M8 10V7a4 4 0 0 1 8 0v3M12 14v3"/></svg>
                        Your information will be handled in accordance with our <a href="{{ url('/privacy-policy') }}">privacy policy</a>.
                    </p>
                    <div class="ct-form-status" aria-live="polite" id="formMeta"></div>
                </form>
            </section>
        </div>
    </section>

    {{-- LONDON OFFICE --}}
    <section class="ct-london-office" aria-labelledby="london-office-title">
        <div class="ct-london-office__copy">
            <h2 id="london-office-title">Our <span>London Office</span></h2>
            <p>Visit our London office or arrange an online consultation to discuss your business objectives and digital strategy.</p>
            <div class="ct-office-benefits">
                <div>
                    <span aria-hidden="true"><svg viewBox="0 0 24 24"><rect x="3" y="5" width="18" height="16" rx="2"/><path d="M7 2v6M17 2v6M3 10h18M8 14h3M8 17h3"/></svg></span>
                    <strong>Free<br>Consultation</strong>
                </div>
                <div>
                    <span aria-hidden="true"><svg viewBox="0 0 24 24"><path d="M3 4h18v13H8l-5 4z"/><path d="M7 8h10M7 12h7"/></svg></span>
                    <strong>Expert<br>Advice</strong>
                </div>
                <div>
                    <span aria-hidden="true"><svg viewBox="0 0 24 24"><path d="M3 13v-2a9 9 0 0 1 18 0v2"/><rect x="2" y="12" width="5" height="8" rx="2"/><rect x="17" y="12" width="5" height="8" rx="2"/><path d="M17 20h-5"/></svg></span>
                    <strong>Tailored<br>Strategy</strong>
                </div>
            </div>
        </div>

        <a class="ct-office-photo" href="{{ $mapUrl }}" target="_blank" rel="noopener noreferrer" aria-label="View our London office location">
            <span>Cloud Technologies Ltd</span>
        </a>

        <div class="ct-office-map">
            <iframe
                title="Map showing Cloud Technologies Ltd London office"
                src="https://maps.google.com/maps?q=51.5921252%2C0.083456&amp;z=17&amp;output=embed"
                loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"
                allowfullscreen>
            </iframe>
            <a class="ct-map-link" href="{{ $mapUrl }}" target="_blank" rel="noopener noreferrer">Open map ↗</a>
        </div>
    </section>
</main>
@endsection
