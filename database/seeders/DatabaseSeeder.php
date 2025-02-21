<?php

namespace Database\Seeders;

use App\Models\SubService;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory()->create([
            'name' => 'Admin',
            'username' => 'Admin',
            'email' => 'admin@example.com',
            'role' => 'admin',
            'password' => '123123'
        ]);

        User::factory()->create([
            'name' => 'Customer',
            'username' => 'Customer',
            'email' => 'customer@example.com',
            'role' => 'customer',
            'password' => '123123'
        ]);

        User::factory()->create([
            'name' => 'Manager',
            'username' => 'Manager',
            'email' => 'manager@example.com',
            'role' => 'manager',
            'password' => '123123'
        ]);

        $this->call([
            ServiceSeeder::class,
            SubServiceSeeder::class,
        ]);
    }
}
