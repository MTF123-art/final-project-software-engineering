<?php

namespace App\Http\Controllers\pengelola;

use App\Http\Controllers\Controller;
use App\Models\Review;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ReviewController extends Controller
{
    public function index()
    {
        $reviews = Review::where('destinasi_id', Auth::user()->destinasi->id)
            ->orderBy('created_at', 'desc')
            ->paginate(6);
        return view('pengelola.review.index', [
            'title' => 'Manage Review',
            'reviews' => $reviews,
        ]);
    }

    public function updateStatus(Request $request, $id)
    {
        $review = Review::findOrFail($id);

        if ($review->status === 'visible') {
            $review->status = 'hidden';
        } else {
            $review->status = 'visible';
        }
        $review->save();

        return redirect()->back()->with('success', 'Review status updated successfully.');
    }
}
