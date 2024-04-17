<?php

namespace App\Livewire;

use App\Models\Product;
use Livewire\Component;
use Livewire\Attributes\Rule;

class CreateProducts extends Component
{
    #[Rule('required')]

    #[Rule('required')]
    public $title;

    #[Rule('required')]
    public $description;
    #[Rule('required')]
    public $price;

    public function render()
    {
        return view('livewire.create-products');
    }

    public function save()
    {
        $validatedData = $this->validate();
        Product::create($validatedData);
        session()->flash('status', 'product created');
        $this->reset();
    }


    public function close()
    {
        $this->reset();
    }
}
