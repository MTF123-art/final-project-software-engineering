<?php

namespace App\Http\Controllers\auth;

use Illuminate\Auth\Events\Registered;
use App\Http\Controllers\Controller;
use App\Http\Requests\RegisterRequest;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function showRegisterForm()
    {
        return view('auth.register');
    }
    public function register(RegisterRequest $request)
    {
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' => "user",
            'is_active' => "true",
        ]);

        event(new Registered($user));        

        return redirect()->route('login-form')->with('success', 'Registration successful! Please login.');
    }
}
