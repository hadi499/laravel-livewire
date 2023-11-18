<?php

namespace App\Livewire\Posts;

use App\Models\Post;
use Livewire\Attributes\On;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Posts')]

class Index extends Component
{

    #[On('postCreated')]
    public function updatedList($post)
    {
    }

    public function render()
    {
        return view('livewire.posts.index', [
            'posts' => Post::query()->with('user')->latest()->get()
        ]);
    }
}
