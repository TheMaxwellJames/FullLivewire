<?php

namespace App\Livewire;
use Livewire\Attributes\Rule;

use Livewire\Component;

class RegisterUser extends Component
{
    #[Rule('required')]
    public $name;

    #[Rule('required|email|unique:users')]
    public $email;


    #[Rule('required|min:4')]
    public $password;
    public function render()
    {
        return view('livewire.register-user');
    }


    public function SaveUser()
    {
        $this->validate();
    }
}
