<?php

namespace App\Notifications\admin;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class NewDestinationNotification extends Notification
{
    use Queueable;

    protected $destination;
    protected $creator;

    /**
     * Create a new notification instance.
     */
    public function __construct($destination, $creator)
    {
        $this->destination = $destination;
        $this->creator = $creator;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @return array<int, string>
     */
    public function via(object $notifiable): array
    {
        return ['database'];
    }

    /**
     * Get the array representation of the notification.
     *
     * @return array<string, mixed>
     */
    public function toArray(object $notifiable): array
    {
        return [
            'title' => 'Destinasi Baru',
            'message' => 'Destinasi "' . $this->destination->nama_destinasi . '" telah ditambahkan oleh "' . $this->creator->name . '"',
            'url' => route('admin.destination.index'),
            'type' => 'new_destination',
            'destination_id' => $this->destination->id,
        ];
    }
}
