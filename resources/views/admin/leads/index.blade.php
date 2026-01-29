@extends('layouts.admin')

@section('title', 'Leads')
@section('page_title', 'Leads')
@section('page_subtitle', 'All contact submissions (filterable & searchable).')

@section('content')

    <div class="card" style="margin:0;">
        <div class="cardHeader">
            <div>
                <h3>Filters</h3>
                <p>Search and filter enquiries by status and form.</p>
            </div>
        </div>

        <div class="cardBody">
            <form method="GET" action="{{ route('admin.leads.index') }}">
                <div class="grid cols-4" style="gap:12px;">
                    <div class="field">
                        <label>Search</label>
                        <input
                            type="text"
                            name="search"
                            value="{{ request('search') }}"
                            placeholder="Name / Email / Phone">
                    </div>

                    <div class="field">
                        <label>Status</label>
                        <select name="status">
                            @php $status = request('status'); @endphp
                            <option value="">All</option>
                            <option value="new" {{ $status==='new' ? 'selected' : '' }}>New</option>
                            <option value="processed" {{ $status==='processed' ? 'selected' : '' }}>Processed</option>
                            <option value="spam" {{ $status==='spam' ? 'selected' : '' }}>Spam</option>
                        </select>
                    </div>

         <div class="field">
    <label>Form</label>
    <select name="form_id">
        @php $formId = request('form_id'); @endphp
        <option value="">All Forms</option>

        @foreach($forms as $f)
            <option value="{{ $f->id }}" {{ (string)$formId === (string)$f->id ? 'selected' : '' }}>
                {{ $f->title }} ({{ $f->key }})
            </option>
        @endforeach
    </select>
</div>


                    <div class="field">
                        <label>Sort</label>
                        @php $sort = request('sort', 'latest'); @endphp
                        <select name="sort">
                            <option value="latest" {{ $sort==='latest' ? 'selected' : '' }}>Latest</option>
                            <option value="oldest" {{ $sort==='oldest' ? 'selected' : '' }}>Oldest</option>
                        </select>
                    </div>
                </div>

                <div class="btnRow" style="margin-top:12px;">
                    <button class="btn primary" type="submit">Apply Filters</button>
                    <a class="btn" href="{{ route('admin.leads.index') }}">Reset</a>
                </div>
            </form>
        </div>
    </div>

    <div style="height:12px;"></div>

    <div class="card" style="margin:0;">
        <div class="cardHeader">
            <div>
                <h3>Submissions</h3>
                <p>Click “View” to see the full payload.</p>
            </div>
        </div>

        <div class="cardBody">
            <table class="table">
                <thead>
                    <tr>
                        <th>Date</th>
                        <th>Form</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Status</th>
                        <th style="width:120px;"></th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($submissions as $s)
                        <tr>
                            <td>{{ optional($s->created_at)->format('d M Y, h:i A') }}</td>
                            <td>{{ $s->form?->title ?? '-' }}</td>
                            <td>{{ $s->name ?? '-' }}</td>
                            <td>{{ $s->email ?? '-' }}</td>
                            <td>{{ $s->status ?? '-' }}</td>
                            <td>
                                <a class="btn" href="{{ route('admin.leads.show', $s->id) }}">View</a>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="6">No submissions found.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>

            <div style="margin-top:12px;">
                {{ $submissions->links() }}
            </div>
        </div>
    </div>

@endsection
