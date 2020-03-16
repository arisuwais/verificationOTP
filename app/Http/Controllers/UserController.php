<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

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
            return redirect()->back()->withOtp('OTP salah Silahkan cek Kembali !!');
        } else {
            $user->update([
                'isverified' => true,
                'token_activation' => null
            ]);
            return redirect('login')->withSuccess('Terima Kasih, Akun Anda Telah Aktif');
        }
    }
}
