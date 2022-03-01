<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CommentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [

            'tooti_comment_time'=>now(),
            'comment_text'=>$this->faker->text,
            'user_id'=>$this->faker->numberBetween(1,10),
            'tooti_id'=>$this->faker->numberBetween(1,10),
        ];
    }
}
