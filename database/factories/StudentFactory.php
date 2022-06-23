<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;


class StudentFactory extends Factory
{

    public function definition()
    {
        return [
            "name" => $this->faker->name(),
            "email" => $this->faker->safeEmail,
            "mobile" => $this->faker->phoneNumber,
            "age" => $this->faker->numberBetween(25, 45),
            "gender" => $this->faker->randomElement([
                "male",
                "female",
                "others"
            ]),
            "address_info" => $this->faker->address
        ];
    }
}
