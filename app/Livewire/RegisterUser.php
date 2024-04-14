<?php

namespace App\Livewire;
//use Livewire\Attributes\Rule;

use Livewire\Component;
use Livewire\Attributes\Rule;
use App\Livewire\Forms\RegisterForm;
use Illuminate\Support\Facades\Validator;


class RegisterUser extends Component
{

    public RegisterForm $form;

    public function render()
    {
        return view('livewire.register-user');
    }




    public function SaveUser()
    {
         $this->form->validate();


    }
}
