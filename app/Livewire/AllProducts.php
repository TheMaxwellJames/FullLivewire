<?php

namespace App\Livewire;

use App\Models\Product;
use Livewire\Component;

class AllProducts extends Component
{
    public $products;

    public function mount()
    {
        $this->products=Product::all();
    }
    public function render()
    {
        return view('livewire.all-products');
    }


    // public function deleteProduct($productId)
    // {
    //     $product = Product::findOrFail($productId);
    //     $product->delete();
    //     // You may also add a message or emit an event here to notify the user
    // }


}
