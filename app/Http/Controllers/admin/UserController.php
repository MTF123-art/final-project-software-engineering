<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        return view('admin.user.index', [
            'admin' => User::where('role', 'admin')->count(),
            'pengelola' => User::where('role', 'pengelola')->count(),
            'user' => User::where('role', 'user')->count(),
            'all' => User::all(),
            'title' => 'User Management',
        ]);
    }
}
