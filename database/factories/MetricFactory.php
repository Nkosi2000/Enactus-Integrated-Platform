<?php

namespace Database\Factories;

use App\Models\Metric;
use App\Models\Project;
use Illuminate\Database\Eloquent\Factories\Factory;

class MetricFactory extends Factory
{
    protected $model = Metric::class;

    public function definition(): array
    {
        return [
            'project_id'       => Project::factory(),
            'reporting_period' => fake()->year().'-Q'.fake()->numberBetween(1, 4),
            'revenue'          => fake()->randomFloat(2, 0, 500000),
            'users'            => fake()->numberBetween(0, 10000),
            'jobs_created'     => fake()->numberBetween(0, 100),
            'beneficiaries'    => fake()->numberBetween(0, 5000),
            'funding_raised'   => fake()->randomFloat(2, 0, 1000000),
            'cac'              => fake()->randomFloat(2, 0, 500),
        ];
    }
}