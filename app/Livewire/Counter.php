<?php

namespace App\Livewire;
//use Livewire\Attributes\Title;
// use Livewire\Attributes\Layout;
use Livewire\Component;

class Counter extends Component
{

    public $count = 0;
    public $limit = 5;

   // #[Title('Counter Page')]
//    #[Layout('components.layouts.app')]
    public function render()
    {
        return view('livewire.counter');
        // ->layoutData([
        //     'MetaKeys'=> 'Key1, key2, Key3',
        //     'MetaDescription'=>'Some Description',
        //     'MetaAuthor'=>'James Maxwell',
        //     'title'=>'Awesome Count'
        // ])->layout('components.layouts.app')
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
