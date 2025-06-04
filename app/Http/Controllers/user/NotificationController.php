<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class NotificationController extends Controller
{
    public function index()
    {
        $title = 'Notifikasi Saya';
        $notifications = Auth::user()->notifications()->latest()->get();

        return view('user.notification.index', compact('title', 'notifications'));
    }

    public function markAllAsRead()
    {
        Auth::user()->unreadNotifications->markAsRead();

        session()->flash('success', 'Semua notifikasi telah ditandai sebagai sudah dibaca.');
        return redirect()->route('user.notification.index');
    }


    public function deleteAll()
    {
        Auth::user()->notifications()->delete();

        session()->flash('success', 'Semua notifikasi telah dihapus.');
        return redirect()->route('user.notification.index');
    }


    public function markAsRead($id)
    {
        $notification = Auth::user()->notifications()->findOrFail($id);
        $notification->markAsRead();

        session()->flash('success', 'Notifikasi telah ditandai sebagai sudah dibaca.');
        return redirect()->route('user.notification.index');
    }

    /**
     * Hapus satu notifikasi user
     */
    public function delete($id)
    {
        $notification = Auth::user()->notifications()->findOrFail($id);
        $notification->delete();

        session()->flash('success', 'Notifikasi telah dihapus.');
        return redirect()->route('user.notification.index');
    }
}
