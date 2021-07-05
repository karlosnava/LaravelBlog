<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

// MODELOS
use App\Models\Post;
use App\Models\Image;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $posts = Post::factory(300)->create();

        foreach ($posts as $post) {
            Image::factory(1)->create([
                'imageable_id' => $post->id,
                'imageable_type' => Post::class
            ]);
            $post->tags()->attach([
                rand(1, 4),
                rand(5,8)
            ]);
        }
    }
}
