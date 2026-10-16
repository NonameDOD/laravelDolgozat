<?php

namespace Database\Factories;

use App\Models\events;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<events>
 */
class EventsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->name(),
            'time' => now(),
            'address' => fake()->address(),
            
        ];
    }
}
