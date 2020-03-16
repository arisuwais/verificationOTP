<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Events\Auth\UserActivationEmail;

class UserController extends Controller
{
    public function verification(Request $request)
    {
        return view('auth.verification');
    }

    public function postVerification(Request $request)
    {
        $user = User::where('token_activation', $request->otp)->first();
        if ($user == null) {
            return redirect()->back()->with('otp', 'OTP salah Silahkan cek Kembali !!');
        } else {
            $user->update([
                'isverified' => true,
                'token_activation' => null
            ]);
            return redirect('login')->withSuccess('Terima Kasih, Akun Anda Telah Aktif');
        }
    }

    public function postResend(Request $request)
    {
        $this->validates($request);
        $user = User::where('email', $request->email)->first();
        // send Mail
        event(new UserActivationEmail($user));
        return redirect('verification')->withSuccess('Email telah dikirim,silahkan cek email anda');
    }

    public function postResendDirect(Request $request)
    {
        $user = User::where('token_activation', $request->otp)->first();

        if ($user == null) {
            return redirect()->back()->with('otp', 'OTP salah Silahkan cek Kembali !!');
        } else {
            $user->update([
                'isverified' => true,
                'token_activation' => null
            ]);
            return redirect('login')->withSuccess('Terima Kasih, Akun Anda Telah Aktif');
        }
    }

    public function validates(Request $request)
    {
        $this->validate(
            $request,
            [
                'email' => 'required|email|exists:users,email'
            ],
            [
                'email.exists' => 'Email tidak ditemukan, Silahkan cek kembali'
            ]
        );
    }
}
