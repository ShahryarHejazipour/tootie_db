<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ImageFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [

            'image_url'=>$this->faker->imageUrl,
            'image|_url_creation_time'=>$this->faker->time,
            'user_id'=>$this->faker->numberBetween(1,2),
        ];
    }
}
