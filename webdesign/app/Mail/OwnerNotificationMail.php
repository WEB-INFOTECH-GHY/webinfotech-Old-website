<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use App\Models\ContactMessage;

class OwnerNotificationMail extends Mailable
{
    use Queueable, SerializesModels;

    public $data;

public function __construct($data)
{
    $this->data = $data;
}

public function build()
{
    return $this->subject('New Contact Form Submission')
                ->markdown('emails.owner_notification')
                ->with($this->data);
}
}
