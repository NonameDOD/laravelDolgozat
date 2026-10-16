<?php

namespace Database\Seeders;

use App\Models\events;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EventsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        events::factory()->count(5)->create();
    }
}
