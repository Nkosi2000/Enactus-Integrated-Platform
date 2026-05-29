<?php

namespace Database\Factories;

use App\Models\Student;
use App\Models\Users;
use App\Models\University;
use App\Models\Campus;
use Illuminate\Database\Eloquent\Factories\Factory;

class StudentFactory extends Factory
{
    protected $model = Student::class;

    public function definition(): array
    {
        return [
            'users_id'                       => Users::factory()->state(['role' => 'student']),
            'university_id'                 => University::inRandomOrder()->first()->id,
            'campus_id'                     => Campus::inRandomOrder()->first()->id,
            'faculty_id'                    => null, // we'll add later
            'year_of_study'                 => fake()->numberBetween(1, 5),
            'status'                        => 'active',
            'gender'                        => fake()->randomElement(['male', 'female', 'non_binary', 'prefer_not_to_say']),
            'population_group'              => fake()->randomElement(['black_african', 'coloured', 'indian_or_asian', 'white', 'other', 'prefer_not_to_say']),
            'country_of_citizenship'        => 'ZA',
            'preferred_language'            => fake()->randomElement(['en', 'zu', 'xh', 'af']),
            'self_identified_home_language' => fake()->randomElement(['english', 'isizulu', 'isixhosa', 'afrikaans', 'other']),
        ];
    }

    public function alumni(): static
    {
        return $this->state(fn (array $attributes) => [
            'status' => 'alumni',
        ]);
    }

    public function inactive(): static
    {
        return $this->state(fn (array $attributes) => [
            'status' => 'inactive',
        ]);
    }
}