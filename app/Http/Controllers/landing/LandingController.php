<?php

namespace App\Http\Controllers\landing;

use App\Http\Controllers\Controller;
use App\Models\Destinasi;
use App\Models\Kategori;
use Illuminate\Http\Request;

class LandingController extends Controller
{
    public function home()
    {
        return view('public.home');
    }
    public function about()
    {
        return view('public.about');
    }
    public function contact()
    {
        return view('public.contact');
    }
    public function destination($slug = null){
        if ($slug) {
            $kategori = Kategori::where('slug', $slug)->first();
            if ($kategori) {
                $destinasi = Destinasi::where('kategori_id', $kategori->id)->paginate(6);
            } else {
                // Jika slug tidak ditemukan, bisa redirect atau tampilkan semua
                $destinasi = Destinasi::paginate(6);
            }
        } else {
            $destinasi = Destinasi::paginate(6);
        }

        $kategori = Kategori::get();

        return view('public.destination', compact('kategori', 'destinasi'));
    }

    public function destinationDetail($slug){
        $destinasi = Destinasi::where('slug', $slug)->first();
        return view('public.detail-destination', compact('destinasi'));
    }
}
