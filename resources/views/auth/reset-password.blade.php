{{-- resources/views/auth/reset-password.blade.php --}}
<!doctype html>
<html lang="en" data-theme="dark">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Reset password • CloudTech Admin</title>

    {{-- If you placed admin assets under public/admin/assets/... --}}
    <link rel="stylesheet" href="{{ asset('assets/admin/css/style.css') }}">


</head>

<body>
<div class="authShell">
    <div class="authCard">
        <section class="authHero">
            <div>
                <div style="display:flex; align-items:center; gap:12px;">
                    <div class="logoMark"></div>
                    <div>
                        <div style="font-weight:800; letter-spacing:.2px;">CloudTech Admin</div>
                        <div style="color:var(--muted); font-size:12px;">Secure access • RBAC • Audit • Impersonation</div>
                    </div>
                </div>

                <h1 style="margin-top:18px;">Reset password</h1>
                <p>Set a new password using your reset token.</p>

            </div>

            <div style="display:flex; justify-content:space-between; align-items:center;">
                <span class="badge">CloudTech</span>
                <span class="badge">v1</span>
            </div>
        </section>

        <section class="authForm">
            <div class="head">
                <div class="brandMini">
                    <div class="logoMark"></div>
                    <div>
                        <div style="font-weight:800; letter-spacing:.2px;">CloudTech</div>
                        <div style="color:var(--muted); font-size:12px;">Admin Console</div>
                    </div>
                </div>
                <button class="iconBtn" data-toggle-theme aria-label="Toggle theme">◐</button>
            </div>

            <h2>Reset password</h2>
            <p>Set a new password using your reset token.</p>

            <form method="POST" action="{{ route('password.store') }}">
                @csrf

                {{-- Password Reset Token (required by Laravel) --}}
                <input type="hidden" name="token" value="{{ $request->route('token') }}">

                <div class="field">
                    <label for="email">Email</label>
                    <input
                        id="email"
                        type="email"
                        name="email"
                        placeholder="you@domain.com"
                        value="{{ old('email', $request->email) }}"
                        required
                        autofocus
                        autocomplete="username"
                    >
                    @error('email')
                        <div class="hint" style="margin-top:6px;">{{ $message }}</div>
                    @enderror
                </div>

                <div style="height:10px;"></div>

                <div class="formGrid">
                    <div class="field">
                        <label for="password">New Password</label>
                        <input
                            id="password"
                            type="password"
                            name="password"
                            placeholder="••••••••"
                            required
                            autocomplete="new-password"
                        >
                        @error('password')
                            <div class="hint" style="margin-top:6px;">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="field">
                        <label for="password_confirmation">Confirm Password</label>
                        <input
                            id="password_confirmation"
                            type="password"
                            name="password_confirmation"
                            placeholder="••••••••"
                            required
                            autocomplete="new-password"
                        >
                        @error('password_confirmation')
                            <div class="hint" style="margin-top:6px;">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <div style="height:14px;"></div>

                <div class="btnRow">
                    <button class="btn primary" type="submit">Reset password</button>

                    @if (Route::has('login'))
                        <a class="btn" href="{{ route('login') }}">Back</a>
                    @else
                        <a class="btn" href="{{ url('/') }}">Back</a>
                    @endif
                </div>

                <div class="authActions">
                    <div style="display:flex; gap:10px; flex-wrap:wrap;">
                        @if (Route::has('login'))
                            <a class="link" href="{{ route('login') }}">Return to login</a>
                        @endif
                    </div>

                    @auth
                        <a class="btn" href="{{ route('dashboard') }}">Open Dashboard</a>
                    @else
                        <a class="btn" href="{{ url('/') }}">Back to site</a>
                    @endauth
                </div>
            </form>
        </section>
    </div>
</div>

<script src="{{ asset('assets/admin/js/app.js') }}"></script>

</body>
</html>
