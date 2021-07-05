<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;

// MODELOS
use App\Models\Category;
use App\Models\Tag;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Storage::deleteDirectory('posts');
        Storage::makeDirectory('posts'); // Creamos una carpeta, apunta directamente a "public/storage/"

        $this->call(RoleSeeder::class);
        $this->call(UserSeeder::class);

        Category::factory(4)->create();
        Tag::factory(8)->create();
        
        $this->call(PostSeeder::class);
    }
}
