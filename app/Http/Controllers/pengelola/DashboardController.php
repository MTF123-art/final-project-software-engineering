<?php

namespace App\Http\Controllers\pengelola;

use App\Http\Controllers\Controller;
use App\Models\Destinasi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index (){
        return view('pengelola.dashboard', [
            'mydestination' => Destinasi::with('reviews')->where('user_id', Auth::user()->id)->first()
        ]);
    }
}
