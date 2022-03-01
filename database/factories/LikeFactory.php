<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class LikeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [

            'tooti_like_time'=>$this->faker->time,
            'user_id'=>$this->faker->numberBetween(1,10),
            'tooti_id'=>$this->faker->numberBetween(1,10),
        ];
    }
}
