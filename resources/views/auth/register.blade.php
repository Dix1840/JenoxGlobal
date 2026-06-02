<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register | JenoxGlobal Admin</title>
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

        .left-panel .bg-img {
            position: absolute; inset: 0;
            background: url('{{ asset('assets/images/auth-bg2.jpg') }}') center / cover no-repeat;
            z-index: 0;
        }
        .left-panel .bg-overlay {
            position: absolute; inset: 0;
            background: linear-gradient(
                160deg,
                rgba(5,2,30,.97)   0%,
                rgba(30,10,80,.93) 40%,
                rgba(60,20,120,.87) 70%,
                rgba(90,40,160,.78) 100%
            );
            z-index: 1;
        }
        .left-panel .blob-1 {
            position: absolute;
            width: 420px; height: 420px;
            background: radial-gradient(circle, rgba(124,58,237,.32) 0%, transparent 70%);
            border-radius: 50%;
            top: -130px; right: -130px;
            z-index: 2;
        }
        .left-panel .blob-2 {
            position: absolute;
            width: 280px; height: 280px;
            background: radial-gradient(circle, rgba(168,85,247,.2) 0%, transparent 70%);
            border-radius: 50%;
            bottom: -80px; left: -60px;
            z-index: 2;
        }

        .left-content {
            position: relative; z-index: 3;
            display: flex; flex-direction: column;
            height: 100%;
            padding: 44px 48px;
        }

        /* Brand */
        .lp-brand { display: flex; align-items: center; gap: 12px; }
        .lp-brand-icon {
            width: 46px; height: 46px;
            background: linear-gradient(135deg, #7c3aed, #a855f7);
            border-radius: 14px;
            display: flex; align-items: center; justify-content: center;
            font-size: 20px; color: #fff;
            box-shadow: 0 8px 20px rgba(124,58,237,.4);
            flex-shrink: 0;
        }
        .lp-brand-text .name { font-size: 20px; font-weight: 800; color: #fff; letter-spacing: -.2px; }
        .lp-brand-text .sub  { font-size: 11px; color: rgba(255,255,255,.4); margin-top: 1px; letter-spacing: .3px; text-transform: uppercase; }

        /* Middle */
        .lp-mid { flex: 1; display: flex; flex-direction: column; justify-content: center; padding: 20px 0; }

        .lp-badge {
            display: inline-flex; align-items: center; gap: 7px;
            background: rgba(124,58,237,.2);
            border: 1px solid rgba(124,58,237,.45);
            color: #c4b5fd;
            padding: 6px 14px; border-radius: 30px;
            font-size: 11px; font-weight: 700;
            letter-spacing: .6px; text-transform: uppercase;
            margin-bottom: 22px; width: fit-content;
        }

        .lp-headline {
            font-size: 36px; font-weight: 900; color: #fff;
            line-height: 1.15; letter-spacing: -.8px; margin-bottom: 14px;
        }
        .lp-headline .accent { color: #c084fc; }

        .lp-desc {
            font-size: 13.5px; color: rgba(255,255,255,.52);
            line-height: 1.75; max-width: 380px; margin-bottom: 32px;
        }

        /* Steps */
        .steps-wrap { margin-bottom: 30px; }
        .step-line {
            display: flex; align-items: flex-start; gap: 0;
            margin-bottom: 0;
        }

        .step-node { display: flex; flex-direction: column; align-items: center; }
        .step-circle {
            width: 36px; height: 36px; border-radius: 50%;
            display: flex; align-items: center; justify-content: center;
            font-size: 13px; font-weight: 800; flex-shrink: 0;
            border: 2px solid rgba(255,255,255,.15);
            background: rgba(255,255,255,.07);
            color: rgba(255,255,255,.4);
            transition: all .3s;
        }
        .step-circle.active {
            background: linear-gradient(135deg, #7c3aed, #a855f7);
            border-color: #a855f7;
            color: #fff;
            box-shadow: 0 4px 14px rgba(124,58,237,.5);
        }
        .step-vline {
            width: 2px; flex: 1; min-height: 22px;
            background: rgba(255,255,255,.1);
            margin: 3px auto;
        }

        .step-info { padding: 5px 0 26px 16px; }
        .step-info h6 { font-size: 13px; font-weight: 700; color: #fff; margin: 0 0 2px; }
        .step-info p  { font-size: 12px; color: rgba(255,255,255,.42); margin: 0; }

        .step-row { display: flex; }
        .step-row:last-child .step-vline { display: none; }
        .step-row:last-child .step-info { padding-bottom: 0; }

        /* Benefit pills */
        .benefit-grid {
            display: grid; grid-template-columns: 1fr 1fr; gap: 10px;
        }
        .benefit-pill {
            display: flex; align-items: center; gap: 9px;
            background: rgba(255,255,255,.06);
            border: 1px solid rgba(255,255,255,.1);
            border-radius: 10px; padding: 11px 13px;
        }
        .benefit-pill i { font-size: 14px; color: #c084fc; flex-shrink: 0; }
        .benefit-pill span { font-size: 12px; font-weight: 600; color: rgba(255,255,255,.7); }

        /* Footer */
        .lp-footer {
            display: flex; align-items: center; justify-content: space-between;
            padding-top: 20px;
            border-top: 1px solid rgba(255,255,255,.08);
        }
        .lp-footer-copy { font-size: 11.5px; color: rgba(255,255,255,.3); }
        .lp-footer-links { display: flex; gap: 16px; }
        .lp-footer-links a { font-size: 11.5px; color: rgba(255,255,255,.3); text-decoration: none; transition: color .2s; }
        .lp-footer-links a:hover { color: rgba(255,255,255,.7); }

        /* ─── RIGHT PANEL ────────────────────────────── */
        .right-panel {
            width: 500px; flex-shrink: 0;
            background: #f8fafc;
            display: flex; align-items: center; justify-content: center;
            padding: 28px 24px;
            overflow-y: auto;
        }

        .auth-card { width: 100%; max-width: 420px; }

        .card-header-area { margin-bottom: 26px; }
        .card-tag {
            display: inline-flex; align-items: center; gap: 6px;
            background: #f5f3ff; color: #7c3aed;
            border: 1px solid #ddd6fe;
            padding: 5px 12px; border-radius: 20px;
            font-size: 11.5px; font-weight: 700; letter-spacing: .3px;
            margin-bottom: 14px;
        }
        .card-title { font-size: 25px; font-weight: 900; color: #0f172a; letter-spacing: -.5px; margin-bottom: 5px; }
        .card-sub   { font-size: 13.5px; color: #64748b; }

        /* Form */
        .f-row { display: grid; grid-template-columns: 1fr 1fr; gap: 14px; }
        .f-group { margin-bottom: 16px; }
        .f-label { font-size: 12.5px; font-weight: 700; color: #374151; margin-bottom: 7px; display: block; letter-spacing: .1px; }
        .f-wrap  { position: relative; display: flex; align-items: center; }
        .f-ico   { position: absolute; left: 13px; font-size: 13px; color: #94a3b8; pointer-events: none; z-index: 1; }
        .f-control {
            width: 100%; padding: 11px 13px 11px 39px;
            border: 1.5px solid #e2e8f0; border-radius: 11px;
            font-size: 13.5px; font-family: 'Inter', sans-serif;
            color: #0f172a; background: #fff;
            transition: border-color .2s, box-shadow .2s; outline: none;
        }
        .f-control::placeholder { color: #cbd5e1; }
        .f-control:focus { border-color: #7c3aed; box-shadow: 0 0 0 3px rgba(124,58,237,.1); }
        .f-control.is-invalid { border-color: #ef4444; }
        .invalid-feedback { font-size: 12px; color: #ef4444; margin-top: 4px; display: block; }

        .toggle-pass {
            position: absolute; right: 12px;
            background: none; border: none; padding: 0;
            color: #94a3b8; cursor: pointer; font-size: 13px; transition: color .2s;
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

        .terms-row { display: flex; align-items: flex-start; gap: 10px; margin-bottom: 18px; }
        .terms-row input { margin-top: 2px; flex-shrink: 0; }
        .terms-row label { font-size: 13px; color: #64748b; line-height: 1.5; cursor: pointer; }
        .terms-row label a { color: #7c3aed; font-weight: 600; text-decoration: none; }
        .terms-row label a:hover { text-decoration: underline; }
        .form-check-input:checked { background-color: #7c3aed; border-color: #7c3aed; }

        .btn-register {
            width: 100%; padding: 13px;
            background: linear-gradient(135deg, #6d28d9 0%, #7c3aed 50%, #a855f7 100%);
            color: #fff; border: none; border-radius: 11px;
            font-size: 14px; font-weight: 700; font-family: 'Inter', sans-serif;
            cursor: pointer; transition: all .25s;
            display: flex; align-items: center; justify-content: center; gap: 8px;
            box-shadow: 0 4px 16px rgba(124,58,237,.38);
            letter-spacing: .1px;
        }
        .btn-register:hover { transform: translateY(-2px); box-shadow: 0 8px 24px rgba(124,58,237,.48); }
        .btn-register:active { transform: translateY(0); }

        .alert-err {
            background: #fef2f2; border: 1px solid #fecaca;
            border-radius: 10px; padding: 11px 14px;
            font-size: 13px; color: #dc2626; margin-bottom: 18px;
            display: flex; align-items: center; gap: 8px;
        }

        .footer-txt { text-align: center; margin-top: 20px; font-size: 13px; color: #94a3b8; }
        .footer-txt a { color: #7c3aed; font-weight: 700; text-decoration: none; }
        .footer-txt a:hover { text-decoration: underline; }

        /* Responsive */
        @media (max-width: 960px) {
            .left-panel { display: none; }
            .right-panel { width: 100%; }
        }
        @media (max-width: 560px) {
            .f-row { grid-template-columns: 1fr; }
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

        <div class="lp-brand">
            <div class="lp-brand-icon"><i class="fas fa-globe-americas"></i></div>
            <div class="lp-brand-text">
                <div class="name">JenoxGlobal</div>
                <div class="sub">Admin Control Panel</div>
            </div>
        </div>

        <div class="lp-mid">

            <div class="lp-badge">
                <i class="fas fa-anchor"></i> Global Trade Management
            </div>

            <h1 class="lp-headline">
                Set Up Your<br>
                Admin Access<br>
                <span class="accent">In Minutes.</span>
            </h1>

            <p class="lp-desc">
                Create your account and take full control of your import-export operations — products, inquiries, certificates and more.
            </p>

            {{-- Steps --}}
            <div class="steps-wrap">
                <div class="step-row">
                    <div class="step-node">
                        <div class="step-circle active"><i class="fas fa-user-plus"></i></div>
                        <div class="step-vline"></div>
                    </div>
                    <div class="step-info">
                        <h6>Create Your Account</h6>
                        <p>Fill in your name, email and password</p>
                    </div>
                </div>
                <div class="step-row">
                    <div class="step-node">
                        <div class="step-circle">2</div>
                        <div class="step-vline"></div>
                    </div>
                    <div class="step-info">
                        <h6>Verify Your Email</h6>
                        <p>Confirm your address via inbox link</p>
                    </div>
                </div>
                <div class="step-row">
                    <div class="step-node">
                        <div class="step-circle">3</div>
                    </div>
                    <div class="step-info">
                        <h6>Access Your Dashboard</h6>
                        <p>Start managing your global trade business</p>
                    </div>
                </div>
            </div>

            {{-- Benefit pills --}}
            <div class="benefit-grid">
                <div class="benefit-pill">
                    <i class="fas fa-boxes"></i>
                    <span>Product Catalog</span>
                </div>
                <div class="benefit-pill">
                    <i class="fas fa-envelope-open-text"></i>
                    <span>Inquiry Mgmt.</span>
                </div>
                <div class="benefit-pill">
                    <i class="fas fa-chart-line"></i>
                    <span>Live Analytics</span>
                </div>
                <div class="benefit-pill">
                    <i class="fas fa-shield-alt"></i>
                    <span>Secure Access</span>
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

<!-- ═══════════ RIGHT PANEL ═══════════ -->
<div class="right-panel">
    <div class="auth-card">

        <div class="card-header-area">
            <div class="card-tag"><i class="fas fa-user-plus"></i> New Admin Account</div>
            <h2 class="card-title">Create your account</h2>
            <p class="card-sub">Join the JenoxGlobal admin platform</p>
        </div>

        @if($errors->any())
            <div class="alert-err"><i class="fas fa-exclamation-circle"></i> {{ $errors->first() }}</div>
        @endif

        <form action="{{ route('admin.register') }}" method="POST">
            @csrf

            <div class="f-row">
                <div class="f-group">
                    <label class="f-label">Full Name</label>
                    <div class="f-wrap">
                        <i class="fas fa-user f-ico"></i>
                        <input type="text" name="name"
                               class="f-control @error('name') is-invalid @enderror"
                               placeholder="John Doe"
                               value="{{ old('name') }}" required>
                    </div>
                    @error('name')<span class="invalid-feedback">{{ $message }}</span>@enderror
                </div>

                <div class="f-group">
                    <label class="f-label">Email Address</label>
                    <div class="f-wrap">
                        <i class="fas fa-envelope f-ico"></i>
                        <input type="email" name="email"
                               class="f-control @error('email') is-invalid @enderror"
                               placeholder="you@example.com"
                               value="{{ old('email') }}" required>
                    </div>
                    @error('email')<span class="invalid-feedback">{{ $message }}</span>@enderror
                </div>
            </div>

            <div class="f-group">
                <label class="f-label">Password</label>
                <div class="f-wrap">
                    <i class="fas fa-lock f-ico"></i>
                    <input type="password" name="password" id="regPassword"
                           class="f-control @error('password') is-invalid @enderror"
                           placeholder="Min. 8 characters" required
                           oninput="checkStrength(this.value)">
                    <button type="button" class="toggle-pass" onclick="togglePass('regPassword','eye1')">
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
                <label class="f-label">Confirm Password</label>
                <div class="f-wrap">
                    <i class="fas fa-lock f-ico"></i>
                    <input type="password" name="password_confirmation" id="regConfirm"
                           class="f-control" placeholder="Re-enter password" required>
                    <button type="button" class="toggle-pass" onclick="togglePass('regConfirm','eye2')">
                        <i class="fas fa-eye" id="eye2"></i>
                    </button>
                </div>
            </div>

            <div class="terms-row">
                <input class="form-check-input" type="checkbox" id="terms" required>
                <label for="terms">
                    I agree to the <a href="#">Terms of Service</a> and <a href="#">Privacy Policy</a> of JenoxGlobal
                </label>
            </div>

            <button type="submit" class="btn-register">
                <i class="fas fa-user-plus"></i> Create Admin Account
            </button>
        </form>

        <div class="footer-txt">
            Already have an account? <a href="{{ route('admin.login') }}">Sign in</a>
        </div>

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
</script>
</body>
</html>
