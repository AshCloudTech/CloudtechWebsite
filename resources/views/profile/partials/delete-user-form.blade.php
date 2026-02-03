<form method="POST"
      action="{{ route('profile.destroy') }}"
      onsubmit="return confirm('Are you sure? This will permanently delete your account.');">
    @csrf
    @method('DELETE')

    <div class="field">
        <label for="delete_password">Confirm Password</label>
        <input id="delete_password" name="password" type="password" placeholder="Enter your password to confirm">
        @if ($errors->userDeletion?->has('password'))
            <div class="hint">{{ $errors->userDeletion->first('password') }}</div>
        @endif
        <div class="hint" style="margin-top:6px;">
            Once your account is deleted, all its data will be permanently removed.
        </div>
    </div>

    <div class="btnRow" style="margin-top:12px;">
        <button class="btn danger" type="submit">Delete Account</button>
    </div>
</form>
