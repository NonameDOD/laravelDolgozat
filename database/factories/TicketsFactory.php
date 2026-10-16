<?php

namespace Database\Factories;

use App\Models\tickets;
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
            'status' => fake()->name(),
        ];
    }
}
