<?php

namespace App\Livewire;

use Livewire\Component;

class Counter extends Component
{

    public $count = 0;
    public $limit = 5;
    public function render()
    {
        return view('livewire.counter');
    }

    public function increase()
    {
        if($this->count<$this->limit)
        {
            $this->count++;
        }
        else {
            session()->flash('status', "The Count is too high");
        }

    }


    public function decrease()
    {
        if($this->count>0)
        {
            $this->count--;
        }
        else
        {
            session()->flash('status', "The Count is too low");
        }

    }


}
