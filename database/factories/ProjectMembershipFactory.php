<?php

namespace Database\Factories;

use App\Models\ProjectMembership;
use App\Models\Student;
use App\Models\Project;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProjectMembershipFactory extends Factory
{
    protected $model = ProjectMembership::class;

    public function definition(): array
    {
        $start = fake()->dateTimeBetween('-2 years', 'now');
        return [
            'student_id' => Student::factory(),
            'project_id' => Project::factory(),
            'role'       => fake()->randomElement(['President', 'Vice President', 'Project Lead', 'Member']),
            'start_date' => $start,
            'end_date'   => fake()->optional(0.7)->dateTimeBetween($start, 'now'),
        ];
    }
}