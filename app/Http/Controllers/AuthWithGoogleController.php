<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;

class AuthWithGoogleController extends Controller
{
    //
    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }

    public function handleGoogleCallback()
    {
        $user = Socialite::driver('google')->user();

        // Save the user to your database
        // ...
          dd($user);
        // Log the user in
        // auth()->login($user);

        // Redirect the user to the home page
        return 'hi khalid';
    }
}
