@php
    /** @var \App\Models\User $user */
@endphp

{{-- Email verify send --}}
@if (Route::has('verification.send'))
    <form id="send-verification" method="POST" action="{{ route('verification.send') }}">
        @csrf
    </form>
@endif

<form method="POST" action="{{ route('profile.update') }}">
    @csrf
    @method('PATCH')

    <div class="field">
        <label for="name">Name</label>
        <input id="name" name="name" type="text" value="{{ old('name', $user->name) }}" required autofocus>
        @error('name') <div class="hint">{{ $message }}</div> @enderror
    </div>

    <div style="height:10px;"></div>

    <div class="field">
        <label for="email">Email</label>
        <input id="email" name="email" type="email" value="{{ old('email', $user->email) }}" required>
        @error('email') <div class="hint">{{ $message }}</div> @enderror

        @if ($user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && ! $user->hasVerifiedEmail())
            <div class="hint" style="margin-top:8px;">
                Your email address is unverified.
                @if (Route::has('verification.send'))
                    <button form="send-verification" class="btn ghost" type="submit" style="margin-left:6px;">
                        Re-send verification email
                    </button>
                @endif
            </div>

            @if (session('status') === 'verification-link-sent')
                <div class="hint" style="margin-top:6px;color:rgba(0,255,160,.85);">
                    A new verification link has been sent to your email address.
                </div>
            @endif
        @endif
    </div>

    <div class="btnRow" style="margin-top:12px;">
        <button class="btn primary" type="submit">Save</button>

        @if (session('status') === 'profile-updated')
            <span class="hint" style="color:rgba(0,255,160,.85);">Saved.</span>
        @endif
    </div>
</form>
