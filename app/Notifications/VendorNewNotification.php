<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;
use App\Vendor;
class VendorNewNotification extends Notification
{
    use Queueable;
    private $vendorId;
    private $message;
    private $orderId;
   
    
    public function __construct($vendorId,$message,$orderId)
    {
        $this->vendorId= $vendorId;
        $this->message=$message;
        $this->orderId=$orderId;   
    }

    public function via($notifiable)
    {
        return ['database'];
    }

    public function toDatabase()
    {
        return[
            'id'=>    $this->vendorId,
            'message'=>  $this->message,
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
