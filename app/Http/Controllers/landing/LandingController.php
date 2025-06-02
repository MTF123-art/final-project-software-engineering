<?php

namespace App\Http\Controllers\landing;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use App\Models\Destinasi;
use App\Models\Kategori;
use App\Models\User;
use App\Notifications\admin\NewCustomerMessageNotification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Notification;

class LandingController extends Controller
{
    public function home()
    {
        $popular = Destinasi::withCount('reviews')->orderByDesc('reviews_count')->take(6)->get();
        return view('public.home', compact('popular'));
    }
    public function about()
    {
        return view('public.about');
    }
    public function contact()
    {
        return view('public.contact');
    }

    public function contactStore(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'subject' => 'required|string|max:255',
            'message' => 'required|string',
        ]);

        $message = Contact::create([
            'name' => $request->name,
            'email' => $request->email,
            'subject' => $request->subject,
            'message' => $request->message,
        ]);

        $admins = User::where('role', 'admin')->get();
        Notification::send($admins, new NewCustomerMessageNotification($message, $request->name));

        return redirect()->back()->with('success', 'Pesan Anda telah terkirim!');
    }

    public function destination($slug = null)
    {
        if ($slug) {
            $kategori = Kategori::where('slug', $slug)->first();
            if ($kategori) {
                $destinasi = Destinasi::with('reviews')->where('kategori_id', $kategori->id)->paginate(6);
            } else {
                $destinasi = Destinasi::with('reviews')->paginate(6);
            }
        } else {
            $destinasi = Destinasi::paginate(6);
        }

        $kategori = Kategori::get();

        return view('public.destination', compact('kategori', 'destinasi'));
    }

    public function destinationDetail($slug)
    {
        $destinasi = Destinasi::with('reviews')->where('slug', $slug)->first();
        return view('public.detail-destination', compact('destinasi'));
    }
}
