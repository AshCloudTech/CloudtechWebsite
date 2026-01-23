{{-- resources/views/auth/verify-email.blade.php --}}
<!doctype html>
<html lang="en" data-theme="dark">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Verify email • CloudTech Admin</title>

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

                <h1 style="margin-top:18px;">Verify email</h1>
                <p>Email verification is required to continue.</p>

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

            <h2>Verify email</h2>
            <p>Confirm your email address to unlock the console.</p>

            {{-- Success message when link is re-sent --}}
            @if (session('status') === 'verification-link-sent')
                <div class="hint" style="margin:10px 0;">
                    A new verification link has been sent to the email address you provided during registration.
                </div>
            @endif

            <div class="card" style="margin-top:4px;">
                <div class="cardHeader">
                    <div>
                        <h3>Email verification required</h3>
                        <p>
                            Thanks for signing up! Please verify your email address by clicking the link we emailed you.
                            If you didn’t receive it, you can request another.
                        </p>
                    </div>
                    <span class="badge warn">Pending</span>
                </div>

                <div class="cardBody">
                    <div class="btnRow">
                        {{-- Resend verification --}}
                        <form method="POST" action="{{ route('verification.send') }}" style="margin:0;">
                            @csrf
                            <button class="btn primary" type="submit">Resend verification</button>
                        </form>

                        {{-- Logout --}}
                        <form method="POST" action="{{ route('logout') }}" style="margin:0;">
                            @csrf
                            <button class="btn" type="submit">Log out</button>
                        </form>
                    </div>

                    <div class="hint" style="margin-top:10px;">
                        Tip: Ensure MustVerifyEmail is enabled and routes use the verified middleware where required.
                    </div>
                </div>
            </div>

            <div class="authActions">
                <div style="display:flex; gap:10px; flex-wrap:wrap;">
                    @if (Route::has('login'))
                        <a class="link" href="{{ route('login') }}">Use another account</a>
                    @endif
                </div>

                @auth
                    <a class="btn" href="{{ route('dashboard') }}">Open Dashboard</a>
                @else
                    <a class="btn" href="{{ url('/') }}">Back to site</a>
                @endauth
            </div>
        </section>
    </div>
</div>

<script src="{{ asset('assets/admin/js/app.js') }}"></script>


</body>
</html>
