<?php

namespace App\Http\Controllers;

use App\Models\contacts;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\WelcomeMail;

class EmailController extends Controller
{
    public function sendEmail(Request $request)
    {
        // Validate the form data
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'company' => 'nullable|string|max:255',
            'message' => 'required|string',
        ]);

        // Hidden email field for your own email
        $myEmail = $request->input('my_email');  // Hidden email input

        // Prepare the data for saving and email
        $data = [
            'name' => $validatedData['name'],
            'email' => $validatedData['email'],
            'company' => $validatedData['company'],
            'message' => $validatedData['message'],
        ];

        // Save the data in the contacts table
        contacts::create($data);

        // Send the email
        Mail::to($myEmail)->send(new WelcomeMail($data));

        // Return a success message
        return back()->with('success', 'Message sent successfully!');
    }
}
