<?php

namespace App\Http\Livewire\Auth;

use App\Models\User;
use Livewire\Component;

class Register extends Component
{
    // public $name;
    // public $email;
    // public $password;

    public User $user;

    public function mount(){
        $this->user = new User();
    }

    protected $rules = [
        'user.name' => 'required|min:6',
        'user.email' => 'required|email|unique:users,email',
        'user.password' => 'required|min:8'

    ];

    public function updated($name){

        $this->validateOnly($name);

    }

    public function register(){

        $this->validate();

        $this->user->password = bcrypt($this->user->password);
        $this->user->save();

        $this->user->password = '';

        redirect('/');
    }

    public function render()
    {
        return view('livewire.auth.register');
    }
}
