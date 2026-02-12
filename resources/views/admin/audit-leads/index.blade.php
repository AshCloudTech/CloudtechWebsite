@extends('layouts.admin')

@section('title','Audit Leads')

@section('content')
<div class="container">
  <div class="pageHeader">
    <h1>Audit Leads</h1>
    <p class="muted">All “Get Audit” submissions with status tracking.</p>
  </div>

  @if(session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
  @endif

  <form class="card mb-3" method="GET" action="{{ route('admin.audit-leads.index') }}">
    <div class="row g-2 p-3">
      <div class="col-md-3">
        <label class="form-label">Status</label>
        <select name="status" class="form-select">
          <option value="">All</option>
          @foreach($statuses as $st)
            <option value="{{ $st }}" @selected(request('status')===$st)>{{ ucfirst(str_replace('_',' ',$st)) }}</option>
          @endforeach
        </select>
      </div>

      <div class="col-md-3">
        <label class="form-label">Audit Type</label>
        <input type="text" name="audit_type" class="form-control" value="{{ request('audit_type') }}" placeholder="technical-seo">
      </div>

      <div class="col-md-4">
        <label class="form-label">Search</label>
        <input type="text" name="search" class="form-control" value="{{ request('search') }}" placeholder="name / email / phone">
      </div>

      <div class="col-md-2 d-flex align-items-end">
        <button class="btn btn-primary w-100">Filter</button>
      </div>
    </div>
  </form>

  <div class="card">
    <div class="table-responsive">
      <table class="table table-hover align-middle mb-0">
        <thead>
          <tr>
            <th>Date</th>
            <th>Audit Type</th>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Status</th>
            <th class="text-end">Action</th>
          </tr>
        </thead>
        <tbody>
          @forelse($items as $item)
            <tr>
              <td>{{ $item->created_at->format('d M Y, h:i A') }}</td>
              <td><span class="badge bg-secondary">{{ $item->audit_type }}</span></td>
              <td>{{ $item->name }}</td>
              <td>{{ $item->email }}</td>
              <td>{{ $item->phone ?? '-' }}</td>
              <td>
                <span class="badge bg-info text-dark">
                  {{ ucfirst(str_replace('_',' ',$item->status)) }}
                </span>
              </td>
              <td class="text-end">
                <a class="btn btn-sm btn-outline-primary" href="{{ route('admin.audit-leads.show', $item) }}">View</a>
              </td>
            </tr>
          @empty
            <tr><td colspan="7" class="text-center p-4 text-muted">No leads found.</td></tr>
          @endforelse
        </tbody>
      </table>
    </div>

    <div class="p-3">
      {{ $items->links() }}
    </div>
  </div>
</div>
@endsection
