<?php

namespace Database\Factories;

use App\Models\Classroom;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Classroom>
 */
class ClassroomFactory extends Factory
{
    /**
     * Cache pool of class combinations.
     */
    protected static array $pool = [];

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        if (empty(self::$pool)) {
            $grades = ['10', '11', '12'];
            $majors = ['PPLG', 'DKV', 'ANIMASI'];
            foreach ($grades as $grade) {
                foreach ($majors as $major) {
                    for ($i = 1; $i <= 4; $i++) {
                        self::$pool[] = [
                            'name' => "{$grade}{$major}{$i}",
                            'major' => $major,
                        ];
                    }
                }
            }
            shuffle(self::$pool);
        }

        $class = array_pop(self::$pool);

        return [
            'name' => $class ? $class['name'] : fake()->unique()->numerify('1#DKV#'),
            'major' => $class ? $class['major'] : 'DKV',
        ];
    }
}
