{{-- resources/views/auth/forgot-password.blade.php --}}
<!doctype html>
<html lang="en" data-theme="dark">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Forgot password • CloudTech Admin</title>

    {{-- If you placed admin assets under public/admin/assets/... (recommended) --}}
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

                <h1 style="margin-top:18px;">Forgot password</h1>
                <p>Request a password reset link to your email.</p>

         
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

            <h2>Forgot password</h2>
            <p>Request a password reset link to your email.</p>

            {{-- Session Status (Breeze) --}}
            @if (session('status'))
                <div class="hint" style="margin:10px 0;">
                    {{ session('status') }}
                </div>
            @endif

            <form method="POST" action="{{ route('password.email') }}">
                @csrf

                <div class="field">
                    <label for="email">Email</label>
                    <input
                        id="email"
                        type="email"
                        name="email"
                        placeholder="you@domain.com"
                        value="{{ old('email') }}"
                        required
                        autofocus
                        autocomplete="username"
                    >
                    @error('email')
                        <div class="hint" style="margin-top:6px;">{{ $message }}</div>
                    @enderror
                </div>

                <div style="height:14px;"></div>

                <div class="btnRow">
                    <button class="btn primary" type="submit">Send reset link</button>

                    @if (Route::has('login'))
                        <a class="btn" href="{{ route('login') }}">Back</a>
                    @else
                        <a class="btn" href="{{ url('/') }}">Back</a>
                    @endif
                </div>

                <div class="hint" style="margin-top:10px;">
                    We’ll email you a secure password reset link if the address exists in our system.
                </div>

                <div class="authActions">
                    <div style="display:flex; gap:10px; flex-wrap:wrap;">
                        @if (Route::has('login'))
                            <a class="link" href="{{ route('login') }}">Return to login</a>
                        @endif
                    </div>

                    {{-- Prefer to show dashboard only when authenticated --}}
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
