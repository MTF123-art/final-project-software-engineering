<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class NotificationController extends Controller
{
    public function index()
    {
        $title = 'Notifikasi Saya';
        $notifications = Auth::user()->notifications()->latest()->get();

        return view('admin.notification.index', compact('title', 'notifications'));
    }

    public function markAllAsRead()
    {
        Auth::user()->unreadNotifications->markAsRead();

        session()->flash('success', 'Semua notifikasi telah ditandai sebagai sudah dibaca.');
        return redirect()->route('admin.notification.index');
    }


    public function deleteAll()
    {
        Auth::user()->notifications()->delete();

        session()->flash('success', 'Semua notifikasi telah dihapus.');
        return redirect()->route('admin.notification.index');
    }


    public function markAsRead($id)
    {
        $notification = Auth::user()->notifications()->findOrFail($id);
        $notification->markAsRead();

        session()->flash('success', 'Notifikasi telah ditandai sebagai sudah dibaca.');
        return redirect()->route('admin.notification.index');
    }

    /**
     * Hapus satu notifikasi user
     */
    public function delete($id)
    {
        $notification = Auth::user()->notifications()->findOrFail($id);
        $notification->delete();

        session()->flash('success', 'Notifikasi telah dihapus.');
        return redirect()->route('admin.notification.index');
    }
}
