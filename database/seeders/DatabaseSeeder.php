<?php

namespace Database\Seeders;

use App\Enums\RolesEnum;
use App\Models\Reservation;
use App\Models\Room;
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
        User::factory(10)->create(['password' => 'password']);

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'manager@example.com',
            'password' => 'password',
            'role' => RolesEnum::MANAGER,
        ]);

        Room::factory()->count(15)->create();

        Reservation::factory()->count(15)->create();
    }
}
