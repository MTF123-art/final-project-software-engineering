<?php

namespace App\Notifications\pengelola;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class UpdateDestinationNotification extends Notification
{
    use Queueable;

     protected $destinasi;
    protected $admin;
    protected $updatedFields;

    public function __construct($destinasi, $admin, $updatedFields)
    {
        $this->destinasi = $destinasi;
        $this->admin = $admin;
        $this->updatedFields = $updatedFields;
    }

    public function via(object $notifiable): array
    {
        return ['database'];
    }

    public function toArray(object $notifiable): array
    {
        return [
            'title' => 'Destinasi Anda Telah Diperbarui',
            'message' => 'Destinasi "' . $this->destinasi->nama_destinasi . '" telah diperbarui oleh admin "' . $this->admin->name . '". Perubahan meliputi: ' . implode(', ', $this->updatedFields),
            'url' => route('pengelola.destination.index'),
            'type' => 'update_destination',
            'destination_id' => $this->destinasi->id,
            'updated_fields' => $this->updatedFields,
        ];
    }
}
