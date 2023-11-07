<?php

namespace App\Livewire;

use App\Models\Post;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Rule;
use Livewire\Attributes\Title;
use Livewire\Component;

class CreatePost extends Component
{
    #[Rule('required|min:10')]
    public $title;

    public $content;

    #[Layout('components.layouts.app')]
    #[Title('Create Post')]
    public function render()
    {
        return view('livewire.create-post');

        // ->with([
        //     'status' => 'status',
        // ]);

        // ->layout('components.layouts.app')
        // ->title('Create Post');
    }

    public function save()
    {
        $this->validate();

        Post::create([
            'title' => $this->title,
            'content' => $this->content,
        ]);

        // Post::create(
        //     $this->only(['title', 'content'])
        // );

        return redirect()->to('/posts')
            ->with(['status' => 'Post created!']);
    }
}
