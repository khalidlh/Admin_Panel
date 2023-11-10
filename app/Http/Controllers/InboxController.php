<?php

namespace App\Http\Controllers;

use App\Mail\MessageMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class InboxController extends Controller
{
    //
    public function sendMessage(Request $request)
    {
        // Validate the message data.
        $request->validate([
            'subject' => 'required',
            'body' => 'required',
            'recipients' => 'required',
        ]);

        // Send the message to the recipients.
        foreach ($request->recipients as $recipient) {
            Mail::to($recipient)->send(new MessageMail($request->all()));
        }

        return response()->json([
            'success' => true,
        ]);
    }
}
