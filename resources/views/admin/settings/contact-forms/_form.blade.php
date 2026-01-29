@php
    $val = fn($k, $d=null) => old($k, $contactForm?->{$k} ?? $d);
@endphp

<div class="grid cols-2" style="gap:14px;">
    <div class="card" style="margin:0;">
        <div class="cardHeader">
            <div>
                <h3>Form Basics</h3>
                <p>Key is used in the frontend hidden field.</p>
            </div>
        </div>
        <div class="cardBody">
            <div class="field">
                <label>Key</label>
                <input name="key" value="{{ $val('key') }}" required>
                @error('key')<div class="hint">{{ $message }}</div>@enderror
            </div>

            <div style="height:10px;"></div>

            <div class="field">
                <label>Title</label>
                <input name="title" value="{{ $val('title') }}" required>
            </div>

            <div style="height:10px;"></div>

            <div class="field">
                <label>Source Page (optional)</label>
                <input name="source_page" value="{{ $val('source_page') }}">
            </div>

            <div style="height:10px;"></div>

            <label style="display:flex;gap:10px;align-items:center;">
                <input type="checkbox" name="is_active" value="1" {{ $val('is_active', 1) ? 'checked' : '' }}>
                <span>Active</span>
            </label>
        </div>
    </div>

    <div class="card" style="margin:0;">
        <div class="cardHeader">
            <div>
                <h3>Recipients + SMTP</h3>
                <p>Where enquiries are sent.</p>
            </div>
        </div>
        <div class="cardBody">
            <div class="field">
                <label>To (comma separated)</label>
                <input name="recipient_to" value="{{ $val('recipient_to') }}">
            </div>

            <div style="height:10px;"></div>

            <div class="grid cols-2" style="gap:12px;">
                <div class="field">
                    <label>CC</label>
                    <input name="recipient_cc" value="{{ $val('recipient_cc') }}">
                </div>
                <div class="field">
                    <label>BCC</label>
                    <input name="recipient_bcc" value="{{ $val('recipient_bcc') }}">
                </div>
            </div>

            <div style="height:10px;"></div>

            <div class="field">
                <label>SMTP Mailer</label>
                <select name="smtp_mailer_id">
                    <option value="">Default SMTP</option>
                    @foreach($mailers as $m)
                        <option value="{{ $m->id }}" {{ (string)$val('smtp_mailer_id')===(string)$m->id ? 'selected':'' }}>
                            {{ $m->name }} {{ $m->is_default ? '(default)' : '' }}
                        </option>
                    @endforeach
                </select>
            </div>
        </div>
    </div>
</div>

<div style="height:14px;"></div>

<div class="card" style="margin:0;">
    <div class="cardHeader">
        <div>
            <h3>User Auto Reply</h3>
            <p>Optional confirmation email sent to the user.</p>
        </div>
    </div>
    <div class="cardBody">
        <label style="display:flex;gap:10px;align-items:center;">
            <input type="checkbox" name="user_autoreply_enabled" value="1" {{ $val('user_autoreply_enabled') ? 'checked' : '' }}>
            <span>Enable auto-reply</span>
        </label>

        <div style="height:10px;"></div>

        <div class="field">
            <label>Auto-reply Subject</label>
            <input name="user_autoreply_subject" value="{{ $val('user_autoreply_subject') }}">
        </div>

        <div style="height:10px;"></div>

        <div class="field">
            <label>Auto-reply Body</label>
            <textarea name="user_autoreply_body" rows="5">{{ $val('user_autoreply_body') }}</textarea>
        </div>
    </div>
</div>
