<form method="POST" action="{{ route('password.update') }}">
    @csrf
    @method('PUT')

    <div class="field">
        <label for="current_password">Current Password</label>
        <input id="current_password" name="current_password" type="password" autocomplete="current-password">
        @if ($errors->updatePassword?->has('current_password'))
            <div class="hint">{{ $errors->updatePassword->first('current_password') }}</div>
        @endif
    </div>

    <div style="height:10px;"></div>

    <div class="field">
        <label for="password">New Password</label>
        <input id="password" name="password" type="password" autocomplete="new-password">
        @if ($errors->updatePassword?->has('password'))
            <div class="hint">{{ $errors->updatePassword->first('password') }}</div>
        @endif
    </div>

    <div style="height:10px;"></div>

    <div class="field">
        <label for="password_confirmation">Confirm Password</label>
        <input id="password_confirmation" name="password_confirmation" type="password" autocomplete="new-password">
        @if ($errors->updatePassword?->has('password_confirmation'))
            <div class="hint">{{ $errors->updatePassword->first('password_confirmation') }}</div>
        @endif
    </div>

    <div class="btnRow" style="margin-top:12px;">
        <button class="btn primary" type="submit">Update Password</button>

        @if (session('status') === 'password-updated')
            <span class="hint" style="color:rgba(0,255,160,.85);">Updated.</span>
        @endif
    </div>
</form>
