<?php

namespace App\Notifications\pengelola;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class NewReviewNotification extends Notification
{
    use Queueable;

     protected $destinasi;
    protected $reviewer;
    protected $rating;
    protected $komentar;

    /**
     * Create a new notification instance.
     */
    public function __construct($destinasi, $reviewer)
    {
        $this->destinasi = $destinasi;
        $this->reviewer = $reviewer;
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
            'title' => 'Review Baru pada Destinasi Anda',
            'message' => 'Destinasi anda telah mendapatkan rating ' . ($this->rating / 10) . ' ★ dari ' . $this->reviewer->name . '.',
            'url' => route('pengelola.review.index'),
            'type' => 'new_review',
            'destination_id' => $this->destinasi->id,
        ];
    }
}
