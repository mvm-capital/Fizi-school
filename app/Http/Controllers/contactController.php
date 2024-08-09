<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactForm;
use Illuminate\Http\Request;

class contactController extends Controller
{
    public function sendEmail(Request $request)
    {
        // Validate the form data
        $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|email',
            'message' => 'required',
        ]);

        // Send email using Laravel Mail
        $details = [
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'message' => $request->message,
        ];

        Mail::to('your-email@example.com')->send(new ContactForm($details));

        return redirect()->back()->with('message', 'Message sent successfully!');
    }
    //
}
