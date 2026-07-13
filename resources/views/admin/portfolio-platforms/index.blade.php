@extends(console_layout())

@section('title','Portfolio Platforms')
@section('page_title','Portfolio Platforms')
@section('page_subtitle','Platforms used in the public portfolio filter (WordPress, Wix, GoDaddy, etc.).')

@section('content')

<div class="card" style="margin:0;">
  <div class="cardHeader">
    <div>
      <h3>Filters</h3>
      <p>Search by platform name or slug.</p>
    </div>
    <div style="display:flex;gap:8px;flex-wrap:wrap;">
      <a class="btn primary" href="{{ console_route('portfolio-platforms.create') }}">+ Add Platform</a>
      <a class="btn" href="{{ console_route('portfolio-items.index') }}">Portfolio Items</a>
    </div>
  </div>

  <div class="cardBody">
    <form method="GET" action="{{ console_route('portfolio-platforms.index') }}">
      <div class="grid cols-4" style="gap:12px;">
        <div class="field" style="grid-column:1 / 4;">
          <label>Search</label>
          <input name="search" value="{{ request('search') }}" placeholder="WordPress / wix / godaddy">
          <div class="hint" style="font-size:12px;opacity:.72;margin-top:6px;">
            Searches <b>name</b> and <b>slug</b>.
          </div>
        </div>

        <div class="field">
          <label>&nbsp;</label>
          <div style="display:flex;gap:8px;">
            <button class="btn primary" type="submit">Apply</button>
            <a class="btn" href="{{ console_route('portfolio-platforms.index') }}">Reset</a>
          </div>
        </div>
      </div>
    </form>
  </div>
</div>

<div style="height:12px;"></div>

<div class="card" style="margin:0;">
  <div class="cardHeader">
    <div>
      <h3>Platforms</h3>
      <p>Controls filters + platform badges shown on portfolio cards.</p>
    </div>
  </div>

  <div class="cardBody">

    @if(session('success'))
      <div class="alert alert-success" style="margin-bottom:12px;">{{ session('success') }}</div>
    @endif

    <table class="table">
      <thead>
        <tr>
          <th style="width:90px;">ID</th>
          <th>Name</th>
          <th style="width:220px;">Slug</th>
          <th style="width:180px;">Badge Color</th>
          <th style="width:120px;">Active</th>
          <th style="width:110px;">Order</th>
          <th style="width:220px;"></th>
        </tr>
      </thead>
      <tbody>
        @forelse($items as $row)
          <tr>
            <td>#{{ $row->id }}</td>
            <td style="font-weight:800;">{{ $row->name }}</td>
            <td style="font-family:var(--mono);">{{ $row->slug }}</td>
            <td>{{ $row->badge_color ?? '—' }}</td>
            <td>
              @if($row->is_active)
                <span style="font-weight:800;color:#0a7a2f;">Active</span>
              @else
                <span style="font-weight:800;opacity:.65;">Disabled</span>
              @endif
            </td>
            <td>{{ $row->sort_order }}</td>
            <td style="text-align:right;">
              <div style="display:flex;gap:8px;justify-content:flex-end;flex-wrap:wrap;">
                <a class="btn" href="{{ console_route('portfolio-platforms.edit', $row) }}">Edit</a>

                <form method="POST" action="{{ console_route('portfolio-platforms.destroy', $row) }}"
                      onsubmit="return confirm('Delete this platform? All linked portfolio items will also be deleted (cascade). Continue?')">
                  @csrf @method('DELETE')
                  <button class="btn" style="border-color:rgba(220,38,38,.35);color:#dc2626;">
                    Delete
                  </button>
                </form>
              </div>
            </td>
          </tr>
        @empty
          <tr><td colspan="7">No platforms found.</td></tr>
        @endforelse
      </tbody>
    </table>

    <div style="margin-top:12px;">{{ $items->links() }}</div>
  </div>
</div>

@endsection
