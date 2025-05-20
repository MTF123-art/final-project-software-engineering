<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\Destinasi;
use App\Models\Galeri;
use App\Models\RoleRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class RoleRequestController extends Controller
{
    public function upgradeForm()
    {
        if (RoleRequest::where('user_id', auth()->id())->exists()) {
            return redirect()->route('user.upgrade.status')->with('info-upgrade', 'Your request is already under review.');
        }

        return view('user.role-request.role-request-form', [
            'title' => 'Role Request',
        ]);
    }

    public function upgradeSubmit(Request $request)
    {
        $request->validate([
            'reason' => 'required|string|min:10',
        ]);

        RoleRequest::create([
            'user_id' => auth()->id(),
            'reason' => $request->reason,
            'status' => 'pending',
        ]);

        return redirect()->route('user.upgrade.status')->with('success-upgrade', 'Upgrade request submitted successfully.');
    }

    public function roleRequestStatus()
    {
        $roleRequest = RoleRequest::where('user_id', auth()->id())->first();
        return view('user.role-request.role-request-status', compact('roleRequest'));
    }

    public function roleRequestDestroy($id)
    {
        $roleRequest = RoleRequest::findOrFail($id);
        $roleRequest->delete();
        return redirect()->route('user.upgrade.status')->with('success-upgrade', 'Upgrade request deleted successfully.');
    }

    public function destinationSubmit(Request $request){
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
