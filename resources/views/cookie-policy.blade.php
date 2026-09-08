@extends('layouts.cloudtech')
@section('title', 'Cookie Policy | Cloud Technologies Ltd')
@section('meta_title', 'Cookie Policy | Cloud Technologies Ltd')
@section('content')
<section class="legal-page"><div class="container legal-shell"><header class="legal-page__hero"><p class="legal-page__eyebrow">Legal information</p><h1>Cookie Policy</h1><p class="legal-page__subtitle">Cookies and similar technologies used on our website</p></header><article class="legal-document"><p>Last updated: 5 September 2026</p><dl class="legal-details"><dt>Company</dt><dd>Cloud Technologies Ltd</dd><dt>Company number</dt><dd>12036217</dd><dt>Business address</dt><dd>174, 1st Floor, The Type Building, Sugar House Island, Spaces London, England, E15 2TP</dd><dt>Website</dt><dd>www.cloudtechnologiesltd.co.uk</dd><dt>General email</dt><dd>contact@cloudtechnologiesltd.co.uk</dd><dt>Telephone</dt><dd>+44 (0)7835 761525</dd></dl><p>
    
     This Cookie Policy explains how Cloud Technologies Ltd uses cookies and similar technologies on our website and how you can manage your preferences. It should be read together with our Privacy Policy.</p><h2>1. What are cookies?</h2><p>Cookies are small text files or data records stored on or accessed from your device when you visit a website. Similar technologies can include pixels, tags, local storage, software development kits and other identifiers used to operate a website, remember settings, analyse use or support marketing.</p><h2>2. Who is responsible for cookies on this website?</h2><p>Cloud Technologies Ltd, company number 12036217, is responsible for deciding how cookies and similar technologies are used on www.cloudtechnologiesltd.co.uk. Our business address is 174, 1st Floor, The Type Building, Sugar House Island, Spaces London, England, E15 2TP.</p><h2>3. Types of cookies we may use</h2>
   <h3>Strictly necessary cookies</h3>
   <p>These cookies are required for core website functions, security, network management, fraud prevention, consent storage or features you specifically request. Where permitted by law, they may be used without consent because the website cannot function properly without them.</p><h3>Functional cookies</h3><p>These cookies remember choices or settings to provide enhanced functionality, such as language, display preferences or form-related functionality. Where consent is required, they will not be enabled until you choose to allow them.</p><h3>Analytics and performance cookies</h3><p>These technologies help us understand how visitors use our website, which pages are viewed, how visitors arrive and whether errors occur. We may use services such as web analytics tools where configured. Where UK law requires consent, these cookies will be disabled until consent is given.</p><h3>Advertising and marketing cookies</h3><p>Where our website uses advertising, remarketing or conversion-tracking technologies, these may help measure campaigns, limit repeated advertising or build audiences. These technologies are not essential to use the website and will be subject to consent where required.</p><h2>4. First-party and third-party cookies</h2><p>First-party cookies are set by or for our website. Third-party cookies or similar identifiers are set or accessed by independent service providers whose services are embedded in or connected to the website. Third-party providers may process information under their own privacy terms.</p><h2>5. Cookies that may be used on the site</h2><p>The exact cookies present can change as we update our website, plugins and services. Our cookie consent platform or preference centre should provide the current cookie names, purposes, providers and retention periods where available. Typical categories may include:</p><ul><li>Consent-management cookies that remember your cookie choices</li><li>Security and session cookies needed for core website operation</li><li>Analytics cookies used to measure website performance and visitor behaviour</li><li>Advertising or conversion cookies used only where relevant and consented to</li><li>Embedded-content cookies set by third-party services such as video, maps, chat or social-media features</li></ul><h2>6. Consent and when cookies are set</h2><p>Where consent is legally required, we aim not to set or access non-essential cookies before you have made a choice. Our cookie banner or preference centre should allow you to accept, reject or customise non-essential cookie categories. Strictly necessary cookies may remain active where they are required to provide the service or functionality you request.</p><h2>7. How to change or withdraw your consent</h2><p>You can change or withdraw cookie consent at any time using the cookie settings or preference control available on our website. Withdrawing consent does not affect the lawfulness of processing that occurred before withdrawal.</p>
   <div id="inline-cookie-settings"></div>
   <h2>8. Browser controls</h2><p>Most web browsers allow you to block, delete or restrict cookies through browser settings. Blocking all cookies may affect website functionality. Browser controls operate separately from our website consent mechanism and may need to be configured on each device or browser you use.</p><h2>9. Analytics</h2><p>If analytics services are enabled, they may collect information such as pages viewed, approximate location, device information, referral source and interactions. We use analytics to understand website performance and improve our services. Non-essential analytics will be subject to consent where required by applicable UK law.</p><h2>10. Advertising and social-media technologies</h2><p>If we use services such as advertising pixels, remarketing tags or social-media integrations, those providers may receive information about your device or interactions. Where such technologies are not strictly necessary, we will seek consent before enabling them where required.</p><h2>11. International transfers</h2><p>Some cookie or technology providers may process information outside the United Kingdom. Where Cloud Technologies Ltd is responsible for such transfers, appropriate UK data-transfer safeguards will be used where required. Third-party providers may also have their own international transfer arrangements described in their privacy notices.</p><h2>12. Retention</h2><p>Cookie lifetimes vary. Some are session cookies that expire when you close your browser; others remain for a defined period. Our cookie preference centre should display available retention information for active cookies. We periodically review whether non-essential technologies remain necessary.</p><h2>13. Changes to this Cookie Policy</h2><p>We may update this Cookie Policy when our website technology, service providers or legal obligations change. The latest version will be published on our website with its revision date.</p><h2>14. Contact us</h2><p>For questions about cookies, privacy or data protection, contact Karthick Subramanian at karthick.subramanian@cloudtechnologiesltd.co.uk. General enquiries can be sent to contact@cloudtechnologiesltd.co.uk. Our address is 174, 1st Floor, The Type Building, Sugar House Island, Spaces London, England, E15 2TP.</p></article></div></section>
@push('scripts')
<script>
    window.addEventListener('load', function () {
        setTimeout(function() {
            const consentBanner = document.getElementById('cookie-consent');
            const inlineContainer = document.getElementById('inline-cookie-settings');
            
            if (!consentBanner || !inlineContainer) return;

            inlineContainer.appendChild(consentBanner);
            consentBanner.removeAttribute('hidden');
            consentBanner.classList.add('cookie-consent--embedded');

            const heading = consentBanner.querySelector('h2');
            if (heading) heading.innerText = 'Manage Your Preferences';
            
            const desc = consentBanner.querySelector('.cookie-consent__inner p:not(.cookie-consent__eyebrow)');
            if (desc) desc.innerText = 'Select your preferences below. Essential cookies are always enabled as they are necessary for the website to function properly.';

            const eyebrow = consentBanner.querySelector('.cookie-consent__eyebrow');
            if (eyebrow) eyebrow.style.display = 'none';

            const acceptBtn = consentBanner.querySelector('[data-cookie-action="accept"]');
            const rejectBtn = consentBanner.querySelector('[data-cookie-action="reject"]');

            if (!acceptBtn || !rejectBtn) return;

            function updateButtonVisuals(analyticsAccepted) {
                // Reset both buttons first
                acceptBtn.classList.remove('is-selected');
                rejectBtn.classList.remove('is-selected');
                acceptBtn.innerHTML = 'Accept all';
                rejectBtn.innerHTML = 'Reject optional';

                if (analyticsAccepted === true) {
                    acceptBtn.classList.add('is-selected');
                    acceptBtn.innerHTML = '✓ Accepted All';
                } else if (analyticsAccepted === false) {
                    rejectBtn.classList.add('is-selected');
                    rejectBtn.innerHTML = '✓ Rejected Optional';
                }
            }

            try {
                const savedData = JSON.parse(localStorage.getItem('cloudtech_cookie_consent'));
                if (savedData && typeof savedData.analytics !== 'undefined') {
                    updateButtonVisuals(savedData.analytics);
                }
            } catch (e) {}

            window.addEventListener('cookieconsentchange', (e) => {
                updateButtonVisuals(e.detail.analytics);
                consentBanner.removeAttribute('hidden');
            });

        }, 150); 
    });
</script>
@endpush

<style>

#inline-cookie-settings .cookie-consent {
    position: static !important;
    transform: none !important;
    background-color: #ffffff !important;
    border: 1px solid #e2e8f0 !important;
    box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.05), 0 2px 4px -1px rgba(0, 0, 0, 0.03) !important;
    border-radius: 12px !important;
    margin: 2rem 0 !important;
    padding: 0 !important; 
    display: block !important;
    max-width: 100% !important;
    width: 100% !important;
}


#inline-cookie-settings .cookie-consent__inner {
    background: transparent !important;
    padding: 2rem !important; 
    max-width: 100% !important;
}

#inline-cookie-settings h2 {
    color: #0f172a !important;
    margin-top: 0 !important;
    margin-bottom: 0.75rem !important;
    font-size: 1.2rem !important;
    font-weight: 600 !important;
}

#inline-cookie-settings p {
    color: #475569 !important;
    opacity: 1 !important;
    font-size: 0.95rem !important;
    margin-bottom: 1.5rem !important;
    line-height: 1.6 !important;
}

#inline-cookie-settings .cookie-consent__actions {
    display: flex !important;
    justify-content: flex-start !important;
    gap: 1rem !important;
}

/* Base button styling */
#inline-cookie-settings .cookie-button {
    padding: 0.6rem 1.25rem !important;
    border-radius: 6px !important;
    font-size: 0.9rem !important;
    font-weight: 500 !important;
    cursor: pointer !important;
    transition: all 0.2s ease !important;
    display: inline-flex !important;
    align-items: center !important;
    justify-content: center !important;
    background-color: #f8fafc !important;
    color: #334155 !important;
    border: 1px solid #cbd5e1 !important;
    box-shadow: none !important;
}

#inline-cookie-settings .cookie-button:hover {
    background-color: #f1f5f9 !important;
    color: #0f172a !important;
    border-color: #94a3b8 !important;
}

#inline-cookie-settings .cookie-button.is-selected {
    background-color: #10b981 !important;
    color: #ffffff !important;
    border: 1px solid #10b981 !important;
    pointer-events: none !important;
    opacity: 1 !important;
}
@media (max-width: 576px) {
    #inline-cookie-settings .cookie-consent__inner {
        padding: 1.25rem !important;
    }

    #inline-cookie-settings .cookie-consent__actions {
        flex-direction: column !important;
        gap: 0.75rem !important;
    }

    #inline-cookie-settings .cookie-button {
        width: 100% !important;
    }
}
</style>
@endsection
