<?php

namespace App\Notifications\admin;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class NewReviewNotification extends Notification
{
    use Queueable;

    protected $review;
    protected $destination;
    protected $reviewer;

    /**
     * Create a new notification instance.
     */
    public function __construct($review, $destination, $reviewer)
    {
        $this->review = $review;
        $this->destination = $destination;
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
            'title' => 'Review Baru',
            'message' => 'Pengguna "' . $this->reviewer->name . '" telah menulis review baru untuk destinasi "' . $this->destination->nama_destinasi . '".',
            'url' => route('admin.review-management.index'),
            'type' => 'new_review',
            'review_id' => $this->review->id,
            'destination_id' => $this->destination->id,
        ];
    }
}
