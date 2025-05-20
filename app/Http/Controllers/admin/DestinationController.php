<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Destinasi;
use App\Models\Galeri;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DestinationController extends Controller
{
    public function index(){
        return view('admin.destination-management.index', [
            'title' => 'Destination Management',
            'destinasi' => '1',
            'pengelola' => '1',
            'all' => Destinasi::paginate(5),
        ]);
    }

    public function detail($id){
        return view('admin.destination-management.detail', [
            'title' => 'Destination Management',
            'detail' => Destinasi::findOrFail($id),
        ]);
    }

    public function delete($id){
        $destinasi = Destinasi::findOrFail($id);
        foreach ($destinasi->galeri as $galeri) {
            Storage::disk('public')->delete($galeri->url_gambar);
            $galeri->delete();
        }
        if ($destinasi->highlight_photo) {
            Storage::disk('public')->delete($destinasi->highlight_photo);
        }
        $destinasi->delete();
        return redirect()->route('admin.destination.index')->with('success', 'Destinasi berhasil dihapus');
    }

    public function update(Request $request, $id){
        $destinasi = Destinasi::where('id', $id)->firstOrFail();
        
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
            return redirect()->route('admin.destination.index')->with('success', 'Highlight photo updated successfully.');
        } elseif ($request->has(['lokasi', 'deskripsi'])) {
            $request->validate([
                'lokasi' => 'required|string|max:255',
                'deskripsi' => 'required|string',
            ]);
            $destinasi->update([
                'lokasi' => $request->lokasi,
                'deskripsi' => $request->deskripsi,
            ]);
            return redirect()->route('admin.destination.index')->with('success', 'Destination updated successfully.');
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
            return redirect()->route('admin.destination.index')->with('success', 'Gallery updated successfully.');
        }else{
            return redirect()->route('admin.destination.index')->with('error', 'No changes made.');
        }
    }
}
