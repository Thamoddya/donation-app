<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class UserFactory extends Factory
{
    public function definition(): array
    {
        return [
            'name' => 'Test User',
            'email' => 'admin@example.com',
            'address'=>'Sri Lanka',
            'username'=>"admin",
            'role_id'=>'2',
            'password'=>'password',
        ];
    }

    public function unverified(): static
    {
        return $this->state(fn (array $attributes) => [
            'email_verified_at' => null,
        ]);
    }
}
