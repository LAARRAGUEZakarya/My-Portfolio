<?php

namespace App\Http\Controllers;


use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function sendMail(Request $request)
    {
        $details = $request->validate([

            'name' => 'required|string',
            'email' => 'required|email',
            'message' => 'required|string',
        ]);

        Mail::to('laarraguezakarya@gmail.com')->send(new ContactMail($details));

        return redirect()->back()->with([
            'success' => "your message is sent successfully"
        ]);;
    }
}
