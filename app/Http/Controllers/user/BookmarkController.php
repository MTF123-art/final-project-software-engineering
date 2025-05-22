<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\Bookmark;
use Illuminate\Http\Request;

class BookmarkController extends Controller
{
    public function saveBookmark($id){
        Bookmark::create([
            'user_id' => auth()->user()->id,
            'destinasi_id' => $id
        ]);
        return redirect()->back()->with('success', 'Berhasil menambahkan bookmark');
    }
}
