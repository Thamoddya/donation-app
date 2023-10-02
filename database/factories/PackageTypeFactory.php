<?php

namespace Database\Factories;

use App\Models\PackageType;
use Illuminate\Database\Eloquent\Factories\Factory;

class PackageTypeFactory extends Factory
{
    protected $model = PackageType::class;
    private $names = ['Education', 'Medical', 'Charitable'];
    public function definition(): array
    {
        shuffle($this->names);
        return [
            'name' => array_shift($this->names)
        ];
    }
}
