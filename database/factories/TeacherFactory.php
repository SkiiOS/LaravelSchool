<?php

namespace Database\Factories;

use App\Models\Teacher;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Teacher>
 */
class TeacherFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $randomNumber = fake()->numberBetween(1000000000, 9999999999);

        return [
            'name' => fake()->name(),
            'niy' => $randomNumber,
            'nly' => $randomNumber,
            'subject_id' => null,
            'start_date' => fake()->dateTimeBetween('-10 years', 'now')->format('Y-m-d'),
        ];
    }
}
