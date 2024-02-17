<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;
use Illuminate\Support\Facades\Hash;
use Livewire\WithPagination;
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
            User::create([
                'First_name' => $this->First_name,
                'Last_name' => $this->Last_name,
                'Activation' => 0,
                'email' => $this->Email,
                'password' => Hash::make($this->password)
            ]);
        } catch (\Throwable $th) {
            dd('erreur');
        }
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
    public function mount()
    {
        $this->searchwithNameorEmail();
        // $this->data_users = User::paginate($this->number_page);
    }
    public function updateserach()
    {
        $this->resetPage();
        $this->searchwithNameorEmail();
    }
    public function searchwithNameorEmail()
    {
        // dd($value);
        // echo $this->search;
        if ($this->search == '') {
            $this->data_users = User::paginate($this->number_page);
        } else {
           // return $this->search;
            //dd($this->search);
            $this->data_users = User::where('id', $this->search)
                ->orwhere('Last_name', 'LIKE', '%' . $this->search . '%')
                ->orwhere('email', 'LIKE', '%' . $this->search . '%')
                ->paginate($this->number_page);
        }
    }
    public function selectrole($value)
    {
        //dd($value);
        if ($value == 'Admin') {
            $this->data_users = User::where('role', 'Admin')->paginate($this->number_page);
        } elseif ($value == 'User') {
            $this->data_users = User::where('role', 'User')->paginate($this->number_page);
        } else {
            $this->data_users = User::paginate($this->number_page);
        }
    }
    public function selectstatu($value)
    {
        if ($value == 'active') {
            $this->data_users = User::where('Activation', '1')->paginate($this->number_page);
        } elseif ($value == 'inactive') {
            $this->data_users = User::where('Activation', '0')->paginate($this->number_page);
        } else {
            $this->data_users = User::paginate($this->number_page);
        }
    }

    public function render()
    {
        
        return view(
            'livewire.gestionusers',
            ['data_users' => $this->data_users]
        );
    }

    public function export_csv()
    {
    }
    public function export_pdf()
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
