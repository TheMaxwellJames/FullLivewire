<?php

namespace App\Livewire\Forms;

use Livewire\Form;
use Livewire\Attributes\Rule;
use Livewire\Attributes\Validate;

class RegisterForm extends Form
{
    #[Rule('required')]
    public $name;

    #[Rule('required|email')]
    public $email;


    #[Rule('required|min:4')]
    public $password;
}
