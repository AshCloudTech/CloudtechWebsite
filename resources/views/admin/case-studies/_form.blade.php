@csrf

@php
    $mode = $mode ?? 'edit';

    $stats    = old('stats', $caseStudy->stats?->toArray() ?? []);
    $points   = old('points', $caseStudy->points?->toArray() ?? []);
    $features = old('features', $caseStudy->features?->toArray() ?? []);
    $impacts  = old('impacts', $caseStudy->impacts?->toArray() ?? []);
    $tech     = old('tech', $caseStudy->techStacks?->toArray() ?? []);

    $blockGap = '14px';
    $rowGap   = '12px';

    // helper: safe count
    $statsCount = max(1, count($stats));
    $pointsCount = max(1, count($points));
    $featuresCount = max(1, count($features));
    $impactsCount = max(1, count($impacts));
    $techCount = max(1, count($tech));

    $testimonials = old('testimonials', $caseStudy->testimonials?->toArray() ?? []);
    $testimonialsCount = max(1, count($testimonials));

@endphp

<style>
  .csForm{ --gap: {{ $blockGap }}; --row: {{ $rowGap }}; }
  .csForm .sectionSpace{ height: var(--gap); }

  .csForm .hint{
    font-size:12px;
    opacity:.74;
    margin-top:6px;
    line-height:1.45;
  }

  .csForm .tag{
    display:inline-flex;
    align-items:center;
    gap:6px;
    padding:4px 9px;
    border-radius:999px;
    font-size:12px;
    font-weight:800;
    border:1px solid rgba(0,0,0,.08);
    background: rgba(0,0,0,.02);
    opacity:.88;
    white-space:nowrap;
  }
  .csForm .tag.req{ border-color:rgba(220,38,38,.25); color:#b91c1c; background:rgba(220,38,38,.06); }
  .csForm .tag.opt{ border-color:rgba(2,132,199,.22); color:#075985; background:rgba(2,132,199,.06); }

  /* Layout: left content + right sidebar, then full-width sections */
  .csForm .twoColWrap{
    display:grid;
    grid-template-columns: 1fr 420px;
    gap: var(--gap);
    align-items:start;
  }
  .csForm .fullRow{ margin-top: var(--gap); }

  @media (min-width: 981px){
    .csForm .rightSticky{ position: sticky; top: 14px; }
  }
  @media (max-width: 980px){
    .csForm .twoColWrap{ grid-template-columns: 1fr; }
    .csForm .rightSticky{ position: static; }
    .csForm .cols-4{ grid-template-columns: 1fr 1fr !important; }
  }

  /* Section header within Dynamic Blocks */
  .csForm .dynHead{
    display:flex;
    align-items:center;
    justify-content:space-between;
    gap:12px;
    padding:10px 12px;
    border:1px solid rgba(0,0,0,.06);
    border-radius:12px;
    background: rgba(0,0,0,.015);
    margin-top: 12px;
  }
  .csForm .dynHead h4{
    margin:0;
    font-size:13px;
    font-weight:1000;
    letter-spacing:.2px;
  }
  .csForm .dynHead p{
    margin:4px 0 0;
    font-size:12px;
    opacity:.72;
  }
  .csForm .dynHead .left{
    display:flex;
    flex-direction:column;
  }
  .csForm .dynActions{
    display:flex;
    gap:8px;
    align-items:center;
    flex-wrap:wrap;
  }

  .csForm .dividerLine{
    height:1px;
    background: rgba(0,0,0,.06);
    margin: 14px 0;
  }

  /* Row card */
  .csForm .rowBox{
    border:1px solid rgba(0,0,0,.06);
    border-radius:12px;
    padding:12px;
    background: rgba(0,0,0,.012);
    margin-top:10px;
  }

  /* Icon picker */
  .csForm .iconPick{
    display:flex;
    align-items:center;
    gap:10px;
  }
  .csForm .iconBadge{
    width:38px;
    height:38px;
    border-radius:12px;
    display:flex;
    align-items:center;
    justify-content:center;
    border:1px solid rgba(0,0,0,.08);
    background: rgba(0,0,0,.02);
    flex:0 0 auto;
  }
  .csForm .iconBadge i{ width:18px; height:18px; opacity:.9; }

  /* tiny remove button */
  .csForm .miniBtn{
    border:1px solid rgba(0,0,0,.10);
    background: rgba(0,0,0,.02);
    padding:8px 10px;
    border-radius:10px;
    font-weight:900;
    font-size:12px;
    cursor:pointer;
    line-height:1;
  }
  .csForm .miniBtn.danger{
    border-color: rgba(220,38,38,.22);
    background: rgba(220,38,38,.06);
    color:#b91c1c;
  }
</style>

{{-- Lucide CDN + live preview --}}
<script src="https://unpkg.com/lucide@latest"></script>
<script>
  function csRefreshLucide(){
    if (!window.lucide) return;
    lucide.createIcons();
  }

  function csWireRow(root){
    // remove row
    root.querySelectorAll('[data-remove-row]').forEach(btn => {
      btn.addEventListener('click', () => {
        const row = btn.closest('[data-row]');
        if (row) row.remove();
        csRefreshLucide();
      });
    });
  }

  function csAddRow(section){
    const container = document.querySelector(`[data-section="${section}"]`);
    const tpl = document.querySelector(`#tpl-${section}`);
    if (!container || !tpl) return;

    const next = parseInt(container.getAttribute('data-next-index') || '0', 10);
    const html = tpl.innerHTML.replaceAll('__INDEX__', String(next));
    const wrap = document.createElement('div');
    wrap.innerHTML = html.trim();

    const node = wrap.firstElementChild;
    container.appendChild(node);

    container.setAttribute('data-next-index', String(next + 1));

    csWireRow(node);
    csRefreshLucide();
  }

  document.addEventListener('input', function(e){
    if (!e.target.matches('[data-lucide-input]')) return;
    const wrap = e.target.closest('.iconPick');
    if (!wrap) return;

    const icon = (e.target.value || '').trim();
    const holder = wrap.querySelector('[data-lucide-preview]');
    if (holder) holder.setAttribute('data-lucide', icon || 'circle');

    csRefreshLucide();
  });

  document.addEventListener('DOMContentLoaded', function(){
    // add-row buttons
    document.querySelectorAll('[data-add-row]').forEach(btn => {
      btn.addEventListener('click', () => csAddRow(btn.getAttribute('data-add-row')));
    });

    // wire existing rows
    document.querySelectorAll('[data-row]').forEach(csWireRow);

    csRefreshLucide();
  });
</script>

<datalist id="lucideIconList">
  <option value="check"></option><option value="x"></option><option value="sparkles"></option>
  <option value="star"></option><option value="zap"></option><option value="shield-check"></option>
  <option value="users"></option><option value="user"></option><option value="badge-check"></option>
  <option value="award"></option><option value="rocket"></option><option value="target"></option>
  <option value="trending-up"></option><option value="line-chart"></option><option value="bar-chart-3"></option>
  <option value="pie-chart"></option><option value="clock"></option><option value="calendar"></option>
  <option value="globe"></option><option value="search"></option><option value="settings"></option>
  <option value="layout-dashboard"></option><option value="layers"></option><option value="cpu"></option>
  <option value="database"></option><option value="server"></option><option value="cloud"></option>
  <option value="lock"></option><option value="key"></option><option value="mail"></option>
  <option value="phone"></option><option value="map-pin"></option><option value="file-text"></option>
  <option value="clipboard-check"></option><option value="wallet"></option>
</datalist>

<div class="csForm">

  <div class="twoColWrap">

    {{-- LEFT --}}
    <div>

      {{-- CORE --}}
      <div class="card" style="margin:0;">
        <div class="cardHeader">
          <div>
            <h3>Core</h3>
            <p>Primary details used on the public listing and detail hero.</p>
          </div>
          <div style="display:flex; gap:8px; flex-wrap:wrap;">
            <span class="tag req">Required</span>
            <span class="tag opt">Optional</span>
          </div>
        </div>

        <div class="cardBody">
          <div class="grid cols-2" style="gap:var(--gap);">
            <div class="field" style="grid-column:1 / -1;">
              <label>Title <span style="color:#dc2626">*</span></label>
              <input name="title" value="{{ old('title', $caseStudy->title) }}" required placeholder="Case study title">
              <div class="hint"><b>Used in:</b> listing card + hero heading.</div>
            </div>

            <div class="field" style="grid-column:1 / -1;">
              <label>Slug <span class="tag opt" style="margin-left:6px;">Optional</span></label>
              <input name="slug" value="{{ old('slug', $caseStudy->slug) }}" placeholder="learning-compass">
              <div class="hint">Leave blank to auto-generate from title.</div>
            </div>

            <div class="field" style="grid-column:1 / -1;">
              <label>Subtitle <span class="tag opt" style="margin-left:6px;">Optional</span></label>
              <input name="subtitle" value="{{ old('subtitle', $caseStudy->subtitle) }}" placeholder="1–2 lines supporting hero text">
            </div>

            <div class="field" style="grid-column:1 / -1;">
              <label>Excerpt <span class="tag opt" style="margin-left:6px;">Optional</span></label>
              <input name="excerpt" value="{{ old('excerpt', $caseStudy->excerpt) }}" placeholder="Used in listing card (short summary)">
            </div>
          </div>
        </div>
      </div>

      <div class="sectionSpace"></div>

      {{-- SEO --}}
      <div class="card" style="margin:0;">
        <div class="cardHeader">
          <div>
            <h3>SEO</h3>
            <p>Metadata for search engines.</p>
          </div>
          <div><span class="tag opt">Optional</span></div>
        </div>

        <div class="cardBody">
          <div class="grid cols-2" style="gap:var(--gap);">
            <div class="field" style="grid-column:1 / -1;">
              <label>Meta Title</label>
              <input name="meta_title" value="{{ old('meta_title', $caseStudy->meta_title) }}" placeholder="Custom meta title (optional)">
            </div>

            <div class="field" style="grid-column:1 / -1;">
              <label>Meta Description</label>
              <textarea name="meta_description" rows="3" placeholder="Meta description (optional)">{{ old('meta_description', $caseStudy->meta_description) }}</textarea>
              <div class="hint">If empty, frontend can fallback to excerpt or first paragraph.</div>
            </div>
          </div>
        </div>
      </div>

      <div class="sectionSpace"></div>

      {{-- CHALLENGE / SOLUTION --}}
      <div class="card" style="margin:0;">
        <div class="cardHeader">
          <div>
            <h3>Challenge &amp; Solution</h3>
            <p>Two panels shown on the public detail page.</p>
          </div>
          <div><span class="tag opt">Optional</span></div>
        </div>

        <div class="cardBody">
          <div class="hint" style="margin-top:0; margin-bottom:10px;">
            <b>Frontend rule:</b> If a panel has no title and no body and no points, hide the entire panel.
          </div>

          <div class="grid cols-2" style="gap:var(--gap);">
            <div class="card" style="margin:0;">
              <div class="cardHeader">
                <div>
                  <h3 style="font-size:14px;">Challenge</h3>
                  <p>Left panel text.</p>
                </div>
              </div>
              <div class="cardBody">
                <div class="field">
                  <label>Title</label>
                  <input name="challenge_title" value="{{ old('challenge_title', $caseStudy->challenge_title) }}" placeholder="The Challenge">
                </div>

                <div class="field" style="margin-top:var(--gap);">
                  <label>Body</label>
                  <textarea name="challenge_body" rows="5" placeholder="Describe the problem to solve...">{{ old('challenge_body', $caseStudy->challenge_body) }}</textarea>
                </div>
              </div>
            </div>

            <div class="card" style="margin:0;">
              <div class="cardHeader">
                <div>
                  <h3 style="font-size:14px;">Solution</h3>
                  <p>Right panel text.</p>
                </div>
              </div>
              <div class="cardBody">
                <div class="field">
                  <label>Title</label>
                  <input name="solution_title" value="{{ old('solution_title', $caseStudy->solution_title) }}" placeholder="Our Solution">
                </div>

                <div class="field" style="margin-top:var(--gap);">
                  <label>Body</label>
                  <textarea name="solution_body" rows="5" placeholder="Describe what we delivered...">{{ old('solution_body', $caseStudy->solution_body) }}</textarea>
                </div>
              </div>
            </div>
          </div>

        </div>
      </div>

    </div>

    {{-- RIGHT --}}
    <div class="rightSticky">

      {{-- Publishing --}}
      <div class="card" style="margin:0;">
        <div class="cardHeader">
          <div>
            <h3>Publishing</h3>
            <p>Controls listing display and visibility.</p>
          </div>
          <div><span class="tag opt">Optional</span></div>
        </div>

        <div class="cardBody">
          <div class="grid cols-2" style="gap:var(--gap);">

            <div class="field" style="grid-column:1 / -1;">
              <label>Industry</label>
              <input name="industry" value="{{ old('industry', $caseStudy->industry) }}" placeholder="EdTech">
            </div>

            <div class="field" style="grid-column:1 / -1;">
              <label>Industry Tag Color</label>
              <input name="industry_tag_color" value="{{ old('industry_tag_color', $caseStudy->industry_tag_color) }}" placeholder="blue / purple / emerald ...">
            </div>

            <div class="field" style="grid-column:1 / -1;">
              <label>Client Name</label>
              <input name="client_name" value="{{ old('client_name', $caseStudy->client_name) }}" placeholder="GL Assessment">
            </div>

            <div class="field">
              <label>Year</label>
              <input name="year" value="{{ old('year', $caseStudy->year) }}" placeholder="2024">
            </div>

            <div class="field">
              <label>Sort Order</label>
              <input type="number" name="sort_order" value="{{ old('sort_order', $caseStudy->sort_order ?? 0) }}">
            </div>

            <div class="field" style="grid-column:1 / -1;">
              <label style="display:flex;gap:10px;align-items:center;cursor:pointer;">
                <input type="checkbox" name="is_published" value="1"
                       {{ old('is_published', $caseStudy->is_published) ? 'checked' : '' }}>
                Published
              </label>
            </div>

          </div>
        </div>
      </div>

      <div class="sectionSpace"></div>

      {{-- Media --}}
      <div class="card" style="margin:0;">
        <div class="cardHeader">
          <div>
            <h3>Media</h3>
            <p>Images used on listing card and hero.</p>
          </div>
          <div><span class="tag opt">Optional</span></div>
        </div>

        <div class="cardBody">
          <div class="field">
            <label>Card Image</label>
            <input type="file" name="card_image" accept="image/*">
            <div class="hint">Recommended: WebP, 672×448 or similar.</div>

            @if($caseStudy->card_image)
              <div style="margin-top:10px;">
                <div class="hint">Current</div>
                <img src="{{ asset($caseStudy->card_image) }}" alt="Card image"
                     style="max-width:100%;border:1px solid rgba(0,0,0,.08);border-radius:10px;">
              </div>
            @endif
          </div>

          <div class="field" style="margin-top:12px;">
            <label>Hero Image</label>
            <input type="file" name="hero_image" accept="image/*">
            <div class="hint">Recommended: WebP, 1100×760 or similar.</div>

            @if($caseStudy->hero_image)
              <div style="margin-top:10px;">
                <div class="hint">Current</div>
                <img src="{{ asset($caseStudy->hero_image) }}" alt="Hero image"
                     style="max-width:100%;border:1px solid rgba(0,0,0,.08);border-radius:10px;">
              </div>
            @endif
          </div>
        </div>
      </div>

    </div>

  </div>

  {{-- FULL WIDTH: Dynamic blocks + actions --}}
  <div class="fullRow">

    <div class="card" style="margin:0;">
      <div class="cardHeader">
        <div>
          <h3>Dynamic Blocks</h3>
          <p>Optional sections on the public detail page. Use “Add” to create more rows.</p>
        </div>
        <div><span class="tag opt">Optional</span></div>
      </div>

      <div class="cardBody">

        {{-- STATS --}}
        <div class="dynHead">
          <div class="left">
            <h4>Stats</h4>
            <p>Top metrics strip. Icon optional. Unlimited rows.</p>
          </div>
          <div class="dynActions">
            <button type="button" class="miniBtn" data-add-row="stats">+ Add Stat</button>
          </div>
        </div>

        <div data-section="stats" data-next-index="{{ $statsCount }}">
          @foreach($stats as $i => $row)
            <div class="rowBox" data-row>
              <div class="grid cols-4" style="gap:var(--row); align-items:end;">

                <div class="field">
                  <label>Icon</label>
                  <div class="iconPick">
                    <span class="iconBadge">
                      <i data-lucide="{{ ($row['icon'] ?? '') ?: 'circle' }}" data-lucide-preview></i>
                    </span>
                    <div style="flex:1;">
                      <input data-lucide-input list="lucideIconList" name="stats[{{ $i }}][icon]" value="{{ $row['icon'] ?? '' }}" placeholder="users / star / shield-check">
                      <div class="hint">Lucide icon name.</div>
                    </div>
                  </div>
                </div>

                <div class="field">
                  <label>Value</label>
                  <input name="stats[{{ $i }}][value]" value="{{ $row['value'] ?? '' }}" placeholder="1M+">
                </div>

                <div class="field">
                  <label>Label</label>
                  <input name="stats[{{ $i }}][label]" value="{{ $row['label'] ?? '' }}" placeholder="Active Students">
                </div>

                <div style="display:flex; justify-content:flex-end; gap:8px;">
                  <input type="hidden" name="stats[{{ $i }}][sort_order]" value="{{ $row['sort_order'] ?? $i }}">
                  <button type="button" class="miniBtn danger" data-remove-row>Remove</button>
                </div>
              </div>
            </div>
          @endforeach
        </div>

        <div class="dividerLine"></div>

        {{-- POINTS --}}
        <div class="dynHead">
          <div class="left">
            <h4>Challenge / Solution Points</h4>
            <p>Bullets inside Challenge & Solution panels. Unlimited rows.</p>
          </div>
          <div class="dynActions">
            <button type="button" class="miniBtn" data-add-row="points">+ Add Point</button>
          </div>
        </div>

        <div data-section="points" data-next-index="{{ $pointsCount }}">
          @foreach($points as $i => $row)
            <div class="rowBox" data-row>
              <div class="grid cols-4" style="gap:var(--row); align-items:end;">

                <div class="field">
                  <label>Section</label>
                  <select name="points[{{ $i }}][section]">
                    <option value="">--</option>
                    <option value="challenge" {{ ($row['section'] ?? '')==='challenge'?'selected':'' }}>challenge</option>
                    <option value="solution"  {{ ($row['section'] ?? '')==='solution'?'selected':'' }}>solution</option>
                  </select>
                </div>

                <div class="field">
                  <label>Icon</label>
                  <div class="iconPick">
                    <span class="iconBadge">
                      <i data-lucide="{{ ($row['icon'] ?? '') ?: 'circle' }}" data-lucide-preview></i>
                    </span>
                    <div style="flex:1;">
                      <input data-lucide-input list="lucideIconList" name="points[{{ $i }}][icon]" value="{{ $row['icon'] ?? '' }}" placeholder="check / sparkles">
                      <div class="hint">Optional.</div>
                    </div>
                  </div>
                </div>

                <div class="field">
                  <label>Text</label>
                  <input name="points[{{ $i }}][text]" value="{{ $row['text'] ?? '' }}" placeholder="Point text">
                </div>

                <div style="display:flex; justify-content:flex-end; gap:8px;">
                  <input type="hidden" name="points[{{ $i }}][sort_order]" value="{{ $row['sort_order'] ?? $i }}">
                  <button type="button" class="miniBtn danger" data-remove-row>Remove</button>
                </div>
              </div>
            </div>
          @endforeach
        </div>

        <div class="dividerLine"></div>

        {{-- FEATURES --}}
        <div class="dynHead">
          <div class="left">
            <h4>Features</h4>
            <p>Feature grid on detail page. Unlimited rows.</p>
          </div>
          <div class="dynActions">
            <button type="button" class="miniBtn" data-add-row="features">+ Add Feature</button>
          </div>
        </div>

        <div data-section="features" data-next-index="{{ $featuresCount }}">
          @foreach($features as $i => $row)
            <div class="rowBox" data-row>
              <div class="grid cols-4" style="gap:var(--row); align-items:end;">

                <div class="field">
                  <label>Icon</label>
                  <div class="iconPick">
                    <span class="iconBadge">
                      <i data-lucide="{{ ($row['icon'] ?? '') ?: 'circle' }}" data-lucide-preview></i>
                    </span>
                    <div style="flex:1;">
                      <input data-lucide-input list="lucideIconList" name="features[{{ $i }}][icon]" value="{{ $row['icon'] ?? '' }}" placeholder="zap / layout-dashboard">
                    </div>
                  </div>
                </div>

                <div class="field">
                  <label>Title</label>
                  <input name="features[{{ $i }}][title]" value="{{ $row['title'] ?? '' }}" placeholder="Feature title">
                </div>

                <div class="field">
                  <label>Description</label>
                  <input name="features[{{ $i }}][description]" value="{{ $row['description'] ?? '' }}" placeholder="Short description">
                </div>

                <div style="display:flex; justify-content:flex-end; gap:8px;">
                  <input type="hidden" name="features[{{ $i }}][sort_order]" value="{{ $row['sort_order'] ?? $i }}">
                  <button type="button" class="miniBtn danger" data-remove-row>Remove</button>
                </div>

              </div>
            </div>
          @endforeach
        </div>

        <div class="dividerLine"></div>

        {{-- IMPACT --}}
        <div class="dynHead">
          <div class="left">
            <h4>Impact</h4>
            <p>Results & impact cards. Unlimited rows.</p>
          </div>
          <div class="dynActions">
            <button type="button" class="miniBtn" data-add-row="impacts">+ Add Impact</button>
          </div>
        </div>

        <div data-section="impacts" data-next-index="{{ $impactsCount }}">
          @foreach($impacts as $i => $row)
            <div class="rowBox" data-row>
              <div class="grid cols-4" style="gap:var(--row); align-items:end;">

                <div class="field">
                  <label>Metric</label>
                  <input name="impacts[{{ $i }}][metric]" value="{{ $row['metric'] ?? '' }}" placeholder="3×">
                </div>

                <div class="field">
                  <label>Title</label>
                  <input name="impacts[{{ $i }}][title]" value="{{ $row['title'] ?? '' }}" placeholder="Impact title">
                </div>

                <div class="field">
                  <label>Description</label>
                  <input name="impacts[{{ $i }}][description]" value="{{ $row['description'] ?? '' }}" placeholder="Short description">
                </div>

                <div style="display:flex; justify-content:flex-end; gap:8px;">
                  <input type="hidden" name="impacts[{{ $i }}][sort_order]" value="{{ $row['sort_order'] ?? $i }}">
                  <button type="button" class="miniBtn danger" data-remove-row>Remove</button>
                </div>
              </div>
            </div>
          @endforeach
        </div>

        <div class="dividerLine"></div>

        {{-- TECH --}}
        <div class="dynHead">
          <div class="left">
            <h4>Tech Stack</h4>
            <p>Chips/badges list. Unlimited rows.</p>
          </div>
          <div class="dynActions">
            <button type="button" class="miniBtn" data-add-row="tech">+ Add Tech</button>
          </div>
        </div>

        <div data-section="tech" data-next-index="{{ $techCount }}">
          @foreach($tech as $i => $row)
            <div class="rowBox" data-row>
              <div class="grid cols-3" style="gap:var(--row); align-items:end; grid-template-columns: 2fr 1fr auto;">

                <div class="field">
                  <label>Name</label>
                  <input name="tech[{{ $i }}][name]" value="{{ $row['name'] ?? '' }}" placeholder="Laravel">
                </div>

                <div class="field">
                  <label>Order</label>
                  <input name="tech[{{ $i }}][sort_order]" value="{{ $row['sort_order'] ?? $i }}">
                </div>

                <div style="display:flex; justify-content:flex-end; gap:8px;">
                  <button type="button" class="miniBtn danger" data-remove-row>Remove</button>
                </div>

              </div>
            </div>
          @endforeach
        </div>

      </div>
    </div>

    <div class="dividerLine"></div>

{{-- TESTIMONIALS --}}
<div class="dynHead">
  <div class="left">
    <h4>Testimonials</h4>
    <p>Client feedback cards/slider. Supports images + rating + source. Unlimited rows.</p>
  </div>
  <div class="dynActions">
    <button type="button" class="miniBtn" data-add-row="testimonials">+ Add Testimonial</button>
  </div>
</div>

<div data-section="testimonials" data-next-index="{{ $testimonialsCount }}">
  @foreach($testimonials as $i => $row)
    <div class="rowBox" data-row>
      <div class="grid cols-2" style="gap:var(--row); grid-template-columns: 1fr 1fr;">
        <div class="field">
          <label>Badge</label>
          <input name="testimonials[{{ $i }}][badge]" value="{{ $row['badge'] ?? '' }}" placeholder="Client Feedback">
        </div>

        <div class="field">
          <label>Rating (1–5)</label>
          <input type="number" min="1" max="5" name="testimonials[{{ $i }}][rating]" value="{{ $row['rating'] ?? '' }}" placeholder="5">
        </div>

        <div class="field" style="grid-column:1 / -1;">
          <label>Quote</label>
          <textarea name="testimonials[{{ $i }}][quote]" rows="3" placeholder="Testimonial text...">{{ $row['quote'] ?? '' }}</textarea>
        </div>

        <div class="field">
          <label>Author Name</label>
          <input name="testimonials[{{ $i }}][author_name]" value="{{ $row['author_name'] ?? '' }}" placeholder="Mark Johnson">
        </div>

        <div class="field">
          <label>Author Title</label>
          <input name="testimonials[{{ $i }}][author_title]" value="{{ $row['author_title'] ?? '' }}" placeholder="Product Director">
        </div>

        <div class="field">
          <label>Author Company</label>
          <input name="testimonials[{{ $i }}][author_company]" value="{{ $row['author_company'] ?? '' }}" placeholder="GL Assessment">
        </div>

        <div class="field">
          <label>Source</label>
          <input name="testimonials[{{ $i }}][source]" value="{{ $row['source'] ?? '' }}" placeholder="Email / Clutch / Google">
        </div>

        <div class="field" style="grid-column:1 / -1;">
          <label>Source URL</label>
          <input name="testimonials[{{ $i }}][source_url]" value="{{ $row['source_url'] ?? '' }}" placeholder="https://...">
        </div>

        <div class="field">
          <label>Author Avatar</label>
          @if(!empty($row['author_avatar']))
            <div class="hint" style="margin-top:0;">
              Current: <a href="{{ asset($row['author_avatar']) }}" target="_blank" rel="noopener">View</a>
            </div>
            <input type="hidden" name="testimonials[{{ $i }}][author_avatar_existing]" value="{{ $row['author_avatar'] }}">
          @endif
          <input type="file" name="testimonials[{{ $i }}][author_avatar]" accept="image/*">
        </div>

        <div class="field">
          <label>Company Logo</label>
          @if(!empty($row['company_logo']))
            <div class="hint" style="margin-top:0;">
              Current: <a href="{{ asset($row['company_logo']) }}" target="_blank" rel="noopener">View</a>
            </div>
            <input type="hidden" name="testimonials[{{ $i }}][company_logo_existing]" value="{{ $row['company_logo'] }}">
          @endif
          <input type="file" name="testimonials[{{ $i }}][company_logo]" accept="image/*">
        </div>

        <div class="field">
          <label>Featured</label>
          <select name="testimonials[{{ $i }}][is_featured]">
            <option value="0" {{ !empty($row['is_featured']) ? '' : 'selected' }}>No</option>
            <option value="1" {{ !empty($row['is_featured']) ? 'selected' : '' }}>Yes</option>
          </select>
        </div>

        <div class="field">
          <label>Published</label>
          <select name="testimonials[{{ $i }}][is_published]">
            <option value="1" {{ (isset($row['is_published']) ? (int)$row['is_published'] : 1) === 1 ? 'selected' : '' }}>Yes</option>
            <option value="0" {{ (isset($row['is_published']) ? (int)$row['is_published'] : 1) === 0 ? 'selected' : '' }}>No</option>
          </select>
        </div>

        <div style="display:flex; justify-content:space-between; align-items:center; gap:10px; grid-column:1 / -1;">
          <input type="hidden" name="testimonials[{{ $i }}][sort_order]" value="{{ $row['sort_order'] ?? $i }}">
          <div class="hint" style="margin:0;">Order is auto unless you change it.</div>
          <button type="button" class="miniBtn danger" data-remove-row>Remove</button>
        </div>

      </div>
    </div>
  @endforeach
</div>

    <div class="sectionSpace"></div>

    <div class="btnRow" style="margin:0;">
      <button class="btn primary" type="submit">Save</button>
      <a class="btn" href="{{ route('admin.case-studies.index') }}">Cancel</a>
    </div>

  </div>
</div>

{{-- =================== ROW TEMPLATES =================== --}}
<template id="tpl-stats">
  <div class="rowBox" data-row>
    <div class="grid cols-4" style="gap:var(--row); align-items:end;">
      <div class="field">
        <label>Icon</label>
        <div class="iconPick">
          <span class="iconBadge"><i data-lucide="circle" data-lucide-preview></i></span>
          <div style="flex:1;">
            <input data-lucide-input list="lucideIconList" name="stats[__INDEX__][icon]" value="" placeholder="users / star / shield-check">
          </div>
        </div>
      </div>
      <div class="field">
        <label>Value</label>
        <input name="stats[__INDEX__][value]" value="" placeholder="1M+">
      </div>
      <div class="field">
        <label>Label</label>
        <input name="stats[__INDEX__][label]" value="" placeholder="Active Students">
      </div>
      <div style="display:flex; justify-content:flex-end; gap:8px;">
        <input type="hidden" name="stats[__INDEX__][sort_order]" value="__INDEX__">
        <button type="button" class="miniBtn danger" data-remove-row>Remove</button>
      </div>
    </div>
  </div>
</template>

<template id="tpl-points">
  <div class="rowBox" data-row>
    <div class="grid cols-4" style="gap:var(--row); align-items:end;">
      <div class="field">
        <label>Section</label>
        <select name="points[__INDEX__][section]">
          <option value="">--</option>
          <option value="challenge">challenge</option>
          <option value="solution">solution</option>
        </select>
      </div>
      <div class="field">
        <label>Icon</label>
        <div class="iconPick">
          <span class="iconBadge"><i data-lucide="circle" data-lucide-preview></i></span>
          <div style="flex:1;">
            <input data-lucide-input list="lucideIconList" name="points[__INDEX__][icon]" value="" placeholder="check / sparkles">
          </div>
        </div>
      </div>
      <div class="field">
        <label>Text</label>
        <input name="points[__INDEX__][text]" value="" placeholder="Point text">
      </div>
      <div style="display:flex; justify-content:flex-end; gap:8px;">
        <input type="hidden" name="points[__INDEX__][sort_order]" value="__INDEX__">
        <button type="button" class="miniBtn danger" data-remove-row>Remove</button>
      </div>
    </div>
  </div>
</template>

<template id="tpl-features">
  <div class="rowBox" data-row>
    <div class="grid cols-4" style="gap:var(--row); align-items:end;">
      <div class="field">
        <label>Icon</label>
        <div class="iconPick">
          <span class="iconBadge"><i data-lucide="circle" data-lucide-preview></i></span>
          <div style="flex:1;">
            <input data-lucide-input list="lucideIconList" name="features[__INDEX__][icon]" value="" placeholder="zap / layout-dashboard">
          </div>
        </div>
      </div>
      <div class="field">
        <label>Title</label>
        <input name="features[__INDEX__][title]" value="" placeholder="Feature title">
      </div>
      <div class="field">
        <label>Description</label>
        <input name="features[__INDEX__][description]" value="" placeholder="Short description">
      </div>
      <div style="display:flex; justify-content:flex-end; gap:8px;">
        <input type="hidden" name="features[__INDEX__][sort_order]" value="__INDEX__">
        <button type="button" class="miniBtn danger" data-remove-row>Remove</button>
      </div>
    </div>
  </div>
</template>

<template id="tpl-impacts">
  <div class="rowBox" data-row>
    <div class="grid cols-4" style="gap:var(--row); align-items:end;">
      <div class="field">
        <label>Metric</label>
        <input name="impacts[__INDEX__][metric]" value="" placeholder="3×">
      </div>
      <div class="field">
        <label>Title</label>
        <input name="impacts[__INDEX__][title]" value="" placeholder="Impact title">
      </div>
      <div class="field">
        <label>Description</label>
        <input name="impacts[__INDEX__][description]" value="" placeholder="Short description">
      </div>
      <div style="display:flex; justify-content:flex-end; gap:8px;">
        <input type="hidden" name="impacts[__INDEX__][sort_order]" value="__INDEX__">
        <button type="button" class="miniBtn danger" data-remove-row>Remove</button>
      </div>
    </div>
  </div>
</template>

<template id="tpl-tech">
  <div class="rowBox" data-row>
    <div class="grid cols-3" style="gap:var(--row); align-items:end; grid-template-columns: 2fr 1fr auto;">
      <div class="field">
        <label>Name</label>
        <input name="tech[__INDEX__][name]" value="" placeholder="Laravel">
      </div>
      <div class="field">
        <label>Order</label>
        <input name="tech[__INDEX__][sort_order]" value="__INDEX__">
      </div>
      <div style="display:flex; justify-content:flex-end; gap:8px;">
        <button type="button" class="miniBtn danger" data-remove-row>Remove</button>
      </div>
    </div>
  </div>
</template>

<template id="tpl-testimonials">
  <div class="rowBox" data-row>
    <div class="grid cols-2" style="gap:var(--row); grid-template-columns: 1fr 1fr;">
      <div class="field">
        <label>Badge</label>
        <input name="testimonials[__INDEX__][badge]" value="" placeholder="Client Feedback">
      </div>

      <div class="field">
        <label>Rating (1–5)</label>
        <input type="number" min="1" max="5" name="testimonials[__INDEX__][rating]" value="" placeholder="5">
      </div>

      <div class="field" style="grid-column:1 / -1;">
        <label>Quote</label>
        <textarea name="testimonials[__INDEX__][quote]" rows="3" placeholder="Testimonial text..."></textarea>
      </div>

      <div class="field">
        <label>Author Name</label>
        <input name="testimonials[__INDEX__][author_name]" value="" placeholder="Mark Johnson">
      </div>

      <div class="field">
        <label>Author Title</label>
        <input name="testimonials[__INDEX__][author_title]" value="" placeholder="Product Director">
      </div>

      <div class="field">
        <label>Author Company</label>
        <input name="testimonials[__INDEX__][author_company]" value="" placeholder="GL Assessment">
      </div>

      <div class="field">
        <label>Source</label>
        <input name="testimonials[__INDEX__][source]" value="" placeholder="Email / Clutch / Google">
      </div>

      <div class="field" style="grid-column:1 / -1;">
        <label>Source URL</label>
        <input name="testimonials[__INDEX__][source_url]" value="" placeholder="https://...">
      </div>

      <div class="field">
        <label>Author Avatar</label>
        <input type="file" name="testimonials[__INDEX__][author_avatar]" accept="image/*">
      </div>

      <div class="field">
        <label>Company Logo</label>
        <input type="file" name="testimonials[__INDEX__][company_logo]" accept="image/*">
      </div>

      <div class="field">
        <label>Featured</label>
        <select name="testimonials[__INDEX__][is_featured]">
          <option value="0" selected>No</option>
          <option value="1">Yes</option>
        </select>
      </div>

      <div class="field">
        <label>Published</label>
        <select name="testimonials[__INDEX__][is_published]">
          <option value="1" selected>Yes</option>
          <option value="0">No</option>
        </select>
      </div>

      <div style="display:flex; justify-content:space-between; align-items:center; gap:10px; grid-column:1 / -1;">
        <input type="hidden" name="testimonials[__INDEX__][sort_order]" value="__INDEX__">
        <div class="hint" style="margin:0;">Order is auto unless you change it.</div>
        <button type="button" class="miniBtn danger" data-remove-row>Remove</button>
      </div>
    </div>
  </div>
</template>

