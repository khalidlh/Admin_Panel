<?php

namespace App\Http\Controllers;

use Vonage\SMS\Message\SMS;
use Illuminate\Http\Request;

class NotificationController extends Controller
{
    //
    public function sendsms()
    {
        $basic  = new \Vonage\Client\Credentials\Basic("c9e26963", "DFvCDcKgdUr0wtej");
        $client = new \Vonage\Client($basic);
        $response = $client->sms()->send(
            new \Vonage\SMS\Message\SMS("212667211796", 'Khalid app', 'A text message sent using the Nexmo SMS API')
        );

        $message = $response->current();

        if ($message->getStatus() == 0) {
            echo "The message was sent successfully\n";
        } else {
            echo "The message failed with status: " . $message->getStatus() . "\n";
        }


        //         $client = new \Vonage\Client(new \Vonage\Client\Credentials\Basic('c9e26963', 'DFvCDcKgdUr0wtej'));

        // $response = $client->sms()->send(
        //     new SMS("212643020788", 'YOUR_BRAND_NAME_OR_MESSAGE', 'A text message sent using the Vonage SMS API')
        // );

        // $message = $response->current();

        // if ($message->getStatus() == 0) {
        //     echo "The message was sent successfully\n";
        // } else {
        //     echo "The message failed with status: " . $message->getStatus() . "\n";
        // }

    }
}
