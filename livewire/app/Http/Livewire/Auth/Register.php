<?php

namespace App\Http\Livewire\Auth;

use Livewire\Component;

class Register extends Component
{
    public function register(){
        dd('good job');
    }

    public function render()
    {
        return view('livewire.auth.register' , ['name' => 'yasin']);
    }
}
