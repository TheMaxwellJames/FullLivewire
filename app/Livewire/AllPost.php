<?php

namespace App\Livewire;

use App\Models\Post;
use Livewire\Component;
use Livewire\WithPagination;

class AllPost extends Component
{
    use WithPagination;
    public $posts_per_page=3;
    public function render()
    {
        $posts=Post::paginate($this->posts_per_page);
        return view('livewire.all-post',[
            'posts'=>$posts
        ]);
    }


    public function loadMore()
    {
        $this->posts_per_page +=6;
    }
}


