<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\Bookmark;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index () {
        return view('user.dashboard', [
            'mybookmarks' => Bookmark::with('destinasi')->where('user_id', Auth::user()->id)->orderBy('created_at', 'desc')->take(2)->get()
        ]);
    }
}
