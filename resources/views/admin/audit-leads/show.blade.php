@extends('layouts.admin')

@section('title','Audit Lead')

@section('content')
<div class="container">
  <div class="pageHeader">
    <h1>Audit Lead</h1>
    <p class="muted">{{ $lead->audit_type }} • Submitted {{ $lead->created_at->diffForHumans() }}</p>
  </div>

  @if(session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
  @endif

  <div class="row g-3">
    <div class="col-lg-7">
      <div class="card p-3">
        <h5 class="mb-3">Lead Details</h5>

        <div class="row g-2">
          <div class="col-md-6"><strong>Name:</strong> {{ $lead->name }}</div>
          <div class="col-md-6"><strong>Email:</strong> {{ $lead->email }}</div>
          <div class="col-md-6"><strong>Phone:</strong> {{ $lead->phone ?? '-' }}</div>
          <div class="col-md-6"><strong>Status:</strong> {{ ucfirst(str_replace('_',' ',$lead->status)) }}</div>
          <div class="col-12"><strong>Reason:</strong><br>{{ $lead->reason ?? '-' }}</div>
        </div>

        <hr>

        <h6 class="mb-2">Tracking</h6>
        <div class="small text-muted">
          <div><strong>Source Page:</strong> {{ $lead->source_page ?? '-' }}</div>
          <div><strong>Page URL:</strong> {{ $lead->page_url ?? '-' }}</div>
          <div><strong>UTM:</strong> {{ $lead->utm_source ?? '-' }} / {{ $lead->utm_medium ?? '-' }} / {{ $lead->utm_campaign ?? '-' }}</div>
          <div><strong>IP:</strong> {{ $lead->ip_address ?? '-' }}</div>
        </div>
      </div>
    </div>

    <div class="col-lg-5">
      <div class="card p-3">
        <h5 class="mb-3">Update Status</h5>

        <form method="POST" action="{{ route('admin.audit-leads.update', $lead) }}">
          @csrf

          <div class="mb-2">
            <label class="form-label">Status</label>
            <select name="status" class="form-select" required>
              @foreach($statuses as $st)
                <option value="{{ $st }}" @selected($lead->status===$st)>{{ ucfirst(str_replace('_',' ',$st)) }}</option>
              @endforeach
            </select>
          </div>

          <div class="mb-2">
            <label class="form-label">Assigned To</label>
            <select name="assigned_to" class="form-select">
              <option value="">Unassigned</option>
              @foreach($users as $u)
                <option value="{{ $u->id }}" @selected($lead->assigned_to===$u->id)>{{ $u->name }} ({{ $u->email }})</option>
              @endforeach
            </select>
          </div>

          <div class="mb-2">
            <label class="form-label">Contacted At</label>
            <input type="datetime-local" name="contacted_at"
              class="form-control"
              value="{{ optional($lead->contacted_at)->format('Y-m-d\TH:i') }}">
          </div>

          <div class="mb-3">
            <label class="form-label">Admin Notes</label>
            <textarea name="admin_notes" rows="5" class="form-control" maxlength="5000"
              placeholder="Call notes, next steps, follow-up date...">{{ old('admin_notes', $lead->admin_notes) }}</textarea>
          </div>

          <button class="btn btn-primary w-100">Save</button>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection
