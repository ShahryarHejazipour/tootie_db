<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class HashtagCommentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [

            'hashtag_id'=>$this->faker->numberBetween(1,10),
            'comment_id'=>$this->faker->numberBetween(1,10),
        ];
    }
}
