<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class NotificationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'isSend'=>$this->faker->boolean,
            'notify_time_creation'=>$this->faker->time,
            'like_id'=>$this->faker->numberBetween(1,10),
            'comment_id'=>$this->faker->numberBetween(1,10),
            're_tooti_id'=>$this->faker->numberBetween(1,10),
            'following_id'=>$this->faker->numberBetween(1,10),
            'user_id'=>$this->faker->numberBetween(1,10),
            'device_id'=>$this->faker->numberBetween(1,10),
            'mention_id'=>$this->faker->numberBetween(1,10),
            'tooti_id'=>$this->faker->numberBetween(1,10),

        ];
    }
}
