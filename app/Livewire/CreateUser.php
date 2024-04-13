<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;

class CreateUser extends Component
{
    //public $users;
    public $name="Maxwell";
    public function render()
    {
        return view('livewire.create-user', [
            'email'=>'Max@gmail.com',
            'users'=>User::all()
        ]);
    }


    // public function mount()
    // {
    //     $this->users=User::all();
    // }
}
