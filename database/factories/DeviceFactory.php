<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class DeviceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'device_name'=>$this->faker->name,
            'mac_address'=>$this->faker->macAddress,
            'token'=>$this->faker->windowsPlatformToken,
            'last_time_visit'=>now(),
            'os'=>$this->faker->name,
            'ip'=>$this->faker->ipv4,
            'device_uu_id'=>$this->faker->uuid,
            'first_register_time'=>now(),
            'user_id'=>$this->faker->numberBetween(1,10),
            'tooti_id'=>$this->faker->numberBetween(1,10),
        ];
    }
}
