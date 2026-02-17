@if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif
@php
    $brandName = $globalCompany?->brand_name ?? 'Cloud Technologies';

    $siteLogoLight = !empty($globalCompany?->logo_light_path) ? asset($globalCompany->logo_light_path) : null;
    $siteLogoDark = !empty($globalCompany?->logo_dark_path) ? asset($globalCompany->logo_dark_path) : null;
@endphp

<div class="ct-modal" id="consultationModal" aria-hidden="true">
    <div class="ct-modal__overlay" data-close="true"></div>

    <div class="ct-modal__dialog ct-modal__dialog--xl" role="dialog" aria-modal="true"
        aria-labelledby="consultationModalTitle">
        <button class="ct-modal__close" type="button" aria-label="Close modal" data-close="true">×</button>

        {{-- Header --}}
        <div class="ct-modal__top">
            <div class="ct-brand">
                {{-- Replace with your actual logo path if needed --}}
                @if ($siteLogoLight || $siteLogoDark)
                    @if ($siteLogoLight)
                        <img class="ct-brand__logo" src="{{ $siteLogoLight }}" alt="{{ $brandName }} logo">
                    @endif
                @else
                    <span class="logo-mark">CT</span>
                @endif
            </div>

            <div class="ct-pill">
                <span class="ct-pill__dot"></span>
                <span>200+ Projects Delivered • Operating Since 2019</span>
            </div>

            <h2 class="ct-modal__title" id="consultationModalTitle">Let's Build Something Great</h2>

            <div class="ct-badges">
                <span class="ct-badge">
                    <span class="ct-badge__icon">💬</span>
                    Speak with Founder
                </span>
                <span class="ct-badge">
                    <span class="ct-badge__icon">⏱</span>
                    Response in 1 Hour
                </span>
            </div>
        </div>

        {{-- Stepper --}}
        <div class="ct-stepper" aria-label="Consultation steps">
            <div class="ct-step is-active" data-step-indicator="1">
                <div class="ct-step__circle">1</div>
                <div class="ct-step__label">Personal Info</div>
            </div>
            <div class="ct-step__line"></div>
            <div class="ct-step" data-step-indicator="2">
                <div class="ct-step__circle">2</div>
                <div class="ct-step__label">Project Details</div>
            </div>
            <div class="ct-step__line"></div>
            <div class="ct-step" data-step-indicator="3">
                <div class="ct-step__circle">3</div>
                <div class="ct-step__label">Final Details</div>
            </div>
        </div>

        <form class="ct-modal__form" method="POST" action="{{ route('consultations.store') }}"
            id="consultationWizardForm">
            @csrf

            @php
                $projectTypes = [
                    'new_website' => 'New Website',
                    'redesign' => 'Redesign / Revamp',
                    'ecommerce' => 'E-commerce Website',
                    'web_app' => 'Web Application',
                    'mobile_app' => 'Mobile App',
                    'seo' => 'SEO Project',
                    'marketing' => 'Marketing Campaign',
                    'other' => 'Other',
                ];

                $servicesNeeded = [
                    'website_dev' => 'Website Development',
                    'ecommerce_dev' => 'E-commerce Development',
                    'uiux' => 'UI/UX Design',
                    'seo' => 'SEO',
                    'google_ads' => 'Google Ads (PPC)',
                    'social_media' => 'Social Media Marketing',
                    'branding' => 'Branding',
                    'maintenance' => 'Maintenance & Hosting',
                    'other' => 'Other',
                ];

                $budgetRanges = [
                    'under_500' => 'Under £500',
                    '500_1500' => '£500 - £1,500',
                    '1500_5000' => '£1,500 - £5,000',
                    '5000_10000' => '£5,000 - £10,000',
                    '10000_plus' => '£10,000+',
                ];

                $timelines = [
                    'asap' => 'ASAP',
                    '2_4_weeks' => '2 - 4 Weeks',
                    '1_3_months' => '1 - 3 Months',
                    '3_6_months' => '3 - 6 Months',
                    'flexible' => 'Flexible',
                ];

                $hearAbout = [
                    'google' => 'Google Search',
                    'facebook' => 'Facebook',
                    'instagram' => 'Instagram',
                    'linkedin' => 'LinkedIn',
                    'referral' => 'Referral',
                    'email' => 'Email',
                    'other' => 'Other',
                ];

                $urgency = [
                    'low' => 'Low',
                    'medium' => 'Medium',
                    'high' => 'High',
                    'immediate' => 'Immediate',
                ];
            @endphp

            {{-- STEP 1 --}}
            <section class="ct-stepPanel is-active" data-step="1">
                <div class="ct-grid">
                    <div class="ct-field">
                        <label for="full_name">Full Name <span class="req">*</span></label>
                        <input id="full_name" name="full_name" type="text" required value="{{ old('full_name') }}"
                            placeholder="John Doe">
                    </div>

                    <div class="ct-field">
                        <label for="email">Email Address <span class="req">*</span></label>
                        <input id="email" name="email" type="email" required value="{{ old('email') }}"
                            placeholder="john@example.com">
                    </div>

                    <div class="ct-field">
                        <label for="phone">Phone Number <span class="req">*</span></label>
                        <input id="phone" name="phone" type="text" required value="{{ old('phone') }}"
                            placeholder="+1 (555) 000-0000">
                    </div>

                    <div class="ct-field">
                        <label for="company_name">Company Name</label>
                        <input id="company_name" name="company_name" type="text" value="{{ old('company_name') }}"
                            placeholder="Your Company">
                    </div>
                </div>

                <div class="ct-actions">
                    <span></span>
                    <button type="button" class="ct-btn ct-btn--primary" data-next>
                        Next Step <span class="ct-btn__arrow">›</span>
                    </button>
                </div>
            </section>

            {{-- STEP 2 --}}
            <section class="ct-stepPanel" data-step="2">
                <div class="ct-grid">
                    <div class="ct-field">
                        <label for="project_type">Project Type <span class="req">*</span></label>
                        <select id="project_type" name="project_type" required>
                            <option value="" selected>Select project type</option>
                            @foreach ($projectTypes as $k => $label)
                                <option value="{{ $k }}" @selected(old('project_type') === $k)>{{ $label }}
                                </option>
                            @endforeach
                        </select>
                    </div>

                    <div class="ct-field">
                        <label for="service_needed">Service Needed <span class="req">*</span></label>
                        <select id="service_needed" name="service_needed" required>
                            <option value="" selected>Select service</option>
                            @foreach ($servicesNeeded as $k => $label)
                                <option value="{{ $k }}" @selected(old('service_needed') === $k)>{{ $label }}
                                </option>
                            @endforeach
                        </select>
                    </div>

                    <div class="ct-field ct-field--full">
                        <label for="industry">Industry</label>
                        <input id="industry" name="industry" type="text" value="{{ old('industry') }}"
                            placeholder="E.g., Healthcare, Finance, Education">
                    </div>

                    <div class="ct-field ct-field--full">
                        <label for="project_description">Project Description <span class="req">*</span></label>
                        <textarea id="project_description" name="project_description" rows="4" required
                            placeholder="Tell us about your project goals, features, and requirements...">{{ old('project_description') }}</textarea>
                    </div>

                    <div class="ct-field">
                        <label for="budget_range">Budget Range <span class="req">*</span></label>
                        <select id="budget_range" name="budget_range" required>
                            <option value="" selected>Select budget</option>
                            @foreach ($budgetRanges as $k => $label)
                                <option value="{{ $k }}" @selected(old('budget_range') === $k)>{{ $label }}
                                </option>
                            @endforeach
                        </select>
                    </div>

                    <div class="ct-field">
                        <label for="timeline">Timeline <span class="req">*</span></label>
                        <select id="timeline" name="timeline" required>
                            <option value="" selected>Select timeline</option>
                            @foreach ($timelines as $k => $label)
                                <option value="{{ $k }}" @selected(old('timeline') === $k)>{{ $label }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="ct-actions">
                    <button type="button" class="ct-btn ct-btn--ghost" data-prev>Previous</button>
                    <button type="button" class="ct-btn ct-btn--primary" data-next>
                        Next Step <span class="ct-btn__arrow">›</span>
                    </button>
                </div>
            </section>

            {{-- STEP 3 --}}
            <section class="ct-stepPanel" data-step="3">
                <div class="ct-grid">
                    <div class="ct-field ct-field--full">
                        <label for="specific_requirements">Specific Requirements or Features</label>
                        <textarea id="specific_requirements" name="specific_requirements" rows="4"
                            placeholder="List any specific features, integrations, or technical requirements...">{{ old('specific_requirements') }}</textarea>
                    </div>

                    <div class="ct-field ct-field--full">
                        <label for="reference_projects">Reference Projects or Inspiration</label>
                        <input id="reference_projects" name="reference_projects" type="text"
                            value="{{ old('reference_projects') }}"
                            placeholder="Share links to projects you like or that inspire you">
                    </div>

                    <div class="ct-field">
                        <label for="hear_about_us">How Did You Hear About Us?</label>
                        <select id="hear_about_us" name="hear_about_us">
                            <option value="" selected>Select option</option>
                            @foreach ($hearAbout as $k => $label)
                                <option value="{{ $k }}" @selected(old('hear_about_us') === $k)>{{ $label }}
                                </option>
                            @endforeach
                        </select>
                    </div>

                    <div class="ct-field">
                        <label for="project_urgency">Project Urgency</label>
                        <select id="project_urgency" name="project_urgency">
                            <option value="" selected>Select urgency</option>
                            @foreach ($urgency as $k => $label)
                                <option value="{{ $k }}" @selected(old('project_urgency') === $k)>{{ $label }}
                                </option>
                            @endforeach
                        </select>
                    </div>

                    <div class="ct-info ct-field--full">
                        <strong>What happens next?</strong>
                        You’ll receive a confirmation email immediately, and our founder will personally reach out to
                        you within 1 hour to discuss your project in detail.
                    </div>
                </div>

                <div class="ct-actions">
                    <button type="button" class="ct-btn ct-btn--ghost" data-prev>Previous</button>
                    <button type="submit" class="ct-btn ct-btn--primary ct-btn--wide">
                        Submit &amp; Get Free Consultation
                    </button>
                </div>
            </section>

            <p class="ct-privacy">
                We respect your privacy. Your information is secure and will never be shared with third parties.
            </p>
        </form>
    </div>
</div>

<style>
    /* =========================================================
   Consultation Wizard Modal (Compact + CloudTech UI)
   ========================================================= */

    :root {
        --ct-bg: #fff;
        --ct-text: #0b1220;
        --ct-muted: rgba(11, 18, 32, .70);
        --ct-border: rgba(16, 56, 128, .12);
        --ct-border-strong: rgba(16, 56, 128, .18);
        --ct-overlay: rgba(11, 18, 32, .55);

        --ct-accent: #ff8a00;
        --ct-accent-soft: rgba(255, 138, 0, .10);

        --ct-shadow: 0 22px 70px rgba(11, 18, 32, .18);
        --ct-radius: 18px;

        --ct-pad: 18px;
        --ct-gap: 12px;

        --ct-font: system-ui, -apple-system, Segoe UI, Roboto, "Helvetica Neue", Arial, "Noto Sans", "Liberation Sans", sans-serif;
    }

    .ct-modal,
    .ct-modal * {
        box-sizing: border-box;
    }

    .ct-modal {
        font-family: var(--ct-font);
    }

    /* Modal shell */
    .ct-modal {
        position: fixed;
        inset: 0;
        display: none;
        z-index: 9999;
    }

    .ct-modal.is-open {
        display: block;
    }

    .ct-modal__overlay {
        position: absolute;
        inset: 0;
        background: var(--ct-overlay);
    }

    /* Dialog */
    .ct-modal__dialog {
        position: relative;
        width: calc(100vw - 24px);
        max-width: 980px;
        margin: 7vh auto;
        background: var(--ct-bg);
        border: 1px solid var(--ct-border);
        border-radius: var(--ct-radius);
        box-shadow: var(--ct-shadow);
        padding: var(--ct-pad);
        max-height: 86vh;
        overflow: auto;
        -webkit-overflow-scrolling: touch;

        transform: translateY(10px);
        animation: ctModalIn .18s ease-out forwards;
    }

    @keyframes ctModalIn {
        to {
            transform: translateY(0);
        }
    }

    /* Small screens: fullscreen-like */
    @media (max-width: 640px) {
        .ct-modal__dialog {
            width: 100%;
            max-width: 100%;
            margin: 0;
            max-height: 100vh;
            border-radius: 0;
            padding: 14px 12px 12px;
        }
    }

    .ct-modal__close {
        position: absolute;
        top: 10px;
        right: 10px;
        width: 38px;
        height: 38px;
        border: 1px solid var(--ct-border);
        background: #fff;
        border-radius: 12px;
        cursor: pointer;
        font-size: 22px;
        line-height: 1;
    }

    /* Header */
    .ct-modal__top {
        text-align: center;
        padding: 4px 0 12px;
        border-bottom: 1px solid rgba(16, 56, 128, .10);
        margin-bottom: 12px;
    }

    .ct-brand__logo {
        height: 34px;
        width: auto;
        display: inline-block;
    }

    .logo-mark {
        display: inline-flex;
        width: 40px;
        height: 40px;
        border-radius: 14px;
        align-items: center;
        justify-content: center;
        font-weight: 900;
        color: #fff;
        background: var(--ct-accent);
    }

    /* Compact pill */
    .ct-pill {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        gap: 10px;
        max-width: 100%;
        flex-wrap: wrap;
        margin: 10px 0 8px;
        padding: 8px 12px;
        border-radius: 999px;
        border: 1px solid rgba(11, 18, 32, .12);
        box-shadow: 0 8px 18px rgba(11, 18, 32, .06);
        color: rgba(11, 18, 32, .72);
        font-weight: 650;
        font-size: 13px;
    }

    .ct-pill__dot {
        width: 9px;
        height: 9px;
        border-radius: 999px;
        background: var(--ct-accent);
    }

    /* Compact title (match site UI) */
    .ct-modal__title {
        margin: 6px 0 8px;
        font-size: clamp(18px, 2.6vw, 26px);
        line-height: 1.2;
        font-weight: 900;
        color: var(--ct-text);
    }

    /* Compact badges */
    .ct-badges {
        display: flex;
        justify-content: center;
        gap: 10px 18px;
        flex-wrap: wrap;
        margin-bottom: 2px;
    }

    .ct-badge {
        display: inline-flex;
        align-items: center;
        gap: 8px;
        color: rgba(11, 18, 32, .70);
        font-weight: 700;
        font-size: 13px;
    }

    .ct-badge__icon {
        width: 22px;
        height: 22px;
        display: inline-flex;
        align-items: center;
        justify-content: center;
    }

    /* Stepper: mobile stacked */
    .ct-stepper {
        display: grid;
        grid-template-columns: 1fr;
        gap: 10px;
        margin: 12px 0 14px;
    }

    .ct-step {
        display: flex;
        align-items: center;
        gap: 10px;
        padding: 10px 12px;
        border-radius: 14px;
        border: 1px solid rgba(16, 56, 128, .12);
        background: rgba(233, 237, 243, .35);
    }

    .ct-step__circle {
        width: 34px;
        height: 34px;
        border-radius: 999px;
        display: flex;
        align-items: center;
        justify-content: center;
        font-weight: 900;
        background: #e9edf3;
        color: #6b7280;
        flex: 0 0 auto;
        font-size: 13px;
    }

    .ct-step__label {
        font-weight: 850;
        color: rgba(11, 18, 32, .72);
        font-size: 13px;
    }

    .ct-step.is-active .ct-step__circle,
    .ct-step.is-done .ct-step__circle {
        background: var(--ct-accent);
        color: #fff;
    }

    .ct-step.is-active {
        background: #fff;
        border-color: rgba(255, 138, 0, .25);
    }

    .ct-step.is-active .ct-step__label {
        color: var(--ct-text);
    }

    /* Hide connector lines on mobile */
    .ct-step__line {
        display: none;
    }

    /* Desktop stepper (inline) */
    @media (min-width: 860px) {
        .ct-stepper {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 12px;
            margin: 14px 0 16px;
        }

        .ct-step {
            flex-direction: column;
            gap: 6px;
            padding: 0;
            border: 0;
            background: transparent;
            min-width: 140px;
        }

        .ct-step__line {
            display: block;
            width: 100px;
            height: 4px;
            border-radius: 999px;
            background: #e9edf3;
        }
    }

    /* Form grid */
    .ct-modal__form {
        margin-top: 6px;
    }

    .ct-grid {
        display: grid;
        grid-template-columns: 1fr;
        gap: var(--ct-gap);
    }

    @media (min-width: 900px) {
        .ct-grid {
            grid-template-columns: repeat(2, minmax(0, 1fr));
        }
    }

    .ct-field--full {
        grid-column: 1 / -1;
    }

    /* Labels & controls (match your current UI: smaller) */
    .ct-field label {
        display: block;
        font-weight: 800;
        font-size: 13px;
        margin-bottom: 6px;
        color: rgba(11, 18, 32, .82);
    }

    .ct-field input,
    .ct-field select,
    .ct-field textarea {
        width: 100%;
        border: 1px solid var(--ct-border-strong);
        border-radius: 12px;
        padding: 11px 12px;
        font-size: 14px;
        outline: none;
        background: #fff;
        min-height: 44px;
    }

    .ct-field textarea {
        resize: vertical;
        min-height: 100px;
        padding-top: 10px;
    }

    .ct-field input:focus,
    .ct-field select:focus,
    .ct-field textarea:focus {
        border-color: rgba(255, 138, 0, .55);
        box-shadow: 0 0 0 4px var(--ct-accent-soft);
    }

    .req {
        color: #ff3b30;
        font-weight: 900;
    }

    /* Panels */
    .ct-stepPanel {
        display: none;
    }

    .ct-stepPanel.is-active {
        display: block;
    }

    /* Actions */
    .ct-actions {
        display: flex;
        justify-content: space-between;
        align-items: center;
        gap: 10px;
        margin-top: 14px;
    }

    .ct-btn {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        gap: 10px;
        border-radius: 12px;
        padding: 12px 14px;
        font-weight: 900;
        font-size: 14px;
        border: 1px solid var(--ct-border-strong);
        background: #fff;
        color: var(--ct-text);
        cursor: pointer;
        min-height: 44px;
    }

    .ct-btn--ghost {
        background: #fff;
    }

    .ct-btn--primary {
        border-color: transparent;
        background: var(--ct-accent);
        color: #fff;
        box-shadow: 0 14px 34px rgba(255, 138, 0, .20);
        min-width: 160px;
    }

    .ct-btn--wide {
        min-width: 280px;
    }

    .ct-btn__arrow {
        font-size: 16px;
    }

    /* Mobile: stack buttons full width */
    @media (max-width: 640px) {
        .ct-actions {
            flex-direction: column-reverse;
            align-items: stretch;
        }

        .ct-actions>span {
            display: none;
        }

        .ct-btn--primary,
        .ct-btn--wide {
            width: 100%;
            min-width: 0;
        }
    }

    /* Info block */
    .ct-info {
        background: rgba(37, 99, 235, .08);
        border: 1px solid rgba(37, 99, 235, .18);
        color: rgba(11, 18, 32, .85);
        border-radius: 14px;
        padding: 12px 12px;
        font-weight: 650;
        font-size: 13px;
    }

    /* Privacy note */
    .ct-privacy {
        margin: 12px 0 0;
        text-align: center;
        color: rgba(11, 18, 32, .60);
        font-weight: 650;
        font-size: 12.5px;
    }
</style>

<script>
    (function() {
        const openBtns = document.querySelectorAll('.openConsultationModal');
        const modal = document.getElementById('consultationModal');
        if (!modal) return;

        const focusableSelector =
            'a[href], button:not([disabled]), textarea, input, select, [tabindex]:not([tabindex="-1"])';

        let lastActiveEl = null;

        function openModal() {
            lastActiveEl = document.activeElement;
            modal.classList.add('is-open');
            modal.setAttribute('aria-hidden', 'false');
            document.documentElement.style.overflow = 'hidden';

            // Reset to step 1 on open
            setStep(1);

            const first = modal.querySelector(focusableSelector);
            if (first) first.focus();
        }

        function closeModal() {
            modal.classList.remove('is-open');
            modal.setAttribute('aria-hidden', 'true');
            document.documentElement.style.overflow = '';
            if (lastActiveEl) lastActiveEl.focus();
        }

        openBtns.forEach(btn => {
            btn.addEventListener('click', (e) => {
                e.preventDefault();
                openModal();
            });
        });

        modal.addEventListener('click', (e) => {
            if (e.target && e.target.dataset.close === 'true') closeModal();
        });

        document.addEventListener('keydown', (e) => {
            if (!modal.classList.contains('is-open')) return;

            if (e.key === 'Escape') {
                e.preventDefault();
                closeModal();
                return;
            }

            if (e.key === 'Tab') {
                const focusables = Array.from(modal.querySelectorAll(focusableSelector))
                    .filter(el => el.offsetParent !== null);

                if (!focusables.length) return;

                const first = focusables[0];
                const last = focusables[focusables.length - 1];

                if (e.shiftKey && document.activeElement === first) {
                    e.preventDefault();
                    last.focus();
                } else if (!e.shiftKey && document.activeElement === last) {
                    e.preventDefault();
                    first.focus();
                }
            }
        });

        // Wizard logic
        let currentStep = 1;

        function setStep(step) {
            currentStep = step;

            modal.querySelectorAll('.ct-stepPanel').forEach(p => {
                p.classList.toggle('is-active', Number(p.dataset.step) === step);
            });

            modal.querySelectorAll('[data-step-indicator]').forEach(ind => {
                const s = Number(ind.dataset.stepIndicator);
                ind.classList.toggle('is-active', s === step);
                ind.classList.toggle('is-done', s < step);
            });
        }

        function validateCurrentStep() {
            const panel = modal.querySelector('.ct-stepPanel.is-active');
            if (!panel) return true;

            // validate only inputs inside current panel
            const required = Array.from(panel.querySelectorAll('input, select, textarea'));
            for (const el of required) {
                if (!el.checkValidity()) {
                    el.reportValidity();
                    return false;
                }
            }
            return true;
        }

        modal.addEventListener('click', (e) => {
            const nextBtn = e.target.closest('[data-next]');
            const prevBtn = e.target.closest('[data-prev]');

            if (nextBtn) {
                if (!validateCurrentStep()) return;
                if (currentStep < 3) setStep(currentStep + 1);
            }

            if (prevBtn) {
                if (currentStep > 1) setStep(currentStep - 1);
            }
        });

        modal._close = closeModal;
    })();
</script>

{{-- Auto close after success --}}
@if (session('success'))
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const modal = document.getElementById('consultationModal');
            if (modal && modal._close) modal._close();
        });
    </script>
@endif
