<?php

namespace App\Notifications\admin;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class NewRoleRequestNotification extends Notification
{
    use Queueable;

    protected $user;

    public function __construct($user)
    {
        $this->user = $user;
    }

    public function via(object $notifiable): array
    {
        return ['database'];
    }


    public function toArray(object $notifiable): array
    {
        return [
            'title' => 'Permintaan Perubahan Role',
            'message' => 'Pengguna "' . $this->user->name . '" telah mengajukan permintaan untuk mengubah perannya menjadi pengelola destinasi.',
            'url' => route('admin.role-request.index'),
            'type' => 'new_role_request',
            'user_id' => $this->user->id,
        ];
    }
}
