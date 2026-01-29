@extends('layouts.admin')

@section('title', 'Lead Details')
@section('page_title', 'Lead Details')
@section('page_subtitle', 'View enquiry payload and metadata.')

@section('content')
    <div class="card" style="margin:0;">
        <div class="cardBody">
            <div style="display:flex;justify-content:space-between;gap:12px;align-items:center;">
                <div>
                    <div style="font-weight:700;font-size:16px;">
                        {{ $submission->form?->title ?? 'Contact Form' }}
                        <span style="opacity:.7;font-weight:500;">({{ $submission->form?->key ?? '-' }})</span>
                    </div>
                    <div style="opacity:.7;margin-top:4px;">
                        Page: <span style="font-family:var(--mono);">{{ $submission->source_page ?? '-' }}</span>
                    </div>
                </div>

                <a class="btn" href="{{ route('admin.leads.index') }}">Back</a>
            </div>
            <div style="margin-top:12px;">
    <div class="card" style="margin:0;">
        <div class="cardHeader">
            <div>
                <h3>Update Status</h3>
                <p>Change lead status for tracking and filtering.</p>
            </div>
        </div>

        <div class="cardBody">
            <form method="POST" action="{{ route('admin.leads.status', $submission->id) }}">
                @csrf
                @method('PATCH')

                <div class="grid cols-3" style="gap:12px;align-items:end;">
                    <div class="field">
                        <label>Status</label>
                        <select name="status" required>
                            <option value="new" {{ ($submission->status ?? 'new') === 'new' ? 'selected' : '' }}>New</option>
                            <option value="processed" {{ ($submission->status ?? '') === 'processed' ? 'selected' : '' }}>Processed</option>
                            <option value="spam" {{ ($submission->status ?? '') === 'spam' ? 'selected' : '' }}>Spam</option>
                        </select>
                        @error('status') <div class="hint">{{ $message }}</div> @enderror
                    </div>

                    <div class="btnRow" style="margin:0;">
                        <button class="btn primary" type="submit">Update</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>


            <hr style="margin:14px 0;opacity:.2;">

            <div class="grid cols-2" style="gap:12px;">
                <div>
                    <div style="opacity:.7;">Name</div>
                    <div style="font-weight:600;">{{ $submission->name ?? '-' }}</div>
                </div>

                <div>
                    <div style="opacity:.7;">Email</div>
                    <div style="font-weight:600;">{{ $submission->email ?? '-' }}</div>
                </div>

                <div>
                    <div style="opacity:.7;">Phone</div>
                    <div style="font-weight:600;">{{ $submission->phone ?? '-' }}</div>
                </div>

                <div>
                    <div style="opacity:.7;">Status</div>
                    <div style="font-weight:600;">{{ $submission->status ?? '-' }}</div>
                </div>

                <div>
                    <div style="opacity:.7;">Subject</div>
                    <div style="font-weight:600;">{{ $submission->subject ?? '-' }}</div>
                </div>

                <div>
                    <div style="opacity:.7;">Submitted At</div>
                    <div style="font-weight:600;">{{ optional($submission->created_at)->format('d M Y, h:i A') }}</div>
                </div>
            </div>

            <hr style="margin:14px 0;opacity:.2;">

            <div>
                <div style="opacity:.7;">Message</div>
                <div style="margin-top:6px;white-space:pre-wrap;line-height:1.5;">
                    {{ $submission->message ?? '-' }}
                </div>
            </div>

            @if(!empty($submission->payload) && is_array($submission->payload))
                <hr style="margin:14px 0;opacity:.2;">
                <div>
                    <div style="font-weight:700;">Extra Fields</div>
                    <div style="margin-top:8px;">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th style="width:220px;">Field</th>
                                    <th>Value</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($submission->payload as $k => $v)
                                    <tr>
                                        <td style="font-family:var(--mono);">{{ $k }}</td>
                                        <td>
                                            @if(is_array($v))
                                                <pre style="margin:0;white-space:pre-wrap;">{{ json_encode($v, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES) }}</pre>
                                            @else
                                                {{ $v }}
                                            @endif
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            @endif

            <hr style="margin:14px 0;opacity:.2;">

            <div style="display:grid;gap:6px;">
                <div><span style="opacity:.7;">IP:</span> <span style="font-family:var(--mono);">{{ $submission->ip_address ?? '-' }}</span></div>
                <div><span style="opacity:.7;">Referrer:</span> <span style="font-family:var(--mono);">{{ $submission->referrer ?? '-' }}</span></div>
                <div><span style="opacity:.7;">User Agent:</span> <span style="font-family:var(--mono);">{{ $submission->user_agent ?? '-' }}</span></div>
            </div>
        </div>
    </div>
@endsection
