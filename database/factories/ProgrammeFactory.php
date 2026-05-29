<?php

namespace Database\Factories;

use App\Models\Programme;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProgrammeFactory extends Factory
{
    protected $model = Programme::class;

    public function definition(): array
    {
        $start = fake()->dateTimeBetween('-1 year', '+1 year');
        $end   = (clone $start)->modify('+'.fake()->numberBetween(1, 30).' days');
        return [
            'name'       => fake()->sentence(3),
            'type'       => fake()->randomElement(['training', 'competition', 'bootcamp']),
            'start_date' => $start,
            'end_date'   => $end,
        ];
    }
}