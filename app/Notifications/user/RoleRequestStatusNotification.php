<?php

namespace App\Notifications\user;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class RoleRequestStatusNotification extends Notification
{
    use Queueable;

    protected $status;

    public function __construct($status)
    {
        $this->status = $status; // status: 'approved' | 'rejected' | 'pending'
    }

    public function via(object $notifiable): array
    {
        return ['database'];
    }

    public function toArray(object $notifiable): array
    {
        $statusText = match($this->status) {
            'approved' => 'Upgrade akun kamu telah disetujui! 🎉',
            'rejected' => 'Upgrade akun kamu ditolak. Silakan hubungi admin untuk informasi lebih lanjut.',
            'pending' => 'Permintaan upgrade akun kamu sedang diproses.',
            default => 'Status upgrade akun tidak diketahui.'
        };

        return [
            'title' => 'Status Upgrade Akun',
            'message' => $statusText,
            'url' => route('user.upgrade.status'), // atau route ke halaman yang relevan
            'type' => 'account_upgrade_status',
            'status' => $this->status,
        ];
    }
}
