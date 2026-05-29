<?php

namespace Database\Factories;

use App\Models\LmsProgress;
use App\Models\Student;
use App\Models\LmsModule;
use Illuminate\Database\Eloquent\Factories\Factory;

class LmsProgressFactory extends Factory
{
    protected $model = LmsProgress::class;

    public function definition(): array
    {
        return [
            'student_id'        => Student::factory(),
            'module_id'         => LmsModule::factory(),
            'completion_status'  => fake()->randomElement(['not_started', 'in_progress', 'completed']),
            'score'             => fake()->optional(0.8)->randomFloat(2, 0, 100),
        ];
    }
}