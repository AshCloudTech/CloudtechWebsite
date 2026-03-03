@extends('layouts.cloudtech')

@section('title', 'Contact Us | Digital Marketing, SEO & Web Experts UK')
@section('meta_title', 'Contact Us | Digital Marketing, SEO & Web Experts UK')
@section('meta_description',
    'Contact our digital agency for SEO, web development and digital marketing services. Speak
    with our team and start growing your business today UK')
@section('meta_keywords', 'contact us, digital marketing contact, SEO contact, web development contact, UK, digital agency contact, business growth contact')

    @push('styles')
        <link rel="stylesheet" href="{{ asset('assets/contact/css/style.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/footer.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/header.css') }}">
    @endpush

    @push('scripts')
        <script src="{{ asset('assets/contact/js/script.js') }}" defer></script>
    @endpush

@section('content')

    @php
        $company = $globalCompany;

        $companyName = $company?->legal_name ?: ($company?->brand_name ?: 'Cloud Technologies Ltd');

        $pills = $company?->meta_json['contact_hero_pills'] ?? ['Fast response', 'UK & India team', 'SEO-first builds'];

        $hoursLabel =
            $company?->working_hours_json['label'] ??
            ($company?->meta_json['working_hours_label'] ?? 'Mon–Fri · 9:00–18:00');

        $supportLabel = $company?->meta_json['support_label'] ?? '24/7 for active clients';

        $whatsapp = $company?->whatsapp;
        $waText =
            'Hi ' . ($company?->brand_name ?? 'Cloud Technologies') . ', I want to know more about your services.';
        $waUrl = $whatsapp
            ? 'https://wa.me/' . preg_replace('/\D+/', '', $whatsapp) . '?text=' . urlencode($waText)
            : null;

        $heroNote =
            $company?->meta_json['contact_hero_note'] ??
            ($whatsapp
                ? 'Prefer WhatsApp? Message us instantly.'
                : 'Prefer WhatsApp? Add it in admin settings and it will show here.');

        $socialLinks =
            $company?->socialLinks
                ?->where('is_active', true)
                ?->whereNull('branch_id')
                ?->sortBy(fn($l) => $l->sort_order ?? 999999)
                ?->values() ?? collect();

        $branches =
            $company?->branches?->where('is_active', true)?->sortBy(fn($b) => $b->sort_order ?? 999999)?->values() ??
            collect();

        $hq = $branches->firstWhere('is_hq', true);
        $defaultBranch = $hq ?: $branches->first();

        $defaultBranchAddress = $defaultBranch
            ? trim(
                implode(
                    ', ',
                    array_filter([
                        $defaultBranch->address_line1,
                        $defaultBranch->address_line2,
                        $defaultBranch->city,
                        $defaultBranch->state,
                        $defaultBranch->postal_code,
                    ]),
                ),
            )
            : '';

        $defaultBranchWhatsApp = $defaultBranch?->whatsapp;
        $defaultBranchWaUrl = $defaultBranchWhatsApp
            ? 'https://wa.me/' . preg_replace('/\D+/', '', $defaultBranchWhatsApp)
            : null;

        $socialInitial = fn($p) => strtoupper(substr(trim((string) $p), 0, 1)) ?: 'S';
    @endphp
    @php
        $socialIcon = function (string $platform) {
            $p = strtolower(trim($platform));

            return match (true) {
                str_contains($p, 'facebook')
                    => '<svg viewBox="0 0 24 24"><path d="M22 12a10 10 0 1 0-11.56 9.87v-6.99H7.9V12h2.54V9.8c0-2.5 1.5-3.9 3.8-3.9 1.1 0 2.25.2 2.25.2v2.46h-1.27c-1.25 0-1.64.78-1.64 1.57V12h2.79l-.45 2.88h-2.34v6.99A10 10 0 0 0 22 12z"/></svg>',

                str_contains($p, 'instagram')
                    => '<svg viewBox="0 0 24 24"><path d="M7 2h10a5 5 0 0 1 5 5v10a5 5 0 0 1-5 5H7a5 5 0 0 1-5-5V7a5 5 0 0 1 5-5zm5 6.5A3.5 3.5 0 1 1 8.5 12 3.5 3.5 0 0 1 12 8.5zM18 6.7a.9.9 0 1 1-.9-.9.9.9 0 0 1 .9.9z"/></svg>',

                str_contains($p, 'linkedin')
                    => '<svg viewBox="0 0 24 24"><path d="M4.98 3.5A2.5 2.5 0 1 1 2.5 6a2.5 2.5 0 0 1 2.48-2.5zM3 21h4V9H3zm6 0h4v-6.2c0-3.3 4-3.6 4 0V21h4v-7.6c0-6-6.5-5.8-8-2.8V9H9z"/></svg>',

                str_contains($p, 'twitter') || str_contains($p, 'x')
                    => '<svg viewBox="0 0 24 24"><path d="M18.9 2H22l-6.8 7.8L23 22h-6.2l-4.9-6.4L6.3 22H3.2l7.3-8.4L1 2h6.3l4.4 5.8L18.9 2z"/></svg>',

                str_contains($p, 'youtube')
                    => '<svg viewBox="0 0 24 24"><path d="M21.6 7.2a2.7 2.7 0 0 0-1.9-1.9C18 5 12 5 12 5s-6 0-7.7.3A2.7 2.7 0 0 0 2.4 7.2 28.3 28.3 0 0 0 2 12c0 1.6.1 3.2.4 4.8a2.7 2.7 0 0 0 1.9 1.9C6 19 12 19 12 19s6 0 7.7-.3a2.7 2.7 0 0 0 1.9-1.9c.3-1.6.4-3.2.4-4.8zM10 15V9l6 3-6 3z"/></svg>',

                default
                    => '<svg viewBox="0 0 24 24"><path d="M3.9 12a5 5 0 0 1 5-5h6.2a5 5 0 0 1 0 10H9a1 1 0 1 1 0-2h6.1a3 3 0 0 0 0-6H8.9a3 3 0 0 0 0 6 1 1 0 1 1-2 0z"/></svg>',
            };
        };
    @endphp

    <main class="ct-contact">

        {{-- HERO --}}
        <section class="contactHero" id="contact-hero">
            <div class="container contactHero__grid">

                {{-- LEFT --}}
                <div class="contactHero__text fx-reveal reveal-up">
                    <p class="contactHero__eyebrow">{{ $pageEyebrow ?? 'Let’s talk' }}</p>

                    <h1 class="contactHero__title">
                        Contact <span class="brand-color">{{ $companyName }}</span>
                    </h1>

                    <p class="contactHero__subtitle">
                        {{ $pageSubtitle ?? 'Share a few details about your project and we’ll respond with next steps, timelines, and a clear plan.' }}
                    </p>

                    <div class="pillRow" aria-label="Highlights">
                        @foreach ($pills as $pill)
                            <span class="pill">{{ $pill }}</span>
                        @endforeach
                    </div>

                    @if ($socialLinks->count())
                        <div class="socialChips" aria-label="Social links">
                            @foreach ($socialLinks as $link)
                                @if (!empty($link->url))
                                    <a class="socialChip" href="{{ $link->url }}" target="_blank"
                                        rel="noopener noreferrer">

                                        <span class="socialChip__icon" aria-hidden="true">
                                            {!! $socialIcon($link->platform) !!}
                                        </span>

                                        <span class="socialChip__label">
                                            {{ ucfirst($link->platform) }}
                                        </span>
                                    </a>
                                @endif
                            @endforeach
                        </div>
                    @endif

                </div>

                {{-- RIGHT CARD --}}
                <div class="contactHero__card fx-reveal reveal-right">
                    <div class="infoGrid">

                        <div class="infoCell">
                            <div class="infoCell__k">Email</div>
                            <div class="infoCell__v">
                                @if (!empty($company?->primary_email))
                                    <a href="mailto:{{ $company->primary_email }}">{{ $company->primary_email }}</a>
                                @else
                                    <span class="muted">Add primary email in Company Settings</span>
                                @endif
                            </div>
                        </div>

                        <div class="infoCell">
                            <div class="infoCell__k">Phone</div>
                            <div class="infoCell__v">
                                @if (!empty($company?->primary_phone))
                                    <a
                                        href="tel:{{ preg_replace('/\s+/', '', $company->primary_phone) }}">{{ $company->primary_phone }}</a>
                                @else
                                    <span class="muted">Add primary phone in Company Settings</span>
                                @endif
                            </div>
                        </div>

                        <div class="infoCell">
                            <div class="infoCell__k">Working Hours</div>
                            <div class="infoCell__v">{{ $hoursLabel }}</div>
                        </div>

                        <div class="infoCell">
                            <div class="infoCell__k">Support</div>
                            <div class="infoCell__v">{{ $supportLabel }}</div>
                        </div>

                    </div>

                    <div class="heroNote">
                        @if ($waUrl)
                            <a href="{{ $waUrl }}" target="_blank"
                                rel="noopener noreferrer">{{ $heroNote }}</a>
                        @else
                            {{ $heroNote }}
                        @endif
                    </div>
                </div>

            </div>
        </section>

        {{-- BODY --}}
        <section class="contactSection" id="contact-form">
            <div class="container">
                <header class="sectionHeader fx-reveal reveal-up">
                    <h2>Send us your requirements</h2>
                    <p>Fill the essentials. Optional fields help us route your request faster.</p>
                </header>

                <div class="contactGrid">

                    {{-- FORM --}}
                    <form class="formCard fx-reveal reveal-up" method="POST"
                        action="{{ Route::has('contact.send') ? route('contact.send') : (Route::has('contact.submit') ? route('contact.submit') : url('/contact')) }}"
                        novalidate>
                        @csrf

                        <input type="hidden" name="form_key" value="main_contact">
                        <input type="hidden" name="source_page" value="{{ request()->path() }}">

                        <div class="row2">
                            <div class="field">
                                <label for="name">Full Name <span class="req">*</span></label>
                                <input id="name" name="name" type="text" placeholder="Your name" required
                                    autocomplete="name">
                                <div class="help">Required. Used only to address you.</div>
                            </div>

                            <div class="field">
                                <label for="email">Email Address <span class="req">*</span></label>
                                <input id="email" name="email" type="email" placeholder="name@company.com" required
                                    autocomplete="email">
                                <div class="help">Required. We reply here.</div>
                            </div>
                        </div>

                        <div class="row2">
                            <div class="field">
                                <label for="phone">Phone <span class="opt">(optional)</span></label>
                                <input id="phone" name="phone" type="tel" placeholder="+44 / +91"
                                    autocomplete="tel">
                                <div class="help">Optional. Helps faster follow-up.</div>
                            </div>

                            <div class="field">
                                <label for="service">Service <span class="opt">(optional)</span></label>
                                <select id="service" name="service">
                                    <option value="">Select</option>
                                    <option>Website Development</option>
                                    <option>SEO</option>
                                    <option>UI/UX</option>
                                    <option>Branding</option>
                                    <option>Digital Marketing</option>
                                    <option>Custom PHP</option>
                                </select>
                                <div class="help">Optional. Helps route your query.</div>
                            </div>
                        </div>

                        <div class="row1">
                            <div class="field">
                                <label for="website">Website URL <span class="opt">(optional)</span></label>
                                <input id="website" name="website" type="url" placeholder="https://"
                                    autocomplete="url">
                                <div class="help">Optional. Share current site if you have one.</div>
                            </div>
                        </div>

                        <div class="row1">
                            <div class="field">
                                <label for="message">Project Brief <span class="req">*</span></label>
                                <textarea id="message" name="message" rows="6" placeholder="Tell us what you want to build..." required></textarea>
                                <div class="help">Required. Include goal, timeline, and any reference links.</div>
                            </div>
                        </div>

                        <div class="formActions">
                            <button class="btnPrimary" type="submit">
                                <span>Send Message</span>
                                <span class="btnArrow" aria-hidden="true">→</span>
                            </button>

                            <div class="formMeta" aria-live="polite" id="formMeta">
                                We typically respond within 1 business day.
                            </div>
                        </div>
                    </form>

                    {{-- ASIDE --}}
                    <aside class="sideCol fx-reveal reveal-left">

                        <div class="sideCard">
                            <h3>What happens next?</h3>
                            <ul class="steps">
                                <li><span class="n">1</span><span>We review your brief</span></li>
                                <li><span class="n">2</span><span>We share plan + estimate</span></li>
                                <li><span class="n">3</span><span>We start with milestones</span></li>
                            </ul>
                        </div>

                        {{-- BRANCHES --}}
                        <div class="sideCard">
                            <h3>Our Locations</h3>

                            @if ($branches->count())
                                <div class="branchUI" data-branch-ui>
                                    <div class="branchChips" data-branch-chips>
                                        @foreach ($branches as $b)
                                            @php
                                                $addr = trim(
                                                    implode(
                                                        ', ',
                                                        array_filter([
                                                            $b->address_line1,
                                                            $b->address_line2,
                                                            $b->city,
                                                            $b->state,
                                                            $b->postal_code,
                                                        ]),
                                                    ),
                                                );
                                            @endphp

                                            <button type="button"
                                                class="branchChip {{ $defaultBranch && $defaultBranch->id === $b->id ? 'is-active' : '' }}"
                                                data-branch data-name="{{ e($b->name) }}"
                                                data-ishq="{{ $b->is_hq ? '1' : '0' }}"
                                                data-code="{{ e($b->code ?? '') }}"
                                                data-email="{{ e($b->email ?? '') }}"
                                                data-phone="{{ e($b->phone ?? '') }}"
                                                data-whatsapp="{{ e($b->whatsapp ?? '') }}"
                                                data-address="{{ e($addr) }}"
                                                data-map="{{ e($b->google_maps_url ?? '') }}">
                                                <span class="branchChip__label">{{ $b->name }}</span>
                                                @if ($b->is_hq)
                                                    <span class="chipBadge">HQ</span>
                                                @endif
                                            </button>
                                        @endforeach
                                    </div>

                                    <div class="branchFocus {{ $defaultBranch?->is_hq ? 'isHQ' : '' }}" data-branch-focus>
                                        <div class="branchTop">
                                            <div class="branchName" data-bf-name>{{ $defaultBranch?->name }}</div>
                                            <div class="badgeWrap" data-bf-badges>
                                                @if ($defaultBranch?->is_hq)
                                                    <div class="badgeHQ">HQ</div>
                                                @elseif(!empty($defaultBranch?->code))
                                                    <div class="badgeCode">{{ $defaultBranch->code }}</div>
                                                @endif
                                            </div>
                                        </div>

                                        <div class="branchMeta" data-bf-meta>
                                            @if (!empty($defaultBranch?->email))
                                                <a
                                                    href="mailto:{{ $defaultBranch->email }}">{{ $defaultBranch->email }}</a>
                                            @endif
                                            @if (!empty($defaultBranch?->phone))
                                                <a
                                                    href="tel:{{ preg_replace('/\s+/', '', $defaultBranch->phone) }}">{{ $defaultBranch->phone }}</a>
                                            @endif
                                            @if (empty($defaultBranch?->email) && empty($defaultBranch?->phone))
                                                <span class="muted">Contact details not added yet.</span>
                                            @endif
                                        </div>

                                        <div class="branchAddr" data-bf-addr>
                                            {{ $defaultBranchAddress ?: 'Address not added yet.' }}
                                        </div>

                                        <div class="branchActions" data-bf-actions>
                                            @if (!empty($defaultBranch?->google_maps_url))
                                                <a class="branchMap" href="{{ $defaultBranch->google_maps_url }}"
                                                    target="_blank" rel="noopener noreferrer">
                                                    View on Google Maps →
                                                </a>
                                            @endif

                                            @if ($defaultBranchWaUrl)
                                                <a class="branchWa" href="{{ $defaultBranchWaUrl }}" target="_blank"
                                                    rel="noopener noreferrer">
                                                    WhatsApp →
                                                </a>
                                            @endif
                                        </div>

                                        @if ($branches->count() > 8)
                                            <button type="button" class="branchToggle" data-branch-toggle>
                                                View all branches
                                            </button>

                                            <div class="branchList" data-branch-list>
                                                @foreach ($branches as $b)
                                                    <div class="branchListRow">
                                                        <div class="branchListName">
                                                            {{ $b->name }} @if ($b->is_hq)
                                                                <span class="chipBadge">HQ</span>
                                                            @endif
                                                        </div>
                                                        <div class="branchListMeta">
                                                            @if ($b->city)
                                                                <span>{{ $b->city }}</span>
                                                            @endif
                                                            @if ($b->state)
                                                                <span>{{ $b->state }}</span>
                                                            @endif
                                                        </div>
                                                    </div>
                                                @endforeach
                                            </div>
                                        @endif
                                    </div>
                                </div>
                            @else
                                <p class="muted">Add branches in Admin → Company Settings.</p>
                            @endif
                        </div>

                        {{-- SOCIAL LINKS --}}
                        <div class="sideCard">
                            <h3>Stay Connected</h3>




                            @if ($socialLinks->count())
                                <div class="socialList">
                                    @foreach ($socialLinks as $link)
                                        @if (!empty($link->url))
                                            <a class="socialRow" href="{{ $link->url }}" target="_blank"
                                                rel="noopener noreferrer">
                                                <span class="socialIcon">{!! $socialIcon($link->platform) !!}</span>
                                                <span class="socialText">
                                                </span>
                                            </a>
                                        @endif
                                    @endforeach
                                </div>
                            @else
                                <p class="muted">Add social links in Admin → Company Settings.</p>
                            @endif
                        </div>

                    </aside>

                </div>
            </div>
        </section>

        {{-- Branch switch JS (tiny + self-contained; no library) --}}
        <script>
            (function() {
                const root = document.querySelector('[data-branch-ui]');
                if (!root) return;

                const chipsWrap = root.querySelector('[data-branch-chips]');
                const focus = root.querySelector('[data-branch-focus]');
                const bfName = root.querySelector('[data-bf-name]');
                const bfBadges = root.querySelector('[data-bf-badges]');
                const bfMeta = root.querySelector('[data-bf-meta]');
                const bfAddr = root.querySelector('[data-bf-addr]');
                const bfActions = root.querySelector('[data-bf-actions]');

                const toggleBtn = root.querySelector('[data-branch-toggle]');
                const listEl = root.querySelector('[data-branch-list]');

                if (!chipsWrap || !focus) return;

                function setBadges(isHq, code) {
                    bfBadges.innerHTML = '';
                    focus.classList.toggle('isHQ', isHq === '1');

                    if (isHq === '1') {
                        const b = document.createElement('div');
                        b.className = 'badgeHQ';
                        b.textContent = 'HQ';
                        bfBadges.appendChild(b);
                        return;
                    }

                    if (code) {
                        const b = document.createElement('div');
                        b.className = 'badgeCode';
                        b.textContent = code;
                        bfBadges.appendChild(b);
                    }
                }

                function setMeta(email, phone) {
                    bfMeta.innerHTML = '';

                    if (email) {
                        const a = document.createElement('a');
                        a.href = 'mailto:' + email;
                        a.textContent = email;
                        bfMeta.appendChild(a);
                    }

                    if (phone) {
                        const t = phone.replace(/\s+/g, '');
                        const a = document.createElement('a');
                        a.href = 'tel:' + t;
                        a.textContent = phone;
                        bfMeta.appendChild(a);
                    }

                    if (!email && !phone) {
                        const s = document.createElement('span');
                        s.className = 'muted';
                        s.textContent = 'Contact details not added yet.';
                        bfMeta.appendChild(s);
                    }
                }

                function setActions(mapUrl, whatsapp) {
                    bfActions.innerHTML = '';

                    if (mapUrl) {
                        const a = document.createElement('a');
                        a.className = 'branchMap';
                        a.href = mapUrl;
                        a.target = '_blank';
                        a.rel = 'noopener noreferrer';
                        a.textContent = 'View on Google Maps →';
                        bfActions.appendChild(a);
                    }

                    if (whatsapp) {
                        const wa = 'https://wa.me/' + whatsapp.replace(/\D+/g, '');
                        const a = document.createElement('a');
                        a.className = 'branchWa';
                        a.href = wa;
                        a.target = '_blank';
                        a.rel = 'noopener noreferrer';
                        a.textContent = 'WhatsApp →';
                        bfActions.appendChild(a);
                    }
                }

                chipsWrap.addEventListener('click', (e) => {
                    const btn = e.target.closest('[data-branch]');
                    if (!btn) return;

                    chipsWrap.querySelectorAll('[data-branch]').forEach(x => x.classList.remove('is-active'));
                    btn.classList.add('is-active');

                    const name = btn.dataset.name || 'Branch';
                    const code = btn.dataset.code || '';
                    const email = btn.dataset.email || '';
                    const phone = btn.dataset.phone || '';
                    const whatsapp = btn.dataset.whatsapp || '';
                    const address = btn.dataset.address || '';
                    const mapUrl = btn.dataset.map || '';
                    const isHq = btn.dataset.ishq || '0';

                    bfName.textContent = name;
                    bfAddr.textContent = address || 'Address not added yet.';
                    setBadges(isHq, code);
                    setMeta(email, phone);
                    setActions(mapUrl, whatsapp);
                }, {
                    passive: true
                });

                if (toggleBtn && listEl) {
                    toggleBtn.addEventListener('click', () => {
                        listEl.classList.toggle('is-open');
                        toggleBtn.textContent = listEl.classList.contains('is-open') ? 'Hide branches' :
                            'View all branches';
                    }, {
                        passive: true
                    });
                }
            })();
        </script>

    </main>
@endsection
