<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Database\Seeders\FaitSeeder;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     */
    public function run(): void
    {
        User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        $this->call(FaitSeeder::class);
    }
}
