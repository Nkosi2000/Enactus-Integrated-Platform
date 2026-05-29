<?php

namespace Database\Factories;

use App\Models\LmsModule;
use Illuminate\Database\Eloquent\Factories\Factory;

class LmsModuleFactory extends Factory
{
    protected $model = LmsModule::class;

    public function definition(): array
    {
        return [
            'title'    => fake()->sentence(3),
            'category' => fake()->randomElement(['Entrepreneurship', 'Finance', 'Marketing', 'Operations', 'Leadership']),
            'content'  => fake()->paragraphs(3, true),
        ];
    }
}