<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Container\Attributes\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;

class ProfileController extends Controller
{
    public function index()
    {
        return view(auth()->user()->role . '.profile', [
            'title' => 'My Profile',
        ]);
    }

    public function editProfile(Request $request)
    {
        // Validate the request data
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => ['required', 'string', 'email', 'max:255', Rule::unique('users')->ignore(auth()->user()->id)],
        ]);

        // Update the user's profile
        $user = auth()->user();
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->save();

        return redirect()->route(auth()->user()->role .'.profile')->with('success-profile', 'Profile updated successfully.');
    }

    public function editPassword(Request $request)
    {
        $request->validate([
            'current_password' => 'required|string',
            'new_password' => 'required|string|min:8|confirmed',
        ]);
        if (!password_verify($request->input('current_password'), auth()->user()->password)) {
            return redirect()->back()->with('current_password', 'Current password is incorrect.');
        }
        if ($request->input('current_password') === $request->input('new_password')) {
            return redirect()->back()->with('current_password', 'New password cannot be the same as the current password.');
        }
        $user = auth()->user();
        $user->password = Hash::make($request->input('new_password'));
        $user->save();

        return redirect()->route(auth()->user()->role .'.profile')->with('success-password', 'Password updated successfully.');
    }
}
