{{-- resources/views/auth/confirm-password.blade.php --}}
<!doctype html>
<html lang="en" data-theme="dark">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Confirm password • CloudTech Admin</title>

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

                <h1 style="margin-top:18px;">Confirm password</h1>
                <p>Re-enter your password to continue.</p>

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

            <h2>Confirm password</h2>
            <p>This is a secure area. Please confirm your password before continuing.</p>

            <form method="POST" action="{{ route('password.confirm') }}">
                @csrf

                <div class="field">
                    <label for="password">Confirm Password</label>
                    <input
                        id="password"
                        type="password"
                        name="password"
                        placeholder="••••••••"
                        required
                        autocomplete="current-password"
                    >

                    @error('password')
                        <div class="hint" style="margin-top:8px;">{{ $message }}</div>
                    @else
                        <div class="hint">
                            Required for sensitive actions (e.g., change email, delete user, access settings).
                        </div>
                    @enderror
                </div>

                <div style="height:14px;"></div>

                <div class="btnRow">
                    <button class="btn primary" type="submit">Confirm</button>

                    {{-- “Cancel” — safe fallback --}}
                    <a class="btn" href="{{ url()->previous() }}">Cancel</a>
                </div>

                <div class="authActions">
                    <div style="display:flex; gap:10px; flex-wrap:wrap;">
                        @if (Route::has('password.request'))
                            <a class="link" href="{{ route('password.request') }}">Forgot password?</a>
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
