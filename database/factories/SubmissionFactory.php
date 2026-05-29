<?php

namespace Database\Factories;

use App\Models\Submission;
use App\Models\Programme;
use App\Models\Project;
use App\Models\Student;
use Illuminate\Database\Eloquent\Factories\Factory;

class SubmissionFactory extends Factory
{
    protected $model = Submission::class;

    public function definition(): array
    {
        return [
            'programme_id'   => Programme::factory(),
            'project_id'     => Project::factory(),
            'student_id'     => Student::factory(),
            'submission_date'=> fake()->dateTimeBetween('-1 year', 'now'),
            'data'           => json_encode([
                'field1' => fake()->word(),
                'field2' => fake()->numberBetween(1, 100),
            ]),
        ];
    }
}