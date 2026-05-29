<?php

namespace Database\Factories;

use App\Models\Activity;
use App\Models\Programme;
use Illuminate\Database\Eloquent\Factories\Factory;

class ActivityFactory extends Factory
{
    protected $model = Activity::class;

    public function definition(): array
    {
        return [
            'programme_id' => Programme::factory(),
            'name'         => fake()->sentence(2),
            'date'         => fake()->dateTimeBetween('-1 year', '+1 year'),
            'type'         => fake()->randomElement(['workshop', 'meeting', 'expo', 'field_visit', 'other']),
        ];
    }
}