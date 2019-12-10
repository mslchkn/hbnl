<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class AdminNotification extends Mailable {
    use Queueable, SerializesModels;

    public function build()
    {
        return $this->from('maslechkin.v@gmail.com')
            ->view('mail.admin');
    }

}
