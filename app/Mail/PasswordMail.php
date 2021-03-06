<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class PasswordMail extends Mailable
{
    use Queueable, SerializesModels;
    public $mailall;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($mailall)
    {
        // 
        $this->mailall = $mailall;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        
        return $this->subject('Password Reset Request')->view('email.passwordmail');
        //return $this->view('view.name');
    }
}
