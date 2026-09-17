<div class="grid cols-2" style="gap:14px;">

    {{-- Category --}}
    <div class="field">
        <label>Category <span style="color:#dc2626">*</span></label>
        <select name="category" required>
            <option value="seo" @selected(old('category', $service->category ?? '') === 'seo')>SEO Services</option>
            <option value="web" @selected(old('category', $service->category ?? '') === 'web')>Website Development</option>
        </select>
    </div>

    {{-- Service Name --}}
    <div class="field">
        <label>Service Name <span style="color:#dc2626">*</span></label>
        <input
            type="text"
            name="service"
            value="{{ old('service', $service->service ?? '') }}"
            placeholder="e.g. Local SEO / WordPress Website Design"
            required
        >
    </div>

    {{-- Starting Price --}}
    <div class="field">
        <label>Starting Price (numeric text)</label>
        <input
            type="text"
            name="price"
            value="{{ old('price', $service->price ?? '') }}"
            placeholder="e.g. 199 / 250 / 1000"
        >
    </div>

    {{-- Currency Prefix --}}
    <div class="field">
        <label>Currency Prefix</label>
        <input
            type="text"
            name="prefix"
            value="{{ old('prefix', $service->prefix ?? '£') }}"
            placeholder="£"
        >
    </div>

    {{-- Billing Period suffix --}}
    <div class="field">
        <label>Period Suffix (optional)</label>
        <input
            type="text"
            name="per"
            value="{{ old('per', $service->per ?? '') }}"
            placeholder="e.g. /mo or leave blank"
        >
    </div>

    {{-- Pricing Model Description --}}
    <div class="field">
        <label>Model Description</label>
        <input
            type="text"
            name="model"
            value="{{ old('model', $service->model ?? '') }}"
            placeholder="e.g. £199 main area + £50/town / Project-based / One-off · 4 tiers"
        >
    </div>

    {{-- Page Route Name --}}
    <div class="field">
        <label>Page Route Name (preferred)</label>
        <input
            type="text"
            name="page_route"
            value="{{ old('page_route', $service->page_route ?? '') }}"
            placeholder="e.g. services.seo.local-seo"
        >
        <div class="hint" style="font-size:12px;opacity:.7;margin-top:4px;">Named Laravel route (e.g. <code>services.seo.local-seo</code>)</div>
    </div>

    {{-- Page Direct URL --}}
    <div class="field">
        <label>Page Custom URL (fallback)</label>
        <input
            type="text"
            name="page_url"
            value="{{ old('page_url', $service->page_url ?? '') }}"
            placeholder="e.g. /services/seo/local-seo"
        >
    </div>

    {{-- Sort Order --}}
    <div class="field">
        <label>Sort Order</label>
        <input
            type="number"
            name="sort_order"
            value="{{ old('sort_order', $service->sort_order ?? 0) }}"
        >
    </div>

    {{-- Checkboxes --}}
    <div class="field" style="display:flex; flex-direction:column; gap:10px; justify-content:center;">
        <label style="display:flex; gap:10px; align-items:center; cursor:pointer;">
            <input
                type="checkbox"
                name="is_active"
                value="1"
                @checked(old('is_active', $service->is_active ?? true))
            >
            <span><strong>Active (Visible on Pricing Page)</strong></span>
        </label>

        <label style="display:flex; gap:10px; align-items:center; cursor:pointer;">
            <input
                type="checkbox"
                name="noindex"
                value="1"
                @checked(old('noindex', $service->noindex ?? false))
            >
            <span>Mark as Noindex (rel="noindex")</span>
        </label>
    </div>

</div>
