<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class FollowingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'following_creation_time'=>$this->faker->time,
            'user_id'=>$this->faker->numberBetween(1,2),
            'following_user_id'=>$this->faker->numberBetween(1,2),
        ];
    }
}
