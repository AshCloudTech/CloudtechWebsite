@php
    $mode = $mode ?? 'edit';

    $stats       = old('stats', $caseStudy->stats?->toArray() ?? []);
    $kpis        = old('kpis', $caseStudy->kpis?->toArray() ?? []);
    $trends      = old('trends', $caseStudy->chartTrends?->toArray() ?? []);
    $breakdowns  = old('breakdowns', $caseStudy->chartBreakdowns?->toArray() ?? []);
    $tasks       = old('tasks', $caseStudy->tasks?->toArray() ?? []);
    $points      = old('points', $caseStudy->points?->toArray() ?? []);
    $features    = old('features', $caseStudy->features?->toArray() ?? []);
    $impacts     = old('impacts', $caseStudy->impacts?->toArray() ?? []);
    $tech        = old('tech', $caseStudy->techStacks?->toArray() ?? []);
    $testimonials = old('testimonials', $caseStudy->testimonials?->toArray() ?? []);

    $blockGap = '14px';
    $rowGap   = '12px';

    $statsCount       = max(1, count($stats));
    $kpisCount        = max(1, count($kpis));
    $trendsCount      = max(1, count($trends));
    $breakdownsCount  = max(1, count($breakdowns));
    $tasksCount       = max(1, count($tasks));
    $pointsCount      = max(1, count($points));
    $featuresCount    = max(1, count($features));
    $impactsCount     = max(1, count($impacts));
    $techCount        = max(1, count($tech));
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

  .csForm .rowBox{
    border:1px solid rgba(0,0,0,.06);
    border-radius:12px;
    padding:12px;
    background: rgba(0,0,0,.012);
    margin-top:10px;
  }

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
    border-color: rgba(220,38,38,.20);
    background: rgba(220,38,38,.06);
    color: #b91c1c;
  }
</style>

<div class="csForm">

  {{-- TOP 2 COLUMNS --}}
  <div class="twoColWrap">

    {{-- LEFT COLUMN --}}
    <div>

      {{-- CORE DETAILS --}}
      <div class="card" style="margin:0;">
        <div class="cardHeader">
          <div>
            <h3>Core Details</h3>
            <p>Primary information displayed on cards and hero eyebrow.</p>
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
              <input name="title" value="{{ old('title', $caseStudy->title) }}" required placeholder="e.g. London Legal Practice">
              <div class="hint">Main client / project title.</div>
            </div>

            <div class="field">
              <label>Slug <span class="tag opt">Auto-generated</span></label>
              <input name="slug" value="{{ old('slug', $caseStudy->slug) }}" placeholder="e.g. london-legal-practice">
            </div>

            <div class="field">
              <label>Location</label>
              <input name="location" value="{{ old('location', $caseStudy->location) }}" placeholder="e.g. London / Ilford / UK-Wide">
            </div>

            <div class="field">
              <label>Industry</label>
              <input name="industry" value="{{ old('industry', $caseStudy->industry) }}" placeholder="e.g. Legal Services / House Removals">
            </div>

            <div class="field">
              <label>Duration</label>
              <input name="duration" value="{{ old('duration', $caseStudy->duration) }}" placeholder="e.g. 3 Months / 15 Days">
            </div>

            <div class="field" style="grid-column:1 / -1;">
              <label>Website URL (optional)</label>
              <input name="website" value="{{ old('website', $caseStudy->website) }}" placeholder="https://example.com">
            </div>

            <div class="field" style="grid-column:1 / -1;">
              <label>Description / Excerpt</label>
              <textarea name="excerpt" rows="3" placeholder="Short overview used in listing cards">{{ old('excerpt', $caseStudy->excerpt) }}</textarea>
            </div>
          </div>
        </div>
      </div>

      <div class="sectionSpace"></div>

      {{-- HERO SECTION --}}
      <div class="card" style="margin:0;">
        <div class="cardHeader">
          <div>
            <h3>Detail Page Hero</h3>
            <p>Main showcase copy on the single case study detail page.</p>
          </div>
          <div><span class="tag opt">Optional</span></div>
        </div>

        <div class="cardBody">
          <div class="grid cols-2" style="gap:var(--gap);">
            <div class="field">
              <label>Hero Title (Main)</label>
              <input name="hero_title_main" value="{{ old('hero_title_main', $caseStudy->hero_title_main) }}" placeholder="e.g. We Help Legal Firms Get Found.">
            </div>

            <div class="field">
              <label>Hero Title Highlight (Italic/Em)</label>
              <input name="hero_title_em" value="{{ old('hero_title_em', $caseStudy->hero_title_em) }}" placeholder="e.g. We Drive Results.">
            </div>

            <div class="field" style="grid-column:1 / -1;">
              <label>Hero Lead Story</label>
              <textarea name="hero_lead" rows="3" placeholder="1-3 sentences introducing the partnership and achievement...">{{ old('hero_lead', $caseStudy->hero_lead) }}</textarea>
            </div>

            <div class="field" style="grid-column:1 / -1;">
              <label>Hero Key Quote / Highlight</label>
              <input name="hero_quote" value="{{ old('hero_quote', $caseStudy->hero_quote) }}" placeholder="e.g. &quot;Stronger visibility. More enquiries. Business growth.&quot;">
            </div>
          </div>
        </div>
      </div>

      <div class="sectionSpace"></div>

      {{-- CALL TO ACTION --}}
      <div class="card" style="margin:0;">
        <div class="cardHeader">
          <div>
            <h3>Detail Bottom Call-To-Action</h3>
            <p>Banner at the bottom of the case study detail page.</p>
          </div>
          <div><span class="tag opt">Optional</span></div>
        </div>

        <div class="cardBody">
          <div class="grid cols-2" style="gap:var(--gap);">
            <div class="field" style="grid-column:1 / -1;">
              <label>CTA Title (Supports &lt;em&gt; tag)</label>
              <input name="cta_title" value="{{ old('cta_title', $caseStudy->cta_title) }}" placeholder="Want Results &lt;em&gt;Like London Legal Practice?&lt;/em&gt;">
            </div>

            <div class="field" style="grid-column:1 / -1;">
              <label>CTA Button Text</label>
              <input name="cta_btn_text" value="{{ old('cta_btn_text', $caseStudy->cta_btn_text) }}" placeholder="Book a Free Consultation Today">
            </div>
          </div>
        </div>
      </div>

      <div class="sectionSpace"></div>

      {{-- SEO --}}
      <div class="card" style="margin:0;">
        <div class="cardHeader">
          <div>
            <h3>SEO Metadata</h3>
            <p>Meta title and description for search engines.</p>
          </div>
          <div><span class="tag opt">Optional</span></div>
        </div>

        <div class="cardBody">
          <div class="grid cols-2" style="gap:var(--gap);">
            <div class="field" style="grid-column:1 / -1;">
              <label>Meta Title</label>
              <input name="meta_title" value="{{ old('meta_title', $caseStudy->meta_title) }}" placeholder="London Legal Practice - Case Study">
            </div>

            <div class="field" style="grid-column:1 / -1;">
              <label>Meta Description</label>
              <textarea name="meta_description" rows="3" placeholder="Meta description for search engines">{{ old('meta_description', $caseStudy->meta_description) }}</textarea>
            </div>
          </div>
        </div>
      </div>

    </div>

    {{-- RIGHT COLUMN --}}
    <div class="rightSticky">

      {{-- Publishing --}}
      <div class="card" style="margin:0;">
        <div class="cardHeader">
          <div>
            <h3>Publishing &amp; Order</h3>
            <p>Controls visibility and display priority.</p>
          </div>
        </div>

        <div class="cardBody">
          <div class="grid cols-2" style="gap:var(--gap);">
            <div class="field">
              <label>Sort Order</label>
              <input type="number" name="sort_order" value="{{ old('sort_order', $caseStudy->sort_order ?? 0) }}">
            </div>

            <div class="field">
              <label>Year</label>
              <input name="year" value="{{ old('year', $caseStudy->year) }}" placeholder="2026">
            </div>

            <div class="field" style="grid-column:1 / -1;">
              <label style="display:flex;gap:10px;align-items:center;cursor:pointer;">
                <input type="checkbox" name="is_published" value="1"
                       {{ old('is_published', $caseStudy->is_published ?? true) ? 'checked' : '' }}>
                <strong>Published (Live on Website)</strong>
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
            <h3>Images</h3>
            <p>Card and detail hero visuals.</p>
          </div>
        </div>

        <div class="cardBody">
          <div class="field">
            <label>Card &amp; Detail Visual Image</label>
            <input type="file" name="card_image" accept="image/*">
            <div class="hint">Recommended: WebP or PNG format (e.g. assets/images/case-studies/...).</div>

            @if($caseStudy->card_image)
              <div style="margin-top:10px;">
                <div class="hint">Current Card Image:</div>
                <img src="{{ asset($caseStudy->card_image) }}" alt="Card image"
                     style="max-width:100%; border:1px solid rgba(0,0,0,.08); border-radius:10px; margin-top:4px;">
              </div>
            @endif
          </div>

          <div class="field" style="margin-top:14px;">
            <label>Hero Image (optional override)</label>
            <input type="file" name="hero_image" accept="image/*">

            @if($caseStudy->hero_image && $caseStudy->hero_image !== $caseStudy->card_image)
              <div style="margin-top:10px;">
                <div class="hint">Current Hero Image:</div>
                <img src="{{ asset($caseStudy->hero_image) }}" alt="Hero image"
                     style="max-width:100%; border:1px solid rgba(0,0,0,.08); border-radius:10px; margin-top:4px;">
              </div>
            @endif
          </div>
        </div>
      </div>

    </div>

  </div>

  {{-- FULL WIDTH DYNAMIC BLOCKS --}}
  <div class="fullRow">

    {{-- SECTION 1: KPIS & CARD STATS --}}
    <div class="card" style="margin:0;">
      <div class="cardHeader">
        <div>
          <h3>Key Metrics &amp; KPIs</h3>
          <p>Displayed in the 3-stat cards and Key Performance Indicators grid on the detail page.</p>
        </div>
        <div class="dynActions">
          <button type="button" class="miniBtn" data-add-row="kpis">+ Add KPI</button>
        </div>
      </div>

      <div class="cardBody">
        <div data-section="kpis" data-next-index="{{ $kpisCount }}">
          @foreach($kpis as $i => $row)
            <div class="rowBox" data-row>
              <div class="grid cols-4" style="gap:var(--row); align-items:end;">
                <div class="field">
                  <label>Label</label>
                  <input name="kpis[{{ $i }}][label]" value="{{ $row['label'] ?? '' }}" placeholder="e.g. Calls / Directions">
                </div>
                <div class="field">
                  <label>Numeric Value (Counter)</label>
                  <input name="kpis[{{ $i }}][value]" value="{{ $row['value'] ?? '' }}" placeholder="e.g. 18 / 156 / 42">
                </div>
                <div class="field">
                  <label>Formatted Text (Display)</label>
                  <input name="kpis[{{ $i }}][formatted]" value="{{ $row['formatted'] ?? '' }}" placeholder="e.g. 18 / 15 Days / +300%">
                </div>
                <div class="field">
                  <label>Subtext</label>
                  <input name="kpis[{{ $i }}][sub]" value="{{ $row['sub'] ?? '' }}" placeholder="e.g. from Business Profile">
                </div>
                <div class="field" style="grid-column: 1 / 4;">
                  <label>Delta / Comparison Note</label>
                  <input name="kpis[{{ $i }}][delta]" value="{{ $row['delta'] ?? '' }}" placeholder="e.g. +1,700.0% vs Apr–Jun 2025">
                </div>
                <div class="field" style="display:flex; justify-content:flex-end;">
                  <button type="button" class="miniBtn danger" data-remove-row>Remove</button>
                </div>
              </div>
            </div>
          @endforeach
        </div>
      </div>
    </div>

    <div class="sectionSpace"></div>

    {{-- SECTION 2: CHARTS & ANALYTICS --}}
    <div class="card" style="margin:0;">
      <div class="cardHeader">
        <div>
          <h3>Charts &amp; Visual Analytics</h3>
          <p>Performance trends bar chart and discovery breakdown list.</p>
        </div>
      </div>

      <div class="cardBody">

        {{-- Trends Bar Chart --}}
        <div class="field">
          <label><strong>Left Chart Heading (Trend)</strong></label>
          <input name="chart_trend_label" value="{{ old('chart_trend_label', $caseStudy->chart_trend_label) }}" placeholder="e.g. Website Clicks Trend (Apr–Jun 2026)">
        </div>

        <div class="dynHead">
          <div class="left">
            <h4>Trend Bars</h4>
            <p>Bars in the left trend chart. Value (counter), height percentage, and bar label.</p>
          </div>
          <div class="dynActions">
            <button type="button" class="miniBtn" data-add-row="trends">+ Add Trend Bar</button>
          </div>
        </div>

        <div data-section="trends" data-next-index="{{ $trendsCount }}">
          @foreach($trends as $i => $row)
            <div class="rowBox" data-row>
              <div class="grid cols-4" style="gap:var(--row); align-items:end;">
                <div class="field">
                  <label>Bar Label</label>
                  <input name="trends[{{ $i }}][label]" value="{{ $row['label'] ?? '' }}" placeholder="e.g. Apr 2026 / Month 1">
                </div>
                <div class="field">
                  <label>Value</label>
                  <input name="trends[{{ $i }}][value]" value="{{ $row['value'] ?? '' }}" placeholder="e.g. 10 / 380 / 4300">
                </div>
                <div class="field">
                  <label>Bar Height (%)</label>
                  <input name="trends[{{ $i }}][height]" value="{{ $row['height'] ?? '50%' }}" placeholder="e.g. 50% / 100%">
                </div>
                <div class="field" style="display:flex; justify-content:flex-end;">
                  <button type="button" class="miniBtn danger" data-remove-row>Remove</button>
                </div>
              </div>
            </div>
          @endforeach
        </div>

        <div class="dividerLine"></div>

        {{-- Discovery Breakdown --}}
        <div class="field">
          <label><strong>Right Chart Heading (Breakdown)</strong></label>
          <input name="chart_breakdown_label" value="{{ old('chart_breakdown_label', $caseStudy->chart_breakdown_label) }}" placeholder="e.g. How People Discovered The Legal Firm">
        </div>

        <div class="dynHead">
          <div class="left">
            <h4>Breakdown Progress Rows</h4>
            <p>Percentage bars in the right discovery breakdown chart.</p>
          </div>
          <div class="dynActions">
            <button type="button" class="miniBtn" data-add-row="breakdowns">+ Add Breakdown Row</button>
          </div>
        </div>

        <div data-section="breakdowns" data-next-index="{{ $breakdownsCount }}">
          @foreach($breakdowns as $i => $row)
            <div class="rowBox" data-row>
              <div class="grid cols-3" style="gap:var(--row); align-items:end;">
                <div class="field">
                  <label>Channel / Discovery Label</label>
                  <input name="breakdowns[{{ $i }}][label]" value="{{ $row['label'] ?? '' }}" placeholder="e.g. Google Search — mobile">
                </div>
                <div class="field">
                  <label>Percentage / Value</label>
                  <input name="breakdowns[{{ $i }}][pct]" value="{{ $row['pct'] ?? '' }}" placeholder="e.g. 68% / #1 Spot">
                </div>
                <div class="field" style="display:flex; justify-content:flex-end;">
                  <button type="button" class="miniBtn danger" data-remove-row>Remove</button>
                </div>
              </div>
            </div>
          @endforeach
        </div>

      </div>
    </div>

    <div class="sectionSpace"></div>

    {{-- SECTION 3: STRATEGY & WHAT WE EXECUTED --}}
    <div class="card" style="margin:0;">
      <div class="cardHeader">
        <div>
          <h3>What We Executed (Strategy Checklist)</h3>
          <p>Checklist bullets displayed in the "What We Executed" strategy card.</p>
        </div>
        <div class="dynActions">
          <button type="button" class="miniBtn" data-add-row="tasks">+ Add Strategy Task</button>
        </div>
      </div>

      <div class="cardBody">
        <div data-section="tasks" data-next-index="{{ $tasksCount }}">
          @foreach($tasks as $i => $row)
            <div class="rowBox" data-row>
              <div class="grid cols-4" style="gap:var(--row); align-items:end;">
                <div class="field" style="grid-column: 1 / 4;">
                  <label>Strategy / Executed Task</label>
                  <input name="tasks[{{ $i }}][task]" value="{{ is_array($row) ? ($row['task'] ?? '') : (string)$row }}" placeholder="e.g. Google Business Profile Optimisation">
                </div>
                <div class="field" style="display:flex; justify-content:flex-end;">
                  <button type="button" class="miniBtn danger" data-remove-row>Remove</button>
                </div>
              </div>
            </div>
          @endforeach
        </div>
      </div>
    </div>

  </div>

  {{-- FORM ACTION BUTTONS --}}
  <div style="display:flex; justify-content:space-between; align-items:center; margin-top:20px; padding:12px 0;">
    <a href="{{ console_route('case-studies.index') }}" class="btn">Cancel</a>
    <button type="submit" class="btn primary">{{ $mode === 'create' ? 'Create Case Study' : 'Save Changes' }}</button>
  </div>

</div>

{{-- TEMPLATES FOR DYNAMIC ROW CREATION --}}
<template id="tpl-kpis">
  <div class="rowBox" data-row>
    <div class="grid cols-4" style="gap:var(--row); align-items:end;">
      <div class="field">
        <label>Label</label>
        <input name="kpis[__INDEX__][label]" placeholder="e.g. Calls / Directions">
      </div>
      <div class="field">
        <label>Numeric Value (Counter)</label>
        <input name="kpis[__INDEX__][value]" placeholder="e.g. 18 / 156 / 42">
      </div>
      <div class="field">
        <label>Formatted Text (Display)</label>
        <input name="kpis[__INDEX__][formatted]" placeholder="e.g. 18 / 15 Days / +300%">
      </div>
      <div class="field">
        <label>Subtext</label>
        <input name="kpis[__INDEX__][sub]" placeholder="e.g. from Business Profile">
      </div>
      <div class="field" style="grid-column: 1 / 4;">
        <label>Delta / Comparison Note</label>
        <input name="kpis[__INDEX__][delta]" placeholder="e.g. +1,700.0% vs Apr–Jun 2025">
      </div>
      <div class="field" style="display:flex; justify-content:flex-end;">
        <button type="button" class="miniBtn danger" data-remove-row>Remove</button>
      </div>
    </div>
  </div>
</template>

<template id="tpl-trends">
  <div class="rowBox" data-row>
    <div class="grid cols-4" style="gap:var(--row); align-items:end;">
      <div class="field">
        <label>Bar Label</label>
        <input name="trends[__INDEX__][label]" placeholder="e.g. Apr 2026">
      </div>
      <div class="field">
        <label>Value</label>
        <input name="trends[__INDEX__][value]" placeholder="e.g. 10 / 380">
      </div>
      <div class="field">
        <label>Bar Height (%)</label>
        <input name="trends[__INDEX__][height]" value="50%" placeholder="e.g. 50% / 100%">
      </div>
      <div class="field" style="display:flex; justify-content:flex-end;">
        <button type="button" class="miniBtn danger" data-remove-row>Remove</button>
      </div>
    </div>
  </div>
</template>

<template id="tpl-breakdowns">
  <div class="rowBox" data-row>
    <div class="grid cols-3" style="gap:var(--row); align-items:end;">
      <div class="field">
        <label>Channel / Discovery Label</label>
        <input name="breakdowns[__INDEX__][label]" placeholder="e.g. Google Search — mobile">
      </div>
      <div class="field">
        <label>Percentage / Value</label>
        <input name="breakdowns[__INDEX__][pct]" placeholder="e.g. 68% / #1 Spot">
      </div>
      <div class="field" style="display:flex; justify-content:flex-end;">
        <button type="button" class="miniBtn danger" data-remove-row>Remove</button>
      </div>
    </div>
  </div>
</template>

<template id="tpl-tasks">
  <div class="rowBox" data-row>
    <div class="grid cols-4" style="gap:var(--row); align-items:end;">
      <div class="field" style="grid-column: 1 / 4;">
        <label>Strategy / Executed Task</label>
        <input name="tasks[__INDEX__][task]" placeholder="e.g. Google Business Profile Optimisation">
      </div>
      <div class="field" style="display:flex; justify-content:flex-end;">
        <button type="button" class="miniBtn danger" data-remove-row>Remove</button>
      </div>
    </div>
  </div>
</template>

<script>
document.addEventListener('DOMContentLoaded', function () {
  document.querySelectorAll('[data-add-row]').forEach(function (btn) {
    btn.addEventListener('click', function () {
      var sectionKey = btn.getAttribute('data-add-row');
      var container = document.querySelector('[data-section="' + sectionKey + '"]');
      var tpl = document.getElementById('tpl-' + sectionKey);
      if (!container || !tpl) return;

      var nextIndex = parseInt(container.getAttribute('data-next-index') || '0', 10);
      container.setAttribute('data-next-index', nextIndex + 1);

      var html = tpl.innerHTML.replace(/__INDEX__/g, nextIndex);
      var div = document.createElement('div');
      div.innerHTML = html.trim();
      container.appendChild(div.firstChild);
    });
  });

  document.addEventListener('click', function (e) {
    if (e.target && e.target.matches('[data-remove-row]')) {
      var row = e.target.closest('[data-row]');
      if (row) row.remove();
    }
  });
});
</script>
