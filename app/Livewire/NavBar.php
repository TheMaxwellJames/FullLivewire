<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Lazy;

class NavBar extends Component
{

    #[Lazy]
    public function placeholder()
    {
        return <<<'HTML'


        <div class="placeholder-glow">
            <div class="placeholder col-12">

            </div>
        </div>



        HTML;
    }
    public function render()
    {
        sleep(5);
        return view('livewire.nav-bar');
    }
}
