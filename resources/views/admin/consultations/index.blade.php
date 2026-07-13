@extends(console_layout())
@section('title', 'Consultation Requests')
@section('page_title', 'Consultation Requests')
@section('content')
<div class="card">
  <div class="cardHeader" style="display:flex;justify-content:space-between;align-items:center;">
    <div>
      <h3>Consultation Requests</h3>
      <p>View and manage consultation submissions.</p>
    </div>



     

     <div class="field">

    <form method="GET" action="{{ console_route('consultations.index') }}" style="display:flex;gap:10px;align-items:center;">
      <select name="status" class="form-control" style="min-width:200px;">
        <option value="">All Status</option>
        @foreach(['new','in_review','scheduled','completed','closed','spam'] as $st)
          <option value="{{ $st }}" @selected(request('status')===$st)>{{ ucfirst(str_replace('_',' ', $st)) }}</option>
        @endforeach
      </select>
      <button class="btn btn-primary" type="submit">Filter</button>
      <a class="btn btn-ghost" href="{{ console_route('consultations.index') }}">Reset</a>
    </form>

  </div>
  </div>

  <div class="cardBody">
    @if(session('success')) <div class="alert alert-success">{{ session('success') }}</div> @endif

    <div style="overflow:auto;">
      <table class="table">
        <thead>
          <tr>
            <th>#</th>
            <th>Name</th>
            <th>Company</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Status</th>
            <th>Preferred</th>
            <th>Submitted</th>
            <th></th>
          </tr>
        </thead>
        <tbody>
        @forelse($items as $item)
          <tr>
            <td>{{ $item->id }}</td>
            <td>{{ $item->full_name }}</td>
            <td>{{ $item->company_name }}</td>
            <td>{{ $item->email }}</td>
            <td>{{ $item->phone }}</td>
            <td><span class="badge">{{ ucfirst(str_replace('_',' ', $item->status)) }}</span></td>
            <td>{{ ucfirst(str_replace('_',' ', $item->preferred_method)) }} <br> {{ optional($item->preferred_datetime)->format('d M Y, h:i A') }}</td>
            <td>{{ $item->created_at->format('d M Y') }}</td>
            <td style="text-align:right;">
              <a href="{{ console_route('consultations.show', $item) }}" class="btn btn-sm btn-primary">View</a>
            </td>
          </tr>
        @empty
          <tr><td colspan="9">No consultation requests found.</td></tr>
        @endforelse
        </tbody>
      </table>
    </div>

    <div style="margin-top:12px;">{{ $items->links() }}</div>
  </div>
</div>
@endsection
