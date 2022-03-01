<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ProfileFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [

            'image_profile_url'=>$this->faker->imageUrl,
            'image_cover_url'=>$this->faker->imageUrl,
            'biography'=>$this->faker->text(190),
            'birth_date'=>$this->faker->dateTime,
            'gender'=>$this->faker->randomElement(['male','female']),
            'user_id'=>$this->faker->numberBetween(1,10),
        ];
    }
}
