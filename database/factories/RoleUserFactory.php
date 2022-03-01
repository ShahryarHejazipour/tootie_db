<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class RoleUserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'role_id' => $this->faker->numberBetween(1,10),
            'user_id' => $this->faker->numberBetween(1,10),
        ];
    }
}
