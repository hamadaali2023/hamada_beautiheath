<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SendPassword extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
     public $data;

    public function __construct($data)
    {
        $this->data = $data;
    }

    public function build()
    {
        // return $this->from('hamadaali221133@gmail.com')
        //         ->view('emails.forgot');

        $address = 'hamadaali221133@gmail.com';
        $subject = 'صحتي وجمالي - كلمة مرور جديدة';
        $name = 'صحتي وجمالي';

        return $this->view('emails.forgot')
                    ->from($address, $name)
                    ->cc($address, $name)
                    ->bcc($address, $name)
                    ->replyTo($address, $name)
                    ->subject($subject)
                    ->with([ 'new_password' => $this->data['body'] ]);
    }
}
