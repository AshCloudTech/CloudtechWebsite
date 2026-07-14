@extends(console_layout())

@section('title', 'View SMTP')
@section('page_title', 'SMTP Details')
@section('page_subtitle', 'View configuration (password hidden).')

@section('content')

    <div class="btnRow" style="margin-bottom:12px;">
        <a class="btn" href="{{ console_route('settings.smtp.index') }}">Back</a>
        <a class="btn primary" href="{{ console_route('settings.smtp.edit', $smtp) }}">Edit</a>

        <form method="POST" action="{{ console_route('settings.smtp.destroy', $smtp) }}" style="margin:0;"
              onsubmit="return confirm('Delete this SMTP mailer? This cannot be undone.');">
            @csrf
            @method('DELETE')
            <button class="btn danger" type="submit" {{ $smtp->is_default ? 'disabled' : '' }}>
                Delete
            </button>
        </form>
    </div>

    @if($smtp->is_default)
        <div class="card" style="border:1px solid rgba(255,180,0,.35); margin:0 0 12px 0;">
            <div class="cardBody">
                <span class="badge warn">Default</span>
                <span style="margin-left:10px;">This is the default mailer. Set another mailer as default before deleting.</span>
            </div>
        </div>
    @endif

    <div class="card" style="margin:0;">
        <div class="cardHeader">
            <div>
                <h3>{{ $smtp->name }}</h3>
                <p>Host, credentials, and sender settings.</p>
            </div>
        </div>

        <div class="cardBody">
            <div class="grid cols-2" style="gap:12px;">
                <div>
                    <div class="hint">Status</div>
                    <div style="font-weight:700;">{{ $smtp->is_active ? 'Active' : 'Disabled' }}</div>
                </div>
                <div>
                    <div class="hint">Default</div>
                    <div style="font-weight:700;">{{ $smtp->is_default ? 'Yes' : 'No' }}</div>
                </div>
            </div>

            <hr style="margin:14px 0;opacity:.2;">

            <div class="grid cols-4" style="gap:12px;">
                <div>
                    <div class="hint">Host</div>
                    <div style="font-weight:700;">{{ $smtp->host ?? '-' }}</div>
                </div>
                <div>
                    <div class="hint">Port</div>
                    <div style="font-weight:700;">{{ $smtp->port ?? '-' }}</div>
                </div>
                <div>
                    <div class="hint">Encryption</div>
                    <div style="font-weight:700;">{{ $smtp->encryption ?? 'None' }}</div>
                </div>
                <div>
                    <div class="hint">Timeout</div>
                    <div style="font-weight:700;">{{ $smtp->timeout ? $smtp->timeout.'s' : '-' }}</div>
                </div>
            </div>

            <hr style="margin:14px 0;opacity:.2;">

            <div class="grid cols-2" style="gap:12px;">
                <div>
                    <div class="hint">Username</div>
                    <div style="font-weight:700;">{{ $smtp->username ?? '-' }}</div>
                </div>
                <div>
                    <div class="hint">Password</div>
                    <div style="font-weight:700;">••••••••</div>
                    <div class="hint" style="margin-top:6px;">Password is stored encrypted and not displayed.</div>
                </div>
            </div>

            <hr style="margin:14px 0;opacity:.2;">

            <div class="grid cols-3" style="gap:12px;">
                <div>
                    <div class="hint">From Address</div>
                    <div style="font-weight:700;">{{ $smtp->from_address ?? '-' }}</div>
                </div>
                <div>
                    <div class="hint">From Name</div>
                    <div style="font-weight:700;">{{ $smtp->from_name ?? '-' }}</div>
                </div>
                <div>
                    <div class="hint">Reply-To</div>
                    <div style="font-weight:700;">{{ $smtp->reply_to_address ?? '-' }}</div>
                </div>
            </div>
        </div>
    </div>

@endsection
