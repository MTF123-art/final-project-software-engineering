<?php

namespace App\Notifications\admin;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class NewCustomerMessageNotification extends Notification
{
    use Queueable;

    protected $message;
    protected $customer;

    /**
     * Create a new notification instance.
     */
    public function __construct($message, $customer)
    {
        $this->message = $message;
        $this->customer = $customer;
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
            'title' => 'Pesan Baru dari Customer',
            'message' => 'Pesan baru diterima dari "' . $this->customer.'".',
            'url' => route('admin.customer-message.show', ['id' => $this->message->id]),
            'type' => 'new_customer_message',
            'message_id' => $this->message->id,
        ];
    }
}
