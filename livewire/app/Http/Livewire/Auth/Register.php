<?php

namespace App\Http\Livewire\Auth;

use Livewire\Component;

class Register extends Component
{
    public $name;
    public $email;
    public $password;

    public function register(){
        dd($this->name);
    }

    public function render()
    {
        return view('livewire.auth.register');
    }
}
