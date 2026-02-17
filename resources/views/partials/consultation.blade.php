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
    /* Overlay / modal shell */
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
        background: rgba(11, 18, 32, .65);
    }

    .ct-modal__dialog {
        position: relative;
        width: min(860px, 94vw);
        margin: 6vh auto;
        background: #fff;
        border-radius: 22px;
        border: 1px solid rgba(16, 56, 128, .12);
        box-shadow: 0 28px 90px rgba(11, 18, 32, .25);
        padding: 22px 22px 18px;
        max-height: 88vh;
        overflow: auto;
        transform: translateY(10px);
        animation: ctModalIn .18s ease-out forwards;
    }

    .ct-modal__dialog--xl {
        width: min(980px, 94vw);
    }

    @keyframes ctModalIn {
        to {
            transform: translateY(0);
        }
    }

    .ct-modal__close {
        position: absolute;
        top: 14px;
        right: 14px;
        width: 40px;
        height: 40px;
        border: 1px solid rgba(16, 56, 128, .14);
        background: #fff;
        border-radius: 12px;
        cursor: pointer;
        font-size: 22px;
        line-height: 1;
    }

    /* Header (Figma style) */
    .ct-modal__top {
        text-align: center;
        padding: 6px 0 14px;
        border-bottom: 1px solid rgba(16, 56, 128, .10);
        margin-bottom: 14px;
    }

    .ct-brand__logo {
        height: 40px;
        width: auto;
        display: inline-block;
    }

    .ct-pill {
        display: inline-flex;
        align-items: center;
        gap: 10px;
        margin: 12px 0 10px;
        padding: 10px 16px;
        border-radius: 999px;
        border: 1px solid rgba(11, 18, 32, .12);
        box-shadow: 0 8px 18px rgba(11, 18, 32, .06);
        color: rgba(11, 18, 32, .75);
        font-weight: 600;
    }

    .ct-pill__dot {
        width: 10px;
        height: 10px;
        border-radius: 999px;
        background: #ff8a00;
        display: inline-block;
    }

    .ct-modal__title {
        margin: 6px 0 8px;
        font-size: 34px;
        line-height: 1.15;
        font-weight: 900;
        color: #0b1220;
    }

    .ct-badges {
        display: flex;
        justify-content: center;
        gap: 22px;
        flex-wrap: wrap;
        margin-bottom: 4px;
    }

    .ct-badge {
        display: inline-flex;
        align-items: center;
        gap: 10px;
        color: rgba(11, 18, 32, .72);
        font-weight: 700;
    }

    .ct-badge__icon {
        width: 26px;
        height: 26px;
        display: inline-flex;
        align-items: center;
        justify-content: center;
    }

    /* Stepper */
    .ct-stepper {
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 14px;
        margin: 16px 0 18px;
    }

    .ct-step {
        display: flex;
        flex-direction: column;
        align-items: center;
        gap: 8px;
        min-width: 130px;
    }

    .ct-step__circle {
        width: 44px;
        height: 44px;
        border-radius: 999px;
        display: flex;
        align-items: center;
        justify-content: center;
        font-weight: 900;
        background: #e9edf3;
        color: #6b7280;
    }

    .ct-step.is-active .ct-step__circle,
    .ct-step.is-done .ct-step__circle {
        background: #ff8a00;
        color: #fff;
    }

    .ct-step__label {
        font-weight: 800;
        color: rgba(11, 18, 32, .70);
    }

    .ct-step.is-active .ct-step__label {
        color: #0b1220;
    }

    .ct-step__line {
        width: 120px;
        height: 4px;
        border-radius: 999px;
        background: #e9edf3;
    }

    /* Form fields */
    .ct-grid {
        display: grid;
        grid-template-columns: repeat(2, minmax(0, 1fr));
        gap: 16px;
    }

    .ct-field--full {
        grid-column: 1 / -1;
    }

    .ct-field label {
        display: block;
        font-weight: 800;
        font-size: 14px;
        margin-bottom: 8px;
        color: rgba(11, 18, 32, .82);
    }

    .ct-field input,
    .ct-field select,
    .ct-field textarea {
        width: 100%;
        border: 1px solid rgba(16, 56, 128, .18);
        border-radius: 12px;
        padding: 14px 14px;
        font-size: 15px;
        outline: none;
        background: #fff;
    }

    .ct-field textarea {
        resize: vertical;
        min-height: 110px;
    }

    .ct-field input:focus,
    .ct-field select:focus,
    .ct-field textarea:focus {
        border-color: rgba(255, 138, 0, .65);
        box-shadow: 0 0 0 4px rgba(255, 138, 0, .12);
    }

    .req {
        color: #ff3b30;
        font-weight: 900;
    }

    /* Steps panels */
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
        margin-top: 18px;
    }

    .ct-btn {
        border-radius: 12px;
        padding: 14px 18px;
        font-weight: 900;
        border: 1px solid rgba(16, 56, 128, .18);
        background: #fff;
        cursor: pointer;
    }

    .ct-btn--ghost {
        background: #fff;
        color: #0b1220;
    }

    .ct-btn--primary {
        border-color: transparent;
        background: #ff8a00;
        color: #fff;
        box-shadow: 0 14px 34px rgba(255, 138, 0, .25);
        min-width: 180px;
    }

    .ct-btn--wide {
        min-width: 340px;
    }

    .ct-btn__arrow {
        margin-left: 10px;
        font-size: 18px;
    }

    .ct-info {
        background: rgba(37, 99, 235, .08);
        border: 1px solid rgba(37, 99, 235, .18);
        color: rgba(11, 18, 32, .85);
        border-radius: 14px;
        padding: 14px 14px;
        font-weight: 650;
    }

    .ct-privacy {
        margin: 14px 0 0;
        text-align: center;
        color: rgba(11, 18, 32, .60);
        font-weight: 650;
        font-size: 13px;
    }

    @media (max-width: 820px) {
        .ct-modal__title {
            font-size: 26px;
        }

        .ct-grid {
            grid-template-columns: 1fr;
        }

        .ct-step__line {
            width: 60px;
        }

        .ct-btn--wide {
            min-width: 200px;
            width: 100%;
        }

        .ct-actions {
            gap: 10px;
        }
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
