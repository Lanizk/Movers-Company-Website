<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ContactMail;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function send(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:100',
            'email' => 'required|email',
            'phone' => 'required|string|max:20',
            'service' => 'required|string',
            'subject' => 'required|string|max:150',
            'message' => 'required|string|max:1000',
        ]);

        Mail::to(config('mail.from.address'))->send(new ContactMail($validated));

        return back()->with('success', 'Your message has been sent successfully!');
    }
}
