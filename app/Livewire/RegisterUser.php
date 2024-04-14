<?php

namespace App\Livewire;
//use Livewire\Attributes\Rule;

use Livewire\Component;
use Illuminate\Support\Facades\Validator;


class RegisterUser extends Component
{
   // #[Rule('required')]
    public $name;

   // #[Rule('required|email|unique:users')]
    public $email;


    //#[Rule('required|min:4')]
    public $password;
    public function render()
    {
        return view('livewire.register-user');
    }

    // public function rules()
    // {
    //     return[
    //         'name'=>'required',
    //         'email'=>'required',
    //         'password'=>'required|min:4'
    //     ];
    // }


    public function SaveUser()
    {
        // $this->validate();

    //    $validated=$this->validate([
    //         'name'=>'required',
    //         'email'=>'required|unique:users|email',
    //         'password'=>'required|min:4',
    //    ]);
    $validated=Validator::make(
        [
            //Data being validated
            'name'=>$this->name,
            'email'=>$this->email,
            'password'=>$this->password

        ],

        [
            'name'=>'required',
            'email'=>'required|unique:users|email',
            'password'=>'required|min:7'
        ],

        [
            'required'=>'This field is required'
        ]
         )->validate();
    }
}
