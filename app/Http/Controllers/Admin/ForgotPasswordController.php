<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;
use App\Models\User;
use Carbon\Carbon;

class ForgotPasswordController extends Controller
{
    public function showForm()
    {
        return view('auth.forgot-password');
    }

    public function sendLink(Request $request)
    {
        $request->validate(['email' => 'required|email']);

        $user = User::where('email', $request->email)->first();

        if (!$user) {
            return back()->withErrors(['email' => 'No account found with this email address.'])->withInput();
        }

        // Delete old token if exists
        DB::table('password_reset_tokens')->where('email', $request->email)->delete();

        $token = Str::random(64);

        DB::table('password_reset_tokens')->insert([
            'email'      => $request->email,
            'token'      => hash('sha256', $token),
            'created_at' => Carbon::now(),
        ]);

        $resetUrl = route('admin.password.reset.form', ['token' => $token, 'email' => $request->email]);

        // Send email
        Mail::send('emails.reset-password', ['resetUrl' => $resetUrl, 'user' => $user], function ($mail) use ($user) {
            $mail->to($user->email)
                 ->subject('JenoxGlobal — Reset Your Password');
        });

        return back()->with('success', 'Password reset link has been sent to your email address.');
    }
}
