<?php

namespace Database\Factories;

use App\Enums\RolesEnum;
use App\Models\Room;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Reservation>
 */
class ReservationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {

        $minRoom = Room::min('id');
        $maxRoom = Room::max('id');

        $minUser = User::where(
            'role', '=', RolesEnum::CUSTOMER
        )->min('id');
        $maxUser = User::where(
            'role', '=', RolesEnum::CUSTOMER
        )->max('id');

        $startDate = $this->faker->dateTimeBetween('2025-05-30', '2025-06-06');
        $duration = $this->faker->numberBetween(2, 5);
        $endDate = (clone $startDate)->modify("+{$duration} days");
        return [
            'room_id' => $this->faker->numberBetween($minRoom, $maxRoom),
            'user_id' => $this->faker->numberBetween($minUser, $maxUser),
            'start_date' => $startDate,
            'end_date' => $endDate,
        ];
    }
}
