<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class FollowerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'follower_creation_time'=>now(),
            'user_id'=>$this->faker->numberBetween(1,10),
            'follower_user_id'=>$this->faker->numberBetween(1,10),
        ];
    }
}
