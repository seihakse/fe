<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Event;
use Illuminate\Support\Carbon;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Event>
 */
class EventFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
{
    return [
        'title' => 'FE Engineering Day ' . $this->faker->year,
        'description' => $this->faker->paragraph(3),
        'date' => Carbon::now()->addDays(rand(10, 365)),
        'location' => $this->faker->randomElement(['RUPP Main Campus', 'RUPP Engineering Building']),
        'cover_image' => 'events/cover-'.$this->faker->unique()->numberBetween(1,5).'.jpg',
        'reg_deadline' => Carbon::now()->addDays(rand(1, 9)),
    ];
}
}
