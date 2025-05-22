<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
        return view('admin.user-management.index', [
            'admin' => User::where('role', 'admin')->count(),
            'pengelola' => User::where('role', 'pengelola')->count(),
            'user' => User::where('role', 'user')->count(),
            'all' => User::orderBy('id', 'desc')->paginate(5),
            'title' => 'User Management',
        ]);
    }

    public function filter($role)
    {
        $users = User::where('role', $role)->paginate(5);
        return view('admin.user-management.index', [
            'admin' => User::where('role', 'admin')->count(),
            'pengelola' => User::where('role', 'pengelola')->count(),
            'user' => User::where('role', 'user')->count(),
            'all' => $users,
            'title' => 'User Management',
        ]);
    }

    public function createForm()
    {
        return view('admin.user-management.create', [
            'title' => 'Create User',
        ]);
    }

    public function create(Request $request){
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,webp|max:2048',
            'role' => 'required|string|in:admin,pengelola,user',
        ]);

        $path = null;

        // Handle image upload
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $filename = 'userImage_' . uniqid() . '.' . $file->getClientOriginalExtension();
            $file->storeAs('user-images', $filename, 'public');
            $path = 'user-images/' . $filename;
        }

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'image' => $path,
            'role' => $request->role,
            'is_acvite' => true,
        ]);

        return redirect()->route('admin.user-management.create-form')->with('success', 'User created successfully');
    }

    public function editForm($id)
    {
        $user = User::findOrFail($id);
        return view('admin.user-management.edit', [
            'user' => $user,
            'title' => 'Edit User',
        ]);
    }

    public function edit(Request $request, $id)
    {
        $user = User::findOrFail($id);
        $request->validate([
            'role' => 'required|string|in:admin,pengelola,user',
            'is_active' => 'required|boolean',
        ]);

        $user->role = $request->role;
        $user->is_active = $request->is_active;
        $user->save();

        return redirect()
            ->route('admin.user-management.edit-form', ['id' => $id])
            ->with('success', 'User updated successfully');
    }

    public function delete($id)
    {
        $user = User::findOrFail($id);
        $user->delete();

        return redirect()->route('admin.user-management.index')->with('success', 'User deleted successfully');
    }
}
