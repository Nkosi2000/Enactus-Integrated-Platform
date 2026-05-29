<?php

namespace Database\Factories;

use App\Models\Project;
use App\Models\University;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProjectFactory extends Factory
{
    protected $model = Project::class;

    public function definition(): array
    {
        return [
            'name'           => fake()->catchPhrase(),
            'university_id'  => University::inRandomOrder()->first()->id,
            'start_date'     => fake()->dateTimeBetween('-2 years', 'now'),
            'current_stage'  => fake()->randomElement(['startup', 'scaleup', 'completed', 'on_hold']),
            'sector'         => fake()->randomElement(['Agriculture', 'Technology', 'Health', 'Education', 'Energy', 'Water']),
            'description'    => fake()->paragraph(),
        ];
    }
}