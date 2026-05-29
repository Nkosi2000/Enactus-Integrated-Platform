<?php

namespace Database\Factories;

use App\Models\LeaderboardScore;
use App\Models\Project;
use Illuminate\Database\Eloquent\Factories\Factory;

class LeaderboardScoreFactory extends Factory
{
    protected $model = LeaderboardScore::class;

    public function definition(): array
    {
        return [
            'project_id' => Project::factory(),
            'period'     => fake()->year().'-Q'.fake()->numberBetween(1, 4),
            'score'      => fake()->randomFloat(2, 0, 1000),
            'stage'      => fake()->randomElement(['startup', 'scaleup']),
        ];
    }
}