<?php

namespace App\Notifications\user;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class UpdateDestinationNotification extends Notification
{
    use Queueable;

    protected $destination;
    protected $updater;
    protected $kolom;

    public function __construct($destination, $updater, $kolom = '')
    {
        $this->updater = $updater;
        $this->kolom = $kolom;
        $this->destination = $destination;
    }

    public function via(object $notifiable): array
    {
        return ['database'];
    }

    public function toArray(object $notifiable): array
    {
        return [
            'title' => 'Destinasi Diperbarui',
            'message' => $this->kolom . 'Destinasi "' . $this->destination->nama_destinasi . '" yang kamu bookmark telah diperbarui oleh ' . $this->updater->name . '.',
            'url' => route('detail-destination', ['slug' => $this->destination->slug]),
            'type' => 'update_destination',
            'destination_id' => $this->destination->id,
        ];
    }
}
