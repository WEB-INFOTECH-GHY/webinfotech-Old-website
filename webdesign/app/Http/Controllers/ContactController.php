<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ContactMessage;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use App\Mail\OwnerNotificationMail;

class ContactController extends Controller
{
    public function store(Request $request)
    {
        try {
            // 1️⃣ Validate
            $validated = $request->validate([
                'name'    => 'required|string|max:255',
                'email'   => 'nullable|email:rfc,dns|max:255',
                'number'  => 'required|digits_between:7,15',
                'message' => 'required|string|max:2000',
            ]);

            // 2️⃣ Store in database
            $contact = ContactMessage::create($validated);

            // 3️⃣ Prepare data for email
            $data = [
                'name'    => $contact->name,
                'email'   => $contact->email ?? 'N/A',
                'number'  => $contact->number,
                'message' => $contact->message,
            ];

            // 4️⃣ Send response to user immediately
            $response = redirect()->to('/thankyou')->with('success', 'Thank you! Your message has been received.');
            $response->send(); // Send response now

            // 5️⃣ Continue sending email in background
            if (function_exists('fastcgi_finish_request')) {
                fastcgi_finish_request(); // PHP sends response, continues executing
            }

            // 6️⃣ Send email to owner
            Mail::to('webinfotech014@gmail.com')->send(new OwnerNotificationMail($data));

        } catch (\Throwable $e) {
            // Log error
            Log::error('Contact form submission failed: '.$e->getMessage());

            // Redirect back with error
            return redirect()
                ->back()
                ->withInput()
                ->with('error', 'Sorry, your form could not be submitted. Please try again.');
        }
    }
}
