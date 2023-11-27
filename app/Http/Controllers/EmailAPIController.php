<?php

namespace App\Http\Controllers;



use Google_Client;
//use Google\Service;
use Google_Service_Gmail;
use Illuminate\Support\Facades\Mail;

class EmailAPIController extends Controller
{
    //
    public function index()
    {
        $email = Mail::received();
        if($email === null){
            foreach(Mail::failures() as $failure){
                dd($failure);
            }
        }
       
        //$this->processEmail($email)
        
    }
//     public function processEmail($email){
//         $subject = $email->subject;
//         $body
//     }
 }
