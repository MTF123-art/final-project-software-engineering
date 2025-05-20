<?php

namespace App\Http\Controllers\pengelola;

use App\Http\Controllers\Controller;
use App\Models\Destinasi;
use App\Models\Galeri;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class DestinationController extends Controller
{
    public function index()
    {
        $destination = Destinasi::with('galeri')->where('user_id', auth()->id())->get();
        $title = 'My Destinasi';

        return view('pengelola.destination.index', compact('destination', 'title'));
    }

    public function update(Request $request){
        $destinasi = Destinasi::where('user_id', auth()->id())->firstOrFail();
        
        if ($request->has('highlight_photo')) {
            $request->validate([
                'highlight_photo' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            ]);

            $highlightFile = $request->file('highlight_photo');
            $highlightFilename = 'highlight_' . uniqid() . '.' . $highlightFile->getClientOriginalExtension();
            $highlightPath = $highlightFile->storeAs('highlight', $highlightFilename, 'public');

            if ($destinasi->highlight_photo) {
                Storage::disk('public')->delete($destinasi->highlight_photo);
            }

            $destinasi->update([
                'highlight_photo' => $highlightPath,
            ]);
            return redirect()->route('pengelola.destination.index')->with('success', 'Highlight photo updated successfully.');
        } elseif ($request->has(['lokasi', 'deskripsi'])) {
            $request->validate([
                'lokasi' => 'required|string|max:255',
                'deskripsi' => 'required|string',
            ]);
            $destinasi->update([
                'lokasi' => $request->lokasi,
                'deskripsi' => $request->deskripsi,
            ]);
            return redirect()->route('pengelola.destination.index')->with('success', 'Destination updated successfully.');
        } elseif ($request->hasfile('gambar')) {
            $request->validate([
                'gambar.*' => 'image|mimes:jpeg,png,jpg|max:2048',
                'gambar' => 'required|array|min:5|max:8',
            ]);

            foreach ($destinasi->galeri as $galeri) {
                Storage::disk('public')->delete($galeri->url_gambar);
                $galeri->delete();
            }
            foreach ($request->file('gambar') as $file) {
                $uniqueName = 'galeri_' . uniqid() . '.' . $file->getClientOriginalExtension();
                $path = $file->storeAs('galeri', $uniqueName, 'public');

                Galeri::create([
                    'destinasi_id' => $destinasi->id,
                    'url_gambar' => $path,
                ]);
            }
            return redirect()->route('pengelola.destination.index')->with('success', 'Gallery updated successfully.');
        }else{
            return redirect()->route('pengelola.destination.index')->with('error', 'No changes made.');
        }
    }

    public function submit(Request $request){
        // dd($request->all());
        $request->validate([
            'nama' => 'required|string|max:255',
            'highlight_photo' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            'lokasi' => 'required|string|max:255',
            'deskripsi' => 'required|string',
            'gambar' => 'required|array|min:5|max:8',
            'gambar.*' => 'image|mimes:jpeg,png,jpg|max:2048',
        ]);

        $highlightFile = $request->file('highlight_photo');
        $highlightFilename = 'highlight_' . uniqid() . '.' . $highlightFile->getClientOriginalExtension();
        $highlightPath = $highlightFile->storeAs('highlight', $highlightFilename, 'public');

        $destinasi = Destinasi::create([
            'user_id' => auth()->id(),
            'highlight_photo' => $highlightPath,
            'nama_destinasi' => $request->nama,
            'deskripsi' => $request->deskripsi,
            'lokasi' => $request->lokasi,
            'status' => 'menunggu',
        ]);
        // dd($destinasi->id);
        // ========== Simpan semua gambar galeri ==========
        foreach ($request->file('gambar') as $file) {
            $uniqueName = 'galeri_' . uniqid() . '.' . $file->getClientOriginalExtension();
            $path = $file->storeAs('galeri', $uniqueName, 'public');

            Galeri::create([
                'destinasi_id' => $destinasi->id,
                'url_gambar' => $path,
            ]);
        }

        $user = Auth::user();
        $user->role = 'pengelola';
        $user->save();

        Auth::logout();

        return redirect()->route('login-form')->with('success', 'Destinasi berhasil ditambahkan! silahkan login ulang dan kelola destinasi anda.');
    }
}
