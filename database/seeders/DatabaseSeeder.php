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
        User::factory(15)->create([
            'password' => 'password',
            'role' => RolesEnum::CUSTOMER
        ]);

        User::factory()->create([
            'email' => 'manager@example.com',
            'password' => 'password',
            'role' => RolesEnum::MANAGER,
        ]);

        Room::factory()->count(15)->create();
        $rooms = Room::all();
        foreach ($rooms as $room) {
        Reservation::factory()->create([
            'room_id' => $room->id
        ]);
        }
    }
}
