<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Review;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    public function index () {
        return view('admin.review-management.index', [
            'title' => 'Review Management',
            'reviews' => Review::with('user')
                ->orderBy('created_at', 'desc')
                ->paginate(6),
        ]);
    }

    public function updateStatus (Request $request, $id) {
        $review = Review::findOrFail($id);

        if ($review->status === 'visible') {
            $review->status = 'hidden';
        } else {
            $review->status = 'visible';
        }
        $review->save();

        return redirect()->back()->with('success', 'Review status updated successfully.');
    }

    public function delete ($id){
        $review = Review::findOrFail($id);
        $review->delete();

        return redirect()->back()->with('success', 'Review deleted successfully.');
    }
}
