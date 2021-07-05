<?php

namespace App\Observers;

use Illuminate\Support\Facades\Storage;

use App\Models\Post;

class PostObserver
{

    public function creating(Post $post)
    {
        if (! \App::runningInConsole()) {
            $post->user_id = auth()->user()->id;
        }
    }

    public function deleting(Post $post)
    {
        if ($post->image) {
            Storage::delete($post->image->url);
        }
    }
}
