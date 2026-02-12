@extends('layouts.admin')

@section('title', 'Audit Lead #' . $lead->id)
@section('page_title', 'Audit Lead #' . $lead->id)

@section('content')
<div class="card">
  <div class="cardHeader" style="display:flex;justify-content:space-between;align-items:center;gap:12px;">
    <div>
      <h3 style="margin:0;">Audit Lead #{{ $lead->id }}</h3>
      <p style="margin:6px 0 0;">
        <span class="badge">{{ $lead->audit_type }}</span>
        <span style="margin-left:8px;opacity:.8;">Submitted {{ optional($lead->created_at)->format('d M Y, h:i A') }}</span>
      </p>
    </div>

    <div style="display:flex;gap:10px;align-items:center;">
      @if($lead->email)
        <a class="btn btn-ghost" href="mailto:{{ $lead->email }}">Email</a>
      @endif
      @if($lead->phone)
        <a class="btn btn-ghost" href="tel:{{ $lead->phone }}">Call</a>
      @endif
      <a href="{{ route('admin.audit-leads.index') }}" class="btn btn-ghost">Back</a>
    </div>
  </div>

  <div class="cardBody">
    @if(session('success'))
      <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <div class="row" style="display:grid; grid-template-columns: 2fr 1fr; gap:16px;">
      {{-- Left: Details --}}
      <div class="card" style="margin:0;">
        <div class="cardBody">
          <h4 style="margin-top:0;">Lead Details</h4>

          <div class="grid" style="display:grid; grid-template-columns:1fr 1fr; gap:12px;">
            <div>
              <strong>Name:</strong><br>
              {{ $lead->name }}
            </div>

            <div>
              <strong>Status:</strong><br>
              <span class="badge">{{ ucfirst(str_replace('_',' ', $lead->status ?? 'new')) }}</span>
            </div>

            <div>
              <strong>Email:</strong><br>
              <a href="mailto:{{ $lead->email }}">{{ $lead->email }}</a>
            </div>

            <div>
              <strong>Phone:</strong><br>
              @if($lead->phone)
                <a href="tel:{{ $lead->phone }}">{{ $lead->phone }}</a>
              @else
                -
              @endif
            </div>
          </div>

          <hr>

          <div style="margin-top:10px;">
            <strong>Reason for Audit:</strong>
            <div style="margin-top:6px; white-space:pre-wrap;">{{ $lead->reason ?: '-' }}</div>
          </div>

          <hr>

          <h4 style="margin:0 0 10px;">Tracking</h4>
          <div class="grid" style="display:grid; grid-template-columns:1fr 1fr; gap:12px;">
            <div>
              <strong>Source Page:</strong><br>
              {{ $lead->source_page ?: '-' }}
            </div>
            <div>
              <strong>Page URL:</strong><br>
              @if($lead->page_url)
                <a href="{{ $lead->page_url }}" target="_blank" rel="noopener">{{ $lead->page_url }}</a>
              @else
                -
              @endif
            </div>

            <div>
              <strong>UTM:</strong><br>
              {{ $lead->utm_source ?: '-' }} / {{ $lead->utm_medium ?: '-' }} / {{ $lead->utm_campaign ?: '-' }}
            </div>

            <div>
              <strong>IP / UA:</strong><br>
              {{ $lead->ip_address ?: '-' }}
              @if($lead->user_agent)
                <div style="font-size:12px;opacity:.75;white-space:nowrap;overflow:hidden;text-overflow:ellipsis;max-width:520px;">
                  {{ $lead->user_agent }}
                </div>
              @endif
            </div>
          </div>
        </div>
      </div>

      {{-- Right: Admin actions --}}
      <div>
        <div class="card" style="margin:0;">
          <div class="cardBody">
            <h4 style="margin-top:0;">Update Lead</h4>

            <div class="field">
              <form method="POST" action="{{ route('admin.audit-leads.update', $lead) }}">
                @csrf

                <label style="font-weight:800;display:block;margin-bottom:6px;">Status</label>
                <select name="status" class="form-control" style="width:100%;" required>
                  @foreach($statuses as $st)
                    <option value="{{ $st }}" @selected(($lead->status ?? 'new') === $st)>{{ ucfirst(str_replace('_',' ', $st)) }}</option>
                  @endforeach
                </select>

                <div style="margin-top:10px;">
                  <label style="font-weight:800;display:block;margin-bottom:6px;">Assigned To</label>
                  <select name="assigned_to" class="form-control" style="width:100%;">
                    <option value="">Unassigned</option>
                    @foreach($users as $u)
                      <option value="{{ $u->id }}" @selected($lead->assigned_to == $u->id)>
                        {{ $u->name }} ({{ $u->email }})
                      </option>
                    @endforeach
                  </select>
                </div>

                <div style="margin-top:10px;">
                  <label style="font-weight:800;display:block;margin-bottom:6px;">Contacted At</label>
                  <input
                    type="datetime-local"
                    name="contacted_at"
                    class="form-control"
                    style="width:100%;"
                    value="{{ optional($lead->contacted_at)->format('Y-m-d\TH:i') }}"
                  >
                </div>

                <div style="margin-top:10px;">
                  <label style="font-weight:800;display:block;margin-bottom:6px;">Admin Notes</label>
                  <textarea
                    name="admin_notes"
                    class="form-control"
                    style="width:100%;"
                    rows="5"
                    maxlength="5000"
                    placeholder="Call notes, next steps, follow-up info..."
                  >{{ old('admin_notes', $lead->admin_notes) }}</textarea>
                </div>

                <button class="btn btn-primary" type="submit" style="margin-top:12px;width:100%;">Save</button>
              </form>
            </div>
          </div>
        </div>

        <div class="card" style="margin-top:14px;">
          <div class="cardBody">
            <h4 style="margin-top:0;">Quick Info</h4>
            <div style="font-size:13px;opacity:.85;line-height:1.6;">
              <div><strong>ID:</strong> {{ $lead->id }}</div>
              <div><strong>Created:</strong> {{ optional($lead->created_at)->format('d M Y, h:i A') }}</div>
              <div><strong>Updated:</strong> {{ optional($lead->updated_at)->format('d M Y, h:i A') }}</div>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>
</div>
@endsection
