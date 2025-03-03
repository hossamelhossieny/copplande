<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Database\Seeders\AboutSectionSeeder;
use Database\Seeders\ServiceSeeder;
use Database\Seeders\SubServiceSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        $this->call([
            AboutSectionSeeder::class,
            ServiceSeeder::class,
            SubServiceSeeder::class,
        ]);
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'admin',
            'email' => 'admin@admin.com',
            'password' => bcrypt('123123')
        ]);
    }
}
