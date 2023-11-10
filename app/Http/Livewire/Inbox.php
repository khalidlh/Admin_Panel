<?php

namespace App\Http\Livewire;

use App\Models\Message;
use Livewire\Component;
use App\Mail\MessageMail;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class Inbox extends Component
{
    public $messages, $subject, $body, $recipients;

    // public function mount()
    // {
    //     $this->messages = Message::all();
    // }

    public function readMessage($messageId)
    {
        // Read the message from the database.
        $message = Message::find($messageId);
        // Mark the message as read.
        $message->read = true;
        $message->save();
    }

    public function deleteMessage($messageId)
    {
        // Delete the message from the database.
        Message::destroy($messageId);
    }

    public function sendMessage()
    {
        // Validate the message data.
        $this->validate([
            'subject' => 'required',
            'body' => 'required',
        ]);

        // Create a new message record in the database.
        $message = new Message();
        $message->sender = Auth::user()->id;
        $message->subject = $this->subject;
        $message->body = $this->body;
        $message->save();

        // Send the message to the recipients.
        foreach ($this->recipients as $recipient) {
            Mail::to($recipient)->send(new MessageMail($message));
        }

        // Clear the message data.
        $this->subject = '';
        $this->body = '';
        $this->recipients = [];
    }

    public function render()
    {
        return view('livewire.inbox');
    }
}
