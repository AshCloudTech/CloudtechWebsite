@csrf

@php
    $mode = $mode ?? 'edit';

    $stats    = old('stats', $caseStudy->stats?->toArray() ?? []);
    $points   = old('points', $caseStudy->points?->toArray() ?? []);
    $features = old('features', $caseStudy->features?->toArray() ?? []);
    $impacts  = old('impacts', $caseStudy->impacts?->toArray() ?? []);
    $tech     = old('tech', $caseStudy->techStacks?->toArray() ?? []);

    $blockGap = '12px';
    $rowGap   = '10px';
@endphp

<style>
  .csForm .hint{
    font-size:12px;
    opacity:.72;
    margin-top:6px;
    line-height:1.45;
  }
  .csForm .hint b{ opacity:.95; }
  .csForm .subTitle{
    font-weight:800;
    font-size:13px;
    opacity:.80;
    margin:0 0 10px;
  }
  .csForm .sectionSpace{ height:12px; }
  .csForm .rowBox{
    border:1px solid rgba(0,0,0,.06);
    border-radius:10px;
    padding:10px;
    background: rgba(0,0,0,.01);
  }
  .csForm .rowBox + .rowBox{ margin-top:10px; }
  .csForm input[type="checkbox"]{ width:16px; height:16px; }
  .csForm .tag{
    display:inline-flex;
    align-items:center;
    gap:6px;
    padding:4px 8px;
    border-radius:999px;
    font-size:12px;
    font-weight:700;
    border:1px solid rgba(0,0,0,.08);
    background: rgba(0,0,0,.02);
    opacity:.85;
  }
  .csForm .tag.req{ border-color:rgba(220,38,38,.25); color:#b91c1c; background:rgba(220,38,38,.06); }
  .csForm .tag.opt{ border-color:rgba(2,132,199,.22); color:#075985; background:rgba(2,132,199,.06); }

  @media (max-width: 980px){
    .csForm .cols-2{ grid-template-columns: 1fr !important; }
    .csForm .cols-4{ grid-template-columns: 1fr 1fr !important; }
  }
</style>

<div class="csForm">
  <div class="grid cols-2" style="gap:{{ $blockGap }}; align-items:start;">

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
          <div class="grid cols-2" style="gap:{{ $blockGap }};">
            <div class="field" style="grid-column:1 / -1;">
              <label>Title <span style="color:#dc2626">*</span></label>
              <input name="title" value="{{ old('title', $caseStudy->title) }}" required placeholder="Case study title">
              <div class="hint"><b>Used in:</b> public listing card + hero heading. <b>Required.</b></div>
            </div>

            <div class="field" style="grid-column:1 / -1;">
              <label>Slug <span class="tag opt" style="margin-left:6px;">Optional</span></label>
              <input name="slug" value="{{ old('slug', $caseStudy->slug) }}" placeholder="learning-compass">
              <div class="hint">
                <b>Used in:</b> public URL.<br>
                Leave blank to auto-generate from title (recommended).
              </div>
            </div>

            <div class="field" style="grid-column:1 / -1;">
              <label>Subtitle <span class="tag opt" style="margin-left:6px;">Optional</span></label>
              <input name="subtitle" value="{{ old('subtitle', $caseStudy->subtitle) }}" placeholder="1–2 lines supporting hero text">
              <div class="hint"><b>Used in:</b> hero subheading. If empty, subtitle area should collapse on frontend.</div>
            </div>

            <div class="field" style="grid-column:1 / -1;">
              <label>Excerpt <span class="tag opt" style="margin-left:6px;">Optional</span></label>
              <input name="excerpt" value="{{ old('excerpt', $caseStudy->excerpt) }}" placeholder="Used in listing card (short summary)">
              <div class="hint">
                <b>Used in:</b> listing card description.<br>
                Keep it short (around 120–160 chars) for clean UI.
              </div>
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
            <p>Metadata for search engines and social previews.</p>
          </div>
          <div><span class="tag opt">Optional</span></div>
        </div>

        <div class="cardBody">
          <div class="grid cols-2" style="gap:{{ $blockGap }};">
            <div class="field" style="grid-column:1 / -1;">
              <label>Meta Title</label>
              <input name="meta_title" value="{{ old('meta_title', $caseStudy->meta_title) }}" placeholder="Custom meta title (optional)">
              <div class="hint">
                <b>Used in:</b> &lt;title&gt; tag + SERP title.<br>
                If empty, frontend can fallback to case study Title.
              </div>
            </div>

            <div class="field" style="grid-column:1 / -1;">
              <label>Meta Description</label>
              <textarea name="meta_description" rows="3" placeholder="Meta description (optional)">{{ old('meta_description', $caseStudy->meta_description) }}</textarea>
              <div class="hint">
                <b>Used in:</b> meta description (SEO). If empty, fallback to excerpt or first paragraph.
              </div>
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
            <b>Frontend rule:</b> If a panel has no title and no body and no points, the entire panel should hide.
          </div>

          <div class="grid cols-2" style="gap:{{ $blockGap }};">
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
                  <div class="hint">If empty, the section can show default heading or hide title line.</div>
                </div>
                <div class="field" style="margin-top:{{ $blockGap }};">
                  <label>Body</label>
                  <textarea name="challenge_body" rows="5" placeholder="Describe the problem to solve...">{{ old('challenge_body', $caseStudy->challenge_body) }}</textarea>
                  <div class="hint">Shown above challenge bullet points (if any).</div>
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
                  <div class="hint">If empty, the section can show default heading or hide title line.</div>
                </div>
                <div class="field" style="margin-top:{{ $blockGap }};">
                  <label>Body</label>
                  <textarea name="solution_body" rows="5" placeholder="Describe what we delivered...">{{ old('solution_body', $caseStudy->solution_body) }}</textarea>
                  <div class="hint">Shown above solution bullet points (if any).</div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="sectionSpace"></div>

      {{-- DYNAMIC BLOCKS --}}
      <div class="card" style="margin:0;">
        <div class="cardHeader">
          <div>
            <h3>Dynamic Blocks</h3>
            <p>These control the optional sections on the public detail page.</p>
          </div>
          <div><span class="tag opt">Optional</span></div>
        </div>

        <div class="cardBody">
          <div class="hint" style="margin-top:0; margin-bottom:10px;">
            <b>Important:</b> If a row is empty, frontend should ignore it. If all rows are empty, that whole section should hide.
          </div>

          {{-- STATS --}}
          <div class="subTitle">Stats</div>
          <div class="hint" style="margin-top:-6px; margin-bottom:10px;">
            <b>Used in:</b> detail page stats strip (top metrics). Typically 3–4 items.
            <br><b>Optional:</b> icon. If icon is empty, show only value + label.
          </div>

          @for($i=0; $i < max(4, count($stats)); $i++)
            <div class="rowBox">
              <div class="grid cols-4" style="gap:{{ $rowGap }};">
                <div class="field">
                  <label>Icon</label>
                  <input name="stats[{{ $i }}][icon]" value="{{ $stats[$i]['icon'] ?? '' }}" placeholder="users / star / shield-check">
                  <div class="hint">Lucide icon name (optional).</div>
                </div>
                <div class="field">
                  <label>Value</label>
                  <input name="stats[{{ $i }}][value]" value="{{ $stats[$i]['value'] ?? '' }}" placeholder="1M+">
                  <div class="hint">Short metric value.</div>
                </div>
                <div class="field" style="grid-column: span 2;">
                  <label>Label</label>
                  <input name="stats[{{ $i }}][label]" value="{{ $stats[$i]['label'] ?? '' }}" placeholder="Active Students">
                  <div class="hint">Short label shown under the value.</div>
                </div>
                <input type="hidden" name="stats[{{ $i }}][sort_order]" value="{{ $stats[$i]['sort_order'] ?? $i }}">
              </div>
            </div>
          @endfor

          <div class="sectionSpace"></div>

          {{-- POINTS --}}
          <div class="subTitle">Challenge / Solution Points</div>
          <div class="hint" style="margin-top:-6px; margin-bottom:10px;">
            <b>Used in:</b> bullet list inside Challenge and Solution panels.
            <br><b>Section:</b> choose challenge or solution. If section is empty, it should not render.
          </div>

          @for($i=0; $i < max(6, count($points)); $i++)
            <div class="rowBox">
              <div class="grid cols-4" style="gap:{{ $rowGap }};">
                <div class="field">
                  <label>Section</label>
                  <select name="points[{{ $i }}][section]">
                    <option value="">--</option>
                    <option value="challenge" {{ ($points[$i]['section'] ?? '')==='challenge'?'selected':'' }}>challenge</option>
                    <option value="solution"  {{ ($points[$i]['section'] ?? '')==='solution'?'selected':'' }}>solution</option>
                  </select>
                  <div class="hint">Where this point appears.</div>
                </div>

                <div class="field">
                  <label>Icon</label>
                  <input name="points[{{ $i }}][icon]" value="{{ $points[$i]['icon'] ?? '' }}" placeholder="x / check / sparkles">
                  <div class="hint">Optional. If empty, default icon can be used.</div>
                </div>

                <div class="field" style="grid-column: span 2;">
                  <label>Text</label>
                  <input name="points[{{ $i }}][text]" value="{{ $points[$i]['text'] ?? '' }}" placeholder="Point text">
                  <div class="hint">Keep it one line for clean UI.</div>
                </div>

                <input type="hidden" name="points[{{ $i }}][sort_order]" value="{{ $points[$i]['sort_order'] ?? $i }}">
              </div>
            </div>
          @endfor

          <div class="sectionSpace"></div>

          {{-- FEATURES --}}
          <div class="subTitle">Features</div>
          <div class="hint" style="margin-top:-6px; margin-bottom:10px;">
            <b>Used in:</b> “Key Features” grid on detail page.
            <br><b>Recommended:</b> 3–6 features. Icon is optional.
          </div>

          @for($i=0; $i < max(6, count($features)); $i++)
            <div class="rowBox">
              <div class="grid cols-4" style="gap:{{ $rowGap }};">
                <div class="field">
                  <label>Icon</label>
                  <input name="features[{{ $i }}][icon]" value="{{ $features[$i]['icon'] ?? '' }}" placeholder="zap / layout-dashboard">
                  <div class="hint">Lucide icon name (optional).</div>
                </div>
                <div class="field">
                  <label>Title</label>
                  <input name="features[{{ $i }}][title]" value="{{ $features[$i]['title'] ?? '' }}" placeholder="Feature title">
                  <div class="hint">Short title.</div>
                </div>
                <div class="field" style="grid-column: span 2;">
                  <label>Description</label>
                  <input name="features[{{ $i }}][description]" value="{{ $features[$i]['description'] ?? '' }}" placeholder="Short description">
                  <div class="hint">1 sentence for best layout.</div>
                </div>

                <input type="hidden" name="features[{{ $i }}][sort_order]" value="{{ $features[$i]['sort_order'] ?? $i }}">
              </div>
            </div>
          @endfor

          <div class="sectionSpace"></div>

          {{-- IMPACT --}}
          <div class="subTitle">Impact</div>
          <div class="hint" style="margin-top:-6px; margin-bottom:10px;">
            <b>Used in:</b> “Results &amp; Impact” section.
            <br><b>Metric:</b> keep it short (e.g. 45%, 3×, 5k+).
          </div>

          @for($i=0; $i < max(4, count($impacts)); $i++)
            <div class="rowBox">
              <div class="grid cols-4" style="gap:{{ $rowGap }};">
                <div class="field">
                  <label>Metric</label>
                  <input name="impacts[{{ $i }}][metric]" value="{{ $impacts[$i]['metric'] ?? '' }}" placeholder="3×">
                  <div class="hint">Big number shown on card.</div>
                </div>
                <div class="field">
                  <label>Title</label>
                  <input name="impacts[{{ $i }}][title]" value="{{ $impacts[$i]['title'] ?? '' }}" placeholder="Impact title">
                  <div class="hint">Short heading.</div>
                </div>
                <div class="field" style="grid-column: span 2;">
                  <label>Description</label>
                  <input name="impacts[{{ $i }}][description]" value="{{ $impacts[$i]['description'] ?? '' }}" placeholder="Short description">
                  <div class="hint">1 sentence recommended.</div>
                </div>

                <input type="hidden" name="impacts[{{ $i }}][sort_order]" value="{{ $impacts[$i]['sort_order'] ?? $i }}">
              </div>
            </div>
          @endfor

          <div class="sectionSpace"></div>

          {{-- TECH STACK --}}
          <div class="subTitle">Tech Stack</div>
          <div class="hint" style="margin-top:-6px; margin-bottom:10px;">
            <b>Used in:</b> chip/badge list near bottom of detail page.
            <br><b>Tip:</b> use short labels like “Laravel”, “React”, “AWS”.
          </div>

          @for($i=0; $i < max(8, count($tech)); $i++)
            <div class="rowBox">
              <div class="grid cols-2" style="gap:{{ $rowGap }};">
                <div class="field">
                  <label>Name</label>
                  <input name="tech[{{ $i }}][name]" value="{{ $tech[$i]['name'] ?? '' }}" placeholder="React">
                  <div class="hint">Chip label.</div>
                </div>
                <div class="field">
                  <label>Order</label>
                  <input name="tech[{{ $i }}][sort_order]" value="{{ $tech[$i]['sort_order'] ?? $i }}">
                  <div class="hint">Lower = earlier in list.</div>
                </div>
              </div>
            </div>
          @endfor

        </div>
      </div>

      <div class="sectionSpace"></div>

      <div class="btnRow" style="margin:0;">
        <button class="btn primary" type="submit">Save</button>
        <a class="btn" href="{{ route('admin.case-studies.index') }}">Cancel</a>
      </div>

    </div>

    {{-- RIGHT --}}
    <div>

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
          <div class="grid cols-2" style="gap:{{ $blockGap }};">

            <div class="field" style="grid-column:1 / -1;">
              <label>Industry</label>
              <input name="industry" value="{{ old('industry', $caseStudy->industry) }}" placeholder="EdTech">
              <div class="hint"><b>Used in:</b> listing card label and detail meta panel (if enabled).</div>
            </div>

            <div class="field" style="grid-column:1 / -1;">
              <label>Industry Tag Color</label>
              <input name="industry_tag_color" value="{{ old('industry_tag_color', $caseStudy->industry_tag_color) }}" placeholder="blue / purple / emerald ...">
              <div class="hint">
                <b>Used in:</b> listing badge styling (optional).
                If empty, default badge style is applied.
              </div>
            </div>

            <div class="field" style="grid-column:1 / -1;">
              <label>Client Name</label>
              <input name="client_name" value="{{ old('client_name', $caseStudy->client_name) }}" placeholder="GL Assessment">
              <div class="hint"><b>Used in:</b> hero meta cards (“Client”).</div>
            </div>

            <div class="field">
              <label>Year</label>
              <input name="year" value="{{ old('year', $caseStudy->year) }}" placeholder="2024">
              <div class="hint"><b>Used in:</b> hero meta cards (“Year”).</div>
            </div>

            <div class="field">
              <label>Sort Order</label>
              <input type="number" name="sort_order" value="{{ old('sort_order', $caseStudy->sort_order ?? 0) }}">
              <div class="hint"><b>Used in:</b> ordering on listing page.</div>
            </div>

            <div class="field" style="grid-column:1 / -1;">
              <label style="display:flex;gap:10px;align-items:center;cursor:pointer;">
                <input type="checkbox" name="is_published" value="1"
                       {{ old('is_published', $caseStudy->is_published) ? 'checked' : '' }}>
                Published
              </label>
              <div class="hint">
                If not published, case study should not show publicly (or returns 404).
              </div>
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
            <div class="hint">
              <b>Used in:</b> listing page card thumbnail.
              Recommended: WebP, 672×448 or similar.
            </div>

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
            <div class="hint">
              <b>Used in:</b> hero right-side image on detail page.
              Recommended: WebP, 1100×760 or similar.
            </div>

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
</div>
