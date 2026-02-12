@extends('layouts.admin')

@section('title', 'Audit Leads')
@section('page_title', 'Audit Leads')

@section('content')
<div class="card">
  <div class="cardHeader" style="display:flex;justify-content:space-between;align-items:center;gap:12px;">
    <div>
      <h3 style="margin:0;">Audit Leads</h3>
      <p style="margin:6px 0 0;">View and manage “Get Audit” submissions with status tracking.</p>
    </div>

    <div class="field">
      <form method="GET" action="{{ route('admin.audit-leads.index') }}" style="display:flex;gap:10px;align-items:center;flex-wrap:wrap;justify-content:flex-end;">
        <select name="status" class="form-control" style="min-width:180px;">
          <option value="">All Status</option>
          @foreach($statuses as $st)
            <option value="{{ $st }}" @selected(request('status')===$st)>{{ ucfirst(str_replace('_',' ', $st)) }}</option>
          @endforeach
        </select>

        <input
          type="text"
          name="audit_type"
          class="form-control"
          style="min-width:220px;"
          value="{{ request('audit_type') }}"
          placeholder="Audit Type (e.g. technical-seo)"
        >

        <input
          type="text"
          name="search"
          class="form-control"
          style="min-width:240px;"
          value="{{ request('search') }}"
          placeholder="Search name/email/phone"
        >

        <button class="btn btn-primary" type="submit">Filter</button>
        <a class="btn btn-ghost" href="{{ route('admin.audit-leads.index') }}">Reset</a>
      </form>
    </div>
  </div>

  <div class="cardBody">
    @if(session('success'))
      <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <div style="overflow:auto;">
      <table class="table">
        <thead>
          <tr>
            <th style="white-space:nowrap;">#</th>
            <th style="white-space:nowrap;">Audit Type</th>
            <th>Name</th>
            <th>Email</th>
            <th style="white-space:nowrap;">Phone</th>
            <th style="white-space:nowrap;">Status</th>
            <th style="white-space:nowrap;">Submitted</th>
            <th style="text-align:right;white-space:nowrap;">Action</th>
          </tr>
        </thead>

        <tbody>
          @forelse($items as $item)
            @php
              $status = $item->status ?? 'new';
              // Optional class mapping if your badge supports variants (safe fallback)
              $badgeClass = match($status) {
                'new' => 'badge',
                'contacted' => 'badge',
                'in_progress' => 'badge',
                'qualified' => 'badge',
                'not_reachable' => 'badge',
                'closed' => 'badge',
                default => 'badge',
              };
            @endphp

            <tr>
              <td style="white-space:nowrap;">{{ $item->id }}</td>

              <td style="white-space:nowrap;">
                <span class="badge">{{ $item->audit_type }}</span>
                @if(!empty($item->source_page))
                  <div style="font-size:12px;opacity:.7;margin-top:4px;">
                    {{ $item->source_page }}
                  </div>
                @endif
              </td>

              <td>
                <div style="font-weight:800;">{{ $item->name }}</div>
                @if(!empty($item->reason))
                  <div style="font-size:12px;opacity:.75;max-width:520px;white-space:nowrap;overflow:hidden;text-overflow:ellipsis;">
                    {{ $item->reason }}
                  </div>
                @endif
              </td>

              <td style="white-space:nowrap;">
                <a href="mailto:{{ $item->email }}">{{ $item->email }}</a>
              </td>

              <td style="white-space:nowrap;">
                @if($item->phone)
                  <a href="tel:{{ $item->phone }}">{{ $item->phone }}</a>
                @else
                  -
                @endif
              </td>

              <td style="white-space:nowrap;">
                <span class="{{ $badgeClass }}">{{ ucfirst(str_replace('_',' ', $status)) }}</span>
              </td>

              <td style="white-space:nowrap;">
                {{ optional($item->created_at)->format('d M Y') }}
                <div style="font-size:12px;opacity:.7;">
                  {{ optional($item->created_at)->format('h:i A') }}
                </div>
              </td>

              <td style="text-align:right;white-space:nowrap;">
                <a href="{{ route('admin.audit-leads.show', $item) }}" class="btn btn-sm btn-primary">View</a>
              </td>
            </tr>
          @empty
            <tr>
              <td colspan="8" style="padding:16px;opacity:.7;">No audit leads found.</td>
            </tr>
          @endforelse
        </tbody>
      </table>
    </div>

    <div style="margin-top:12px;">
      {{ $items->links() }}
    </div>
  </div>
</div>
@endsection
