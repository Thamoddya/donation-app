<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Role;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {


        \App\Models\PackageType::factory(3)->create();
        \App\Models\Package::factory(10)->create();
        \App\Models\Role::factory(2)->create();
         \App\Models\User::factory(1)->create();

    }
}
