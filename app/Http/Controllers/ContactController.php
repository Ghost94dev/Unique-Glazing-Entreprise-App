<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function send(Request $request)
    {
        // Validate the incoming request data
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'nullable|string|max:20',
            'message' => 'required|string',
        ]);

        Mail::raw(
            "Name: {$validatedData['name']}
                   Email: {$validatedData['email']}
                   Phone: " . ($validatedData['phone'] ?? 'Not provided') . "
                   Message: {$validatedData['message']}",
            function ($message) {
                $message->to('uniqueglazing42@gmail.com')
                    ->subject('New Contact Message');
            }
        );
        return back()->with('success', 'Message sent successfully!');
    }
}
