<?php

namespace Database\Seeders;

use App\Enums\RolesEnum;
use App\Enums\RoomTypes;
use App\Models\Reservation;
use App\Models\Review;
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

        foreach (RoomTypes::cases() as $roomType) {
            for ($i = 0; $i < 4; $i++) {
                // Create the room
                $room = Room::factory()->create([
                    'room_type' => $roomType,
                    'picture_path' => 'room_pictures/' . $roomType->value . '-room-' . ($i + 1) . '.jpg'
                ]);

                // Create 5 reviews, each with a different user
                for ($j = 0; $j < 5; $j++) {
                    Review::factory()->create([
                        'room_id' => $room->id,
                        'user_id' => User::factory()->create()->id // Create a new user for each review
                    ]);
                }
            }
        }



        $rooms = Room::all();
        foreach ($rooms as $room) {
        Reservation::factory()->create([
            'room_id' => $room->id
        ]);
        }
    }
}
