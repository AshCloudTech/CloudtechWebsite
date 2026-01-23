@extends('layouts.admin')

@section('title', 'Audit Logs')
@section('page_title', 'Audit Logs')
@section('page_subtitle', 'Review security events and administrative actions.')

@section('content')
    <div class="card">
        <div class="cardHeader">
            <div>
                <h3>Activity Logs</h3>
                <p>Captured using your audit logger (e.g., Spatie Activitylog).</p>
            </div>
        </div>

        <div class="tableWrap">
            <table>
                <thead>
                <tr>
                    <th>When</th>
                    <th>User</th>
                    <th>Event</th>
                    <th>Subject</th>
                    <th>Properties</th>
                </tr>
                </thead>
                <tbody>
                @forelse($activities as $a)
                    <tr>
                        <td class="mono">{{ $a->created_at?->format('Y-m-d H:i:s') }}</td>
                        <td class="mono">{{ $a->causer?->email ?? '—' }}</td>
                        <td>{{ $a->event ?? $a->description }}</td>
                        <td class="mono">{{ class_basename($a->subject_type) }} #{{ $a->subject_id }}</td>
                        <td>
                            <pre class="mono" style="white-space:pre-wrap; margin:0; font-size:12px;">{{ json_encode($a->properties, JSON_PRETTY_PRINT|JSON_UNESCAPED_SLASHES) }}</pre>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="5">No activity found.</td>
                    </tr>
                @endforelse
                </tbody>
            </table>
        </div>
    </div>

    <div style="margin-top:14px;">
        {{ $activities->links() }}
    </div>
@endsection
