@extends(console_layout())
@section('title', 'Consultation #' . $consultation->id)
@section('page_title', 'Consultation #' . $consultation->id)
@section('content')
<div class="card">
  <div class="cardHeader" style="display:flex;justify-content:space-between;align-items:center;">
    <div>
      <h3>Consultation #{{ $consultation->id }}</h3>
      <p>{{ $consultation->full_name }} • {{ $consultation->company_name }}</p>
    </div>
    <a href="{{ console_route('consultations.index') }}" class="btn btn-ghost">Back</a>
  </div>

  <div class="cardBody">
    @if(session('success')) <div class="alert alert-success">{{ session('success') }}</div> @endif

    <div class="row" style="display:grid; grid-template-columns: 2fr 1fr; gap:16px;">
      <!-- Left: details -->
      <div class="card" style="margin:0;">
        <div class="cardBody">
          <h4 style="margin-top:0;">Request Details</h4>

          <div class="grid" style="display:grid; grid-template-columns:1fr 1fr; gap:12px;">
            <div><strong>Email:</strong> {{ $consultation->email }}</div>
            <div><strong>Phone:</strong> {{ $consultation->phone }}</div>
            <div><strong>Website:</strong> {{ $consultation->website_url ?: '-' }}</div>
            <div><strong>Budget:</strong> {{ $consultation->approximate_budget }}</div>
            <div><strong>Hear About Us:</strong> {{ $consultation->hear_about_us ?: '-' }}</div>
            <div><strong>Preferred Method:</strong> {{ ucfirst(str_replace('_',' ', $consultation->preferred_method)) }}</div>
            <div><strong>Date/Time:</strong> {{ optional($consultation->preferred_datetime)->format('d M Y, h:i A') }}</div>
            <div><strong>Status:</strong> {{ ucfirst(str_replace('_',' ', $consultation->status)) }}</div>
          </div>

          <hr>

          <div>
            <strong>Services Interested In:</strong><br>
            @php($s = $consultation->services_interested_in ?? [])
            {{ $s ? implode(', ', array_map(fn($x)=>ucfirst($x), $s)) : '-' }}
            @if($consultation->services_other) <div><em>Other:</em> {{ $consultation->services_other }}</div> @endif
          </div>

          <div style="margin-top:10px;">
            <strong>Website Development:</strong><br>
            @php($w = $consultation->website_development ?? [])
            {{ $w ? implode(', ', array_map(fn($x)=>ucfirst(str_replace('_',' ', $x)), $w)) : '-' }}
            @if($consultation->website_development_other) <div><em>Other:</em> {{ $consultation->website_development_other }}</div> @endif
          </div>

          <div style="margin-top:10px;">
            <strong>Brief Description:</strong>
            <div style="white-space:pre-wrap;">{{ $consultation->brief_description ?: '-' }}</div>
          </div>

          <div style="margin-top:10px;">
            <strong>Additional Notes:</strong>
            <div style="white-space:pre-wrap;">{{ $consultation->additional_notes ?: '-' }}</div>
          </div>
        </div>
      </div>

      <!-- Right: admin actions -->
      <div>
        <div class="card" style="margin:0;">
          <div class="cardBody">
            <h4 style="margin-top:0;">Update Status</h4>
     <div class="field">

            <form method="POST" action="{{ console_route('consultations.status', $consultation) }}">
              @csrf
              @method('PUT')

              <select name="status" class="form-control" style="margin-top:10px;width:100%;" required>
                @foreach(['new','in_review','scheduled','completed','closed','spam'] as $st)
                  <option value="{{ $st }}" @selected($consultation->status===$st)>{{ ucfirst(str_replace('_',' ', $st)) }}</option>
                @endforeach
              </select>

              <button class="btn btn-primary" type="submit" style="margin-top:10px;width:100%;">Save</button>
            </form>
            </div>
          </div>
        </div>

        <div class="card" style="margin-top:14px;">
          <div class="cardBody">
            <h4 style="margin-top:0;">Add Remark</h4>
     <div class="field">

            <form method="POST" action="{{ console_route('consultations.remarks.store', $consultation) }}">
              @csrf
              <textarea name="remark" class="form-control" style="margin-top:10px;width:100%;" rows="4" placeholder="Add internal remark..." required></textarea>
              <button class="btn btn-ghost" type="submit" style="margin-top:10px;width:100%;">Add Remark</button>
            </form>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="card" style="margin-top:16px;">
      <div class="cardBody">
        <h4 style="margin-top:0;">Remarks</h4>

        @forelse($consultation->remarks as $r)
          <div style="padding:10px 0; border-bottom:1px solid rgba(0,0,0,.08);">
            <div style="font-weight:800;">{{ $r->created_at->format('d M Y, h:i A') }}</div>
            <div style="white-space:pre-wrap;">{{ $r->remark }}</div>
          </div>
        @empty
          <p>No remarks yet.</p>
        @endforelse
      </div>
    </div>

  </div>
</div>
@endsection
