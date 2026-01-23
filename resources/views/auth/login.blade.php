{{-- resources/views/auth/login.blade.php --}}
<!doctype html>
<html lang="en" data-theme="dark">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sign in • CloudTech Admin</title>


    {{-- A) If your CSS/JS are in public/assets/... --}}
    <link rel="stylesheet" href="{{ asset('assets/admin/css/style.css') }}">

    {{-- B) If you use Vite, put your css/js in resources and use: --}}
    {{-- @vite(['resources/css/app.css','resources/js/app.js']) --}}
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

                <h1 style="margin-top:18px;">Sign in</h1>
                <p>Use your admin account to access CloudTech Console.</p>

                {{-- Session status (Breeze) --}}
                @if (session('status'))
                    <div class="hint" style="margin-top:12px;">
                        {{ session('status') }}
                    </div>
                @endif
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

            <h2>Sign in</h2>
            <p>Use your admin account to access CloudTech Console.</p>

            <form method="POST" action="{{ route('login') }}">
                @csrf

                <div class="field">
                    <label for="email">Email</label>
                    <input
                        id="email"
                        type="email"
                        name="email"
                        placeholder="admin@cloudtech.local"
                        value="{{ old('email') }}"
                        required
                        autofocus
                        autocomplete="username"
                    >
                    @error('email')
                        <div class="hint" style="margin-top:6px;">{{ $message }}</div>
                    @enderror
                </div>

                <div style="height:10px;"></div>

                <div class="field">
                    <label for="password">Password</label>
                    <input
                        id="password"
                        type="password"
                        name="password"
                        placeholder="••••••••"
                        required
                        autocomplete="current-password"
                    >
                    @error('password')
                        <div class="hint" style="margin-top:6px;">{{ $message }}</div>
                    @enderror
                </div>

                <div style="height:10px;"></div>

                <label style="display:flex; gap:10px; align-items:center; color:var(--muted); font-size:12px;">
                    <input id="remember_me" type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}>
                    Remember me
                </label>

                <div style="height:14px;"></div>

                <div class="btnRow">
                    <button class="btn primary" type="submit">Sign in</button>

                    {{-- Keep this button only if you actually implement OTP later --}}
                    {{-- <button class="btn" type="button" disabled title="OTP not implemented yet">Sign in with OTP</button> --}}
                </div>

                <div class="hint" style="margin-top:10px;">Connected to CloudTech.</div>

                <div class="authActions">
                    <div style="display:flex; gap:10px; flex-wrap:wrap;">
                        @if (Route::has('register'))
                            <a class="link" href="{{ route('register') }}">Create account</a>
                        @endif

                        @if (Route::has('password.request'))
                            <a class="link" href="{{ route('password.request') }}">Forgot password?</a>
                        @endif
                    </div>

                    {{-- Optional: if you prefer, route to dashboard only after login (recommended) --}}
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

{{-- If your JS is in public/assets/... --}}
<script src="{{ asset('assets/admin/js/app.js') }}"></script>
</body>
</html>
