<?php

namespace App\Http\Controllers;

use App\Mail\ContactFormMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Models\SiteSetting;

class ContactController extends Controller
{
    public function submit(Request $request)
    {
        $siteSettings = SiteSetting::first();
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'subject' => 'required|string|max:255',
            'message' => 'required|string',
        ]);

        Mail::to($siteSettings->contact_email)
            ->send(new ContactFormMail(
                name: $validated['name'],
                userEmail: $validated['email'],
                messageSubject: $validated['subject'],
                messageContent: $validated['message']
            ));

        return back()->with('success', __('messages.email_sent'));
    }
}