<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
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
        $user = Auth::user();

        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255|unique:users,email,' . $user->id,
            'image' => 'nullable|image|mimes:jpeg,png,jpg,webp|max:2048', // max 2MB
        ]);

        // Update user data
        $user->name = $validated['name'];
        $user->email = $validated['email'];

        // Handle image upload
        if ($request->hasFile('image')) {
            
            if ($user->image) {
                Storage::disk('public')->delete($user->image);
            }

            $file = $request->file('image');
            $filename = 'userImage_' . uniqid() . '.' . $file->getClientOriginalExtension();
            $path = $file->storeAs('user-images', $filename, 'public');


            $user->image = $path;
        }

        $user->save();

        return redirect()->back()->with('success', 'Profile updated successfully.');
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

        return redirect()
            ->route(auth()->user()->role . '.profile')
            ->with('success-password', 'Password updated successfully.');
    }
}
