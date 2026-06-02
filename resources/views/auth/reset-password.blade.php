<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reset Password | JenoxGlobal Admin</title>
    <link href="{{ asset('assets/admin-fonts/inter.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/admin-fonts/fontawesome.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/admin-css/bootstrap.min.css') }}" rel="stylesheet">
    <style>
        *, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }

        body {
            font-family: 'Inter', sans-serif;
            min-height: 100vh; display: flex; overflow: hidden;
        }

        /* LEFT PANEL */
        .left-panel {
            flex: 1; position: relative;
            display: flex; flex-direction: column; overflow: hidden;
        }
        .left-panel .bg-img {
            position: absolute; inset: 0;
            background: url('{{ asset('assets/images/auth-bg2.jpg') }}') center / cover no-repeat; z-index: 0;
        }
        .left-panel .bg-overlay {
            position: absolute; inset: 0;
            background: linear-gradient(160deg, rgba(5,2,30,.97) 0%, rgba(30,10,80,.93) 40%, rgba(60,20,120,.87) 70%, rgba(90,40,160,.78) 100%);
            z-index: 1;
        }
        .left-panel .blob-1 {
            position: absolute; width: 420px; height: 420px;
            background: radial-gradient(circle, rgba(124,58,237,.32) 0%, transparent 70%);
            border-radius: 50%; top: -130px; right: -130px; z-index: 2;
        }
        .left-panel .blob-2 {
            position: absolute; width: 280px; height: 280px;
            background: radial-gradient(circle, rgba(168,85,247,.2) 0%, transparent 70%);
            border-radius: 50%; bottom: -80px; left: -60px; z-index: 2;
        }
        .left-content {
            position: relative; z-index: 3;
            display: flex; flex-direction: column; height: 100%; padding: 44px 48px;
        }

        .lp-brand { display: flex; align-items: center; gap: 12px; }
        .lp-brand-icon {
            width: 46px; height: 46px;
            background: linear-gradient(135deg, #7c3aed, #a855f7);
            border-radius: 14px; display: flex; align-items: center; justify-content: center;
            font-size: 20px; color: #fff; box-shadow: 0 8px 20px rgba(124,58,237,.4); flex-shrink: 0;
        }
        .lp-brand-text .name { font-size: 20px; font-weight: 800; color: #fff; letter-spacing: -.2px; }
        .lp-brand-text .sub  { font-size: 11px; color: rgba(255,255,255,.4); margin-top: 1px; letter-spacing: .3px; text-transform: uppercase; }

        .lp-mid { flex: 1; display: flex; flex-direction: column; justify-content: center; padding: 20px 0; }

        .lp-badge {
            display: inline-flex; align-items: center; gap: 7px;
            background: rgba(124,58,237,.2); border: 1px solid rgba(124,58,237,.45); color: #c4b5fd;
            padding: 6px 14px; border-radius: 30px; font-size: 11px; font-weight: 700;
            letter-spacing: .6px; text-transform: uppercase; margin-bottom: 22px; width: fit-content;
        }

        .lp-headline { font-size: 36px; font-weight: 900; color: #fff; line-height: 1.15; letter-spacing: -.8px; margin-bottom: 14px; }
        .lp-headline .accent { color: #c084fc; }
        .lp-desc { font-size: 13.5px; color: rgba(255,255,255,.52); line-height: 1.75; max-width: 380px; margin-bottom: 36px; }

        /* Tips */
        .pwd-tips { display: flex; flex-direction: column; gap: 12px; }
        .tip-item {
            display: flex; align-items: flex-start; gap: 14px;
            background: rgba(255,255,255,.055); border: 1px solid rgba(255,255,255,.09);
            border-radius: 12px; padding: 14px 16px;
        }
        .tip-icon {
            width: 34px; height: 34px; border-radius: 9px; flex-shrink: 0;
            background: linear-gradient(135deg, rgba(124,58,237,.35), rgba(168,85,247,.25));
            border: 1px solid rgba(124,58,237,.3);
            display: flex; align-items: center; justify-content: center;
            font-size: 14px; color: #c084fc;
        }
        .tip-body h6 { font-size: 12.5px; font-weight: 700; color: #fff; margin: 0 0 2px; }
        .tip-body p  { font-size: 11.5px; color: rgba(255,255,255,.45); margin: 0; }

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
            width: 480px; flex-shrink: 0; background: #f8fafc;
            display: flex; align-items: center; justify-content: center;
            padding: 32px 24px; overflow-y: auto;
        }

        .auth-card { width: 100%; max-width: 400px; }

        .card-header-area { margin-bottom: 28px; }
        .card-tag {
            display: inline-flex; align-items: center; gap: 6px;
            background: #f5f3ff; color: #7c3aed; border: 1px solid #ddd6fe;
            padding: 5px 12px; border-radius: 20px; font-size: 11.5px; font-weight: 700;
            letter-spacing: .3px; margin-bottom: 14px;
        }
        .card-title { font-size: 26px; font-weight: 900; color: #0f172a; letter-spacing: -.5px; margin-bottom: 6px; }
        .card-sub { font-size: 13.5px; color: #64748b; line-height: 1.6; }

        .email-badge {
            display: inline-flex; align-items: center; gap: 7px;
            background: #eff6ff; border: 1px solid #bfdbfe;
            border-radius: 8px; padding: 9px 14px;
            font-size: 13px; color: #1e40af; font-weight: 600;
            margin-bottom: 24px; width: 100%;
        }

        .f-group { margin-bottom: 18px; }
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
        .f-control:focus { border-color: #7c3aed; box-shadow: 0 0 0 3px rgba(124,58,237,.1); }
        .f-control.is-invalid { border-color: #ef4444; }
        .invalid-feedback { font-size: 12px; color: #ef4444; margin-top: 5px; display: block; }

        .toggle-pass {
            position: absolute; right: 12px; background: none; border: none;
            padding: 0; color: #94a3b8; cursor: pointer; font-size: 14px; transition: color .2s;
        }
        .toggle-pass:hover { color: #7c3aed; }

        /* Strength */
        .s-bars { display: flex; gap: 4px; margin-top: 8px; }
        .s-bar { flex: 1; height: 3px; border-radius: 3px; background: #e2e8f0; transition: background .3s; }
        .s-bar.weak   { background: #ef4444; }
        .s-bar.fair   { background: #f97316; }
        .s-bar.good   { background: #eab308; }
        .s-bar.strong { background: #22c55e; }
        .s-label { font-size: 11px; color: #94a3b8; margin-top: 4px; }

        .pwd-rules { display: flex; gap: 14px; flex-wrap: wrap; margin-top: 8px; }
        .pwd-rule { display: flex; align-items: center; gap: 5px; font-size: 11.5px; color: #94a3b8; }
        .pwd-rule.ok { color: #16a34a; }
        .pwd-rule i  { font-size: 10px; }

        .btn-reset {
            width: 100%; padding: 13px;
            background: linear-gradient(135deg, #6d28d9 0%, #7c3aed 50%, #a855f7 100%);
            color: #fff; border: none; border-radius: 11px;
            font-size: 14px; font-weight: 700; font-family: 'Inter', sans-serif;
            cursor: pointer; transition: all .25s;
            display: flex; align-items: center; justify-content: center; gap: 8px;
            box-shadow: 0 4px 16px rgba(124,58,237,.38);
        }
        .btn-reset:hover { transform: translateY(-2px); box-shadow: 0 8px 24px rgba(124,58,237,.48); }
        .btn-reset:active { transform: translateY(0); }

        .back-link {
            display: flex; align-items: center; gap: 8px; justify-content: center;
            margin-top: 20px; font-size: 13px; color: #64748b; text-decoration: none; transition: color .2s;
        }
        .back-link:hover { color: #7c3aed; }

        .alert-err {
            background: #fef2f2; border: 1px solid #fecaca; border-radius: 10px;
            padding: 11px 14px; font-size: 13px; color: #dc2626; margin-bottom: 18px;
            display: flex; align-items: center; gap: 8px;
        }

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
            <div class="lp-badge"><i class="fas fa-lock"></i> Secure Password Reset</div>

            <h1 class="lp-headline">Almost There.<br>Create a<br><span class="accent">Strong Password.</span></h1>

            <p class="lp-desc">
                Choose a new secure password to protect your admin account and keep your trade data safe.
            </p>

            <div class="pwd-tips">
                <div class="tip-item">
                    <div class="tip-icon"><i class="fas fa-text-height"></i></div>
                    <div class="tip-body">
                        <h6>Use 8+ Characters</h6>
                        <p>Longer passwords are significantly harder to crack</p>
                    </div>
                </div>
                <div class="tip-item">
                    <div class="tip-icon"><i class="fas fa-random"></i></div>
                    <div class="tip-body">
                        <h6>Mix Letters, Numbers & Symbols</h6>
                        <p>Combine uppercase, lowercase, digits and special chars</p>
                    </div>
                </div>
                <div class="tip-item">
                    <div class="tip-icon"><i class="fas fa-ban"></i></div>
                    <div class="tip-body">
                        <h6>Avoid Common Words</h6>
                        <p>Don't use your name, email or common dictionary words</p>
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

        <div class="card-header-area">
            <div class="card-tag"><i class="fas fa-key"></i> Set New Password</div>
            <h2 class="card-title">Reset your password</h2>
            <p class="card-sub">Enter and confirm your new password below.</p>
        </div>

        {{-- Show the email this is for --}}
        <div class="email-badge">
            <i class="fas fa-envelope"></i> {{ $email }}
        </div>

        @if($errors->any())
            <div class="alert-err"><i class="fas fa-exclamation-circle"></i> {{ $errors->first() }}</div>
        @endif

        <form action="{{ route('admin.password.reset') }}" method="POST">
            @csrf
            <input type="hidden" name="token" value="{{ $token }}">
            <input type="hidden" name="email" value="{{ $email }}">

            <div class="f-group">
                <label class="f-label">New Password</label>
                <div class="f-wrap">
                    <i class="fas fa-lock f-ico"></i>
                    <input type="password" name="password" id="newPassword"
                           class="f-control @error('password') is-invalid @enderror"
                           placeholder="Min. 8 characters" required
                           oninput="checkStrength(this.value)">
                    <button type="button" class="toggle-pass" onclick="togglePass('newPassword','eye1')">
                        <i class="fas fa-eye" id="eye1"></i>
                    </button>
                </div>
                @error('password')<span class="invalid-feedback">{{ $message }}</span>@enderror
                <div class="s-bars">
                    <div class="s-bar" id="sb1"></div>
                    <div class="s-bar" id="sb2"></div>
                    <div class="s-bar" id="sb3"></div>
                    <div class="s-bar" id="sb4"></div>
                </div>
                <div class="s-label" id="sLabel">Enter a password</div>
                <div class="pwd-rules">
                    <div class="pwd-rule" id="r1"><i class="fas fa-circle"></i> 8+ chars</div>
                    <div class="pwd-rule" id="r2"><i class="fas fa-circle"></i> Uppercase</div>
                    <div class="pwd-rule" id="r3"><i class="fas fa-circle"></i> Number</div>
                </div>
            </div>

            <div class="f-group">
                <label class="f-label">Confirm New Password</label>
                <div class="f-wrap">
                    <i class="fas fa-lock f-ico"></i>
                    <input type="password" name="password_confirmation" id="confirmPassword"
                           class="f-control" placeholder="Re-enter new password" required
                           oninput="checkMatch()">
                    <button type="button" class="toggle-pass" onclick="togglePass('confirmPassword','eye2')">
                        <i class="fas fa-eye" id="eye2"></i>
                    </button>
                </div>
                <div id="matchMsg" style="font-size:11.5px;margin-top:5px;"></div>
            </div>

            <button type="submit" class="btn-reset" id="resetBtn">
                <i class="fas fa-check-circle"></i> Reset Password
            </button>
        </form>

        <a href="{{ route('admin.login') }}" class="back-link">
            <i class="fas fa-arrow-left"></i> Back to Sign In
        </a>

    </div>
</div>

<script src="{{ asset('assets/admin-js/bootstrap.bundle.min.js') }}"></script>
<script>
    function togglePass(fId, iId) {
        const f = document.getElementById(fId), i = document.getElementById(iId);
        f.type = f.type === 'password' ? 'text' : 'password';
        i.classList.toggle('fa-eye');
        i.classList.toggle('fa-eye-slash');
    }

    function checkStrength(val) {
        const cls = ['weak','fair','good','strong'];
        const lbl = ['Weak','Fair','Good','Strong'];
        let s = 0;
        if (val.length >= 8)          s++;
        if (/[A-Z]/.test(val))        s++;
        if (/[0-9]/.test(val))        s++;
        if (/[^A-Za-z0-9]/.test(val)) s++;

        ['sb1','sb2','sb3','sb4'].forEach((id, i) => {
            const el = document.getElementById(id);
            el.className = 's-bar';
            if (i < s) el.classList.add(cls[s - 1]);
        });
        document.getElementById('sLabel').textContent = val.length ? lbl[s-1] + ' password' : 'Enter a password';

        const set = (id, ok, txt) => {
            const el = document.getElementById(id);
            el.className = 'pwd-rule' + (ok ? ' ok' : '');
            el.innerHTML = `<i class="fas fa-${ok ? 'check-circle' : 'circle'}"></i> ${txt}`;
        };
        set('r1', val.length >= 8,   '8+ chars');
        set('r2', /[A-Z]/.test(val), 'Uppercase');
        set('r3', /[0-9]/.test(val), 'Number');
    }

    function checkMatch() {
        const p = document.getElementById('newPassword').value;
        const c = document.getElementById('confirmPassword').value;
        const msg = document.getElementById('matchMsg');
        if (!c) { msg.textContent = ''; return; }
        if (p === c) {
            msg.style.color = '#16a34a';
            msg.innerHTML = '<i class="fas fa-check-circle"></i> Passwords match';
        } else {
            msg.style.color = '#dc2626';
            msg.innerHTML = '<i class="fas fa-times-circle"></i> Passwords do not match';
        }
    }
</script>
</body>
</html>
