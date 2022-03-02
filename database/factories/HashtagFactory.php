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
            'hashtag_creation_time'=>now(),
            'tooti_id'=>$this->faker->numberBetween(1,10),
            'profile_id'=>$this->faker->numberBetween(1,10),
            'comment_id'=>$this->faker->numberBetween(1,10),
            'hashtag_main_id'=>$this->faker->numberBetween(1,10),
        ];
    }
}
