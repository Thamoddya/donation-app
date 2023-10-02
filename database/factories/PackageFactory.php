<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PackageFactory extends Factory
{

    public function definition(): array
    {
        return [
            'title' => fake()->name(),
            'description' => fake()->sentence(),
            'img_path' => fake()->filePath(),
            'all_points' => fake()->numberBetween(1000,10000),
            'package_id'=>fake()->numberBetween(1,3)
        ];
    }
}
