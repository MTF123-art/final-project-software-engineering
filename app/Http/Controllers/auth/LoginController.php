<?php

namespace App\Http\Controllers\auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function login(LoginRequest $request)
    {
        $remember = $request->boolean('remember');

        if (Auth::attempt($request->only('email', 'password'), $remember)) {
            $request->session()->regenerate();

            $user = Auth::user();

            if (!$user->hasVerifiedEmail()) {
                // Biarkan user tetap login
                return redirect()->route('verification.notice')->with('error', 'Kamu harus memverifikasi email sebelum lanjut.');
            }
            return redirect()
                ->route($user->role.".dashboard")
                ->with('success', 'Login berhasil!');
        }

        return back()->with('error', 'Login gagal. Periksa kembali email dan password Anda.')->withInput();
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/')->with('success', 'Logout berhasil!');
    }
}
