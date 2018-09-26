<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;

class ResetPassword extends Notification
{
    use Queueable;
    public $token; 

    /**
     * @DateCreated         26-September-2018
     * @ShortDescription    Create a new notification instance.
     * @param string $token 
     */
    public function __construct($token)
    {
        $this->token = $token;
    }

    /**
     * @DateCreated         26-September-2018
     * @ShortDescription    Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['mail'];
    }

    /**
     * @DateCreated         26-September-2018
     * @ShortDescription    Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
        return (new MailMessage)
        ->subject('Reset Password Notification ')
                    ->line('The introduction to the notification.')
                    ->action('Reset Password', url('password/reset',$this->token))
                    ->line('Thank you for using our application!');
    }

    /**
     * @DateCreated         26-September-2018
     * @ShortDescription    Get the array representation of the notification.
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
