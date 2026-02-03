@php
    $val = fn($k, $d=null) => old($k, $smtp?->{$k} ?? $d);
@endphp

<div class="card" style="margin:0;">
    <div class="cardHeader">
        <div>
            <h3>SMTP Details</h3>
            <p>Host/port/encryption and credentials.</p>
        </div>
    </div>
    <div class="cardBody">
        <div class="grid cols-2" style="gap:12px;">
            <div class="field">
                <label>Name</label>
                <input name="name" value="{{ $val('name') }}" required>
                @error('name')<div class="hint">{{ $message }}</div>@enderror
            </div>
            <div class="field">
                <label>Status</label>
                <label style="display:flex;gap:10px;align-items:center;">
                    <input type="checkbox" name="is_active" value="1" {{ $val('is_active', 1) ? 'checked' : '' }}>
                    <span>Active</span>
                </label>
            </div>
        </div>

        <div style="height:10px;"></div>

        <div class="grid cols-4" style="gap:12px;">
            <div class="field">
                <label>Host</label>
                <input name="host" value="{{ $val('host') }}">
            </div>
            <div class="field">
                <label>Port</label>
                <input name="port" value="{{ $val('port') }}" type="number" step="1" min="1">
            </div>
            <div class="field">
                <label>Encryption</label>
                <select name="encryption">
                    <option value="">None</option>
                    <option value="tls" {{ $val('encryption')==='tls'?'selected':'' }}>TLS</option>
                    <option value="ssl" {{ $val('encryption')==='ssl'?'selected':'' }}>SSL</option>
                </select>
            </div>
            <div class="field">
                <label>Timeout (sec)</label>
                <input name="timeout" value="{{ $val('timeout') }}" type="number" step="1" min="0" max="120">
            </div>
        </div>

        <div style="height:10px;"></div>

        <div class="grid cols-2" style="gap:12px;">
            <div class="field">
                <label>Username</label>
                <input name="username" value="{{ $val('username') }}">
            </div>
            <div class="field">
                <label>Password {{ $smtp ? '(leave blank to keep)' : '' }}</label>
                <input name="password" type="password" value="">
            </div>
        </div>

        <div style="height:10px;"></div>

        <div class="grid cols-3" style="gap:12px;">
            <div class="field">
                <label>From Address</label>
                <input name="from_address" value="{{ $val('from_address') }}" type="email">
            </div>
            <div class="field">
                <label>From Name</label>
                <input name="from_name" value="{{ $val('from_name') }}" type="text">
            </div>
            <div class="field">
                <label>Reply-To Address</label>
                <input name="reply_to_address" value="{{ $val('reply_to_address') }}" type="email">
            </div>
        </div>

        <div style="height:10px;"></div>

        <label style="display:flex;gap:10px;align-items:center;">
            <input type="checkbox" name="is_default" value="1" {{ $val('is_default') ? 'checked' : '' }}>
            <span>Set as default SMTP</span>
        </label>
    </div>
</div>
