<?php

namespace Database\Factories;

use App\Enums\RolesEnum;
use App\Models\Room;
use App\Models\User;
use Carbon\Carbon;
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

        $startRange = Carbon::now()->toDateString();
        $endRange = Carbon::now()->addDays(14)->toDateString();

        $startDate = $this->faker->dateTimeBetween($startRange, $endRange);
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
