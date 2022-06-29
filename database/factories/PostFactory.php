<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Category;
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition() 
    {
        return [
            'title' => $this->faker->text(50),
            'images' => [
                            $this->faker->imageUrl(640, 480),
                            $this->faker->imageUrl(640, 480),
                            $this->faker->imageUrl(640, 480),
                            $this->faker->imageUrl(640, 480)
            ],
            'content' => $this->faker->text(1000),
        ];
    }
}
