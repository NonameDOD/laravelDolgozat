<?php

namespace Database\Factories;

use App\Models\events;
use App\Models\tickets;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<tickets>
 */
class TicketsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'status' => fake()->word(),
            'events_id' => events::inRandomOrder()->first()->id ?? events::factory(),
            'user_id' => User::inRandomOrder()->first()->id ?? User::factory()
        ];
    }
}
