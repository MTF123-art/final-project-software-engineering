<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\Destinasi;
use App\Models\Review;
use App\Models\User;
use App\Notifications\admin\NewReviewNotification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Notification;

class ReviewController extends Controller
{
    public function index()
    {
        return view('user.review.index', [
            'reviews' => Review::with('destinasi')
                ->where('user_id', auth()->user()->id)
                ->get(),
            'title' => 'My Reviews',
        ]);
    }

    public function storeReview(Request $request, $id)
    {
        $request->validate([
            'rating' => 'required|integer|in:10,20,30,40,50',
            'komentar' => 'nullable|string|max:1000',
        ]);

        $review = Review::create([
            'user_id' => auth()->user()->id,
            'destinasi_id' => $id,
            'rating' => $request->rating,
            'komentar' => $request->komentar ?? null,
        ]);

        $destinasi = Destinasi::findOrFail($id);
        $admins = User::where('role', 'admin')->get();
        
        Notification::send($admins, new NewReviewNotification($review, $destinasi, Auth::user()));


        return redirect()->back()->with('success', 'Review berhasil ditambahkan');
    }

    public function updateReview(Request $request, $id)
    {
        $request->validate([
            'rating' => 'required|integer|in:10,20,30,40,50',
            'komentar' => 'nullable|string|max:1000',
        ]);

        $review = Review::where('id', $id)->first();
        $review->update([
            'rating' => $request->rating,
            'komentar' => $request->komentar ?? null,
        ]);
        $review->save();

        return redirect()->back()->with('success', 'Review berhasil diperbarui');
    }

    public function deleteReview($id)
    {
        $review = Review::findOrFail($id);
        $review->delete();

        return redirect()->back()->with('success', 'Review berhasil dihapus');
    }
}
