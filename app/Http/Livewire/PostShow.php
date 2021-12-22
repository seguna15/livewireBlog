<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Post;

class PostShow extends Component
{
    public $post;

    public function mount($slug){
        $this->post = Post::where('slug', $slug)->first();
    }

    public function render()
    {
        return view('livewire.post-show')->layout('layouts.guest');
    }
}
