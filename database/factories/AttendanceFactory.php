<?php

namespace Database\Factories;

use App\Models\Attendance;
use App\Models\Activity;
use App\Models\Student;
use Illuminate\Database\Eloquent\Factories\Factory;

class AttendanceFactory extends Factory
{
    protected $model = Attendance::class;

    public function definition(): array
    {
        return [
            'activity_id' => Activity::factory(),
            'student_id'  => Student::factory(),
            'status'      => fake()->randomElement(['attended', 'absent']),
        ];
    }
}