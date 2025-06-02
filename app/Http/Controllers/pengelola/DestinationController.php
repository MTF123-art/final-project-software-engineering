<?php

namespace App\Http\Controllers\pengelola;

use App\Http\Controllers\Controller;
use App\Models\Destinasi;
use App\Models\Galeri;
use App\Models\Kategori;
use App\Models\User;
use App\Notifications\admin\UpdateDestinationNotification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class DestinationController extends Controller
{
    public function index()
    {
        $destination = Destinasi::with('galeri')
            ->where('user_id', auth()->id())
            ->first();
        $kategori = Kategori::get();
        $title = 'My Destinasi';

        return view('pengelola.destination.index', compact('destination', 'title', 'kategori'));
    }

    public function update(Request $request)
    {
        $destinasi = Destinasi::where('user_id', Auth::user()->id)->firstOrFail();

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

            $admins = User::where('role', 'admin')->get();
            foreach ($admins as $admin) {
                $admin->notify(new UpdateDestinationNotification($destinasi, Auth::user(), 'Highlight Photo '));
            }

            return redirect()->route('pengelola.destination.index')->with('success', 'Highlight photo updated successfully.');
        } elseif ($request->has(['lokasi', 'deskripsi', 'kategori_id'])) {
            $request->validate([
                'lokasi' => 'required|string|max:255',
                'deskripsi' => 'required|string',
                'kategori_id' => 'required|exists:kategoris,id',
            ]);
            $destinasi->update([
                'lokasi' => $request->lokasi,
                'kategori_id' => $request->kategori_id,
                'deskripsi' => $request->deskripsi,
            ]);

            $admins = User::where('role', 'admin')->get();
            foreach ($admins as $admin) {
                $admin->notify(new UpdateDestinationNotification($destinasi, Auth::user(), 'Lokasi, Deskripsi, Kategori '));
            }
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

            $admins = User::where('role', 'admin')->get();
            foreach ($admins as $admin) {
                $admin->notify(new UpdateDestinationNotification($destinasi, Auth::user(), 'Galery '));
            }
            return redirect()->route('pengelola.destination.index')->with('success', 'Gallery updated successfully.');
        } else {
            return redirect()->route('pengelola.destination.index')->with('error', 'No changes made.');
        }
    }

    public function submit(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'nama' => 'required|string|max:255',
            'highlight_photo' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            'kategori_id' => 'required|exists:kategoris,id',
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
            'kategori_id' => $request->kategori_id,
            'deskripsi' => $request->deskripsi,
            'slug' => Str::slug($request->nama) . '-' . Str::random(5),
            'lokasi' => $request->lokasi,
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
        if ($user->role == 'user') {
            $user->role = 'pengelola';
            $user->save();
            Auth::logout();
            return redirect()->route('login-form')->with('success', 'Destinasi berhasil ditambahkan! silahkan login ulang dan kelola destinasi anda.');
        }

        return redirect()->route('pengelola.destination.index')->with('success', 'Destinasi berhasil ditambahkan!');
    }
}
