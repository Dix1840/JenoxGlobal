<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | JenoxGlobal Admin</title>
    <link href="{{ asset('assets/admin-fonts/inter.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/admin-fonts/fontawesome.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/admin-css/bootstrap.min.css') }}" rel="stylesheet">
    <style>
        *, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }

        body {
            font-family: 'Inter', sans-serif;
            min-height: 100vh;
            display: flex;
            overflow: hidden;
        }

        /* ─── LEFT PANEL ─────────────────────────────── */
        .left-panel {
            flex: 1;
            position: relative;
            display: flex;
            flex-direction: column;
            overflow: hidden;
        }

        /* Background image */
        .left-panel .bg-img {
            position: absolute;
            inset: 0;
            background: url('{{ asset('assets/images/auth-bg2.jpg') }}') center / cover no-repeat;
            z-index: 0;
        }
        /* Dark gradient overlay */
        .left-panel .bg-overlay {
            position: absolute;
            inset: 0;
            background: linear-gradient(
                160deg,
                rgba(2,6,23,.97)   0%,
                rgba(7,25,70,.93)  40%,
                rgba(10,40,110,.85) 70%,
                rgba(30,70,160,.75) 100%
            );
            z-index: 1;
        }
        /* Blue glow blob top-right */
        .left-panel .blob-1 {
            position: absolute;
            width: 400px; height: 400px;
            background: radial-gradient(circle, rgba(37,99,235,.35) 0%, transparent 70%);
            border-radius: 50%;
            top: -120px; right: -120px;
            z-index: 2;
        }
        /* Cyan glow blob bottom-left */
        .left-panel .blob-2 {
            position: absolute;
            width: 300px; height: 300px;
            background: radial-gradient(circle, rgba(6,182,212,.2) 0%, transparent 70%);
            border-radius: 50%;
            bottom: -80px; left: -80px;
            z-index: 2;
        }

        /* Panel content */
        .left-content {
            position: relative;
            z-index: 3;
            display: flex;
            flex-direction: column;
            height: 100%;
            padding: 44px 48px;
        }

        /* Top — brand */
        .lp-brand {
            display: flex;
            align-items: center;
            gap: 12px;
        }
        .lp-brand-icon {
            width: 46px; height: 46px;
            background: linear-gradient(135deg, #2563eb, #06b6d4);
            border-radius: 14px;
            display: flex; align-items: center; justify-content: center;
            font-size: 20px; color: #fff;
            box-shadow: 0 8px 20px rgba(37,99,235,.4);
            flex-shrink: 0;
        }
        .lp-brand-text .name {
            font-size: 20px; font-weight: 800; color: #fff;
            line-height: 1.1; letter-spacing: -.2px;
        }
        .lp-brand-text .sub {
            font-size: 11px; color: rgba(255,255,255,.45);
            margin-top: 1px; letter-spacing: .3px;
            text-transform: uppercase;
        }

        /* Middle — hero text + stats + features */
        .lp-mid {
            flex: 1;
            display: flex;
            flex-direction: column;
            justify-content: center;
            padding: 20px 0;
        }

        .lp-badge {
            display: inline-flex;
            align-items: center;
            gap: 7px;
            background: rgba(37,99,235,.18);
            border: 1px solid rgba(37,99,235,.4);
            color: #93c5fd;
            padding: 6px 14px;
            border-radius: 30px;
            font-size: 11px;
            font-weight: 700;
            letter-spacing: .6px;
            text-transform: uppercase;
            margin-bottom: 22px;
            width: fit-content;
        }
        .lp-badge i { font-size: 10px; }

        .lp-headline {
            font-size: 36px;
            font-weight: 900;
            color: #fff;
            line-height: 1.15;
            letter-spacing: -.8px;
            margin-bottom: 14px;
        }
        .lp-headline .accent { color: #38bdf8; }

        .lp-desc {
            font-size: 13.5px;
            color: rgba(255,255,255,.52);
            line-height: 1.75;
            max-width: 380px;
            margin-bottom: 32px;
        }

        /* Stats row */
        .lp-stats {
            display: flex;
            gap: 0;
            margin-bottom: 36px;
            background: rgba(255,255,255,.05);
            border: 1px solid rgba(255,255,255,.09);
            border-radius: 16px;
            overflow: hidden;
        }
        .stat-box {
            flex: 1;
            padding: 16px 14px;
            text-align: center;
            position: relative;
        }
        .stat-box:not(:last-child)::after {
            content: '';
            position: absolute;
            right: 0; top: 20%; height: 60%;
            width: 1px;
            background: rgba(255,255,255,.1);
        }
        .stat-num {
            font-size: 24px;
            font-weight: 900;
            color: #fff;
            line-height: 1;
            letter-spacing: -.5px;
        }
        .stat-num sup {
            font-size: 13px;
            color: #38bdf8;
            font-weight: 700;
        }
        .stat-lbl {
            font-size: 11px;
            color: rgba(255,255,255,.4);
            margin-top: 4px;
            letter-spacing: .2px;
        }

        /* Feature cards */
        .lp-features { display: flex; flex-direction: column; gap: 12px; }
        .feat-card {
            display: flex;
            align-items: center;
            gap: 14px;
            background: rgba(255,255,255,.055);
            border: 1px solid rgba(255,255,255,.09);
            border-radius: 14px;
            padding: 14px 16px;
            transition: background .2s, border-color .2s;
        }
        .feat-card:hover {
            background: rgba(255,255,255,.09);
            border-color: rgba(37,99,235,.4);
        }
        .feat-icon {
            width: 38px; height: 38px;
            border-radius: 11px;
            background: linear-gradient(135deg, rgba(37,99,235,.35), rgba(6,182,212,.25));
            border: 1px solid rgba(37,99,235,.3);
            display: flex; align-items: center; justify-content: center;
            font-size: 15px; color: #60a5fa;
            flex-shrink: 0;
        }
        .feat-body h6 {
            font-size: 13px; font-weight: 700;
            color: #fff; margin: 0 0 2px;
        }
        .feat-body p {
            font-size: 11.5px;
            color: rgba(255,255,255,.45);
            margin: 0;
        }

        /* Bottom — footer */
        .lp-footer {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding-top: 20px;
            border-top: 1px solid rgba(255,255,255,.08);
        }
        .lp-footer-copy {
            font-size: 11.5px;
            color: rgba(255,255,255,.3);
        }
        .lp-footer-links {
            display: flex;
            gap: 16px;
        }
        .lp-footer-links a {
            font-size: 11.5px;
            color: rgba(255,255,255,.3);
            text-decoration: none;
            transition: color .2s;
        }
        .lp-footer-links a:hover { color: rgba(255,255,255,.7); }

        /* ─── RIGHT PANEL ────────────────────────────── */
        .right-panel {
            width: 460px;
            flex-shrink: 0;
            background: #f8fafc;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 32px 24px;
            overflow-y: auto;
        }

        .auth-card {
            width: 100%;
            max-width: 380px;
        }

        .card-header-area { margin-bottom: 30px; }
        .card-tag {
            display: inline-flex; align-items: center; gap: 6px;
            background: #eff6ff; color: #2563eb;
            border: 1px solid #bfdbfe;
            padding: 5px 12px; border-radius: 20px;
            font-size: 11.5px; font-weight: 700;
            letter-spacing: .3px;
            margin-bottom: 14px;
        }
        .card-title {
            font-size: 26px; font-weight: 900;
            color: #0f172a; letter-spacing: -.5px;
            margin-bottom: 6px;
        }
        .card-sub {
            font-size: 13.5px;
            color: #64748b;
        }

        /* Form */
        .f-group { margin-bottom: 18px; }
        .f-label {
            font-size: 12.5px; font-weight: 700;
            color: #374151; margin-bottom: 7px;
            display: block; letter-spacing: .1px;
        }
        .f-wrap { position: relative; display: flex; align-items: center; }
        .f-ico {
            position: absolute; left: 13px;
            font-size: 14px; color: #94a3b8;
            pointer-events: none; z-index: 1;
        }
        .f-control {
            width: 100%;
            padding: 12px 14px 12px 40px;
            border: 1.5px solid #e2e8f0;
            border-radius: 11px;
            font-size: 13.5px; font-family: 'Inter', sans-serif;
            color: #0f172a; background: #fff;
            transition: border-color .2s, box-shadow .2s;
            outline: none;
        }
        .f-control::placeholder { color: #cbd5e1; }
        .f-control:focus {
            border-color: #2563eb;
            box-shadow: 0 0 0 3px rgba(37,99,235,.1);
        }
        .f-control.is-invalid { border-color: #ef4444; }
        .invalid-feedback { font-size: 12px; color: #ef4444; margin-top: 5px; display: block; }

        .toggle-pass {
            position: absolute; right: 12px;
            background: none; border: none; padding: 0;
            color: #94a3b8; cursor: pointer; font-size: 14px;
            transition: color .2s;
        }
        .toggle-pass:hover { color: #2563eb; }

        .form-check-input:checked { background-color: #2563eb; border-color: #2563eb; }
        .form-check-label { font-size: 13px; color: #64748b; cursor: pointer; }
        .forgot-link {
            font-size: 13px; color: #2563eb; font-weight: 600;
            text-decoration: none;
        }
        .forgot-link:hover { text-decoration: underline; }

        .btn-signin {
            width: 100%; padding: 13px;
            background: linear-gradient(135deg, #1d4ed8 0%, #2563eb 50%, #0ea5e9 100%);
            color: #fff; border: none; border-radius: 11px;
            font-size: 14px; font-weight: 700; font-family: 'Inter', sans-serif;
            cursor: pointer; transition: all .25s;
            display: flex; align-items: center; justify-content: center; gap: 8px;
            box-shadow: 0 4px 16px rgba(37,99,235,.35);
            letter-spacing: .1px;
        }
        .btn-signin:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 24px rgba(37,99,235,.45);
        }
        .btn-signin:active { transform: translateY(0); }

        .divider {
            display: flex; align-items: center; gap: 12px;
            margin: 22px 0; color: #cbd5e1; font-size: 12px;
        }
        .divider::before, .divider::after {
            content: ''; flex: 1; height: 1px; background: #e2e8f0;
        }

        .footer-txt {
            text-align: center; margin-top: 22px;
            font-size: 13px; color: #94a3b8;
        }
        .footer-txt a {
            color: #2563eb; font-weight: 700; text-decoration: none;
        }
        .footer-txt a:hover { text-decoration: underline; }

        .alert-err {
            background: #fef2f2; border: 1px solid #fecaca;
            border-radius: 10px; padding: 11px 14px;
            font-size: 13px; color: #dc2626; margin-bottom: 18px;
            display: flex; align-items: center; gap: 8px;
        }
        .alert-ok {
            background: #f0fdf4; border: 1px solid #bbf7d0;
            border-radius: 10px; padding: 11px 14px;
            font-size: 13px; color: #16a34a; margin-bottom: 18px;
            display: flex; align-items: center; gap: 8px;
        }

        /* Responsive */
        @media (max-width: 900px) {
            .left-panel { display: none; }
            .right-panel { width: 100%; }
        }
        @media (max-width: 480px) {
            .right-panel { padding: 20px 16px; }
        }
    </style>
</head>
<body>

<!-- ═══════════ LEFT PANEL ═══════════ -->
<div class="left-panel">
    <div class="bg-img"></div>
    <div class="bg-overlay"></div>
    <div class="blob-1"></div>
    <div class="blob-2"></div>

    <div class="left-content">

        {{-- Brand --}}
        <div class="lp-brand">
            <div class="lp-brand-icon"><i class="fas fa-globe-americas"></i></div>
            <div class="lp-brand-text">
                <div class="name">JenoxGlobal</div>
                <div class="sub">Admin Control Panel</div>
            </div>
        </div>

        {{-- Middle Hero --}}
        <div class="lp-mid">

            <div class="lp-badge">
                <i class="fas fa-ship"></i> Import &amp; Export Platform
            </div>

            <h1 class="lp-headline">
                Your Global Trade<br>
                Starts <span class="accent">Here.</span>
            </h1>

            <p class="lp-desc">
                Manage products, customers and inquiries — all from one powerful dashboard built for international trade professionals.
            </p>

            {{-- Feature Cards --}}
            <div class="lp-features">
                <div class="feat-card">
                    <div class="feat-icon"><i class="fas fa-boxes"></i></div>
                    <div class="feat-body">
                        <h6>Product &amp; Catalog Management</h6>
                        <p>Add, edit and organise your full export product range</p>
                    </div>
                </div>
                <div class="feat-card">
                    <div class="feat-icon"><i class="fas fa-file-invoice"></i></div>
                    <div class="feat-body">
                        <h6>Inquiry &amp; Quotation Tracking</h6>
                        <p>Receive and respond to buyer inquiries in real time</p>
                    </div>
                </div>
                <div class="feat-card">
                    <div class="feat-icon"><i class="fas fa-chart-bar"></i></div>
                    <div class="feat-body">
                        <h6>Analytics &amp; Performance Insights</h6>
                        <p>Monitor traffic, leads and business metrics live</p>
                    </div>
                </div>
            </div>

        </div>

        {{-- Footer --}}
        <div class="lp-footer">
            <span class="lp-footer-copy">&copy; {{ date('Y') }} JenoxGlobal. All rights reserved.</span>
            <div class="lp-footer-links">
                <a href="#">Privacy</a>
                <a href="#">Terms</a>
                <a href="#">Support</a>
            </div>
        </div>

    </div>
</div>

<!-- ═══════════ RIGHT PANEL ═══════════ -->
<div class="right-panel">
    <div class="auth-card">

        <div class="card-header-area">
            <div class="card-tag"><i class="fas fa-lock"></i> Secure Access</div>
            <h2 class="card-title">Welcome back</h2>
            <p class="card-sub">Sign in to your admin dashboard</p>
        </div>

        @if(session('success'))
            <div class="alert-ok"><i class="fas fa-check-circle"></i> {{ session('success') }}</div>
        @endif
        @if($errors->any())
            <div class="alert-err"><i class="fas fa-exclamation-circle"></i> {{ $errors->first() }}</div>
        @endif

        <form action="{{ route('admin.login') }}" method="POST">
            @csrf

            <div class="f-group">
                <label class="f-label">Email Address</label>
                <div class="f-wrap">
                    <i class="fas fa-envelope f-ico"></i>
                    <input type="email" name="email"
                           class="f-control @error('email') is-invalid @enderror"
                           placeholder="admin@jenoxglobal.com"
                           value="{{ old('email') }}" required autocomplete="email">
                </div>
                @error('email')<span class="invalid-feedback">{{ $message }}</span>@enderror
            </div>

            <div class="f-group">
                <label class="f-label">Password</label>
                <div class="f-wrap">
                    <i class="fas fa-lock f-ico"></i>
                    <input type="password" name="password" id="passwordField"
                           class="f-control @error('password') is-invalid @enderror"
                           placeholder="Enter your password" required autocomplete="current-password">
                    <button type="button" class="toggle-pass" onclick="togglePass()">
                        <i class="fas fa-eye" id="eyeIcon"></i>
                    </button>
                </div>
                @error('password')<span class="invalid-feedback">{{ $message }}</span>@enderror
            </div>

            <div class="d-flex align-items-center justify-content-between mb-4">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="remember" id="remember">
                    <label class="form-check-label" for="remember">Keep me signed in</label>
                </div>
                {{-- <a href="{{ route('admin.password.forgot') }}" class="forgot-link">Forgot password?</a> --}}
            </div>

            <button type="submit" class="btn-signin">
                <i class="fas fa-sign-in-alt"></i> Sign In to Dashboard
            </button>
        </form>

        <div class="divider">or</div>

        {{-- <div class="footer-txt">
            Don't have an account? <a href="{{ route('admin.register') }}">Create account</a>
        </div> --}}

    </div>
</div>

<script src="{{ asset('assets/admin-js/bootstrap.bundle.min.js') }}"></script>
<script>
    function togglePass() {
        const f = document.getElementById('passwordField');
        const i = document.getElementById('eyeIcon');
        f.type = f.type === 'password' ? 'text' : 'password';
        i.classList.toggle('fa-eye');
        i.classList.toggle('fa-eye-slash');
    }
</script>
</body>
</html>
