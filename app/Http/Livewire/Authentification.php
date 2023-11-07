<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;
use App\Mail\PasswordForget;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

class Authentification extends Component
{
    public $TestEtatForm = 0;
    public $First_name, $Last_name, $Email, $telephone, $gen, $password, $password_confirmation;
    public $email_login, $password_login;
    public $email_oublier;
    public function Seconnecterform()
    {
        $this->TestEtatForm = 0;
    }
    public function Oubliermotepasseform()
    {
        $this->TestEtatForm = 2;
    }
    public function Sinscrireform()
    {
        $this->TestEtatForm = 1;
    }
    public function render()
    {
        return view('livewire.authentification');
    }
    public function store()
    {
        $validatedData = $this->validate(
            [
                'First_name' => 'required|min:6',
                'Email' => ['email', 'required', 'unique:users'],
                'Last_name' => 'required|min:6',
                // 'telephone' => ['required'],
                // 'gen' => 'required',
                'password' => 'required|min:8|max:12|confirmed',
            ]
        );
        try {
            User::create([
                'First_name' => $this->First_name,
                'Last_name' => $this->Last_name,
                'Activation' => 0,
                'email' => $this->Email,
                'password' => Hash::make($this->password)
            ]);
        } catch (\Throwable $th) {
            dd($this->Last_name);
        }
        dd($this->First_name);
    }
    public function login()
    {
        $validatedData = $this->validate(
            [
                'email_login' => ['email', 'required'],
                'password_login' => ['required', 'min:8', 'max:12']
            ]
        );
        $user = User::where('email', $this->email_login)->first();
        if ($user) {
            if (Hash::check($this->password_login, $user->password)) {
                return redirect()->route('getionusers');
            } else {
                dd($validatedData);
            }
        }
        dd($this->email_login);
    }

    public function resetPassword()
    {

        $validatedData = $this->validate(
            [
                'email_oublier' => ['email', 'required'],

            ]
        );
        $users = User::where('email', $this->email_oublier)->first();
        Mail::to($this->email_oublier)->send(new PasswordForget($users));
        return redirect()->route('login')->with('success', 'Un message a été envoyé à votre adresse e-mail');
    }
}
