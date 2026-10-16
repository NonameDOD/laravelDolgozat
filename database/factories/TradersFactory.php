<?php

namespace Database\Factories;

use App\Models\events;
use App\Models\tickets;
use App\Models\traders;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<traders>
 */
class TradersFactory extends Factory
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
            'description' => fake()->sentence(),
            'country' => fake()->country(),
            'events_id' => events::inRandomOrder()->first()->id ?? events::factory(),
            
        ];
    }
}
