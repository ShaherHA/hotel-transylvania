<?php

namespace Database\Factories;

use App\Enums\RoomStatuses;
use App\Enums\RoomTypes;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Room>
 */
class RoomFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'room_number' => $this->faker->buildingNumber(),
            'room_type' => $this->faker->randomElement(RoomTypes::cases())->value,
            'status' => $this->faker->randomElement(RoomStatuses::cases())->value,
            'capacity' => $this->faker->numberBetween(1, 6),
            'base_price' => $this->faker->numberBetween(10, 1000),
        ];
    }
}
