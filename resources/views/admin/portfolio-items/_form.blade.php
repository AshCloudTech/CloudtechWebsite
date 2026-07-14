@csrf
@php
  $tagsValue = old('tags');
  if ($tagsValue === null) {
      $tagsValue = is_array($item->tags ?? null) ? implode(', ', $item->tags) : '';
  }
@endphp

<style>
  .hint{ font-size:12px; opacity:.72; margin-top:6px; line-height:1.45; }
  .sectionSpace{ height:12px; }
</style>

<div class="grid cols-2" style="gap:12px; align-items:start;">

  {{-- LEFT --}}
  <div>

    <div class="card" style="margin:0;">
      <div class="cardHeader">
        <div>
          <h3>Project Details</h3>
          <p>Main info shown on the project card in the portfolio grid.</p>
        </div>
      </div>

      <div class="cardBody">
        <div class="grid cols-2" style="gap:12px;">

          <div class="field" style="grid-column:1/-1;">
            <label>Title *</label>
            <input name="title" required value="{{ old('title', $item->title) }}" placeholder="AK Travels">
            <div class="hint"><b>Required.</b> Shown on portfolio card.</div>
          </div>

          <div class="field" style="grid-column:1/-1;">
            <label>Slug (optional)</label>
            <input name="slug" value="{{ old('slug', $item->slug) }}" placeholder="ak-travels">
            <div class="hint">Leave blank to auto-generate from title.</div>
          </div>

          <div class="field">
            <label>Platform *</label>
            <select name="portfolio_platform_id" required>
              <option value="">Select</option>
              @foreach($platforms as $p)
                <option value="{{ $p->id }}" {{ (int)old('portfolio_platform_id', $item->portfolio_platform_id) === $p->id ? 'selected' : '' }}>
                  {{ $p->name }}
                </option>
              @endforeach
            </select>
            <div class="hint">Controls filter group + badge label.</div>
          </div>

          <div class="field">
            <label>Industry (optional)</label>
            <input name="industry" value="{{ old('industry', $item->industry) }}" placeholder="sport / law / healthcare">
            <div class="hint">Shown as a small tag (if you render it).</div>
          </div>

          <div class="field" style="grid-column:1/-1;">
            <label>Short Description (optional)</label>
            <input name="short_description" value="{{ old('short_description', $item->short_description) }}" placeholder="1-liner summary for the card">
            <div class="hint">If empty, card description area should collapse on frontend.</div>
          </div>

          <div class="field" style="grid-column:1/-1;">
            <label>Website URL (optional)</label>
            <input name="website_url" value="{{ old('website_url', $item->website_url) }}" placeholder="https://example.com">
            <div class="hint">Used by “View Website →”. If empty, link button can hide.</div>
          </div>

          <div class="field" style="grid-column:1/-1;">
            <label>Tags (optional)</label>
            <input name="tags" value="{{ $tagsValue }}" placeholder="sport, ecommerce, education">
            <div class="hint">Comma-separated. Used for secondary badge/tags.</div>
          </div>

        </div>
      </div>
    </div>

    <div class="sectionSpace"></div>

    <div class="btnRow" style="margin:0;">
      <button class="btn primary" type="submit">Save</button>
      <a class="btn" href="{{ console_route('portfolio-items.index') }}">Cancel</a>
    </div>

  </div>

  {{-- RIGHT --}}
  <div>

    <div class="card" style="margin:0;">
      <div class="cardHeader">
        <div>
          <h3>Visibility & Sorting</h3>
          <p>Controls what appears publicly and in which order.</p>
        </div>
      </div>

      <div class="cardBody">
        <div class="grid cols-2" style="gap:12px;">
          <div class="field">
            <label>Sort Order</label>
            <input type="number" name="sort_order" value="{{ old('sort_order', $item->sort_order ?? 0) }}">
            <div class="hint">Lower number shows first.</div>
          </div>

          <div class="field">
            <label>Thumbnail Alt (optional)</label>
            <input name="thumb_alt" value="{{ old('thumb_alt', $item->thumb_alt) }}" placeholder="Screenshot of AK Travels website">
            <div class="hint">Helps SEO + accessibility.</div>
          </div>

          <div class="field" style="grid-column:1/-1;">
            <label style="display:flex;gap:10px;align-items:center;cursor:pointer;">
              <input type="checkbox" name="is_published" value="1" {{ old('is_published', $item->is_published ?? true) ? 'checked' : '' }}>
              Published
            </label>
            <div class="hint">If unchecked, item won’t appear on public page.</div>
          </div>

          <div class="field" style="grid-column:1/-1;">
            <label style="display:flex;gap:10px;align-items:center;cursor:pointer;">
              <input type="checkbox" name="is_live" value="1" {{ old('is_live', $item->is_live ?? true) ? 'checked' : '' }}>
              Show “Live Site” badge
            </label>
            <div class="hint">Controls 🌐 Live Site label on card.</div>
          </div>
        </div>
      </div>
    </div>

    <div class="sectionSpace"></div>

    <div class="card" style="margin:0;">
      <div class="cardHeader">
        <div>
          <h3>Thumbnail Image</h3>
          <p>Used as the card background/screenshot.</p>
        </div>
      </div>

      <div class="cardBody">
        <div class="field">
          <label>Upload (optional)</label>
          <input type="file" name="thumbnail_image" accept="image/*">
          <div class="hint">Recommended WebP (about 900×600). If empty, fallback styling should apply.</div>

          @if(!empty($item->thumbnail_image))
            <div style="margin-top:10px;">
              <div class="hint">Current</div>
              <img src="{{ asset($item->thumbnail_image) }}"
                   style="max-width:100%;border:1px solid rgba(0,0,0,.08);border-radius:10px;"
                   alt="Thumbnail preview">
            </div>
          @endif
        </div>
      </div>
    </div>

  </div>

</div>
