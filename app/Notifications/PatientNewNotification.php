<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;
use App\Patient;
class PatientNewNotification extends Notification
{
    use Queueable;
    private $name;
    private $doctorId;
    private $message;
    private $photo;
    private $orderId;
   
    
    public function __construct($name,$doctorId,$message,$photo,$orderId)
    {
        $this->name= $name;
        $this->doctorId= $doctorId;
        $this->message=$message;
        $this->photo=$photo;
        $this->orderId=$orderId;   
    }

    public function via($notifiable)
    {
        return ['database'];
    }

    public function toDatabase()
    {
        return[
            'name'=>  $this->name,
            'id'=>    $this->doctorId,
            'message'=>  $this->message,
            'photo'=> $this->photo,
            'orderId'=> $this->orderId,
        ];
    }    
    // public function toMail($notifiable)
    // {
    //     return (new MailMessage)
    //                 ->line('The introduction to the notification.')
    //                 ->action('Notification Action', url('/'))
    //                 ->line('Thank you for using our application!');
    // }

    public function toArray($notifiable)
    {
        return [
            //
        ];
    }
}
