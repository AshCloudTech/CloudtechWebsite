@extends(console_layout())

@section('title', 'SMTP Mailers')
@section('page_title', 'SMTP Mailers')
@section('page_subtitle', 'Manage multiple SMTP configurations and set default sender.')

@section('content')
    <div class="btnRow" style="margin-bottom:12px;">
        <a class="btn primary" href="{{ console_route('settings.smtp.create') }}">Add SMTP</a>
    </div>

    <div class="card" style="margin:0;">
        <div class="cardBody">
            <table class="table">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Host</th>
                        <th>Port</th>
                        <th>Encryption</th>
                        <th>Status</th>
                        <th>Default</th>
                        <th style="width:120px;"></th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($mailers as $m)
                        <tr>
                            <td style="font-weight:700;">{{ $m->name }}</td>
                            <td>{{ $m->host ?? '-' }}</td>
                            <td>{{ $m->port ?? '-' }}</td>
                            <td>{{ $m->encryption ?? 'None' }}</td>
                            <td>{{ $m->is_active ? 'Active' : 'Disabled' }}</td>
                            <td>{{ $m->is_default ? 'Yes' : 'No' }}</td>
                            <td style="display:flex;gap:8px;justify-content:flex-end;">
                                <a class="btn" href="{{ console_route('settings.smtp.show', $m) }}">View</a>
                                <a class="btn" href="{{ console_route('settings.smtp.edit', $m) }}">Edit</a>

                                <form method="POST" action="{{ console_route('settings.smtp.destroy', $m) }}"
                                    style="margin:0;"
                                    onsubmit="return confirm('Delete this SMTP mailer? This cannot be undone.');">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn danger" type="submit" {{ $m->is_default ? 'disabled' : '' }}>
                                        Delete
                                    </button>
                                </form>
                            </td>

                        </tr>
                    @empty
                        <tr>
                            <td colspan="7">No SMTP mailers created yet.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
@endsection
