<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\Bookmark;
use Illuminate\Http\Request;

class BookmarkController extends Controller
{
    public function index(){
        $bookmarks = Bookmark::with('destinasi')->where('user_id', auth()->user()->id)->get();
        $title = 'My Bookmark';
        return view('user.bookmark.index', compact('bookmarks', 'title'));
    }
    public function saveBookmark($id){
        $saved = Bookmark::where('user_id', auth()->user()->id)->where('destinasi_id', $id)->first();
        if ($saved) {
            return redirect()->back()->with('error', 'Destinasi sudah ditambahkan ke Bookmark anda');
        }

        Bookmark::create([
            'user_id' => auth()->user()->id,
            'destinasi_id' => $id
        ]);
        return redirect()->back()->with('success', 'Berhasil ditambahkan ke bookmark');
    }

    public function deleteBookmark($id){
        $bookmark = Bookmark::where('id', $id)->first();
        if (!$bookmark) {
            return redirect()->back()->with('error', 'Destinasi tidak ditemukan di bookmark anda');
        }
        $bookmark->delete();
        return redirect()->back()->with('success', 'Berhasil dihapus dari bookmark');
    }
}
