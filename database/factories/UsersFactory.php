<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UsersFactory extends Factory
{
    protected static ?string $password;

    public function definition(): array
    {
        return [
            'given_name'        => fake()->firstName(),
            'surname'          => fake()->lastName(),
            'email'             => fake()->unique()->safeEmail(),
            'email_verified_at' => now(),
            'password'          => static::$password ??= Hash::make('password'),
            'remember_token'    => Str::random(10),
            'role'              => 'student',
        ];
    }

    public function facultyAdvisor(): static
    {
        return $this->state(fn (array $attributes) => [
            'role' => 'faculty_advisor',
        ]);
    }

    public function programmeManager(): static
    {
        return $this->state(fn (array $attributes) => [
            'role' => 'programme_manager',
        ]);
    }

    public function admin(): static
    {
        return $this->state(fn (array $attributes) => [
            'role' => 'admin',
        ]);
    }

    public function alumni(): static
    {
        return $this->state(fn (array $attributes) => [
            'role' => 'alumni',
        ]);
    }

    public function businessAdvisor(): static
    {
        return $this->state(fn (array $attributes) => [
            'role' => 'business_advisor',
        ]);
    }
}