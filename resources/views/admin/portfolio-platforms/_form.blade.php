@csrf

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
          <h3>Platform Details</h3>
          <p>Name and slug used for portfolio filters.</p>
        </div>
      </div>

      <div class="cardBody">
        <div class="grid cols-2" style="gap:12px;">

          <div class="field" style="grid-column:1 / -1;">
            <label>Name <span style="color:#dc2626">*</span></label>
            <input name="name" required value="{{ old('name', $platform->name) }}" placeholder="WordPress">
            <div class="hint">
              <b>Used in:</b> filter button label and badge on portfolio cards.
            </div>
          </div>

          <div class="field" style="grid-column:1 / -1;">
            <label>Slug (optional)</label>
            <input name="slug" value="{{ old('slug', $platform->slug) }}" placeholder="wordpress">
            <div class="hint">
              <b>Used in:</b> data-filter + data-category in UI.
              Leave empty to auto-generate from name.
            </div>
          </div>

          <div class="field" style="grid-column:1 / -1;">
            <label>Badge Color (optional)</label>
            <input name="badge_color" value="{{ old('badge_color', $platform->badge_color) }}" placeholder="blue / orange / cyan">
            <div class="hint">
              If you style badges by color name, set it here (optional). If empty, default badge styling is applied.
            </div>
          </div>

        </div>
      </div>
    </div>

    <div class="sectionSpace"></div>

    <div class="btnRow" style="margin:0;">
      <button class="btn primary" type="submit">Save</button>
      <a class="btn" href="{{ console_route('portfolio-platforms.index') }}">Cancel</a>
    </div>

  </div>

  {{-- RIGHT --}}
  <div>

    <div class="card" style="margin:0;">
      <div class="cardHeader">
        <div>
          <h3>Visibility & Sorting</h3>
          <p>Controls ordering and filter visibility.</p>
        </div>
      </div>

      <div class="cardBody">
        <div class="grid cols-2" style="gap:12px;">

          <div class="field">
            <label>Sort Order</label>
            <input type="number" name="sort_order" value="{{ old('sort_order', $platform->sort_order ?? 0) }}">
            <div class="hint">Lower number shows first in the filter bar.</div>
          </div>

          <div class="field" style="grid-column:1 / -1;">
            <label style="display:flex;gap:10px;align-items:center;cursor:pointer;">
              <input type="checkbox" name="is_active" value="1"
                     {{ old('is_active', $platform->is_active ?? true) ? 'checked' : '' }}>
              Active
            </label>
            <div class="hint">
              If disabled, this platform will not appear as a public filter.
              Items under it can still exist in admin.
            </div>
          </div>

        </div>
      </div>
    </div>

    <div class="sectionSpace"></div>

    <div class="card" style="margin:0;">
      <div class="cardHeader">
        <div>
          <h3>Safety Note</h3>
          <p>Deleting a platform can delete items.</p>
        </div>
      </div>
      <div class="cardBody">
        <div class="hint" style="margin-top:0;">
          <b>Deletion behaviour:</b> Portfolio items are linked with a foreign key.
          If your migration uses <b>cascadeOnDelete()</b>, deleting a platform will delete all its portfolio items.
          If you want to prevent that, change cascade to <b>restrict</b> in the migration.
        </div>
      </div>
    </div>

  </div>

</div>
