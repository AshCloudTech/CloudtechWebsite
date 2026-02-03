@extends('layouts.admin')

@section('title', 'Case Studies')
@section('page_title', 'Case Studies')
@section('page_subtitle', 'Manage case studies (filterable & searchable).')

@section('content')

    {{-- Filters --}}
    <div class="card" style="margin:0;">
        <div class="cardHeader">
            <div>
                <h3>Filters</h3>
                <p>Search, filter, and sort your case studies.</p>
            </div>

            <div>
                <a class="btn primary" href="{{ route('admin.case-studies.create') }}">+ Add Case Study</a>
            </div>
        </div>

        <div class="cardBody">
            <form method="GET" action="{{ route('admin.case-studies.index') }}">
                <div class="grid cols-4" style="gap:12px;">

                    <div class="field">
                        <label>Search</label>
                        <input type="text"
                               name="search"
                               value="{{ request('search') }}"
                               placeholder="Title / Slug / Client">
                    </div>

                    <div class="field">
                        <label>Status</label>
                        @php $status = request('status'); @endphp
                        <select name="status">
                            <option value="">All</option>
                            <option value="published" {{ $status === 'published' ? 'selected' : '' }}>Published</option>
                            <option value="draft" {{ $status === 'draft' ? 'selected' : '' }}>Draft</option>
                        </select>
                    </div>

                    <div class="field">
                        <label>Industry</label>
                        <input type="text"
                               name="industry"
                               value="{{ request('industry') }}"
                               placeholder="EdTech, Healthcare...">
                    </div>

                    <div class="field">
                        <label>Sort</label>
                        @php $sort = request('sort', 'latest'); @endphp
                        <select name="sort">
                            <option value="latest" {{ $sort === 'latest' ? 'selected' : '' }}>Latest</option>
                            <option value="oldest" {{ $sort === 'oldest' ? 'selected' : '' }}>Oldest</option>
                            <option value="order"  {{ $sort === 'order' ? 'selected' : '' }}>Sort Order</option>
                        </select>
                    </div>

                </div>

                <div class="btnRow" style="margin-top:12px;">
                    <button class="btn primary" type="submit">Apply Filters</button>
                    <a class="btn" href="{{ route('admin.case-studies.index') }}">Reset</a>
                </div>
            </form>
        </div>
    </div>

    <div style="height:12px;"></div>

    {{-- List --}}
    <div class="card" style="margin:0;">
        <div class="cardHeader">
            <div>
                <h3>Case Studies</h3>
                <p>Click “Edit” to update content and dynamic sections.</p>
            </div>
        </div>

        <div class="cardBody">

            @if(session('success'))
                <div class="alert alert-success" style="margin-bottom:12px;">
                    {{ session('success') }}
                </div>
            @endif

            <table class="table">
                <thead>
                    <tr>
                        <th style="width:90px;">ID</th>
                        <th>Title</th>
                        <th style="width:220px;">Industry</th>
                        <th style="width:140px;">Status</th>
                        <th style="width:120px;">Order</th>
                        <th style="width:200px;"></th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($items as $row)
                        <tr>
                            <td>#{{ $row->id }}</td>
                            <td>
                                <div style="font-weight:700;">{{ $row->title }}</div>
                                <div style="opacity:.7;margin-top:4px;">
                                    Slug: <span style="font-family:var(--mono);">{{ $row->slug }}</span>
                                </div>
                            </td>
                            <td>{{ $row->industry ?? '-' }}</td>
                            <td>
                                @if($row->is_published)
                                    <span style="font-weight:700;color:#0a7a2f;">Published</span>
                                @else
                                    <span style="font-weight:700;opacity:.7;">Draft</span>
                                @endif
                            </td>
                            <td>{{ $row->sort_order ?? 0 }}</td>
                            <td style="text-align:right;">
                                <div style="display:flex;gap:8px;justify-content:flex-end;flex-wrap:wrap;">
                                    <a class="btn" href="{{ route('admin.case-studies.edit', $row) }}">Edit</a>

                                    <form action="{{ route('admin.case-studies.destroy', $row) }}"
                                          method="POST"
                                          onsubmit="return confirm('Delete this case study?')">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn" type="submit" style="border-color:rgba(220,38,38,.35);color:#dc2626;">
                                            Delete
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="6">No case studies found.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>

            <div style="margin-top:12px;">
                {{ $items->links() }}
            </div>
        </div>
    </div>

@endsection
