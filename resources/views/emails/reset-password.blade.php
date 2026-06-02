<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reset Your Password — JenoxGlobal</title>
</head>
<body style="margin:0;padding:0;background:#f1f5f9;font-family:'Segoe UI',Arial,sans-serif;">

<table width="100%" cellpadding="0" cellspacing="0" style="background:#f1f5f9;padding:40px 0;">
    <tr>
        <td align="center">
            <table width="580" cellpadding="0" cellspacing="0" style="background:#ffffff;border-radius:16px;overflow:hidden;box-shadow:0 4px 24px rgba(0,0,0,.08);">

                {{-- Header --}}
                <tr>
                    <td style="background:linear-gradient(135deg,#1d4ed8,#2563eb,#0ea5e9);padding:36px 40px;text-align:center;">
                        <table cellpadding="0" cellspacing="0" align="center">
                            <tr>
                                <td style="background:rgba(255,255,255,.15);border-radius:14px;padding:12px 16px;border:1px solid rgba(255,255,255,.2);">
                                    <span style="font-size:22px;">🌐</span>
                                    <span style="font-size:20px;font-weight:800;color:#fff;vertical-align:middle;margin-left:8px;">JenoxGlobal</span>
                                </td>
                            </tr>
                        </table>
                        <p style="color:rgba(255,255,255,.7);font-size:13px;margin:12px 0 0;letter-spacing:.3px;">Admin Control Panel</p>
                    </td>
                </tr>

                {{-- Body --}}
                <tr>
                    <td style="padding:40px 40px 32px;">

                        <p style="font-size:15px;color:#64748b;margin:0 0 6px;">Hello, <strong style="color:#0f172a;">{{ $user->name }}</strong></p>
                        <h2 style="font-size:24px;font-weight:800;color:#0f172a;margin:0 0 16px;letter-spacing:-.4px;">Reset Your Password</h2>
                        <p style="font-size:14px;color:#64748b;line-height:1.7;margin:0 0 28px;">
                            We received a request to reset the password for your JenoxGlobal admin account. Click the button below to set a new password. This link is valid for <strong>60 minutes</strong>.
                        </p>

                        {{-- CTA Button --}}
                        <table cellpadding="0" cellspacing="0" width="100%" style="margin-bottom:28px;">
                            <tr>
                                <td align="center">
                                    <a href="{{ $resetUrl }}"
                                       style="display:inline-block;padding:14px 36px;background:linear-gradient(135deg,#1d4ed8,#2563eb);color:#fff;text-decoration:none;border-radius:10px;font-size:15px;font-weight:700;letter-spacing:.2px;box-shadow:0 4px 14px rgba(37,99,235,.35);">
                                        Reset My Password
                                    </a>
                                </td>
                            </tr>
                        </table>

                        {{-- Security notice --}}
                        <table cellpadding="0" cellspacing="0" width="100%" style="background:#f8fafc;border:1px solid #e2e8f0;border-radius:10px;margin-bottom:24px;">
                            <tr>
                                <td style="padding:16px 18px;">
                                    <p style="font-size:13px;color:#64748b;margin:0 0 4px;"><strong style="color:#374151;">🔒 Security Notice</strong></p>
                                    <p style="font-size:13px;color:#64748b;margin:0;line-height:1.6;">If you did not request a password reset, please ignore this email. Your account remains secure and no changes have been made.</p>
                                </td>
                            </tr>
                        </table>

                        {{-- Fallback URL --}}
                        <p style="font-size:12.5px;color:#94a3b8;line-height:1.6;margin:0;">
                            If the button above doesn't work, copy and paste this link into your browser:<br>
                            <a href="{{ $resetUrl }}" style="color:#2563eb;word-break:break-all;font-size:12px;">{{ $resetUrl }}</a>
                        </p>

                    </td>
                </tr>

                {{-- Footer --}}
                <tr>
                    <td style="background:#f8fafc;border-top:1px solid #e2e8f0;padding:20px 40px;text-align:center;">
                        <p style="font-size:12px;color:#94a3b8;margin:0;">&copy; {{ date('Y') }} JenoxGlobal. All rights reserved.</p>
                        <p style="font-size:12px;color:#cbd5e1;margin:4px 0 0;">This is an automated message — please do not reply to this email.</p>
                    </td>
                </tr>

            </table>
        </td>
    </tr>
</table>

</body>
</html>
