<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

// MODELOS
use App\Models\Post; // MODELO PADRE
use App\Models\Category;
use App\Models\User;

class PostFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Post::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $name = $this->faker->unique()->sentence();
        return [
            'name'    => $name,
            'slug'    => Str::slug($name),
            'extract' => $this->faker->text(250),
            'body'    => $this->faker->text(750),
            'status'  => $this->faker->randomElement([1, 2]),

            // FORANEAS
            'category_id' => Category::all()->random()->id,
            'user_id'     => User::all()->random()->id
        ];
    }
}
