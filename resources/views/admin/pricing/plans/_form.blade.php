<div class="grid cols-2" style="gap:14px;">

    {{-- Plan Key --}}
    <div class="field">
        <label>Plan Key (unique) <span style="color:#dc2626">*</span></label>
        <input
            type="text"
            name="key"
            value="{{ old('key', $plan->key ?? '') }}"
            placeholder="usa-starter / usa-growth / usa-authority"
            required
        >
    </div>

    {{-- Plan Title --}}
    <div class="field">
        <label>Plan Title <span style="color:#dc2626">*</span></label>
        <input
            type="text"
            name="title"
            value="{{ old('title', $plan->title ?? '') }}"
            placeholder="Starter / Growth / Authority"
            required
        >
    </div>

    {{-- Ideal Target Audience Note --}}
    <div class="field">
        <label>Ideal For Note</label>
        <input
            type="text"
            name="ideal"
            value="{{ old('ideal', $plan->ideal ?? '') }}"
            placeholder="Ideal for: Local US businesses"
        >
    </div>

    {{-- Badge Text --}}
    <div class="field">
        <label>Badge Text</label>
        <input
            type="text"
            name="badge_text"
            value="{{ old('badge_text', $plan->badge_text ?? '') }}"
            placeholder="Most Popular / Recommended"
        >
    </div>

    {{-- Currency Symbol & Price Amount --}}
    <div class="field">
        <label>Currency Symbol</label>
        <input
            type="text"
            name="currency_symbol"
            value="{{ old('currency_symbol', $plan->currency_symbol ?? '$') }}"
            placeholder="$"
        >
    </div>

    <div class="field">
        <label>Price Amount</label>
        <input
            type="text"
            name="price_amount"
            value="{{ old('price_amount', $plan->price_amount ?? '') }}"
            placeholder="499 / 999 / 1999"
        >
    </div>

    <div class="field">
        <label>Price Period Suffix</label>
        <input
            type="text"
            name="price_period"
            value="{{ old('price_period', $plan->price_period ?? '/mo') }}"
            placeholder="/mo"
        >
    </div>

    <div class="field">
        <label>Button Style Class</label>
        <input
            type="text"
            name="btn_class"
            value="{{ old('btn_class', $plan->btn_class ?? 'plan-btn btn-outline') }}"
            placeholder="plan-btn btn-outline or plan-btn btn-accent"
        >
    </div>

    {{-- Description (full width) --}}
    <div class="field cols-2" style="grid-column: 1 / -1;">
        <label>Description</label>
        <textarea
            name="description"
            rows="3"
            placeholder="Short description of the plan..."
        >{{ old('description', $plan->description ?? '') }}</textarea>
    </div>

    {{-- Features List (one per line) --}}
    @php
        $featuresText = old('features_list', isset($plan->features) ? $plan->features->pluck('text')->implode("\n") : '');
    @endphp
    <div class="field cols-2" style="grid-column: 1 / -1;">
        <label>Plan Features (one feature per line)</label>
        <textarea
            name="features_list"
            rows="6"
            placeholder="Google Business Profile setup&#10;Local SEO — 5 keywords&#10;On-page audit & fixes"
        >{{ $featuresText }}</textarea>
        <div class="hint" style="font-size:12px;opacity:.7;margin-top:4px;">Enter each bullet point on a new line.</div>
    </div>

    {{-- CTA Text --}}
    <div class="field">
        <label>CTA Button Text</label>
        <input
            type="text"
            name="cta_text"
            value="{{ old('cta_text', $plan->cta_text ?? 'Start Your Project') }}"
        >
    </div>

    {{-- CTA URL --}}
    <div class="field">
        <label>CTA Target URL</label>
        <input
            type="text"
            name="cta_url"
            value="{{ old('cta_url', $plan->cta_url ?? '/contact-us#enquiry') }}"
        >
    </div>

    {{-- Sort Order --}}
    <div class="field">
        <label>Sort Order</label>
        <input
            type="number"
            name="sort_order"
            value="{{ old('sort_order', $plan->sort_order ?? 0) }}"
        >
    </div>

    {{-- Featured & Active --}}
    <div class="field" style="display:flex; flex-direction:column; gap:10px; justify-content:center;">
        <label style="display:flex; gap:10px; align-items:center; cursor:pointer;">
            <input
                type="checkbox"
                name="is_featured"
                value="1"
                @checked(old('is_featured', $plan->is_featured ?? false))
            >
            <span><strong>Featured Plan (Highlighted Card)</strong></span>
        </label>

        <label style="display:flex; gap:10px; align-items:center; cursor:pointer;">
            <input
                type="checkbox"
                name="is_active"
                value="1"
                @checked(old('is_active', $plan->is_active ?? true))
            >
            <span>Active (Visible on Pricing Page)</span>
        </label>
    </div>

</div>