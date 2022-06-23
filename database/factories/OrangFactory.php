<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class OrangFactory extends Factory
{
    public function definition()
    {
        return [
            "name" => $this->faker->name(),
            "address_info" => $this->faker->address
        ];
    }
}
