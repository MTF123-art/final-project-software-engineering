<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\Destinasi;
use App\Models\Galeri;
use App\Models\Kategori;
use App\Models\RoleRequest;
use App\Models\User;
use App\Notifications\admin\NewDestinationNotification;
use App\Notifications\admin\NewRoleRequestNotification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Notification;
use Illuminate\Support\Str;

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
        $admins = User::where('role', 'admin')->get();
        Notification::send($admins, new NewRoleRequestNotification(Auth::user()));
        return redirect()->route('user.upgrade.status')->with('success-upgrade', 'Upgrade request submitted successfully.');
    }

    public function roleRequestStatus()
    {
        $kategori = Kategori::get();
        $roleRequest = RoleRequest::where('user_id', auth()->id())->first();
        return view('user.role-request.role-request-status', compact('roleRequest', 'kategori'))
            ->with('title', 'Role Request Status');
    }

    public function roleRequestDestroy($id)
    {
        $roleRequest = RoleRequest::findOrFail($id);
        $roleRequest->delete();
        return redirect()->route('user.upgrade')->with('success-upgrade', 'Upgrade request deleted successfully.');
    }

    public function destinationSubmit(Request $request)
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
        $user->role = 'pengelola';
        $user->save();

        $admins = User::where('role', 'admin')->get();
        Notification::send($admins, new NewDestinationNotification($destinasi, Auth::user()));

        Auth::logout();

        return redirect()->route('login-form')->with('success', 'Destinasi berhasil ditambahkan! silahkan login ulang dan kelola destinasi anda.');
    }
}
