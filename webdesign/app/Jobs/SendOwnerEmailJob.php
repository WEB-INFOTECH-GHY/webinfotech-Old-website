<?php

namespace App\Jobs;

use App\Models\ContactMessage;
use App\Mail\OwnerNotificationMail;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Mail;

class SendOwnerEmailJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    public $contact;

    public function __construct(ContactMessage $contact)
    {
        $this->contact = $contact;
    }

    public function handle()
    {
        // Send email to owner
        Mail::to('rajababumahato2003@gmail.com')->send(new OwnerNotificationMail($this->contact));
    }
}
