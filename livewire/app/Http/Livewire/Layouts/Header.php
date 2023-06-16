<?php

namespace App\Http\Livewire\Layouts;

use Illuminate\Support\Facades\Log;
use Livewire\Component;

class Header extends Component
{


    protected $listeners = [
        'forTest' => 'myTest'
    ];

    public function myTest(){
        Log::info("this is from header");
    }

    public function render()
    {


        return view('livewire.layouts.header');
    }
}
