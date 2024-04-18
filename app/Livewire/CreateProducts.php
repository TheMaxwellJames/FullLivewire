<?php

namespace App\Livewire;

use App\Models\Product;
use Livewire\Component;
use Livewire\Attributes\On;
use Livewire\Attributes\Rule;

class CreateProducts extends Component
{
    public $product;
    public $formtitle='Create Product';
    public $editform=false;

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
        $this->dispatch('refresh-products');
        session()->flash('status', 'product created');
        $this->reset();
    }


    public function close()
    {
        $this->reset();
    }


    #[On('edit-mode')]
    public function edit($id)
    {
        // dd($id);
        $this->editform=true;
        $this->formtitle='Edit Product';
        $this->product=Product::findOrFail($id);
        $this->title=$this->product->title;
        $this->description=$this->product->description;
        $this->price=$this->product->price;


    }

    public function update()
    {
        $validated=$this->validate();
        $p=Product::findOrFail($this->product->id);
        $p->update($validated);
        $this->dispatch('refresh-products');
        session()->flash('status', 'Product Updated');
    }





}
