<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class MentionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [

            'mention_time'=>$this->faker->time,
            'tooti_id'=>$this->faker->numberBetween(1,2),
            'profile_id'=>$this->faker->numberBetween(1,2),
            'comment_id'=>$this->faker->numberBetween(1,2),
            'mentioned_user_id'=>$this->faker->numberBetween(1,2),
            'mentioner_user_id'=>$this->faker->numberBetween(1,2),
        ];
    }
}
