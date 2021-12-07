<?php

namespace Database\Factories;

use App\Models\Posts;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
class PostsFactory extends Factory
{

    protected $model = Posts::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "is_active"=> (bool)random_int(0,1),
            "post"=> $this->faker->title(),
        ];
    }
}
