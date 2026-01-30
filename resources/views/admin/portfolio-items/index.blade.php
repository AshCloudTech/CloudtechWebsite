@extends('layouts.admin')

@section('title','Portfolio Items')
@section('page_title','Portfolio Items')
@section('page_subtitle','Manage projects shown on the public portfolio page.')

@section('content')

<div class="card" style="margin:0;">
  <div class="cardHeader">
    <div>
      <h3>Filters</h3>
      <p>Search and filter portfolio items.</p>
    </div>
    <div style="display:flex;gap:8px;flex-wrap:wrap;">
      <a class="btn primary" href="{{ route('admin.portfolio-items.create') }}">+ Add Item</a>
      <a class="btn" href="{{ route('admin.portfolio-platforms.index') }}">Platforms</a>
    </div>
  </div>

  <div class="cardBody">
    <form method="GET" action="{{ route('admin.portfolio-items.index') }}">
      <div class="grid cols-4" style="gap:12px;">
        <div class="field">
          <label>Search</label>
          <input name="search" value="{{ request('search') }}" placeholder="Title / Slug / Industry">
        </div>

        <div class="field">
          <label>Platform</label>
          <select name="platform">
            <option value="">All</option>
            @foreach($platforms as $p)
              <option value="{{ $p->slug }}" {{ request('platform')===$p->slug?'selected':'' }}>
                {{ $p->name }}
              </option>
            @endforeach
          </select>
        </div>

        <div class="field">
          <label>Status</label>
          <select name="status">
            <option value="">All</option>
            <option value="published" {{ request('status')==='published'?'selected':'' }}>Published</option>
            <option value="draft" {{ request('status')==='draft'?'selected':'' }}>Draft</option>
          </select>
        </div>

        <div class="field">
          <label>&nbsp;</label>
          <div style="display:flex; gap:8px;">
            <button class="btn primary" type="submit">Apply</button>
            <a class="btn" href="{{ route('admin.portfolio-items.index') }}">Reset</a>
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
      <h3>Items</h3>
      <p>These render into the portfolio grid on the public page.</p>
    </div>
  </div>

  <div class="cardBody">

    @if(session('success'))
      <div class="alert alert-success" style="margin-bottom:12px;">{{ session('success') }}</div>
    @endif

    <table class="table">
      <thead>
        <tr>
          <th style="width:80px;">ID</th>
          <th>Title</th>
          <th style="width:200px;">Platform</th>
          <th style="width:160px;">Published</th>
          <th style="width:110px;">Order</th>
          <th style="width:200px;"></th>
        </tr>
      </thead>
      <tbody>
        @forelse($items as $row)
          <tr>
            <td>#{{ $row->id }}</td>
            <td>
              <div style="font-weight:800;">{{ $row->title }}</div>
              <div style="opacity:.7;margin-top:4px;">
                {{ $row->industry ?? '—' }}
                · <span style="font-family:var(--mono);">{{ $row->slug }}</span>
              </div>
            </td>
            <td>{{ $row->platform?->name ?? '-' }}</td>
            <td>
              @if($row->is_published)
                <span style="font-weight:800;color:#0a7a2f;">Published</span>
              @else
                <span style="font-weight:800;opacity:.65;">Draft</span>
              @endif
            </td>
            <td>{{ $row->sort_order }}</td>
            <td style="text-align:right;">
              <div style="display:flex;gap:8px;justify-content:flex-end;flex-wrap:wrap;">
                <a class="btn" href="{{ route('admin.portfolio-items.edit', $row) }}">Edit</a>
                <form method="POST" action="{{ route('admin.portfolio-items.destroy', $row) }}"
                      onsubmit="return confirm('Delete this portfolio item?')">
                  @csrf @method('DELETE')
                  <button class="btn" style="border-color:rgba(220,38,38,.35);color:#dc2626;">Delete</button>
                </form>
              </div>
            </td>
          </tr>
        @empty
          <tr><td colspan="6">No items found.</td></tr>
        @endforelse
      </tbody>
    </table>

    <div style="margin-top:12px;">{{ $items->links() }}</div>
  </div>
</div>

@endsection
