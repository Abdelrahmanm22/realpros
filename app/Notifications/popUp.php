<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class popUp extends Notification
{
    use Queueable;
    private $adminName;
    private $sender;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($adminName,$sender)
    {
        $this->adminName=$adminName;
        $this->sender = $sender;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
        $url = 'http://127.0.0.1:8000/balo/popup';
        $dateTime = now()->format('Y-m-d H:i:s');
        return (new MailMessage)
            ->greeting('Hello '.$this->adminName)
            ->subject('You Got New Message in PopUP contact at '. $dateTime)
            ->line('You Got a message from '.$this->sender)
            ->line('Please Check PopUp Contact Table..')
            ->action('Show Table', $url)
            ->line('Thank you for using our application!');
    }

    /**
     * Get the array representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function toArray($notifiable)
    {
        return [
            //
        ];
    }
}
