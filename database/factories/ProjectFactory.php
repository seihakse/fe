<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Project;
use App\Models\User;
use App\Models\Event;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Project>
 */
class ProjectFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
        'title' => $this->faker->sentence(3),
        'description' => $this->faker->paragraph(5),
        'image' => $this->faker->imageUrl(640, 480, 'projects', true),
        'user_id' => function () {
            return User::inRandomOrder()->first()?->id ?? User::factory()->create()->id;
        },
        'event_id' => function () {
            return Event::inRandomOrder()->first()?->id ?? Event::factory()->create()->id;
        },
        'approved' => $this->faker->boolean(80),
    ];
    }
}
