<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ProfileHashtagFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'profile_id'=>$this->faker->numberBetween(1,10),
            'hashtag_id'=>$this->faker->numberBetween(1,10),
        ];
    }
}
