<?php

namespace App\Http\Livewire\Auth;

use App\Models\User;
use Illuminate\Support\Facades\Log;
use Livewire\Component;

class Register extends Component
{
    // public $name;
    // public $email;
    // public $password;

    public User $user;

    public function mount(){
        Log::info('mount method');

        $this->user = new User();
    }


    public function hydrate(){
        Log::info('hydrate method');
    }

    public function dehydrate(){
        Log::info('dehydrate method');
    }

    protected $rules = [
        'user.name' => 'required|min:6',
        'user.email' => 'required|email|unique:users,email',
        'user.password' => 'required|min:8'

    ];

    public function updatedUserEmail($value , $name){

        dd($value);

    }


    // public function updated($name , $value){

    //     $this->validateOnly($name);

    // }

    public function register(){

        $this->validate();

        $this->user->password = bcrypt($this->user->password);
        $this->user->save();

        $this->user->password = '';

        redirect('/');
    }

    public function render()
    {
        Log::info('render method');

        return view('livewire.auth.register');
    }
}
