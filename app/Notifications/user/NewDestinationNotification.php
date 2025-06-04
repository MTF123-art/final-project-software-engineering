<?php

namespace App\Notifications\user;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class NewDestinationNotification extends Notification
{
    use Queueable;

    protected $destination;
    protected $creator;

    public function __construct($destination, $creator)
    {
        $this->destination = $destination;
        $this->creator = $creator;
    }

    public function via(object $notifiable): array
    {
        return ['database'];
    }

    public function toArray(object $notifiable): array
    {
        return [
            'title' => 'Destinasi Baru',
            'message' => 'Destinasi "' . $this->destination->nama_destinasi . '" telah ditambahkan oleh "' . $this->creator->name . '"',
            'url' => route('detail-destination', ['slug' => $this->destination->slug]),
            'type' => 'new_destination',
            'destination_id' => $this->destination->id,
        ];
    }
}
