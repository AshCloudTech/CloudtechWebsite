<div class="grid cols-2" style="gap:12px;">

    {{-- Plan Key --}}
    <div class="field">
        <label>Plan Key (unique)</label>
        <input
            type="text"
            name="key"
            value="{{ old('key', $plan->key ?? '') }}"
            placeholder="starter / growth / enterprise"
            required
        >
    </div>

    {{-- Plan Title --}}
    <div class="field">
        <label>Plan Title</label>
        <input
            type="text"
            name="title"
            value="{{ old('title', $plan->title ?? '') }}"
            placeholder="Launch Website"
            required
        >
    </div>

    {{-- Badge Text --}}
    <div class="field">
        <label>Badge Text</label>
        <input
            type="text"
            name="badge_text"
            value="{{ old('badge_text', $plan->badge_text ?? '') }}"
            placeholder="Starter / Most Popular / Custom"
        >
    </div>

    {{-- Badge Variant --}}
    <div class="field">
        <label>Badge Variant</label>
        <select name="badge_variant">
            <option value="">Default</option>
            <option value="cyan" @selected(old('badge_variant', $plan->badge_variant ?? '') === 'cyan')>
                Cyan
            </option>
            <option value="navy" @selected(old('badge_variant', $plan->badge_variant ?? '') === 'navy')>
                Navy
            </option>
        </select>
    </div>

    {{-- Description (full width) --}}
    <div class="field cols-2">
        <label>Description (shown under title)</label>
        <textarea
            name="description"
            rows="3"
            placeholder="Best for small businesses..."
        >{{ old('description', $plan->description ?? '') }}</textarea>
    </div>

    {{-- CTA Text --}}
    <div class="field">
        <label>CTA Text</label>
        <input
            type="text"
            name="cta_text"
            value="{{ old('cta_text', $plan->cta_text ?? 'Get Started →') }}"
        >
    </div>

    {{-- CTA URL --}}
    <div class="field">
        <label>CTA URL</label>
        <input
            type="text"
            name="cta_url"
            value="{{ old('cta_url', $plan->cta_url ?? '/contact') }}"
        >
    </div>

    {{-- Featured --}}
    <div class="field">
        <label style="display:flex; gap:10px; align-items:center;">
            <input
                type="checkbox"
                name="is_featured"
                value="1"
                @checked(old('is_featured', $plan->is_featured ?? false))
            >
            <span>Featured plan</span>
        </label>
    </div>

    {{-- Active --}}
    <div class="field">
        <label style="display:flex; gap:10px; align-items:center;">
            <input
                type="checkbox"
                name="is_active"
                value="1"
                @checked(old('is_active', $plan->is_active ?? true))
            >
            <span>Active (visible on website)</span>
        </label>
    </div>

</div>