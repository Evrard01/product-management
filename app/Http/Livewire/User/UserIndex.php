<?php

namespace App\Http\Livewire\User;

use App\Models\Abilitation;
use App\Models\User;
use Livewire\Component;

class UserIndex extends Component
{
    protected $paginationTheme = 'bootstrap';
    public $nom="";
    public $email="";
    public $abilitation="";
    public $abilitations;
    public $createUpdateMode=false;
    public $showMode=false;
    public $users;
    public $user;

    public function showUser($user)
    {
        $this->showMode=true;
        $this->user= User::find($user);
    }

    public function back()
    {
        $this->showMode=false;
    }

    public function updateUser($user)
    {
        $this->createUpdateMode=true;
        $this->abilitations = Abilitation::all();
        $user = $this->user;
        $this->nom = $user->name;
        $this->email = $user->email;
        $this->abilitation = $user->abilitation_id;
    }

    public function update()
    {
        $validation=$this->validate([
            'nom'=>'required|unique:users,name,'.$this->user->id,
            'email'=>'required|unique:users,email,'.$this->user->id,
        ]);
        $user = $this->user;
        $user->name = $this->nom;
        $user->email =$this->email;
        $user->abilitation_id = $this->abilitation;
        $user->save();
        return redirect()->route('utilisateurs.index');

    }

    public function storeUser()
    {
        $this->createUpdateMode=true;
        $this->validate([
            "nom"=>"required|max:15",
            "email"=>"required|email|unique:users,name",
            "abilitation"=>"required|integer"
        ]);

        // dump($validation);
        $user = User::create([
            "abilitation_id"=>$this->abilitation,
            "name"=>$this->nom,
            "email"=>$this->email,
            "password"=>'$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
            'email_verified_at' => now(),
        ]);
        session()->flash('message', $user->name.'bien');
        return redirect()-> route('utilisateurs.index');
        $this->reset(['nom','email','abilitation']);
        $this->createUpdateMode=false;
    }

    public function createUser()
    {
        $this->createUpdateMode=true;
        $this->abilitations = Abilitation::all();
    }


    public function resetFilters()
    {
        $this->createUpdateMode=false;
        $this->reset(['nom','email','abilitation']);
        $this->resetErrorBag(['nom','email','abilitation']);
    }


    public function mount()
    {
        $this->users = User::all();
    }

    public function render()
    {
        return view('livewire.user.user-index');
    }
}
