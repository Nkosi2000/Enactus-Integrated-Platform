<?php

namespace Database\Factories;

use App\Models\Award;
use App\Models\Student;
use App\Models\Project;
use Illuminate\Database\Eloquent\Factories\Factory;

class AwardFactory extends Factory
{
    protected $model = Award::class;

    public function definition(): array
    {
        return [
            'student_id' => Student::factory(),
            'project_id' => Project::factory(),
            'name'       => fake()->sentence(4),
            'type'       => fake()->randomElement(['internal', 'external']),
            'date'       => fake()->dateTimeBetween('-2 years', 'now'),
        ];
    }
}