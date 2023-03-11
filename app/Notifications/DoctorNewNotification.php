<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;
use App\Doctor;
class DoctorNewNotification extends Notification
{
    use Queueable;
    private $name;
    private $idd;
    private $message;
    private $photo;
    private $title;
    private $desc;
    
    public function __construct($name,$idd,$message,$photo,$title,$desc)
    {
        $this->name= $name;
        $this->idd= $idd;
        $this->message=$message;
        $this->photo=$photo;
        $this->title=$title;
        $this->desc=$desc;
    }

    public function via($notifiable)
    {
        return ['database'];
    }

    public function toDatabase()
    {
        return[
            'name'=>  $this->name,
            'id'=>    $this->idd,
            'message'=>    $this->message,
            'photo'=> $this->photo,
            'title'=> $this->title,
            'data'=>  $this->desc
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
