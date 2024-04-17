<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\User;
use Livewire\WithPagination;
class AllUsers extends Component
{
    use WithPagination;
    public function render()
    {
        return view('livewire.all-users', [
            'users'=>User::cursorPaginate(5),
        ]);
    }
}
