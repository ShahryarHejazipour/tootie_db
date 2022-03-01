<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class HashtagFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'hashtag_creation_time'=>$this->faker->time,
            'tooti_id'=>$this->faker->numberBetween(1,2),
            'profile_id'=>$this->faker->numberBetween(1,2),
            'comment_id'=>$this->faker->numberBetween(1,2),
            'hash_main_id'=>$this->faker->numberBetween(1,2),
        ];
    }
}
