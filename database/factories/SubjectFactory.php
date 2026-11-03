<?php

namespace Database\Factories;

use App\Models\Subject;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Subject>
 */
class SubjectFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->unique()->randomElement([
                'Matematika',
                'Bahasa Indonesia',
                'Bahasa Inggris',
                'Pemrograman Web',
                'Pemrograman Berorientasi Objek',
                'Basis Data',
                'Informatika',
                'Projek Kreatif dan Kewirausahaan',
                'Pendidikan Agama dan Budi Pekerti',
                'Pendidikan Jasmani dan Rohani',
                'Sejarah Indonesia',
                'Sistem Operasi Komputer',
            ]),
        ];
    }
}
