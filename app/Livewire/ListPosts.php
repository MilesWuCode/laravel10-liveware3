<?php

namespace App\Livewire;

use App\Models\Post;
use Livewire\Component;
use Livewire\WithPagination;

class ListPosts extends Component
{
    use WithPagination;

    public function render()
    {
        return view('livewire.list-posts', [
            'posts' => Post::paginate(3),
        ]);
    }
}
