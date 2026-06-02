<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forgot Password | JenoxGlobal Admin</title>
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

        /* LEFT PANEL */
        .left-panel {
            flex: 1; position: relative;
            display: flex; flex-direction: column; overflow: hidden;
        }
        .left-panel .bg-img {
            position: absolute; inset: 0;
            background: url('{{ asset('assets/images/auth-bg2.jpg') }}') center / cover no-repeat;
            z-index: 0;
        }
        .left-panel .bg-overlay {
            position: absolute; inset: 0;
            background: linear-gradient(160deg, rgba(2,6,23,.97) 0%, rgba(7,25,70,.93) 40%, rgba(10,40,110,.85) 70%, rgba(30,70,160,.75) 100%);
            z-index: 1;
        }
        .left-panel .blob-1 {
            position: absolute; width: 400px; height: 400px;
            background: radial-gradient(circle, rgba(37,99,235,.35) 0%, transparent 70%);
            border-radius: 50%; top: -120px; right: -120px; z-index: 2;
        }
        .left-panel .blob-2 {
            position: absolute; width: 300px; height: 300px;
            background: radial-gradient(circle, rgba(6,182,212,.2) 0%, transparent 70%);
            border-radius: 50%; bottom: -80px; left: -80px; z-index: 2;
        }
        .left-content {
            position: relative; z-index: 3;
            display: flex; flex-direction: column; height: 100%; padding: 44px 48px;
        }

        .lp-brand { display: flex; align-items: center; gap: 12px; }
        .lp-brand-icon {
            width: 46px; height: 46px;
            background: linear-gradient(135deg, #2563eb, #06b6d4);
            border-radius: 14px; display: flex; align-items: center; justify-content: center;
            font-size: 20px; color: #fff; box-shadow: 0 8px 20px rgba(37,99,235,.4); flex-shrink: 0;
        }
        .lp-brand-text .name { font-size: 20px; font-weight: 800; color: #fff; letter-spacing: -.2px; }
        .lp-brand-text .sub  { font-size: 11px; color: rgba(255,255,255,.45); margin-top: 1px; letter-spacing: .3px; text-transform: uppercase; }

        .lp-mid { flex: 1; display: flex; flex-direction: column; justify-content: center; padding: 20px 0; }

        .lp-badge {
            display: inline-flex; align-items: center; gap: 7px;
            background: rgba(37,99,235,.18); border: 1px solid rgba(37,99,235,.4); color: #93c5fd;
            padding: 6px 14px; border-radius: 30px; font-size: 11px; font-weight: 700;
            letter-spacing: .6px; text-transform: uppercase; margin-bottom: 22px; width: fit-content;
        }

        .lp-headline { font-size: 36px; font-weight: 900; color: #fff; line-height: 1.15; letter-spacing: -.8px; margin-bottom: 14px; }
        .lp-headline .accent { color: #38bdf8; }

        .lp-desc { font-size: 13.5px; color: rgba(255,255,255,.52); line-height: 1.75; max-width: 380px; margin-bottom: 36px; }

        /* How it works steps */
        .how-steps { display: flex; flex-direction: column; gap: 0; }
        .how-row { display: flex; gap: 0; }
        .how-node { display: flex; flex-direction: column; align-items: center; }
        .how-circle {
            width: 38px; height: 38px; border-radius: 50%; flex-shrink: 0;
            display: flex; align-items: center; justify-content: center;
            font-size: 14px; font-weight: 800; color: #fff;
            background: linear-gradient(135deg, #2563eb, #06b6d4);
            box-shadow: 0 4px 12px rgba(37,99,235,.4);
        }
        .how-vline { width: 2px; flex: 1; min-height: 20px; background: rgba(255,255,255,.1); margin: 3px auto; }
        .how-info { padding: 5px 0 24px 16px; }
        .how-info h6 { font-size: 13px; font-weight: 700; color: #fff; margin: 0 0 2px; }
        .how-info p  { font-size: 12px; color: rgba(255,255,255,.42); margin: 0; }
        .how-row:last-child .how-vline { display: none; }
        .how-row:last-child .how-info  { padding-bottom: 0; }

        .lp-footer {
            display: flex; align-items: center; justify-content: space-between;
            padding-top: 20px; border-top: 1px solid rgba(255,255,255,.08);
        }
        .lp-footer-copy { font-size: 11.5px; color: rgba(255,255,255,.3); }
        .lp-footer-links { display: flex; gap: 16px; }
        .lp-footer-links a { font-size: 11.5px; color: rgba(255,255,255,.3); text-decoration: none; transition: color .2s; }
        .lp-footer-links a:hover { color: rgba(255,255,255,.7); }

        /* RIGHT PANEL */
        .right-panel {
            width: 460px; flex-shrink: 0; background: #f8fafc;
            display: flex; align-items: center; justify-content: center;
            padding: 32px 24px; overflow-y: auto;
        }

        .auth-card { width: 100%; max-width: 380px; }

        .card-header-area { margin-bottom: 30px; }
        .card-tag {
            display: inline-flex; align-items: center; gap: 6px;
            background: #eff6ff; color: #2563eb; border: 1px solid #bfdbfe;
            padding: 5px 12px; border-radius: 20px; font-size: 11.5px; font-weight: 700;
            letter-spacing: .3px; margin-bottom: 14px;
        }
        .card-title { font-size: 26px; font-weight: 900; color: #0f172a; letter-spacing: -.5px; margin-bottom: 6px; }
        .card-sub { font-size: 13.5px; color: #64748b; line-height: 1.6; }

        .f-group { margin-bottom: 20px; }
        .f-label { font-size: 12.5px; font-weight: 700; color: #374151; margin-bottom: 7px; display: block; }
        .f-wrap  { position: relative; display: flex; align-items: center; }
        .f-ico   { position: absolute; left: 13px; font-size: 14px; color: #94a3b8; pointer-events: none; z-index: 1; }
        .f-control {
            width: 100%; padding: 12px 14px 12px 40px;
            border: 1.5px solid #e2e8f0; border-radius: 11px;
            font-size: 13.5px; font-family: 'Inter', sans-serif;
            color: #0f172a; background: #fff;
            transition: border-color .2s, box-shadow .2s; outline: none;
        }
        .f-control::placeholder { color: #cbd5e1; }
        .f-control:focus { border-color: #2563eb; box-shadow: 0 0 0 3px rgba(37,99,235,.1); }
        .f-control.is-invalid { border-color: #ef4444; }
        .invalid-feedback { font-size: 12px; color: #ef4444; margin-top: 5px; display: block; }

        .btn-send {
            width: 100%; padding: 13px;
            background: linear-gradient(135deg, #1d4ed8 0%, #2563eb 50%, #0ea5e9 100%);
            color: #fff; border: none; border-radius: 11px;
            font-size: 14px; font-weight: 700; font-family: 'Inter', sans-serif;
            cursor: pointer; transition: all .25s;
            display: flex; align-items: center; justify-content: center; gap: 8px;
            box-shadow: 0 4px 16px rgba(37,99,235,.35);
        }
        .btn-send:hover { transform: translateY(-2px); box-shadow: 0 8px 24px rgba(37,99,235,.45); }
        .btn-send:active { transform: translateY(0); }
        .btn-send:disabled { opacity: .7; cursor: not-allowed; transform: none; }

        .back-link {
            display: flex; align-items: center; gap: 8px; justify-content: center;
            margin-top: 22px; font-size: 13px; color: #64748b; text-decoration: none;
            transition: color .2s;
        }
        .back-link:hover { color: #2563eb; }

        .alert-err {
            background: #fef2f2; border: 1px solid #fecaca; border-radius: 10px;
            padding: 11px 14px; font-size: 13px; color: #dc2626; margin-bottom: 18px;
            display: flex; align-items: center; gap: 8px;
        }
        .alert-ok {
            background: #f0fdf4; border: 1px solid #bbf7d0; border-radius: 12px;
            padding: 18px; font-size: 13.5px; color: #15803d; margin-bottom: 0;
            text-align: center;
        }
        .alert-ok .ok-icon {
            width: 52px; height: 52px; border-radius: 50%;
            background: #dcfce7; border: 2px solid #86efac;
            display: flex; align-items: center; justify-content: center;
            font-size: 22px; margin: 0 auto 14px;
        }
        .alert-ok h5 { font-size: 16px; font-weight: 800; color: #14532d; margin: 0 0 6px; }
        .alert-ok p  { font-size: 13px; color: #166534; margin: 0; line-height: 1.6; }

        @media (max-width: 900px) { .left-panel { display: none; } .right-panel { width: 100%; } }
        @media (max-width: 480px) { .right-panel { padding: 20px 16px; } }
    </style>
</head>
<body>

<!-- LEFT PANEL -->
<div class="left-panel">
    <div class="bg-img"></div>
    <div class="bg-overlay"></div>
    <div class="blob-1"></div>
    <div class="blob-2"></div>
    <div class="left-content">

        <div class="lp-brand">
            <div class="lp-brand-icon"><i class="fas fa-globe-americas"></i></div>
            <div class="lp-brand-text">
                <div class="name">JenoxGlobal</div>
                <div class="sub">Admin Control Panel</div>
            </div>
        </div>

        <div class="lp-mid">
            <div class="lp-badge"><i class="fas fa-shield-alt"></i> Account Recovery</div>

            <h1 class="lp-headline">Regain Access<br>To Your<br><span class="accent">Dashboard.</span></h1>

            <p class="lp-desc">
                Don't worry — it happens to everyone. Just enter your registered email and we'll send a secure reset link instantly.
            </p>

            <div class="how-steps">
                <div class="how-row">
                    <div class="how-node">
                        <div class="how-circle">1</div>
                        <div class="how-vline"></div>
                    </div>
                    <div class="how-info">
                        <h6>Enter Your Email</h6>
                        <p>Provide the email linked to your admin account</p>
                    </div>
                </div>
                <div class="how-row">
                    <div class="how-node">
                        <div class="how-circle">2</div>
                        <div class="how-vline"></div>
                    </div>
                    <div class="how-info">
                        <h6>Check Your Inbox</h6>
                        <p>A secure reset link will be sent to your email</p>
                    </div>
                </div>
                <div class="how-row">
                    <div class="how-node">
                        <div class="how-circle">3</div>
                    </div>
                    <div class="how-info">
                        <h6>Set New Password</h6>
                        <p>Click the link and choose a strong new password</p>
                    </div>
                </div>
            </div>
        </div>

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

<!-- RIGHT PANEL -->
<div class="right-panel">
    <div class="auth-card">

        @if(session('success'))
            {{-- Success state --}}
            <div class="alert-ok">
                <div class="ok-icon">✉️</div>
                <h5>Check Your Inbox!</h5>
                <p>{{ session('success') }}<br><br>The link will expire in <strong>60 minutes</strong>. Check your spam folder if you don't see it.</p>
            </div>
            <a href="{{ route('admin.login') }}" class="back-link" style="margin-top:28px;">
                <i class="fas fa-arrow-left"></i> Back to Sign In
            </a>
        @else
            <div class="card-header-area">
                <div class="card-tag"><i class="fas fa-key"></i> Password Recovery</div>
                <h2 class="card-title">Forgot password?</h2>
                <p class="card-sub">Enter your email address and we'll send you a link to reset your password.</p>
            </div>

            @if($errors->any())
                <div class="alert-err"><i class="fas fa-exclamation-circle"></i> {{ $errors->first() }}</div>
            @endif

            <form action="{{ route('admin.password.forgot.send') }}" method="POST" id="forgotForm">
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

                <button type="submit" class="btn-send" id="sendBtn">
                    <i class="fas fa-paper-plane"></i> Send Reset Link
                </button>
            </form>

            <a href="{{ route('admin.login') }}" class="back-link">
                <i class="fas fa-arrow-left"></i> Back to Sign In
            </a>
        @endif

    </div>
</div>

<script src="{{ asset('assets/admin-js/bootstrap.bundle.min.js') }}"></script>
<script>
    document.getElementById('forgotForm')?.addEventListener('submit', function () {
        const btn = document.getElementById('sendBtn');
        btn.disabled = true;
        btn.innerHTML = '<i class="fas fa-circle-notch fa-spin"></i> Sending...';
    });
</script>
</body>
</html>
