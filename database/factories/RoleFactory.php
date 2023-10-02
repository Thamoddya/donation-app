<?php

namespace Database\Factories;

use App\Models\Role;
use Illuminate\Database\Eloquent\Factories\Factory;

class RoleFactory extends Factory
{
    protected $model = Role::class;

    private $names = ['Admin', 'Donor'];

    public function definition(): array
    {
        shuffle($this->names);
        return [
            'name' => array_shift($this->names)
        ];
    }
}
