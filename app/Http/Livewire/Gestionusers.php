<?php

namespace App\Http\Livewire;

use Carbon\Carbon;
use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;
use Illuminate\Support\Facades\Hash;

class Gestionusers extends Component
{
    use WithPagination;
    public $First_name, $Last_name, $Email, $password;
    protected $data_users;
    public  $number_page = 5;
    public $Statutuser = 'all';
    public $RoleUser = 'all';
    public $search = '';


    public function Add_user()
    {
       $this->validate(
            [
                'First_name' => 'required',
                'Email' => ['email', 'required'], //'unique:users'
                'Last_name' => 'required',
                // 'Telephone' => ['required'],
                // 'Gen' => 'required',
                'password' => 'required|min:8|max:12',
            ]
        );
        // try {
        //     User::create([
        //         'First_name' => $this->First_name,
        //         'Last_name' => $this->Last_name,
        //         'Activation' => 0,
        //         'email' => $this->Email,
        //         'password' => Hash::make($this->password)
        //     ]);
        // } catch (\Throwable $th) {
        //     dd('erreur');
        // }
        //session success
    }
    public function Edit_user()
    {
        $validatedData = $this->validate(
            [
                'First_name' => 'required|min:6',
                'Email' => ['email', 'required'], //'unique:users'
                'Last_name' => 'required|min:6',
                // 'Telephone' => ['required'],
                // 'Gen' => 'required',
                'password' => 'required|min:8|max:12',
            ]
        );
        try {
            // User::update([
            //     'First_name' => $this->First_name,
            //     'Last_name' => $this->Last_name,
            //     'Activation' => 0,
            //     'email' => $this->Email,
            //     'password' => Hash::make($this->password)
            // ]);
        } catch (\Throwable $th) {
            dd('erreur');
        }
        //session success
    }
    //delete 1 users
    public function Delete_user()
    {
    }
    //delete all users
    public function Delete_all_users()
    {
    }
  //Render la page avec filtrage 
    public function render()
    {
            $data_users = User::query();
    
            if ($this->search !== '') {
                $data_users->where('Last_name', 'like', '%' . $this->search . '%')
                          ->orWhere('email', 'like', '%' . $this->search . '%')
                          ->paginate($this->number_page);
            }
    
            if ($this->RoleUser !== 'all') {
                    $data_users->where('role',$this->RoleUser)->paginate($this->number_page);
     
            }
    
            if ($this->Statutuser !== 'all') {
                if ($this->Statutuser == 'active') {
                    $data_users->where('Activation', '1')->paginate($this->number_page);
                } elseif ($this->Statutuser == 'inactive') {
                    $data_users->where('Activation', '0')->paginate($this->number_page);
                }
    
            }
    
            // if ($this->startDate !== null) {
            //     $users->whereDate('created_at', '>=', Carbon::parse($this->startDate));
            // }
    
            // if ($this->endDate !== null) {
            //     $users->whereDate('created_at', '<=', Carbon::parse($this->endDate));
            // }
    
            $data_users = $data_users->paginate($this->number_page);
    
            return view('livewire.gestionusers', compact('data_users'));
        }
    

    public function export()
    {
    }


    public function ed($id)
    {
        try {
            $user = User::findOrFail($id);
            if (!$user) {
                session()->flash('error', 'Post not found');
            } else {
                $this->Last_name = $user->Last_name;
                // $this->prenom = $user->Prenom;
                // $this->email = $user->email;
                // $this->user_id = $user->id;
                // $this->updateuser = true;
                // $this->adduser = false;
            }
        } catch (\Exception $ex) {
            session()->flash('error', 'Something goes wrong!!');
        }
    }
}
